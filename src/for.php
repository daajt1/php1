<?php 
   define('KILOMETER_TO_MILE', 0.62140);
   for ($kilometers = 1; $kilometers <= 5; $kilometers++) {
       printf("%d kilometers = %f miles <br>", $kilometers,
   $kilometers*constant('KILOMETER_TO_MILE'));
   }

   define('KILOMETER_TO_MILE', 0.62140);
   for ($kilometers = 1; ; $kilometers++) {
       if ($kilometers > 5) break;
       printf("%d kilometers = %f miles <br>", $kilometers,
   $kilometers*constant('KILOMETER_TO_MILE'));
   }

   ?>

   <?php
      //for each se mete al arreglo y va iterando por cada clave 
    $links = array("www.apress.com","www.php.net","www.apache.org");
    echo "Online Resources<br>";
    foreach($links as $link) {
echo "{$link}<br>";
}
?>

<?php
    $primes = array(2,3,5,7,11,13,17,19,23,29,31,37,41,43,47);
    for($count = 1; $count++; $count < 1000) {
        $randomNumber = rand(1,50);
        if (in_array($randomNumber,$primes)) {
printf("Prime number found! %d <br />", $randomNumber);
            break;
        } else {
            printf("Non-prime number found: %d <br />", $randomNumber);
        }
    }

?>


