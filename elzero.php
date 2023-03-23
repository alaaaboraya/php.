

<!-- vid4 -->
<?php
echo "we love cis";
echo '<br>';
print " we love cis ";
echo '<br>';
?>
<?='we love cis';?>

echo '<br>';
<!-- vid 5 -->
<?php
/*
echo "comments we already did it";
*/
?>

echo '<br>';
<!-- vid 6 -->
<?php
echo gettype(true);
echo gettype(false);
echo gettype(200);
echo gettype("Software");
?>

echo '<br>';
 <!-- vid 7 -->
<?php
 echo 2+"3";
 echo gettype(1+"3");
?>

echo '<br>';
<!-- vid 8 -->
<?php
echo gettype(13+(int)3.5);
?>

echo '<br>';
<!-- vid 9 -->
<?php
var_dump((bool)"100");
?>

echo '<br>';
<!-- vid 10 -->
<?php
echo 'hello\'haha\'';
?>

echo '<br>';
<!-- vid 11 -->
<?php
$name='rose';
echo <<<"here"
hello roo
special characters $$$ \\\\
hello $name
here;

echo <<<"now"
hello roo
special characters $$$ \\\\
hello $name
now;
?>

echo '<br>';
<!-- vid 12 -->
<?php
echo '<pre>';
print_r([
1=>"A",
2=>"B",
3=>"c"
]);
?>

echo '<br>';
<!-- vid 13 -->
<?php
$username ="alaa";
echo $username;
?>

echo '<br>';
<!-- vid 14 No new -->

echo '<br>';
<!-- vid 15  -->
<?php
$a="alaa";
$$a="aboraya";
echo "i am ${$a}";
?>

echo '<br>';
<!-- vid 16 -->
<?php
$a="alaa";
$c="aboraya";
$b=$a;
$c=&$a;
echo $b;
echo '<br>';
echo $c;
?>

echo '<br>';
<!-- vid 17 -->
<form action="" method="post">
<input type="text" name="username">
<input type ="submit" value="send">
</form>

echo '<br>';
<!-- vid 18 -->
<?php
/*
CONSTANTS 
define () fun - uppercase ; value can string , int , bool ; case insensitive 
*/
?>

echo '<br>';
<!-- vid 19 magic CONSTANTS--> 

echo '<br>';
<!-- vid 20 no neeew-->

echo '<br>';
<!-- vid 21 noooo -->

echo '<br>';
<!-- vid 22 and 23-->
<?php
var_dump(100==100);
echo '<br>';
var_dump(3>1);
echo '<br>';
var_dump(3<=>1);
?>

echo '<br>';
<!-- vid 24 -->
<?php
$a=1;
echo $a++;
?>

echo '<br>';
<!-- vid 25 -->
<?php
var_dump(100>1 and 0 < 60 or 6>=7 xor 7>3);
?>

