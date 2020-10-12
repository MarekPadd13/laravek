@extends('admin.layouts.admin_app')
@section('content')
<div class="container">
    @component('admin.components.breadcrumb')
        @slot('title') Список пользователей @endslot
        @slot('parent') Главная @endslot
            @slot('active') Пользователи @endslot
    @endcomponent
    <hr />
    <a href="{{route('admin.user_management.users.create')}}" class="btn btn-success"> Создать</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Логин</th>
                <th>Email</th>
                <th class="text-right">Действие</th>
            </tr>
        </thead>
        <tbody>
           @forelse($users as $user)
               <tr>
                   <td>{{$user->name}}</td>
                   <td>{{$user->email}}</td>
                   <td>
                       <form onsubmit="if(confirm('Удалить?')) { return true} else {return false }"
                             action="{{route('admin.user_management.users.destroy', $user)}}" method="post">
                           {{ method_field("DELETE") }}
                           @csrf
                           <a href="{{route('admin.user_management.users.edit', $user)}}" class="btn btn-primary"> Редактировать</a>
                           <button type="submit" class="btn btn-danger"> Удалить</button>
                       </form>
                   </td>
               </tr>
               @empty
               <tr>
                   <td colspan="3">Данные отсутсвуют</td>
               </tr>
           @endforelse
        </tbody>
        <tfoot>
        <tr>
            <td colspan="3">
                <ul class="pagination text-right">
                    {{$users->links()}}
                </ul>
            </td>
        </tr>
        </tfoot>

    </table>
</div>
@endsection
