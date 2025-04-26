<?php
<<<<<<< HEAD
include_once("connection.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));

    if (!empty($email) && !empty($password)) {
        $result = $conn->query("SELECT user_id, name, password FROM Users WHERE email = '$email'");
       
        $result = $conn->query("SELECT user_id, name, password FROM Users WHERE email = '$email'");
        $result = $conn->query("SELECT user_id, name, password, role FROM Users WHERE email = '$email'");

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                $_SESSION["user_id"] = $row['user_id'];
                header("Location: dashboard.php");
                exit();
=======
//including the database connection file
include_once("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));

    // Simple validation (you can add more as needed)
    if (!empty($email) && !empty($password)) {
        
        $result = $conn->query("SELECT id, firstname, password FROM tbl_users WHERE email = '$email'");

        if ($result->num_rows > 0) {
            
            $row = $result->fetch_assoc();
            // if (password_verify($password, $row['password'])) {
                if ($password== $row['password']) {
                $_SESSION["user_id"] = $row['id'];
                $name = $row['firstname'];
                echo "<script>alert('Login successful! Welcome ".$name."');</script>";
>>>>>>> 55dde70cd0434da8d17e9b0bdf9c8cc8b793bcec
            } else {
                $error = "Invalid password.";
            }
        } else {
            $error = "No user found with that email.";
        }
    } else {
        echo "<p>Please fill in all fields.</p>";
    }
<<<<<<< HEAD
}
?>

<!DOCTYPE html>
<html>
<head>
=======
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
>>>>>>> 55dde70cd0434da8d17e9b0bdf9c8cc8b793bcec
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST">
        <label>Email:</label>
<<<<<<< HEAD
        <input type="email" name="email" required><br><br>
        <label>Password:</label>
        <input type="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
=======
        <input type="email" name="email" id="email" required>
        <br><br>
        <label>Password:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <br>
        <button type="submit">Login</button>
    </form>

>>>>>>> 55dde70cd0434da8d17e9b0bdf9c8cc8b793bcec
    <br>
    <a href="register.php">Register</a>
</body>
</html>