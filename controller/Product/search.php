<?php


include __DIR__ . "../../../../../htdocs/agency/config/DbConnection.php";

$search = mysqli_real_escape_string($connexion, $_GET['PREMIUM']);
$sql = "SELECT * FROM `product` WHERE nom LIKE '%$search%'";
$result = mysqli_query($connexion, $sql);

$searchResults = "";

if (mysqli_num_rows($result) != 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $searchResults =  $row["nom"];
    }
}

echo json_encode($searchResults);

?>