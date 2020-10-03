@extends('layouts.page.layout')
@section('content')
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>{{$post->title}}</h2>
                    <p>{{$post->text}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
