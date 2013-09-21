<?php

session_start();

print $_SESSION['access_token']['user_id'];
print $_SESSION['access_token']['screen_name'];
print $_SESSION['oauth_token'];
print $_SESSION['oauth_token_secret'];
print_r($_SESSION);


?>