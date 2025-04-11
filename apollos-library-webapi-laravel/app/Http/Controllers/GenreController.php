<?php

namespace App\Http\Controllers;

use OpenApi\Attributes as OA;

#[OA\Schema(title: "Genre", schema: "/api/genre")]
class GenreController extends Controller
{
    #[OA\Get(path: "/")]
    #[OA\Response(response: "200", description: "Array of genres with their names and ids")]
    public function get()
    {
        return [];
    }
}
