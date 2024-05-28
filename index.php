<?php

$hash = password_hash("password123", PASSWORD_DEFAULT);
echo $hash;
echo "<br>";

if (password_verify("password123", $hash)) {
  echo "Password is valid!";
} else {
  echo "Not valid!";
}
?>