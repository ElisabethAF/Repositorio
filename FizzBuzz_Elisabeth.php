<?php
/**
 * @author Elisabeth Alvarez Fdez
 */

//Declarations
const LASTNUMBER = 100;

//Call function FizzBuzzs
FizzBuzz();

//Methods
//function that checks if it is multiplo of three
function MultipleOfThree($number) {
	if($number%3===0) return true;
	else return false;
}
	
//function that checks if it is multiplo of five
function MultipleOfFive($number) {
	if($number%5===0) return true;
	else return false;
}
	
//function that shows FizzBuzz
function FizzBuzz() {
	for($i=1;$i<=LASTNUMBER;$i++) {

           if(MultipleOfThree($i) && !MultipleOfFive($i)) {
                print "<p>Fizz</p>";
            }
            else if(MultipleOfFive($i) && !MultipleOfThree($i)){
                print "<p>Buzz</p>";
            }
            else if(MultipleOfThree($i) && MultipleOfFive($i)){
                print "<p>FizzBuzz</p>";
            }
            else {
                print "<p>$i</p>";
            }
    }
}
	
?>