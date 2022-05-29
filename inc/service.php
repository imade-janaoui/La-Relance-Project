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



if(isset($_POST['Register'])){
  $nom=$_POST['nom_etd'];
  $prenom=$_POST['prenom_etd'];
  $email=$_POST['email_etd'];
  $tele=$_POST['tele_etd'];
  $cin=$_POST['cin_etd'];
  $prix=$_POST['prix_etd'];
  $pwd=$_POST['pwd_etd'];
  $pwd_confirm=$_POST['nom_etd'];

  if($cin==$pwd){
    $sql="INSERT INTO `etudaint`(`nom`, `prenom`, `tele`, `email`, `prix`, `cin`, `groupe`, `password`, `id_prof`, `id_groupe`) VALUES('$nom','$prenom',$tele,'$email',$prix,'$cin','Deutsch B1','$pwd',1,1)";
    
    if($reqt=mysqli_query($conn,$sql)){

    
   
    header('Location:groupes_list.php');
  }else{
    echo '<script> alert("du hast eine probleme"); </script>';
  }
}
  mysqli_close($conn);

}

?>
