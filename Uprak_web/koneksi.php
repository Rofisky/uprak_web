<?php
function Login($username, $password) {
    global $conn; 
    $uname = $username;
    $upass = $password;		
    $hasil = mysqli_query($conn,"select * from user where username='$uname' and password='$upass';");
    $cek = mysqli_num_rows($hasil);
    if($cek > 0 ){
        $query = mysqli_fetch_array($hasil);
        $_SESSION['no_identitas'] = $query['no_identitas'];
        $_SESSION['username'] = $query['username'];
        $_SESSION['role'] = $query['role'];
        return true;		
    }
    else {
        return false;
    }	
}
?>
 