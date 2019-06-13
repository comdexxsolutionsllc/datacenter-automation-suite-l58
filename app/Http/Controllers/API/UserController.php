<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return mixed
     */
    public function user(Request $request)
    {
        return $request->user();
    }
}
