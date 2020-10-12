@extends('admin.layouts.admin_app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
           <h1>Загрузка изображений</h1>
            <form action="{{route('image.upload')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="file" class="form-control" name="image[]" />
                </div>
                <button type="submit">Загрузить</button>
            </form>
            @isset($path)
            <img src="{{asset('/storage/'.$path)}}" />
            @endisset
        </div>
    </div>
</div>

@endsection
