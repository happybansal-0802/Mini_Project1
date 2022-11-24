<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="sign.css" />
  </head>
  <body>
  <?php
                    // Your message code
                    if(isset($_SESSION['message']))
                    {
                        echo '<h4 class="alert alert-warning" style="color:rgb(27,27,180)">'.$_SESSION['message'].'</h4>';
                        unset($_SESSION['message']);
                    } // Your message code
                ?>
    <div class="container" id="container">
      <div class="form-container sign-up-container">
        <form action="signupsubmit.php" method="post">
          <h1>Create Account</h1>

          <span>use your email for registration</span>
          <input type="text" placeholder="Name" name="name" />
          <input type="email" placeholder="Email" name="email" />
          <input type="password" placeholder="Password" name="password" />
          <input type="radio" name="gender" value="Male" />Male
          <input type="radio" name="gender" value="Female" />Female
          <input type="number" placeholder="age" name="age" />
          <input type="text" placeholder="address" name="address" />
          <button type="submit">Sign Up</button>
        </form>
      </div>
      <div class="form-container sign-in-container">
        <form action="login-code.php" method="post" id="form1">
          <h1>Sign in</h1>

          <span>use your account</span>
          <input type="email" placeholder="email" name="email" />
          <input type="password" placeholder="password" name="password" />

          <button name="login_button" type="submit">Sign In</button>
        </form>
       

      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>Welcome Back!</h1>
            <p>
              To keep connected with us please login with your personal info
            </p>
            <button
              class="ghost"
              id="signIn"
              style="background-color: white; color: rgb(27, 27, 160)"
            >
              Sign In
            </button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1>Hello, Friend!</h1>
            <p>Enter your personal details and start journey with us</p>
            <button
              class="ghost"
              id="signUp"
              style="background-color: white; color: rgb(27, 27, 160)"
            >
              Sign Up
            </button>
          </div>
        </div>
      </div>
    </div>

    <script>
      const signUpButton = document.getElementById("signUp");
      const signInButton = document.getElementById("signIn");
      const container = document.getElementById("container");

      signUpButton.addEventListener("click", () => {
        container.classList.add("right-panel-active");
      });

      signInButton.addEventListener("click", () => {
        container.classList.remove("right-panel-active");
      });
    </script>
  </body>
</html>
