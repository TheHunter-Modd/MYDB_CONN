<?php

$pwdSignup = 'SecurePassword123!';

$options = [
    'cost' => 12,
];

$hashedPwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options);

$pwdLogin = 'SecurePassword123!';
if (password_verify($pwdLogin, $hashedPwd)) {
    echo "They are the same!";
} else {
    echo "They are NOT the same!";
}
