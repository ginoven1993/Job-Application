<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Admin Dashboard </title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
  <link rel='shortcut icon' type='image/x-icon' href='{{asset('assets/img/favicon.ico')}}' />
</head>

<body>
  <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
                    <nav class="navbar navbar-expand-lg main-navbar sticky">
                        <div class="form-inline me-auto">
                        <ul class="navbar-nav mr-3">
                            <li><a href="#" data-bs-toggle="sidebar" class="nav-link nav-link-lg
                                                    collapse-btn"> <i data-feather="align-justify"></i></a></li>
                            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                                <i data-feather="maximize"></i>
                            </a></li>
                            <li>
                            <form class="form-inline me-auto">
                                <div class="search-element d-flex">
                                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                </div>
                            </form>
                            </li>
                        </ul>
                        </div>
               
                    </nav>
                    <div class="main-sidebar sidebar-style-2">
                        <aside id="sidebar-wrapper">
                        <div class="sidebar-brand">
                            <a href="index.html">  <span
                                class="logo-name">U F C</span>
                            </a>
                        </div>
                        <ul class="sidebar-menu">
                           <!-- <li class="menu-header">Main</li> -->
                            <li class="dropdown active">
                            <a href="/" class="nav-link active"><i data-feather="monitor"></i><span>Dashboard</span></a>
                            </li>
                           
                           
                           <!-- <li class="menu-header">UI Elements</li> -->
                            <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="copy"></i><span>Evènements</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link active" href="/events">Ajouter</a></li>
                                <li><a class="nav-link active" href="{{route('event.show')}}">Tous</a></li>
                            </ul>
                            </li>
                         <!--   <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                data-feather="shopping-bag"></i><span>Galeries</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link active" href="#">Ajouter</a></li>
                                <li><a class="nav-link" href="#">Tous</a></li>
                            </ul>
                            </li> -->
                            <li class="dropdown">
                                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="shopping-bag"></i><span>Galerie</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link active" href="/galeries">Ajouter</a></li>
                                    <li><a class="nav-link" href="{{route('galerie.show')}}">Tous</a></li>
                                </ul>
                                </li>
                            <li class="dropdown">
                                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="shopping-bag"></i><span>Articles</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="/articles">Ajouter</a></li>
                                    <li><a class="nav-link" href="{{route('article.show')}}">Tous</a></li>
                                </ul>
                                </li>
                           
                                 
                            <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                data-feather="chevrons-down"></i><span>Réglages</span></a>
                            </li>
                        </ul>
                        </aside>
                    </div>
            @if (Session::has('flash_message_error'))
				<script type="text/javascript" src="{{asset('assets/js/sweetalert2.all.min.js')}}"></script>
				<script type="text/javascript">;
                    Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: "{{ session('flash_message_error') }}",
                    showConfirmButton: false,
                    timer: 4000
                    });
				</script>
			@endif
			@if (Session::has('flash_message_success'))
				<script type="text/javascript" src="{{asset('assets/js/sweetalert2.all.min.js')}}"></script>
				<script type="text/javascript">;
                    Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: "{{ session('flash_message_success') }}",
                    showConfirmButton: false,
                    timer: 4000
                    });
				</script>
			@endif


                     <!-- Main Content -->
                    <div class="main-content">
                            @yield('content');
                    </div>

                    <footer class="main-footer">
                        <div class="footer-left">
                          Copyright &copy; 2023 <div class="bullet"></div> Designer par <a href="#">Hervé KAO</a>
                        </div>
                        <div class="footer-right">
                        </div>
                      </footer>
        </div>
    </div>
  <!-- General JS Scripts -->
  <script src="{{asset('assets/js/app.min.js')}}"></script>
   <!-- JS Libraies -->
   <script src="assets/bundles/prism/prism.js"></script>
  <!-- Page Specific JS File -->
  <script src="{{asset('assets/js/page/index.js')}}"></script>
  <!-- Template JS File -->
  <script src="{{asset('assets/js/scripts.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{asset('assets/js/custom.js')}}"></script>

  <!-- SWEETALERT -->
  <script src="{{asset('assets/js/sweetalert2.all.js')}}"></script>
</body>


</html>   