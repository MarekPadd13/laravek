<label for="">Статус</label>
<select name="published" class="form-control">
    @if (isset($category->id))
        <option value="0" @if($category->published == 0) selected @endif>Не опубликовано</option>
        <option value="1" @if($category->published == 1) selected @endif>Опубликован</option>
        @else
        <option value="0">Не опубликовано</option>
        <option value="1">Опубликован</option>
    @endif
</select>
<label for="">Наименование</label>
<input class="form-control" type="text" name="title"  placeholder="Заголовок" value="@if(isset($category->title)) {{$category->title}}  @endif" required>

<label for="">Slug</label>
<input class="form-control" type="text" name="slug"  placeholder="Автоматическая генерация" value="@if(isset($category->slug)) {{$category->slug}} @endif" readonly>

<label for="">Родительская категория</label>
<select name="parent_id" class="form-control">
    <option value="0">-- без родительской категории --</option>
    @include('admin.categories.partials.categories')
</select>
<hr />
<input type="submit" class="btn btn-success" value="Сохранить">
