   <?php
$age = $_GET["age_entered"];

if ($age >= 16 && $age >= 18 && $age >= 21) {
    print "You are the required age, you can buy either specs, mugs and sausage rolls";
} else if ($age >= 16 && $age >= 18 && $age < 21) {
    print " You can only buy either specs or mugs, Not old enough to buy sausage rolls ";
} else if ($age >= 16 && $age < 18) {
    print "You have only one option, Specs. No mugs or Sausage rolls for you";
} else {
    print "You are not old enough to purchase anything. Come back when you are older";
}

?>
