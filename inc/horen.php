<?php
include_once 'profseadbar.php';
include_once 'header.php';
?>

<section class="horen_test">
<h2>horen Test </h2>
    <form action="" method="post" class="form_horen_test">
        
      
       
        <div class="chose_file">
            <input type="file" id="real-file" hidden="hidden" />
            <button type="button" id="custom-button">CHOOSE A FILE</button>
            <span id="custom-text">No file chosen, yet.</span>
        </div>
        <!-- =================exercise 1=========== -->
        <h2>Exercise 1</h2>
        <div class="test1 rechtig_falsch">
                <span id="text">text 1</span>
                <div class="text1 question">
                    <ol>
                        <li>
                                    <input type="text" name="question 1" placeholder="question1">
                                <label for="">
                            
                                <span id="vrai">vrai</span>
                                <input type="radio" name="question1_choix" value="question1_true" >
                                </label>
                                <label for=""> 
                                    <span id="faux">faux</span> 
                                    <input type="radio" name="question1_choix" value="question1_false" >
                                </label>
                        </li>
                        <li>
                            <div>
                                <input type="text" name="question2" placeholder="question 2">
                            </div>
                            <div>
                                <ol>
                                    <li>
                                        <input type="text" name="question2_choi1" placeholder="Choix 1">
                                        <input type="radio" name="question2_choix_verif" value="question2_choi1" >
                                </li>
                                    <li><input type="text" name="question2_choi2" placeholder="Choix 2">
                                    <input type="radio" name="question2_choix_verif" value="question2_choi2" >
                                </li>
                                    <li><input type="text" name="question2_choi3" placeholder="Choix 3">
                                    <input type="radio" name="question2_choix_verif" value="question2_choi3" >
                                </li>
                                </ol>
                            </div>
                        </li>
                    </ol>
                    
                </div>

<!-- ===============text2======================== -->

                <span id="text">text 2</span>
                <div class="text2 question">
                    <ol>
                        <li>
                                    <input type="text" name="question3" placeholder="question 3">
                                <label for="">
                            
                                <span id="vrai">vrai</span>
                                <input type="radio" name="question3_choix" value="question3_true" >
                                </label>
                                <label for=""> 
                                    <span id="faux">faux</span> 
                                    <input type="radio" name="question3_choix" value="question3_false" >
                                </label>
                        </li>
                        <li>
                            <div>
                                <input type="text" name="question4" placeholder="question 4">
                            </div>
                            <div>
                                <ol>
                                    <li>
                                        <input type="text" name="question4_choi1" placeholder="Choix 1">
                                        <input type="radio" name="question4_choix_verif" value="question4_choi1" >
                                </li>
                                    <li><input type="text" name="question4_choi2" placeholder="Choix 2">
                                    <input type="radio" name="question4_choix_verif" value="question4_choi2" >
                                </li>
                                    <li><input type="text" name="question4_choi3" placeholder="Choix 3">
                                    <input type="radio" name="question4_choix_verif" value="question4_choi3" >
                                </li>
                                </ol>
                            </div>
                        </li>
                    </ol>
                    
                </div>


                <!-- ===============text3======================== -->

                <span id="text">text 3</span>
                <div class="text3 question">
                    <ol>
                        <li>
                                    <input type="text" name="question5" placeholder="question 5">
                                <label for="">
                            
                                <span id="vrai">vrai</span>
                                <input type="radio" name="question5_choix" value="question5_true" >
                                </label>
                                <label for=""> 
                                    <span id="faux">faux</span> 
                                    <input type="radio" name="question5_choix" value="question5_false" >
                                </label>
                        </li>
                        <li>
                            <div>
                                <input type="text" name="question6" placeholder="question 6">
                            </div>
                            <div>
                                <ol>
                                    <li>
                                        <input type="text" name="question6_choi1" placeholder="Choix 1">
                                        <input type="radio" name="question6_choix_verif" value="question6_choi1" >
                                </li>
                                    <li><input type="text" name="question6_choi2" placeholder="Choix 2">
                                    <input type="radio" name="question6_choix_verif" value="question6_choi2" >
                                </li>
                                    <li><input type="text" name="question6_choi3" placeholder="Choix 3">
                                    <input type="radio" name="question6_choix_verif" value="question6_choi3" >
                                </li>
                                </ol>
                            </div>
                        </li>
                    </ol>
                    
                </div>


                <!-- ===============text4======================== -->

                <span id="text">text 4</span>
                <div class="text4 question">
                    <ol>
                        <li>
                                    <input type="text" name="question7" placeholder="question 7">
                                <label for="">
                            
                                <span id="vrai">vrai</span>
                                <input type="radio" name="question7_choix" value="question7_true" >
                                </label>
                                <label for=""> 
                                    <span id="faux">faux</span> 
                                    <input type="radio" name="question7_choix" value="question7_false" >
                                </label>
                        </li>
                        <li>
                            <div>
                                <input type="text" name="question8" placeholder="question 8">
                            </div>
                            <div>
                                <ol>
                                    <li>
                                        <input type="text" name="question8_choi1" placeholder="Choix 1">
                                        <input type="radio" name="question8_choix_verif" value="question8_choi1" >
                                </li>
                                    <li><input type="text" name="question8_choi2" placeholder="Choix 2">
                                    <input type="radio" name="question8_choix_verif" value="question8_choi2" >
                                </li>
                                    <li><input type="text" name="question8_choi3" placeholder="Choix 3">
                                    <input type="radio" name="question8_choix_verif" value="question8_choi3" >
                                </li>
                                </ol>
                            </div>
                        </li>
                    </ol>
                    
                </div>




                <!-- ===============text5======================== -->

                <span id="text">text 5</span>
                <div class="text5 question">
                    <ol>
                        <li>
                                    <input type="text" name="question9" placeholder="question 9">
                                <label for="">
                            
                                <span id="vrai">vrai</span>
                                <input type="radio" name="question9_choix" value="question9_true" >
                                </label>
                                <label for=""> 
                                    <span id="faux">faux</span> 
                                    <input type="radio" name="question9_choix" value="question9_false" >
                                </label>
                        </li>
                        <li>
                            <div>
                                <input type="text" name="question10" placeholder="question 10">
                            </div>
                            <div>
                                <ol>
                                    <li>
                                        <input type="text" name="question10_choi1" placeholder="Choix 1">
                                        <input type="radio" name="question10_choix_verif" value="question10_choi1" >
                                </li>
                                    <li><input type="text" name="question10_choi2" placeholder="Choix 2">
                                    <input type="radio" name="question10_choix_verif" value="question10_choi2" >
                                </li>
                                    <li><input type="text" name="question10_choi3" placeholder="Choix 3">
                                    <input type="radio" name="question10_choix_verif" value="question10_choi3" >
                                </li>
                                </ol>
                            </div>
                        </li>
                    </ol>
                    
                </div>

       </div>
<!-- <div class="rechtig_falsch" id='rechtig_falsch'>
      <div class="question" id="question1">
          <input type="text" name="question1" placeholder="question1">
          <label for="">
             
              <span id="vrai">vrai</span>
              <input type="radio" name="question1_choi" value="question1_true" >
            </label>
            <label for=""> 
              <span id="faux">faux</span> 
              <input type="radio" name="question1_choi" value="question1_false" >
              
          </label>
      </div> -->
</div>
<button type="submit" id="Sauvegarder">Sauvegarder</button>
    </form>

</section>

<script src="../js/main.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<?php
include 'footer.php';

?>