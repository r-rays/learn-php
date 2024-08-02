<?php
define('NAMA', 'Rieky Rayson');
const UMUR = 19;

echo NAMA;
echo "<br>";
echo UMUR;

echo "<br>";
echo "<br>";

class Coba
{
    // define('NAMA', 'Rieky Rayson');

    const NAMA = "Rieky Rayson";
}

echo Coba::NAMA;

echo "<br>";
echo "<br>";

// Magic Constant
var_dump(__LINE__);
echo "<br>";
var_dump(__FILE__);
echo "<br>";
var_dump(__DIR__);
echo "<br>";
var_dump(__FUNCTION__);
echo "<br>";
var_dump(__CLASS__);
echo "<br>";
var_dump(__TRAIT__);
echo "<br>";
var_dump(__METHOD__);
echo "<br>";
var_dump(__NAMESPACE__);

echo "<br>";
echo "<br>";

function coba()
{
    return __FUNCTION__;
}
echo coba();

echo "<br>";
echo "<br>";

class Jajal
{
    public $class = __CLASS__;
}
$obj = new Jajal;
echo $obj->class;
