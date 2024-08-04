<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ApiController extends Controller
{
    public function store()
    {
        $data = new User();
        $data->name = 'John Doe';
        $data->email = 'john@example.com';
        $data->password = bcrypt('password');
        $data->save();
        return response()->json(['message' => 'usuario creado exitosamente'], 201);

    }

    public function index()
    {
        //logica para enciar datos a la Api
        $data = User::all();
        return response()->json(['users' => $data], 200);
    }
}
