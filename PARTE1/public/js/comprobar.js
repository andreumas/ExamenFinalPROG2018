

if ($_POST['participantes']>5) {
echo "<h1>"."El maximo numero de participantes es 5" . "</h1>";
}elseif ($_POST['participantes']<=0){
    echo "<h1>"."Eppp! El minimo de participantes es 1" . "</h1>";
}elseif (empty($_POST['participantes'] && $_POST['nombre'])) {
echo "<h1>"."Rellene por favor todos los campos" . "</h1>";}else{
  echo "<h1>"."Todo correcto y insertado" . "</h1>";

}
