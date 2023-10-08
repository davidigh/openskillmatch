<?php

use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


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

Route::middleware(['auth'])->group(function () {
    Route::get('/createpost', function () {
        return view('createpost');
    });
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
});


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

    // Check if the code has been used
    if (Cache::has('used_auth_code_' . $code)) {
        Log::error('Authorization code reused', ['code' => $code]);
        return redirect('/')->withErrors(['error' => 'Invalid authorization code']);
    }

    // Mark the code as used
    Cache::put('used_auth_code_' . $code, true, 600); // Store for 10 minutes just to prevent immediate reuse

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

    // Buscar un UserInfo existente por su GitHub ID
    $userInfo = UserInfo::where('github_id', $githubUser['id'])->first();

    if (!$userInfo) {
        // Si el userInfo no se encuentra, crea un nuevo usuario y un nuevo UserInfo.
        // Asegúrate de validar y sanear los datos antes de guardarlos en tu base de datos
        // Suponiendo que el email es crucial y debes asegurarte de que existe
        // Si no hay un email, crear uno ficticio para cumplir con la restricción UNIQUE de la base de datos (si existe).
        $email = $githubUser['email'] ?? "user{$githubUser['id']}@noemail.com"; 

        // Usa un login para el nombre si el nombre está vacío.
        $name = $githubUser['name'] ?? $githubUser['login']; 

        // Crea el usuario en la tabla `users`
        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt(Str::random(16)), // Usa Str::random() en lugar de str_random()
            // ... [otros campos según sea necesario]
        ]);

        
        // Crea la información de GitHub en la tabla `userinfo`
        $userInfo = UserInfo::create([
            'user_id' => $user->id,
            'name_user' => $githubUser['login'],
            'email' => $email,
            'username' => $githubUser['login'],
            'github_id' => $githubUser['id'],
            'github_avatar' => $githubUser['avatar_url'],
            'github_creation_date' => Carbon\Carbon::parse($githubUser['created_at']),
            'github_last_update' => Carbon\Carbon::parse($githubUser['updated_at']),
            'register_time' => now(),
            'slug' => Str::slug($githubUser['login']),
            // 'photo_profile' => [alguna URL o path si lo necesitas],
            // 'github_token' => $token, // Si lo necesitas almacenar
            // 'github_refresh_token' => [si se proporciona]
        ]);
    } else {
        // Si el UserInfo se encuentra, obtén el User asociado.
        $user = $userInfo->user; // Asume que tienes una relación `user` definida en tu modelo UserInfo
    }

    // Iniciar sesión con el usuario
    Auth::login($user, $remember = true);

    // Redirigir a una ubicación deseada
    return redirect('/dashboard');
});



require __DIR__.'/auth.php';
