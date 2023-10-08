<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResearchMain;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        $user = Auth::user(); // Obtén el usuario actual
    
        // Comprueba que el usuario está autenticado
        if(!$user) {
            return redirect('login');
        }
    
        $name_user = $user->name_user; // Obtén el name_user del usuario autenticado
    
        // Obtiene los repositorios del usuario desde la API de GitHub
        $response = Http::get("https://api.github.com/users/{$name_user}/repos");
        $repositories = $response->json();
    
        // Pasar los datos a la vista
        return view('dashboard', ['name_user' => $name_user, 'repositories' => $repositories]);
    }
}
