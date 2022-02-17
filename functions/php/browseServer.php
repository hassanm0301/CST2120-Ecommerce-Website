<?php

include_once "common.php";

$allProds = $DB -> Products -> find();

dispMultiProd($allProds);

?>