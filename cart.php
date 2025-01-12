<?php
include("headerlink.php");
include("headernav.php");

//   include("function.php");
?>

<div class="col-md-12 my-5 tect-center">
    <div class="rounded h-100 p-4 alluser">
        <h2 class="mb-4 text-light fs-5 fw-5 text-center" style="font-weight: bold;">Your Shopping Cart</h2>

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover w-100" id="example">
                <thead>
                    <tr class="tablec text-light">
                        <th>SL</th>

                        <th>Food Name</th>
                        <th>Image</th>
                        <th>Price</th>

                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Cancle</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $alldata = getAllCart();
                    $total = 0;
                    if (isset($alldata)) {
                        foreach ($alldata as $key => $data) {
                            $fid[]=$data['f_id'];
                            $total = $total + $data['total_price'];
                    ?>
                            <tr>
                                <td class="text-light"><?php echo ($key + 1); ?></td>


                                <td class="text-light"><?php echo $data['food_name']; ?></td>
                                <td><img src="assets/food_img/<?php echo $data['image'] != '' ? $data['image'] : 'no-img.jpg'; ?>" alt=" " style="height:50px;" id="view_profile_pic"></td>
                                <td class="text-light"><?php echo $data['price']; ?></td>
                                <td class="text-light"><?php echo $data['quantity']; ?></td>
                                <td class="text-light"><?php echo $data['total_price']; ?></td>


                                <td>
                                    <!-- <a href="edit_burger.php?uid=<?php echo base64_encode($data['c_id']); ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a> -->
                                    <a href="delete_cart.php?uid=<?php echo $data['c_id']; ?>" class="btn btn-sm btn-danger delete_btn"><i class="fa fa-trash"></i></a>
                                </td>

                            </tr>
                    <?php
                        }
                    } else {
                        echo "<tr><td colspan='4' class='text-center'>No Record Found...</td></tr>";
                    }

                    ?>
                </tbody>
            </table>

        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            
            <h2> Total:<?php echo $total; ?></h2>
        </div>
        <div class="col-md-6">
            <?php $f_id=implode(',',$fid)?>
            <a href="cart_order.php?uid=<?php echo $data['f_id']; ?>&f_id=<?php echo $f_id;?>" class="btn btn-outline-warning py-1 px-4 now" name="orderbtn" style="width: 20%;">Order</a>

        </div>
    </div>
</div>
<!-- modal -->

<?php
//include("footer.php");
include("footerlink.php");
?>