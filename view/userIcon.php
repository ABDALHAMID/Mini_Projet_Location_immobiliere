<?php

if(isset($_SESSION["id"]) && isset($_SESSION["type"])){
    echo "user";
}
else{
    echo "login";
}






?>