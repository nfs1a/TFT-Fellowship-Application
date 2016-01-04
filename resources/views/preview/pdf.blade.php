<html lang="zh-tw">
<head>
    <title>Teach for Taiwan</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>Teach For India Fellowship 2016</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/final.min.css">
    <link rel="stylesheet" href="/css/bootstrap-additions.css">
    <link rel="stylesheet" href="/css/bootstrap-social.css"><!--Load Css filters-->
    <link rel="stylesheet" href="/css/style.css"><!--fallback if cdn fails to load-->

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="//app.essoduke.org/js/twzipcode/jquery.twzipcode-1.7.3.min.js"></script>
</head>
<body>

<div id="container">
    <div id="page">
        <div class="container">
            <div class="row sectionBody">
                <!-- sectionBody: Left -->
                <div class="sectionPan panel panel-default col-md-10 shadow col-lg-push-1">
                    <div class="panel-body">
                        <h2>Teach For Taiwan 教師申請表</h2>
                        @include('preview/_basic')
                        @include('preview/_eduHistory')
                        @include('preview/_workExpertises')
                        @include('preview/_workExperience')
                        @include('preview/_teachExperience')
                        @include('preview/_essay')
                        @include('preview/_appendix')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials/_footer')

</div>
</body>
</html>