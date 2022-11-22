<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>


<body class="hold-transition skin-blue layout-top-nav">


	<?php include 'includes/navbar.php'; ?>
   
        
        
    <div class="content-wrapper">
    
        
		<p class = "steps">Steps on how to return/refund using PayPal</p>
        <div class ="workcontainer">
        <a href ="https://www.paypal.com/activities/" target ="_blank"> 
        <button class ="btn-1">👉 Proceed to PayPal 👈</button> </a>
</div>
            <div class = "returnrefund">

          <img class = "stepimages" src="images/step1.png" alt="">
            <div class = "refunddescript">
                <p> <b>Step #1</b>
                    <br>You will be directed to the Transaction Activity tab in PayPal website.<br>
                        then click the "Project K" transaction link.
                </p>
            </div>
            </div>


            <div class = "returnrefund">
               
            <img class = "stepimages" src="images/step33.png" width="480" height="580" alt="">
            <div class = "refunddescript">
                <p> <b>Step #2</b>
                    <br>After clicking the transaction link, You will be redirected to <br>Transaction 
                        details. Click the "Resolution Center" down below.
                </p>
            </div>
            </div>

            <div class = "returnrefund">
               
            <img class = "stepimages" src="images/step44.png" width="460" height="580" alt="">
            <div class = "refunddescript">
                <p> <b>Step #3</b>
                    <br>After clicking the "Resolution Center", You will see this tab. <br>
                        Choose what issues with your purchase.
                </p>
            </div>
            </div>

            <div class = "returnrefund">
            <div class = "refunddescript">
                <p> <b>Step #4</b>
                    <br>After clicking the chosen issue, You will see this Report a problem tab. <br>
                        You will select the items you want to report. Input the item name, type, <br>
                        category and quantity. then click continue to proceed.
                </p>
            </div>

</div>
<div class = "returnrefund">
            <img class = "stepimages" src="images/report1.png" width="460" height="580" alt="">
            <img class = "stepimages" src="images/report2.png" width="460" height="580" alt="">
            
            </div>



                <div class = "returnrefund">
               
               <img class = "stepimages" src="images/report3.png" width="460" height="580" alt="">
               <div class = "refunddescript">
                   <p> <b>Step #5</b>
                       <br>After clicking the continue, You will see this tab. <br>
                           Tell us a bit more about the problem by choosing an <br>
                           issue type per product. then click continue to proceed.
                   </p>
               </div>
               </div>
   
        
               <div class = "returnrefund">
            <div class = "refunddescript">
                <p> <b>Step #6</b>
                    <br>After clicking the continue, You will see this Provide other details tab. <br>
                        You will describe the issue in detail in the comment section. <br>
                        Input the date when was the item delivered.<br>
                        Add the link of the product and the Expected refund amount. <br>
                        Click Yes if you would like to return the item to the seller, Otherwise click No.<br>
                        Click continue to proceed.
                </p>
            </div>

</div>
            <div class = "returnrefund">
            <img class = "stepimages" src="images/report4.png" width="430" height="580" alt="">
            <img class = "stepimages" src="images/report5.png" width="430" height="580" alt="">
            <img class = "stepimages" src="images/report6.png" width="430" height="580" alt="">
            
            </div>
    
                
            <div class = "returnrefund">
               
               <img class = "stepimages" src="images/report7.png" width="460" height="580" alt="">
               <div class = "refunddescript">
                   <p> <b>Step #7</b>
                       <br>After clicking the continue, You will see this tab. <br>
                           Click Yes if you contacted the seller before, Otherwise click No. <br>
                           Click continue to proceed.
                   </p>
               </div>
               </div>
   
                    
            <div class = "returnrefund">
               
               <img class = "stepimages" src="images/report8.png" width="460" height="580" alt="">
               <div class = "refunddescript">
                   <p> <b>Step #8 </b>
                       <br>After clicking the continue, You will see this tab. <br>
                         You would add documents such as photo of the product <br>
                        to support your case. Add any other details below. <br>
                        Then submit if done. Thank you.
                   </p>
               </div>
               </div>
               <div class ="workcontainer">
        <a href ="https://www.paypal.com/activities/" target ="_blank"> 
        <button class ="btn-1">👉 Proceed to PayPal 👈</button> </a>
</div>
</div>

    <?php include 'includes/scripts.php'; ?>
    <style type="text/css">
    .steps{
    width: 100%;
  font-size: 48px;
  text-align: center;
  font-family: 'Quicksand', sans-serif;
  cursor: pointer;
  font-weight: bold;
  padding-top: 50px;
 
      
    }
.returnrefund{
  display: flex;
  width: 100%;
  padding: 20px;
  justify-content: center;
  margin: 80px auto;
  flex-direction: row;
  margin-left: -80px;
 


}
.refunddescript{
    font-family: 'Quicksand', sans-serif;
    font-size: 28px;
    padding-left: 20px;
}

.stepimages{
    border: 4px solid #3C4B66;
}

.btn-1{
  width: 280px;
  height: 40px;
  border: none;
  color:rgb(46, 46, 46);
  border-radius: 7px;
  font-family:'Poppins', sans-serif;
  transition: ease-out 0.3s;
  font-size: 16px;
  outline: none;
  z-index: 1;
  border: none;
  
  position: relative;
  place-items: center;
  text-align: center;
  
 
  
}

.btn-1:hover{
 
  cursor: pointer;
  color: rgb(0, 0, 0);
  color:white;

}

.btn-1:before{
  transition: 0.5s all ease;
  position: absolute;
  top: 0;
  left: 50%;
  right: 50%;
  bottom: 0;
  opacity: 0;
  content: "";
  background-color: #3C4B66;
  border-radius: 7px;
  color:white;
}

.btn-1:hover:before{
  transition: 0.5s all ease;
  left: 0;
  right: 0;
  opacity: 1;
  z-index: -1;
  color:white;
}



.workcontainer{
  display: flex;
  flex-direction: row;
  justify-content: space-evenly;
  align-items: center;
  text-align: center;
  min-height: 3vh;
 


}
 
    </style>
    </body>



