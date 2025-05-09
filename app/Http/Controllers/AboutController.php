<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $about = [
            'title' => 'Tentang Saya',
            'description' => 'Saya adalah seorang pengendong handal.',
            'mission' => 'Mengenggendong Legend Legend Beban.',
            'vision' => 'Menjadi top global.',
            'hobbies' => ['Ngegendong', 'Baca Buku', 'Mengaji']
        ];
    
        return view('about', compact('about'));
    }
}
