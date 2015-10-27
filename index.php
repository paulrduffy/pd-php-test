<!DOCTYPE html>



<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Simple PHP App</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body bgcolor="#FF0000">
        <div class="container">
            <div class="hero-unit">
                <h1><font face="verdana" color="yellow">Very Simple PHP Test Application...</font></h1>
                <br>
                <p><font face="verdana" color="yellow" size="5">This simple PHP test application was deployed in a Runnable Sandbox!</font></p>
                <br>
                <br>
                <p><font face="verdana" color="red" size="3">GitHub integration made this really simple to get running in a Runnable Sandbox</font></p>
            </div>
        </div>

    </body>
<?php

echo "Test <br>";

$client = new LaunchDarkly\LDClient("api-a919a477-ac9c-41f9-9427-26ee853251ae");

$builder = (new LaunchDarkly\LDUserBuilder("paulrduffy@gmail.com"))
  ->firstName("Paul")
  ->lastName("Duffy")
  ->custom(["groups" => "beta_testers"]);

$user = $builder.build();

if ($client->toggle("secret-feature", $user, false)) {
  // application code to show the feature
  echo "Showing your feature to " . $user->key . "\n";
} else {
  // the code to run if the feature is off
  echo "Not showing your feature to " . $user->key . "\n";
}

$client->flush();

?>

</html>


