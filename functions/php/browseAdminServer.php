<?php // displays all products for admin browsing
    // search and sorting implemented

include_once "common.php";
$searchItem = filter_input(INPUT_POST, "search", FILTER_SANITIZE_STRING);
$sortItem = filter_input(INPUT_POST, "sort", FILTER_SANITIZE_STRING);

if($searchItem!=null || $sortItem!=null){
    if($sortItem == "name"){
        $option =[
            "sort" => [
                "name" => 1
            ]
        ];
    }
    else{
        $option =[
            "sort" => [
                "price" => 1
            ]
        ];
    }
    
    $criteria = [
        "name" => new MongoDB\BSON\Regex($searchItem, "i"),
    ];
    
}
else{
    $criteria = [];
    $option = [];
}

$allProds = $DB -> Products -> find($criteria, $option);

dispMultiProdAdmin($allProds);

?>