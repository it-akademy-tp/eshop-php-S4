<?php


function addToCart($data){

      if($data['buy']){

        $_SESSION['panier'][] = $_POST['item'];

}
}
