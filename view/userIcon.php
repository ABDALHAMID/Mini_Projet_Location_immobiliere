<?php

if(isset($_SESSION["id"]) && isset($_SESSION["type"])){
    echo '

    <a href="'.htmlspecialchars($_SERVER['PHP_SELF']) . '?page=logout'.'" class="btn btn-outline-danger mr-2">
       logout
    </a>';
}
else{
    echo '
    <a href="'.htmlspecialchars($_SERVER['PHP_SELF']) . '?page=signup'.'" class="btn btn btn-success mr-2">
       signup
    </a>
    <a href="'.htmlspecialchars($_SERVER['PHP_SELF']) . '?page=login'.'" class="btn btn-outline-success mr-2">
       login
    </a>';
}






?>