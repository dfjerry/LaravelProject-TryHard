<div class="sidebar__item">
    <ul>
        @foreach(\App\Category::all() as $category)
            <li><a href="{{$category->getCategoryUrl()}}">{{$category->__get("category_name")}}</a></li>
        @endforeach
    </ul>
</div>
