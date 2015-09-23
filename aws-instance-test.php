<?php

require 'vendor/autoload.php';
$config = array();

echo 'Listing instances in this region: ' . getenv('aws_region') . PHP_EOL;

$config['key'] = getenv('aws_access_key_id');
$config['secret'] = getenv('aws_secret_access_key');
$config['region'] = getenv('aws_region');
$config['version'] = '2015-04-15';

$ec2Client = \Aws\Ec2\Ec2Client::factory($config);

$result = $ec2Client->DescribeInstances();
 
$reservations = $result['Reservations'];

//$numinst = count($reservations);

//var_dump($reservations);

//echo 'There are ' . $numinst . ' instances' ;

 $y=1;

echo 'ID,instance_id,instance_type' . PHP_EOL;

foreach ($reservations as $reservation) {
    $instances = $reservation['Instances'];
    foreach ($instances as $instance) {

       // if ($instance['State']['Name'] = 'running')
        //{
        //echo '---> State: ' . $instance['State']['Name'] . PHP_EOL;
        
        echo $y . ',';
        echo $instance['InstanceId'] . ',';
        //echo '---> Private Dns Name: ' . $instance['PrivateDnsName'] . PHP_EOL;
        echo $instance['InstanceType'] . ',' . PHP_EOL;
        //echo '---> Security Group: ' . $instance['SecurityGroups'][0]['GroupName'] . PHP_EOL;
        //echo '# is ' . $y . PHP_EOL;
        $y++;
    }
    

}

//echo 'Total instances: ' . ($y - 1) . PHP_EOL;
//echo 'Array count is: ' . count($reservations) . PHP_EOL;
?>