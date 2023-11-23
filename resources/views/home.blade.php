<!DOCTYPE html>
<html lang="en">
  <head>
    @extends('layout.base')

    @section('content')
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>My-spotify-Clone</title>
    <link rel="stylesheet" href="/css/style.css" />
    <link
      rel="shortcut icon"
      href="/assets/images/icons8-spotify-48.png"
      type="image/x-icon"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <script src="public/js/script.js" defer></script>
  </head>

  <body
    style="
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(#131614, #000000);
      background-repeat: no-repeat;
    "
  >
    <div class="container-md">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"
            ><img src="public/assets/icons8-spotify-48.png" alt=""
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
         
      </nav>
      <div class="main">
        <div class="audio audio1 dark">
            <img src="/assets/img (1).png" alt="">
            <h2>Top 50 - India</h2>
            <p>Your daily update of the most played tracks right now - India.</p>
        </div>
        <div class="audio audio1 dark">
            <img src="/assets/img (2).png" alt="">
            <h2>Nija pearls</h2>
            <p>The finest set of Telugu music from the past 5 years. Cover : Pushpa</p>
        </div>
        <div class="audio audio1 dark">
            <img src="/assets/img (3).png" alt="">
            <h2>Today Top Hits</h2>
            <p>Chaand Baaliyan' and other popular Indie hits! Cover - Akanksha Sethi</p>
        </div>
        <div class="audio audio1 dark">
            <img src="/assets/img (4).png" alt="">
            <h2>Pop Favourites</h2>
            <p>Keep calm and focus with ambient and post-rock music.</p>
        </div>
        <div class="audio  dark">
            <img src="/assets/img (5).png" alt="">
            <h2>Top 50 - India</h2>
            <p>Your daily update of the most played tracks right now - India.</p>
        </div>
        <div class="audio audio1 dark">
            <img src="/assets/img (6).png" alt="">
            <h2>Top 50 - India</h2>
            <p>Your daily update of the most played tracks right now - India.</p>
        </div>
        <div class="audio  dark">
            <img src="/assets/img (7).png" alt="">
            <h2>Top 50 - India</h2>
            <p>Your daily update of the most played tracks right now - India.</p>
        </div>
        <div class="audio audio1 dark">
            <img src="/assets/img (8).png" alt="">
            <h2>Top 50 - India</h2>
            <p>Your daily update of the most played tracks right now - India.</p>
        </div>
        <div class="audio audio1 dark">
            <img src="/assets/img (9).png" alt="">
            <h2>Top 50 - India</h2>
            <p>Your daily update of the most played tracks right now - India.</p>
        </div>
        <div class="audio  dark">
            <img src="/assets/img (10).png" alt="">
            <h2>Top 50 - India</h2>
            <p>Your daily update of the most played tracks right now - India.</p>
        </div>
        <div class="audio audio1 dark">
            <img src="/assetss/img (11).png" alt="">
            <h2>Top 50 - India</h2>
            <p>Your daily update of the most played tracks right now - India.</p>
        </div>
        <div class="audio    dark">
            <img src="/assets/img (12).png" alt="">
            <h2>Top 50 - India</h2>
            <p>Your daily update of the most played tracks right now - India.</p>
        </div>
        @endsection
      </div>
    </div>

{{-- fungsi logout
<form id="logout-form" action="/logout" method="POST" style="display: none;">
  @csrf
</form>


<script>
  // buat js
  // ini fungsi logout
  document.getElementById('logout-link').addEventListener('click', function(e) {
      e.preventDefault();
      document.getElementById('logout-form').submit();
  }); --}}

</script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
  </body>
</html>