<div class="block-hourse block-hourse_full bg bg_1 bg_transparent">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="block-hourse__inner block-hourse__inner_first">
                    <p class="block-hourse__text"><i class="icon icon-note"></i>{{ trans('themes::theme.for call with us') }}</p>
                    <p class="block-hourse__title">{{ trans('themes::theme.just fill the appointment') }}</p>
                    <a class="btn bg-color_primary" href="mailto:{{ setting('theme::email') }}">{{ trans('themes::theme.appointment contact us') }}</a></div>
            </div>
            <section class="col-md-6">
                <div class="block-hourse__inner block-hourse__inner_second">
                    <div class="block-hourse__title-table"><i class="icon icon-clock"></i>{{ trans('themes::theme.treatment hours') }}</div>
                    <table>
                        <tbody>
                        <tr>
                            <td>{{ Carbon::now()->startOfWeek()->formatLocalized('%A') }} - {{ Carbon::now()->startOfWeek()->addDay(4)->formatLocalized('%A') }}</td>
                            <td><span class="line-bottom"></span></td>
                            <td>08:00 - 19:00</td>
                        </tr>
                        <tr>
                            <td>{{ Carbon::now()->startOfWeek()->addDay(5)->formatLocalized('%A') }}</td>
                            <td><span class="line-bottom"></span></td>
                            <td>09:00 - 17:00</td>
                        </tr>
                        <tr>
                            <td>{{ trans('themes::theme.appointment') }}</td>
                            <td><span class="line-bottom"></span></td>
                            <td>{{ setting('theme::phone') }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end block-hourse -->
