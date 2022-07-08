<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product</title>



    <!-- Jquery/Bootstrap/Font-Awesome -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/d6a8902b29.js" crossorigin="anonymous"></script>
    <!-- Jquery/Bootstrap/Font-Awesome -->

    <!-- Scripts -->
    <!-- Scripts -->

    <!-- css -->
        <link rel="stylesheet" href="css/add-product.css">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <!-- css -->

</head>

<body>

        <div class="contain-form">
            <form action="add-new-product.php" method="post" enctype="multipart/form-data"> 
                    <p>Login Password</p>

                    <input type="password" name="passwordphp1" class="form-control" placeholder="First Password">
                    <input type="password" name="passwordphp2" class="form-control" placeholder="Second Password">
                    <div class="buttons-brands">
                        <button type="submit" name="enterpassword" class="btn btn-primary btn-block tehbutton">Enter Password</button>
                    </div>
            </form>
        </div>


<?php 

if (isset($_POST['enterpassword'])) {

            $passwordonphp1 = $_POST ['passwordphp1'];
            $passwordonphp2 = $_POST ['passwordphp2'];
            if ($passwordonphp1 == "wow123" && $passwordonphp2 == "123wow"){
                
                echo '
                <div class="container-form">
                    <form action="add-new-product.php" method="post" enctype="multipart/form-data">
                        <p><br>Shoe Name?</p>
                        <input type="text" name="productname" class="form-control">
                        <p><br>What Brand?</p> 
                        <div class="buttons-brands">
                            <button type="button" class="btn btn-primary adiddas">Adidas</button>
                            <button type="button" class="btn btn-secondary nike">Nike</button>
                            <button type="button" class="btn btn-success converse">Converse</button>
                            <button type="button" class="btn btn-danger puma">Puma</button>
                        </div>
                
                            <br>
                        <input name="productbrand" value="Select-brand" class="form-control" type="text" id="product-brand-select" placeholder="Readonly input here…" readonly>
                        
                
                        <p><br>Shoe Price</p>
                            <input type="number" name="productprice" class="form-control">
                
                        <p><br>Shopee Link</p>
                            <input type="text" name="productshopee" class="form-control">
                
                        <p><br>Lazada Link</p>
                            <input type="text" name="productlazada" class="form-control">
                
                        <p><br>Product Image <br>(make sure its 1:1 aspect ratio)</p>
                            <input type="file" name="productimage">
                        <br>
                
                        <div class="buttons-brands">
                            <button type="submit" name="uploadproduct" class="btn btn-primary btn-block">Upload Product</button>
                        </div>
                    </form>
                </div>

                <script> let anpIndex = 1;</script>
                
                ';
            } else { echo "<script> alert('Wrong Password!!! Try again.')</script>";}
        }
?>


<script> 

if (anpIndex == 1){
    $('.contain-form').addClass('hidform')
    };

$('.adiddas').click(function(){
    $('#product-brand-select').val('addidas-brand')
});

$('.puma').click(function(){
    $('#product-brand-select').val('puma-brand')
});

$('.converse').click(function(){
    $('#product-brand-select').val('converse-brand')
});

$('.nike').click(function(){
    $('#product-brand-select').val('nike-brand')
});



</script>

</body>
</html>

<?php 

$consql = mysqli_connect("localhost","root","");
$db = mysqli_select_db($consql,'shoes');

if (isset($_POST['uploadproduct'])) {

    $productbrand = $_POST ['productbrand'];
    $productname = $_POST ['productname'];
    $productprice = $_POST ['productprice'];
    $productshopee = $_POST ['productshopee'];
    $productlazada = $_POST ['productlazada'];
    $productimage = $_FILES['productimage']['name'];

    $query = 
    "INSERT INTO `shoes`(`shoebrand`,`shoename`,`shoeprice`,`shoeshopee`,`shoelazada`,`shoeimage_url`)
            VALUES ('$productbrand','$productname','$productprice','$productshopee','$productlazada','$productimage')";
    $query_run = mysqli_query($consql,$query);


}

?>

