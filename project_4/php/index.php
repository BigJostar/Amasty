<?php
include_once ('./classes/info.php');
include_once ('./classes/form_array.class.php');
$aboutTeam=formArr::makeInfo($csv);
print_r($aboutTeam);

?>
