<?php
include 'resp_seadbar.php';
include 'header.php';
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
        <span>6/7j</span>
        <span>Les Étudiants</span>
    </div>
    <div>
    <i class="fa fa-clock-o"></i>
    </div>
</div>



</section>

<section class="list_etudiant">
   <div class="groupe_name">
       <form action="" method="post">
            <div class="select">
            <select name="" id="">
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
           

            <button type="submit">Chercher</button>
       </form>
       
   </div>
   <div class="list_etudiant_not_by">
       <p>La liste des étudiants</p>
   </div>
</section>

 <!-- =========== Scripts =========  -->
 <script src="../js/main.js"></script>

<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>