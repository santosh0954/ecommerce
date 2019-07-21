<?php
include('includes/header.php');
$q = "SELECT * FROM men";
$result = mysqli_query($con, $q);
?>
    <div class="container-fluid bg-white border border-muted rounded py-3">
        <div class="row">
            <div class="col-md-3 sidebar">
                <?php
                include('includes/sidebar.php')
                ?>

            </div>
            <div class="col-md-9">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" area-current='page'>Men</li>
                </ul>
                <div class="container-fluid">
                    <div class="row p-3">
                        <?php 
                       
                        while($row = mysqli_fetch_assoc($result)) :
                        ?>
                        <div class="col-md-3 mb-4 text-center">
                            <a href="<?=$row['link'] ?>">
                                <div class="product-img"><img src="<?=$row['img_src'] ?>" alt="<?=$row['name'] ?>" class="" /></div>
                                <h6><?=$row['name'] ?></h6>
                                <p class="list-price text-danger">List price: <s>&#8377;<?=$row['o-price'] ?></s></p>
                                <p class="price">Our Price: &#8377;<?=$row['d-price'] ?></p>
                            </a>
                        </div>
                        <?php endwhile; ?>
                </div><!-----container for row---->
        <ul class="pagination justify-content-center my-3">
            <li class="page-item disabled"><a href="" class="page-link">Prev</a></li>
            <li class="page-item bg-success active"><a href="" class="page-link bg-success">1</a></li>
            <li class="page-item"><a href="" class="page-link">2</a></li>
            <li class="page-item"><a href="" class="page-link">3</a></li>
            <li class="page-item"><a href="" class="page-link">.</a></li>
            <li class="page-item"><a href="" class="page-link">Next</a></li>
        </ul>
                

            </div>



        </div>
        <!---------outer row for product--------->
    </div>
    <!--------------------- container for all -------------------->
</main>
<?php
include('includes/footer.php')
?>
