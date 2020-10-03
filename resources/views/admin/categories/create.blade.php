@extends('admin.layouts.admin_app')
@section('content')
<div class="container">
    @component('admin.components.breadcrumb')
        @slot('parent') Главная @endslot
            @slot('title') Создание категории @endslot
            @slot('active') Категории @endslot
    @endcomponent
    <hr />
    <form method="POST"  action="{{route('admin.categories.store')}}">
        @csrf
        @include('admin.categories.partials.form')
    </form>
</div>
@endsection
