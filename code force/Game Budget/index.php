<?php  
	function isEnough($budget, $amounts=[]){
		if( array_sum($amounts)  >= $budget){
			return true;
		}else{
			return false;
		}	
	}

	$investor = (float) readline('Enter total investor: ');
	$budget = (float) readline('Enter total budget: ');

	if( is_numeric($investor) && $investor > 0 && is_numeric($budget) && $budget > 0 ){
		$amounts = [];
		for ($i=0; $i < $investor; $i++) { 
			$amt = (float) readline('Enter total amopunt: '.($i+1).' = ');
			if(is_numeric($amt)){
				$amounts[] = $amt;
			}
			
		}

		if( !empty( $amounts ) ){
			return isEnough($budget, $amounts);
		}
		else{
			return false;
		}		
	}
	else{
		return false;
	}
	
?>