<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RickAndMortyController extends Controller
{
    public function getCharacter($id)
    {
        $url = 'https://rickandmortyapi.com/api/character/'.$id;
        $response = file_get_contents($url);
        $character = json_decode($response);

        return response()->json($character);
    }
}
