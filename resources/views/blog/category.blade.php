@extends('layouts.app')
@section('title', $category->title)
@section('content')
    <div class="container">
        @forelse($articles as $article)
        <div class="row">
            <div class="col-md-12">
                <h1><a href="{{route('blog.article', $article->slug)}}"> {{$article->title}}</a></h1>
            </div>
            <p>{!!$article->description_short!!}</p>
        </div>
        @empty
            <div class="row">
                <div class="col-md-12">
                    <h4>Пусто</h4>
                </div>
            </div>
        @endforelse
        <div class="row">
            <div class="col-md-12">
                {{$articles->links()}}
            </div>
        </div>
    </div>
@endsection

