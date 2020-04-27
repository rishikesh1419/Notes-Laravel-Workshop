<html>
    <head>

    <title>{{config('app.name', 'Notes App')}}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>

    <body>
        @include('layouts.navbar')

        <div class="container">
            @include('layouts.messages')

            @yield('content')
        </div>
    </body>
</html>