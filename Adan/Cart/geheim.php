<?php
session_start();
if(!isset($_SESSION['userid'])) {
    die('Bitte zuerst <a href="login.php">einloggen</a>');
}
 
//Abfrage der Nutzer ID vom Login
$userid = $_SESSION['userid']; 
echo "Hallo User: ".$userid;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <p>
        <a href="logout.php" class="btn btn-danger ml-3">Abmelden</a>
    </p>
    <?php 
    session_start();
    require_once('./inc/config.php');    
    require_once('./inc/helpers.php');  

    $sql = "SELECT p.*,pdi.img from products p
                    INNER JOIN product_images pdi ON pdi.product_id = p.id
                    WHERE pdi.is_featured = 1";
    $handle = $db->prepare($sql);
    $handle->execute();
    $getAllProducts = $handle->fetchAll(PDO::FETCH_ASSOC);

    $pageTitle = 'Adan Electroshop';
	$metaDesc = 'Demo PHP shopping cart get products from database';
    include('layouts/header.php');
?>
    <div class="row">
        <?php
        foreach($getAllProducts as $product)
        {
            $imgUrl = PRODUCT_IMG_URL.str_replace(' ','-',strtolower($product['product_name']))."/".$product['img'];
        ?>
            <div class="col-md-3  mt-2">
                <div class="card">
                     <a href="single-product.php?product=<?php echo $product['id']?>">
                        <img class="card-img-top" src="<?php echo $imgUrl ?>" alt="<?php echo $product['product_name'] ?>">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="single-product.php?product=<?php echo $product['id'] ?>">
                                <?php echo $product['product_name']; ?>
                            </a>
                        </h5>
                        <strong>$ <?php echo $product['price']?></strong>

                        <p class="card-t">
                            <?php echo substr($product['short_description'],0,50) ?>'...
                        </p>
                        <p class="card-text">
                            <a href="single-product.php?product=<?php echo $product['id']?>" class="btn btn-primary btn-sm">
                                View
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        <?php 
        }
        ?>
    </div>
<?php include('layouts/footer.php');?>
</body>
</html>
