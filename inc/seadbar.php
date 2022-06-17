 <!-- =============== Navigation ================ -->
 <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                        <ion-icon name="person-outline"></ion-icon>
                        
                        </span>
                        <span class="title">
                        <?php
                       
                            echo $_SESSION['nom_etudiant']." ".$_SESSION['prenom_etudiant'];

                        ?>
                        </span>
                    </a>
                </li>

                <li>
                    <a href="home.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Tableau de bord</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Customers</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Messages</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Help</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Password</span>
                    </a>
                </li>

                <li>
                    <a href="service.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>




        
   

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="img_logo">
                    <img src="../img/logo.png" alt="">
                </div>

                <div class="user" id="user" onclick="menuToggle()">
                    <img src="../img/customer01.jpg" alt="">
                </div>
            </div>
           
       

            <div class="menu_profile" >
                <ul>
                    <li>
                        <a href="">
                            <i class="fa-regular fa-user"></i>
                            Imade Janaoui
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-dashboard"></i>
                            Tableau de bord
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-regular fa-user"></i>
                            Profil
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class='fas fa-edit'></i>
                            Notes
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-solid fa-comment"></i>
                            Messages personnels
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-wrench" ></i>
                            Préférences
                        </a>
                    </li>
                    <li>
                        <a href="../index.php">
                            <i class="fa fa-sign-out"></i>
                            Déconnexion
                        </a>
                    </li>
                </ul>
            </div>