<html>
	<head>
		<title>
			Tip Calculator
		</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		
		<style>
			#result{
				display:table;
				border:2px inset blue;
				font-size: 15px;
				font-family: Verdana;
				height:auto;
				
				line-height: 55px;
				border-radius:5px;
			}
		</style>
	</head>
	<body>
		<h2 class="col-sm-offset-3">Tip Calculator</h2>
		<form class="form-horizontal" method="POST" action="" >
			<div class="form-group">
				<label class="control-label col-sm-3 text-center" for="bill_subtotal">Bill Subtotal: $</label>
				 <div class="col-sm-3">
				 	<input type="text" class="form-control" name="bill_subtotal" value=<?php if(isset($_POST['bill_subtotal'])) echo $_POST['bill_subtotal']; else echo 100;?>>
				 </div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Tip Percentage:</label>
				<?php
					for($i=1;$i<=3;$i++){
						$val=$i*5;
				?>
				<label class='radio-inline'> <input type='radio' name='radio' value=<?php echo $i;?>> <?php echo $val;?>% </label>
				<?php } ?>
				
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3 text-center" for="split">Split among: </label>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="split" value=<?php if(isset($_POST['split'])) echo $_POST['split']; else echo 1;?>>
				</div>
				<label class="control-label">person(s)</label>
			</div>
			<div class="col-sm-offset-4 col-sm-4">
      			<button type="submit" class="btn btn-success" name="submit">Submit</button>
    		</div> 
		</form>
		<br><br>
		
			<?php 	
				$bill_subtotal=0;
				$radio;
				$str=""	;
				$res="";
				$person=0;
				$person_err="";
				$tip_per_person="";
				$bill_per_person="";
				$flag=0;
				if(isset($_POST['submit'])){
					if(isset($_POST['bill_subtotal'])){
						$bill_subtotal=(double)$_POST['bill_subtotal'];
					}
					if(isset($_POST['radio'])){
						$radio=$_POST['radio'];
					}
				
					if(!(gettype($bill_subtotal=="integer"))||!(gettype($bill_subtotal)=="double")){
						$str="Bill subtotal should be integer or decimal";
						$flag=1;
					}
					
					if(!isset($_POST['radio'])){
						$str="Tip Percentage not selected";
						$res="";
					}
					if(isset($_POST['split']))
						$person=(integer)$_POST['split'];
					
					if($bill_subtotal<=0.0 &&$flag==0)
						$str="Bill subtotal should be greater than 0";
					
					else if($person<=0){
						$person_err="OOPS.. Cannot split with 0 or negative number of people";
					}
					
					else{
						
						$ans;$tip;$person_tip;$peron_bill;
						switch($radio){
							case 1: $tip=(float)0.05*(float)$bill_subtotal;
									$ans=(float)$bill_subtotal+$tip;
									break;
							case 2: $tip=(float)0.1*(float)$bill_subtotal;
									$ans=(float)$bill_subtotal+$tip;
									break;
							case 3: $tip=(float)0.15*(float)$bill_subtotal;
									$ans=(float)$bill_subtotal+$tip;
									break; 
						}
						$person_tip=(float)$tip/$person;
						$person_bill=(float)$ans/$person;
						$str="Total Bill Tip: $".$tip;
						$res="Total Bill: $".$ans;
						$tip_per_person="Tip per person: $".$person_tip."<br>";
						$bill_per_person="Bill per person: $".$person_bill."<br>";
						
					}
					echo "<div class='col-sm-offset-3 col-sm-3 text-center' id='result'>";
						
						echo $str."<br>";
						echo $res."<br>";
						echo $tip_per_person;
						echo $bill_per_person;
						echo $person_err."<br>";
						echo "</div>";
				}
						
				
				
			?>
		 
</html>
