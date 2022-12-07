<?php

$conn = mysqli_connect("localhost", "root", "", "plantdb");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
    }

    function tambahData($data){
        global $conn;
        $plantId = $data["plantId"];
        $plantName = $data["plantName"];
        $plantColor = $data["plantColor"];
        $plantPrice = $data["plantPrice"];
        $plantImage = $data["plantImage"];
    
        $query = "INSERT INTO plants VALUES('$plantId', '$plantName', '$plantColor', '$plantPrice', '$plantImage')";
        mysqli_query($conn, $query);
    
        return mysqli_affected_rows($conn);
    }

    function hapusData($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM plants WHERE id = $id");
    
        return mysqli_affected_rows($conn);
    }
    
    
    ?>


