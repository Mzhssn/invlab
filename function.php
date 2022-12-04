<?php
$conn = mysqli_connect('localhost','root','','invlab');

function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while($row = mysqli_fetch_array($result)){
        $rows[] = $row;
    }
    return $rows;
}

function input($data){
    global $conn;
    //Ambil data dari setiap elemen di form
    $title = htmlspecialchars($data['title']);
    $date = htmlspecialchars($data['date']);
    $picture = htmlspecialchars($data['picture']);
    $type = htmlspecialchars($data['type']);
    $category = htmlspecialchars($data['category']);
    $description = htmlspecialchars($data['description']);

    //query
    $query = "insert into asset values ('$title','$date','$picture','$type',
    '$category','$description')";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);

}

function regis($data){
    global $conn;
    //Ambil data dari setiap elemen di form
    $id = htmlspecialchars($data['id']);
    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);
    $email = htmlspecialchars($data['email']);
    $phone = htmlspecialchars($data['phone']);
    $firstname = htmlspecialchars($data['firstname']);
    $lastname = htmlspecialchars($data['lastname']);
    $faculty = htmlspecialchars($data['faculty']);
    $department = htmlspecialchars($data['department']);
    $organization = htmlspecialchars($data['organization']);

    //query
    $query = "insert into users values ('$id','$username','$firstname','$lastname','$email',
    '$phone','$faculty','$department','$organization','$password')";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);

}

function procurement($data){
    global $conn;
    //Ambil data dari setiap elemen di form
    $title = htmlspecialchars($data['title']);
    $date = htmlspecialchars($data['date']);
    $picture = htmlspecialchars($data['picture']);
    $type = htmlspecialchars($data['type']);
    $category = htmlspecialchars($data['category']);
    $description = htmlspecialchars($data['description']);
    
    //query
    $query = "insert into procurement values ('','$title','$date','$picture','$type','$category',
    '$description')";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);

}

?>