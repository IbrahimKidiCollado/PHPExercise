<?php

/* En este ejercicio, implementarás la lógica de misiones para un nuevo juego de rol que un amigo está desarrollando. La protagonista es Annalyn, una chica valiente con un perro feroz y leal. Desafortunadamente, ocurre un desastre: su mejor amiga fue secuestrada mientras buscaba bayas en el bosque. Annalyn intentará encontrar y liberar a su mejor amiga, y opcionalmente, llevará a su perro en esta misión.

Tras un tiempo siguiendo el rastro de su mejor amiga, encuentra el campamento donde está prisionera. Resulta que hay dos secuestradores: un poderoso caballero y un astuto arquero.

Después de encontrar a los secuestradores, Annalyn considera cuál de las siguientes acciones puede llevar a cabo:

Ataque rápido : se puede realizar un ataque rápido si el caballero está durmiendo , ya que le lleva tiempo ponerse la armadura, por lo que será vulnerable.
Espía : El grupo puede ser espiado si al menos uno de ellos está despierto . De lo contrario, espiar es una pérdida de tiempo.
Señalar al prisionero : se le puede hacer señales al prisionero usando sonidos de pájaros si el prisionero está despierto y el arquero está durmiendo , ya que los arqueros están entrenados en señales con pájaros para que puedan interceptar el mensaje.
Liberar prisionero : Annalyn puede intentar colarse en el campamento para liberar al prisionero. Es arriesgado y solo puede tener éxito de dos maneras:
Si Annalyn lleva a su perro, puede rescatar al prisionero si el arquero duerme . El caballero le teme al perro y el arquero no tendrá tiempo de prepararse antes de que Annalyn y el prisionero escapen.
Si Annalyn no tiene a su perro, ¡ella y el prisionero deben ser muy astutos! Annalyn puede liberar al prisionero si este está despierto y el caballero y el arquero duermen , pero si el prisionero duerme, no pueden ser rescatados: el prisionero se sobresaltaría con la repentina aparición de Annalyn y despertaría al caballero y al arquero.
 */
class AnnalynsInfiltration
{
	public function canFastAttack($is_knight_awake)
	{
		if ($is_knight_awake) {
			return false;
		}
		return true;
	}

	public function canSpy(
		$is_knight_awake,
		$is_archer_awake,
		$is_prisoner_awake
	) {
		if ($is_knight_awake || $is_archer_awake || $is_prisoner_awake)
			return true;
		return false;
	}

	public function canSignal(
		$is_archer_awake,
		$is_prisoner_awake
	) {
		if ($is_prisoner_awake) {
			if (!$is_archer_awake) {
				return true;
			}
			return false;
		}
		return false;
	}

	public function canLiberate(
		$is_knight_awake,
		$is_archer_awake,
		$is_prisoner_awake,
		$is_dog_present
	) {
		if ($is_dog_present && !$is_archer_awake)
			return true;
		if (!$is_dog_present && $is_prisoner_awake && !$is_archer_awake && !$is_knight_awake)
			return true;
		return false;
	}
}
