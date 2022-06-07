<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <https: //cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;0,700;1,400&display=swap');

            * {
                font-family: 'Poppins', sans-serif;
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                scroll-behavior: smooth;
                scroll-padding-top: 4rem;
                list-style: none;
                text-decoration: none;
            }

            img {
                width: 100%;
            }

            body {

                color: rgb(255, 255, 255);
                scroll-behavior: smooth;
            }

            section {

                padding: 4.5rem 0 3rem;
            }

            .topbutton {

                bottom: 30px;
                right: 30px;
                z-index: 9;
                position: fixed;

            }

            .topbutton a {
                height: 40px;
                width: 40px;
                text-align: center;
                background: #274690;
                display: block;
                border-radius: 10px;
                cursor: pointer;
            }

            .topbutton a span {
                color: #000000;
                line-height: 40px;
                font-size: 30px;

            }

            .container {
                max-width: 1068px;
                margin-left: auto;
                margin-right: auto;
                position: sticky;
            }

            header {
                display: block;
                width: 100%;
                background: #274690;
                position: sticky;
                top: 0;
                left: 0;
                z-index: 100;


            }

            .wrapper .multi_color_border {
                width: 100%;
                height: 5px;
                background: linear-gradient(to right, #F5F3F5 0%, #576CA8 25%, #576CA8 25%, #274690 50%, #414440 50%, #274690 75%, #274690 75%, #494949 100%);
            }

            .wrapper .top_nav {
                margin-top: 5px;
                width: 100%;
                height: 65px;
                background: rgb(255, 255, 255);
                padding: 0 50px;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .wrapper .top_nav .left {
                display: flex;
                align-items: center;
            }

            .wrapper .top_nav .left .logo1 p {
                font-size: 24px;
                font-weight: bold;
                color: #ffffff;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                margin-right: 25px;
            }

            .wrapper .top_nav .left .logo p span {
                color: hsl(240, 61%, 37%);
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

            }

            .wrapper .top_nav .right ul {
                display: flex;
            }

            .wrapper .top_nav .right ul li {
                margin: 0 12px;

            }

            .wrapper .top_nav .right ul li:last-child {
                background: #274690;
                margin-right: 0;
                border-radius: 12px;
                text-transform: uppercase;
                letter-spacing: 3px;
            }

            .wrapper .top_nav .right ul li:hover:last-child {
                background: #576CA8;
            }

            .wrapper .top_nav .right ul li a {
                display: block;
                padding: 8px 10px;
                color: #666666;
            }

            .wrapper .top_nav .right ul li:last-child a {
                color: rgb(255, 255, 255);
            }

            .nav {
                display: flex;
                align-items: inherit;
                justify-content: center;
                padding: 20px 20px;
                position: sticky;
            }

            .logo {
                display: flex;
                margin-right: 600px;
                column-gap: 0.5rem;
                font-size: 1rem;
                font-weight: 800;
                color: #ffffff;
                text-transform: uppercase;

            }

            .logo .bx {
                font-size: 24px;
                color: blue;
            }

            .navbar {
                display: flex;
            }

            .navbar a {
                padding: 8px 17px;
                color: blueviolet;
                font-size: 1rem;
                text-transform: initial;
                font-weight: 100;
            }

            .navbar a:hover {
                color: rgb(215, 209, 209)
            }

            #menu-icon {
                font-size: 24px;
                cursor: pointer;
                display: none;
            }

            #menu {
                display: none;
            }

            .btn {
                padding: 8px 20px;
                background: #576CA8;
                color: rgb(205, 208, 208);
                border-radius: 5rem;
            }

            .btn:hover {
                background: rgb(186, 184, 184);
            }

            .nav {
                background: #274690;
                text-align: center;
                position: sticky;
                top: 0px;
            }

            .nav ul {
                display: inline-flex;
                list-style: none;
                color: rgb(213, 207, 207);
            }

            .nav ul li {
                width: 155px;
                margin: 1px;
                padding: 5px;
            }

            .nav ul li a {
                text-decoration: none;
                color: #ffffff;
            }

            .active,
            .nav ul li:hover {
                background: #576CA8
            }

            .sub-menu-1 {
                display: none;
            }

            .nav ul li:hover .sub-menu-1 {
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

            .nav ul li:hover .sub-menu-1 ul li {
                width: 150px;
                padding: 10px;
                border-bottom: 1px dotted rgb(255, 255, 255);
                background: transparent;
                border-radius: 0;
                text-align: left;
            }

            .nav ul li:hover .sub-menu-1 ul li:last-child {
                border-bottom: none;
            }

            .nav ul li:hover .sub-menu-1 ul li a:hover {
                color: #576CA8;
            }





















            .M {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: sans-serif;
            }

            .containerD {
                max-width: 1170px;
                margin: auto;
            }

            .rowD {
                display: flex;
                flex-wrap: wrap;
            }

            img {
                vertical-align: middle;
                max-width: 100%;
            }

            /* team section */
            .teamD {
                min-height: 100vh;
                background-color: #ffffff;
                line-height: 1.5;
                padding: 80px 0;
            }

            .team-itemD {
                width: calc((100% / 3) - 30px);
                margin: 0 15px 30px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
                padding: 30px;
                border-radius: 5px;
                text-align: center;
            }

            .team-itemD .img-boxD {
                height: 280px;
                width: 250px;
                display: inline-block;
                border-radius: 25%;
                overflow: hidden;
                position: relative;
            }

            .team-itemD .img-boxD::before {
                content: '';
                position: absolute;
                left: 0;
                top: 0;
                box-sizing: border-box;
                height: 100%;
                width: 100%;
                background-color: rgba(0, 0, 0, 0.6);
                transform: translateX(-100%);
                transition: all 0.5s ease;
            }

            .team-itemD:hover .img-boxD::before {
                transform: translateX(0%);
            }

            .team-itemD .img-boxD img {
                width: 100%;
            }

            .team-itemD .social-linksD {
                position: absolute;
                left: 0;
                top: 0;

                height: 100%;
                width: 100%;
                display: flex;
                flex-wrap: wrap;
                align-content: center;
            }

            .team-itemD .social-linksD a {
                display: block;
                width: 100%;
                text-decoration: none;
                text-transform: capitalize;
                font-size: 16px;
                color: #ffffff;
                transition: opacity 0.5s ease, margin 0.3s ease;
                opacity: 0;
            }

            .team-itemD:hover .social-linksD a {
                transition-delay: 0.3s;
                opacity: 1;
                margin: 3px 0;
            }

            .team-itemD h3 {
                font-size: 20px;
                color: #000000;
                margin: 25px 0 5px;
                font-weight: normal;
                text-transform: capitalize;
            }

            .team-itemD p {
                font-size: 16px;
                color: #555555;
                text-transform: capitalize;
            }

            .team-itemD p i {
                color: goldenrod;

            }

            .team-itemD p h5 {
                color: #000000;
                font-size: 8px;
            }

            .team-itemD i {
                border-radius: 3px;

                font-size: 30px;


            }

            .team-itemD a {
                color: black;
            }

            .ui h3 {
                color: #000000;
                border: #274690 1px solid;
                border-radius: 5px;
                background-color: #576CA8;
                width: 40%;
            }



            .footer {
                background: #274690;
                color: #979393;
                margin-top: 50px;
            }

            .footer-container {
                display: grid;
                gap: 2rem;
                grid-template-columns: repeat(auto-fit, minmax(240px, auto));
            }

            .footer-container h2 {
                font-size: 1.7rem;
                font-weight: 500;
            }

            .footer-box {
                display: flex;
                flex-direction: column;

            }

            .footer-box h3 {
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

            .footer-box a:hover {
                color: #838385;
            }

            .social a {
                font-size: 20px;
                margin-right: 1rem;

            }

            .social a:hover {
                color: rgb(3, 9, 119);
            }

            .button {
                background-color: #274690;
                ;
                border: none;
                color: black;
                padding: 15px;
                border-radius: 5rem;
                text-decoration: none;
                font-size: 1rem;

            }

            .button:hover {
                background-color: #576CA8;
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








    <div class="M">
        <section class="teamD">
            <div class="containerD">
                <div class="rowD">
                    <div class="team-itemD">
                        <div class="img-boxD">
                            <img src="P (3).jpg" alt="team img" height="280PX">
                            <div class="social-linksD">
                                <a href="#">facebook</a>
                                <a href="#">twitter</a>
                                <a href="#">instagram</a>

                            </div>
                        </div>
                        <h3>Dr.Salim Benotmane</h3>
                        <p> Médecin géneraliste <br>
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <h3> 
                            Clinique Les Jasmins 
                        </h3>
                   <br>
                        <a href="#"><i class="fa-solid fa-phone">0654982782</i>
                            
                    </div>
                    <div class="team-itemD">
                        <div class="img-boxD">
                            <img src="P (2).jpg" alt="team img">
                            <div class="social-linksD">
                                <a href="#">facebook</a>
                                <a href="#">twitter</a>
                                <a href="#">instagram</a>

                            </div>
                        </div>
                        <h3>Dr.Rachid Berrezag</h3>
                        <p>Médecin géneraliste
                             <br>
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <h3>
                            Clinique Al Farabi Annaba
                        </h3>
                        </p>
                       <br>
                        <a href="#"> <i class="fa-solid fa-phone">0534872054</i>
                           
                    </div>
                    <div class="team-itemD">
                        <div class="img-boxD">
                            <img src="P (1).jpg" alt="team img" height="300PX">
                            <div class="social-linksD">
                                <a href="#">facebook</a></i>
                                <a href="#">twitter</a></i>
                                <a href="#">instagram</a>

                            </div>
                        </div>
                        <h3>Dr.Noureddine Frioukh</h3>
                        <p>Médecine interne <br>

                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <h3>
                            Clinique EL DJAZAIR
                        </H3>
                        </p>
                       <br>
                        <a href="#"> <i class="fa-solid fa-phone"> 0555002472</i></a> 
                        

                    </div>
                </div>
            </div>
        </section>


    </div>

    <center>
    <a class="button" href="rendzv.php"> 
    <strong>Faire un rendez-vous</strong></a>
    </center>

   


<!--footerrrrrrr-->
<section class="footer">
    <br><br> <br>
    <div class="footer-container container">
        <h2>GlutenFree</h2>
        <div class="footer-box">
            <h3>Lien</h3>

            <a href="/maladicoeliaque.html">Maladie coeliaque </a>
            <a href="/gluten.html">c'est quoi le gluten </a>
            <a href="/recette.html"> Recette</a>

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