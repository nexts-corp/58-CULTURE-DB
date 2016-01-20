<?php
$out = "";
//$out=shell_exec("git reset HEAD --hard");
//$out.=shell_exec("git clean -f");
$out.=shell_exec("git pull");
echo $out;
?>
