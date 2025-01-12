
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .quantitty{
            border: 2px solid black;
            border-radius: 10px;
            width: 40%;
            margin-top: 10%;
            margin-left: 32%;
            padding-top: 20px;
            padding-bottom: 20px;
            font-weight: bold;
            font-size: 30px;
            background-color: #fac564;
            /* color: white; */
        }
    </style>
</head>

<body style="background-color: black;">
    <?php
    $fid = $_GET['fid'];
    $price = $_GET['fprice'];


    ?>
    <div class="container">
        
        <div class="row">
             <div class="quantitty">
                <form action="foodQuantityAction.php" method="post" enctype="multipart/form-data" style="text-align: center;">

                    <label class="form">Choose Quantity:</label>
                    <input type="number" name="quantity" value="1" id="quantity" onclick="pricee();" style="height: 20px;"><br><br>
                    <label>Food Price:</label>
                    <input type="number" name="price" value="<?php echo $price ?>" id="price" style="height: 20px;"><br>
                    <input type="hidden" name="id" value="<?php echo $fid ?>" id=""><br>
                    <label>Add Food price:</label>
                    <input type="number" id="totalprice" value="" name="total" style="height: 20px;"><br><br>

                    <button type="submit" style="height: 30px; width:20%; ">OK</button>
                </form>
                </div>
        </div>
    </div>
</body>

<script>
    function pricee() {
        let quantity = parseInt(document.getElementById('quantity').value);
        let price = parseInt(document.getElementById('price').value);
        document.getElementById("totalprice").value = quantity * price;
    }
</script>

</html>