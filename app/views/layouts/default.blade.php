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
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
        @yield('styles')

    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-custom" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="nav navbar-nav">
                        <li>
                            <a class="navbar-brand" href="/">
                                <i class="fa fa-home"></i> Home
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="{{ $url_root }}/portfolio">
                                <i class="fa fa-user"></i> Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="{{ $url_root }}/resume">
                                <i class="fa fa-star"></i> Résumé
                            </a>
                        </li>
                        <li>
                            <a href="{{ $url_root }}/timeline">
                                <i class="fa fa-clock-o"></i> {{ trans('layouts.timeline') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ $url_root }}/contact">
                                <i class="fa fa-phone"></i> Contact
                            </a>
                        </li>
                        <li>
                            <a href="{{ Lang::getLocale() == 'en' ? '/nl' : '/en' }}" title="{{ Lang::getLocale() == 'en' ? trans('layouts.lang_ext_nl') : trans('layouts.lang_ext_en') }}">
                                <i class="fa fa-flag"></i> {{ Lang::getLocale() == 'en' ? trans('layouts.lang_nl') : trans('layouts.lang_en') }}
                            </a>

                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        @yield('header')

        <div class="content">
            <span id="anchor-content"></span>

            @yield('content')
        </div>

        <div class="container text-center-sm">
            <footer>
                <hr>
                    <div class="row">
                        <div class="col-sm-3 col-sm-offset-2">
                            <ul class="list-unstyled">
                                <li><h4>Navigation</h4></li>
                                <li><a href="{{ $url_root }}/">Home</a></li>
                                <li><a href="{{ $url_root }}/resume">Résumé</a></li>
                                <li><a href="{{ $url_root }}/timeline">Timeline</a></li>
                                <li><a href="{{ $url_root }}/contact">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-3">
                            <ul class="list-unstyled">
                                <li><h4>Powered By</h4></li>
                                <li><a href="http://laravel.com">Laravel</a></li>
                                <li><a href="http://getbootstrap.com">Bootstrap</a></li>
                                <li><a href="http://fontawesome.io/">Font Awesome</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-3">
                            <ul class="list-unstyled">
                                <li><h4>Other</h4></li>
                                <li><a href="https://github.com/zarthus/josahrens.me">{{ trans('layouts.footer_view_website') }}</a></li>
                                <li><a href="https://resume.github.com/?Zarthus">{{ trans('layouts.footer_view_github_resume') }}</a></li>
                                <li><a href="http://careers.stackoverflow.com/zarthus">{{ trans('layouts.stackoverflow_jobs') }}</a></li>
                                <li><a href="#" class="js-display-email">Please enable JavaScript.</a></li>
                                <li><a href="{{ Lang::getLocale() == 'en' ? '/nl' : '/en' }}" title="Switch Languages">{{ Lang::getLocale() == 'en' ? trans('layouts.lang_ext_nl') : trans('layouts.lang_ext_en') }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                            <ul class="list-inline text-center">
                                <li>
                                    <a href="https://github.com/zarthus" class="fa-stack fa-lg" title="View my profile on GitHub">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://stackoverflow.com/users/3100691/zarthus" class="fa-stack fa-lg" title="View my profile on Stack Overflow">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-stack-overflow fa-stack-1x fa-inverse"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://keybase.io/Zarthus" class="fa-stack fa-lg" title="View my profile on Keybase">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-key fa-stack-1x fa-inverse"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://plus.google.com/u/0/+JosAhrens-Zarthus/about" class="fa-stack fa-lg" title="View my profile on Google+">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://facebook.com/JosAhrens" class="fa-stack fa-lg" title="View my profile on Facebook">
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
                                &copy; {{ date('Y') }} josahrens.me
                            </p>
                        </div>
                    </div>
            </footer>
        </div>

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