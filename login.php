<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>แอบเมียเล่น แอปพลิเคชั่น</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>อีเมล</label>
          <input type="text" name="email" placeholder="HoyYai@gmail.com" required>
        </div>
        <div class="field input">
          <label>รหัสผ่านที่คุณแอบเมียตั้ง</label>
          <input type="password" name="password" placeholder="รหัสผ่านที่คุณแอบเมียตั้ง" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="คุยกับกิ๊กเลย">
        </div>
      </form>
      <div class="link">ยังไม่มีบัญชีใช่ไหม? <a href="singup.php">สมัครสมาชิกเลย</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/custom.js"></script>

</body>
</html>
