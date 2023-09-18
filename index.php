<?php
// Server-side password verification
$credentials = [
  "admin-x1" => "2345",
  "admin-x2" => "3574",
  "admin-x3" => "3457"
];

$username = $_POST["username"];
$password = $_POST["password"];

if (array_key_exists($username, $credentials) && $credentials[$username] === $password) {
  // Redirect to the desired page on successful login
  header("Location: project_x-v4/source/index.html");
  exit;
} else {
  // Invalid username or password
  echo "Invalid username or password!";
}
</php>
