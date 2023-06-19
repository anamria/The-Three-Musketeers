<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset("style/css/landingpage.css")}}">

    
  </head>
  <body style="background-image:url({{url('img/gif_bg.gif')}})">
    
    <div class="banner">
      <div class="container">
        <h3 class="Judul1">MENGENAL</h3>
          <p><img class="gjudul" height="150" width="170" src="{{ asset("img/judul.png")}}"/></p>
        <div class="wrapper-grid">
          <a href="{{URL::to('/add_Materi')}}">
            <br>
            <img class="gbtn" height="80" width="120" src="{{ asset("img/btnmulai.png")}}" />
          </a>
        </div>
      </div>
    </div>
  </body>
</html>
