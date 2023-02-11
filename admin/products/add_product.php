<div class="contain_add_pro">
    <div class="row adtitle">
        <h1>Thêm mới sản phẩm</h1>
    </div>
    <div class="frm_content">
    <div class="" style="color:green;margin-bottom:20px;font-weight:600">
            <?php
            if (isset($notify ) && ($notify  != "")) echo $notify ;
            ?>
            </div>
        <form action="index.php?act=addpro" method="POST" enctype="multipart/form-data">
            <label for="" class="mb">Mã sản phẩm <br>
                <input type="text" name="maloai" id="" disabled placeholder="Auto Number"><br>
            </label>
            <label for="" class="mb">Tên sản phẩm <br>
                <input type="text" name="name" id="" ><br><br>
            </label>
            <label for="" class="mb">Giá sản phẩm <br>
                <input type="text" name="price" id="price_product" ><br><br>
                <span class="parseNumber"></span>
                <br>
            </label>
            <label for="" class="mb">Mô tả sản phẩm <br>
                <input type="text" name="desc" id="" ><br><br>
            </label>
            <label for="" class="mb">Ảnh sản phẩm <br>
                <input type="file" name="image" id="" ><br><br>
            </label>
            <label for="" class="mb">Số lượt xem <br>
                <input type="number" name="view" id="" ><br><br>
            </label>
            <label for="" class="mb">Loại sản phẩm <br>
                <select name="category_id" id="">

                    <?php for ($i = 0; $i < count($category_name); $i++) { ?>
                        <option value=" <?= $category_name[$i]['id']  ?>">
                            <?= $category_name[$i]['name']  ?>
                        </option>

                    <?php } ?>
                </select>
            </label>
           
           
            <br><br>
            <label for="">
                <a href=""><input type="submit" name="add_new" id="" value="THÊM MỚI"></a>
                <a href=""><input type="reset" name="reset" id="" value="NHẬP LẠI"></a>
                <a href="index.php?act=listproduct"><input type="button" name="" id="" value="DANH SÁCH"></a>
            </label>
        </form>
    </div>
</div>
</div>