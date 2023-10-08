<?php

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/auth/redirect', function () {
    $state = Str::random(40);
    session(['github_state' => $state]);

    $queryParams = http_build_query([
        'client_id' => env('GITHUB_CLIENT_ID'),
        'redirect_uri' => env('GITHUB_REDIRECT_URI'),
        'scope' => 'user:email',
        'response_type' => 'code',
        'state' => $state, // Add state parameter
    ]);

    return Redirect::away('https://github.com/login/oauth/authorize?' . $queryParams);
});

Route::get('/auth/callback', function (Request $request) {
    $state = $request->input('state');
    $sessionState = session('github_state');

    // Validate the state parameter
    if (!$state || $state !== $sessionState) {
        \Log::error('State mismatch error');
        return redirect('/')->withErrors(['error' => 'State mismatch error']);
    }

    $code = $request->input('code');
    if (!$code) {
        \Log::error('Authorization code not received');
        return redirect('/')->withErrors(['error' => 'Authorization code not received']);
    }

    // Exchange the code for an access token
    $response = Http::post('https://github.com/login/oauth/access_token', [
        'client_id' => env('GITHUB_CLIENT_ID'),
        'client_secret' => env('GITHUB_CLIENT_SECRET'),
        'code' => $code,
        'redirect_uri' => env('GITHUB_REDIRECT_URI'),
    ]);

    Log::info('Access token response', ['response' => $response->body()]);

    if ($response->failed()) {
        return redirect('/')->withErrors(['error' => 'Failed to get access token']);
    }

    parse_str($response->body(), $accessTokenResponse);

    // Check if access token is present in the response
    if (!isset($accessTokenResponse['access_token'])) {
        Log::error('Access token not received', ['response' => $accessTokenResponse]);
        return redirect('/')->withErrors(['error' => 'Access token not received']);
    }

    // Use the access token to get user details
    $token = $accessTokenResponse['access_token'];
    $githubUser = \Http::withToken($token)->get('https://api.github.com/user')->json();

    \Log::info('GitHub user data', ['user' => $githubUser]);

    // Dump user data
    dd($githubUser);

    // Here you might want to find an existing user by their GitHub ID
    $user = User::where('github_id', $githubUser['id'])->first();

    if (!$user) {
        // If the user is not found, create a new user.
        // Ensure to validate and sanitize the data before saving it to your database
        $user = User::create([
            'name' => $githubUser['login'], // If name is not provided, use login
            'email' => $githubUser['email'], // Be cautious, as email might be null
            'github_id' => $githubUser['id'],
            // You may want to add more fields here
        ]);
    }

    // Log the user in
    Auth::login($user, $remember = true);

    // Redirect to a desired location
    return redirect('/dashboard');
    
});





require __DIR__.'/auth.php';
