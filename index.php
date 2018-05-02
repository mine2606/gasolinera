<?php

require_once ("Gasolinera.php");

$gaso1 = new Gasolinera ("Alburquerque", "GALP");

//Creamos clientes
$c1 = new Cliente ("Juan", 15);
$c2 = new Cliente ("Claudio", 5);
$c3 = new Cliente ("Mine", 123);

$gaso1->altaCliente($c1);
$gaso1->altaCliente($c2);
$gaso1->altaCliente($c3);


//para darlo de baja lllamos a la funcion que hemos creado en gasolinera
$gaso1->bajaCliente(7);

$e1 = new Empleado("Sandra", 1);
$e2 = new Empleado("Lucas", 7);
$e3 = new Empleado("Sole", 8);


$gaso1->altaEmpleado($e1);
$gaso1->altaEmpleado($e2);
$gaso1->altaEmpleado($e3);

$gaso1->bajaEmpleado("Lucas");




//Llamando a la funcion anadirRepostajeUno
$repo1 = new Repostaje (50, "2018-02-01");
$c1->anadirRepostajeUno ($repo1);

//Llamando a la funcion anadirRepostajeDos
$c1->anadirRepostajeDos (50, "2016-04-02");




$s1 = new SurtidorGasolina (1.40 , "95");
$s2 = new SurtidorGasolina (1.40 , "95");
$s3 = new SurtidorGasolina (1.40 , "95");
$s4 = new SurtidorGasoil (1.15, false);
$s5 = new SurtidorGasoil (1.15, false);
$s6 = new SurtidorGasoil (1.15, false);
$gaso1->anadirSurtidor ($s1);
$gaso1->anadirSurtidor ($s2);
$gaso1->anadirSurtidor ($s3);
$gaso1->anadirSurtidor ($s4);
$gaso1->anadirSurtidor ($s5);
$gaso1->anadirSurtidor ($s6);



$gaso1->mostrar();



//Imprimir lo que esta ocurriendo
echo "<pre>";
print_r ($gaso1);
echo "</pre>";