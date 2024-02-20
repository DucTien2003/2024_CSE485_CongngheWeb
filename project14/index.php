<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./project14/style.css">
    <title>Document</title>
</head>

<body>
    <?php
    $countries = [
        "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla",
        "Antigua & Barbuda",
        "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan",
        "Bahamas", "Bahrain",
        "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin",
        "Bermuda", "Bhutan",
        "Bolivia", "Bosnia & Herzegovina", "Botswana", "Brazil",
        "British Virgin Islands", "Brunei",
        "Bulgaria", "Burkina Faso", "Burundi", "Vietnam"
    ];
    $gender = ["Male", "Female", "Other"]
    ?>
    <div class="home p-5">
        <h2 class="title">Basic info</h2>
        <div class="form p-5">
            <div class="form-item">
                <h4 class="label">Employee ID:</h4>
                <h4>2003</h4>
            </div>
            <div class="form-item">
                <h4 class="label">
                    <label for="first-name">First name:</label>
                </h4>
                <input type="text" id="first-name">
            </div>
            <div class="form-item">
                <h4 class="label"><label for="last-name">Last name:</label></h4>
                <input type="text" id="last-name">
            </div>
            <div class="form-item">
                <h4 class="label">Gender:</h4>
                <div class="d-flex">
                    <?php
                    foreach ($gender as $item) {
                        echo "<div class='d-flex align-items-center pe-5'>
                        <input type='radio' id='$item' name='gender' value='value'>
                        <label for='$item'>$item</label>
                        </div>";
                    }
                    ?>
                </div>
            </div>
            <div class="form-item">
                <h4 class="label"><label for="title">Title:</label></h4>
                <input type="text" id="title">
            </div>
            <div class="form-item">
                <h4 class="label"><label for="suffix">Suffix:</label></h4>
                <input type="text" id="suffix">
            </div>
            <div class="form-item">
                <h4 class="label"><label for="birthday">BirthDate</label></h4>
                <input type="date" id="birthday">
            </div>
            <div class="form-item">
                <h4 class="label"><label for="hireday">HireDate</label></h4>
                <input type="date" id="hireday">
            </div>
            <div class="form-item">
                <h4 class="label"><label for="reports">Reports to</label></h4>
                <select name="cars" id="reports">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                </select>
            </div>
        </div>
    </div>

</body>

</html>