<?php
###FOR
for($i=1;$i<=10;$i++){
    echo "Mahasiswa ke-$i <br>";
}

echo "<hr>";

###while
$a = 1;
while ($a <= 10) {
    echo "Mahasiswa ke-$a <br>";
    $a++;
}

echo "<hr>";
###do while
$b = 1;
do{
    echo "Mahasiswa ke $b <br>";
    $b++;
}while($b <=10);

echo "<hr>";
###FOREACH
$is63 = array("mahfud","kiki","fran");
// echo $is63[2];
foreach($is63 as $data){
    echo "$data <br>";
}
?>