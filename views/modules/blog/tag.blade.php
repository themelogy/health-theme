@extends('layouts.master')

@section('content')
    @component('partials.components.title', [
'breadcrumb' => 'blog.tag'
])
        <h1>{{ trans('tag::tags.tag') }} : {{ $tag->name }}</h1>
    @endcomponent
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <main class="main-content">
						<div class="row">
                        @foreach($posts as $post)
                            @include('blog::partials.post')
                        @endforeach
						</div>
                        <div class="text-center">
                            {!! $posts->render() !!}
                        </div>
                </main>
            </div>
            <div class="col-md-3">
                @include('blog::partials.sidebar')
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
@endsection
