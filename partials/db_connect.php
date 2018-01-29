<?php
	$link = null;

	function openDatabaseConnection() {
        $user = 'root';
        $password = 'root';
        $db = 'hotel';
        $host = 'localhost';
        $port = 8889;

        global $link;
        $link = mysqli_init();

        mysqli_real_connect($link, $host, $user, $password, $db, $port);
    }

    function closeDatabaseConnection() {
        global $link;
        mysqli_close($link);
    }
?>