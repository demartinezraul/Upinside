<META CHARSET="UTF-8">
<?php
require('./_app/Config.inc.php');

$conn = new Conn();
$conn->getConn();

var_dump($conn->getConn());