<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>

    </body>




    <html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Our-Team</title>
</head>

<body>
        
    <div class="containercontact">
        <div class="header">
            <p>CONTACT US</p>
        </div>
        <div class="sub-container">
            <div class="teams">
                <img src="images/contactpic33.png" alt="">
                <div class="name">Aaron Joshua G. Quesada</div>
                <div class="desig">QA Staff / Tester<br>Programmer</div>
                <div class="about"> aj.quesada0233@student.tsu.edu.ph <br>
                +639052738134 <br>
                Carangian, Tarlac City.

</div>

                <div class="social-links">
                    <a href="https://www.facebook.com/aaronjoshua.quesada.7"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/arbiter.12/"><i class="fa fa-instagram"></i></a>
                    <a href="https://twitter.com/Lux_Shiroi"><i class="fa fa-twitter"></i></a>
                    
                </div>
            </div>

            <div class="teams">
                <img src="images/contactpic4.png" alt="">
                <div class="name">Daniel John Rey P. Que </div>
                <div class="desig">Designer<br>Programmer</div>
                <div class="about">djr.que0267@student.tsu.edu.ph <br> +639093197731 <br>
                Matatalaib, Tarlac City.
            </div>

                <div class="social-links">
                    <a href="https://www.facebook.com/danielque25/"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/danyel_haha/"><i class="fa fa-instagram"></i></a>
                    <a href="https://twitter.com/danyelhaha"><i class="fa fa-twitter"></i></a>
                    
                </div>
            </div>

            <div class="teams">
                <img src="images/contactpic2.png" alt="">
                <div class="name">Kurth Clarenze L. Novesteras </div>
                <div class="desig">Project Manager<br>Programmer</div>
                <div class="about">kc.novesteras0192@student.tsu.edu.ph <br> +639455893622 <br>
                Estipona, Pura.
</div>

                <div class="social-links">
                    <a href="https://www.facebook.com/kyuszhiro"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/einzbernz/"><i class="fa fa-instagram"></i></a>
                    <a href="https://twitter.com/Einzbernz_"><i class="fa fa-twitter"></i></a>
                    
                </div>
            </div>

            <div class="teams">
                <img src="images/contactpic44.png" alt="">
                <div class="name">Benito P. Catubay III </div> <br>
                <div class="desig">System Analyst<br>Programmer</div>
                <div class="about">b.catubay0226@student.tsu.edu.ph <br> +639452459374 <br>
               Buenavista, Tarlac City.

 </div>

                <div class="social-links">
                    <a href="https://www.facebook.com/thirddca"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/thirdiecatubay/"><i class="fa fa-instagram"></i></a>
                    <a href="https://twitter.com/CatubayIII"><i class="fa fa-twitter"></i></a>
                   
                </div>
            </div>

        </div>
    </div>
    
</body>

<style type="text/css">

* {
    margin: 0;
    padding: 0;
    
  
    
}


.containercontact {
    
    text-align: center;
    background: linear-gradient(rgba(0,0,0,.4), rgba(0,0,0,.4)), url(images/wal2.jpg);
    height: 90%;
    font-family: 'Quicksand', sans-serif;
    background-size: cover;
  background-attachment: fixed;
}

.header {
    padding-top: 84px;
    padding-bottom: 10px;
    color: white;
    font-size: 75px;
    margin: auto;
    line-height: 50px;
    font-family: 'Quicksand', sans-serif;
    font-weight: 500;
    text-shadow: 0 0 0.35em white;
    cursor: pointer;


}

.sub-container {
    max-width: 1200px;
    margin: auto;
    padding: 30px 0;
    display: flex;
    flex-wrap: nowrap;
    justify-content: center;
}

.teams {
    margin: 10px;
    padding: 22px;
    max-width: 30%;
    cursor: pointer;
    transition: 0.4s;
    box-sizing: border-box;
    background: linear-gradient(rgba(255,255,255,.8), rgba(255,255,255,.7));
    border-radius: 12px;
    
}

.teams:hover {
    background: linear-gradient(rgba(91,134,191,.8), rgba(91,134,191,.8));
    border-radius: 12px;
    color: #FFFFFF;
}

.teams img {
    width: 200px;
    height: 200px;
    border-radius: 59px;
    margin: 12px;
}

.name {
    padding: 12px;
    font-weight: bold;
    font-size: 17px;
    text-transform: uppercase;
    margin: 10px 10px;
}

.desig {
    font-style: italic;
    color: #888;
    margin-bottom: 15px;
}

.about {
    margin: 20px 0;
    font-weight: lighter;
    color: #4e4e4e;
}



.social-links {
    margin-top: 14px;
    margin-bottom: 150px;
   
}

.social-links a {
    display: inline-block;
    height: 30px;
    width: 30px;
    transition: .4s;
    
}

.social-links a:hover {
    transform: scale(1.5);
    
}

.social-links a i {
    color: #000000;
}


@media screen and (max-width: 600px) {
    .teams {
        max-width: 100%;
    }
}
</style>

<?php include 'includes/scripts.php'; ?>

</html>