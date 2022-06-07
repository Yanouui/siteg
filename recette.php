<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="recette.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <style> 
   .button{
    background-color:#274690; ;
    border: none;
    color: white;
    padding: 15px;
   border-radius: 5rem;
   text-decoration: none;
   font-size: 1rem;
   margin-left: 55px;
}.button:hover{
    background-color:#576CA8;
}
</style>
</head>

<body>
    <div class="topbutton">
        <a href="#"><span class="fas fa-angle-up"> </span></a>

    </div>

    <div class="wrapper">

        <div class="multi_color_border"></div>
        <div class="top_nav">
            <div class="left">


            </div>
            <div class="right">
                <ul>
                    
                    <li><a href="#Nous Contacter">Nous Contacter</a></li>
                    <li><a href="#about">A propos de nous</a></li>
                    <li><a href="signup.php">inscription</a></li>
               
                </ul>
            </div>
        </div>
    </div>
    <header>
        <div class="nav container">
            <a href="Home1.php" class="logo"><i class='bx bxs-home-alt-2'></i>GlutenFree</a>
            <input type="checkbox" name="" id="menu">
            <label for="menu" <i class='bx bx-menu' id="menu-icon"></i> </label>
            <ul class="navbar">
                <li>
                    <a href="">Les Maladies</a>

                    <div class="sub-menu-1">
                        <ul>
                            <li>
                                <a href="cœliaque.php">Maladie coeliaque</a>
                            </li>
                            <li> <a href="sensibilite.php">Sensibilité AU Gluten</a></li>
                            <li> <a href="herpétiforme.php">Dermatite herpétiforme</a></li>
                        </ul>
                    </div>




                </li>
                <li>
                    <a href="">nos espace</a>

                    <div class="sub-menu-1">
                        <ul>
                            <li>
                                <a href="Enfant.php">espace enfant</a>
                            </li>
                            <li> <a href="point.php">Point de vente</a></li>
                            <li> <a href="produitt.php">les Produit </a></li>

                        </ul>
                    </div>




                </li>
                <li>
                    <a href="#home">Le gluten </a>
                    <div class="sub-menu-1">
                        <ul>
                            <li>
                                <a href="gulten.php">c'est quoi le gluten </a>
                            </li>
                            <li> <a href="source.php"> source du gluten</a></li>
                            
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#home">Regime</a>
                    <div class="sub-menu-1">
                        <ul>
                            <li>
                                <a href="recette.php">Recette </a>
                            </li>
                            <li> <a href="Erreur.php">Au quotidien</a></li>

                        </ul>
                    </div>
                </li>

            </ul>



        </div>






    </header>

    <section class="regime container" id="regime">
        <div class="heading">
            <br><br>
            <h2> Cuisiner sans gluten</h2> <br>
            <p> Imaginer des recettes variées, simples à réaliser, qui plaisent à tous et sans gluten ne nécessite pas
                forcément d’être
                un cuisinier professionnel. Voici quelques pistes pour devenir un « chef sans gluten ».</p>
        </div> <br><br>
        <div class="regime-container container">
            <!--box1-->
            <div class="box">
                <img src="TACOS.jpg" width="270px" alt="">

                <div class="content">
                    <div class="text">

                    </div>
                    <div class="icon">
                        <i class='bx bx-food-menu'><span></span>
                            <h3> Tacos </h3>
                        </i>
                    </div>
                </div> <br>
                <br> <br>
                <a class="button" href="tacos.php"> <strong> Voir La Recette</strong></a>  
             
            </div>
            <!--box2-->
            <div class="box">
                <img src="crape.jpg" width="270px"  height="320PX" alt="">

                <div class="content">
                    <div class="text">

                    </div> <i class='bx bx-food-menu'><span></span>
                    <H3>Crêpe </H3> </i>
                </div> <br>
                <br> <br> 
                <a class="button" href="Crêpe.php"> <strong> Voir La Recette</strong></a>  
                
            </div>
            <!--box3-->
            <div class="box">
                <img src="pancakes_patate_douce_site.jpg" width="270PX" height="325Px" alt="">

                <div class="content">
                    <div class="text">

                    </div>
                    <div class="icon">
                        <i class='bx bx-food-menu'><span></span>
                            <h3>Pancake</h3>
                        </i>
                    </div>
                </div> <br>
                <br> <br>
                <a class="button" href="pancake.php"> <strong> Voir La Recette</strong></a>  
               
            </div>
            <!--box4-->
            <div class="box">
                <img src="gulette.jpg" width="270px" alt="">

                <div class="content">
                    <div class="text">

                    </div>
                    <div class="icon">
                        <i class='bx bx-food-menu'><span></span>
                            <h3>Galette</h3>
                        </i>
                    </div>
                </div> <br>
                <br> <br>
                <a class="button" href="Galette.php"> <strong> Voir La Recette</strong></a>  
               
            </div>
            <!--box5-->
            <div class="box">
                <img src="mini_penne_site-1.jpg" width="270px"  height="358PX" alt="">

                <div class="content">
                    <div class="text">

                    </div>
                    <div class="icon">
                        <i class='bx bx-food-menu'><span></span>
                            <h3>pate au artichaut</h3>
                        </i>
                    </div>
                </div> <br>
                 <br>
                <br>
                <a class="button" href="pate.php"> <strong> Voir La Recette</strong></a>  
              
            </div>
            <!--box6-->
            <div class="box">
                <img src="site_BN.jpg" width="270px" alt="">

                <div class="content">
                    <div class="text">

                    </div>
                    <div class="icon">
                        <i class='bx bx-food-menu'><span></span>
                            <h3  >Sablé</h3>
                        </i>
                    </div>
                </div> <br>
                <br> <br>
                <a class="button" href="sable.php"> <strong> Voir La Recette</strong></a>  
           
            </div>
            <!--fin box-->
        </div> 
        <br><br>
    </section>


    <!--footerrrrrrr-->
    <section class="footer">
        <br><br> <br>
        <div class="footer-container container">
            <h2>GlutenFree</h2>
            <div class="footer-box">
                <h3>Lien</h3>
    
                <a href="cœliaque.php">Maladie coeliaque </a>
                <a href="gulten.php">c'est quoi le gluten </a>
                <a href="recette.php"> Recette</a>
    
            </div>
    
            <div class="footer-box">
                <h3>location</h3>
                <a href="#"> ALger </a>
                <a href="#">Annaba</a>
                <a href="#">Oran</a>
    
    
            </div>
    
    
            <div class="footer-box">
                <h3>Contact</h3>
                <a href="#">+213 (0)987 665 6543</a>
                <a href="#">glutenfree@gmail.com</a>
                <div class="social">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
    
    
                </div>
    
    
            </div>
        </div>
    
    </section>
</body>

</html>