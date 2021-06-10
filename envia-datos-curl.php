<?php 


  
    header('Content-type: text/html; charset=UTF-8');

	  $url = "https://forms.zohopublic.com/nombreempresa/form/nombreformulario/formperma/Z8qir_hZtVR14yx7JwPUDybeUGultI4Cs34Lfpjuyro/htmlRecords/submit";

	  $curl = curl_init($url);
	  curl_setopt($curl, CURLOPT_URL, $url);
	  curl_setopt($curl, CURLOPT_POST, true);
	  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

	  $headers = array(
		  "Content-Type: application/x-www-form-urlencoded",
	  );
	  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

	  $data = "Name_First=".$nombre."&Name_Last=".$apellido."&Email=".$correo."&SingleLine=".$empresa."";

	  curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

	  //for debug only!
	  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
	  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

	  $resp = curl_exec($curl);
	  curl_close($curl);


?>
