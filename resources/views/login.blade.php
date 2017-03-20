@extends('master')
@section('content')
<div class="container">
<main class="grey lighten-5 container">
    
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
          <br>
          <center>
              <button class="btn btn-lg btn-primary btn-block pink accent-3" type="submit">Masuk</button>
            </center>
            </form>
          </div>
          

      




</main>
    
</div>   

@endsection