<?php
include 'resp_seadbar.php';
include 'header.php';
include_once 'config.php';


?>


<section class="register_etudiant" id="register_etudian">
<div class="container">
    <div class="title">Ajouter un groupe</div>
    <div class="content">
      <form action="service.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nom de groupe </span>
            <input type="text" name="groupe_name" placeholder="Entrer le nom de groupe" required>
          </div>
          <div class="input-box">
            <span class="details">Prof</span>
            <select name="prof_id" id="">
                <option value="" selected disabled>Sélectionner prof</option>
             <?php 
             $reqt='select * from prof';
             $result = mysqli_query($conn, $reqt);
             if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
            ?>
                <option value="<?php echo $row["id_prof"] ?>"> <?php echo $row["nom_prof"]. " " . $row["prenom_prof"] ?> </option>
                
         <?php }} ?>
            </select>
          </div>
          
         
        </div>
        <div class="button">
          <input type="submit" name="Register_groupe" value="Register_groupe">
        </div>
      </form>
    </div>
  </div>
</section>



<section class="add_groupe">
    <button class="add_groupe_btn"  onclick='register_add()'>Ajouter une groupe</button>
</section>
<section class="groupe">

<div class="header_fixed">
        <table>
            <thead>
                <tr>
                    <th>S No.</th>
                    <th>Groupe</th>
                    <th>Date de creation</th>
                    <th>Prof</th>
                    <th>Cours</th>
                    <th>Action</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php 
            $sql='select * from groupe';
            $result_groupe = mysqli_query($conn, $sql);
             if (mysqli_num_rows($result_groupe) > 0) {
              

                while($row = mysqli_fetch_assoc($result_groupe)  ) {
                    // $reqt_prof='select * from prof';
                    // $result_prof = mysqli_query($conn, $reqt_prof);
                    // // output data of each row
                    // $row_prof = mysqli_fetch_assoc($result_prof);
                   
                   
            ?>
                <tr>
                    <td><?php echo $row["id_groupe"] ?></td>
                    <td><?php echo $row["nom_groupe"] ?> </td>
                    <td><?php echo $row["date_crt"] ?> </td>
                    <td> <?php 

                    
                      echo $row["nom_prof"]. " " . $row["prenom_prof"];
                    ?> </td>
                    
                    <td><?php echo $row["cours"] ?></td>
                    <td><button value= '<?php echo $row["id_groupe"] ?>'>Voir</button></td>
                </tr>
                
                <?php }}else {
  echo "0 results";
} ?>
            </tbody>
        </table>
    </div>
</section>



<!-- =========== Scripts =========  -->
<script src="../js/main.js"></script>

<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>