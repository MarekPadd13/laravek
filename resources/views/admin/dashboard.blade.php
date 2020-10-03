@extends('admin.layouts.admin_app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="jumbotron">
                <p>
                    <span class="badge badge-primary">Категория</span>: 0
                </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="jumbotron">
                <p>
                    <span class="badge badge-primary">Материалы</span>: 0
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
                <a href="#" class="list-group-item">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Первая категория</h5>
                </div>
                <p class="mb-1">Материал</p>
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="list-group">
                <a href="#" class="btn btn-block btn-success"> Создать материал</a>
                <a href="#" class="list-group-item">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Первый материал</h5>
                </div>
                <p class="mb-1">Категория</p>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
