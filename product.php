<?php
require 'db.php';
class product
{
    public function __construct()
    {
        $db = new Database;
        $this->conn = $db->conn;
    }

    public function data()
    {
        $sql = "SELECT * FROM products";
        $result = $this->conn->query($sql);

        if (mysqli_num_rows($result) > 0) {
            return $result;

        } else {
            return false;
        }
    }
}

$products =new product();
$result=$products->data();

echo"<h1 style='text-align: center;font-size: 50px'>Products</h1>";
echo "<table style='width:100%;background-color: blanchedalmond;border:2px solid black;border-collapse:collapse;padding: 10px;text-align: center'>

<tr style='padding: 10px;border:2px solid black'>
<th style='padding: 10px;border:2px solid black'>Product ID</th>
<th style='padding: 10px;border:2px solid black'>Product Name</th>
<th style='padding: 10px;border:2px solid black'>Product SKU</th>
<th style='padding: 10px;border:2px solid black'>Product Price</th>
<th style='padding: 10px;border:2px solid black'>Product Image</th>
</tr>";

if($result) {
    foreach ($result as $row) {

            echo "<tr style='padding: 10px;border:2px solid black'>";

            echo "<td style='padding: 10px;border:2px solid black'>" . $row['ProductID'] . "</td>";

            echo "<td style='padding: 10px;border:2px solid black'>" .  $row['ProductName'] . "</td>";

            echo "<td style='padding: 10px;border:2px solid black'>" .  $row['ProductSKU'] . "</td>";

            echo "<td style='padding: 10px;border:2px solid black'>".  $row['ProductPrice'] ."</td>";

           ?>
           <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"></td>

<?php

            echo "</tr>";

        }

        echo "</table>";

}
?>

