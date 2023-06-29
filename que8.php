<!--Write a PHP program to validate an email address. [ use concept of regular expression]-->

<?php

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $email)) {
        echo "Valid Email";
    } else {
        echo "Invalid Email";
    }
}
?>

<form method="post">
    <input type="text" name="email">
    <input type="submit" name="submit" value="Validate">
</form>
