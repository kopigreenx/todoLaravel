<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{asset('ace/assets/css/fonts.googleapis.com.css')}}" />

        <link rel="stylesheet" href="{{asset('ace/assets/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('ace/assets/font-awesome/4.5.0/css/font-awesome.min.css')}}" />
        <link href="{{asset('ace/assets/css/ace.min.css')}}" rel="stylesheet" class="ace-main-stylesheet" id="main-ace-style" >
        <link href="{{asset('ace/assets/css/ace-skins.min.css')}}" rel="stylesheet">
        <link href="{{asset('ace/assets/css/bootstrap-editable.min.css')}}" rel="stylesheet">
        <link href="{{asset('ace/assets/css/select2.min.css')}}" rel="stylesheet">

    <script src="{{asset('ace/assets/js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('ace/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('ace/assets/js/ace-elements.min.js')}}"></script>
    <script src="{{asset('ace/assets/js/ace.min.js')}}"></script>
    <script src="{{asset('ace/assets/js/bootstrap-editable.min.js')}}"></script>
    <script src="{{asset('ace/assets/js/select2.min.js')}}"></script>
</head>

    <body class="no-skin">
            @include('partials.navbar')

            <div class="main-container ace-save-state" id="main-container">
                <script type="text/javascript">
                    try{ace.settings.loadState('main-container')}catch(e){}
                </script>
                @include('partials.sidebar')
                <div class="main-content">
                    <div class="main-content-inner">
                        @yield('content')
                    </div>
				</div>
            </div>


    <script>
        $(document).ready(function(){
        })
    </script>
    </body>
</html>
