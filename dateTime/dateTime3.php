<?php
//timezone list
$timezone = DateTimeZone::listIdentifiers();
foreach($timezone as $key => $list)
{
    echo $list . "<br/>";
}
echo "<br>";

print_r(timezone_identifiers_list(1));
echo "<br>";

?>