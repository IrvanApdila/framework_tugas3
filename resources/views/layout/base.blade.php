<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f42cc9f212.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #155d27;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/images/th-removebg-preview.png" alt="Your Logo" width="50">
            </a>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/home" style="color: white; "> Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/hits"  style="color: white;">Hot Hits Indonesia</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/myblog" style="color: white;">About Us</a>
                    </li>
                   
                    
                   


                </ul>


                </ul>

                <ul>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="https://github.com/IrvanApdila/postest1_web" style="color: rgb(255, 255, 255);"><i class="fab fa-github"></i></a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="" style="color: white;"><i class="fab fa-twitter"></i></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="" style="color: white;"><i class="fab fa-slack-hash"></i></a>
                        </li>



                        <li class="nav-item p-1">
                            <a class="nav-link" href="" style="color: white;">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        fill-rule="evenodd" class="navbar-nav-svg d-inline-block align-text-top"
                                        viewBox="0 0 40 41" role="img">
                                        <title>Open Collective</title>
                                        <path fill-opacity=".4"
                                            d="M32.8 21c0 2.4-.8 4.9-2 6.9l5.1 5.1c2.5-3.4 4.1-7.6 4.1-12 0-4.6-1.6-8.8-4-12.2L30.7 14c1.2 2 2 4.3 2 7z">
                                        </path>
                                        <path
                                            d="M20 33.7a12.8 12.8 0 0 1 0-25.6c2.6 0 5 .7 7 2.1L32 5a20 20 0 1 0 .1 31.9l-5-5.2a13 13 0 0 1-7 2z">
                                        </path>
                                    </svg>
                                </a>
                        </li>
                    </ul>

                </ul>

            </div>
        </div>
    </nav>
    @yield('content')
</body>

</html>