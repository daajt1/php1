<?php

$carBrands = [12 => "Rolls Royce", "Bentley", "Porche"];
$germanCars = [20 => "Audi", 22 => "Porche", 25 => "VW"];

$languages = array("English", "Gaelic", "Spanish");

//separar valores de cada pieza de informacion

list($name, $occupation, $color) = explode("|", $user);


// Se utilizan los operadores ternarios  para validar
// las variables de arriba
$states = array("Florida");
$state = "Ohio";
printf("\$states is an array: %s <br />", (is_array($states) ? "TRUE" : "FALSE"));
printf("\$state is an array: %s <br />", (is_array($state) ? "TRUE" : "FALSE"));

// iteracion a travez del arreglo con un foreach
$states = array("Ohio", "Florida", "Texas");
foreach ($states as $state) {
    echo "{$state}<br />";
}

$customers = array();

$customers[]= array("Jason Gilmore", "jason@example.com", "614-999-9999");
$customers[]= array("Jesse James", "jesse@example.net", "818-999-9999");
$customers[]= array("Donald Duck", "donald@example.org", "212-999-9999");
foreach ($customers AS $customer) {
  vprintf("<p>Name: %s<br>E-mail: %s<br>Phone: %s</p>", $customer);
}

// saca del arreglo el primer valor
$states = array("Ohio", "New York", "California", "Texas");
$state = array_shift($states);
// $states = array("New York", "California", "Texas")
// $state = "Ohio"

// saca del arreglo el ultimo valor
$states = array("Ohio", "New York", "California", "Texas");
$state = array_pop($states);
// $states = array("Ohio", "New York", "California"
// $state = "Texas"


$state = "Ohio";
$states = ["California", "Hawaii", "Ohio", "New York"];
if(in_array($state, $states)) echo "Not to worry, $state is smoke-free!";


for ($i = 0 ; $i <vector.length(); ++$i) {
  dosomething(vector[$i]);
} 

//saca las capitales usando un ciclo while
$capitals = array("Ohio" => "Columbus", "Iowa" => "Des Moines");
echo "<p>Can you name the capitals of these states?</p>";
while($key = key($capitals)) {
    printf("%s <br />", $key);
    next($capitals);
}

// moviendo el puntero array con la funcion next
$fruits = array("apple", "orange", "banana");
$fruit = next($fruits); // returns "orange"
$fruit = next($fruits); // returns "banana"

$fruit = prev($fruits);
$fruit = reset($fruits);
$fruit = end($fruits);

$garden = array("cabbage", "peppers", "turnips", "carrots");
echo count($garden);

// frecuencia en el que aparece el valor en el array 
$states = ["Ohio", "Iowa", "Arizona", "Iowa", "Ohio"];
$stateFrequency = array_count_values($states);
print_r($stateFrequency);
// borra los duplicados en el array y deja valores unicos

$states = array("Ohio", "Iowa", "Arizona", "Iowa", "Ohio");
$uniqueStates = array_unique($states);
print_r($uniqueStates);
// cambia el orden de las llaves y el valor del arreglo
$state = array(0 => "Delaware", 1 => "Pennsylvania", 2 => "New Jersey");
$state = array_flip($state);
print_r($state);

// numeric sort
$grades = array(42, 98, 100, 100, 43, 12);
sort($grades);
print_r($grades);

$states = array("OH" => "Ohio", "CA" => "California", "MD" => "Maryland");
sort($states);
print_r($states);


$states = array("Ohio", "Florida", "Massachusetts", "Montana");
rsort($states);
print_r($states);



// sort by key integers
 $a = ksort();

//Array merges
$class1 = array("John" => 100, "James" => 85);
$class2 = array("Micky" => 78, "John" => 45);
$classScores = array_merge_recursive($class1, $class2);
print_r($classScores);

// combinar arrays
$abbreviations = array("AL", "AK", "AZ", "AR");
$states = array("Alabama", "Alaska", "Arizona", "Arkansas");
$stateMap = array_combine($abbreviations,$states);
print_r($stateMap);

// recorre el arreglo con el segundo argumento de -2
$states = array("Alabama", "Alaska", "Arizona", "Arkansas",
"California", "Colorado", "Connecticut");
$subset = array_slice($states, 2, -2);
print_r($subset);

// regrese solo valores relacionados en los 3 arreglos
$array1 = array("OH", "CA", "NY", "HI", "CT");
$array2 = array("OH", "CA", "HI", "NY", "IA");
$array3 = array("TX", "MD", "NE", "OH", "HI");
$intersection = array_intersect($array1, $array2, $array3);
print_r($intersection);


// imprime solo el valor que es diferente en los 3 arreglos
$array1 = array("OH", "CA", "NY", "HI", "CT");
$array2 = array("OH", "CA", "HI", "NY", "IA");
$array3 = array("TX", "MD", "NE", "OH", "HI");
$diff = array_diff($array1,$array2, $array3);

print_r($diff);
?>