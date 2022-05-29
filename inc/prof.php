<?php
include_once 'profseadbar.php';
include_once 'header.php';


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
        <span>Étudiant</span>
    </div>
    <div>
    <i class="fas fa-book-reader"></i>
    </div>
</div>

<div class="classes">
    <div>
        <span>6/7j</span>
        <span>Séances</span>
    </div>
    <div>
    <i class="fa fa-clock-o"></i>
    </div>
</div>



</section>



<section class="list_etudiant">
    <div class="bar_etudiant">
        <span class="classe_name">Groupe B1</span>
        <a href="test.php"> Partie Test <i class="fa fa-pencil"></i></a>
    </div>
    <div class="list">
        <div class="list_img_profile">
             <img src="../img/customer01.jpg" alt="">
        </div>
        <div class="list_name">
             <a href="">Janaoui Imade</a>
        </div>
        <div class="partie_message_test">
                <a href=""  id="env_msg"><i class="fa fa-envelope"></i></a>
                <span class="new_msg" id="new_msg" >.</span>
                <a  href="" id="env_test"><i class="fas fa-file-invoice"></i></a>
                <span class="new_test" id="new_test" >.</span>
        </div>
    </div>

    <div class="list">
        <div class="list_img_profile">
             <img src="../img/customer01.jpg" alt="">
        </div>
        <div class="list_name">
             <a href="">Janaoui Imade</a>
        </div>
        <div class="partie_message_test">
                <a href=""  id="env_msg"><i class="fa fa-envelope"></i></a>
                 <span class="new_msg" id="new_msg" >.</span>
                <a  href="" id="env_test"><i class="fas fa-file-invoice"></i></a>
                <span class="new_test" id="new_test">.</span>
        </div>
    </div>

    <div class="list">
        <div class="list_img_profile">
             <img src="../img/customer01.jpg" alt="">
        </div>
        <div class="list_name">
             <a href="">Janaoui Imade</a>
        </div>
        <div class="partie_message_test">
                <a href=""  id="env_msg"><i class="fa fa-envelope"></i></a>
                 <span class="new_msg" id="new_msg">.</span>
                <a  href="" id="env_test"><i class="fas fa-file-invoice"></i></a>
                <span class="new_test" id="new_test">.</span>
        </div>
    </div>
    <script>
const element1 = document.getElementById("new_msg");
const element2 = document.getElementById("new_test");
setInterval(function() {element1.setAttribute("style","visibility: collapse;")}, 1000);
setInterval(function() {element1.setAttribute("style","visibility: inherit;")}, 1500);
setInterval(function() {element2.setAttribute("style","visibility: collapse;")}, 1000);
setInterval(function() {element2.setAttribute("style","visibility: inherit;")}, 1500);
</script>
</section>


<!-- ====== ionicons ======= -->
<script src="../js/main.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<?php
include 'footer.php';

?>