@extends('layouts.app')

@section('title', 'About - MyApp')

@section('content')
    <div class="container my-5">
        <div class="card shadow border-0">
            <div class="card-header bg-primary text-white text-center py-4">
                <h1 class="display-5 mb-0">{{ $about['title'] }}</h1>
                <p class="lead mt-2">{{ $about['description'] }}</p>
            </div>

            <div class="card-body p-5">
                <div class="mb-4">
                    <h3 class="text-primary">🎯 Misi</h3>
                    <p>{{ $about['mission'] }}</p>
                </div>

                <div class="mb-4">
                    <h3 class="text-primary">🌟 Visi</h3>
                    <p>{{ $about['vision'] }}</p>
                </div>

                <div>
                    <h3 class="text-primary">🎨 Hobi</h3>
                    <ul class="list-group list-group-flush">
                        @foreach ($about['hobbies'] as $hobby)
                            <li class="list-group-item bg-light">{{ $hobby }}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="text-center mt-5">
                    <a class="btn btn-outline-primary btn-lg" href="{{ route('contact') }}">💬 Hubungi Saya</a>
                </div>
            </div>
        </div>
    </div>
@endsection
