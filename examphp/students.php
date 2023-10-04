<?php
$host = "127.0.0.1";
$dbname = "php";
$dbuser = "root";
$dbpass = "";

$conn = new mysqli($host,$dbuser,$dbpass,$dbname);
if($conn->connect_error){
    die("Connection refused!");
}

$sql = "select * from students";
$result = $conn->query($sql);
$students= [];
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $students[] = $row;
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</head>
<body>
<?php //include("nav.php"); ?>
<div class="container">
    <h1>Student List</h1>
    <a href="form.php" class="btn btn-primary">Create new student</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Address</th>
            <th scope="col">Telephone</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($students as $item):?>
            <tr>
                <td><?php echo $item["id"] ?></td>
                <td><?php echo $item["name"] ?></td>
                <td><?php echo $item["age"] ?></td>
                <td><?php echo $item["address"] ?></td>
                <td><?php echo $item["telephone"] ?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>
</body>
</html>