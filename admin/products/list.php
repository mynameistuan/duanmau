<div class="row adtitle">
    <h1>Danh sách sản phẩm</h1>
</div>
<div class="frm_content">

    <div class="row mb frmlist">
        <table class="table_product">
            <thead>
                <tr>
                    <th>Check</th>
                    <th>MÃ SẢN PHẨM</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>GIÁ SẢN PHẨM</th>
                    <th>ẢNH</th>
                    <th>MÔ TẢ SẢN PHẨM</th>
                    <th>SỐ LƯỢT XEM</th>
                    <th>LOẠI SẢN PHẨM</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>

                <?php
                for ($i = 0; $i < count($product_name); $i++) {
                    $name = $product_name[$i]['name'];
                    $price = $product_name[$i]['price'];

                    $mota = $product_name[$i]['mota'];
                    $view = $product_name[$i]['view'];
                    $iddm = $product_name[$i]['iddm'];
                    $id = $product_name[$i]['id'];

                    $url_image = "../upload/";
                    $image_name = $product_name[$i]['img'];

                    $image = $url_image . $image_name;
                    $url_edit = "index.php?act=edit_product&&id=$id";
                    $url_delete = "index.php?act=delete_product&&id=$id";


                ?>

                    <tr>
                        <td><input type="checkbox" name="name"></td>
                        <td><?= $id ?> </td>
                        <td><?= $name ?> </td>
                        <td><?= number_format($price) ?> </td>
                        <td>
                            <img width="50" src="<?= $image ?>" alt="">
                        </td>
                        <td><?= $mota ?> </td>
                        <td><?= $view ?> </td>
                        <td><?= $iddm ?> </td>
                        <td>
                            <a href="<?= $url_edit ?>"><input type="button" name="" id="" value="Sửa"></a>
                            <a href="<?= $url_delete ?>" onclick="return confirm('Bạn có chắc muốn xóa không')"><input type="button" name="" id="" value="Xóa"></a>
                        </td>
                    </tr>

                <?php
                }
                ?>



            </tbody>

        </table>
    </div>
    <!-- <div class="center">
        <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">&raquo;</a>
        </div>
    </div> -->
    <form action="" method="POST">
        <label for="">
            <a href=""><input type="button" id="btn1" value="CHỌN TẤT CẢ"></a>
            <a href=""><input type="button" id="btn2" value="BỎ CHỌN TẤT CẢ"></a>
            <a href=""><input type="button" name="" id="" value="XÓA CÁC MỤC ĐÃ CHỌN"></a>
            <a href="index.php?act=addpro"><input type="button" value="THÊM MỚI"></a>
        </label>
    </form>
</div>
<!-- Checkall and uncheckall -->
<script language="javascript">
    document.getElementById("btn1").onclick = function() {
        var checkboxes = document.getElementsByName('name[]');

        for (var i = 0; i < checkboxes.length; i++) {
            checkboxes[i].checked = true;
        }
    };

    document.getElementById("btn2").onclick = function() {
        var checkboxes = document.getElementsByName('name[]');
        for (var i = 0; i < checkboxes.length; i++) {
            checkboxes[i].checked = false;
        }
    };
</script>