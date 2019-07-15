<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta content='CSVN' name='generator'/>
    <link href="https://plus.google.com/107515763736347546999" rel="publisher"/>
    <meta property="og:site_name" content="Nhung hươu Bắc Cực">
    <meta property="fb:app_id" content="1737360436557028"/>
    <title>{{!empty($meta_title)? $meta_title : 'Nhung hươu Bắc Cực - Thể lực dồi dào, sinh lý vững mạnh'}}</title>
    <link href="https://plus.google.com/107515763736347546999" rel="publisher"/>
    <link rel="stylesheet" href="{{url('viemgan/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('viemgan/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('viemgan/css/common.css')}}">

    <style>
        .tn-thumb {
            background-color: #3e3e3e;
            background-image: none;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
        }
    </style>

    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta name="description" content="{{!empty($meta_desc)? $meta_desc : 'Sâm nhung cường lực Tuệ Linh - Thể lực dồi dào, sinh lý vững mạnh'}}"/>
    <meta name="keyword" content="{{!empty($meta_keywords)? $meta_keywords : 'Sâm nhung cường lực Tuệ Linh - Thể lực dồi dào, sinh lý vững mạnh'}}"/>
    <script type="text/javascript">
        (function () {
            var _eclickq = window._eclickq || (window._eclickq = []);
            if (!_eclickq.loaded) {
                var eclickTracking = document.createElement('script');
                eclickTracking.async = true;
                eclickTracking.src = ('https:'==document.location.protocol?'https:':'http:')+'//s.eclick.vn/delivery/retargeting.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(eclickTracking, s);
                _eclickq.loaded = true;
            }
            _eclickq.push(['addPixelId', 12624]);
        })();
        window._eclickq = window._eclickq || [];
        window._eclickq.push(['track', 'PixelInitialized', {}]);
    </script>

    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-570f69bb385fe2f2"></script>
    <!-- Facebook Conversion Code for Tiền liệt vương -->
    <script>(function() {
            var _fbq = window._fbq || (window._fbq = []);
            if (!_fbq.loaded) {
                var fbds = document.createElement('script');
                fbds.async = true;
                fbds.src = 'https://connect.facebook.net/en_US/fbds.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(fbds, s);
                _fbq.loaded = true;
            }
        })();
        window._fbq = window._fbq || [];
        window._fbq.push(['track', '6059229771751', {'value':'0.00','currency':'VND'}]);
    </script>
    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6059229771751&amp;cd[value]=0.00&amp;cd[currency]=VND&amp;noscript=1" /></noscript>
</head>
<body>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1737360436557028',
      xfbml      : true,
      version    : 'v2.9'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '1737360436557028',
            xfbml      : true,
            version    : 'v2.9'
        });
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<div class="wrapper home pr">
    @include('frontend.header')
     @yield('content')
   @include('frontend.footer')
</div>
</body>
<script>
    var Config = {};
    Config.url = '{{ url('/') }}';

</script>

<script src="{{url('viemgan/js/jquery-1.11.1.min.js')}}" type="text/javascript"></script>
<script src="{{url('viemgan/js/angular.min.js')}}"></script>
<script src="{{url('viemgan/js/SmoothScroll.js')}}" type="text/javascript"></script>
<script src="{{url('viemgan/js/owl.carousel.min.js')}}" type="text/javascript"></script>
<script src="{{url('viemgan/js/jquery.easing.min.js')}}" type="text/javascript"></script>
<script src="{{url('viemgan/js/common.js')}}" type="text/javascript"></script>

<script>
    $(function(){


        $('#box_submit').click(function(){
            var phone = $('#box_phone').val();
            var email = $('#box_email').val();
            var content = $('#box_content').val();

            if (!phone || !email || !content) {
                $('#box_message').show().text('Xin hãy nhập đủ thông tin!');
            } else {
                $('#getQues').submit();
            }
            return false;
        });
    });
</script>



<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-100932584-1', 'auto');
  ga('send', 'pageview');

</script>


  <!-- Google +-->


@yield('frontend_script')
</html>