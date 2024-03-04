<div class="col-md-8 border-right">
    <div class="p-3 py-5">
        <form action="<?= $ACCOUNT_URL . '/edit-infor.php' ?>" method="post">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="text-right">Thay đổi mật khẩu</h4>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <p>Nhập lại mật khẩu cũ</p>
                    <input type="password" class="form-control" name="old_password" value="" required>
                </div>
            </div>

            <div class="row mt-3">

                <div class="col-md-12">
                    <p>Nhập mật khẩu mới</p>
                    <input type="password" class="form-control" name="new_password" value="" required>
                </div>
            </div>

            <div class="row mt-3">

                <div class="col-md-12">
                    <p>Nhập lại mật khẩu mới</p>
                    <input type="password" class="form-control" name="pass" value="" required>
                </div>
            </div>

            <div class="mt-5 text-center">
                <button class="btn btn-primary profile-button" type="submit" name="edit-password">Thay đổi mật khẩu

                </button>
            </div>
        </form>
    </div>
</div>