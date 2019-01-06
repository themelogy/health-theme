<section class="subscribe bg bg_8 bg_transparent color_white">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="subscribe__inner clearfix">
                    <div class="pull-left">
                        <h2 class="subscribe__title">{{ trans('themes::theme.newsletter title') }}</h2>
                        <p class="subscribe__text">{{ trans('themes::theme.newsletter sub title') }}</p>
                    </div>
                    <div class="pull-right">
                        <form class="form-inline" role="form">
                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="{{ trans('themes::theme.newsletter placeholder') }}">
                                <input class="btn bg-color_primary" type="submit" value="GÖNDER">
                            </div>
                        </form>
                        <p class="subscribe__note">{{ trans('themes::theme.newsletter privacy') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end subscribe -->