<?php
include('includes/header.php');



?>
    <div class="container-fluid mb-5 pb-5 mt-4">
    <?php if(!empty($_SESSION['email'])) { ?>
        <div class="row">
            <div class="col-md-8">
                <div class="container">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <h4 class="card-title">MyCart <?php echo $qq;?></h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                            <div class="col-8">
                                                                
                          <?php 
                          $email = $_SESSION['email'];
                          $sql = "SELECT * FROM cart WHERE email = '$email';";
                          $total = "SELECT SUM(price) as sum FROM cart WHERE email = '$email';";
                         
                          $result = mysqli_query($con, $sql);
                          $totals =mysqli_query($con, $total);
                          
                          while($row = mysqli_fetch_assoc($result)) { 
                            $title = $row['title'];
                            $price = $row['price'];
                            $o_price = $row['o_price'];
                            $qnt = $row['qnt'];
                            $imgsrc = $row['img_src'];  
                            ?>
                            <div class="row py-2">
                                <div class="col-4">
                                    <div class="text-center">
                                        <div class="product-img"><img src="<?php echo $imgsrc; ?>" alt="<?php echo $title; ?>" /></div>
                                        <form action="" class="form-inline">
                                            <div class="input-group input-group-sm px-4">
                                                <div class="input-group-prepend"><button type="button" class="btn btn-success" id="minus">&#8722;</button></div>
                                                <input type="text" name="qnt" id="cart-qnt" value="<?php echo $qnt; ?>" class="form-control text-center">
                                                <div class="input-group-append"><button type="button" class="btn btn-success" id="plus">&#43;</button></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-8 p-3 pl-5">
                                    <h5 class="text-uppercase"><?php echo $title ?></h5>
                                    <p>&#8377;<?php echo $price; ?> <s class="text-muted">&#8377;<?php echo $o_price; ?></s></p>
                                    <p><span class=" align-top">Color</span> 
                                        <a href=""><span class="pcolor c-1"></span></a>
                                        <a href=""><span class="pcolor c-2"></span></a>
                                        <a href=""><span class="pcolor c-3"></span></a>
                                    </p>
                                    <p><a class="card-link btn btn-default border" href="#">Add for letter</a><a class="card-link btn btn-dark" href="#">Remove</a></p>
                                </div>
                            </div>
                          <?php } ?>
                          </div>
                                <div class="col-4 p-3">
                                     <p>Delivery by, Sun Jun 16 | Free<s>₹40</s></p>
                                    <small class="text-muted">10 Days Replacement Policy</small>
                                </div>
                            </div>
                            <!----------row---------->
                          </div>
                        <!-------card body----------->
                        <div class="card-footer text-right ">
                            <a href="index.php" class="btn btn-danger text-white mr-2"><i class="fa fa-angle-left mr-1"></i> Continue Shopping</a>
                            <button type="button" class="btn btn-success">Place Order</button>
                        </div><!----card footer-------->
                    </div>
                    <!----card------->
                </div>
                <!-----------container card----------->
            </div>
            <div class="col-md-4">
                <div class="container">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <h5 class="card-title">Price</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                <span>Product Price:</span>
                                <span class="float-right">&#8377;<?php if($p_total = mysqli_fetch_assoc($totals)) {
                                    echo $p_total['sum'];
                                }
                                
                                ?></span>
                            </p>
                            <p class="card-text">
                                <span>Delivery Charge:</span>
                                <span class="float-right text-success">Free</span>
                            </p>
                            <hr>
                            <p class="card-text">
                                <strong>Total</strong>
                                <span class="float-right">&#8377;<?php  echo $p_total['sum']; ?></span>
                            </p>
                            <hr>
                            <p>
                                <span>You Saved:</span>
                                <span class="float-right text-danger">&#8377;<?php 
                                $sql = "SELECT sum(o-price) as sum FROM cart WHERE email = '$email'";
                                 $o_totals = mysqli_query($con, $sql);
                                if($o_total = mysqli_fetch_assoc($o_totals)) {
                                    echo $o_total['sum'];
                                }
                                 echo ($p_total['sum'] - o_total['sum']) ?></span>
                            </p>
                        </div>
                    </div>
                    <div class="text-secondary p-3">
                    <i class="fa fa-shield font-weight-bold align-bottom mr-1" style="font-size: 1.5rem;"></i> 
                    Safe and Secure Payments. Easy returns. 100% Authentic products.
                    </div>
                </div>
            </div>


    </div><?php } else { ?>
        <!---------row--------->
            <div class="container text-center bg-white border rounded p-5">
                <p class="display-4">Cart is empty</p>
                <img src="images/empty-cart.png" alt="cart empty" width="200px">
            </div>
    <?php } ?>
    </div>
    <!----------container fluid in main tag ---------->


</main>
<?php
include('includes/footer.php');
?>