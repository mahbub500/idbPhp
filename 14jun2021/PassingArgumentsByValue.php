<h4>Passing Arguments by Value</h4>
<?php 

function calcSalesTax($price, $tax)
{
$total = $price + ($price * $tax);
echo "Total cost: $total";

}

$priceTag= 20;
$taxTag= 5;
echo calcSalesTax($priceTag,$taxTag);

 ?>
 <h4>Passing Arguments by Reference</h4>

 <?php
$cost = 100;
$tax = .05;
function calculateCost(&$cost, $tax)
{
// Modify the $cost variable
$cost = $cost + ($cost * $tax);
// Perform some random change to the $tax variable.
$tax += 4;
}

calculateCost($cost, $tax);

printf("Tax is %.2f%% ", $tax*100);
printf("Cost is: $%.2f", $cost);
?>
<h4>Default Argument Values(01)</h4>
<?php 

	function calcSalesTax2($price, $tax=.05){
	$total = $price + ($price * $tax);
	// return $total;
	echo "Total cost: $total";
};

echo calcSalesTax2(100,.2);
 ?>
<h4>Default Argument Values(02)</h4>
 <?php 
ini_set("display_errors",1);
function calculate($price, $price2="", $price3="")
{
echo $price + $price2 + $price3;
}
calculate(10,20,20);
  ?>