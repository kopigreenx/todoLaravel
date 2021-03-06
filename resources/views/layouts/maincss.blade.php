<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="ace/assets/css/fonts.googleapis.com.css" />

		<link rel="stylesheet" href="ace/assets/font-awesome/4.5.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="ace/assets/css/bootstrap.min.css" />
        <link href="{{asset('ace/assets/css/ace.min.css')}}" rel="stylesheet" class="ace-main-stylesheet" id="main-ace-style" >
        <link href="{{asset('ace/assets/css/ace-skins.min.css')}}" rel="stylesheet">
    </head>

    <body class="no-skin">

            <div class="main-container ace-save-state" id="main-container">
                <script type="text/javascript">
                    try{ace.settings.loadState('main-container')}catch(e){}
                </script>
                <div class="main-content">
                    <div class="main-content-inner">
                        @yield('content')
                    </div>
				</div>
            </div>

    <script src="{{asset('ace/assets/js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('ace/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('ace/assets/js/ace-elements.min.js')}}"></script>
    <script src="{{asset('ace/assets/js/ace.min.js')}}"></script>
    <script>
        $(document).ready(function(){
        })
    </script>
    </body>
</html>
