<div class="">
            <div class="row adtitle width w-[800px] h-[50px] bg-[Silver] ">
                <h120px class=" pt-[20px] pl-[10px]">Thêm mới loại hàng hóa</h120px>
            </div>
            <div class="frm_content">
                <form action="index.php?act=addcat" method="POST">
                    <label for="" class="mb">Mã loại <br>
                    <input type="text" name="maloai" id="" disabled placeholder="Auto Number" class="w-[800px] h-[50px] bg-[Silver] "><br>
                </label>
                <label for="" class="mb">Tên loại <br>
                    <input type="text" name="tenloai" id="" required class="row adtitle width w-[800px] h-[50px] bg-[Silver] "><br><br>
                </label>
                <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>
                <br><br>
                <label for="">
                    <a href=""><input type="submit" name="submit" id="" value="THÊM MỚI" class="w-[100px] h-[35px] bg-[white]" style="border: 1px solid red"></a>
                    <a href=""><input type="reset" name="reset" id="" value="NHẬP LẠI" class="w-[100px] h-[35px] bg-[white]" style="border: 1px solid red"></a>
                    <a href="index.php?act=listcat"><input type="button" name="" id="" value="DANH SÁCH" class="w-[100px] h-[35px] bg-[white]" style="border: 1px solid red"></a>
                </label>
                </form>
            </div>
        </div>
    </div>