<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
       	<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="@yield('description')">
        <meta name="author" content="{{ trans('layouts.meta_author') }}">

        <title>@yield('title') | {{ trans('layouts.title_suffix') }}</title>

        @yield('head')

      	<link rel="shortcut icon" type="image/png" href="favicon.png" />

        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
        <link rel="stylesheet" href="assets/css/josahrens.me.css" />
        @yield('styles')

        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv-3.6.2.min.js"></script>
        <script src="assets/js/respond-1.2.0.min.js"></script>
        <![endif]-->
    </head>

    <body>
        @yield('content')

      	<script src="assets/js/jquery-2.1.1.min.js"></script>
      	<script src="assets/js/bootstrap.min.js"></script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-55146204-1', 'auto');
            ga('send', 'pageview');
        </script>
      	@yield('scripts')

        <br>
        <footer>
            <div class="row">
                <div class="col-md-offset-2 col-md-4">
                    <p>&copy; {{ date('Y') }} josahrens.me</p>
                </div>
                <div class="col-md-4">
                    <p>
                        <a class="fa fa-2x fa-github" href="https://github.com/zarthus"></a>
                        <a class="fa fa-2x fa-stack-overflow" href="http://stackoverflow.com/users/3100691/zarthus"></a>
                        <a class="fa fa-2x fa-key" href="https://keybase.io/Zarthus"></a>
                        <!--<a class="fa fa-2x fa-won" href="https://en.wikipedia.com/User:Zarthus"></a>-->
                        <a class="fa fa-2x fa-google-plus-square" href="https://plus.google.com/u/0/102669236621990869558"></a>
                        <a class="fa fa-2x fa-twitter" href="https://twitter.com/@Zarthus_"></a>
                        <a class="fa fa-2x fa-facebook-square" href="https://facebook.com/JosAhrens"></a>
                    </p>
                </div>
            </div>
            @yield('footer')
        </footer>
    </body>
</html>