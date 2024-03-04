<div class="col-md-8 border-right">
    <div class="p-3 py-5">
        <form action="<?= $ACCOUNT_URL . '/edit-infor.php' ?>" method="post">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="text-right">Hồ sơ của tôi</h4>
            </div>


            <div class="row mt-3">
                <div class="col-md-6">
                    <p>Họ</p>
                    <input type="text" class="form-control" name="last_name" value="<?= $user['last_name'] ?>" required>
                </div>
                <div class="col-md-6">
                    <p>Tên</p>
                    <input type="text" class="form-control" name="first_name" value="<?= $user['first_name'] ?>" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <p>Số điện thoại</p>
                    <input type="text" class="form-control" name="phone" value="<?= $user['phone'] ?>" required>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-12">
                    <p>Email</p>
                    <input type="text" class="form-control" name="email" value="<?= $user['email'] ?>" required>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-12">
                    <p>Địa chỉ cụ thể</p>
                    <input type="text" class="form-control" name="full_address" value="<?= $user['full_address'] ?>" required>
                </div>
            </div>
            <div class="mt-5 text-center">
                <button class="btn btn-primary profile-button" type="submit" name="btn-edit-infor">Lưu thông tin

                </button>
            </div>
        </form>
    </div>
</div>