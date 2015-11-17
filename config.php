<?php
try {

$db= new PDO('mysql:host=localhost;dbname=pagination;charset=utf8','root','');
$db->setAttribute('PDO::ATTR_ERRMODE;ERRMODE_EXCEPTION);

} catch ('Exception $e) {

die('La base de donneés est indisponible '.$e->getMessage());

}
