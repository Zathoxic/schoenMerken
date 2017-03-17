<?php
    require('connect.php');

    //Shoe BRANDS
    $getBrands = "SELECT * FROM brands";
    $shoeResults = $conn->query($getBrands);
    $shoeBrands = $shoeResults->fetch_all(MYSQLI_ASSOC);

    foreach ($shoeBrands as $shoeBrand) {
        $shoeBrandID = $conn->escape_string($shoeBrand['id']);
        
        $query = "SELECT stock FROM sizes WHERE brand_id= $shoeBrandID";
        $runQuery = $conn->query($query);
        $stockResult = $runQuery->fetch_assoc();

        var_dump($stockResult);     
  
    }

    //Shoe SIZES
    $getSizes = "SELECT * from sizes";
    $shoeResults = $conn->query($getSizes);
    $shoeSizes = $shoeResults->fetch_all(MYSQLI_ASSOC);


    //Stock

    $stockExists = "";
    $stockDoesntExist = "";

    $query = "SELECT stock FROM sizes WHERE id=$shoeBrandID";
    $runQuery = $conn->query($query);
    $stockResult = $runQuery->fetch_assoc();

    //echo("result: " . $stockResult);     

    $update = mysqli_query($conn,"UPDATE sizes SET stock='$stock' WHERE id=$shoeBrandID");             
    if (!$update){
    echo("Error description: " . mysqli_error($conn));
    }

    if(!$stockDoesntExist){
        $conn->query($update);
    }else{
        
    }