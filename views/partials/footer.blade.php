<footer class="footer">
    <div class="footer__inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <section class="footer__section">
                        <h2 class="footer__title">{{ setting('theme::company-name') }} </h2>
                        <h2 class="footer__title">{{ trans('themes::contact.address') }}</h2>
                        <address class="footer__contacts">
                            <i class="footer__icon icon-pointer color_primary"></i>
                            {!! setting('theme::address') !!}
                        </address>
                    </section>
                </div>
                <div class="col-sm-4">
                    <section class="footer__section">
                        <h2 class="footer__title">{{ trans('contact::contacts.title.contact-information') }}</h2>
                        <ul>
                            <p class="footer__contacts"><i class="footer__icon icon-call-in color_primary"></i>{{ setting('theme::phone') }}</p>
                            <p class="footer__contacts"><i class="footer__icon icon-call-in color_primary"></i>{{ setting('theme::phone2') }} </p>
                            <p class="footer__contacts"><i class="footer__icon icon-call-in color_primary"></i>{{ setting('theme::mobile') }}</p>
                            <p class="footer__contacts"><i class="footer__icon icon-envelope-open color_primary"></i>{{ setting('theme::email') }}</p>
                        </ul>
                    </section>
                </div>
                <section class="footer__section">
                    <h2 class="footer__title">
                    {{ app(\Modules\Menu\Repositories\MenuRepository::class)->findBySlug('useful')->title }}
                    </h2>
                    {!! Menu::get('useful', \Themes\Health\Presenter\ClassicMenuPresenter::class) !!}
                </section>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end footer__inner -->

    <div class="footer__menu clearfix">
        <div class="container"><a href="@homepage" class="logo pull-left"> <img class="logo__img" src="{{ Theme::url("img/bugra_buyrukcu_footer.png") }}" alt="Buğra Buyrukçu"> </a>
            {!! Menu::get('footer', \Themes\Health\Presenter\FooterMenuPresenter::class) !!}
        </div>
        <!-- end container -->
    </div>
    <!-- end footer__menu -->

    <div class="footer__bottom"><span class="copyright">© 2016 | Dr. Buğra Buyrukçu | {{ trans('themes::theme.attention') }} <br/> Bu sitede fitoterapik yaklaşımlar Prof. Dr. Canfeza Sezgin'in yazmış olduğu "tam şifa" kitabından alınmıştır.</span><br/>
        @include('partials.components.social')
    </div>
</footer>

@includeIf('core::cookie-law')
