<?php 
    $serverName = "DESKTOP-J02TPTV\SQLSERVER";
    $connectionOptions = [
        "Database"=>"quanly",
        "Uid"=>"sa",
        "PWD"=>"1234",
        "MultipleActiveResultSets"=>true,
        "CharacterSet"  => 'UTF-8'
    ];
    $conn = sqlsrv_connect($serverName, $connectionOptions);