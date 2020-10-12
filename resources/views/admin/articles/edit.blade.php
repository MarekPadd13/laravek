@extends('admin.layouts.admin_app')
@section('content')
<div class="container">
    @component('admin.components.breadcrumb')
        @slot('parent') Главная @endslot
            @slot('title') Редактирование новости @endslot
            @slot('active') Новости @endslot
    @endcomponent
    <hr />
    <form method="POST"  action="{{route('admin.articles.update', $article)}}">
        <input type="hidden" name="_method" value="put">
        @csrf
        @include('admin.articles.partials.form')
    </form>
</div>
@endsection
