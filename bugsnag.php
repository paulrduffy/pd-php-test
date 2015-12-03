<?php
require 'vendor/autoload.php';
$bugsnag = new Bugsnag_Client('4de1874af3c17cb105b4bfae6674cdf6');

$bugsnag->notifyError('ErrorType', 'Test Error for Thursday');

?>
