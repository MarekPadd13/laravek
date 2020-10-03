@extends('admin.layouts.admin_app')
@section('content')
<div class="container">
    @component('admin.components.breadcrumb')
        @slot('title') Список категорий @endslot
        @slot('parent') Главная @endslot
            @slot('active') Категории @endslot
    @endcomponent
    <hr />
    <a href="{{route('admin.categories.create')}}" class="btn btn-success"> Создать</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Наимнование</th>
                <th>Публикация</th>
                <th class="text-right">Действие</th>
            </tr>
        </thead>
        <tbody>
           @forelse($categories as $category)
               <tr>
                   <td>{{$category->title}}</td>
                   <td>{{$category->published}}</td>
                   <td>
                       <form onsubmit="if(confirm('Удалить?')) { return true} else {return false }"
                             action="{{route('admin.categories.destroy', $category)}}" method="post">
                           <input type="hidden" name="_method" value="delete">
                           @csrf
                           <a href="{{route('admin.categories.edit', $category)}}" class="btn btn-primary"> Редактировать</a>
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
                    {{$categories->links()}}
                </ul>
            </td>
        </tr>
        </tfoot>

    </table>
</div>
@endsection
