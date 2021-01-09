<?php 

class Customer  {} 


function processPayment(Customer $customer): bool {
    
} 
?>

<?php  
function amortizationTable($paymentNumber, $periodicPayment, $balance,
$monthlyInterest)
{
    static $table = array();
    // Calculate payment interest
    $paymentInterest = round($balance * $monthlyInterest, 2);
}

    ?>