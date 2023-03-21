<?php
function waitForKeypress()
{
    stream_set_blocking(STDIN, true);
    fread(STDIN, 1);
    stream_set_blocking(STDIN, false);
}
function getArrayElement($index)
{
    $array = array();
    for ($i = 0; $i < 10; $i++) {
        $array[] = rand(0, 100);
    }
    return $array[$index];
}
echo "Wpisz index: ";
$index= trim(fgets(STDIN));
$result = getArrayElement($index);
echo "Wartosc: $result";

waitForKeypress();
?>