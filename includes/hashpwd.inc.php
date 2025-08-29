<?php

$sesitiveData = 'Oyeleke';
$salt = bin2hex(random_bytes(16)); //Generate random salt
$pepper = "ASecretPepperString";  
//echo "<br>". $salt;     

$dataTOHash = $sesitiveData. $salt. $pepper;
$hash = hash('sha256',$dataTOHash );

//echo "<br>". $hash;

/*-----*/
$sesitiveData = 'Oyeleke';

$storedSalt = $salt;
$storedHash = $hash;
$pepper = "ASecretPepperString";

$dataTOHash = $sesitiveData. $storedSalt. $pepper;

$verificationHash = hash('sha256',$dataTOHash );


if ($storedHash === $verificationHash) {
    echo "The data are the same!";
    echo "<br>";
    echo $storedHash;
    echo "<br>";
    echo $verificationHash;
}
else {
    echo "The data are NOT the same!";
}

