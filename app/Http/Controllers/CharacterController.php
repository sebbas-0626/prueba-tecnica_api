<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CharacterController extends Controller
{
    public function index()
    {
        $response = Http::get('https://rickandmortyapi.com/api/character');
        $characters = $response->json()['results'];

        return response()->json($characters);
    }

    public function show($id)
    {
        $response = Http::get("https://rickandmortyapi.com/api/character/{$id}");
        $character = $response->json();

        return response()->json($character);
    }
}
