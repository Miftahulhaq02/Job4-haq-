@extends('layouts.app')

@section('title', 'Profil Pengguna')

@section('content')

    <div class="container mt-4 d-flex justify-content-center">
        <div class="card shadow border-primary" style="width: 600px;">
            <div class="card-header bg-primary text-white text-center">
                <h1 class="text-5xl font-bold mb-0">Profil Saya</h1>
            </div>
            <div class="card-body bg-light text-center">
                <!-- Foto bulat tidak melar -->
                <img src="{{ asset($profile['profile_picture']) }}" 
                     alt="Profile Picture" 
                     width="200" height="200"
                     class="rounded-circle border border-3 border-primary mb-3"
                     style="object-fit: cover;">
                     
                <h3 class="text-primary">{{ $profile['name'] }}</h3>
                <p class="text-muted">Email : {{ $profile['email'] }}</p>
                <p class="text-dark">Bio: {{ $profile['bio'] }}</p>

                @if(count($profile['skills']) > 0) 
                    <h5 class="text-primary mt-4">Skills:</h5>
                    <ul class="list-unstyled">
                        @foreach($profile['skills'] as $skill)
                            <li class="text-dark">• {{ $skill }}</li>
                        @endforeach
                    </ul>   
                @else
                    <p class="text-secondary">Tidak ada skill yang ditampilkan</p> 
                @endif
            </div>
        </div>
    </div>

@endsection
