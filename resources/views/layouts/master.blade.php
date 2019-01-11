    <!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Psittacus V2</title>
        <!--     Fonts and icons     -->
        <link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
        <link href="assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet">
        <link rel="stylesheet" href=" {{ asset ('css/gaia.css') }} ">
        <link rel="stylesheet" href=" {{ asset ('css/bootstrap.css') }} ">
        <link rel="stylesheet" href=" {{ asset ('css/custom.css') }} ">
        <!-- Styles -->
        <style>
        
        </style>
    </head>

    <body>
    <div id="app">
        @include('layouts.nav')
            <router-view/>
        </div>
    </div>
        @include('layouts.footer')
        <script src="{{ asset ('js/app.js') }}"></script>
        <script src="{{ asset ('js/gaia.js') }}"></script>
        <script src="{{ asset ('js/jquery.min.js') }}"></script>
        <script src="{{ asset ('js/modernizr.js') }}"></script>
    </body>

    </html>
