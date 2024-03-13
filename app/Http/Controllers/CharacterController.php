<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CharacterController extends Controller
{
    public function getAllCharacters()
{
    $response = Http::withoutVerifying()->get('https://rickandmortyapi.com/api/character/');

    if ($response->successful()) {
        $characters = $response->json()['results'];
        return response()->json($characters);
    } else {
        return response()->json(['error' => 'No se pudo obtener los personajes'], 500);
    }
}


    public function getCharacter($id)
    {
        $response = Http::withoutVerifying()->get("https://rickandmortyapi.com/api/character/{$id}");
        $character = $response->json();

        if ($response->ok()) {
            return response()->json($character);
        } else {
            return response()->json(['error' => 'Personaje no encontrado'], 404);
        }
    }
}
