<!doctype html>
<html>
<head>
    <meta name="csrf_token" content="{ csrf_token() }" />
    @include('includes.head')
</head>
<body ng-app="rahayudg" class="bg-faded">
    <div ng-controller="HandOfGod as god">
        @include('includes.preheader')
        @include('includes.header')
        

        <div class="page-title">
            <small class="fal fa-alien fa-fw"></small> 
            {{ucfirst(Route::getCurrentRoute()->uri())}}    
        </div>

        <div id="content" class="content">
                @yield('content')
        </div>

        <footer class="footer">
            @include('includes.footer')
        </footer>

    </div>
</body>
</html>