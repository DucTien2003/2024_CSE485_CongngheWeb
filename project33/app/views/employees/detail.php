<form class="container" action="/employees/update" method="post">
    <div class="detail-container">
        <div class="d-flex">
            <div class="detail-left">
                <img src="<?= $employee->getAvatar() ?>" alt="image">
                <input type="text" id="name" value="<?= $employee->getFullName() ?>" name="name" class="form-control mt-3"></input>
                <a href="/employees/delete?id=<?= $employee->getEmployeeID() ?>">
                    <button type="button" class="btn btn-danger">Xóa tài khoản</button>
                </a>
            </div>
            <div class="detail-right">
                <div class="detail-list">
                    <div class="detail-item">
                        <label for="id" class="form-label">
                            <h6>ID:</h6>
                        </label>
                        <input type="text" id="id" value="<?= $employee->getEmployeeID() ?>" name="id" class="form-control"></input>
                    </div>
                    <div class="detail-item">
                        <label for="address" class="form-label">
                            <h6>Địa chỉ:</h6>
                        </label>
                        <input type="text" id="address" value="<?= $employee->getAddress() ?>" name="address" class="form-control">
                        </input>
                    </div>
                    <div class="detail-item">
                        <label for="email" class="form-label">
                            <h6>Email:</h6>
                        </label>
                        <input class="form-control" id="email" type="email" value="<?= $employee->getEmail() ?>" name="email">
                        </input>
                    </div>
                    <div class="detail-item">
                        <label for="phone" class="form-label">
                            <h6>Số điện thoại:</h6>
                        </label>
                        <input id="phone" type="text" class="form-control" value="<?= $employee->getMobilePhone() ?>" name="phone">
                        </input>
                    </div>
                    <div class="detail-item">
                        <label for="position" class="form-label">
                            <h6>Chức vụ:</h6>
                        </label>
                        <input type="text" class="form-control" id="position" value="<?= $employee->getPosition() ?>" name="position">
                        </input>
                    </div>
                    <div class="detail-item">
                        <label for="department" class="form-label">
                            <h6>Bộ phận:</h6>
                        </label>
                        <select class="form-control" id="department" name="department">
                            <?php foreach ($departments as $departmentItem) : ?>
                                <option value="<?= $departmentItem->getDepartmentID();
                                                ?>" <?= $departmentItem->getDepartmentID() == $employee->getDepartmentID() ? "selected" : ""; ?>>
                                    <?php echo $departmentItem->getDepartmentName(); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="detail-item">
                        <label for="username" class="form-label">
                            <h6>Tài khoản:</h6>
                        </label>
                        <input type="text" class="form-control" id="username" value="<?= $user->getUsername() ?>" name="username">
                        </input>
                    </div>
                    <div class="detail-item">
                        <label for="password" class="form-label">
                            <h6>Mật khẩu:</h6>
                        </label>
                        <input type="text" class="form-control" id="password" value="<?= $user->getPassword() ?>" name="password">
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