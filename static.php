<?php

// class ContohStatic{

//     public static $angka = 1;

//     public static function Halo(){
//         return "Halo." . self::$angka++ . "x";
//     }

// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::Halo();
// echo "<hr>";
// echo ContohStatic::Halo();



class Contoh {

    public static $angka = 1;

    public function halo(){
        return "Halo." . self::$angka++ . " kali. <br>";
    }

}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();








?>