<?php
// var_dump($result);
if (isset($result['name']) && isset($result['id'])) {
    $value_id = $result['id'];
    $value_name = $result['name'];
    $value_price = $result['price'];



    $value_description = $result['mota'];

    $value_view = $result['view'];
    $value_cate = $result['iddm'];
    $url_image = "../upload/";
    $image_name = $result['img'];
    $image = $url_image . $image_name;
} else {
    $value_name = "Undefined name";
    $value_id = 0;
}

?>





<div class="contain_add_pro">
    <div class="row adtitle">
        <h1>Cập nhật sản phẩm</h1>
    </div>
    <div class="frm_content">
        <form action="index.php?act=update_product" method="POST" enctype="multipart/form-data">

            <input type="text" name="id" id="" value="<?= $value_id ?>" hidden placeholder="Auto Number"><br>

            <label for="" class="mb">Tên sản phẩm <br>
                <input type="text" name="name" value="<?= $value_name ?>" id=""><br><br>
            </label>
            <label for="" class="mb">Giá sản phẩm <br>
                <input type="text" name="price" value="<?= $value_price ?>" id=""><br><br>
            </label>
            <label for="" class="mb">Mô tả sản phẩm <br>
                <input type="text" name="desc" value="<?= $value_description ?>" id=""><br><br>
            </label>
            <label style="display : flex ; flex-direction:column" for="" class="mb">Ảnh sản phẩm <br>
                <input type="file" name="image">
                <img width="80" src="<?= $image ?> " alt=""> <br>

            </label>
            <label for="" class="mb">Số lượt xem <br>
                <input type="number" name="view" value="<?= $value_view ?>" id=""><br><br>
            </label>
            
            <label for="" class="mb">Loại sản phẩm <br>
                <select name="category_id" id="">

                    <?php for ($i = 0; $i < count($category_name); $i++) { ?>
                        <option value=" <?= $category_name[$i]['id']  ?>" 
                        <?php if ($category_name[$i]['id'] == $value_cate) {echo "selected";} ?>
                        >
                            <?= $category_name[$i]['name']  ?>
                        </option>

                    <?php } ?>
                </select>
            </label>
           

            <br><br>

            <input type="submit" name="update" id="" value="CẬP NHẬT">
            <a href=""><input type="reset" name="reset" id="" value="NHẬP LẠI"></a>
            <a href="index.php?act=listproduct"><input type="button" name="" id="" value="DANH SÁCH"></a>

        </form>
    </div>
</div>
</div>