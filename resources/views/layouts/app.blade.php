<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>e-buy168 | Admin</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/_all-skins.min.css">

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">

    @yield('css')
</head>

<body class="skin-blue sidebar-mini">
@if (!Auth::guest())
    <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
        <a href="{{url('homepage')}}" class="logo">
                <b>e-buy168</b>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="data:image/png;base64,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"
                                     class="user-image" alt="User Image"/>
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">{!! Auth::user()->name !!}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="data:image/png;base64,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"
                                         class="img-circle" alt="User Image"/>
                                    <p>
                                        {!! Auth::user()->name !!}
                                        <small>Member since {!! Auth::user()->created_at->format('M. Y') !!}</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{!! url('/logout') !!}" class="btn btn-default btn-flat"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Sign out
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        @include('layouts.sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>

        <!-- Main Footer -->
        <footer class="main-footer" style="max-height: 100px;text-align: center">
            <strong>Copyright © 2019 <a href="#">Company</a>.</strong> All rights reserved.
        </footer>

    </div>
@else
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{!! url('/') !!}">
                    e-buy168
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{!! url('/home') !!}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li><a href="{!! url('/login') !!}">Login</a></li>
                    <li><a href="{!! url('/register') !!}">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- jQuery 3.1.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>

    {{-- CKEditor --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/12.3.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    @yield('scripts')
</body>
</html>
