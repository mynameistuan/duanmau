<?php

    if(is_array($user)){
        extract($user);
    }

?>

<!-- content -->
<div class="content">
    <div class="content__heading">
        <h2 class="content__heading-title">Cập nhật tài khoản</h2>
    </div>

    <div class="content__form">
        <form action="index.php?act=update_user_save" method="POST">
            <div class="form__group">
                <label for="type">Mã tài khoản</label>
                <input type="number" name="id" placeholder="Auto number" readonly value="<?= $id;?>">
            </div>

            <div class="form__group">
                <label for="user">Tên tài khoản</label>
                <input type="text" name="user" placeholder="VD: admin" value="<?= $user; ?>">
            </div>

            <div class="form__group">
                <label for="password">Mật khẩu</label>
                <input type="password" name="pass" value="<?= $pass; ?>">
            </div>

            <div class="form__group">
                <label for="email">Email</label>
                <input type="text" name="email" value="<?= $email; ?>">
            </div>

            <div class="form__group">
                <label for="address">Địa chỉ</label>
                <input type="text" name="address" value="<?= $address; ?>">
            </div>

            <div class="form__group">
                <label for="tel">Số điện thoại</label>
                <input type="text" name="tel" value="<?= $tel; ?>">
            </div>

            <div class="form__group">
                <label for="type">Vai trò</label>
                <select name="role">
                    <option value="0" <?= $role == 0 ? "selected" : ""; ?> >Khách hàng</option>
                    <option value="1" <?= $role == 1 ? "selected" : ""; ?> >Admin</option>
                </select>
            </div>

            <div class="form__action">
                <input type="submit" value="Cập nhật" name="update">
                <input type="submit" value="Nhập lại" name="reset" class="form__btn-reset">
                <a href="index.php?act=customer" class="form__action-btn">Danh sách</a>
            </div>
            <?php
                if(isset($notify) && !empty($notify)){
                    echo $notify;
                }
            ?>
        </form>
    </div>
</div>
<!-- end content -->