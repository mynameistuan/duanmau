<?php
    if(is_array($cat)){
        extract($cat);
    }
?>
<div class="">
            <div class="row adtitle">
                <h1>Cập nhật loại hàng hóa</h1>
            </div>
            <div class="frm_content">
                <form action="index.php?act=upcat" method="POST">
                    <label for="" class="mb">Mã loại <br>
                    <input type="text" name="maloai" id="" disabled placeholder="Auto Number"><br>
                </label>
                <label for="" class="mb">Tên loại <br>
                    <input type="text" name="tenloai" id="" value="<?php if(isset($name)&&($name !="")) echo $name ;?>" class="bg-[gray]"><br><br>
                </label>
                <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>
                <br><br>
                <label for="">
                    <input type="hidden" name="id" id="" value="<?php if(isset($id)&&($id > 0)) echo $id ;?>">
                    <a href=""><input type="submit" name="submit" id="" value="CẬP NHẬT" class="w-[100px] h-[35px] bg-[white]" style="border: 1px solid red"></a>
                    <a href=""><input type="reset" name="reset" id="" value="NHẬP LẠI" class="w-[100px] h-[35px] bg-[white]" style="border: 1px solid red"v></a>
                    <a href="index.php?act=listcat"><input type="button" name="" id="" value="DANH SÁCH" class="w-[100px] h-[35px] bg-[white]" style="border: 1px solid red"></a>
                </label>
                </form>
            </div>
        </div>
    </div>