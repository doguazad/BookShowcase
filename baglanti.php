<?php

try {
    $db=new PDO("mysql:host=localhost; dbname=taban1", 'root', '');
    
} catch (Exception $e) {
    echo $e->getMessage();
}


?>