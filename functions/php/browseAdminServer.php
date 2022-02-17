<?php

include_once "common.php";

$allProds = $DB -> Products -> find();

dispMultiProdAdmin($allProds);

?>