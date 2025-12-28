<!-- /*
echo "<h1 style='color:green'>Form Submitted successfully</h1>";
echo "
<pre>"; 
print_r($_POST); 
echo "</pre>";
*/ -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $passcode = $_POST['passcode'];
    $message = $_POST['message'];

    echo "<h1 style='color:green'>Form Submitted successfully</h1>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Password: " . $passcode . "<br>";
    echo "Message: " . $message;
}
?>