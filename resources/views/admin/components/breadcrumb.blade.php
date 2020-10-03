<h2>{{$title}}</h2>

<nav aria-label="breadcrumb">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{$parent}}</a> </li>
        <li class="breadcrumb-item active">{{$active}} </li>
    </ul>
</nav>
