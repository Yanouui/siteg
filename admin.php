<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
  padding: 0 50px;
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
  padding: 20px 20px ;
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
    text-align:center;
   position: sticky;
    top: 0px;
}
.nav ul
{
display:inline-flex;
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
    color: #fdfdfd;
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
    position:absolute;
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
.abonné{
   width: 100%;
   height: 100%;
   display: flex;
   justify-content: center;
   align-items: center;

}
.wrapper1{
    display: flex;
    width: 70%;
    justify-content:space-around;
}
h1{
    color: #274690;
    margin: 10px, 10px;
}
.card{
    width: 280px;
    height: 360px;
    padding: 2rem 1rem;
    background: #fff;
    
    align-items: flex-end;
    box-shadow: 0px 7px 0px rgba(210, 203, 203, 0.5);
    transition: 0.5s ease-in-out;
}
.card:hover{
    transform: translateY(20px);
    cursor: pointer;
}

        /*footer*/
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





<section class="abonné">
<div class="wrapper1">
    <div class="card">
<img src="doctor.jpg" alt="" height="270PX">
<div class="info">
<h1>Liste des rendez-vous :</h1>

<div class="btn"> <a href="Liste.php">commencez</a></div>
</div>
    </div>

<div class="card">
<img src="donate1.jpg" alt=""  height="278PX">
<div class="info">
<h1>Liste des dons : </h1>
&nbsp;&nbsp;&nbsp;

<div class="btn">  <a href="LISTED.php">commencez</a></div>
</div>
</div>
<div class="card">
<img src="mvsg_home_img-1.jpg" alt="INSCRIPTION " height="278PX">
<div class="info">
<h1>liste des inscription : </h1>
<br>
<div class="btn">  <a href="listeinscript.php">commencez</a></div>
</div>
</div>
<div class="card">
<img src="farina.jpg" alt="INSCRIPTION " height="289PX">
<div class="info">
<h1>Mise a jour: </h1>
<br>
&nbsp;&nbsp;&nbsp;
<div class="btn">  <a href="admin_page.php">commencez</a></div>
</div>
</div><div class="card">
<img src="J.jpg" alt="INSCRIPTION " height="279PX">
<div class="info">
<h1>Les messages: </h1>
&nbsp;&nbsp;
<div class="btn">  <a href="listemessage.php">commencez</a></div>
</div>
</div>

</section>

<br><br><br><br><br><br><br><br><br><br><br><br>

<!--footerrrrrrr-->
<section class="footer">
<br><br> <br>
<div class="footer-container container">
<h2>GlutenFree</h2>
<div class="footer-box">
    <h3>lien</h3>

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