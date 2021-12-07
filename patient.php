<?php
    if(isset($_SESSION)){
        session_destroy();
    }
    include "pdo.php";

?>