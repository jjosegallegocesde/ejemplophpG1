<?php 

//Codigos en PHP para tomar decisiones lógicas

//Almacenar el nombre, el precio y la cantidad del producto
$producto1="huevos";
$producto2="chocolate";
$producto3="leche";
$producto4="arepas";
$producto5="quesito";
$producto6="café";
$producto7="aceite";
$producto8="azucar";
$producto9="sal";
$producto10="Arroz";

$precio1=4900;
$precio2=3000;
$precio3=3500;
$precio4=1500;
$precio5=3900;
$precio6=8900;
$precio7=10000;
$precio8=2000;
$precio9=1500;
$precio10=-10000;

$cantidad1=0;
$cantidad2=0;
$cantidad3=0;
$cantidad4=0;
$cantidad5=0;
$cantidad6=0;
$cantidad7=0;
$cantidad8=0;
$cantidad9=0;
$cantidad10=8;

$costoUnitario1=$precio1*$cantidad1;
$costoUnitario2=$precio2*$cantidad2;
$costoUnitario3=$precio3*$cantidad3;
$costoUnitario4=$precio4*$cantidad4;
$costoUnitario5=$precio5*$cantidad5;
$costoUnitario6=$precio6*$cantidad6;
$costoUnitario7=$precio7*$cantidad7;
$costoUnitario8=$precio8*$cantidad8;
$costoUnitario9=$precio9*$cantidad9;
$costoUnitario10=$precio10*$cantidad10;


$costoTotal=$costoUnitario1+$costoUnitario2+$costoUnitario3+$costoUnitario4+$costoUnitario5+$costoUnitario6+$costoUnitario7+$costoUnitario8+$costoUnitario9+$costoUnitario10;


echo("................");
echo("<br>");
echo("SUPERMERCADOS COVID-19");
echo("<br>");
echo("NIT 878787-1");
echo("<br>");
echo("4/06/2020");
echo("<br>");
echo("4:19 PM");
echo("<br>");
echo("................");
echo("<br>");
echo("El total de la compra es: ".$costoTotal);
echo("<br>");
echo("................");
echo("<br>");
echo("<br>");

/*if($costoTotal > 80000){
    echo("Apreciado cliente, usted no cuenta con los fondos suficientes para la compra");
    echo("<br>");
    echo("Salga ya mismo de mi establecimiento");
}else{
    echo("Apreciado cliente, Gracias por su compra");
    echo("<br>");
    echo("Lo queremos mucho, usted es nuestra razón de ser");

}*/

if($costoTotal>0 && $costoTotal <= 80000){
    echo("Apreciado cliente, Gracias por su compra");
    echo("<br>");
    echo("Lo queremos mucho, usted es nuestra razón de ser");
}else{
    echo("Apreciado cliente, usted no cuenta con los fondos suficientes para la compra");
    echo("<br>");
    echo("Salga ya mismo de mi establecimiento");

}






?>