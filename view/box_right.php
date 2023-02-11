<div class="box-right ">
  <?php
  if(isset($_SESSION['user'])){
    extract($_SESSION['user']);
  ?>
    <div class="row mb">
      <div class="box-title">Tài khoản</div>
      <div class="box-content form-login">
        <form action="#">
          <div class="row mb10">
            Tên đăng nhập: <?= $user; ?>
          </div>
        </form>

        <?php
          if($role == 1){
        ?>
        <li><a href="./admin">Đăng nhập admin</a></li>
        <?php }?>
        <li><a href="index.php?act=logout">Đăng xuất</a></li>
      </div>
    </div>
    
    <?php
    }else{
  ?>
  <form action="index.php?act=login" method="POST" class="row mb">
    <div class="box-title">Tài khoản</div>
    <div class="box-content form-login">
      <form action="#">
        <div class="row mb10">
          Tên đăng nhập <br>
          <input type="text" name="user">
        </div>
        <div class="row mb10">
          Mật khẩu
          <input type="password" name="password">
        </div>
        <div class="row mb10">
          <input type="checkbox" name="check" id="">
          Ghi nhớ tài khoản
          <input type="submit" name="login" value="Đăng nhập">
        </div>
      </form>
      <li><a href="#">Đăng kí thành viên</a></li>
      <li><a href="#">Quên mật khẩu</a></li>
    </div>
  </form>
  <?php }?>
  
  <div class="row mb">
    <div class="box-title">Danh mục</div>
    <div class="box-content-2 menu-top">
      <ul>

        <?php for ($i = 0; $i < count($dsdm); $i++) {
          $name = $dsdm[$i]['name'];

        ?>

          <li>
            <a href="#">
              <?= $name ?>
            </a>
          </li>

        <?php } ?>
      </ul>
    </div>
    <div class="box-footer box-search">
      <form action="#">
        <input type="text" placeholder="Từ khóa tìm kiếm">
      </form>
    </div>
  </div>
  <div class="row">
    <div class="box-title">Top 10 yêu thích</div>
    <div class=" row box-content">

      <?php for ($i = 0; $i < count($dstop10); $i++) {
        $name = $dstop10[$i]['name'];
        $name_image = $dstop10[$i]["img"];
        $image = $image_path . $name_image;
      ?>

        <div class="row mb10 top10">
          <img src="<?= $image ?> " alt="">
          <a href="#">
            <?= $name ?>
          </a>
        </div>

      <?php } ?>
    </div>
  </div>
</div>