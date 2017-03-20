<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <!-- Topiqu own CSS -->
    <link rel="stylesheet" href="topiqu.css">
    <!-- Icons -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- Lato Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <!-- Master Title and Favicon -->
    <title>topiqudotcom</title>
      <script>
      window.liveSettings = {
        api_key: "a0b49b34b93844c38eaee15690d86413",
        picker: "bottom-right",
        detectlang: true,
        dynamic: true,
        autocollect: true
      };
    </script>
    <script src="//cdn.transifex.com/live.js"></script>
    <link rel="icon" href="{{ asset('/favicon.ico') }}">
  </head>
  <body class="grey lighten-5">
    <style>
      input[type="search"] {height: 100% !important; padding-top: 21px;}
      body
      {
        display: flex;
        font-family: 'Lato', sans-serif;
        min-height: 100vh;
        flex-direction: column;
      }
      main {flex: 1 0 auto;}
    </style>
    <header>
      <!-- Nav for small sized devices -->
      <div class="navbar-fixed hide-on-med-and-up">
        <nav class="light-blue darken-1">
          <div class="nav-wrapper container">
            <div class="brand-logo left" style="overflow: hidden;">
              <a href="/"><img src="{{ asset('/icon.svg') }}" style="max-width: 60px; height: auto;" /></a>
            </div>
            <ul id="nav-mobile" class="right">
            @if(Auth::check())
              <li><a href="#" data-activates="dropdown-notification" class="button-collapse"><i class="material-icons">notifications</i></a></li>
              <li><a href="#" data-activates="dropdown-messages" class="dropdown-button"><i class="material-icons">local_post_office</i></a></li>
              <li><a href="#" data-activates="dropdown-menu-small" class="dropdown-button"><i class="material-icons">menu</i></a>
                <ul id='dropdown-menu-small' class='dropdown-content' style="min-width: 136px;">
                  <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">chat_bubble_outline</i>Post</a></li>
                  <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">search</i>Search</a></li>
                  <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">visibility</i>Browse</a></li>
                  <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">perm_identity</i>Profile</a></li>
                  <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">settings</i>Settings</a></li>
                  <li class="divider"></li>
                  <li><a href="/logout" class="blue-text text-darken-1"><i class="material-icons left">lock_open</i>Logout</a></li>
                </ul>
              </li>
            @else
              <li><a href="#" data-activates="dropdown-menu-small" class="dropdown-button"><i class="material-icons">menu</i></a>
                <ul id='dropdown-menu-small' class='dropdown-content' style="min-width: 129px;">
                  <li><a href="/login" class="blue-text text-darken-1"><i class="material-icons left">input</i>Masuk</a></li>
                  <li><a href="/register" class="blue-text text-darken-1"><i class="material-icons left">mode_edit</i>Daftar</a></li>
                  <li class="divider"></li>
                  <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">search</i>Search</a></li>
                  <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">visibility</i>Browse</a></li>
                </ul>
              </li>
            @endif
            </ul>
          </div>
        </nav>
      </div>
      <!-- Nav for medium sized devices -->
      <div class="navbar-fixed hide-on-small-only hide-on-large-only col s12 m6">
        <nav class="light-blue darken-1">
          <div class="nav-wrapper container">
            <div class="brand-logo left" style="padding-top: 2px; overflow: hidden;">
              <a href="/"><img src="{{ asset('/icon.svg') }}" style="max-width: 60px; height: auto;" /></a>
            </div>
            <ul id="nav-mobile" class="right">
            @if(Auth::check())
              <li><a href="/" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">notifications</i></a></li>
              <li><a href="#" data-activates="dropdown-messages" class="dropdown-button"><i class="material-icons">local_post_office</i></a></li>
              <li><a href="#" data-activates="dropdown-menu-medium" class="dropdown-button"><i class="material-icons">menu</i></a>
                <ul id='dropdown-menu-medium' class='dropdown-content' style="min-width: 136px;">
                  <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">chat_bubble_outline</i>Post</a></li>
                  <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">search</i>Search</a></li>
                  <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">visibility</i>Browse</a></li>
                  <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">perm_identity</i>Profile</a></li>
                  <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">settings</i>Settings</a></li>
                  <li class="divider"></li>
                  <li><a href="/logout" class="blue-text text-darken-1"><i class="material-icons left">lock_open</i>Logout</a></li>
                </ul>
              </li>
            @else
              <li><a href="#modal-login" style="font-size:120%;" class="modal-trigger"><i class="material-icons left">input</i>Masuk</a></li>
              <li><a href="#modal-register" style="font-size:130%;" class="modal-trigger"><i class="material-icons left">mode_edit</i>Daftar</a></li>
              <li><a href="#" data-activates="dropdown-menu-medium" class="dropdown-button"><i class="material-icons">menu</i></a>
                <ul id='dropdown-menu-medium' class='dropdown-content' style="min-width: 129px;">
                  <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">search</i>Search</a></li>
                  <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">visibility</i>Browse</a></li>
                </ul>
              </li>
            @endif
            </ul>
          </div>
        </nav>
      </div>
      <!-- Nav for large sized devices -->
      <div class="navbar-fixed hide-on-med-and-down">
        <nav class="light-blue darken-1">
          <div class="nav-wrapper">
            <div class="container">
              <div class="brand-logo left" style="overflow: hidden; padding-top: 3px;">
                <a href="/"><img style="max-width: 60px; height: auto;" src="{{ asset('/icon.svg') }}"/></a>
              </div>
              <form class="left" style="padding-left:54px;">
                <div class="input-field">
                  <input id="search" type="search" class="light-blue darken-1 white-text" required>
                  <label for="search"><i class="material-icons">search</i></label>
                </div>
              </form>
              <ul id="nav-mobile" class="right">
              @if(Auth::check())
                <li><a href="#" data-activates="mobile-demo"><i class="material-icons">notifications</i></a></li>
                <li><a href="#" data-activates="dropdown-messages" class="dropdown-button"><i class="material-icons">local_post_office</i></a></li>
                <li><a href="#" data-activates="dropdown-menu-large" class="dropdown-button"><i class="material-icons">menu</i></a>
                  <ul id='dropdown-menu-large' class='dropdown-content' style="min-width: 136px;">
                    <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">chat_bubble_outline</i>Post</a></li>
                    <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">search</i>Search</a></li>
                    <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">visibility</i>Browse</a></li>
                    <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">perm_identity</i>Profile</a></li>
                    <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">settings</i>Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="/logout" class="blue-text text-darken-1"><i class="material-icons left">lock_open</i>Logout</a></li>
                  </ul>
                </li>
              @else
                <li><a href="#modal-login" style="font-size:130%;" class="modal-trigger"><i class="material-icons left">input</i>Masuk</a></li>
                <li><a href="#modal-register" style="font-size:130%;" class="modal-trigger"><i class="material-icons left">mode_edit</i>Daftar</a></li>
                <li><a href="#" data-activates="dropdown-menu-large" class="dropdown-button"><i class="material-icons">menu</i></a>
                  <ul id='dropdown-menu-large' class='dropdown-content' style="min-width: 131px;">
                    <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">search</i>Search</a></li>
                    <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">visibility</i>Browse</a></li>
                  </ul>
                </li>
              @endif
              </ul>
            </div>
          </div>
        </nav>
      </div>
      @if(!Auth::check())
      <div id="modal-login" class="modal" style="max-width: 400px;">
        <div class="modal-content">
        <form method="POST" role="form" action="{{ url('/login') }}">
        {{ csrf_field() }}
                <input id="username" type="text" class="validate" placeholder="Username" name="username" value="{{ old('username') }}" required>
                <input id="password" type="password" class="validate" placeholder="Password" name="password" required>
            <p>
              <center>
                <input type="checkbox" id="rememberme" value="rememberme"/>
                <label for="rememberme">Ingat Akun</label><br><br>
              <a href="/forgot">Lupa kredensial?</a><br>
              <a href="/register">Belum Daftar?</a>
            </center>
          </p>
          <br>
          <center>
              <button class="btn btn-lg btn-primary btn-block pink accent-3" type="submit">Masuk</button>
            </center>
            </form>
          </div>
          <div class="modal-footer">
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat"><i class="material-icons">close</i></a>
          </div>
        </div>
      </div>
      <div id="modal-register" class="modal" style="max-width: 400px;">
        <div class="modal-content">
          <form class="col s8 offset-s2" method="POST" role="form" action="{{ url('/register') }}">
          {{ csrf_field() }}
            <div class="row">
              <div class="input-field col s12">
                  <input type="text" class="form-control" required="true" name="username" pattern="[A-Za-z0-9_-]{5,32}" title="Alphanumeric dengan '_' atau '-'. Musti diantara 5-32 karakter." value="{{ old('username') }}">
                  <label for="username">Username</label>
              </div>
              <div class="input-field col s12">
                  <input type="email" class="form-control" required="true" name="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z0-9]{1,64}$" title="Tolong ketik dengan email address format yang benar." value="{{ old('email') }}">
                  <label for="password">Email Address</label>
              </div>
              <div class="input-field col s12">
                   <input type="password" class="form-control" required="true" name="password" id="passwordid" pattern=".{6,32}" title="Musti diantara 6-32 karakter.">
                  <label for="password">Password</label>
              </div>
              <div class="input-field col s12">
                  <input type="password" class="form-control" required="true" name="confirmpassword" id="confirmpasswordid">
                  <label for="password">Confirm Password</label>
              </div>
              <p>
                <center>
                  <label style="font-weight: 300; font-size: 100%;" for="tos">Dengan mendaftar, Anda setuju dengan <br><a href="/tos" target="popup" onclick="window.open('../html-link.htm','name','width=600,height=400')">Syarat dan Ketentuan</a> situs ini.
                  </label>
              </center>
            </p>
            <center>
                <button class="btn btn-lg btn-primary btn-block pink accent-3" type="submit" onclick="validateForm();">Daftar</button>
              </center>
            </div>
          </form>
          </div>
          <div class="modal-footer">
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat"><i class="material-icons">close</i></a>
          </div>
        </div>
        @endif
      </div>
    </header>
    <main class="grey lighten-5">
      <!-- Content -->
      @yield('content')
    </main>
    <footer class="page-footer grey darken-2">
      <div class="container grey darken-2 hide-on-med-and-down">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Topiqu</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">Tentang Topiqu</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Iklan</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Hubungi Kami</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Karir</a></li>
            </ul>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Informasi</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">Wiki</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Bantuan</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">FAQ</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Syarat dan Ketentuan</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container grey darken-2 hide-on-large-only center">
        <div class="grey-text text-lighten-3">
          <a class="grey-text text-lighten-3" href="#!">Tentang Topiqu</a>&nbsp;&middot;&nbsp;
          <a class="grey-text text-lighten-3" href="#!">Iklan</a>&nbsp;&middot;&nbsp;
          <a class="grey-text text-lighten-3" href="#!">Hubungi Kami</a>&nbsp;&middot;&nbsp;
          <a class="grey-text text-lighten-3" href="#!">Karir</a>
          <p></p>
          <a class="grey-text text-lighten-3" href="#!">Wiki</a>&nbsp;&middot;&nbsp;
          <a class="grey-text text-lighten-3" href="#!">Bantuan</a>&nbsp;&middot;&nbsp;
          <a class="grey-text text-lighten-3" href="#!">FAQ</a>&nbsp;&middot;&nbsp;
          <a class="grey-text text-lighten-3" href="#!">Syarat dan Ketentuan</a>
          <p></p>
        </div>
      </div>
      <div class="footer-copyright grey darken-4">
        <div class="container">
          © 2016 topiqudotcom
          <a title="Follow topiqudotcom on Twitter" href="http://www.twitter.com/topiqudotcom" class="right" style="padding-top: 10px;">&nbsp;<img alt="Follow topiqudotcom on Twitter" height="30px" width="30px" src="{{ asset('/svg_icons/twitter.svg') }}" border=0>&nbsp;</a>
          <a title="Follow topiqudotcom on Twitter" href="http://www.twitter.com/topiqudotcom" class="right" style="padding-top: 10px;">&nbsp;<img alt="Follow topiqudotcom on Twitter" height="30px" width="30px" src="{{ asset('/svg_icons/instagram.svg') }}" border=0>&nbsp;</a>
          <a title="Follow topiqudotcom on Twitter" href="http://www.twitter.com/topiqudotcom" class="right" style="padding-top: 10px;">&nbsp;<img alt="Follow topiqudotcom on Twitter" height="30px" width="30px" src="{{ asset('/svg_icons/facebook.svg') }}" border=0>&nbsp;</a>
          <a title="Follow topiqudotcom on Twitter" href="http://www.twitter.com/topiqudotcom" class="right" style="padding-top: 10px;">&nbsp;<img alt="Follow topiqudotcom on Twitter" height="30px" width="30px" src="{{ asset('/svg_icons/youtube.svg') }}" border=0>&nbsp;</a>
        </div>
      </div>
    </footer>
    <!-- End of Content -->
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
    <script>
      $(document).ready(function()
      {
        $('.modal-trigger').leanModal();
      });
    </script>
  </body>
</html>