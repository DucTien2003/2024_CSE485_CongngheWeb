<form class="container" action="/departments/update" method="post">
    <div class="detail-container">
        <div class="d-flex">
            <div class="detail-left">
                <img src="<?= $department->getLogo() ?>" alt="image">
                <input type="text" id="name" value="<?= $department->getDepartmentName() ?>" name="name" class="form-control mt-3"></input>
                <a href="/departments/delete?id=<?= $department->getDepartmentID() ?>">
                    <button type="button" class="btn btn-danger">Xóa</button>
                </a>
            </div>
            <div class="detail-right">
                <div class="detail-list">
                    <div class="detail-item">
                        <label for="id" class="form-label">
                            <h6>ID:</h6>
                        </label>
                        <input type="text" id="id" value="<?= $department->getDepartmentID() ?>" name="id" class="form-control"></input>
                    </div>
                    <div class="detail-item">
                        <label for="address" class="form-label">
                            <h6>Địa chỉ:</h6>
                        </label>
                        <input type="text" id="address" value="<?= $department->getAddress() ?>" name="address" class="form-control">
                        </input>
                    </div>
                    <div class="detail-item">
                        <label for="email" class="form-label">
                            <h6>Email:</h6>
                        </label>
                        <input class="form-control" id="email" type="email" value="<?= $department->getEmail() ?>" name="email">
                        </input>
                    </div>
                    <div class="detail-item">
                        <label for="phone" class="form-label">
                            <h6>Số điện thoại:</h6>
                        </label>
                        <input id="phone" type="text" class="form-control" value="<?= $department->getPhone() ?>" name="phone">
                        </input>
                    </div>
                    <div class="detail-item">
                        <label for="website" class="form-label">
                            <h6>Website:</h6>
                        </label>
                        <input type="text" class="form-control" id="website" value="<?= $department->getWebsite() ?>" name="website">
                        </input>
                    </div>
                    <div class="detail-item">
                        <label for="department" class="form-label">
                            <h6>Bộ phận:</h6>
                        </label>
                        <select class="form-control" id="department" name="department">
                            <?php foreach ($departments as $departmentItem) : ?>
                                <option value="<?= $departmentItem->getDepartmentID();
                                                ?>" <?= $departmentItem->getDepartmentID() == $department->getParentDepartmentID() ? "selected" : ""; ?>>
                                    <?php echo $departmentItem->getDepartmentName(); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary px-4">Xác nhận</button>
                </div>
            </div>
        </div>
    </div>
</form>