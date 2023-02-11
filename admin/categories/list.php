<div class="row adtitle">
    <h1 class="w-[800px] h-[50px] bg-[Silver]">Danh sách loại hàng</h1>
</div>
<div class="frm_content">

    <div class="row mb frmlist">
        <table>
            <tr>
                <th></th>
                <th>MÃ LOẠI</th>
                <th>TÊN LOẠI</th>
                <th></th>
            </tr>
            <?php
            foreach ($listcat as $categories) {
                extract($categories);
                $update = "index.php?act=update&id=" . $id;
                $delete = "index.php?act=delete&id=" . $id;
                echo  '<tr>
                                <td><input type="checkbox" name="name[]" ></td>
                                <td>' . $id . '</td>
                                <td>' . $name . '</td>
                                <td class="pl-[50px]"><a href= "' . $update . '" class="mr-[10px] w-[100px] h-[35px]"><input type="button" name="" id="" value="Sửa"></a> <a href="' . $delete . '"><input type="button" name="" id="" value="Xóa"></a></td>
                            </tr>';
            }
            ?>

        </table>
    </div>
    <div class="center">
            <div class="pagination">
                <a href="#">&laquo;</a>
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">&raquo;</a>
            </div>
        </div>
    <form action="" method="POST">
        <label for="">
            <a href="index.php?act=addcat"><input type="button" value="THÊM MỚI" class="w-[100px] h-[35px] bg-[white]" style="border: 1px solid red"></a>
        </label>
    </form>
</div>
