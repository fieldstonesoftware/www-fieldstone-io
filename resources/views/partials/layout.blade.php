<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ isset($title) ? $title . ' - ' : null }}Fieldstone - The HVAC Service Management Platform</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

    @if (isset($canonical))
    <link rel="canonical" href="{{ url($canonical) }}">
    @endif

    <!-- Favicon -->
    <meta name="google" content="notranslate">

    <meta name="apple-mobile-web-app-title" content="Fieldstone">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="msapplication-config" content="{!! asset('img/favicon/browserconfig.xml') !!}">
    <link rel="shortcut icon" href="{{ asset('img/favicon/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-icon-180x180.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('img/favicon/apple-icon-precomposed.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!-- Load fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/ins2wgm.css">

    <!-- Load styles -->
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">

    <!-- Load JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

</head>
<body class="language-php">

@yield('content')

<footer>
    <div class="footer_contain" style="padding-top: 0;">
        <div class="contain">
            <section class="partner_block">
                <div class="content">
                    <h2>Sign Up</h2>
                    <p>Join the other early adopters!</p>
                </div>
                <a href="https://pro.fieldstone.io/register" class="btn"><span>Sign Up</span></a>
            </section>
        </div>

        <div class="footer_bg">
            <div class="contain">
                <div class="footer_content">
                    <div class="logotype">
                        <img src="/img/logotype.min.svg" alt="Fieldstone">
                    </div>
                    <div class="search_box">
                        {{-- Just a placeholder--}}
                    </div>
                </div>
                <div class="footer_content">
                    <div class="footer_nav">
                        <div class="nav_col">
                            <span class="footer_nav_trigger">Popular Docs</span>
                            <div class="footer_nav_contain">
                                <ul>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/jobs">Jobs</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/hvacr-systems">HVACR Systems</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/customers">Customers</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/sites">Sites</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/file-attachments">File Attachments</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer_info">
                        <p class="small"></p>
                        <p class="small">Fieldstone is a Cloud platform for small HVAC businesses that helps them organize daily operations so they can reduce paperwork and focus on serving their customers.</p>
                        <p class="small copyright">Fieldstone is a Trademark of Fieldstone Software, LLC.<br>Copyright &copy; 2006-{{now()->format('Y')}} Fieldstone Software LLC.</p>
                        <p class="small">
                            <a href="/docs/{{DEFAULT_VERSION}}/legal-terms-of-use">Terms of Use</a>
                            &nbsp;&nbsp;<a href="/docs/{{DEFAULT_VERSION}}/legal-privacy-policy">Privacy Policy</a>
                        </p>
                        <ul class="social_links">
                            <li><a target="_blank" href="https://www.facebook.com/fieldstonesm/"><img src="/img/social/facebook.min.svg" alt="Facebook"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a href="/" class="logomark"><img src="/img/logomark.min.svg" alt="Fieldstone"></a>
    </div>
</footer>

<script>
    {{--var algolia_app_id = '{{ config('algolia.connections.main.id', false) }}';--}}
    {{--var algolia_search_key = '{{ config('algolia.connections.main.search_key', false) }}';--}}
    {{--var version = '{{ isset($currentVersion) ? $currentVersion : DEFAULT_VERSION }}';--}}
</script>

{{--@include('partials.algolia_template')--}}

<script src="{{ mix('js/app.js') }}"></script>

<script>
    // var _gaq=[['_setAccount','xxxxxxxxx'],['_trackPageview']];
    // (function(d,t){
    //     var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    //     g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    //     s.parentNode.insertBefore(g,s)
    // }(document,'script'));
</script>
</body>
</html>
