<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sensibilité Au Gluten</title>
    
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
  color: rgb(22, 22, 22);
  scroll-behavior: smooth;
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
section{
  
  padding: 0rem 0rem 0rem 0rem;}

.IMAGE{
  margin-top: 0px;
  background: url( mmmmmmm.jpg);
  background-repeat: no-repeat;
  background-size:cover;
  background-position: center;
 
  height: 440px;
  
  display: flex;
  align-items: center;

}
.section{
    line-height: 25px;
}
h1{
   color: #274690;
}h4{
 color: #576CA8; 
}.soustitre{
  margin-left: 50px;
   margin-right: 20px;
}.parag{
    margin-left: 50px;
   margin-right: 50px;
}.TITRE{
    margin-left: 20px;
   margin-top: 50px;
   font-size: x-large;
   font-family:'Ubuntu', sans-serif;
}.LISTE{
    margin-left: 50px;
   margin-right: 50px;
}

.content-table {
  border-collapse: collapse;
  margin: 70px 250px;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.section {
  line-height: 30px;
}

.content-table thead tr {
  width: 10px;
  background-color: #274690;
  color: #ffffff;
  text-align: left;
  font-weight: bold;

}

.content-table th,
.content-table td {
  padding: 12px 1px;
}

.content-table tbody tr {
  border-bottom: 1px solid #274690;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #ffffff;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #274690;
}

.content-table tbody tr.active-row {

  color: #000000;
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
                    <li><a href="#">inscription</a></li>
                </ul>
            </div>
        </div>
    </div>
    <header>
        <div class="nav container">
            <a href="Home1.php" class="logo"><i class='bx bxs-home-alt-2'></i>GlutenFree</a>
            <input type="checkbox" name="" id="menu">
            <label for="menu"> <i  class='bx bx-menu' id="menu-icon"></i> </label>
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

    <section class="section">
        <span class="IMAGE">
            
        </span>
        
        <div class="TITRE">
            <h1> Sensibilité au gluten non cœliaque : Comment la diagnostiquer 
            </h1>
        </div> <br>
        
        

         <br>
        <div class="parag">
           &nbsp; Le spectre des problèmes médicaux associés au gluten comprend la maladie cœliaque, la dermatite
            herpétiforme, l’ataxie causée par le gluten, l’allergie au blé et la sensibilité au gluten non cœliaque. Le
            terme « sensibilité au gluten non cœliaque (SGNC) » est utilisé pour décrire l’état clinique d’individus
            présentant des symptômes lors de la consommation d’aliments contenant du gluten et qui se sentent mieux
            lorsqu’ils suivent un régime alimentaire sans gluten (SG), mais qui ne sont PAS atteint de la maladie
            cœliaque.
        </div> <br>
        
        
        <div class="soustitre">
            <h4> Sensibilité au gluten non cœliaque</h4>
        </div> <br>
        <div class="parag">
            La sensibilité au gluten non cœliaque (SGNC) est fréquemment autodiagnostiquée; c’est donc pourquoi il est
            difficile d’établir sa réelle prévalence. Il n’existe actuellement aucun biomarqueur pour ce problème
            médical. <br>  Au cours d’une enquête britannique effectuée auprès de 1 002 personnes, 13 % des participants ont
            rapporté avoir une sensibilité au gluten et 3,7 % de ceux-ci ont dit suivre un régime alimentaire SG. Lors
            d’une vaste étude italienne effectuée auprès de 12 255 personnes, il a été trouvé que la SGNC est légèrement
            plus commune que la maladie cœliaque. Les données de la National Health and Nutrition Examination Survey
            menée aux États-Unis ont permis d’établir qu’entre 0,55 % et 0,63 % de la population suivait un régime
            alimentaire SG même en l’absence de la maladie cœliaque. Cette prévalence est semblable à celle des cas
            diagnostiqués et non diagnostiqués de maladie cœliaque. <br>

            Les symptômes de la SGNC sont très variables. Ceux-ci comprennent les ballonnements, les douleurs
            abdominales et la diarrhée; les symptômes peuvent ressembler à ceux du syndrome du côlon irritable. Les
            autres manifestations intestinales comprennent les nausées, le reflux gastrique, les ulcérations buccales et
            la constipation. Les individus peuvent présenter des symptômes non intestinaux comme un malaise général, de
            la fatigue, des maux de tête, avoir l’esprit brouillé, de l’engourdissement, des douleurs articulaires ou
            des éruptions cutané. <br> <br>
            Les symptômes cliniques de la SGNC et de la maladie cœliaque se chevauchent, ce qui rend la distinction
            entre les deux problèmes médicaux difficile sur la base seule des symptômes. Dans une étude effectuée auprès
            d’adultes, les patients atteints de la maladie cœliaque étaient plus susceptibles d’avoir des antécédents
            familiaux et personnels positifs de problèmes médicaux auto-immuns et de carences nutritives que les
            patients atteints de SGNC. Il est primordial de noter que dans la SGNC, les anticorps tTG, EMA et DGP sont
            absents, et qu’il n’y a aucune atrophie des villosités (dommages à l’intestin grêle) lors de la biopsie.
            Ainsi, le diagnostic de la SGNC ne peut être établi qu’en excluant la maladie cœliaque. <br> <br>

            La sensibilité au gluten non cœliaque a été rapportée pour la première fois dans les années 1970. Au cours
            de la dernière décennie toutefois, un nombre croissant de personnes suivent un régime alimentaire SG pour
            ses bienfaits perçus sur la santé. Cela a renouvelé l’intérêt et les préoccupations à savoir si ces
            individus sont réellement atteints d’un problème médical associé au gluten. Il est vrai que certaines de ces
            personnes suivant un régime alimentaire SG de leur plein gré peuvent réellement être atteintes de la maladie
            cœliaque. Ces individus pourraient n’avoir reçu aucun diagnostic ou de conseils nutritionnels de la part
            d’un diététiste ni de suivi approprié de la part de leur médecin. Ainsi, ils pourraient être plus à risque
            de développer des complications de la maladie cœliaque à long terme. Puisque les dommages infligés à
            l’intestin grêle se résorbent et que le tissu transglutaminase (et les autres anticorps) se normalise après
            avoir entamé un régime alimentaire SG, il devient difficile d’établir un réel diagnostic de la maladie
            cœliaque. <br>

            
        </div> <br>
        <table class="content-table">
        
            <thead>
        
                <tr>
                    <th> 
                       
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th> Maladie cœliaque &nbsp;&nbsp;&nbsp   </th>
        <th> Sensibilité au gluten non cœliaque (SGNC) </th>
        
                </tr>
            </thead>
            <tbody>
                <tr class="active-row">
                    <td>l‘apparition des symptômes </td>
                    <td> Des semaines, voire des années </td>
                    <td>Quelques heures ou quelques jours </td>
        <td></td>
        
                </tr>
                <tr class="active-row">
                    <td>Pathogenèse  </td>
                    <td> Auto-immune </td>
                    <td>Réaction immunologique jusqu‘à présent inexpliquée </td>
        
        
                </tr>
                <tr class="active-row">
                    <td> Symptômes</td>
                    <td> Intestinaux et extra-intestinaux </td>
                    <td> Intestinaux et extra-intestinaux </td>
        
                </tr>
                <tr class="active-row">
                    <td> Complications</td>
                    <td> Pathologies associées, complications à long terme </td>
                    <td>Aucune pathologie associée, complications à long terme inconnues </td>
        
                </tr>
                <tr class="active-row">
                    <td>Thérapie </td>
                    <td> Alimentation sans gluten à vie
                    
                    Les personnes souffrant de maladie cœliaque doivent définitivement bannir tout aliment contenant du gluten même si
                    ceux-ci ne contiennent que des traces. </td>
                    <td>
                        Alimentation sans gluten avec aménagements temporaires possibles
                    </td>
                
                
                </tr>
                
               
            </tbody>
        </table>
        <div class="soustitre">
            <H4> Message d’ensemble</H4>
        </div> <br>
        <div class="parag">
            La chose la plus importante à savoir pour le public et les professionnels de la santé est que le diagnostic
            de la sensibilité au gluten non cœliaque ne devrait pas être effectué sans exclure la maladie cœliaque. Un
            régime alimentaire sans gluten NE devrait PAS être entamé sans un examen clinique approprié comprenant les
            tests sérologiques des anticorps des tissus transglutaminase (IgA) du patient lorsqu’il consomme toujours du
            gluten.


    </section>
<br><br><br><br><br>


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
                <a href="#">cvbn@gmail.com</a>
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