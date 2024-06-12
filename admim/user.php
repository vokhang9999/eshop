<?php include "_header.php"; 
if(is_post_method()){
    //nhập dự liệu từ form 
    $username = $_POST["username"] ?? "";
    $pwd = $_POST["pwd"] ?? "";
   
      $sql ="insert into user(username,pwd) values(?,?)";
      //hash mat khau
      $pwd = password_hash($pwd,null);
      //mảng dữ liệu dùng cho parma
      $data = [$username,$pwd];
      $ket_qua = db_execute($sql, $data);
      if($ket_qua == true){
        js_alert("Thêm tài khoản thành công");
      }
}
?>
<form method="post">
    <h2>Thêm tài khoản</h2>
    <div class="control">
        <label for="">Tên đăng nhập</label>
        <input type="text" name="username" />
        <label for="">Mật khẩu</label>
        <input type="text" name="pwd" />
    </div>
    <div class="control">
        <input type="submit" value="Thêm tài khoản "/>
    </div>
</form>
<?php include "_footer.php"; ?>
