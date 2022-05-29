<?php
include_once 'profseadbar.php';
include_once 'header.php';


?>
<section class="test">
    <div class="test_head">
        <h3>Préparation une test:</h3>
        
    </div>
    <div class="test_exam">
            <div class="horen" id="horen" onclick="window.location.href=this.id+'.php';">
            <i class="fa-solid fa-headphones"></i>
            <p>horen</p>
            </div>
            <div class="lesen" id="lesen" onclick=" window.location.href=this.id+'.php';">
            <i class="fab fa-readme"></i>
                <p>lesen</p>
            </div>
            <div class="sprechen" id="sprechen"  onclick=" window.location.href=this.id+'.php';">
            <i class="fa-solid fa-volume-high"></i>
                <p>sprechen</p>

            </div>
            <div class="schreiben" id="schreiben" onclick=" window.location.href=this.id+'.php';">
            <i class="fa fa-pencil" onclick=" window.location.href=this.id+'.php';"></i>
                <p>schreiben</p>
            </div>
            <div class="QCM" id="QCM" onclick=" window.location.href=this.id+'.php';"> 
            <i class="	far fa-edit" ></i>
                <p>QCM</p>
            </div>

            <div class="Jeux" id="Jeux" onclick=" window.location.href=this.id+'.php';">
            <i class="fas fa-puzzle-piece" ></i>
                <p>Jeux</p>
            </div>
            <div class="vocabulaire" id="vocabulaire" onclick=" window.location.href=this.id+'.php';" v>
            <i class="	fas fa-file-alt " ></i>
                <p>vocabulaire</p>
            </div>
            <div class="synonyme" id="synonyme" onclick=" window.location.href=this.id+'.php';">
            <i class='fas fa-equals'></i>
                <p>synonyme</p>
            </div>
            
            <div class="against" id="against" onclick=" window.location.href=this.id+'.php';">
            <i class='fas fa-not-equal'></i>
                <p>against</p>
            </div>
    </div>
    
</section>

<script src="../js/main.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<?php
include 'footer.php';

?>