<?php 
session_start(); 
include ("db_conn.php");
if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
    if (empty($uname)) {
        header("Location: login.php?error=Kullanıcı Adı Gerekli");
        exit();
    }else if(empty($pass)){
        header("Location: login.php?error=Parola Gerekli");
        exit();
    }else{
        $sql = "SELECT * FROM giris WHERE kullanici_adi='$uname' AND kullanici_sifre='$pass'";
        $result = mysqli_query($baglan, $sql);
        if (mysqli_num_rows($result)>0){
            $row = mysqli_fetch_assoc($result);
            if ($row['kullanici_adi'] === $uname && $row['kullanici_sifre'] === $pass) {
                echo "Logged in!";
                $_SESSION['ad'] = $row['ad'];
                $_SESSION['name'] = $row['name'];
                header("Location: index.php");
                exit();
            }else{
                header("Location: login.php?error=Kullanıcı Adı veya Şifre Hatalı");
                exit();
            }
        }else{
            header("Location: login.php?error=Kullanıcı Adı veya Şifre Hatalı");
            exit();
        }
    }
}else{
    header("Location: login.php");
    exit();
}

?>