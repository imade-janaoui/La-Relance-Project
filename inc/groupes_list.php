<?php
include 'resp_seadbar.php';
include 'header.php';
include_once 'config.php';


?>



<section class="register_etudiant" id="register_etudian">
<div class="container">
    <div class="title">Inscription</div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nom </span>
            <input type="text" placeholder="Entrer le nom" required>
          </div>
          <div class="input-box">
            <span class="details">Prénom</span>
            <input type="text" placeholder="Entrer le prénom" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Entrer email" required>
          </div>
          <div class="input-box">
            <span class="details">Télé</span>
            <input type="text" placeholder="Entrer le numéro de téléphone" required>
          </div>
          <div class="input-box">
            <span class="details">CIN</span>
            <input type="text" placeholder="Entrer CIN" required>
          </div>
          <div class="input-box">
            <span class="details">Prix</span>
            <input type="number" placeholder="Entrer prix DH" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Entrer mot de passe" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirmer mot de passe" required>
          </div>
          <div class="input-box">
          <span class="details">choisir une groupe</span>
          <select name="" id="" >
            <option selected disabled>choisir une groupe</option>
            <?php 
            $sql='select * from groupe';
            $result_groupe = mysqli_query($conn, $sql);
             if (mysqli_num_rows($result_groupe) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result_groupe)) {
            ?>
             <option value="<?php echo $row["id_groupe"] ?>"> <?php echo $row["nom_groupe"] ?> </option>
                
                <?php }} ?>
            </select>
          
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <span class="gender-title">Le sexe</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Homme</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Femme</span>
          </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>
</section>


<section class="groupe_list">
<div class="table">
        <div class="table_header">
            <p>La liste des etudiants groupe:
              
              <?php
                    // echo $row_etudiant['groupe'];
            
            ?></p>
            <div> <input placeholder="chercher " /> <button class="add_new" onclick='register_add()'>+ Ajouter etudiant</button> </div>
        </div>
       
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
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                    
                  if(isset($_POST['id_groupe'])){


                    $sql="SELECT * FROM `etudaint` WHERE id_groupe=1";
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
                        <td> <button><i class="fa-solid fa-pen-to-square"></i></button> <button><i class="fa-solid fa-trash"></i></button> </td>
                    </tr>

                    <?php
                      } }else{
                        echo 'resultat 0';
                       }
                    }
                      
                    ?>
                </tbody>
</section>


<script src="../js/main.js"></script>

<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>