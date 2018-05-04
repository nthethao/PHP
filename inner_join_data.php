 <?php
$servername = "localhost";
$username = "admin";
$password = "";
$dbname = "test_db";


$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
	die("connection faild : " . $conn->connect_error);

}

$sql ="SELECT acc_transaction.TXN_ID,acc_transaction.FUNDS_AVAIL_DATE,account.AVAIL_BALANCE FROM acc_transaction INNER JOIN account ON acc_transaction.ACCOUNT_ID=account.ACCOUNT_ID WHERE account.AVAIL_BALANCE='500'   ";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["TXN_ID"]. " - FUNDS_AVAIL_DATE: " . $row["FUNDS_AVAIL_DATE"]." account-AVAIL_BALANCE: ".$row["AVAIL_BALANCE"] ."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>