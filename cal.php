<!DOCTYPE html>
<html lang="en">
<head>
    
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="/image/favicon.png" type="image/png">
        <title> Simple Calculator</title>
        <meta name="description" content="Third Generation Website<">
        <meta name="keywords" content="HTML, CSS, JavaScript,JQUERY,PHP">
        <meta name="author" content="Rahat Ahmed">
      
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php include 'style.php'?>
<style type="text/css">
body{scroll-behavior: smooth;background:#e20c55;
}
	
.hasan{top:50%;left:50%;transform:translate(-50%,-50%);position:absolute;background:#e20c55;color:#123;font-weight:600;font-family:cursive;font-size:33px;padding:50px;}
.hasan::placeholder{font-size:34px;}
.inputfield{
    font-size: 23px;font-weight:500;font-family:cursive;
}
input[type="number"] {
    font-size: 23px;
    color: #fff !important;
}
.hasan input {
    outline: none;
    border: none;color: #fff;
    font-size: 20px;
    font-weight: 500;
    font-family: cursive;
    padding: 12px;
    border-bottom: 4px solid #0818bb;margin:30px 0px;
    -webkit-border-radius: 48px;
border-radius: 48px;
background: #361a24;
-webkit-box-shadow: 5px 5px 58px #5a0522, -5px -5px 58px #ff1388;
box-shadow: 5px 5px 58px #5a0522, -5px -5px 58px #ff1388;
}
select {
    padding: 12px;
    background: #123;
    color: #fff;
    font-size:20px;
    font-weight: 700;
    -webkit-border-radius: 50px;
   -webkit-border-radius: 48px;
border-radius: 48px;
background: #e20c55;
-webkit-box-shadow: 5px 5px 58px #5a0522, -5px -5px 58px #ff1388;
box-shadow: 5px 5px 58px #5a0522, -5px -5px 58px #ff1388;
}
</style>
</head>
<body>


<div class="hasan">
	<form action="" method="POST" >
		<input type="number" name="firstNumber"  class="inputfield" placeholder="First Number"> 
		<input type="number" name="lastNumber" class="inputfield"   placeholder="Last Number"> <br>
		<div class="selectionAction">
			<select name="operation">
				<option value="Add">Addition</option>
				<option value="Sub">Subtraction</option>
				<option value="Multi">Multiplication</option>
				<option value="div">Division</option>
			</select>
		</div>
        <input type="submit" name="submit"  value="submit" >

	</form>
   
   <?php 
    
   if (isset($_POST['submit'])) {
   	  $firstNumber = $_POST['firstNumber'];
   	  $lastNumber  = $_POST['lastNumber'];
   	  

   	  $operation = $_POST['operation'];

   	  switch ($operation) {
   	  	case 'Add': $sum = $firstNumber + $lastNumber;
   	  		  echo "The addition of two numbers is $sum";
            
   	  		break;
   	  	
   	  case 'Sub': $sub = $firstNumber - $lastNumber;
   	  		  echo "The Substraction of two numbers is $sub";
   	  		break;

   	  	 case 'Multi': $multi = $firstNumber * $lastNumber;
   	  		  echo "The Multiplication of two numbers is {$multi}";
   	  		break;	
   	  	 case 'div': $div = $firstNumber / $lastNumber;
   	  		  echo "The division of two numbers is {$div}";
   	  		break;	
   	  		default:echo "Sorry it is not exist";
   	  }
   }

   ?>

</div>

</body>
</html>