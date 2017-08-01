    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $seo['meta_description'] or '' }}">
    <meta name="author" content="PT. Asia Resorce System">
    <meta name="meta_keywords" content="{{ $seo['meta_keyword'] or '' }}">
    <meta name="meta_title" content="{{ $seo['meta_title'] or '' }}">
    <meta name="meta_desctiprion" content="{{ $seo['meta_description'] or '' }}">

    <meta property="og:url" content="http://www.asia-sistem.co.id/" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Company Profile, ARS, PT.Asia Resorce System " />
    <meta property="og:site_name" content="Asia Resorce System" />
    <meta property="og:description" content="Company profile website PT. Asia Resorce System" />
    <meta property="og:image" content="" />
    <meta id="_token" name="_token" value="{{ csrf_token() }}">

    <title> Asia Resource System </title>
    <link rel="shortcut icon" href="{{asset('themes/images/favicon.ico')}}">

    <link href="{{asset('build/css/plugins.css')}}" rel="stylesheet">
    <link href="{{asset('themes/css/fontawesome-4.6.3.min.css')}}" rel="stylesheet">
    <script type="text/javascript" src="{{asset('build/js/core.js')}}"></script>
