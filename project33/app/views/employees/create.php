<form class="container" action="/employees/store" method="post">
    <div class="detail-container">
        <div class="d-flex">
            <div class="detail-left">
                <img src="http://pa1.aminoapps.com/6394/206db3e5a964e23f5e15d5846df12949d9babe54_00.gif" alt="image">
                <input type="text" id="name" name="name" class="form-control mt-3"></input>
            </div>
            <div class="detail-right">
                <div class="detail-list">
                    <div class="detail-item">
                        <label for="id" class="form-label">
                            <h6>ID:</h6>
                        </label>
                        <input type="text" id="id" name="id" class="form-control"></input>
                    </div>
                    <div class="detail-item">
                        <label for="address" class="form-label">
                            <h6>Địa chỉ:</h6>
                        </label>
                        <input type="text" id="address" name="address" class="form-control">
                        </input>
                    </div>
                    <div class="detail-item">
                        <label for="email" class="form-label">
                            <h6>Email:</h6>
                        </label>
                        <input class="form-control" id="email" type="email" name="email">
                        </input>
                    </div>
                    <div class="detail-item">
                        <label for="phone" class="form-label">
                            <h6>Số điện thoại:</h6>
                        </label>
                        <input id="phone" type="text" class="form-control" name="phone">
                        </input>
                    </div>
                    <div class="detail-item">
                        <label for="position" class="form-label">
                            <h6>Chức vụ:</h6>
                        </label>
                        <input type="text" class="form-control" id="position" name="position">
                        </input>
                    </div>
                    <div class="detail-item">
                        <label for="department" class="form-label">
                            <h6>Bộ phận:</h6>
                        </label>
                        <select class="form-control" id="department" name="department">
                            <?php foreach ($departments as $department) : ?>
                                <option value="<?= $department->getDepartmentID();
                                                ?>">

                                    <?php echo $department->getDepartmentName(); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="detail-item">
                        <label for="username" class="form-label">
                            <h6>Tài khoản:</h6>
                        </label>
                        <input type="text" class="form-control" id="username" name="username">
                        </input>
                    </div>
                    <div class="detail-item">
                        <label for="password" class="form-label">
                            <h6>Mật khẩu:</h6>
                        </label>
                        <input type="text" class="form-control" id="password" name="password">
                        </input>
                    </div>
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary px-4">Xác nhận</button>
                </div>
            </div>
        </div>
    </div>
</form>