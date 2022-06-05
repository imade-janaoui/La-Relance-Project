<?php
include_once 'config.php';

session_start();


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


//----------------------------------- function login -----------------------
// if(isset($_POST['login'])){
//   $sql="SELECT * FROM `prof`";
// $result=mysqli_query($conn,$sql);
// $email=$_POST['email_user'];
// $password=$_POST['pwd_user'];
// if (mysqli_num_rows($result) > 0) {
// while($row=mysqli_fetch_assoc($result)){

// // }
// //    if($row['email']=='sokaina12@larelance.ma'){
// //        if($row['mot_passe']=='$password'){
// //            header('Location:inc/prof.php');
// //        }else{
// //            echo '<script>alert("pwd error")</script>';
// //        }
       
// //    }else{
// //        echo '<script>alert("email error")</script>';
// //    }
//    echo $row['email'];
//    mysqli_close($conn);
   
// }
// }}


if(isset($_POST['login'])){
  
    function validate($data){
         $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    $email = validate($_POST['email_user']);
    $password = validate($_POST['pwd_user']);
  
    if (empty($email)) {
      // header("Location: ../index.php?error=Your email is required");
      echo '<script>alert("empty email error")</script>';
        exit();
    }else if(empty($password)){
          // header("Location: ../index.php?error=Password is required");
          echo '<script>alert("pwd error")</script>';
        exit();
    }else{     
      $sql_prof = "SELECT * FROM `prof` WHERE email='$email' AND mot_passe='$password'";
      $result_prof = mysqli_query($conn, $sql_prof);
  
      if (mysqli_num_rows($result_prof) === 1) {
        $row_prof = mysqli_fetch_assoc($result_prof);
              
                $_SESSION['email'] = $row_prof['email'];
                $_SESSION['nom_prof'] = $row_prof['nom_prof'];
                $_SESSION['prenom_prof'] = $row_prof['prenom_prof'];

          // header("Location: ../index.php?error=Incorect Email or password");
          header("Location: ../inc/prof.php");
            exit();
      
  }else{
   
        $sql_etudiant = "SELECT * FROM `etudaint` WHERE email='$email' AND password='$password'";
      $result_etudiant = mysqli_query($conn, $sql_etudiant);
          if(mysqli_num_rows($result_etudiant)){
            $row_etudiant = mysqli_fetch_assoc($result_etudiant);
                          
            $_SESSION['email_etudiant'] = $row_etudiant['email'];
                $_SESSION['nom_etudiant'] = $row_etudiant['nom'];
                $_SESSION['prenom_etudiant'] = $row_etudiant['prenom'];
      // header("Location: ../index.php?error=Incorect Email or password");
      header("Location: ../inc/home.php");
    exit();
      } else{
        header("Location:../index.php");
        echo '<script>alert(" error")</script>';
        exit();
      }
      
      
      
  }
}
}



?>
