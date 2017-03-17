<?php
    require('connect.php');

    $query = "SELECT * FROM brands";

    $resultBrands = $conn->query($query);

	$shoeMerken = $resultBrands->fetch_all(MYSQLI_ASSOC);



    $sql = "SELECT * FROM sizes";

    $resultSizes = $conn->query($sql);

    $shoeSizes = $resultSizes->fetch_all(MYSQLI_ASSOC);
