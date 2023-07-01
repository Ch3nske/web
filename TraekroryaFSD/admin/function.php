<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdusers";

function connect(){
    $conn = mysqli_connect("localhost", "root", "", "bdusers");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_set_charset($conn, "uft-8");
    return $conn;
}

function init(){
    //вывожу список товаров
    $conn = connect();
    $sql = "SELECT id, name  FROM goods";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}
//Вычитка из базы данных товаров на их редактирование
function selectOneGoods(){
    $conn = connect();
    $id = $_POST['gid'];
    $sql = "SELECT *  FROM goods WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo json_encode($row);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}
function updateGoods(){
    $conn = connect();
    $id = $_POST['id'];
    $name = $_POST['gname'];
    $cost = $_POST['gcost'];
    $descr = $_POST['gdescr'];
    $ord = $_POST['gorder'];
    $image = $_POST['gimg'];

    $sql = "UPDATE goods SET name = '$name', cost = '$cost', description = '$descr', ord = '$ord', image = '$image' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    mysqli_close($conn);
    writeJSON();
}
function newGoods(){
    $conn = connect();
    $name = $_POST['gname'];
    $cost = $_POST['gcost'];
    $descr = $_POST['gdescr'];
    $ord = $_POST['gorder'];
    $image = $_POST['gimg'];

    $sql = "INSERT INTO goods (name, cost, description, ord, img) VALUES ('$name', '$cost', '$descr', '$ord', '$image')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    writeJSON();
}
function writeJSON(){
    $conn = connect();
    $sql = "SELECT *  FROM goods";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        file_put_contents( '../goods.json' ,json_encode($out));
    } else {
        echo "0";
    }
    mysqli_close($conn);
}