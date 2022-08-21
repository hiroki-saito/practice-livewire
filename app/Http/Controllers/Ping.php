<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ping extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return string
     */
    public function __invoke(Request $request): string
    {
        return 'Pong!';
    }
}
