@extends('layouts.page.layout')
@section('main')
    <section class="jumbotron text-center">
        <div class="container">
            <h1>Album example</h1>
            <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
            <p>
                <a href="#" class="btn btn-primary my-2">Main call to action</a>
                <a href="#" class="btn btn-secondary my-2">Secondary action</a>
            </p>
        </div>
    </section>
@endsection
@section('content')
    <posts-component :dataitem = "{{json_encode($posts)}}"></posts-component>
    <ajax-component></ajax-component>
@endsection

