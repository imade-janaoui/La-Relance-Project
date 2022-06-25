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

// =====================test sauvegarder ======================

if(isset($_POST['test_horen_Sauvegarder'])){
  echo  "<pre>";
   print_r(array($_POST['question1']));
   echo  "</pre>";
}


//==================  link meeting =========================
  if(isset($_POST['meet_link'])){
    
          $groupe_id=$_POST['groupe_id'];
          $link_meet=$_POST['link'];
        
          $reqt="SELECT * FROM `groupe` where id_groupe=$groupe_id";
          $result=mysqli_query($conn,$reqt);
          $value=mysqli_fetch_array($result);
          $prof_id=$value['id_prof'];

          $sql="INSERT INTO `activite`( `nom`, `nom_activite`, `id_prof`, `id_groupe`) VALUES ('lien meeting','$link_meet',$prof_id,$groupe_id)";
          if($result=mysqli_query($conn,$sql)){
            header("Location:test.php");
          }else
          {
            echo 'error';
          }
          mysqli_close($conn);
         

  }

    // =================chaptre============

    if(isset($_POST['chap_link'])){
      
            $groupe_id=$_POST['groupe_id'];
            $link_meet=$_POST['meet_link'];
           
            $reqt="SELECT * FROM `groupe` where id_groupe=$groupe_id";
            $result=mysqli_query($conn,$reqt);
            $value=mysqli_fetch_array($result);
            $prof_id=$value['id_prof'];
  
            $sql="INSERT INTO `activite`( `nom`, `nom_activite`, `id_prof`, `id_groupe`) VALUES ('lien meeting','$link_meet',$prof_id,$groupe_id)";
            if($result=mysqli_query($conn,$sql)){
              header("Location:test.php");
            }else
            {
              echo 'error';
            }
            mysqli_close($conn);
           
  
    }

    //============== les chapitre =====================
  if(isset($_POST['chapitre_save'])){
//     $chapitre_name=$_POST['chapitre_name'];
//     $id_groupe=$_POST['groupe_id'];
   
//       $chapitre_file= $_FILES['file']['name'];
      
    
//     $reqt="SELECT * FROM `groupe` where id_groupe=$id_groupe";
//     $result=mysqli_query($conn,$reqt);
//     $value=mysqli_fetch_assoc($result);
//     $prof_id=$value['id_prof'];
//     if(!empty($chapitre_file)){
//       // destination of the file on the server
//   $destination = 'chapitres/' . $chapitre_file;
//   // get the file extension
//   $extension = pathinfo($chapitre_file, PATHINFO_EXTENSION);
//   $file = $_FILES['file']['tmp_name'];
//   $size = $_FILES['file']['size'];
//   if (!in_array($extension, ['pdf', 'docx'])) {
   
//       // header("Location: ../articles.php?errorarticle=You file extension must be .zip,.pdf, .docx, .pbg, .jpg");
//       echo 'error extension';
    
  
//     } elseif ($_FILES['file']['size'] > 1000000) {
//       echo 'error size';
//      }else{
//       if (move_uploaded_file($file, $destination)) {
//         $sql="INSERT INTO `activite`( `nom`, `nom_activite`, `id_prof`, `id_groupe`) VALUES ('$chapitre_name','$chapitre_file',$prof_id,$groupe_id)";
//         if (mysqli_query($conn, $sql)) {
//         header("Location:chapitre.php");
//     }
//   }
// }

//   }else{
//     echo 'error';
//   }
$title = $_POST["chapitre_name"];
$id_groupe=$_POST['groupe_id'];
$reqt="SELECT * FROM `groupe` where id_groupe=$id_groupe";
    $result=mysqli_query($conn,$reqt);
    $value=mysqli_fetch_assoc($result);
    $prof_id=$value['id_prof'];
#file name with a random number so that similar dont get replaced
if(isset($_FILES["file"])){
  $pname = $_FILES["file"]["name"];

#temporary file name to store file
$tname = $_FILES["file"]["tmp_name"];

 #upload directory path
$uploads_dir ='docx/';
#TO move the uploaded file to specific location
if(move_uploaded_file($tname,$uploads_dir.$pname)){
#sql query to insert into database
// $sql = "INSERT into fileup(title,image) VALUES('$title','$pname')";
$sql="INSERT INTO `activite`( `nom`, `nom_activite`, `id_prof`, `id_groupe`) VALUES ('$title','$pname',$prof_id,$id_groupe)";

if(mysqli_query($conn,$sql)){

header("Location:chapitre.php");
}
else{
    echo "Error";
}

}else{
  echo "Error folder" ;
}
}
 
}


//============= file dowloand =====================

if (isset($_GET['file_id'])) {
  $id = $_GET['file_id'];
  // fetch file to download from database
  $sql = "SELECT * FROM `activite` WHERE id_activite='$id'";
  $result = mysqli_query($conn, $sql);
  $file = mysqli_fetch_assoc($result);
  $filepath = 'docx/'.$file['nom_activite'];

  if (file_exists($filepath)) {
      header('Content-Description: File Transfer');
      header('Content-Type: application/octet-stream');
      header('Content-Disposition: attachment; filename='.basename($filepath));
      header('Expires: 0');
      header('Cache-Control: must-revalidate');
      header('Pragma: public');
      header('Content-Length: '.filesize($filepath));
      readfile($filepath);

      header("location:espace_test.php");
  }
}
  ?>
