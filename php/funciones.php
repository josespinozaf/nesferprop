<?php 
//funciones 
function Precio_a_Uf($valor){
 				$apiUrl = 'http://mindicador.cl/api';
				//Es necesario tener habilitada la directiva allow_url_fopen para usar file_get_contents
				if ( ini_get('allow_url_fopen') ) {
				    $json = file_get_contents($apiUrl);
				} else {
				    //De otra forma utilizamos cURL
				    $curl = curl_init($apiUrl);
				    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
				    $json = curl_exec($curl);
				    curl_close($curl);
				}
				 
				$dailyIndicators = json_decode($json);
			
                $uf =  $dailyIndicators->uf->valor;
                $uf_float= floatval($uf);
				$valor_float=floatval($valor);
                $valor_en_UF=$valor_float/$uf_float;
                echo number_format($valor_en_UF,3,',','.');
                }

 function Precio_con_puntos($valor){
 				$valor_float=floatval($valor);
 				$valor_nuevo= number_format($valor_float,0,',','.');
 				echo '$'.$valor_nuevo;
 }
?>
