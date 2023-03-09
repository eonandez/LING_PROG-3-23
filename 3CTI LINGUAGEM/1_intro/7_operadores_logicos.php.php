<?php
       $idade = 23;
	  $cnh = true;
	  $infra = 1;
	  $quitacao = true;

	  /*
	  && e and VV
	   ||ou or VF
	  */
	
	  if($idade > 18 && $cnh == true) {
		 echo 'pode dirigir!';
	  } else {
		 echo 'Não pode dirigir, broxa!';
	  }

	  if(($idade >= 23 && $infra == false)
	 || ($idade >= 23 && $quitacao == true))  {
		echo " <hr>Pode fazer a CNH D";
	  } else {
			echo "<hr> vc nao pode fazer a CNH D";
		}
	  
	  /*
	  EXERCICIO
	  O MOTORISTA PODE TER INFRAÇÕES PORÉM CASO ESTEJA QUITADO, 
	  ELE PODERÁ REALIZAR A CNH D
	
	  */ 
		
		?>
			 