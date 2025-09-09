<?php
//programa para definir mensaje de Bienvenida
//creado por Ismael Nahum Richarte Bernal
// 09/septiembre/2025
//appwenb1.php
class texto
{
    public $texto1="Bienvenido a Programacion de App Wep";
    public function imprimirtexto()
    {
        echo $this ->texto1;
        print $this->texto1;
    }
}
$obj1=new texto;
$obj1->imprimirtexto();
?>
