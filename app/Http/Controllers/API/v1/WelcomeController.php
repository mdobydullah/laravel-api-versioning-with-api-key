<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function index()
    {
        $response = [
            'success' => true,
            'message' => "Welcome to API version 1",
        ];

        return response()->json($response, 200);
    }
}
