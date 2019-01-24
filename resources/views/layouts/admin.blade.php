<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>
            @yield('title',"Admin")
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
        <link href="{{ asset('css/adminStyle.css') }}"  rel="stylesheet"/>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css"/>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/admin">
                        Admin page
                    </a>
                </div>
                <ul class="navbar-nav ml-auto ml-md-0">
                    <li>
                        <a class="nav-link" href="#">
                            <i class="fas fa-user-circle fa-fw">
                            </i>
                            {{ Auth::user()->name }}
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="content">
                <div class=" sidebar">
                    <nav class="navbar navbar-default">
                        <ul class="nav navbar-nav">
                            <li class="primary-menu-item">
                                <a href="/admin/ama-list">
                                    AMAs
                                </a>
                            </li>
                            <li class="primary-menu-item">
                                <a href="#">
                                    Settings
                                </a>
                            </li>
                            <li class="primary-menu-item">
                                <a href="#">
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="Maincontent">
                    @yield('content')
                    <hr/>
                </div>
            </div>
            <footer>
                <div class="footer-below">
                    <div class="container">
                        <div class="col-lg-12 text-center">
                            AMA App. &copy; 2018
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
