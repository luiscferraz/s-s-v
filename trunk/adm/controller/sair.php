<?php

/**
 * @author erick
 * @copyright 2012
 */

@session_start();
@session_destroy();
header('Location: ../index.php')

?>