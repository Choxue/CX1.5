<?php
echo shell_exec("git stash");
echo shell_exec("git pull");
echo shell_exec("rm -r ./langcache/*");
?>