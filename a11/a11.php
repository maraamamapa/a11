<?php
class jugadorDado{

private $minNumDado;
private $maxNumDado;
public $tirarDado;

/*Establecemos los setters y los getters de $minNumDado y de $maxNumDado */
public function getMaxNumDado(){
	return $this->maxNumDado;
}

public function setMaxNumDado($maxNumDado){ /* El numero obtenido no puede ser mayor a 12, de este modo, decimos que 12 tiene que ser
											   el numero maximo que se obtenga en la tirada de dados*/
	if($maxNumDado>12){
		$this->maxNumDado=12;
	}else{
		$this->maxNumDado=$maxNumDado;
	}
}

public function getMinNumDado(){
	return $this->minNumDado;
}

public function setMinNumDado($minNumDado){ /* El numero obtenido no puede ser menor a 0, por lo tanto este es el modo de establecer que
												0 es el numero minimo que se puede obtener en la tirada de dados, por lo tanto, con este
												SET y el anterior, el programa ya sabe que el numero que debe mostrar esta entre 0 y 12*/
	if($minNumDado<0){
		$this->minNumDado=0;				/* En el caso de que en uno de los setters pusieras un numero menor a 0, te mostraria un 0,
											   y si pones un numero mayor a 12, te mostraria un 12.*/
	}else{
		$this->minNumDado=$minNumDado;
	}
}
/*Funcion para que una vez se tire el dado, el numero obtenido al azar, sea entre 0-12 , para ello utilizamos en rand*/
public function tiraDado(){

	$this->tirarDado=rand(0,12);	/*Establecemos aquí el RAND, y una vez generemos esta funcion mostrará un numero de 0 a 12*/
	echo $this->tirarDado;			/*No era necesario en los setters, poner limites, ya que se pueden poner igualmente en el rand...*/
}
}

?>