<?php

include_once 'header.php';
include_once 'profseadbar.php';
include_once 'config.php';

            $prof_email=$_SESSION['email'];
                
            $sql="SELECT * FROM `prof` WHERE email='$prof_email'";
            $result=mysqli_query($conn,$sql);
            $value=mysqli_fetch_array($result);

            $prof_id=$value['id_prof'];
            


?>


<section class="horen_test">
<form action="service.php" method="post" class="form_horen_test">

            <div class="para_chap">
                <p>
                    Ajouter le lien
                </p>
            </div>
            <div class="select">
            <select name="groupe_id" id="">
            <option selected disabled>choisir une groupe</option>
            <?php 
                
             
            $reqt="SELECT * FROM `groupe` WHERE id_prof=$prof_id";
            $paquet=mysqli_query($conn,$reqt);
             if (mysqli_num_rows($paquet) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($paquet)) {
            ?>
             <option value="<?php echo $row["id_groupe"] ?>"> <?php echo $row["nom_groupe"] ?> </option>
                
                <?php }} ?>
            </select>
            </div>
                <div class="chose_file">
                <span class="link_meet">
                   <input type="text" name="link"  placeholder=" Meeting lien">
                   
               </span>
            
        </div>
        <div class="button_submit">
            <button type="submit" name="meet_link" id="Sauvegarder">Sauvegarder</button>
      </div>

</form>
</section>

<script src="../js/main.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<?php
include 'footer.php';

?>