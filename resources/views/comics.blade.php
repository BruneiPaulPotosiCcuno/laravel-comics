@extends('layouts.app')

@section('page-title')
    Comics
@endsection

@section('main-content')
<section class="hero mb-5">
</section>

<section class="comics-section">
    <div class="container">
        <h2 class="mb-4 ">Current Series</h2>

        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 g-3">
            @foreach ($comics as $comic)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
                        <div class="card-body">
                            <h6 class="card-title">{{ $comic['title'] }}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection