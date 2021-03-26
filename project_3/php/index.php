<?php
include_once ('./classes/error.class.php');
include_once ('./classes/calculate.class.php');
Errors::getError();
print_r(json_encode(calculate::getSum()));





?>
