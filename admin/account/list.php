<!-- content -->
<div class="content">
    <div class="content__heading">
        <h2 class="content__heading-title">Quản lý khách hàng</h2>
    </div>

    <div class="content__tale">
        <table>
            <thead>
                <tr>
                    <th>
                        <input type="checkbox" name="check_all">
                    </th>
                    <th>Mã KH</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Tel</th>
                    <th>Role</th>
                    <th>Hành động</th>
                </tr>
            </thead>

            <tbody>
                
                <?php
                    foreach($list_user as $user): ?>
                        <tr>
                            <td>
                                <input type="checkbox" name="checkbox">
                            </td>
                            <td><?=$user['id'];?></td>
                            <td><?=$user['user'];?></td>
                            <td><?=$user['email'];?></td>
                            <td><?=$user['address'];?></td>
                            <td><?=$user['tel'];?></td>
                            <td><?=$user['role'] == 1 ? "Admin" : "Khách hàng";?></td>
                            <td>
                                <a href="index.php?act=update_user&id=<?=$user['id'];?>" class="table-action">Sửa</a>
                                <a onclick="return confirm('Bạn có chắc muốn xóa tài khoản này không?') ?
                                    window.location.href = 'index.php?act=delete_user&id=<?=$user['id'];?>' : false;"
                                class="table-action">Xóa</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>

        <div class="form__action">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục chọn">
            <a href="index.php?act=add_customer">
                <input type="button" value="Nhập thêm">
            </a>
        </div>
    </div>
</div>
<!-- end content -->