<!DOCTYPE html>
<html lang="en" dir="ltr">

 
<head>

         <title>Smart Methods</title>
		 <meta charset="UTF-8">
		 <meta name="viewport"  content="width=device-width,initial-scale=1.0">
		 <meta name="Generatior" content="EditPlus">
		<link rel="stylesheet " href="style.css">
          
</head >

<body > 
	
<div class="title">
		<h1> Robot Control System</h1>
		</div>
		<div class="main">
		<form action="interface.php" method="POST">
		<div class="Arm">
		<button name="Arm" > Control Arm Page</button>
		</div>
		
		<div class="base">
		<button name="base"> Cntrol Base Page</button>
		</div>
		</form>
	
      
		
             
         </div>
		 </center>
	  


 



    
<style> 
   body{ 
		background:black;
		background-size:cover;
		background-image:url("computer.jpg");

	
		background-repeat: no-repeat;
		background-size: 100% 100%;
		background-attachment: fixed;
		background-color:#B0E0E6;
		
		
		display: flex;
		flex-direction:column;
		justify-content: space-around;
		align-items:center;
		font-family:sans-serif;
		
		
		
		
		position: fixed;
		top: 50%;
		width: 100%;
		text-align: center;
		font-size: 10px;


   }
   .title{
	   	position: fixed;
		top: 2%;
		width: 30%;
		high:10%;
		border: 5px solid #000080;
		padding: 20px;
		margin: 5px;
		background: rgba(255,255,255,0.5);
	    font-family: "Lucida Console", "Courier New", monospace;
		color:#000088;
		right:33%;
		
	   
   }
   .Arm{
	 position:fixed;
	 border-radius: 12px;
	 left:30%;
	 top:55%;
	 padding: 14px 33px;
	 border-color: #00008B;
	 color:#blue;
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
	}

   .Arm:hover {
      background-color: #000080; 
      color: white;
   }
     .base{
	 position:fixed;
	 border-radius: 12px;
	 left:60%;
	 top:55%;
	 padding: 14px 33px;
	 border-color: #00008B;
	 color:#000088;
	 font-size: 10px;
	 box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
	}

   .base:hover {
      background-color: #000080; 
      color: white;
   }
</style>
  
<?php
if(isset($_POST['Arm'])){
	header("Location:arm.php");
}
if(isset($_POST['base'])){
	header("Location:base.php");
}
?>
</body>
 </html>