
# tdc-equipo1-4dpgm
Luis Armando Quinonez Valenzuela/Josue Ríos Sandoval/Robrero De Leon Roqueni Duban/Emilio Alejandro Penagos Aldapa
<?php
//Crear objeto JSON
//Crear un array
$UsuarioLuis = [
"Carro" => "pepino-movil",
"Llantas" => "Clasico",
"AltaDelta" => "Dorada",
"CircuitoAElegir" => "Luigi Raceway N64",
"Velocidad_Dificultad" => 150,
//Dificultad o velocidad se presenta de esta forma; Facil-50, Medio-100 y Dificil-150
"PersonajeAElegir" => "Luigi",
"ColorDelPersonaje" => "Verde",
"Vestimenta" => "Ropa De Plomero",
"Objetos" => "Platanos",
"Derrape" => "75",
//El derrape sera mostrado con estas opciones, 25, 50, 75 y 80, debido que se presenta con porcentajes.
"Peso" => "50",
//El peso sera mostrado con estas opciones, 25, 50, 75 y 80, debido que se presenta con porcentajes.
"EquipoAzul" => true,
//Los booleanos no esta detallado como funcionan, pero es simplemente indicar si esta en el equipo Azul
"AlturaDePersonaje" => "1.75",
"TipoDeSueloDelCircuito" => "Concreto",
"EligioCarro" => false,
"GanoLaCarrera" => true,
"TipoDeEspecieDelPersonaje" => "Humano",
//Hay diferentes especies, tenemos humano, fantasma, mono, gorilla, planta y mounstruo
"AutoAyuda" => false,
"Volante" => false,
"MejorTiempo" => 125.78,
//Es presentado con segundos y mini segundos.
];

$RiosJosue = [
"Llantas" => "Dorado",
"AltaDelTa" => "Superala",
"CircuitoAElegir" => "Bowser's Castle",
"Carro" => "Eatandar",
"Velocidad_Dificultad" => "100", 
"ColorDelPersonaje" => "Negro",
"PersonajeAElegir" => "Yoshi",
"Objetos" => "Super Estrella",
"Vestimenta" => "Tenis Rojos",
"Peso" => "75",
"Derrape" => "80",
"AlturaDelPersonaje" => "1.40",
"EquipoAzul" => "false",
"EligioCarro" => "true",
"TipoDeSueloDelCircuito" => "Liso",
"TipoDeEspecieDelPersonaje" => "Dinosaurio",
"GanoLaCarrera" => "true",
"MejorTiempo" => "105.8",
"Volante" => "false",
"AutoAyuda" => "true",
];

$EmilioXD = [
"Neumatico" => "Pequeño",
"Carro" => "Estandar-dorado",
"AltaDelta" => "Parapente",
"CircuitoASeleccionar" => "Rainbow-Road",
"Velocidad_Dificultad" => 200,
//Dificultad de manejo de la carrera; Facil-50, Medio-100, Dificil-150 y 200
"PersonajeAElegir" => "Warrio",
"ColorDelPersonaje" => "Amarillo",
"Vestimenta" => "Ropa De Plomero",
"Objeto" => "Hongo-dorado",
"Derrape" => "50",
//Los derrapes son los siguientes, 25, 50, 75 y 80, es en porcentajes.
"Peso" => "140",
//Estos son los siguientes pesos de carros, 25, 50, 75 y 80, estan en porcentajes.
"EquipoAzul" => false,
//Los booleanos no tengo mucha informacion de como funcionan, aun que es facil decir que esta en el equipo Azul
"AlturaDePersonaje" => "1.55",
"TipoDeSueloDelCircuito" => "Metal",
"SeleccionaVehiculo" => true,
"GanoLaCarrera" => true,
"TipoDeEspecieDelPersonaje" => "Humano",
//Hay diferentes especies, tenemos humano, fantasma, mono, gorilla, planta, dinosaurio y moustruo
"AyudaAutomatica" => false,
"Volante" => false,
"MejorTiempo" => 112.18,
//Es presentado con segundos y mini segundos.
];

$roqueni = [

"personaje" => "mario",

"ColorDelPersonaje" => "rojo",

"Vestimenta" => "Ropa de plomero con bigote",

"Objetos" => "la bala",

"Derrape" => "25",

"Peso" => "54"

"Carro" => "maton",

"Llantas" => "madera",

"AlaDelta" => "besti ala",

"CircuitoAElegir" => "neo bouser citi",

"Velocidad_Dificultad" => 50,

"EquipoAzul" => "true",

"AlturaDePersonaje" => "1.5o",

"TipoDeSueloDelCircuito" => "arena",

"EligioCarro" => "true",

"GanoLaCarrera" => "false",

"TipoDeEspecieDelPersonaje" => "Humano",

"AutoAyuda" => "true",

"Volante" => "true",

"MejorTiempo" => 140.99,

];
$SelectorDeUsuarios = [
  $UsuarioLuis,
  $EmilioXD,
  $roqueni,
  $RiosJosue
  ];
  
echo json_encode($SelectorDeUsuarios);
