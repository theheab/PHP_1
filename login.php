<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $uname = $_REQUEST['uname'];
    setcookie("uname", $uname, time() + 3600, '/23/testProduct/');
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
</head>
<body>
<div class="container" style="padding-left: 150px;padding-right: 150px;padding-top: 50px">
        <h3>Please Login</h3>
        <form method="post" action="">
            <div class="mb-3">
                <label for="uname" class="form-label">User Name</label>
                <input name="uname" type="text" class="form-control" id="uname">
            </div>
            <div class="mb-3">
                <label for="pword" class="form-label">Password</label>
                <input name="pword" type="password" class="form-control" id="pword">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>