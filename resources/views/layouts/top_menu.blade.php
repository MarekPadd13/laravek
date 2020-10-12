@foreach($categories as $category)
    <ul class="navbar-nav mr-auto">
        @if(count($category->children) > 0)
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{route('blog.category', $category->slug)}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{$category->title}}</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    @include('layouts.top_menu',['categories'=> $category->children])
                </div>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link" href="{{route('blog.category', $category->slug)}}">{{$category->title}}</a>
            </li>
        @endif
    </ul>
@endforeach

