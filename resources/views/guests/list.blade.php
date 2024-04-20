@extends('layouts.app')

@section('content')
<section id="movies">
    <div class="container">
        <div class="row">



            @foreach($movies as $movie)
            <div class="card">
                <div class="title">
                    <h3>{{$movie['title']}}</h3>
                    <p>{{$movie['original_title']}}</p>
                </div>
                <div class="vote">
                    <span>{{$movie['vote']}}/10</span>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</section>
@endsection