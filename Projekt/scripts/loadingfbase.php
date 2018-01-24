<?php
//header('Content-Type: application/json;charset=utf-8');
// Create connection
$conn = new mysqli('localhost', 'darniartek_projektkino', 'Pwsz2018', 'darniartek_projektkino');
// Check connection
if ($conn->connect_error) {
    die("Nie połączono z bazą danych " . $conn->connect_error);
} 

$sql = "SELECT rzad,miejsce FROM rezerwacja_miejsc WHERE id_rez=1;";
$result = $conn->query($sql);
$i=0;
$zmienna = [];
$rowy = mysqli_num_rows($result);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$zmienna[$i]=$row["rzad"]."".$row["miejsce"];

$i++;
    }
} else {
    echo "0 results";
}
$conn->close();

?>