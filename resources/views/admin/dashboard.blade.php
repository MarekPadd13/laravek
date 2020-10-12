@extends('admin.layouts.admin_app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="jumbotron">
                <p>
                    <span class="badge badge-primary">Категория</span>: {{$countCategories}}
                </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="jumbotron">
                <p>
                    <span class="badge badge-primary">Материалы</span>: {{$countArticles}}
                </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="jumbotron">
                <p>
                    <span class="badge badge-primary">Посетители</span>: 0
                </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="jumbotron">
                <p>
                    <span class="badge badge-primary">Посетители за сегодня</span>: 0
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="list-group">
                <a href="{{route('admin.categories.create')}}" class="btn btn-block btn-success"> Создать категорию </a>
                @forelse($categories as $category)
                    <a href="{{route('admin.categories.edit',$category)}}" class="list-group-item">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{$category->title}}</h5>
                    </div>
                    <p class="mb-1">{{$category->articles()->count()}}</p>
                    </a>
                @empty
                    <a href="#" class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Нет ни одной категории</h5>
                        </div>
                        <p class="mb-1"></p>
                    </a>
                @endforelse
            </div>
        </div>
        <div class="col-md-6">
            <div class="list-group">
                <a href="{{route('admin.articles.create')}}" class="btn btn-block btn-success"> Создать материал</a>
                @forelse($articles as $article)
                    <a href="{{route('admin.articles.edit',$article)}}" class="list-group-item">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{$article->title}}</h5>
                    </div>
                    <p class="mb-1">{{$article->categories()->pluck('title')->implode(', ')}}</p>
                    </a>
                @empty
                    <a href="#" class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Нет ни одного материала</h5>
                        </div>
                        <p class="mb-1"></p>
                    </a>
                @endforelse
            </div>
        </div>
    </div>
</div>

@endsection
