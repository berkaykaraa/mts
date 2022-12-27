<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>YAVUZ BİYOMEDİKAL</title>
    <link rel="stylesheet" href="giris.css">
  </head>
  <body>
      <div class="center">
        <form class="box" action="giris.php" method="post">
          <h1>Giriş Yap</h1>
          <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
          <?php } ?>
          <form method="post">
            <div class="txt_field">
              <input type="text" required name="uname">
              <span></span>
              <label>Kullanıcı Adı</label>
            </div>
            <div class="txt_field">
              <input type="password" required name="password">
              <span></span>
              <label>Şifre</label>
            </div>
            <input type="submit" value="Giriş Yap">
            
          </form>
        </form> 
      </div>
  

  </body>
</html>
