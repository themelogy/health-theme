@include('partials/header/top')

<div class="header">
    <div class="container">
        <div class="header-inner">
            <div class="row">
                <div class="col-md-4 col-xs-12"><a href="{{ url(locale()) }}" class="logo"> <img class="logo__img" src="{{ Theme::url("img/BugraBuyrukcu-Logo.png") }}" alt="{{ setting('theme::company-name') }}"> </a></div>
                <div class="col-md-8 col-xs-12">
                    <div class="header-block">
                        <span class="header-label">
                            @if(Carbon::now()->isWeekday())
                                {{ trans('themes::theme.today') }}: <strong>{{ Carbon::now()->formatLocalized('%A') }} - 09:00 - 18:00</strong>
                            @elseif(Carbon::now()->isSaturday())
                                {{ trans('themes::theme.today') }}: <strong>{{ Carbon::now()->formatLocalized('%A') }} - 09:00 - 17:00</strong>
                            @else
                                {{ trans('themes::theme.today') }}: <strong>{{ trans('themes::theme.close') }}</strong>
                            @endif
                        </span>
                        <span class="header-label header-label_2 bg-color_second color_white">
                            <a class="color_white appointment-book-btn" data-toggle="modal" data-target="#gridSystemModal">
                                <i class="icon-header icon-book-open"></i>
                                <span class="helper">{{ trans('themes::theme.appointment book') }}</span>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header-inner-->
    </div>
    <!-- end container-->

    <div class="top-nav ">
        <div class="container">
            <div class="row">
                <div class="col-md-12  col-xs-12">
                    <div class="navbar yamm ">
                        <div class="navbar-header hidden-md  hidden-lg  hidden-sm ">
                            <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                            <a href="#" class="navbar-brand">Menu</a></div>
                        <div id="navbar-collapse-1" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                {!! Menu::get('header', \Themes\Health\Presenter\HeaderMenuPresenter::class) !!}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
