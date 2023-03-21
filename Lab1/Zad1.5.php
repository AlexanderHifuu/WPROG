<?php
function waitForKeypress()
{
    stream_set_blocking(STDIN, true);
    fread(STDIN, 1);
    stream_set_blocking(STDIN, false);
}
function oblicz_pole_trojkata()
{
    echo "Podaj dlugoac podstawy trojkata: ";
    $a = trim(fgets(STDIN));
    echo "Podaj wysokoac trojkata: ";
    $h = trim(fgets(STDIN));
    $pole = 0.5 * $a * $h;
    echo "Pole trojkata wynosi: " . $pole . PHP_EOL;
}

function oblicz_pole_prostokata()
{
    echo "Podaj dlugoac pierwszego boku prostokata: ";
    $a = trim(fgets(STDIN));
    echo "Podaj dlugoac drugiego boku prostokata: ";
    $b = trim(fgets(STDIN));
    $pole = $a * $b;
    echo "Pole prostokata wynosi: " . $pole . PHP_EOL;
}

function oblicz_pole_trapezu()
{
    echo "Podaj dlugoac pierwszej podstawy trapezu: ";
    $a = trim(fgets(STDIN));
    echo "Podaj dlugoac drugiej podstawy trapezu: ";
    $b = trim(fgets(STDIN));
    echo "Podaj wysokoac trapezu: ";
    $h = trim(fgets(STDIN));
    $pole = 0.5 * ($a + $b) * $h;
    echo "Pole trapezu wynosi: " . $pole . PHP_EOL;
}

echo "Jaka figure chcesz obliczyc? (Wpisz trojkat lub prostokat lub trapez): ";
$figura = trim(fgets(STDIN));

switch ($figura)
{
    case "trojkat":
        oblicz_pole_trojkata();
        break;
    case "prostokat":
        oblicz_pole_prostokata();
        break;
    case "trapez":
        oblicz_pole_trapezu();
        break;
    default:
        echo "Nieprawidlowa figura." . PHP_EOL;
}

waitForKeypress();
?>