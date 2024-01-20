<?php
	if(ISSET($_GET['btn_submit'])){
		$digit = $_GET['txt_digit'];
		$currency = $_GET['currency'];
		if($digit != ""){
			switch($currency){
				case "Dollar":
					$output = $digit * 51.52;
					echo"<center><label class='text-success' style='font-size:25px;'>$".(number_format($output))."</label></center>";
				break;
 
				case "Euro":
					$output = $digit * 63.62;
					echo"<center><label class='text-success' style='font-size:25px;'>&#8364;".(number_format($output))."</label></center>";
				break;
 
				case "Pound":
					$output = $digit * 72.24;
					echo"<center><label class='text-success' style='font-size:25px;'>&#163;".(number_format($output))."</label></center>";
				break;
 
				case "Chinese Yuan":
					$output = $digit * 8.12;
					echo"<center><label class='text-success' style='font-size:25px;'>&#165;".(number_format($output))."</label></center>";
				break;
 
				case "Nepalese Rupee":
					$output = $digit * 1.47;
					echo"<center><label class='text-success' style='font-size:25px;'>&#165;".(number_format($output))."</label></center>";
				break;
			}
		}
	}
?>