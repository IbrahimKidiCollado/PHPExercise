<?php

/* 
Implement the HighSchoolSweetheart::firstLetter function. It should take a name and return its first letter. It should clean up any unnecessary whitespace from the name.

<?php

$sweetheart = new HighSchoolSweetheart();
$sweetheart->firstLetter("Jane");
# => "J"

Stuck? Reveal Hints
Opens in a modal
Implement the HighSchoolSweetheart::initial function. It should take a name and return its first letter, uppercase, followed by a dot. Make sure to reuse HighSchoolSweetheart::first_letter that you defined in the previous step.

<?php

$sweetheart = new HighSchoolSweetheart();
$sweetheart->initial("jane");
# => "J."

Stuck? Reveal Hints
Opens in a modal
Implement the HighSchoolSweetheart::initials function. It should take a full name, consisting of a first name and a last name separated by a space, and return the initials. Make sure to reuse HighSchoolSweetheart::initial that you defined in the previous step.

<?php

$sweetheart = new HighSchoolSweetheart();
$sweetheart->initials("Jane Doe");
# => "J. D."

Stuck? Reveal Hints
Opens in a modal
Implement the HighSchoolSweetheart::pair function. It should take two full names and return the initials inside an ASCII heart. Make sure to reuse HighSchoolSweetheart::initials that you defined in the previous step.
 */

class HighSchoolSweetheart
{
	public function firstLetter(string $name): string
	{
		$newName = trim($name);
		return $newName[0];
	}

	public function initial(string $name): string
	{
		return strtoupper($this->firstLetter($name) . '.');
	}

	public function initials(string $name): string
	{
		$nombres = explode(' ', $name);
		$iniciales = $nombres[0][0] . '. ' . $nombres[1][0] . '.';
		return $iniciales;
	}

	public function pair(string $sweetheart_a, string $sweetheart_b): string
	{
		$name1 = $this->initials($sweetheart_a);
		$name2 = $this->initials($sweetheart_b);
		return <<<HEART
        ******       ******
      **      **   **      **
    **         ** **         **
   **            *            **
   **                         **
   **     $name1  +  $name2     **
    **                       **
      **                   **
        **               **
          **           **
            **       **
              **   **
                ***
                 *
HEART;
	}
}