<?php
if(isset($_COOKIE["Name"]))
{
    echo "Welcome ".$_COOKIE['Name'];
}
else
{
    echo "Welcome guest!";
}?>