<?php
function jumlah($jumlah)
{
	for( $a=0;$a<$jumlah;$a++){
for($i=$jumlah; $i>=$a; $i--){
	echo "&nbsp";

}
for($a1=$jumlah-2;$a1>$a;$a1--){
echo"*";
}
for($a2=$jumlah-1;$a2>$a;$a2--){
echo"*";
}
echo"<br>";
}
}

echo jumlah(5);

?>
















<!-- <?php
/*
created by kang ono
https://onophp.blogspot.com/
*/
$jumlah=5;
for($a=1; $a<=$jumlah; $a++){
    for($b=1; $b<=$a; $b++){
        echo '&nbsp';
    }
    for($c=$jumlah; $c>=$a; $c-=1){
        echo '*';
    }
    echo "<br/>";
} 