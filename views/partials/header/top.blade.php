<div class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 text-left">
                @include('partials.components.social')
            </div>
            <div class="top-header__links col-sm-8">
                <a href="tel:{{ setting('theme::phone') }}" rel="nofollow">
                    <i class="icon-header icon-call-in color_primary"></i>
                    {{ setting('theme::phone') }}
                </a>
                <a class="border-right" href="mailto:{{ setting('theme::email') }}" rel="nofollow">
                    <i class="icon-header icon-envelope-open color_primary"></i>
                    {{ setting('theme::email') }}
                </a>
                <a href="{{ route('contact') }}">
                    {{ trans('themes::contact.title') }}
                </a>
                <div class="btn-group languages">
                    <button type="button" class="btn_languages dropdown-toggle" data-toggle="dropdown"><i class="icon_globe-2"></i>{{ LaravelLocalization::getCurrentLocaleNative() }}<span class="caret color_primary"></span></button>
                    <ul class="dropdown-menu" role="menu">
                        @foreach (LaravelLocalization::getSupportedLocales() as $locale => $language)
                            <li class="@if(App::getLocale()==$locale) active @endif"><a rel="alternate" hreflang="{{ $locale }}" href="{{ LaravelLocalization::getLocalizedURL($locale) }}">{{$language['native']}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end top-header -->
