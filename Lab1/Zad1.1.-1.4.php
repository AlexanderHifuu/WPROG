<?php
function waitForKeypress()
{
    stream_set_blocking(STDIN, true);
    fread(STDIN, 1);
    stream_set_blocking(STDIN, false);
}
function rollDice()
{
    $result = rand(1, 6);
    return $result;
}
$diceRoll = rollDice();
echo "Wynik: $diceRoll" . PHP_EOL;
function calculateCircleDiameter($radius)
{
    $diameter = 2 * $radius;
    return $diameter;
}
function CircleDiameter($radius)
{
    $diameter = 2 * $radius;
    return $diameter;
}
$diameter = 5;
echo "Promień jest: $diameter" . PHP_EOL;

function censorText($text)
{
    $forbiddenWords = array("Puchatek", "Kubus");
    $censoredText = $text;
    foreach ($forbiddenWords as $word)
    {
        $censoredText = str_ireplace($word, str_repeat('*', strlen($word)), $censoredText);
    }

    return $censoredText;
}
$text = "Kubus Puchatek kocha wladze." . PHP_EOL;
$censoredText = censorText($text);
echo $censoredText;
function getDateOfBirthFromPesel($pesel)
{
    $year = substr($pesel, 0, 2);
    $month = substr($pesel, 2, 2);
    $day = substr($pesel, 4, 2);

    if ($month > 80)
    {
        $year += 1800;
        $month -= 80;
    } elseif ($month > 60)
    {
        $year += 2200;
        $month -= 60;
    } elseif ($month > 40)
    {
        $year += 2100;
        $month -= 40;
    } elseif ($month > 20)
    {
        $year += 2000;
        $month -= 20;
    } else {
        $year += 1900;
    }

    $dateOfBirth = sprintf("%02d-%02d-%02d", $day, $month, $year % 100);

    return $dateOfBirth;
}
$pesel = "02070803628";
$dateOfBirth = getDateOfBirthFromPesel($pesel);
echo "Data urodzenia: $dateOfBirth";

waitForKeypress();





?>