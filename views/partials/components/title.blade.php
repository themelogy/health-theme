<div class="ui-title-page bg_title_detoks bg_transparent"{{ isset($cover) ? ' style="background-image:url('.$cover.');"' : '' }}>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                {{ $slot }}
                <div class="ui-subtitle-page">{{ $page->settings->sub_title->{locale()} ?? '' }}</div>
            </div>
        </div>
    </div>
</div>
<div class="border_btm">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                {!! Breadcrumbs::renderIfExists((string)$breadcrumb ?? '') !!}
            </div>
        </div>
    </div>
</div>
