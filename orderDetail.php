<?php
    require_once 'cekLogin.php';
    $user_id = $_SESSION['user']['id'];
    $noOrder = $_GET['id'];
    $id = $_GET['key'];
    $sql = "SELECT grandtotal,discount,address,status from orders where id = $id && user_id = $user_id";
    $query = mysqli_query($con,$sql);
    $n = mysqli_num_rows($query);
    if($n>0){
        $re = mysqli_fetch_assoc($query);
        $gt = $re['grandtotal'];
        $address = $re['address'];
        $disc = $re['discount'];
        $status = $re['status'];
    } else {
        header("location: ".$base_url);
    }
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <title>ORDER - BRAND NAME</title>
</head>
<body>
    <!-- NAVBAR  -->
    <?php
        include 'navbar.php';
    ?>

    <!-- CONTENT -->
    <section class="container my-5" id="main" >
        <h3>Order Detail &nbsp; #<?=$_GET['id'];?></h3>
        <div class="d-flex justify-content-between">
            <span><?=$address;?></span>
            <span>
                Status Pesanan : 
                    <?php
                        switch($status) {
                            case 1:
                                echo '<span class="badge badge-warning">Waiting for payment</span>';
                                break;
                            case 2:
                                echo '<span class="badge badge-primary">On Process</span>';
                                break;
                            case 3:
                                echo '<span class="badge badge-success">Complete Order</span>';
                                break;
                            case 4:
                                echo '<span class="badge badge-danger">Canceled</span>';
                                break;
                        }
                    ?>
            </span>
        </div>
        
        <div class="row my-4">
            <div class="col-md-12">
                <table class="text-center table table-dark table-hover table-striped">
                    <tr>
                        <th>Product</th>
                        <th>Variance</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                    <?php
                        $sql = "SELECT od.*, p.* FROM order_details od JOIN
                        product p on p.id = od.product_id where order_id = $id";
                        $query = mysqli_query($con,$sql);
                        $i = 0;

                        while($re = mysqli_fetch_assoc($query)){
                            $name = $re['name'];
                            $variance = $re['variance'];
                            $quantity = $re['quantity'];
                            $subtotal = $re['subtotal'];
                            $i++;
                            ?>
                    
                        <tr>
                            <td><?=$i.'.&nbsp'.$name;?></td>
                            <td><?=$variance;?></td>
                            <td>x<?=$quantity;?></td>
                            <td><?=number_format($subtotal);?></td>
                        </tr>
                        <?php
                        }
                        if($disc > 0) {
                            echo '<tr>
                                    <td colspan="3">Discount</td>
                                    <td>'.number_format($disc).'</td>
                                </tr>';
                        }
                    ?>
                        <tr>
                            <td colspan="3" style="background-color:whitesmoke;color:black" class="text-right"><strong>Grandtotal</strong></td>
                            <td><?=number_format($gt);?></td>
                        </tr>
                </table>
                <a href="<?=$base_url;?>/myOrder.php"  role="button" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
        </div>
    </section>
    
    <!-- FOOTER -->
    <?php
        include 'footer.php';
    ?>

    <script src="assets/js/script.js"></script>
</body>
</html>