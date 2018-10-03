<?php
function hesapla($a){
    $b= $a+($a*($a%10)*0.01) ;
    return $b;}
function dondur($sinir_sayi){
$sayilarim=[];
$i=0;
while($i<$sinir_sayi) {
$rastgele=rand(100,999); // 3 basamaklı rastgele sayı üretmesini sağlıyoruz.(100-999 arası)
	if (in_array($rastgele,$sayilarim)) // dizi de aynı sayıda tekrar tekrar olmamasını kontrol ediyoruz.
	{continue;}
	else
	{$sayilarim[]=$rastgele; //rastgele sayiyi sayilar dizinine atiyoruz.
	$i++;
	}
}
foreach ($sayilarim as $bas){ // foreach döngüsüyle üstte yazdığımız hesapla fonksiyonunu kullanmadan sıralıyoruz.
echo "Sayımız:".$bas."</br>"."Hesapla fonksiyonundan geçmiş hali".hesapla($bas)."</br>";}

}
dondur(10);
?>
