<?php
session_start();
include_once 'header.php';
include_once 'seadbar.php';
include_once 'config.php'



?>


<section class="coure_header">
    <div class="container">
        <p>
            Coure niveau A1
        </p>
    </div>
    <div class="chemin">
        <span><a href="home.php">Tableau de bord</a> </span>
        <span class="not_link">Mes cours</span>
        <span><a href="espace_test.php">Niveau A1</a></span>
    </div>
</section>

<section class="content">
    <div class="partie_chapitre">
        <div>
        <h2>Les chapitre</h2>
        <div class="test_lien">
            <?php
                    $email_etudiant=$_SESSION['email_etudiant'];
                    
                    $sql="SELECT * FROM `etudaint` where email='$email_etudiant'";
                    
                    if($result=mysqli_query($conn,$sql)){
                        $row=mysqli_fetch_array($result);
                        $id_groupe=$row['id_groupe'];

                        $reqt="SELECT * FROM `activite`";
                    $resu=mysqli_query($conn,$reqt);
                    while($row_activ=mysqli_fetch_assoc($resu)){
                       
                        if($row_activ["id_groupe"]==$id_groupe){

                            if($row_activ['nom'] !=='lien meeting'){

                      
            
            ?>
                    <a href="service?file_id=<?php echo $row_activ['id_activite'] ?>"> <?php echo $row_activ['nom'] ?></a>
         
            <?php
                            }
                      }
                    }

                    }
            ?>

        </div>
        </div>
       
        
    </div>
    <div class="partie_chapitre">
        <div>
        <h2>Les test</h2>
        <div class="test_lien">
            <?php
                    // $email_etudiant=$_SESSION['email_etudiant'];
                    
                    // $sql="SELECT * FROM `etudaint` where email='$email_etudiant'";
                    
                    // if($result=mysqli_query($conn,$sql)){
                    //     $row=mysqli_fetch_array($result);
                    //     $id_groupe=$row['id_groupe'];

                    //     $reqt="SELECT * FROM `activite`";
                    // $resu=mysqli_query($conn,$reqt);
                    // while($row_activ=mysqli_fetch_assoc($resu)){
                       
                    //     if($row_activ["id_groupe"]==$id_groupe){

                    //         if($row_activ['nom'] !=='lien meeting'){

                      
            
            ?>
                    <a href=""> TEST 1  </a>
         
            <?php
                    //         }
                    //   }
                    // }

                    // }
            ?>

        </div>
        
       
        
    </div>
    <div class="partie_chapitre">
        <div>
        <h2>Les cours online</h2>
        <div class="meet_lien">
            <?php
                    $email_etudiant=$_SESSION['email_etudiant'];
                    
                    $sql="SELECT * FROM `etudaint` where email='$email_etudiant'";
                    
                    if($result=mysqli_query($conn,$sql)){
                        $row=mysqli_fetch_array($result);
                        $id_groupe=$row['id_groupe'];

                        $reqt="SELECT * FROM `activite`";
                    $resu=mysqli_query($conn,$reqt);
                    while($row_activ=mysqli_fetch_assoc($resu)){
                       
                        if($row_activ["id_groupe"]==$id_groupe){

                            if($row_activ['nom']=='lien meeting'){

                      
            
            ?>
                    <a href="<?php echo $row_activ['nom_activite'] ?>"> <?php echo $row_activ['nom_activite'] ?></a>
         
            <?php
                            }
                      }
                    }

                    }
            ?>
        </div>
        </div>
       
        
    </div>
</section>

 <!-- =========== Scripts =========  -->
 <script src="../js/main.js"></script>

<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>