<?php

namespace App\Http\Controllers\API\v2;

use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function index()
    {
        $response = [
            'success' => true,
            'message' => "Welcome to API version 2",
        ];

        return response()->json($response, 200);
    }
}
