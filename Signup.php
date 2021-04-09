<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500&display=swap" rel="stylesheet">

    <title>SL Website Design</title>

  </head>
  <body class="text-center">

<section class="alpha_top">
<nav>
  <img src="pictures/logo.png">

</nav>

<div class="alpha_text">
<h1>Sign Up Module</h1>
<form class="form-signin" action="Display.php" method="get">
  <label for="name" class="sr-only">Full Name:</label>
  <input type="name" name="Fname" id="name" class="form-control" placeholder="Enter first name" required autofocus autocomplete="off">
  <input type="name" name="Lname" id="name" class="form-control" placeholder="Enter last name" required autofocus autocomplete="off"><br><br>

  <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autocomplete="off">
  <input type="number" id="PhNum" name="PhNum" class="form-control" placeholder="Enter Mobile Number" required autocomplete="off"><br><br>


  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required autocomplete="off">
  <input type="password" id="inputPassword" name="Confpassword" class="form-control" placeholder="Confirm Password" required autocomplete="off">
  <br>
  <input type="radio" id="male" name="gender" value="Male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="Female">
  <label for="female">Female</label><br>

  <input name="privacy" type="checkbox" id="agree" />
  <label >
    I agree with the <a style=" color:white " href="http://cuiwah.edu.pk/">terms and conditions </a>and <a style=" color:white" href="https://www.comsats.edu.pk/">privacy policies.
  </label><br>
  <button class="btn btn-lg btn-primary btn-block" name="alphaa" type="submit" style="padding:7px;">Confirm and Proceed</button>
</form>

</div>
</section>

  </body>
</html>
