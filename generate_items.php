<div class="row">

<?php
require_once 'form_login.php';
$isAuth= isAuthenticated();

for ($i=1; $i < 7 ; $i++) {
  $none='';
  if($isAuth == false){$none = 'style="display:none"';}
  echo '<div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
      <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="#">Item'.$i.'</a>
        </h4>
        <h5>$24.99</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
        <form action="" method="POST">
          <input type="hidden" name="item" value="item'.$i.'">
          <small '. $none .' ><input type="submit" name="buy" value="buy"></small>
        </form>
      </div>
    </div>
  </div>';
}

 ?>
</div>
<!-- /.row -->
