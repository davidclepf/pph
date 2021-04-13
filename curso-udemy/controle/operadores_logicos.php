<div class="titulo">Operadores Lógicos</div>

<?php
echo "<p class='divisao'>Negações Lógica</p><hr>";
var_dump(true);
echo "<br>";
var_dump(!true); // Negação lógica (not)
echo "<br>";

echo "<p class='divisao'>Tabela Verdade 'AND' (E)</p><hr>";
// Será true apenas se as duas condições forem verdadeiras
var_dump(true && true); // true
echo "<br>";
var_dump(true && false); //false
echo "<br>";
var_dump(false && true); //false
echo "<br>";
var_dump(false && false); //false
echo "<br>";

echo "<br>";

var_dump(true and true); // true
echo "<br>";
var_dump(true and false); //false
echo "<br>";
var_dump(false and true); //false
echo "<br>";
var_dump(false and false); //false
echo "<br>";


echo "<p class='divisao'>Tabela Verdade 'OR' (OU)</p><hr>";
// Só será false se todas as opções forem falsas
var_dump(true || true); // true
echo "<br>";
var_dump(true || false); // true
echo "<br>";
var_dump(false || true); // true
echo "<br>";
var_dump(false || false);//false
echo "<br>";

echo "<br>";

var_dump(true or true); // true
echo "<br>";
var_dump(true or false); // true
echo "<br>";
var_dump(false or true); // true
echo "<br>";
var_dump(false or false); //false
echo "<br>";


echo "<p class='divisao'>Tabela Verdade 'XOR' (OU Exclusivo)</p><hr>";
// Será false se todas as opções forem iguais (todas falsas ou todas verdadeiras)
var_dump(true xor true); // false
echo "<br>";
var_dump(true xor false); // true
echo "<br>";
var_dump(false xor true); // true
echo "<br>";
var_dump(false xor false);//false
echo "<br>";

echo "<br>";

var_dump(true != true); // false
echo "<br>";
var_dump(true != false); // true
echo "<br>";
var_dump(false != true); // true
echo "<br>";
var_dump(false != false);//false
echo "<br>";
?>

