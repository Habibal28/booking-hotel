<?php

class signupmodel{
function insert($post){
    global $conn;
    
    $username = $post["username"];
    $password = $post["password"];
    $nama = $post["nama"];
    $nik = $post["nik"];
    $alamat = $post["alamat"];
    $nohp = $post["nohp"];

    $sql = "INSERT INTO customer VALUES ('','$username','$password','$nama',$nik,'$alamat','$nohp')";
    mysqli_query($conn,$sql);
    return mysqli_affected_rows($conn);
}
}

?>