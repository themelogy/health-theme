@stack('styles')

<!--HOME SLIDER-->
{!! Theme::script("plugins/iview/js/iview.js") !!}
{!! Theme::script("plugins/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js") !!}
<!-- SCRIPTS -->
{!! Theme::script("plugins/isotope/jquery.isotope.min.js") !!}
{!! Theme::script("js/waypoints.min.js") !!}
{!! Theme::script("plugins/bxslider/jquery.bxslider.min.js") !!}
{!! Theme::script("plugins/prettyphoto/js/jquery.prettyPhoto.js") !!}
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
{!! Theme::script("plugins/datetimepicker/jquery.datetimepicker.js") !!}
{!! Theme::script("plugins/jelect/jquery.jelect.js") !!}
{!! Theme::script("plugins/nouislider/jquery.nouislider.all.min.js") !!}

<!-- Loader -->
{!! Theme::script("js/classie.js") !!}
<!--THEME-->
{!! Theme::script("js/cssua.min.js") !!}
{!! Theme::script("js/wow.min.js") !!}
{!! Theme::script("js/custom.js") !!}

@stack('css_inline')
@stack('scripts')
@stack('js-inline')

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '292339317887502'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=292339317887502&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->

<?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false): ?>
{!! $googleAnalytics !!}
<?php endif; ?>

