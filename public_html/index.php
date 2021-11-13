<?php
if ( is_dir("../app-ui/src") ){
  chdir("../app-ui/src");
}
else{
  die("What a mess! Reinstall please...");
}

include_once("./router.php");
