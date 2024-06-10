<?php
function query()
{


//Koneksi ke Database
$conn = mysqli_connect('localhost', 'root', '', 'pw2024_233040010');
return $conn;
}
    function Query($query)
{
    $conn = koneksi();
    $result = mysqli_query("$conn, $query");


$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
    }

return $rows

}
