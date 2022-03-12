<?php

$delete = unlink("http://prosper.rf.gd/logo/icon.png");

if($delete == 1){
	echo "file deleted";
}

?>