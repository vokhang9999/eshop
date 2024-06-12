<?php include "_header.php"; 
if(is_post_method()){
    //nhập dự liệu từ form 
    $productname = $_POST["product_name"] ?? "";
    $price = $_POST["price"] ?? "";
    $discountprice = $_POST["discount_price"] ?? "";
    $description = $_POST["description"] ?? "";
    $cateid = $_POST["cate_id"] ?? "";
    $imgae = $_POST["image"] ?? "";
    
      $sql ="INSERT INTO product(product_name, price, discount_price, description, cate_id, image) VALUES(?, ?, ?, ?, ?, ?)";
      //hash mat khau
      //$pwd = password_hash($pwd,null);
      //mảng dữ liệu dùng cho param
      $data = [$productname,$price,$discountprice,$description,$cateid, $imgae];
      $ket_qua = db_execute($sql, $data);
      if($ket_qua == true){
        js_alert("Thêm hàng thành công");
      }
}
?>
<form method="post">
    <h2>Thêm tài khoản</h2>
    <div class="control">
        <label for="">Tên sản phẩm</label>
        <input type="text" name="product_name" /><br>
        <label for="">Giá</label>
        <input type="text" name="price" /><br>
        <label for="">Giá khuyến mãi</label>
        <input type="text" name="discount_price" /><br>
        <label for="">Mô tả</label>
        <input type="text" name="description" /><br>
        <label for="">Danh mục sản phẩm</label>
        <input type="text" name="cate_id"/><br>
        <label for="">Ảnh</label>
        <input type="text" name="image">
    </div>
    <div class="control">
        <input type="submit" value="Thêm dữ liệu"/>
    </div>
</form>
<?php include "_footer.php"; ?>
