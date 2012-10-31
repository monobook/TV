<?php
require_once (__DIR__ . '/Dimka/autoload.php');

use Dimka\VendorClasses\Toshiba as Tosha;
use Dimka\VendorClasses\Samsung as Sams;

$mySamsung = new Sams();
$mySamsung->series = '6th';

$myToshiba = new Tosha('DVB-C');

?>

<html>
<body>
<h1>Very smarty TV say Hello:</h1>

<p><?php $mySamsung->sayHello(); ?></p>

<h1>Check DVB ?!</h1>

<p><?php $myToshiba->checkDvbTuner(); ?></p>
</body>
</html>
