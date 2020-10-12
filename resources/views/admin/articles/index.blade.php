@extends('admin.layouts.admin_app')
@section('content')
<div class="container">
    @component('admin.components.breadcrumb')
        @slot('title') Список новостей @endslot
        @slot('parent') Главная @endslot
            @slot('active') Новости @endslot
    @endcomponent
    <hr />
    <a href="{{route('admin.articles.create')}}" class="btn btn-success"> Создать</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Наимнование</th>
                <th>Публикация</th>
                <th class="text-right">Действие</th>
            </tr>
        </thead>
        <tbody>
           @forelse($articles as $article)
               <tr>
                   <td>{{$article->title}}</td>
                   <td>{{$article->published}}</td>
                   <td>
                       <form onsubmit="if(confirm('Удалить?')) { return true} else {return false }"
                             action="{{route('admin.articles.destroy', $article)}}" method="post">
                           <input type="hidden" name="_method" value="delete">
                           @csrf
                           <a href="{{route('admin.articles.edit', $article)}}" class="btn btn-primary"> Редактировать</a>
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
                    {{$articles->links()}}
                </ul>
            </td>
        </tr>
        </tfoot>

    </table>
</div>
@endsection
