<form class="form" action="<?= DIR ?>loginAdmin" method="post" >
	<input type="hidden" name="token" value="<?= $token; ?>" />
    <input type="text" placeholder="Tên đăng nhập" name="username" />
    <input type="password" placeholder="Mật khẩu" name="password" />
    <button type="submit" class='btn-submit'>Đăng nhập</button>
    <span class="error"><?= $message ?></span>
    <!-- <a href="#"> <p> Don't have an account? Register </p></a> -->
</form>