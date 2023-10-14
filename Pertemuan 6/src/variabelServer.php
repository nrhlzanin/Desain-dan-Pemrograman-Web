<?php
/*Soal 21
    echo json_encode($_SERVER);
*/
/*Soal 22
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
*/
/*Soal 23
    $nama = @$_GET['nama'];//tanda @ agar tidak ada peringatan error ketika keynya kosong
    $usia = @$_GET['usia'];//tanda @ agar tidak ada peringatan error ketika keynya kosong

    echo "Hallo {$nama}! Apakah benar anda berusia {$usia} tahun?"
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<!-- Soal 24
<body>  
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>
    <?php 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // collection value of input field
            $name = $_POST['fname'];
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
        }
    ?>
</body>
    -->
<!--Soal 25
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>
    <?php 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // collection value of input field
            $name = $_REQUEST['fname'];
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
        }
    ?>
</body>
-->
</html>

<?php
    $x = 75;
    $y = 25;

    function addition() {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    addition();
    echo $z;
?>
