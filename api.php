<?php
header('Access-Control-Allow-Origin:*');
header('Content-type:application/json;charset=utf-8');
$res=new stdClass();

$num1=3;
$num2=2;
$res->num1=$num1;
$res->num2=$num2;

//Operador Suma
$suma=$num1+$num2;
$res->suma=$suma;

//Operador resta
$resta=$num1+$num2;
$res->resta=$resta;

//operador division
$dividir=$num1/$num2;
$res->dividir=$dividir;

//operador multiplicación
$multiplicar=$num1*$num2;
$res->multiplicar=$multiplicar;

//-------------------------------------------

//operador Elevar
$elevar=$num1**$num2;
$res->elevar=$elevar;

//operador Modulo 'Resto'
$modulo=$num1%$num2;
$res->modulo=$modulo;

//----------------------------------------------

//operador raiz cuadrada
$raizCuadrada=sqrt($num1);
$res->raizCuadrada=$raizCuadrada;

//operador raiz cubica '3.....∞'
$raizCubica=pow($num1,(1/3));
$res->raizCubica=$raizCubica;

//formula para verificar una raiz
//$elevar=$num1**2;
//$resta=$num1-$elevar;
//$suma=$elevar+$resta;
//$res->operacion=$suma;

//Operador numero aleatorio
$aleatorio=rand(1,$num1);
$res->aleatorio=$aleatorio;

//Operador numero aleatorio
$redondear=round(
    num:$num1,
    mode:PHP_ROUND_HALF_ODD
);
$res->redondear=$redondear;
$res->servidor=
$_SERVER["HTTP_HOST"];

echo json_encode($res,JSON_PRETTY_PRINT);
