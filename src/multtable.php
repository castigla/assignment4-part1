<?php
error_reporting(E_All);
ini_set('display_errors', 1);

echo "PHP Multiplication Table";
echo "<table border=\"1\">";

        for ($i = $_GET["min-multiplicand"]; $i <= $_GET["max-multiplicand"]; $i++){

            echo'<tr>';

            for ($j = $_GET["min-multiplier"]; $j <= $_GET["max-multiplier"]; $j++)
                echo '<td>' .$j * $i.'</td>';
           echo '</tr>';

        }

        echo"</table>";

?>