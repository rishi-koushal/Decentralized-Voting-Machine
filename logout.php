<?php
    session_start();

    session_destroy();
    header('Location:./final.html');
	
?>