<?php
if(isset($_GET['on'])){
    addcart();
}

function addcart(){
    echo "Item successfully added to cart.\nThanks for shopping.";
}