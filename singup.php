<?php
session_start();
if (isset($_SESSION['unique_id'])) {
  header("location: users.php");
}
?>

<?php include_once "header.php"; ?>

<body>
  <div class="wrapper">
    <section class="form signup">
      <header>แอบเมียเล่น แอปพลิเคชั่น</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>ชื่อ</label>
            <input type="text" name="fname" placeholder="ทนงทวย" required>
          </div>
          <div class="field input">
            <label>นามสกุล</label>
            <input type="text" name="lname" placeholder="คงควรคอย" required>
          </div>
        </div>
        <div class="field input">
          <label>อีเมล</label>
          <input type="text" name="email" placeholder="HoyYai@gmail.com" required>
        </div>
        <div class="field input">
          <label>รหัสผ่าน</label>
          <input type="password" name="password" placeholder="รหัสอะไรก็ได้ที่เมียคุณไม่รู้" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>รูปภาพโปรไฟล์ <small style="color : red;">**คำเตือน อย่าตั้งรูปคู่กับเมียนะ**</small> </label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="สมัครสมาชิก">
        </div>
      </form>
      <div class="link">คุณมีบัญชีเเล้ว แล้วจะเข้ามาทำไม? <a href="login.php">เข้าสู่ระบบเลย</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/custom.js"></script>

</body>

</html>