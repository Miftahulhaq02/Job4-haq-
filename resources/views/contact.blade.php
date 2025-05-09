@extends('layouts.app')

@section('title', 'Contact - MyApp')

@section('content')
    <div class="container d-flex justify-content-center my-5">
        <div class="card shadow border-0 w-100" style="max-width: 700px;">
            <div class="card-header bg-primary text-white text-center py-4">
                <h1 class="display-5 mb-0">{{ $contact['title'] }}</h1>
                <p class="lead mt-2">Silakan hubungi saya melalui informasi di bawah ini</p>
            </div>

            <div class="card-body px-4 py-4">
                <div class="row mb-4">
                    <div class="col-sm-6 mb-3">
                        <h5 class="text-primary">📧 Email</h5>
                        <p class="mb-0">{{ $contact['email'] }}</p>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <h5 class="text-primary">📞 Telepon</h5>
                        <p class="mb-0">{{ $contact['phone'] }}</p>
                    </div>
                </div>

                <div class="mb-4">
                    <h5 class="text-primary">🏠 Alamat</h5>
                    <p class="mb-0">{{ $contact['address'] }}</p>
                </div>

                <div class="mb-4">
                    <h5 class="text-primary">🌐 Media Sosial</h5>
                    <ul class="list-unstyled mb-0">
                        @foreach ($contact['socials'] as $platform => $url)
                            <li>
                                <a href="{{ $url }}" class="text-decoration-none text-primary" target="_blank">
                                    🔗 {{ $platform }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="text-center mt-4">
                    <a href="{{ route('home') }}" class="btn btn-outline-primary btn-lg">⬅️ Kembali ke Beranda</a>
                </div>
            </div>
        </div>
    </div>
@endsection
