<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
       	<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="@yield('description')">
        <meta name="author" content="{{ trans('layouts.meta_author') }}">

        <title>@yield('title') | {{ trans('layouts.title_suffix') }}</title>

        @yield('head')

      	<link rel="shortcut icon" type="image/png" href="/favicon.png">

        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="/assets/css/josahrens.me.css">
        @yield('styles')

    </head>

    <body>
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="./">
                        <i class="fa fa-home"></i> Home
                    </a>
                </div>

                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="/about">
                                <i class="fa fa-user"></i> </i>{{ trans('layouts.navbar_about') }}
                            </a>
                        </li>
                        <li>
                            <a href="/cv">
                                <i class="fa fa-star"></i> CV
                            </a>
                        </li>
                        <li>
                            <a href="/contact">
                                <i class="fa fa-phone"></i> Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <header class="intro">
            <div class="intro-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1 class="brand-heading">Jos Ahrens</h1>
                            <p class="intro-text">
                                @yield('header-text')

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="content">
            @yield('content')

        </div>

        <footer>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <ul class="list-inline text-center">
                            <li>
                                <a href="https://github.com/zarthus" class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://stackoverflow.com/users/3100691/zarthus" class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-stack-overflow fa-stack-1x fa-inverse"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://keybase.io/Zarthus" class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-key fa-stack-1x fa-inverse"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/u/0/102669236621990869558" class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://facebook.com/JosAhrens" class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <p class="copyright text-muted text-center">
                            &copy; {{ date('Y') }} josahrens.me |
                            <a href="https://github.com/zarthus/josahrens.me">
                                {{ trans('layouts.footer_view_website') }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <script src="/assets/js/jquery-2.1.1.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/josahrens.me.js"></script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-55146204-1', 'auto');
            ga('send', 'pageview');
        </script>
        @yield('scripts')

        <!--[if lt IE 9]>
        <script src="/assets/js/html5shiv-3.6.2.min.js"></script>
        <script src="/assets/js/respond-1.2.0.min.js"></script>
        <![endif]-->

    </body>
</html>