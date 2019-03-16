
<?php
  require_once 'form_login.php';
  require_once 'market.php';
  if(loginIsValid($_POST['emailLogin'], $_POST['passwordLogin'])){
    $_SESSION['user']['email'] = $_POST['emailLogin'];
  }
?>

<div class="container">

      <div class="row">

        <div class="col-lg-3">
          <?php
          if ($_POST['deco']){
            userLogOut();
          }

          if(!isAuthenticated()){
            renderFormLogin();
          } else { ?>
            <div class="list-group my-4">
              <a href="#" class="list-group-item">Vous etes connecté avec le compte : <?php echo $_SESSION['user']['email']; ?></a>
              <form action="" method="POST">
                <input type="submit" name="deco" value="deco">
              </form>
            </div>
            <!-- debut -->
            <div>
              <ul>
          <?php }

            addToCart($_POST);

            if(isset($_SESSION['panier'])) {
              foreach ($_SESSION['panier'] as $key => $value) {
              echo '<li class="list-group-item" style="list-style-type: none;">'.$value.'</li>';              }
            }

          ?>
          </ul>
        </div>
        <!--fin -->
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9" style="padding-top:20px;">


          <?php require_once 'generate_items.php'; ?>

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
