<html>
<head>
<title>My First PHP Script</title>
</head>
<body>
<?php echo "Hello, world!"; ?>
<?php $title = "<h1>output content </h1>";
      $body  = "<p>the content is the body</p>";
      echo "$title, $body";
      printf("bar inventory: %d bottles of %s wine.",100,"red");
      $cost = sprintf("$%.2f", 43.2);
      $state[0] = "Alabama";
$state[1] = "Alaska";
$state[2] = "Arizona";
class Appliance {
    private $_power;
    function setPower($status) {
       $this->_power = $status;
    }
 }
 $blender = new Appliance;
      ?>

      <php  $total  = "45 fireengines";
            $incoming = 10;
            echo $incoming + $total ?>

            <?php
    $item = 43;
    printf("The variable \$item is of type array: %d <br />", is_array($item));
    printf("The variable \$item is of type integer: %d <br />", is_integer($item));
    printf("The variable \$item is numeric: %d <br />", is_numeric($item));
?>

<?php foreach ($_SERVER as $var => $value) {
        echo "$var => $value <br />";
             } 
             
            /*
$_SERVER['HTTP_REFERER']: The URL of the page that referred the
user to the current location.
• $_SERVER['REMOTE_ADDR']: The client’s IP address.
• $_SERVER['REQUEST_URI']: The path component of the URL. For
example, if the URL is http://www.example.com/blog/apache/
index.html, the URI is /blog/apache/index.html.
• $_SERVER['HTTP_USER_AGENT']: The client’s user agent, which
typically offers information about both the operating system and the
browser.
*/ ?>
<?php 
  define('PI',3.141592);
  printf("the value of pi is %f",PI);
  $a = "de" . "los" . "ase";

  echo "The capital of Ohio is {$capitals['ohio']}.";
  echo <<<EXCERPT
<p>Rome's central train station, known as <a href = "$website">Roma
Termini</a>, was built in 1867. Because it had fallen into severe
disrepair in the late 20th century, the government knew that considerableresources were required to rehabilitate the station prior to the 50-year
<i>Giubileo</i>.</p>
EXCERPT;
   $secretnumber = 232;
   if($_POST['guess'] == $secretnumber) {
       echo "You can enter the site";
   }
  /*$file = fopen("filename.txt", 'r') OR die("File does not / exist!"); */
?>
<?php
    // Saca los valores del 1 al 5 con raiz cuadrada
    $count = 1;
    while ($count < 5) {
        printf("%d squared = %d <br>", $count, pow($count, 2));
        $count++;
    }
?>
<?php
    $count = 11;
    do {
        printf("%d squared = %d <br />", $count, pow($count, 2));
    } while ($count < 10);
?>

           <form action="subscribe.php" method="post">
   <p>
         Aqui tienes tu ebook:<br />
   <input type="text" name="email" size="20" maxlength="50" value="" />
   </p>
   <p>
         Password:<br />
   <input type="password" name="pswd" size="20" maxlength="15" value="" />
   </p>
   <p>
   <input type="submit" name="subscribe" value="subscribe!" />
   </p>
   </form>   

</body>
</html>
