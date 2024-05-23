@extends('layouts.app')

@section('content')
    <section id="jumbotron">

    </section>
    <section id="app_comics">
        <div class="container">
            <span class="section_comics blue_ticket">
                CURRENT SERIES
            </span>
            <div class="row px-2 py-3 justify-content-center">
                <AppComics />
            </div>
            <div class="d-flex justify-content-center">
                <span class="blue_ticket text-center mb-3">
                    <a class="text-decoration-none text-white" href="##">LOAD MORE</a>
                </span>
            </div>
        </div>
    </section>
    <section id="sections_bar">
        <div class="container">
            <div class="row p-5">

                {{-- @foreach ($comics as $comic)
                    <div class="col d-flex justify-content-center align-items-center gap-2 p-3">
                        <img src="{{ $comic['thumb']}}" alt="" class="">
                        <div id="title" class="fw-semibold">{{ $comic['title'] }}</div>
                    </div>
                @endforeach --}}

            </div>
        </div>
    </section>
@endsection