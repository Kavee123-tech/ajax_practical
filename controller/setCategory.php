<?php
include 'connection.php';
$sql = "SELECT * FROM category";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<option value="' . $row['id'] . '">' . $row['category'] . '</option>';
    }
}