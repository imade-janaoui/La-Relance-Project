<?php
include_once 'header.php';
include_once 'profseadbar.php';

?>

<section class="horen_test">
<h2>horen Test </h2>

    <form class="form_num_input" action="horen.php" method="post">
        <span>
            Ajouter autre text:
        </span>
        <div>
            <input type="number" name="num" id="exam_name" placeholder=" Le nombre des texts" min="1" max="10">
            <input type="submit" name="submit">
        </div>
        
    </form>

    <form action="" method="post" class="form_horen_test">
        
      
       
        <div class="chose_file">
            <input type="file" id="real-file" hidden="hidden" />
            <button type="button" id="custom-button">CHOOSE A FILE</button>
            <span id="custom-text">No file chosen, yet.</span>
        </div>
        <!-- =================exercise 1=========== -->
        <h2>Exercise 1</h2>
        <div class="test1 rechtig_falsch">
               <span>
                   <input type="text" name="exam_name" id="exam_name" placeholder=" Le nom de test">
                   
               </span>
                

                <?php
                    $num=1;
                if(isset($_POST['submit'])){
                    $num=$_POST['num'];
                }
                    
                    for($i=0;$i<$num;$i++){

                ?>
                <span id="text">text <?php echo $i+1; ?></span>
                <div class="text1 question">
                    <ol>
                        <li>
                                    <input type="text" name="question<?php echo $i+1;?>" placeholder="question <?php echo $i+1;?>">
                                <label for="">
                            
                                <span id="vrai">vrai</span>
                                <input type="radio" name="question<?php echo $i+1;?>_choix" value="question<?php echo $i+1;?>_true" >
                                </label>
                                <label for=""> 
                                    <span id="faux">faux</span> 
                                    <input type="radio" name="question<?php echo $i+1;?>_choix" value="question<?php echo $i+1;?>_false" >
                                </label>
                        </li>
                        <li>
                            <div>
                                <input type="text" name="question<?php echo $i+2;?>" placeholder="question <?php echo $i+2;?>">
                            </div>
                            <div>
                                <ol>
                                    <li>
                                        <input type="text" name="question<?php echo $i+2;?>_choi1" placeholder="Choix 1">
                                        <input type="radio" name="question<?php echo $i+2;?>_choix_verif" value="question<?php echo $i+2;?>_choi1" >
                                </li>
                                    <li><input type="text" name="question<?php echo $i+2;?>_choi2" placeholder="Choix 2">
                                    <input type="radio" name="question<?php echo $i+2;?>_choix_verif" value="question<?php echo $i+2;?>_choi2" >
                                </li>
                                    <li><input type="text" name="question<?php echo $i+2;?>_choi3" placeholder="Choix 3">
                                    <input type="radio" name="question<?php echo $i+2;?>_choix_verif" value="question<?php echo $i+2;?>_choi3" >
                                </li>
                                </ol>
                            </div>
                        </li>
                    </ol>
                    
                </div>
            <?php
                    }
            ?>
      <div class="button_submit">
            <button type="submit" id="Sauvegarder">Sauvegarder</button>
      </div>
      
</div>
           
    </form>

</section>

<script src="../js/main.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<?php
include 'footer.php';

?>