<?php
setcookie("Name","AnandSingh",time()+10);
if(isset($_COOKIE["Name"]))
{
    echo "Cookie set at ".time();
}
else
{
    echo "Not set";
}
?>
