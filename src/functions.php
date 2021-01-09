<?php   

function displayDate()
{
    return date('l, F n, Y');
}

   function retreiveUserProfile() {
       $user[] = "Daniel";
       $user[] =  "daniel@example.com";
       $user[] = "English";

       return $user;
   } 

   list($name,$email,$language) = retreiveUserProfile();

   echo "Name {$name}, email {$email}  , language {$language}" ;
    
    function calculatePrice($price,$tax) {
        return $price + ($price * $tax);
    } 

    calculatePrice(15,00,0.16);
    ?>

    <?php 
    function sumaDeEnteros(int ...$enteros)
    {
        return array_sum($enteros);
    }
    
    var_dump(sumaDeEnteros(2, '3', 4.1));
    // 2 +3 + 4  = salida 9 int
    

    function sumarArrays(array ...$arrays): array
{
    return array_map(function(array $array): int {
        return array_sum($array);
    }, $arrays);
}

print_r(sumarArrays([1,2,3], [4,5,6], [7,8,9]));
    
    // suma de arrays array 1 : 6   array 2 : 15
    // array 3 : 24
    ?>