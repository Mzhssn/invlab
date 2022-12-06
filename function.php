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
    '$description','Onprocess')";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);

}

function updatestat($data){
    global $conn;
    //Ambil data dari tiap elemen dari form
    $title = htmlspecialchars($data["title"]);
    $enddate = htmlspecialchars($data["enddate"]);
    
    //Query
    $query = "UPDATE procurement SET date_proc ='$enddate',
    stat_proc = 'Complete' WHERE title_proc='$title'";
     
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}



function move($data){
    global $conn;
    //Ambil data dari tiap elemen dari form
    $title = htmlspecialchars($data["title"]);
    //QUERY

    $query = "INSERT INTO asset (name_asset,qty,type,category,date,picture,description)
    SELECT title_proc,qty_proc,type_proc,cat_proc,date_proc,picture_proc,desc_proc 
    from procurement WHERE title_proc = '$title'";
     
    mysqli_multi_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM procurement where id_proc = $id");
    return mysqli_affected_rows($conn);
}


?>