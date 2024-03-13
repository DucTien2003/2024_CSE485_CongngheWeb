<form class="container" action="/departments/store" method="post">
    <div class="detail-container">
        <div class="d-flex">
            <div class="detail-left">
                <img src="http://img1.wikia.nocookie.net/__cb20120818103631/crayonshin-chan/images/thumb/e/e9/Hima.png/180px-Hima.png" alt="image">
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
                        <label for="website" class="form-label">
                            <h6>Website:</h6>
                        </label>
                        <input type="text" class="form-control" id="website" name="website">
                        </input>
                    </div>
                    <div class="detail-item">
                        <label for="department" class="form-label">
                            <h6>Bộ phận:</h6>
                        </label>
                        <select class="form-control" id="department" name="department">
                            <?php foreach ($departments as $departmentItem) : ?>
                                <option value="<?= $departmentItem->getDepartmentID();
                                                ?>">
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