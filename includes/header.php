<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="icon" type="image/png" href="/images/SWITCHlogo.png">
  	<title>Project K</title>
  	<!-- Tell the browser to be responsive to screen width -->
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  	<!-- Bootstrap 3.3.7 -->
  	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  	<!-- DataTables -->
    <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  	<!-- Font Awesome -->
  	<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet"> 
  	<!-- Theme style -->
  	<link rel="stylesheet" href="dist/css/AdminLTE.css">
  	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  	<link rel="stylesheet" href="dist/css/skins/skin-blue.css">
    <!-- Magnify -->
    <link rel="stylesheet" href="magnify/magnify.min.css">

  	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  	<!--[if lt IE 9]>
  	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  	<![endif]-->

  	<!-- Google Font -->
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 




  
    <!-- Paypal Express -->
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <!-- Google Recaptcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

  	<!-- Custom CSS -->
    <style type="text/css">
      @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap');
    /* Small devices (tablets, 768px and up) */
    @media (min-width: 768px){ 
      #navbar-search-input{ 
        width: 40px; 
      }
      #navbar-search-input:focus{ 
        width: 100px; 
      }
    }

    /* Medium devices (desktops, 992px and up) */
    @media (min-width: 992px){ 
      #navbar-search-input{ 
        width: 175px; 
      }
      #navbar-search-input:focus{ 
        width: 175px; 
      } 
    }

    .word-wrap{
      overflow-wrap: break-word;
    }
    .prod-body{
      height:300px;
    }

    .box:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }
    .register-box{
      margin-top:20px;
    }

    #trending{
      list-style: none;
      padding:10px 5px 10px 15px;
    }
    #trending li {
      padding-left: 1.3em;
    }
    #trending li:before {
      content: "\f046";
      font-family: FontAwesome;
      display: inline-block;
      margin-left: -1.3em; 
      width: 1.3em;
    }

    
    

    /*Magnify*/
    .magnify > .magnify-lens {
      width: 100px;
      height: 100px;
    }


.delform{
  
  display: flex;
  overflow-x: hidden;
  justify-content: center;
  align-items: center;
  height: 80vh;
  width: 100vw;
  font-size: 32px;
  color: white;
  margin-bottom: 90px;

  
  
}
.trybg1{
  background-image: url(images/aboutusbg.jpg);

  background-size: cover;
  background-attachment: fixed;
  
}

.delform form{
  
  width: 50%;
  border: 5px solid white;
  padding: 50px;
  background-color: #3a475f;
  border-radius: 20px;
  
  
}

.delform .About{
  width: 100%;
  font-size: 18px;
  text-align: center;
  font-family: 'Quicksand', sans-serif;
  cursor: pointer;
 

}


.delform .aboutt{
  text-align: center;
  font-size: 55px;
  color: #CB2380;
  text-shadow: 0 0 0.15em white;
  font-family: 'Quicksand', sans-serif;
  margin-bottom: 20px;
  padding: 10px;
  cursor: pointer;
 
}

.logoinlogin{
  padding: 7px;

  
  -ms-transform: translate(-50%, -50%);
  transform: translate(-1%, -10%);
}

.login-box-msg{
  font-size: 20px;
  font-family: 'Quicksand', sans-serif;
  font-weight: bold;
}
.welcomeprojectk{
  text-align: center;
  font-size: 50px;
  color: #3E4044;
  text-shadow: 0 0 0.25em #3C4B66;
  font-family: 'Quicksand', sans-serif;
  font-weight: 500;
  cursor:pointer;
  margin-bottom: 20px;
  padding: 10px;
 
}
.carousel-inner{
  border-radius: 10px;
  height: auto;
  width: auto;
}

.quote{
font-family: 'Playfair Display', serif;
text-align: center;
color: #242424;
font-size: 52px;
text-shadow: 0 0 0.15em #6b6b6b;
font-weight: 600;



}

.quotename{
  text-align: center;
font-family: 'Times New Roman', Times, serif;
color: rgb(97, 97, 97);
padding-bottom: 140px;
}

.quotation{
  text-align: center;
 
}



    </style>

</head>

