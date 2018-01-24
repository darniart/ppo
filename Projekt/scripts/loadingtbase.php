<?php
/*
  $imie = $_POST['imie'];
  $nazwisko = $_POST['nazwisko'];
  $bilety = $_POST['bilety'];
  $cena = $_POST['cena'];
  $rzad = $_POST['rzad'];
  $miejsce = $_POST['miejsce'];
//header('Content-Type: application/json;charset=utf-8');
// Create connection
$conn = new mysqli('localhost', 'darniartek_projektkino', 'Pwsz2018', 'darniartek_projektkino');
// Check connection
if ($conn->connect_error) {
    die("Nie połączono z bazą danych " . $conn->connect_error);
} 

$sql = "INSERT INTO rezerwacja (id_rep,imie,nazwisko,Bilety,Kwota) VALUES (2,\"$imie\",\"$nazwisko\",$bilety,$cena);";
$sqlr = "SELECT id_rez FROM rezerwacja_miejsc WHERE imie=\"$imie\" AND nazwisko=\"$nazwisko\";";
$result = $conn->query($sqlr);


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$id=$row["id_rez"];
}}else {
    echo "0 results";
}
$sql2= "INSERT INTO rezerwacja_miejsc (id_rez,rzad,miejsce) VALUES ($id,);";
if ($conn->query($sql2) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}

$conn->close();
*/
?>