<?php

/* Implementa la expectedCookTimefunción en la clase Lasagnaque no toma argumentos y devuelve cuántos minutos debe estar la lasaña en el horno. Según el libro de cocina, el tiempo de horneado esperado en minutos es de 40.


$timer = new Lasagna();
$timer->expectedCookTime()
// => 40

Se abre en un modal
Implemente la remainingCookTimefunción en la clase Lasagnaque toma los minutos reales que la lasaña ha estado en el horno como argumento y devuelve cuántos minutos todavía le queda a la lasaña en el horno, según el tiempo de horno esperado en minutos de la tarea anterior.

<?php
$timer = new Lasagna();
$timer->remainingCookTime(30)
// => 10

Se abre en un modal
Implemente la totalPreparationTimefunción en la clase Lasagnaque toma la cantidad de capas que agregó a la lasaña como argumento y devuelve cuántos minutos tardó en preparar la lasaña, asumiendo que cada capa tarda 2 minutos en prepararse.

<?php
$timer = new Lasagna();
$timer->totalPreparationTime(3)
// => 6

Se abre en un modal
Implementa la totalElapsedTimefunción en la clase Lasagnaque acepta dos argumentos: el primero es el número de capas que añadiste a la lasaña y el segundo, los minutos que lleva horneándose. La función debe devolver el total de minutos que has trabajado en la cocción de la lasaña, que es la suma del tiempo de preparación en minutos y el tiempo en minutos que la lasaña lleva horneándose.

<?php
$timer = new Lasagna();
$timer->totalElapsedTime(3, 20)
// => 26


Se abre en un modal
Implemente la alarmfunción en la clase Lasagnaque no toma ningún argumento y devuelve un mensaje que indica que la lasaña está lista para comer.

<?php
$timer = new Lasagna();
$timer->alarm()
// => "Ding!"
 */

class Lasagna
{
	public function expectedCookTime()
	{
		return 40;
	}

	public function remainingCookTime($elapsed_minutes)
	{
		return $this->expectedCooktime() - $elapsed_minutes;
	}

	public function totalPreparationTime($layers_to_prep)
	{
		return $layers_to_prep * 2;
	}

	public function totalElapsedTime($layers_to_prep, $elapsed_minutes)
	{
		return $this->totalPreparationTime($layers_to_prep) + $elapsed_minutes;
	}

	public function alarm()
	{
		return 'Ding!';
	}
}
