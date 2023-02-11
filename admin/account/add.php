<!-- content -->
<div class="content">
    <div class="content__heading">
        <h2 class="content__heading-title">Thêm mới tài khoản</h2>
    </div>

    <div class="content__form">
        <form action="index.php?act=add_customer" method="POST">
            <div class="form__group">
                <label for="user">Tên tài khoản</label>
                <input type="text" name="user" placeholder="VD: admin">
            </div>

            <div class="form__group">
                <label for="password">Mật khẩu</label>
                <input type="password" name="pass">
            </div>

            <div class="form__group">
                <label for="email">Email</label>
                <input type="text" name="email">
            </div>

            <div class="form__group">
                <label for="address">Địa chỉ</label>
                <input type="text" name="address">
            </div>

            <div class="form__group">
                <label for="tel">Số điện thoại</label>
                <input type="text" name="tel">
            </div>

            <div class="form__group">
                <label for="type">Vai trò</label>
                <select name="role">
                    <option value="0">Khách hàng</option>
                    <option value="1">Admin</option>
                </select>
            </div>

            <div class="form__action">
                <input type="submit" value="Thêm mới" name="add">
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