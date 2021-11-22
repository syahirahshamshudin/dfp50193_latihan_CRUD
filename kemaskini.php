<?php
require 'conn.php';

$idsenarai = $_POST['idsenarai'];
$name = $_POST['name'];
$ic = $_POST['ic'];

$sql = "UPDATE senarai SET name = ?, ic = ? WHERE idsenarai = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ssi', $name, $ic, $idsenarai);
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