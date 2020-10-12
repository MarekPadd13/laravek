@extends('layouts.app')
@section('title', $article->meta_title)
@section('meta_keywords', $article->meta_keywords)
@section('meta_description', $article->meta_desctription)
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><a href="{{route('blog.article', $article->slug)}}"> {{$article->title}}</a></h1>
            </div>
            <p>{!!$article->description!!}</p>
        </div>
    </div>
@endsection

