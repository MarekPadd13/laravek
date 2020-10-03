@extends('admin.layouts.admin_app')
@section('content')
<div class="container">
    @component('admin.components.breadcrumb')
        @slot('parent') Главная @endslot
            @slot('title') Редактирование категории @endslot
            @slot('active') Категории @endslot
    @endcomponent
    <hr />
    <form method="POST"  action="{{route('admin.categories.update', $category)}}">
        <input type="hidden" name="_method" value="put">
        @csrf
        @include('admin.categories.partials.form')
    </form>
</div>
@endsection
