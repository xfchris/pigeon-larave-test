<?php

namespace App\Http\Controllers;

use E4\Pigeon\Facades\Pigeon;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function create(Request $request)
    {
        $data = $request->all();

        Pigeon::publish($data['event'], $data['body']);
        return $data;
    }
}
