<?php

$sesitiveData = 'Victor';
$salt = bin2hex(random_bytes(16)); //Generate random salt
$pepper = "AsecretPepperString";  
echo "<br>". $salt;     

$dataTOHash = $sesitiveData. $salt. $pepper;
$hash = hash('sha256',$dataTOHash );

echo "<br>". $hash;