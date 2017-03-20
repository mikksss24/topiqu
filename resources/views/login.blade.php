@extends('master')
@section('content')

<!-- mobile -->

<main class="grey lighten-5 container">
  <div class="hide-on-med-only ; hide-on-large-only">
    <div class="container">
      <div class="row; center">
        <div class="col s8"> 
      
          <br /> <br /> <br /> <br />
          <form method="POST" role="form" action="{{ url('/login') }}">
          {{ csrf_field() }}
            <input id="username" type="text" class="validate" placeholder="Username" name="username" value="{{ old('username') }}" required>
            <input id="password" type="password" class="validate" placeholder="Password" name="password" required>
            <p>
              <center />
                <input type="checkbox" id="rememberme" value="rememberme"/>
                <label for="rememberme">Ingat Akun</label><br><br>
                <a href="/forgot">Lupa kredensial?</a><br>
                <a href="/register">Belum Daftar?</a>
              </center>
            </p>
            <br />
            <center>
                <button class="btn btn-lg btn-primary btn-block pink accent-3" type="submit">Masuk</button>
            </center>
          </form>

        </div>
      </div>
    </div>
  </div>
</main>   

<!-- tablet -->

<main class="grey lighten-5 container">
<br /> <br /> <br /> <br />
  <div class="hide-on-small-only ; hide-on-large-only">
    <div class="container">
      <div class="row; center">
        <div class="col m8"> 
    

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
            <br />
            <center>
              <button class="btn btn-lg btn-primary btn-block pink accent-3" type="submit">Masuk</button>
            </center>
          </form>

        </div>
      </div>
    </div>
  </div>
</main>   

<!-- desktop -->
<main class="grey lighten-5 container">
  <div class="hide-on-small-only ; hide-on-med-only">
    <div class="container">
      <div class="row; center">
        <div class="col l12">     

          <form method="POST" role="form" action="{{ url('/login') }}">
          {{ csrf_field() }}
          <input id="username" type="text" class="validate" placeholder="Username" name="username" value="{{ old('username') }}" required>
          <input id="password" type="password" class="validate" placeholder="Password" name="password" required>
          <p>
            <center />
              <input type="checkbox" id="rememberme" value="rememberme"/>
                <label for="rememberme">Ingat Akun</label><br><br>
                <a href="/forgot">Lupa kredensial?</a><br>
                <a href="/register">Belum Daftar?</a>
            </center>
          </p>
          <br />
          <center>
              <button class="btn btn-lg btn-primary btn-block pink accent-3" type="submit">Masuk</button>
          </center>
          </form>
        </div>
      </div>   
    </div>
  </div>
</main>   


@endsection