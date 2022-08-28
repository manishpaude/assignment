
<!---Practical: 10 -Demonstrating Comments, Variables, Constants, Data Types, Operators, Conditional Statements and Looping Statements in PHP--->
    
<?php  
// This is C++ style single line comment  
# this is Unix Shell style single line comment
echo"<br><br>";  
echo "Comments in PHP:";  
echo"<br>";  
echo "Welcome to PHP single line comments<br>"; 
/* 
Anything placed 
within comment 
will not be displayed 
on the browser; 
*/  
echo "Welcome to PHP multi line comment<br>";  
?>

<?php  
// Varibles in PHP  
echo"<br><br>"; 
echo "Varibles in PHP:"; 
echo"<br>";  
$str="Hello string";  
$x=200;  
$y=44.6;  
echo "String is: $str <br/>";  
echo "Integer is: $x <br/>";  
echo "Float is: $y <br/>";  
?> 

<?php   
// Constants in PHP  
echo"<br><br>"; 
echo "Constants in PHP:"; 
echo"<br>";  
define("MESSAGE","Hello JavaTpoint PHP");  
echo MESSAGE;  
 ?>  

<?php  
// Scope of Varibles in PHP 
// Local Scope of Varibles in PHP   
echo"<br><br>"; 
echo "Local Scope of Varibles in PHP:"; 
echo"<br>";   
function local_var()  
{  
$num = 45;  //local variable  
echo "Local variable declared inside the function is: ". $num;  
echo"<br>";
}  
local_var();  
// Global Scope of Varibles in PHP  
echo"<br><br>"; 
echo "Global Scope of Varibles in PHP:"; 
echo"<br>";   
$name = "Shayam Sharma";        //Global Variable  
function global_var()  
{  
global $name;  
echo "Variable inside the function: ". $name;  
echo"<br>"; 
}  
global_var();  
echo "Variable outside the function: ". $name;   
// Static Scope of Varibles in PHP
echo"<br><br>";  
echo "Static  Scope of Varibles in PHP:";  
echo"<br>"; 
function static_var()  
{  
static $num1 = 3;//static variable  
$num2 = 6; //Non-static variable  
//increment in non-static variable  
$num1++;  
//increment in static variable  
$num2++;  
echo "Static: " .$num1 ."</br>";  
echo "Non-static: " .$num2 ."</br>";  
}  
//first function call  
static_var();  
//second function call  
static_var();  
?>  

<?php   
// Data Types in PHP
echo"<br><br>";  
echo "Data Types in PHP:";  
echo"<br>"; 
echo "Integer Data Type in PHP:";  
echo"<br>"; 
$dec1 = 34;  
$oct1 = 0243;  
$hexa1 = 0x45;  
echo "Decimal number: " .$dec1. "</br>"; 
echo "Octal number: " .$oct1. "</br>";  
echo "HexaDecimal number: " .$hexa1. "</br>"; 

echo"<br><br>"; 
echo "Float Data Type in PHP:";  
echo"<br>";  
$n1 = 19.34;  
$n2 = 54.472;  
$sum = $n1 + $n2;  
echo "Addition of floating numbers: " .$sum;  

echo"<br><br>"; 
echo "String Data Type in PHP:";  
echo"<br>";   
$company = "Pant Info Tech ";  
//both single and double quote statements will treat different  
echo "Hello $company";  
echo "</br>";  
echo 'Hello $company';  

echo"<br><br>"; 
echo "Array Data Type in PHP:";  
echo"<br>";   
$bikes = array ("Royal Enfield", "Yamaha", "KTM");  
var_dump($bikes);   //the var_dump() function returns the datatype and values  
echo "</br>";  
echo "Array Element1: $bikes[0] </br>";  
echo "Array Element2: $bikes[1] </br>";  
echo "Array Element3: $bikes[2] </br>";  

echo"<br><br>"; 
echo "Objecct Data Type in PHP:";  
echo"<br>";    
class bike 
{  
function model()
{  
$model_name = "Royal Enfield";  
echo "Bike Model: " .$model_name;  
}  
}  
$obj = new bike();  
$obj -> model();  

echo"<br><br>"; 
echo "Null Data Type in PHP:";  
echo"<br>";   
$nl = NULL;  
echo $nl;   //it will not give any output  
?>   

<?php   
// Operators in PHP
echo"<br>";  
$a=10;
$b=20;
echo "Arithmetic Operaotrs in PHP:";  
echo"<br>"; 
echo($a + $b);
echo"<br>"; 
echo($a - $b);
echo"<br>"; 
echo($a * $b);
echo"<br>"; 
echo($a / $b);
echo"<br>"; 
echo($a % $b);
echo"<br>"; 
echo($a ** $b);
echo"<br><br>"; 

echo "Comparision Operaotrs in PHP:";  
echo"<br>"; 
echo($a == $b);
echo"<br>"; 
echo($a != $b);
echo"<br>"; 
echo($a <> $b);
echo"<br>"; 
echo($a < $b);
echo"<br>"; 
echo($a > $b);
echo"<br>"; 
echo($a <= $b);
echo"<br>"; 
echo($a >= $b);
echo"<br><br>"; 

echo "Logical Operaotrs in PHP:";  
echo"<br>";
echo($a=10 and $b=20 );
echo"<br>";  
echo($a=10 or $b=25);
echo"<br>";
echo(! ($a==$b));
echo"<br>";

echo "Assignment Operaotrs in PHP:";  
echo"<br>";
echo($a = $b);
echo"<br>";
echo($a += $b);
echo"<br>";
echo($a -= $b);
echo"<br>";
echo($a *= $b);
echo"<br>";
echo($a *= $b);
echo"<br>";
echo($a /= $b);
echo"<br>";
echo($a %= $b);
echo"<br><br>"; 
?>

<?php   
// Conditional Statements in PHP
echo"<br><br>"; 
echo "If Statement in PHP:"; 
echo"<br>";  
$num=12;  
if($num<100)
{  
echo "$num is less than 100";    
} 

echo"<br><br>"; 
echo "If - else Statement in PHP:"; 
echo"<br>";  
if($num%5==0)
{  
echo "$num is even number";  
}
else
{  
echo "$num is odd number";    
} 

echo"<br><br>"; 
echo "If - else -if Statement in PHP:"; 
echo"<br>"; 
$marks=69;      
if ($marks<33)
{    
echo "fail";    
}    
else if ($marks>=34 && $marks<50)
{    
echo "D grade";    
}    
else if ($marks>=50 && $marks<65) 
{    
echo "C grade";   
}    
else if ($marks>=65 && $marks<80)
{    
echo "B grade";   
}    
else if ($marks>=80 && $marks<90) 
{    
echo "A grade";    
}  
else if ($marks>=90 && $marks<100) 
{    
echo "A+ grade";   
}  
else
{    
echo "Invalid input";    
}      
?>  


<?php   
// Looping Statements in PHP
echo"<br><br>"; 
echo "For Loop in PHP:"; 
echo"<br>";  
for($n=1;$n<=10;$n++)
{    
echo "$n<br/>";  
}
echo"<br>"; 
echo "For each Loop in PHP:"; 
echo"<br>"; 
$season=array("summer","winter","spring","autumn");  
foreach( $season as $arr )
{  
echo "Season is: $arr<br />";  
}    
   
echo"<br>"; 
echo "While Loop in PHP:"; 
echo"<br>"; 
$n=1;    
while($n<=10)
{    
echo "$n<br/>";    
$n++;    
}  


echo"<br>"; 
echo "Do while Loop in PHP:"; 
echo"<br>"; 
$n=1;    
do
{    
echo "$n<br/>";    
$n++;    
}
while($n<=10);   
?>  
 	