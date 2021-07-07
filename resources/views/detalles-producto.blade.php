@extends('layouts.app')

@section('content')
    <div style="height: 100vh; width: 100vw; background: lightgray" class="d-flex justify-content-center align-items-center">
        <div
            style="max-width: 600px; max-height: 500px;"
            class="shadow shadow-sm rounded p-0 d-flex flex-column justify-content-center align-items-center"
        >
            <img src="{{ $product_data['img'] }}" alt="Imagen" style="object-fit: cover; width: 100%;" />
            Hola {{ $product_id }}
            {{ $product_data['img'] }}
        </div>
    </div>
@endsection
