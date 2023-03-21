<?php
function waitForKeypress()
{
    stream_set_blocking(STDIN, true);
    fread(STDIN, 1);
    stream_set_blocking(STDIN, false);
}
function getNationality($country)
{
    $nation = array(
        'Polska' => 'Polak',
        'Niemcy' => 'Niemiec',
        'Francja' => 'Francuz',
        'Wlochy' => 'Wloch',
        'Hiszpania' => 'Hiszpan'
    );

    if (isset($nation[$country])) {
        return $nation[$country];
    } else {
        return 'Nieznana narodowosc';
    }
    echo "Wpisz panstwo: ";
    $country= trim(fgets(STDIN));
    $result = getNationality($country);
    echo "Narodowosc to: $result";

    waitForKeypress();
}
echo "Wpisz panstwo" . PHP_EOL;
$country= trim(fgets(STDIN));
$result = getNationality($country);
echo "Narodowosc to: $result";

waitForKeypress();
?>