<?php
$conn = new mysqli("localhost", "root", "kinggiovanni", "rwanda");
$query = $conn->query("select * from provinces");
if ($query->num_rows > 0) {
    while ($row = $query->fetch_assoc()) {
        echo `{$row['']}`;
    }
}
else {
    echo "failed";
}
?>