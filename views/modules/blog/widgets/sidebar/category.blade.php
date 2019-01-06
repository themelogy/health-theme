<div class="widget widget-category">
    <h3 class="widget-title color_second">{{ trans('blog::category.title.category') }}</h3>
    <div class="block_content">
        <ul class="list-categories list-categories_widget">
            @foreach($categories as $category)
            <li><a href="{{ $category->url }}"><span class="list-categories__name">{{ $category->name }}</span><span class="list-categories__amout color_primary">{{ $category->load('posts')->posts()->count() }}</span></a></li>
            @endforeach
        </ul>
    </div>
</div>
