<?php

function loginIsValid($email, $password){
  $csv = array_map('str_getcsv', file('users.csv'));
  $nb = count($csv);
  for ($i=0; $i <= $nb ; $i++) {
     if($email == $csv[$i][0] && password_verify($password, $csv[$i][1]) == true){
       return true;
       break;
     }else{
       return false;
     }
   }
}

function renderFormLogin(){
    echo '<h3 class="my-4">LOGIN</h3>
    <div class="list-group">
      <form class="" action="" method="POST">
        <div class="form-group">
          <label for="emailLogin" >Email</label>
          <input
            name="emailLogin"
            type="text"
            class="form-control"
            id="emailLogin"
            placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="passwordLogin">Password</label>
          <input name="passwordLogin" type="password" class="form-control"  id="passwordLogin" placeholder="Password">
        </div>
        <input type="submit" name="submit" value="LOGIN">
      </form>
      <a href="register.php">S\'inscrire</a>
      </div>';

}

function isAuthenticated(){
  if(isset($_SESSION['user']) && !empty($_SESSION['user']))
    return true;
  return false;
}


function userLogOut(){
  unset($_SESSION);
  session_destroy();
}
