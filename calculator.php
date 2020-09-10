<?php require 'functions.php'; ?>
<!doctype html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href='https://www.hockeycomputindo.com/favicon.ico' rel='icon' type='image/x-icon'/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<title>Inventori Apps - Calculator</title>
</head>
<body>
	<div class="container">
		<?php require 'head.php';?>
		<?php require 'nav.php';?>
		<div class="row">
			<div class="col-12 col-12 p-3 p-md-5 text-center">
				<center>

				      <script> 
         //function that display value 
         function dis(val) 
         { 
             document.getElementById("result").value+=val 
         } 
           
         //function that evaluates the digit and return result 
         function solve() 
         { 
             let x = document.getElementById("result").value 
             let y = eval(x) 
             document.getElementById("result").value = y 
         } 
           
         //function that clear the display 
         function clr() 
         { 
             document.getElementById("result").value = "" 
         } 
      </script> 
      <!-- for styling -->
      <style> 
         .title{ 
         margin-bottom: 10px; 
         text-align:center; 
         width: 210px; 
         color:green; 
         border: solid black 2px; 
         } 
  
         input[type="button"] 
         { 
         background-color:cyan; 
         color: black; 
         border: solid black 2px; 
         width:100% 
         } 
  
         input[type="text"] 
         { 
         background-color:white; 
         border: solid black 2px; 
         width:100% 
         } 
      </style> 
					<h1>Calculator Digital</h1>
					<table border="1" class="table bg-dark rounded shadow">
						<tr>
							<td colspan="3">
								<input type="text" class="rounded p-3" id="result" />
							</td>
							<td>
								<input type="button" class="btn btn-danger btn-lg rounded" value="c" onclick="clr()" />
							</td>
						</tr>
						<tr>
							<td>
								<input type="button" class="btn btn-primary btn-lg rounded" value="1" onclick="dis('1')" />
							</td>
							<td>
								<input type="button" class="btn btn-primary btn-lg rounded" value="2" onclick="dis('2')" />
							</td>
							<td>
								<input type="button" class="btn btn-primary btn-lg rounded" value="3" onclick="dis('3')" />
							</td>
							<td>
								<input type="button" value="/" class="btn btn-primary btn-lg rounded" onclick="dis('/')" />
							</td>
						</tr>
						<tr>
							<td>
								<input type="button" class="btn btn-primary btn-lg rounded" value="4" onclick="dis('4')" />
							</td>
							<td>
								<input type="button" class="btn btn-primary btn-lg rounded" value="5" onclick="dis('5')" />
							</td>
							<td>
								<input type="button" class="btn btn-primary btn-lg rounded" value="6" onclick="dis('6')" />
							</td>
							<td>
								<input type="button" class="btn btn-primary btn-lg rounded" value="-" onclick="dis('-')" />
							</td>
						</tr>
						<tr>
							<td>
								<input type="button" class="btn btn-primary btn-lg rounded" value="7" onclick="dis('7')" />
							</td>
							<td>
								<input type="button" class="btn btn-primary btn-lg rounded" value="8" onclick="dis('8')" />
							</td>
							<td>
								<input type="button" class="btn btn-primary btn-lg rounded" value="9" onclick="dis('9')" />
							</td>
							<td>
								<input type="button" class="btn btn-primary btn-lg rounded" value="+" onclick="dis('+')" />
							</td>
						</tr>
						<tr>
							<td>
								<input type="button" class="btn btn-primary btn-lg rounded" value="." onclick="dis('.')" />
							</td>
							<td>
								<input type="button" class="btn btn-primary btn-lg rounded" value="0" onclick="dis('0')" />
							</td>
							<td>
								<input type="button" class="btn btn-primary btn-lg rounded" value="=" onclick="solve()" />
							</td>
							<td>
								<input type="button" class="btn btn-primary btn-lg rounded" value="x" onclick="dis('*')" />
							</td>
						</tr>
					</table>
				</center>
				<br>
			</div>
			<div class="col-12 col-md-12 text-center">
				<p class="text-center"><small>present by <a href="https://mesinkasironline.web.app" class="text-dark"> https://mesinkasironline.web.app</a></small>
				</p>
			</div>
		</div>
	</div>
</body>

</html>
