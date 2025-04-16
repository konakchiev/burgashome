<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Burgas Home</title>

    <meta name="author" content="creativelayers">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
     
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ Vite:: asset('resources/css/jquery.mb.YTPlayer.min.css')}}">
    <!-- Font -->
    <link rel="stylesheet" href="https://use.typekit.net/bsu6zbt.css">
    <link rel="stylesheet" href="https://use.typekit.net/bsu6zbt.css">
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="{{ Vite::asset('resources/icon/flaticon_just-home.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ Vite::asset('resources/icon/icomoon/style.css') }}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ Vite::asset('resources/images/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ Vite::asset('images/favicon.png') }}">
    
    
</head>