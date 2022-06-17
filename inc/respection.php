<?php
include 'header.php';
include 'resp_seadbar.php';

include_once 'config.php';

$reqt='select * from groupe';
$result = mysqli_query($conn, $reqt);

?>



<section class="prof_classes">
<div class="classes">
    <div>
        <span>6</span>
        <span>Classe</span>
    </div>
    <div>
    <i class='fas fa-users'></i>
    </div>
</div>
<div class="classes">
    
    <div>
        <span>6</span>
        <span>profs</span>
    </div>
    <div>
    <i class="fas fa-book-reader"></i>
    </div>
</div>

<div class="classes">
    <div>
        <span>120</span>
        <span>Étudiants</span>
    </div>
    <div>
    <i class="fa fa-clock-o"></i>
    </div>
</div>



</section>

<section class="list_etudiant">
   <div class="groupe_name">
       <form action="respection.php" method="post">
            <div class="select">
            <select name="groupe_name" id="">
            <option selected disabled>choisir une groupe</option>
            <?php 
             if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
            ?>
             <option value="<?php echo $row["id_groupe"] ?>"> <?php echo $row["nom_groupe"] ?> </option>
                
                <?php }} ?>
            </select>
            </div>
           

            <button type="submit" name="etudiant_payer">Chercher</button>
       </form>
       
   </div>
   <div class="list_etudiant_not_by">
       <p>La liste des étudiants</p>
   </div>
   <div class="groupe_list">
       <div class="table">
       <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Image</th>
                        <th>Nom</th>
                        <th>Tele</th>
                        <th>Email</th>
                        <th>CIN</th>
                        <th>Prix</th>
                        <th>La date</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                    
                  if(isset($_POST['etudiant_payer'])){


                    $sql="SELECT * FROM `etudaint` WHERE id_groupe=".$_POST["groupe_name"];
                    $result_etudiant=mysqli_query($conn,$sql);
          
                  if (mysqli_num_rows($result_etudiant) > 0) {
                    
                  while($row_etudiant=mysqli_fetch_assoc($result_etudiant)){    
                  
                  
                  ?>
                    <tr>
                        <td><?php echo $row_etudiant['id_etd']?></td>
                        <td><img src=https://drive.google.com/uc?export=view&id=1oL5yePDRKaJ3rwr2_DedGETXfqtF_gv4 /></td>
                        <td><?php echo $row_etudiant['prenom']." ".$row_etudiant['nom']?></td>
                        <td><?php echo $row_etudiant['tele']?></td>
                        <td><?php echo $row_etudiant['email']?></td>
                        <td><?php echo $row_etudiant['cin']?></td>
                        <td><?php echo $row_etudiant['prix']?></td>
                        <td><?php echo $row_etudiant['date']?>  </td>
                    </tr>

                    <?php
                      } }
                    }
                      
                    ?>
                </tbody>
            <table>
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