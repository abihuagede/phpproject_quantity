 
<?php
include "database.php";

echo "query data" . "<br>";
$sql = "SELECT * FROM users  WHERE user = 'AbihuAgede'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $row  = mysqli_fetch_assoc($result);
    echo  $row["id"]  . "<br>";
    echo $row["user"]  . "<br>";
    echo  $row["reg_date"]  . "<br>";
}
mysqli_close($conn);

?>