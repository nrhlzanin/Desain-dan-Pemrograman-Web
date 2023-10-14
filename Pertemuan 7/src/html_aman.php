<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input PHP</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="input">Masukkan nama : </label>
        <input type="text" name="input" id="input"><br><br>

        <label for="email">Masukkan email : </label>
        <input type="text" name="email" id="email"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['input'];
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

    echo "Input yang anda masukkan: " . $input;
    echo "<br>";
    
    if (isset($_POST['email'])) {
        // Memeriksa apakah input adalah email yang valid
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Lanjutkan dengan pengolahan email yang aman
            echo "Email valid: " . $email;
        } else {
            // Tangani input yang tidak valid
            echo "Email tidak valid, harap masukkan email yang valid";
        }
    }
}
?>
