<?php

$pageTitle = 'Dashboard';

require 'includes/templates/index.php';

if(isset($_SESSION['username'])){
    echo 'welcome '. $_SESSION['username'];
}else{
    // echo 'You Not Autherized' ;

    header("Location: index.php");
}

?>
