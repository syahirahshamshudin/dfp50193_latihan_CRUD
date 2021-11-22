<?php
require 'conn.php';

$name = $_POST['name'];
$ic = $_POST['ic'];

$sql = "INSERT INTO senarai (name, ic) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ss', $name, $ic);
$stmt->execute();

if ($mysqli->error) {
    ?>
    <script>
        alert('Maaf! Nama tersebut sudah wujud dalam senarai');
        window.location = 'index.php';
    </script>
    <?php
    exit;
} else {
    header('location: index.php');
}
