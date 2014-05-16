<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Larashop</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <meta charset="utf-8">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    {{ HTML::style('css/bootstrap.min.css')}}
    {{ HTML::style('css/dashboard.css')}}
    {{ HTML::script('js/bootstrap.min.js')}}
</head>
<body>
    @include('navigation')
    <div class="container-fluid">
      <div class="row">
        @include('sidebar')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            @include('main_content')  
        </div>
      </div>
    </div>
    

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src='//www.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
</body>
</html>

