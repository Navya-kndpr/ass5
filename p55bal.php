<?php
include 'con_db.php';
if($_POST)
    {
        $acno  =$_POST['acno'];
        $q =mysqli_query($con, "select * from cust WHERE acno = $acno ");
        $row=mysqli_fetch_array($q);
        if($row==0){
            echo '<script>alert("Enter the valid account Number ");window.location="p5withdraw.php"</script>';
        }

    }
?>

<html>
<head>
    <title>Random</title>
    <style type="text/css">
        p {
color:white;
font-size:50px;
position: absolute;
top: 20%;
left: 40%;
transform: translate(-50%, -50%);
}
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body style="background-color: black;color: yellow;">
    <center>
        <form method="post" action="p55depo.php">
    <table border="1" style="text-align:left;">
        <tr>
            <th colspan="2" style="text-align:center;"> Deposit</th>
        </tr>
        <tr>
            <th>Acccount Number</th><th><input type="number" name="acno" readonly="" value="<?php echo $acno?>"></th>
        </tr>
        <tr>
            <th>Balance</th><th><input type="number" name="amt" readonly="" value="<?php echo $row['bal']?>"></th>
        </tr> 
        <tr>
            <th colspan="3" style="text-align:center"><a href="p55.php" class="btn btn-dark">Back</a></th>
        </tr> 
    </table>
</form>
    </center>
</body>
</html>
