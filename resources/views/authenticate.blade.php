@extends('master')
@section('content')

<div class="container"> <br /> <br /> <br />
  
  <form class="col l12" method="POST" role="form" action="{{ url('/authenticate') }}">
        {{ csrf_field() }}
    <div class="row">
        <div class="col l2"> 
        </div> 
        <div class="input-field col l8">
          <input id="input_text" data-length="16" type="text" class="form-control" required="true" name="authenticate" pattern="[A-Za-z0-9_-]{5,32}" title="Alphanumeric dengan '-'." value="{{ old('authenticate') }}" />
          <label for="authenticate">Authentication Code</label>
        </div>
        <div class="col l12">
          <p>
            <center>
              <label style="font-weight: 300; font-size: 100%; " for="tos">Dengan mendaftar, Anda setuju dengan <br><a href="/tos" target="popup" onclick="window.open('../html-link.htm','name','width=600,height=400')">Syarat dan Ketentuan</a> situs ini. </label>
            </center>
          </p>
        </div>
        <div class="col l12">
            <center>
              <button class="btn btn-lg btn-primary btn-block pink accent-3" type="submit" onclick="validateForm();">Authenticate</button> <br />
            </center>
        </div>
          
    </div>
  </form>
  
</div>
@endsection