<label for="">Статус</label>
<select name="published" class="form-control">
    @if (isset($article->id))
        <option value="0" @if($article->published == 0) selected @endif>Не опубликовано</option>
        <option value="1" @if($article->published == 1) selected @endif>Опубликован</option>
        @else
        <option value="0">Не опубликовано</option>
        <option value="1">Опубликован</option>
    @endif
</select>

<label for="">Наименование</label>
<input class="form-control" type="text" name="title"  placeholder="Заголовок" value="@if(isset($article->title)) {{$article->title}}  @endif" required>
<label for="">Slug</label>
<input class="form-control" type="text" name="slug"  placeholder="Автоматическая генерация" value="@if(isset($article->slug)) {{$article->slug}} @endif" readonly>
<label for="">Краткое описание</label>
<ckeditor-component  :namepost= "'description_short'" :valuepost="'{{$article->description_short ?? ''}}'" ></ckeditor-component>
<label for="">Полное описание</label>
<ckeditor-component  :namepost= "'description'" :valuepost="'{{$article->description ?? ''}}'" ></ckeditor-component>
<label for="">Родительская категория</label>
<select name="categories[]" class="form-control" multiple="">
    <option value="0">-- без родительской категории --</option>
    @include('admin.articles.partials.categories')
</select>
<label for="">Мета заголовок</label>
<input class="form-control" type="text" name="meta_title"  placeholder="Мета заголовок" value="@if(isset($article->meta_title)) {{$article->meta_title}}  @endif" />
<label for="">Мета описание</label>
<input class="form-control" type="text" name="meta_description"  placeholder="Мета описание" value="@if(isset($article->meta_description)) {{$article->meta_description}}  @endif" />
<label for="">Ключевые слова</label>
<input class="form-control" type="text" name="meta_keywords"  placeholder="Ключевые слова" value="@if(isset($article->meta_keywords)) {{$article->meta_keywords}}  @endif">
<hr />

<input type="submit" class="btn btn-success" value="Сохранить">


