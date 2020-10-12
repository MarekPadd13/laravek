@foreach($categories as $category)
<option value="@if(isset($category->id)) {{$category->id}} @endif"
        @if(isset($article->id))
            @foreach($article->categories as $article_category)
            @if($category->id == $article_category->id) selected @endif
    @endforeach
    @endif>
        {!! $delimiter  !!} {{ $category->title}}
</option>
    @if(count($category->children) > 0)
        @include('admin.articles.partials.categories',['categories' => $category->children, 'delimiter'=> " - ".$delimiter])
    @endif
@endforeach
