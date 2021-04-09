<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Display.css">
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
<h1> <?php echo 'Hello!! Mr ' . $_GET['Fname']." ".$_GET['Lname'] ?></h1>
<h2>Your details are as under</h2>
<form class="form-signin" action="Refresh.php" method="get" style="text_align:left">

  <h3>First name :
    <?php echo  $_GET['Fname'] ?>
  </h3>

  <h3>Last name :
    <?php echo  $_GET['Lname'] ?>
  </h3>

  <h3>Email :
    <?php echo  $_GET['email'] ?>
  </h3>

  <h3>Contact :
    <?php echo  $_GET['PhNum'] ?>
  </h3>

  <h3 style="text_align:right">Gender :
    <?php echo $_GET['gender']?>
  </h3>

  <h3>Privacies Accepted :
    <?php
    if (isset($_GET['privacy'])) {
      echo 'Yes';
    }
    else {
      echo 'No';
    }?>
  </h3>

  <button class="btn btn-lg btn-primary btn-block" name="alphaa" type="submit" style=" margin-top: 10px;padding:7px;">Exit</button>

</form>

</div>
</section>

  </body>
</html>
