
      <?php
        require_once 'header.php';
        require_once 'form_register.php';
        if(!empty($_POST) && isset($_POST['submit'])){
          $errors = checkForm($_POST);
          if(count($errors) == 0)
            saveUser($_POST['email'], $_POST['password']);
            //header("Location:index.php");
        }
      ?>


      <html>
        <head>
          <meta charset="utf-8">
          <title>Site marchand</title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        </head>
        <body>

      <div class="container col-5">
        <h2> INSCRIPTION </h2>
        <form class="" action="" method="POST">
          <div class="form-group">
            <label for="email" >Email</label>
            <input
              name="email"
              type="text"
              class="form-control <?php if(isset($errors['email'])){ echo 'is-invalid';} ?>"
              id="email"
              placeholder="Enter email"
              value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>"
            >
            <?php if(isset($errors['email'])) { echo displayErrors($errors['email']); } ?>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control <?php if(isset($errors['password'])){ echo 'is-invalid';} ?>" id="password" placeholder="Password">
            <?php if(isset($errors['password'])) { echo displayErrors($errors['password']); } ?>
          </div>
          <input type="submit" name="submit" value="Subscribe">
        </form>
      </div>

    </body>
    </html>
