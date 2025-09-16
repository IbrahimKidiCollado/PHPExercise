<?php

/* Lilly loves cooking. She wants to throw a pizza party with her friends. To make the most of her ingredients, she needs to know how much of each ingredient she requires before starting.

To solve this, Lilly has drafted a program to automate some of the planning but needs your help finishing it. Will you help Lilly throw the proportionally perfect pizza party?

Lilly is a fan of thin, crispy pizzas with a thinner crust. The dough needed for the middle is a minimum 200g, but every person it serves requires another 20g of dough.

Lilly needs a function that:

Takes the number of pizzas
The number of persons each pizza will serve
And returns the dough needed to the nearest gram.
For example, to make 4 pizzas that feed 8 people:

<?php

$pizza_pi = new PizzaPi();
$pizza_pi->calculateDoughRequirement(4, 8);
// => 1440

Lilly is meticulous when applying her sauce, but the size of her pizzas can be inconsistent. From her experience, she knows that it takes 125mL of sauce per pizza. Lilly needs a function that calculates how many cans of sauce to buy.

For example, given Lilly needs to make 8 pizzas, and each can is 250mL:

<?php

$pizza_pi = new PizzaPi();
$pizza_pi->calculateSauceRequirement(8, 250);
// => 4

Cheese comes in perfect cubes and is sold by size.

The formula Lily uses is not the formula for the area of the pizza since she does not want the cheese to cover the entire area. She decided to use the following formula to determine how many pizzas of some diameter (diameter) can be made from a cheese cube of some side-length (cheese_dimension):

Create a function that:

Takes a side-length dimension of a cheese cube
Takes the desired thickness of the cheese layer
Takes the diameter of the pizza
And uses Lilly's formula to return the number of pizzas that can be made while rounding down.
For example, given a 25x25x25cm cheese cube, 0.5cm thick cheese layer and pizzas 30cm in diameter:

<?php

$pizza_pi = new PizzaPi();
$pizza_pi->calculateCheeseCubeCoverage(25, 0.5, 30);
// => 331

Finally, Lilly wants her pizzas to divide into 8 slices each and distributed evenly among her friends.

Create a function that:

Takes a number of pizzas and number of friends
and returns the number of slices that will be left over if each person takes an equal number of slices.
For example:

<?php

$pizza_pi = new PizzaPi();
$pizza_pi->calculateLeftOverSlices(2, 4);
// => 0
$pizza_pi->calculateLeftOverSlices(4, 3);
// => 2
 */

class PizzaPi
{
	private $additional = 20;
	private $base = 200;
	private $sauce = 125;
	public function calculateDoughRequirement(int $pizzas, int $persons)
	{
		return $pizzas * (($persons * $this->additional) + $this->base);
	}

	public function calculateSauceRequirement(int $pizzas, int $cans)
	{
		return $pizzas * $this->sauce / $cans;
	}

	public function calculateCheeseCubeCoverage(int $chesseDimension, float $thickness, int $pizzaDiameter)
	{
		$result = intval(($chesseDimension ** 3) / ($thickness * M_PI * $pizzaDiameter));
		return $result;
	}

	public function calculateLeftOverSlices($pizzas, $persons)
	{
		$porcions = $pizzas * 8;
		$rest = floor($porcions / $persons);
		return $porcions - ($rest * $persons);
	}
}
