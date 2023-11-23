<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content=" Today in this blog you will learn how to create a responsive Login & Registration Form in HTML CSS & JavaScript. The blog will cover everything from the basics of creating a Login & Registration in HTML, to styling it with CSS and adding with JavaScript." />
    <meta
      name="keywords"
      content="Animated Login & Registration Form,Form Design,HTML and CSS,HTML CSS JavaScript,login & registration form,login & signup form,Login Form Design,registration form,Signup Form,HTML,CSS,JavaScript,"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Login & Register</title>
    <link rel="stylesheet" href="/css/log.css" />

  </head>
  <body>
    <section class="wrapper">
      <div class="form signup">
        <header>Signup</header>
        <form action="/register" method="POST">
          @csrf
          <div>
            <input type="text" class="form-control @error('name') is-invalid @enderror" 
            id="name" name="name" placeholder="Full name" value="{{ old('name') }}"/>     
                  @error('name')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
          </div>
          
          <div>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                   name="email" placeholder="name@example.com" value="{{ old('email') }}">
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

          <div>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" 
                    name="password" placeholder="password"/>
                    @error('password')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror
          </div>
            
          <div>
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" 
                    name="password_confirmation" placeholder="password"/>
                    @error('password_confirmation')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
          </div>

          {{-- <div class="checkbox">
            <input type="checkbox" id="signupCheck" />
            <label for="signupCheck">I accept all terms & conditions</label>
          </div> --}}
          <input type="submit" value="Register" />
        </form>
      </div>

      <div class="form login">
        <header>Login</header>
        <form class="form" action="/" method="POST">
          @csrf
          <div>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                   name="email" placeholder="Email Address" value="{{ old('email') }}">
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div>
          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
          @error('password')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
          @enderror
      </div>

          <a href="#">Forgot password?</a>
          <input type="submit" value="Login" />
        </form>
      </div>

      <script>
        const wrapper = document.querySelector(".wrapper"),
          signupHeader = document.querySelector(".signup header"),
          loginHeader = document.querySelector(".login header");

        loginHeader.addEventListener("click", () => {
          wrapper.classList.add("active");
        });
        signupHeader.addEventListener("click", () => {
          wrapper.classList.remove("active");
        });
      </script>
    </section>
  </body>
</html>
    
{{-- form login --}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>
</html>