@extends('layouts.master')

@section('content')
    @component('partials.components.title', [
'breadcrumb' => 'blog'
])
        <h1>{{ trans('themes::theme.blog title') }}</h1>
        @slot('subtitle')
            {{ trans('themes::theme.blog sub title') }}
        @endslot
    @endcomponent

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <main class="main-content">
                    <div class="row row-height">
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
