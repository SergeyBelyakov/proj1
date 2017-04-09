<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 08.04.17
 * Time: 21:35
 */

$step = 16;

echo "Hello World!!!";
echo "<br>";
echo "Play on Guitar to the MTV!";
$fact=0;
for ($i=1; $i<=$step; $i++)
{
    $fact = 1;
    for ($j=1; $j<=$i; $j++)
    {
        $fact = $fact*$j;

    }
    echo "<br>";
    echo $fact;
}
   echo "<br>";
   echo '<a href="about.html"> ССылка </a>';

?>