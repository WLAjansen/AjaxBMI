<?php
$gewicht = $_GET["gewicht"];
$lengte = $_GET["lengte_cm"];
BMIcalc($gewicht,$lengte);

function BMIcalc($gewicht,$lengte){

    //echo $gewicht . " " . $lengte;
		$lengte = $lengte /100; //omzetten naar meter
		//BMI = gewicht (kg) / ( lengte (m) )²
		$BMI = $gewicht  / ($lengte * $lengte) ;
		$BMI = round($BMI, +1);
		echo "<br>uw bmi is: " . $BMI;
		if($BMI < 18.5){
		    echo "<br>Ondergewicht"; 
		}
		elseif (($BMI > 18.5 ) && ($BMI < 25)){
			echo "<br>Normaal/Gezond";
		}
		elseif (($BMI > 25 ) && ($BMI < 27)){
			echo "<br>licht overgewicht"; 
		}
		elseif (($BMI > 27 ) && ($BMI < 30)){
			echo "<br>Matig overgewicht"; 
		}
		elseif (($BMI > 30) && ($BMI < 40)){
			echo "<br>Obesitas"; 
		}
		elseif ($BMI > 40) {
			echo "<br>morbide obesitas"; 
		}
		else {
			echo "er is een foute input";

}

}

?>