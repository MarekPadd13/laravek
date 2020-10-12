@extends('admin.layouts.admin_app')
@section('content')
<div class="container">
    @component('admin.components.breadcrumb')
        @slot('parent') Главная @endslot
            @slot('title') Создание новости @endslot
            @slot('active') Новости @endslot
    @endcomponent
    <hr />
    <form method="POST"  action="{{route('admin.articles.store')}}">
        @csrf
        <input type="hidden" name="created_by">
        @include('admin.articles.partials.form')
    </form>
</div>
@endsection
