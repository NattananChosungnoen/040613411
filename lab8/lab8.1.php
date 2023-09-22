<?php include "connect.php" ?>
<html>
<head><meta charset="utf-8"></head>
<body>
<?php
$stmt = $pdo->prepare("SELECT * FROM product");
$stmt->execute();
    $i = 0;
    while ($row = $stmt->fetch()) {
        $x[$i] = $row["pid"];
            $y[$i] = $row["pname"];
            $z[$i] = $row["pdetail"];
            $xx[$i]= $row["price"];
            $i++;
                   
    }echo "
    <table border='1' >
        <tr>
            <th>รหัสสินค้า</th>
            <th>ชื่อสินค้า</th>
            <th>รายละเอียดสินค้า</th>
            <th>ราคา</th>
        </tr>";
        for($j=0;$j<$i;$j++){
            echo "<tr><td>$x[$j]</td><td>$y[$j]</td><td>$z[$j]</td><td>$xx[$j] บาท</td></tr>";
        }
    echo "</table>";
?>

</body>
</html>