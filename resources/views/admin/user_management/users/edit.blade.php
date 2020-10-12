@extends('admin.layouts.admin_app')
@section('content')
<div class="container">
    @component('admin.components.breadcrumb')
        @slot('parent') Главная @endslot
            @slot('title') Редактирование пользователя @endslot
            @slot('active') Пользователь @endslot
    @endcomponent
    <hr />
    <form method="POST"  action="{{route('admin.user_management.users.update', $user)}}">
        {{method_field("PUT")}}
        @csrf
        @include('admin.user_management.users.partials.form')
    </form>
</div>
@endsection
