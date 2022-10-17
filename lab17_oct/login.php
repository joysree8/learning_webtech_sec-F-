<?php
$username = $_POST["username"];
$username = $_POST["password"];

 if ($username == "" || $password == "")
 {
      echo "invalid username/password";
 }
 else if (strlen($username) <2)
 {
    echo "must 2 cherecter";
 }
 else if (strlen($username) <8)
 {
    echo "must 8 cherecter";
 }
 else if (strlen($password,'@') == false)
    {
        echo "special cherecter";
 }
else
{
echo "<h1>Wlcome To Login Info</h1>";
}
 ?>