<?php
include_once 'config.php';



// <!-- ajouter une groupe -->

if (isset($_POST['Register_groupe']))
{
$groupe_name=$_POST["groupe_name"];
$prof_id=$_POST["prof_id"];
$date=date("Y-m-d");
$reqt="SELECT * FROM prof WHERE id_prof=".$prof_id;
$result_prof = mysqli_query($conn, $reqt);
                    // output data of each row
                  
if(  $row_prof = mysqli_fetch_assoc($result_prof)){
  $nom_prof=$row_prof['nom_prof'];
  $prenom_prof=$row_prof['prenom_prof'];
  $cours=$row_prof['cours'];
  $sql = "INSERT INTO `groupe`(`nom_groupe`, `date_crt`,`nom_prof`,`prenom_prof`,`cours`,`id_prof`) VALUES ('$groupe_name','$date','$nom_prof','$prenom_prof','$cours',$prof_id)";
}


if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
  header("Location: groupe.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

}


?>