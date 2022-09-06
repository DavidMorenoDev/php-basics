<html>
<body>

<?php 

for ($i = 1; $i <= 10; $i++) {
   echo $i;
   echo "<br>";
}

$array = array(1, 2, 3, 4);
foreach ($array as &$valor) {
    $valor = $valor * 2;
    echo $valor;
    echo "<br>";
}

$i = 1;
while ($i <= 10) {
    echo "<br>".$i++; 
    
}
echo "<br>";
$i = 0;
do {
    echo $i++;
} while ($i < 10);

?>



</body>

</html>