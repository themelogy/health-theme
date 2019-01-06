@extends('layouts.master')

@section('content')
    @component('partials.components.title', [
    'cover'      => $page->present()->coverImage(1600,150,'fit',80),
    'breadcrumb' => 'page'
    ])
    <h1>{{ $page->title }}</h1>
    @endcomponent
    <main class="main-content">
        <section class="section" style="padding: 0;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        @if($page && ($page->settings->list_page ?? false))
                            @include('page::types.list')
                        @elseif($page && !($page->settings->list_page ?? false) && !($page->parent->settings->show_menu ?? false))
                            @include('page::types.image')
                        @endif
                    </div>
                </div>
                @pageTags($page, 10, 'tag')
            </div>
        </section>
    </main>
@stop
