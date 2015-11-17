<html lang="en" ng-app="FormApp" id="ng-app" class="ng-scope">
<head>
    <style type="text/css">@charset "UTF-8";
        [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak, .ng-hide {
            display: none !important;
        }

        ng\:form {
            display: block;
        }

        .ng-animate-block-transitions {
            transition: 0s all !important;
            -webkit-transition: 0s all !important;
        }

        .ng-hide-add-active, .ng-hide-remove {
            display: block !important;
        }</style>
    <title>@yield('title') | Teach for Taiwan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Teach For India Fellowship 2016</title>
    <!--<script async="" src="http://www.google-analytics.com/analytics.js"></script>-->
    <!--<script src="http://d16x1c2rj8w89n.cloudfront.net/bower_components/jquery/dist/jquery.min.js"></script>-->
    <style type="text/css"></style>
    <!--<script src="http://d16x1c2rj8w89n.cloudfront.net/js-dist/angular.min.js"></script>-->
    <style type="text/css"></style>
    <!--<script src="http://d16x1c2rj8w89n.cloudfront.net/js-dist/libraries.min.js"></script>-->
    <!--<script src="http://apply.teachforindia.org/js-dist/custom.min.js"></script>-->
    <link rel="stylesheet" href="http://apply.teachforindia.org/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://apply.teachforindia.org/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://apply.teachforindia.org/css-dist/final.min.css">
    <link rel="stylesheet" href="http://apply.teachforindia.org/css/bootstrap-additions.css">
    <link rel="stylesheet" href="http://apply.teachforindia.org/css/bootstrap-social.css"><!--Load Css filters-->
    <link rel="stylesheet" href="http://apply.teachforindia.org/css/style.css"><!--fallback if cdn fails to load-->
    <!--<script>window.jQuery || document.write('<script src="http://apply.teachforindia.org/bower_components/jquery/dist/jquery.min.js"><\/script>');
        try {
            console.log(angular.module('ui.bootstrap'))
        }
        catch (err) {
            if (err)
                document.write('<script src="http://apply.teachforindia.org/js-dist/angular.min.js"><\/script>');
        }
        window.moment || document.write('<script src="http://apply.teachforindia.org/js-dist/libraries.min.js"><\/script>');
        window.FormApp || document.write('<script src="http://apply.teachforindia.org/js-dist/custom.min.js"><\/script>');</script>
        -->
</head>
<body>
<div ng-show="coverUp" spinner-key="spinner1"
     us-spinner="{length: 60,width: 15,radius: 80,corners: 1, color: '#f47b20',  speed: 0.8, trail: 46, shadow: true,zIndex: 2e9, top: '50%', left: '50%'};"
     class="spinback text-center ng-scope ng-hide">
    <div class="row opaque"><p class="spinText col-md-12">Please wait while we upload your information. <br> It may take
            a few seconds....</p></div>
</div>
<div id="container">
    @include('layouts.partials.navigation')
    @yield('content')
    @include('layouts.partials.footer')

</div>
</body>
</html>