<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResearchMain;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth; // Importa la fachada Auth para acceder al usuario autenticado
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class GitHubController extends Controller
{
    public function importGitHubRepos(Request $request)
    {
        $githubToken = env('GITHUB_TOKEN');

        $client = new Client();

        // Obtiene el usuario autenticado
        $user = Auth::user();
        
        // Obtiene el username de GitHub del usuario autenticado
        $githubUsername = $user->userinfo->username ?? null;

        if(!$githubUsername) {
            return redirect()->back()->with('error', 'GitHub username not found!');
        }

        // Realiza una solicitud GET a la API de GitHub
        $response = $client->get("https://api.github.com/users/$githubUsername/repos", [
            'headers' => ['Authorization' => "token $githubToken"]
        ]);

        // Decodifica la respuesta JSON
        $repositories = json_decode($response->getBody()->getContents());

        // Itera a través de los repositorios y crea/actualiza registros en la DB
        foreach ($repositories as $repo) {
            $research = ResearchMain::updateOrCreate(
                ['uuid' => $repo->id], 
                [
                    'title_research' => $repo->name,
                    // ... Otros campos relevantes del repo que quieras almacenar...
                ]
            );
        }

        return redirect()->back()->with('status', 'Repositories imported successfully!');
    }

    public function showUserRepositories(): View
    {
        $name_user = Auth::user()->name_user; // Obtiene el name_user del usuario autenticado
        
        // Verifica si el $name_user existe antes de hacer la solicitud HTTP
        if($name_user) {
            $response = Http::get("https://api.github.com/users/{$name_user}/repos");
            $repositories = $response->json();
        } else {
            $repositories = [];
        }
        
        return view('dashboard', ['repositories' => $repositories]);
    }
    

    public function showNasaRepositories(): View
    {
        $response = Http::get('https://api.github.com/users/nasa/repos');
        $repositories = $response->json();
        return view('repositories', ['repositories' => $repositories]);
    }
}

