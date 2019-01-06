<aside class="sidebar">
    @include('blog::widgets.sidebar.search')
    @blogCategories(20, 'sidebar.category')
    @blogLatestPosts(3, 'sidebar.latest')
    <br/>
    @isset($post)
        @blogTags($post, 8, 'sidebar.tags')
    @endisset
    @isset($posts)
        @blogTags($posts, 8, 'sidebar.tags')
    @endisset
    @include('blog::widgets.sidebar.business-card')
    @include('blog::widgets.sidebar.working-hours')
</aside>
