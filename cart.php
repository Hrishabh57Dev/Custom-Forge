<?php
    if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
 <?php
        
        if(!isset($_SESSION['customer']) && empty($_SESSION['customer']) )
        {
            header('location:login.php');
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="./styles/cart.css">
</head>
<body>
    <?php 
    include 'navigation.php';
    include 'connect_database.php';//$database  
    
    ?>

   
    <div class="main_cart">
        <?php
            if(empty($_SESSION['cabinet_full_name']))
            {
                echo '<h1>Cart is Empty</h1>';
            }
            else
            {
            echo $_SESSION['cpu_cooler_full_name'];
            
            }

        ?>
        <table class="order-table">
            
            <tr>
                <th>PRODUCTS</th>
                <th>PRODUCT DESCRIPTION</th>
                <th>PRICE</th>
            </tr>
            <tr>
                <td data-th="PRODUCTS">Cabinet</td>
                <td data-th="PRODUCT DESCRIPTION"><?php echo $_SESSION["cabinet_full_name"]; ?></td>
                <td data-th="PRICE">
                    <?php 
                        $var=$_SESSION["cabinet_full_name"];
                        $sql='select price from cabinet where full_name="$var"';
                        $res=mysqli_query($database, $sql);
                    ?>
                </td>
            </tr>
            <tr>
                <td data-th="PRODUCTS">CPU</td>
                <td data-th="PRODUCT DESCRIPTION"><?php echo $_SESSION["cpu_full_name"]; ?>td>
                <td data-th="PRICE">
                    <?php 
                        
                    ?>
                </td>
            </tr>
            <tr>
                <td data-th="PRODUCTS">GPU</td>
                <td data-th="PRODUCT DESCRIPTION"><?php echo $_SESSION["gpu_full_name"]; ?></td>
                <td data-th="PRICE">
                    <?php 
                        
                    ?>
                </td>
            </tr>
            <tr>
                <td data-th="PRODUCTS">Ram</td>
                <td data-th="PRODUCT DESCRIPTION"><?php echo $_SESSION["ram_full_name"]; ?></td>
                <td data-th="PRICE">
                    <?php 
                        
                    ?>
                </td>
            </tr>
            <tr>
                <td data-th="PRODUCTS">Motherboard</td>
                <td data-th="PRODUCT DESCRIPTION"><?php echo $_SESSION["mb_full_name"]; ?></td>
                <td data-th="PRICE">
                    <?php 
                        
                    ?>
                </td>
            </tr>
            <tr>
                <td data-th="PRODUCTS">SSD</td>
                <td data-th="PRODUCT DESCRIPTION"><?php echo $_SESSION["ssd_full_name"]; ?></td>
                <td data-th="PRICE">
                    <?php 
                        
                    ?>
                </td>
            </tr>
            <tr>
                <td data-th="PRODUCTS">HDD</td>
                <td data-th="PRODUCT DESCRIPTION"><?php echo $_SESSION["hdd_full_name"]; ?></td>
                <td data-th="PRICE">
                    <?php 
                        
                    ?>
                </td>
            </tr>
            <tr>
                <td data-th="PRODUCTS">Power Supply</td>
                <td data-th="PRODUCT DESCRIPTION"><?php echo $_SESSION["ps_full_name"]; ?></td>
                <td data-th="PRICE">
                    <?php 
                        
                    ?>
                </td>
            </tr>
            <tr>
                <td data-th="PRODUCTS">Cpu Cooler</td>
                <td data-th="PRODUCT DESCRIPTION"><?php echo $_SESSION["cooler_full_name"]; ?></td>
                <td data-th="PRICE">
                    <?php 
                        
                    ?>
                </td>
            </tr>
        </table>
    </div>
    <?php include 'footer.php' ?>
</body>
</html>