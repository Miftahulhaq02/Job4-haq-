<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        $contact = [
            'title' => 'Hubungi Saya',
            'email' => 'miftahhaq57@gmail.com',
            'phone' => '+62 812-3456-7890',
            'address' => 'Jl. Contoh Alamat No. 123, Jakarta',
            'socials' => [
                'Instagram' => 'https://www.instagram.com/miftahhaq02?igsh=MWNsc2Z5enh3OHJ2YQ==',
            ]
        ];

        return view('contact', compact('contact'));
    }
}
