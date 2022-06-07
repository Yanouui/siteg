<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>espace enfant</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;0,700;1,400&display=swap');
*{
  font-family: 'Poppins', sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  scroll-behavior: smooth;
  scroll-padding-top: 4rem;
  list-style: none;
  text-decoration: none;
}
img{
  width: 100%;
}
body{
  color: rgb(0, 0, 0);
  scroll-behavior: smooth;
}
section{
  
  padding: 0rem 0 0rem;
}
.topbutton{
position: fixed;
bottom: 30px;
right: 30px;
z-index: 9;


}
.topbutton a{
  height: 40px;
  width: 40px;
text-align: center;
background: #274690;
display: block;
border-radius: 10px;
cursor: pointer;
}
.topbutton a span{
  color: #000000;
  line-height: 40px;
  font-size: 30px;

}
.container{
  max-width: 1068px;
  margin-left: auto;
  margin-right: auto;
  position: sticky;
}
header{
  display: block;
  width: 100%;
  background: #274690;
  position: sticky;
  top: 0;
  left: 0;
  z-index: 100;
  

}

.wrapper .multi_color_border{  
  width: 100%;
  height: 5px;
  background: linear-gradient(to right, #F5F3F5 0% , #576CA8 25%, #576CA8 25%, #274690 50%, #414440 50%, #274690 75%, #274690 75%, #494949 100%);
}
.wrapper .top_nav{
  margin-top: 5px;
  width: 100%;
  height: 65px;
  background: rgb(255, 255, 255);
  padding: 0 90px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.wrapper .top_nav .left{
  display: flex;
  align-items: center;
}
.wrapper .top_nav .left .logo1 p{
  font-size: 24px;
  font-weight: bold;
  color: #ffffff;
  font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  margin-right: 25px;
}

.wrapper .top_nav .left .logo p span{
  color: hsl(240, 61%, 37%);
  font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

}
.wrapper .top_nav .right ul{
  display: flex;
}
.wrapper .top_nav .right ul li{
  margin: 0 12px;
}
.wrapper .top_nav .right ul li:last-child{
  background:  #274690;
  margin-right: 0;
  border-radius: 12px;
  text-transform: uppercase;
  letter-spacing: 3px;
}
.wrapper .top_nav .right ul li:hover:last-child{
  background: #576CA8;
}
.wrapper .top_nav .right ul li a{
  display: block;
  padding: 8px 10px;
  color: #666666;
}
.wrapper .top_nav .right ul li:last-child a{
  color: rgb(255, 255, 255);
}
.nav{ 
  display: flex;
  align-items:inherit;
  justify-content: center;
  padding: 20px 10px ;
  position: sticky;
}
.logo{
  display: flex;
  margin-right: 600px;
  column-gap: 0.5rem;
  font-size: 1rem;
  font-weight: 600;
  color: #ffffff;
  text-transform: uppercase;

}
.logo .bx{
  font-size: 24px;
  color: blue;
}
.navbar{
  display: flex;
}
.navbar a{
  padding: 8px 17px;
  color: blueviolet;
  font-size: 1rem;
  text-transform:initial;
  font-weight: 100;
}
.navbar a:hover{
  color:rgb(215, 209, 209)}
#menu-icon{
  font-size: 24px;
  cursor: pointer;
  display: none;
}

#menu{
  display: none;
}
.btn
{
  padding: 8px 20px;
  background: #576CA8;
  color: rgb(205, 208, 208);
  border-radius: 5rem;
}
.btn:hover{
  background: rgb(186, 184, 184);
}
.nav
{background: #274690;
    text-align: center;
   position: sticky;
    top: 0px;
}
.nav ul
{
display: inline-flex;
list-style: none;
color: rgb(213, 207, 207);
}
.nav ul li{
    width: 155px ;
    margin: 1px;
    padding: 5px;
}
.nav ul li a{
    text-decoration: none;
    color: #ffffff;
}
.active, .nav ul li:hover{
    background: #576CA8
}
.sub-menu-1
{
    display: none;
}
.nav ul li:hover .sub-menu-1
{
    display: block;
    position: absolute;
    background: #274690;
    margin-top: 1px;
    margin-left: 15px;
}
.nav ul li:hover .sub-menu-1 ul {
    display: block;
    margin: 10px;
}
.nav ul li:hover .sub-menu-1 ul li{
    width: 150px ;
    padding: 10px ;
    border-bottom:1px dotted rgb(255, 255, 255) ;
    background:transparent ;
    border-radius: 0;
    text-align: left;
}
.nav ul li:hover .sub-menu-1 ul li:last-child{
    border-bottom:none ;
}
.nav ul li:hover .sub-menu-1 ul li a:hover{
    color:#576CA8 ;
}
h1{
  font-size: xx-large;
 margin: 40px 100px;
 color: #274690;
}
.p1{
  margin: 10px 50px;
    border-top-style:groove;
  border-right-style: groove;
  border-bottom-style: groove;
  border-left-style: solid;
  border-radius: 0px;
  background-color: #576CA8;
}
.p3{
 margin: 20px 50px;
}


.thumbanail
{
width:450px;
position:relative;
box-shadow:0 0 5px rgba(0,0,0,.4);
background-color:#fff;
overflow:hidden;
border-radius:8px;
margin-bottom:10px;
}
.thumbanail:before
{
content:'';
position:absolute;
top:0;
left:0;
width:100%;
height:100%;
border:8px solid #fff;
z-index:2;
overflow:hidden;
box-sizing:border-box;
}
.thumbanail img
{
width:100%;
height:auto;
border-radius:8px;
transform:scale(1) rotate(0deg);
transition:all .5s linear;
}
.thumbanail:hover img
{
transform:scale(1.1) rotate(-5deg);
}
.thumbanail.right
{
float:right;
margin-left:20px;
}
.thumbanail.left
{
float:left;
margin-right:20px;
}
@media screen and (max-width:767px)
{
.thumbanail.right
{
float:none;
margin-left:0px;
}
.thumbanail.left
{
float:none;
margin-right:0px;
}
.thumbanail{
width:100%;
}
}
@media (max-width: 950px) {
  .container{
    width: 90%;
    padding: 30px 40px 40px 35px ;
  }
  .container .content .right-side{
   width: 75%;
   margin-left: 55px;
   margin-right: 55px;
}
}
@media (max-width: 820px) {
  .container{
    margin: 40px 0;
    height: 100%;
  }
  .container .content{
    flex-direction: column-reverse;
  }
 .container .content .left-side{
   width: 100%;
   flex-direction: row;
   margin-top: 40px;
   justify-content: center;
   flex-wrap: wrap;
 }
 .container .content .left-side::before{
   display: none;
 }
 .container .content .right-side{
   width: 100%;
   margin-left: 0;
 }
}

 /*FOOTER*/
.footer{
  background: #274690;
  color: #979393;
}
.footer-container{
  display: grid;
 gap: 2rem;
  grid-template-columns: repeat(auto-fit, minmax(240px, auto)); 
}
.footer-container h2{
  font-size: 1.7rem;
  font-weight: 500;
}
.footer-box{
  display: flex;
  flex-direction: column;
 
}
.footer-box h3{
  margin-bottom: 1rem;
  font-size: 1rem;
  font-weight: 400;
}
.footer-box a {
  font-size: 0.8rem;
  
  color: rgb(255, 255, 255);
  font-weight: 400;
  margin-bottom: 0.5rem;

}
.footer-box a:hover{
  color: #838385;
}
.social a{
  font-size: 20px;
  margin-right: 1rem;

}
.social a:hover{
  color: rgb(3, 9, 119) ;
}

    </style>
</head>

<body>


    <div class="wrapper">

        <div class="multi_color_border"></div>
        <div class="top_nav">
            <div class="left">


            </div>
            <div class="right">
                <ul>
                    
                    <li><a href="#Nous Contacter">Nous Contacter</a></li>
                    <li><a href="#about">A propos de nous</a></li>
                    <li><a href="#">inscription</a></li>
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
                            <li> <a href="point.php">Point de vente </a></li>
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
                            <li> <a href="Erreur.php"> Au quotidien</a></li>

                        </ul>
                    </div>
                </li>

            </ul>



        </div>






    </header>
<section>
  
    <span class="image1">
        <img src="pexels-lukas-296301 (1).jpg" width="100%" height="400" alt="">
    </span>
<h1>coliaque chez les enfant</h1>


<p class="p3">
    La maladie cœliaque peut se développer à tout moment après l'introduction de blé ou d'autres aliments contenant du
    gluten dans l'alimentation, généralement après l'âge de 6 à 9 mois. On ne sait pas pourquoi certains enfants tombent
    malades tôt dans la vie et d'autres ne tombent malades qu'après des années d'exposition. Il est très important de tester
    votre enfant dès les premiers signes ou si la maladie coeliaque sévit dans votre famille. Les parents au premier degré
    (parent, frère ou sœur, enfant) ont 1 chance sur 10 de développer eux-mêmes la maladie coeliaque.
</p>

<div class="container">
    <div class="thumbanail right">
        <img src="sick.jpg" alt="" />
    </div>
    
    <p>
        Il existe une grande variation dans la gravité des symptômes - de nombreux enfants ressentiront des symptômes quelques
        minutes à quelques heures après avoir consommé du gluten, ce qui peut ne durer que quelques heures.
        
        Dans d'autres, les symptômes peuvent durer plusieurs jours ou jusqu'à deux semaines. De nombreux enfants présentent des
        symptômes bénins qui passent facilement inaperçus, comme des gaz excessifs, des douleurs abdominales ou de la
        constipation. D'autres enfants présentent des symptômes plus graves pouvant entraîner un diagnostic plus précoce,
        notamment un retard de croissance, une perte de poids et des vomissements.
        
        Heureusement, les enfants et les adolescents répondent généralement bien au traitement par le régime sans gluten. La
        plupart des enfants se sentent nettement mieux après deux semaines de régime et atteignent une taille, un poids et une
        santé osseuse normaux.
    </p>
    <br>
    <p>
        Heureusement, les enfants et les adolescents répondent généralement bien au traitement par le régime sans gluten. La
        plupart des enfants se sentent nettement mieux après deux semaines de régime et atteignent une taille, un poids et une
        santé osseuse normaux.
    </p> <br><h2>La maladie coeliaque affecte les enfants de différentes manières, selon leur âge</h2> <br>
    <div class="thumbanail left">
        <img src="kid.jpg" alt="" />
    </div>
    
    <h4>Nourrissons et tout-petits </h4> <br> 
    <p>
    Les nourrissons et les tout-petits ont tendance à avoir des symptômes plus évidents qui se manifestent généralement dans
    le tractus gastro-intestinal. Les symptômes incluent, mais ne sont pas limités à :
    <ul> <li>
    Vomissement</li>
    <li>- Ballonnement</li>
    <li>- Irritabilité</li>
    <li>- Mauvaise croissance</li>
    <li>- Distension abdominale</li> <br>
    </ul>
    </p>
    <br><br>
    <div class="thumbanail left">
        <img src="schoolage.jpg" alt="" />
    </div>
    
    <h4>Enfants d'âge scolaire </h4> <br>
    <p>
    Les vomissements sont moins fréquents chez les enfants d'âge scolaire que chez les nourrissons et les tout-petits. Les
    symptômes incluent, mais ne sont pas limités à :
    <ul>
        <li>
       - Maux de ventre ou douleurs abdominales </li>
        <li> - Distension abdominale</li>
        <li>- La diarrhée</li>
        <li>- Constipation</li>
        <li>- Difficulté à prendre du poids ou à perdre du poids</li>
        
    </ul>
    </p><br><br><br>
<div class="thumbanail right">
    <img src="old.jpg" alt="" />
</div>

<h4>Enfants plus âgés et adolescents</h4> <br>
<p>
Les enfants plus âgés et les adolescents peuvent présenter des symptômes ou des signes qui ne sont pas manifestement
liés au tractus intestinal, appelés symptômes « extra-intestinaux » ou « atypiques ».

Ces symptômes sont ce qui peut convaincre un médecin de tester la maladie coeliaque. Certaines de ces manifestations
comprennent :


    <li> - Croissance ralentie</li>
  <li>  - Perte de poids</li>
 <li> - Puberté retardée</li>
 <li> - Douleur douloureuse dans les os ou les articulations</li>
 <li> - Fatigue chronique</li>
 <li> - Maux de tête ou migraines récurrents</li>
 <li> - Éruption cutanée avec démangeaisons (dermatite herpétiforme)</li>
 <li> - Plaies buccales récurrentes, appelées ulcères aphteux, qui ressemblent à des aphtes</li>
</p>
<p>
    Les adolescents atteints de la maladie coeliaque peuvent également avoir des troubles de l'humeur, notamment de
    l'anxiété et de la dépression, ainsi que des crises de panique.

</p> <br>

</div>



</section>
<br><br>

    
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
