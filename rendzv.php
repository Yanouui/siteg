<!DOCTYPE html> 
<html lang="en">
     <head> 
         <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Al shifa Hospital</title> 
            
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
  
  color: antiquewhite;
  scroll-behavior: smooth;
}
section{
  
  padding: 4.5rem 0 3rem;
}
.topbutton{

bottom: 30px;
right: 30px;
z-index: 9;
position: fixed;

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
  font-weight: 800;
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












.forminscriptionN{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 16px;
    color:  #fff;
    
    background-color: white;
   


}.forminscription{
    width: 800px;
    height:700px;
    background-color: white;
    border: 1px solid #1730c1;
    position: absolute;
    margin: auto;

  margin-top:200px;
    top:0;
    left: 0;
    bottom: 150;
    right: 0%;
    padding: 30px;
    border-radius: 10px;
    border-top: 6px solid rgb(34, 3, 92);
    border-bottom:6px solid  rgb(34, 3, 92);
    box-shadow: 0 0 10px #000;
   ;



}h4{
    border: 3px solid #274690;
    background-color: #274690;
    color: white;
    border-radius: 1px;
    width: 100%;
}
.H ul {
    color: rgb(58, 57, 57) ;
}
.form-text{
    font-size: 32px;
    font-weight: 600;
    text-align: center;
    padding-bottom: 10px;
    color: #274690;;
    
}.form-saisie input{
width: 100%;
font-size: 14px;
outline: none;background-color:rgb(202, 199, 199);
color: black;
margin: 10px O;
padding: 10px;
border: 1px solid #FFF;
border-radius: 8px;



}
 .form-saisie span{

    font-size: 14px;
    font-weight: bold;
    color: #274690;;
 }
.btn_inscris{
     
     font-size: 16px;
background-color: rgb(31, 31, 192);
color: rgb(19, 19, 102);
margin: 20px 0;
padding: 0px;
border: none;border-radius: 10px;
margin-bottom: 25px;
text-align: center;


 }.btn_inscris:hover{
     background-color:
     rgb(19, 19, 102);
     color: #FFF;
 } select{
    width: 100%;
    font-size: 18px;
    border-radius: 8px;
 }
 







.footer{
  background: #274690;
  color: #979393;
  margin-top: 800px;
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


     </head><body>

     
<div class="topbutton">
    <a href="home.php"><span class="fas fa-angle-up"> </span></a>

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





     <IMg src="" width="100%" ></IMg>
<div class="forminscriptionN">
    <div class="forminscription">
       <div class="form-text">
      Prender un rendez-vous
       
       </div>
    <div class="form-saisie">
    
    <div class="right">
        <form action="rendzv.php" method="post" >
                      <span> Nom:*</span>
                      <input type="text" placeholder=" entrer votre nom" name="name" required/> <br>
              <span>Prénom:*</span> <BR>
                      <input type="text" placeholder=" entrer votre prénom" name="PRENOM" required/> <br>
                      <span>Adresse e-mail :*</span><BR>
                      <input type="email" placeholder=" entrer votre email" name="email" required/> <br>
                      <span>Téléphone :*</span><BR>
                      <input type="number" placeholder=" entrer votre numero de téléphone" name="phone" required/> <br>
                      <span class="required">Sexe:*</span> 
                        <select name="Sexe" required>
    <option value=""></option>
    <option value="Femme">Femme</option>
    <option value="Homme">Homme</option>


</select>   <br> 
 
                     
                     
                     
                      <span> Age:*</span>
                      <select name="Age" required>
                      <option value=""></option>
    <option value="0-5mois"> 0-5mois</option>
    <option value="6-12mois">6-12mois</option>
    <option value="1-2ans">1-2ans</option>
    <option value="2-3ans">2-3ans</option>
    <option value="4-8ans">4-8ans</option>
    <option value="8-12ans">8-12ans</option>
    <option value="2-16ans">12-16ans</option>
    <option value="16-18ans">16-18ans</option>
    <option value="18-20ans">18-20ans</option>
    <option value="20-30ans">20-30ans</option>
    <option value="20-30ans">30-40ans</option>
    <option value="40-50ans">40-50ans</option>
    <option value="50-60ans">50-60ans</option>
    <option value="+60ans">+60ans</option>


</select>   <br> 
<span>médecin:*</span>
<select name="medecin" required>
<option value=""></option>
    <option value="Salim Benotmane">Dr.Salim Benotmane</option>
    <option value="Rachid Berrezag">Dr.Rachid Berrezag</option>
    <option value="Noureddine Frioukh">Dr.Noureddine Frioukh</option>


</select>   <br>
                   <span>Date:*</span>
                      <input type="date" name="date" required/>
                     
                       <input type="submit" value="Rendez-vous" name="send" class="btn_inscris" width="30%"/> 
                     
                      
                     </form>
    </div>
                     

				
			</div>
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






         
  
 <?php // الاتصال بالسيرفر او قاعدة

$host = "localhost"; 
  $user = "root";
 $password = ""; 
 $dbName = "hospital";
  $conn = mysqli_connect($host, $user, $password,$dbName);
   // ارسال المعلومات المُدخله بواسطة المريض الى قاعدة البيانات 
if(isset($_POST['send'])) {
  $pName = $_POST['name'];
  $pPrenom = $_POST['PRENOM'];
   $pEmail = $_POST['email']; 
   $phone = $_POST['phone'];
   $Sexe = $_POST['Sexe'];
   $Age = $_POST['Age'];
   $medecin = $_POST['medecin'];
   $pdate = $_POST['date'];
   $pSend=['send'];
   $nom=filter_var($_POST['name'],FILTER_SANITIZE_STRING);
    $email=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
     $errors=[];
// validate name
   if(empty( $pName)){ $errors[]="vous devez ecrire un nom";
  }elseif(strlen( $pName)>30){
$errors[]="le nom ne doit pas depasse 30 caracters"; } 
// validate email
 if(empty(  $pEmail)){
 $errors[]="vous devez ecrire un Adresse e-mail";
 }elseif(filter_var(  $pEmail,FILTER_VALIDATE_EMAIL)==false){
  $errors[]=" L'Adresse e-mail est invalid";  }
 $query = "INSERT INTO patient(name,PRENOM,email,phone,Sexe,
 Age,medecin,date) VALUE('$pName ',' $pPrenom ','$pEmail ',' $phone','$Sexe',
 '$Age','$medecin','$pdate ')";
$result = mysqli_query($conn,$query); 
echo  '<script>alert("Rendez-vous pris, merci ");window.location.assign("rendzv.php");
</script>';} 
?>


                    </div> </div> </body>
 </html>
























