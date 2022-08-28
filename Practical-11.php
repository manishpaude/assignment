<!---Practical:11 - Demonstrating String and Implementing Build-in String Functions(String Manipulation) in PHP--->
<?php  
//String in PHP 
echo"<br><br>";
echo"Single Quoted String in PHP";
echo"<br>";
$str='Hello!!!This is a string with a single line within a single quoted string<br>'; 
echo $str; 
$str1='Hello!!!
This is a string with with multiple line  
text within single quoted string';  
$str2='Using double "quote" directly inside single quoted string';  
$str3='Using escape sequences \n in single quoted string';  
echo"$str1 <br/> $str2 <br/> $str3"; 
echo"<br><br>"; 	
echo"Double Quoted String in PHP";
echo"<br>";
$str4="Hello!!! This is a with single line double quoted string";  
echo $str4; 
echo"<br>";
$str5="Hello!!!  
This is multiple line  
text within double quoted string";  
$str6="Using double \"quote\" with backslash inside double quoted string";  
$str7="Using escape sequences \n in double quoted string";  
echo "$str5 <br/> $str6 <br/> $str7"; 
echo"<br><br>";	    
?>

<?php  
//String Manipulationin PHP 
echo"String Manipulation in PHP:";
echo"<br><br>";
echo"Lowercase string in PHP";
echo"<br>";
$str="My name is Poudel";  
$str1=strtolower($str);
echo $str1;

echo"<br><br>"; 
echo"Uppercase string in PHP";
echo"<br>"; 
$str2="my name is poudel";  
$str3=strtoupper($str2); 
echo $str3;  

echo"<br><br>"; 
echo"First character into uppercase string in PHP";
echo"<br>";    
$str4="my name is Poudel";  
$str5=ucfirst($str4); 
echo $str5;
 
echo"<br><br>"; 
echo"First character into lowercase string in PHP";
echo"<br>";  
$str6="MY name IS Poudel";  
$str7=lcfirst($str6);  
echo $str7;  
 

echo"<br><br>"; 
echo"First character of each word into uppercase string in PHP";
echo"<br>";  
$str8="my name is Manish Poudel";  
$str9=ucwords($str8);  
echo $str9; 

echo"<br><br>"; 
echo"Reverse string in PHP";
echo"<br>"; 
$str10="my name is Manish Poudel";  
$str11=strrev($str10);  
echo $str11;  
 
echo"<br><br>"; 
echo"String Length in PHP";
echo"<br>"; 
$str12="my name is Manish Poudel";  
$str13=strlen($str12);  
echo $str13;  

?>  

