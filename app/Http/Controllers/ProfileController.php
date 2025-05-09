<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {

        $profile = [
            'name' => 'Muhammad Miftahul Haq',
            'email' => 'mifahhaq57@gmail.com',
            'bio' => 'YTTA',
            'profile_picture' => 'image/dontol.jpg',
            'skills' => ['Serba bisa', 'Dll', 'Dll']
        ];
        return view('profile', compact('profile'));
    }
}