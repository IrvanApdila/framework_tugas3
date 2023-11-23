<!DOCTYPE html>
<html lang="en">

<head>
    @extends('layout.base')

    @section('content')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Your Music Player</title>
    <link rel="stylesheet" href="/css/blog.css">
    <link rel="icon" type="image/x-icon" href="/images/logo.png">
</head>

<body>
    <header>
        <a href="" class="logo">
            <h3>Your Music Player</h3>
        </a>
        <i class="fa-solid fa-magnifying-glass"></i>
    </header>

    <main class="about-page">
        <h1>About Us</h1>
        <p>Welcome to Your Music Player, your ultimate destination for music discovery and enjoyment. Our mission is to provide you with the best music experience possible. Whether you're a music enthusiast or just looking for your favorite tunes, we've got you covered.</p>

       
        <div class="team-member">
            <img src="/images/team-member-1.jpg" alt="VAN">
            <h3>Irvan Apdila</h3>
            <p></p>
        </div>
      

        <h2>Contact Us</h2>
        <p>If you have any questions, suggestions, or feedback, please don't hesitate to reach out to us. We love to hear from our users!</p>
        <a href="/contact" class="btn-contact">Contact Us</a>
    </main>

    <footer>
        <p>&copy; 2023 Your Music Player</p>
    </footer>
</body>
@endsection
</html>
