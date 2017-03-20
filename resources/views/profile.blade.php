@extends('master')
@section('content')

<!-- inline css-->
<style type = "text/css">
  .topiquborder {
  outline: 0.05px solid #DFE2E4;
  outline-offset: -1px;
}

</style>
 
<main class="grey lighten-5 container topiquborder">

<!-- tab bar for profile page--> 
  <!-- mobile -->
  <div class="hide-on-med-only ; hide-on-large-only">  
  
    <nav class="nav-extended light-blue darken-1">
      <div class="nav-content col s12">
        <ul class="tabs grey lighten-5">
          <li class="tab"><a href="#profile" class="blue-text" style="font-size:85%;">profil</a></li>
          <li class="tab"><a class="blue-text" href="#posted" style="font-size:85%;">submitted</a></li>
          <li class="tab"><a href="#social" class="active blue-text" style="font-size:85%;">social</a></li>
          <li class="tab"><a href="#settings" class="blue-text" style="font-size:85%;">user settings</a></li>
        </ul>
      </div>
    </nav>
    <!-- end of tab bar -->
    
    <div id="#social" class="col s12"> <br />
      <div class="center-align" style="padding-bottom:10px"> 
        <font color="#62666A" size="4"> <bold> Teman : ( <a> 1 online </a> ) </bold> </font> 
      </div>
      <ul class="collection">
        <li class="collection-item avatar">
          <img src="https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-9/17021684_10208045960498412_459188926502607919_n.jpg?oh=936da27227bff7c84696ff5fba9ec7bc&oe=5928A2EF" alt="" class="circle" />
          <span class="title">Debora Sucin </span>
          <p> Serpong, Tangerang, ID <br> <font color="green"> Online </font> </p>
          <i class="material-icons secondary-content"> chat_bubble </i>
        </li>

        <li class="collection-item avatar">
          <img src="https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-9/13173862_1023770610992373_2416508640182075101_n.jpg?oh=9dbc2fe900a26637893a7b8b6966dfac&oe=595D6283" alt="" class="circle" />
          <span class="title">Angga Jidat</span>
          <p> Mauk, Sepatan, ID <br> <font color="grey"> Online 30 menit yang lalu </font></p>
          <i class="material-icons secondary-content grey-text">chat_bubble</i>
        </li>

        <li class="collection-item avatar">
          <img src="https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-9/17021643_646098092257709_442071740493006662_n.jpg?oh=e24b1f4651758a8612c678464a1fb05e&oe=592E9083" alt="" class="circle" />
          <span class="title"> Felice Kolay </span>
          <p> Menceng, Pawshionable, ID <br> <font color="grey"> Online 2 jam yang lalu </font> </p>
          <i class="material-icons secondary-content grey-text"> chat_bubble </i>
        </li>

        <li class="collection-item avatar">
          <img src="https://img.shoplineapp.com/media/image_clips/5728e4326170695685e91300/source.jpg?1462297649" alt ="" class="circle" />
          <span class="title">Bae Suzy Luv Mike </span>
          <p> Seoul, KR <br>
          <font color="grey"> Online 12 jam yang lalu </font>
          </p>
          <i class="material-icons secondary-content grey-text">chat_bubble</i>
        </li>  
      </ul>
    

      <div class="center" style="padding-bottom:10px">
        <a class="waves-effect waves-teal btn-flat"> <font size="1"> find friends </font> </a> 
        <a class="waves-effect waves-teal btn-flat"> <font size="1"> friend request </font> </a> 
        <a class="waves-effect waves-teal btn-flat"> <font size="1"> manage </font> </a>
      </div>
    </div>


    <div id="#posted" class="col s12">



    </div>
    <div id="test3" class="col s12">






    </div>
    <div id="#settings" class="col s12">
    






    </div>
  </div>

  <!-- tablet -->
  <div class="hide-on-small-only ; hide-on-large-only">  
  
    <nav class="nav-extended light-blue darken-1">
      <div class="nav-content col m12">
        <ul class="tabs grey lighten-5">
          <li class="tab"><a href="#profile" class="blue-text" style="font-size:85%;">profil</a></li>
          <li class="tab"><a class="blue-text" href="#posted" style="font-size:85%;">submitted</a></li>
          <li class="tab"><a href="#social" class="active blue-text" style="font-size:85%;">social</a></li>
          <li class="tab"><a href="#settings" class="blue-text" style="font-size:85%;">user settings</a></li>
        </ul>
      </div>
    </nav>
    <!-- end of tab bar -->
    
    <div id="#social" class="col m12"> <br />
      <div class="center-align" style="padding-bottom:10px"> 
        <font color="#62666A" size="4"> <bold> Teman : ( <a> 1 online </a> ) </bold> </font> 
      </div>
      <ul class="collection">
        <li class="collection-item avatar">
          <img src="https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-9/17021684_10208045960498412_459188926502607919_n.jpg?oh=936da27227bff7c84696ff5fba9ec7bc&oe=5928A2EF" alt="" class="circle" />
          <span class="title">Debora Sucin </span>
          <p> Serpong, Tangerang, ID <br> <font color="green"> Online </font> </p>
          <i class="material-icons secondary-content"> chat_bubble </i>
        </li>

        <li class="collection-item avatar">
          <img src="https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-9/13173862_1023770610992373_2416508640182075101_n.jpg?oh=9dbc2fe900a26637893a7b8b6966dfac&oe=595D6283" alt="" class="circle" />
          <span class="title">Angga Jidat</span>
          <p> Mauk, Sepatan, ID <br> <font color="grey"> Online 30 menit yang lalu </font></p>
          <i class="material-icons secondary-content grey-text">chat_bubble</i>
        </li>

        <li class="collection-item avatar">
          <img src="https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-9/17021643_646098092257709_442071740493006662_n.jpg?oh=e24b1f4651758a8612c678464a1fb05e&oe=592E9083" alt="" class="circle" />
          <span class="title"> Felice Kolay </span>
          <p> Menceng, Pawshionable, ID <br> <font color="grey"> Online 2 jam yang lalu </font> </p>
          <i class="material-icons secondary-content grey-text"> chat_bubble </i>
        </li>

        <li class="collection-item avatar">
          <img src="https://img.shoplineapp.com/media/image_clips/5728e4326170695685e91300/source.jpg?1462297649" alt ="" class="circle" />
          <span class="title">Bae Suzy Luv Mike </span>
          <p> Seoul, KR <br>
          <font color="grey"> Online 12 jam yang lalu </font>
          </p>
          <i class="material-icons secondary-content grey-text">chat_bubble</i>
        </li>  
      </ul>
    

      <div class="center" style="padding-bottom:10px">
        <a class="waves-effect waves-teal btn-flat"> <font size="2"> find friends </font> </a> 
        <a class="waves-effect waves-teal btn-flat"> <font size="2"> friend request </font> </a> 
        <a class="waves-effect waves-teal btn-flat"> <font size="2"> manage </font> </a>
      </div>
    </div>


    <div id="#posted" class="col m12">



    </div>
    <div id="test3" class="col m12">






    </div>
    <div id="#settings" class="col m12">
    






    </div>
  </div>


  <!-- desktop -->
  <div class="hide-on-med-only ; hide-on-small-only">  
  
    <nav class="nav-extended light-blue darken-1">
      <div class="nav-content col l12">
        <ul class="tabs grey lighten-5">
          <li class="tab"><a href="#profile" class="blue-text" style="font-size:85%;">profil</a></li>
          <li class="tab"><a class="blue-text" href="#posted" style="font-size:85%;">submitted</a></li>
          <li class="tab"><a href="#social" class="active blue-text" style="font-size:85%;">social</a></li>
          <li class="tab"><a href="#settings" class="blue-text" style="font-size:85%;">user settings</a></li>
        </ul>
      </div>
    </nav>
    <!-- end of tab bar -->
    
    <div id="#social" class="col l12"> <br />
      <div class="center-align" style="padding-bottom:10px"> 
        <font color="#62666A" size="4"> <bold> Teman : ( <a> 1 online </a> ) </bold> </font> 
      </div>
      <ul class="collection">
        <li class="collection-item avatar">
          <img src="https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-9/17021684_10208045960498412_459188926502607919_n.jpg?oh=936da27227bff7c84696ff5fba9ec7bc&oe=5928A2EF" alt="" class="circle" />
          <span class="title">Debora Sucin </span>
          <p> Serpong, Tangerang, ID <br> <font color="green"> Online </font> </p>
          <i class="material-icons secondary-content"> chat_bubble </i>
        </li>

        <li class="collection-item avatar">
          <img src="https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-9/13173862_1023770610992373_2416508640182075101_n.jpg?oh=9dbc2fe900a26637893a7b8b6966dfac&oe=595D6283" alt="" class="circle" />
          <span class="title">Angga Jidat</span>
          <p> Mauk, Sepatan, ID <br> <font color="grey"> Online 30 menit yang lalu </font></p>
          <i class="material-icons secondary-content grey-text">chat_bubble</i>
        </li>

        <li class="collection-item avatar">
          <img src="https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-9/17021643_646098092257709_442071740493006662_n.jpg?oh=e24b1f4651758a8612c678464a1fb05e&oe=592E9083" alt="" class="circle" />
          <span class="title"> Felice Kolay </span>
          <p> Menceng, Pawshionable, ID <br> <font color="grey"> Online 2 jam yang lalu </font> </p>
          <i class="material-icons secondary-content grey-text"> chat_bubble </i>
        </li>

        <li class="collection-item avatar">
          <img src="https://img.shoplineapp.com/media/image_clips/5728e4326170695685e91300/source.jpg?1462297649" alt ="" class="circle" />
          <span class="title">Bae Suzy Luv Mike </span>
          <p> Seoul, KR <br>
          <font color="grey"> Online 12 jam yang lalu </font>
          </p>
          <i class="material-icons secondary-content grey-text">chat_bubble</i>
        </li>  
      </ul>
    

      <div class="center" style="padding-bottom:10px">
        <a class="waves-effect waves-teal btn-flat"> <font size="3"> find friends </font> </a> 
        <a class="waves-effect waves-teal btn-flat"> <font size="3"> friend request </font> </a> 
        <a class="waves-effect waves-teal btn-flat"> <font size="3"> manage </font> </a>
      </div>
    </div>


    <div id="#posted" class="col l12">



    </div>
    <div id="test3" class="col l12">






    </div>
    <div id="#settings" class="col l12">
    






    </div>
  </div>

  <!-- end of content-->

</main>
    
    

@endsection