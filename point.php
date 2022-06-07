<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Point de vente </title>
  
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
:root{
   --box-shadow:2px 2px 18px rgb(14 52 54 / 15%);
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
  padding: 8px 110px;
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
.contact-wrap {
  width: 80%;
  height: 390px;
  margin: 60px 90px;
  display: flex;
  
}
h1{
    color:#274690;
}
.contact-in {
  padding: 40px 30px;
}

.contact-in:nth-child(1) {
  flex: 30%;
  background: url(DON.jpg);
  color: #fff;
}

.contact-in:nth-child(2) {
  flex: 20%;
  background: #274690;
}

.contact-in:nth-child(3) {
  flex: 25%;
  padding: 0;
}

.contact-in h1 {
  font-size: 24px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 500;
  margin-bottom: 20px;
}

.contact-in h2 {
  font-size: 20px;
  font-weight: 400;
  margin-bottom: 15px;
}

.contact-in h2 i {
  font-size: 16px;
  width: 40px;
  height: 40px;
  margin-right: 10px;
  background: #f5f5f5;
  color: #000;
  border-radius: 50px;
  line-height: 40px;
  text-align: center;
}

.contact-in p {
  font-size: 14px;
  font-weight: 300;
  margin-bottom: 20px;
}

.contact-in ul {
  padding: 0;
  margin: 0;
}

.contact-in ul li {
  list-style: none;
  display: inline-block;
  margin-right: 5px;
  margin-top: 5px;
}

.contact-in ul li a {
  display: block;
  width: 30px;
  height: 30px;
  text-align: center;
  background: #fff;
  border-radius: 50px;
}

.contact-in ul li a i {
  font-size: 14px;
  line-height: 30px;
  color: #000;
}



.contact-in-input::placeholder {
  color: #fff;
}

.contact-in-textarea {
  width: 100%;
  height: 140px;
  margin-bottom: 20px;
  border: 1px solid #fff;
  outline: none;
  padding-top: 5px;
  padding-left: 5px;
  background: transparent;
  color: #fff;
  font-size: 12px;
  font-weight: 300;
  font-family: 'Poppins', sans-serif;
}

.contact-in-textarea::placeholder {
  color: #fff;
}

.contact-in-btn {
  width: 100%;
  height: 40px;
  border: 1px solid #fff;
  outline: none;
  background: transparent;
  color: #fff;
  font-size: 12px;
  font-weight: 300;
  font-family: 'Poppins', sans-serif;
  cursor: pointer;
}

.contact-in iframe {
  width: 100%;
  height: 100%;
}

@media only screen and (max-width:480px) {
  .contact-in:nth-child(1) {
    flex: 50%;
  }

  .contact-in:nth-child(2) {
    flex: 50%;
  }

  .contact-in:nth-child(3) {
    flex: 100%;
  }

}

@media only screen and (max-width:360px) {
  .contact-in:nth-child(1) {
    flex: 50%;
  }

  .contact-in:nth-child(2) {
    flex: 50%;
  }

  .contact-in:nth-child(3) {
    flex: 100%;
  }

}
.heading{
    text-align: center;
    
    margin: 10px 90px 10px;
}
.heading span{
    font-weight: 500;
    color: #274690;

}
.heading h2{
    font-size: 1.7rem;
}
.heading p{
    font-size: 0.938rem;
}

/*footer*/
.footer{
  background: #274690;
  color: #979393;
 
}
.footer-container{
  display: grid;
 gap: 2rem;
  grid-template-columns: repeat(auto-fit, minmax(240px, auto));  margin-left: 100px;
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
                            <li> <a href="point.php"> Point de vente</a></li>
                            <li> <a href="produitt.php">les produits </a></li>
                           

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
<div class="heading">
       
        <h1> Les bonnes marques et adresses pour manger sans gluten en Algérie </h1> <br>
        <p> Il est possible de trouver certains de ces produits en grande surface ou dans des supérettes non spécialisées. Mais il
        existe certains magasins qui se spécialisent dans la vente de produits finis ou de gourmandises sans gluten. Concernant
        les pâtisseries et viennoiseries il faut tout de même prendre ses précautions en cas de contamination au gluten</p> <br><br>
       
        </div>
        <div class="heading">
        
        <h1>Annaba</h1>
            <h2>Magasin Bonjour </h2>
        </div>
        <div class="contact-wrap">
        
            <div class="contact-in">
                <h1>Contact Info</h1>
                <h2><i class="fa fa-phone" aria-hidden="true"></i> Téléphone : </h2>
                <p> 0559 17 99 82 </p>
                <h2><i class="fa fa-envelope" aria-hidden="true"></i> Facebook : </h2>
                <p> Magasin Bonjour </p>
                <h2><i class="fa fa-map-marker" aria-hidden="true"></i> Addresse</h2>
                <p> 56, lotissement Vincent, Bouzereah, Alger </p>
        
            </div>
            <div class="contact-in">
                <h1>Magasin Bonjour </h1>
                <p>
                Des produits Sans gluten,sans sucre, fitness et pour bébé
                </p>
            </div>
            <div class="contact-in">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102080.6127716641!2d7.674252935961698!3d36.91380654626297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f007bb034e7571%3A0x28fddce8b255b712!2sAnnaba!5e0!3m2!1sfr!2sdz!4v1653141998507!5m2!1sfr!2sdz"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        
        <div class="heading">
        <h1>Alger</h1>  <br>
       <h3>MAISON SANS GLUTEN DAR EL KARIM</h3></div>
    <div class="contact-wrap">
        
        <div class="contact-in">
            <h1>Contact Info</h1>
            <h2><i class="fa fa-phone" aria-hidden="true"></i> Téléphone : </h2>
            <p> 0540 84 94 40</p>
            <h2><i class="fa fa-envelope" aria-hidden="true"></i> Instagram</h2>
            <p>dar_elkarim </p>
            <h2><i class="fa fa-map-marker" aria-hidden="true"></i> Address</h2>
            <p>104, lotissement Les Rosiers, Ouled Fayet, Alger </p>

        </div>
        <div class="contact-in">
            <h1> Maison sans gluten Dar El Karim</h1>
            <p>
                Située à Ouled Fayet, Dar El Karim se spécialise dans la vente de produits sans gluten mais propose également des
                pâtisseries, gâteaux traditionnels, du pain, de la rechta, des pizzas et même des mhajebs gluten-free.
            </p>
        </div>
        <div class="contact-in">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3197.513320064965!2d2.9444091005676443!3d36.73424802901143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128fa51d6d62b001%3A0x3d10f336001f98be!2sMaison%20sans%20gluten%20Dar%20elkarim!5e0!3m2!1sfr!2sdz!4v1653141626395!5m2!1sfr!2sdz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
        </div>
    </div>
<div class="heading">


<h2> S&R sans gluten</h2>
</div>
<div class="contact-wrap">

    <div class="contact-in">
        <h1>Contact Info</h1>
        <h2><i class="fa fa-phone" aria-hidden="true"></i> Téléphone :  </h2>
        <p> 0799 41 00 22</p>
        <h2><i class="fa fa-envelope" aria-hidden="true"></i> Facebook :  </h2>
        <p> S&R sans gluten </p>
        <h2><i class="fa fa-map-marker" aria-hidden="true"></i> Addresse</h2>
        <p> 56, lotissement Vincent, Bouzereah, Alger </p>

    </div>
    <div class="contact-in">
        <h1> S&R sans gluten</h1>
        <p>
            Situé à Bouzereah, cette adresse propose différentes sortes de pains, des fonds de tartes mais également des gâteaux sur
            commande. Le magasin propose aussi chaque vendredi des pâtisseries et des diouls.
        </p>
    </div>
    <div class="contact-in">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3195.475325133225!2d3.015914650568995!3d36.783152376261114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128fb22a7223b5f1%3A0x6634a882aed9b34a!2s56%20Lot.%20Vincent%2C%20Bouzareah!5e0!3m2!1sfr!2sdz!4v1653141692879!5m2!1sfr!2sdz"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>





<div class="heading">


    <h2> Caramel sans gluten </h2> </div>
<div class="contact-wrap">

    <div class="contact-in">
        <h1>Contact Info</h1>
        <h2><i class="fa fa-phone" aria-hidden="true"></i> Téléphone : </h2>
        <p> 0555 64 00 00</p>
        
        <h2><i class="fa fa-map-marker" aria-hidden="true"></i> Addresse</h2>
        <p> 67 cité Alioua Fodil route Ouled Fayet, Cheraga, Alger </p>

    </div>
    <div class="contact-in">
        <h1> Caramel sans gluten</h1>
        <p>
            La pâtisserie située à Cheraga propose des pains et des salés mais surtout des pâtisseries, viennoiseries et gâteaux
            traditionnels.
        </p>
    </div>
    <div class="contact-in">
        
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3196.373808713793!2d2.9499942505683823!3d36.76159897747355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128fb01156220603%3A0xf581a0d96b915e2a!2s67%20Cit%C3%A9%20Alioua%20Fodil%2C%20Ch%C3%A9raga!5e0!3m2!1sfr!2sdz!4v1653141744106!5m2!1sfr!2sdz"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>









<div class="heading">


    <h2> Neima la maison du sans gluten </h2>
</div>
<div class="contact-wrap">

    <div class="contact-in">
        <h1>Contact Info</h1>
        <h2><i class="fa fa-phone" aria-hidden="true"></i> Téléphone : </h2>
        <p>0558 71 19 45  </p>
        <h2><i class="fa fa-envelope" aria-hidden="true"></i> Facebook : </h2>
        <p> S&R sans gluten </p>
        <h2><i class="fa fa-map-marker" aria-hidden="true"></i> Addresse</h2>
        <p> Cité Douzi, Bab ezzouar </p>

    </div>
    <div class="contact-in">
        <h1> Neima la maison du sans gluten </h1>
        <p>
            Le point de vente se spécialise et propose une très grande variété de produits. Le magasin livre sur Alger et reste très
            actif sur Facebook pour informer au mieux ses clients des nouveaux arrivages de produits. Neima propose aussi des
            viennoiseries et pâtisseries.
        </p>
    </div>
    <div class="contact-in">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3197.4087502578536!2d3.181816050567691!3d36.73675867887032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128e51fc2d79021d%3A0x12b943f0a2bab672!2sCit%C3%A9%20Douzi%2003%2C%20Bab%20Ezzouar!5e0!3m2!1sfr!2sdz!4v1653141800443!5m2!1sfr!2sdz"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>




<div class="heading">
    <h1>Sétif</h1>


    <h2>Miny Maïs </h2>
</div>
<div class="contact-wrap">

    <div class="contact-in">
        <h1>Contact Info</h1>
        <h2><i class="fa fa-phone" aria-hidden="true"></i> Téléphone : </h2>
        <p> 0743 76 80 92</p>
        <h2><i class="fa fa-envelope" aria-hidden="true"></i> Facebook : </h2>
        <p> Miny Maïs </p>
        <h2><i class="fa fa-map-marker" aria-hidden="true"></i> Addresse</h2>
        <p> Rue Khabchiche Embarek, Laararsa, Sétif </p>

    </div>
    <div class="contact-in">
        <h1> Miny Maïs </h1>
        <p>
            L’enseigne propose des gâteaux, du pain, des viennoiseries, des farines et pâtes…de quoi trouver son bonheur et se faire
            plaisir.
        </p>
    </div>
    <div class="contact-in">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3219.547946460166!2d5.41301765055308!3d36.201874408752026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f31595ea6f4f49%3A0x9f43855bbc2d6f90!2sRue%20Khabchiche%20Embarek%2C%20S%C3%A9tif!5e0!3m2!1sfr!2sdz!4v1653141838997!5m2!1sfr!2sdz"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>





<div class="heading">
<h1> Skikda</h1> <br>

    <h2> La vie sans gluten </h2>
</div>
<div class="contact-wrap">

    <div class="contact-in">
        <h1>Contact Info</h1>
        <h2><i class="fa fa-phone" aria-hidden="true"></i> Téléphone : </h2>
        <p> 0552 83 81 35 </p>
        <h2><i class="fa fa-envelope" aria-hidden="true"></i> Facebook : </h2>
        <p> S&R sans gluten </p>
        <h2><i class="fa fa-map-marker" aria-hidden="true"></i> Addresse</h2>
        <p> La vie sans gluten </p>

    </div>
    <div class="contact-in">
        <h1> La vie sans gluten  </h1>
        <p>
        Le magasin propose une large gamme de produits, du chocolat à la farine d’amande, en passant par les glaces et les pâtes
        de différentes marques.
        </p>
    </div>
    <div class="contact-in">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12769.159117766163!2d6.887278242484262!3d36.8594820742936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f1c5e4d7aa34df%3A0xc879f51ed3c3d601!2sLa%20vie%20sans%20gluten!5e0!3m2!1sfr!2sdz!4v1653141883026!5m2!1sfr!2sdz"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
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