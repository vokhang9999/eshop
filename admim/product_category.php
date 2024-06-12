<?php include "_header.php"; 
if(is_post_method()){
    //nhập dự liệu từ form 
    $name = $_POST["cate_name"] ?? "";
    if(empty($name)==false){
      $sql ="insert into product_category(cate_name) values(?)";
      //mảng dữ liệu dùng cho parma
      $data = [$name];
      $ket_qua = db_execute($sql, $data);
      if($ket_qua == true){
        js_alert("Thêm danh mục thành công");
      }
    }
}
?>
<form method="post">
    <h2>Thêm danh mục sản phẩm</h2>
    <div class="control">
        <label for="">Thêm danh mục</label>
        <input type="text" name="cate_name" />
    </div>
    <div class="control">
        <input type="submit" value="thêm danh mục"/>
    </div>
</form>
<?php include "_footer.php"; ?>
