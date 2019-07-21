<?php
include('includes/header.php');

?>


  <div id="curasel-container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/banner/banner1.jpg" class="img-fluid" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/banner/banner11.jpg" class="img-fluid" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/banner/banner3.jpg" class="img-fluid" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/banner/banner17.jpg" class="img-fluid" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/banner/banner5.jpg" class="img-fluid" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/banner/banner6.jpg" class="img-fluid" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/banner/banner7.jpg" class="img-fluid" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/banner/banner8.jpg" class="img-fluid" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/banner/banner9.jpg" class="img-fluid" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only" id="slider">Next</span>
      </a>
    </div>
    <!--         end carousel -->
  </div>
  <!----------This is deals of the day-------------->

  <div class="product deals-of-day container-fluid p-0">
    <div class="p-header row p-3 mx-auto">
      <div class="p-titel col-md-10">
        <h3>Deals of the Day</h3>
      </div>
      <div class="col-md-2 text-right">
        <a href="#" class="btn btn-success text-bold" role="button">View all</a>
      </div>
    </div>
    <!--header-->
    <div class="row m-auto p-slider p-4">
      <?php 
      $d_q = "SELECT * FROM dealsOfDay";
      $d_r = mysqli_query($con, $d_q);
        while($row = mysqli_fetch_assoc($d_r)) : 
      ?>
      <div class="col-sm-6 col-md-4 col-lg-2 text-center">
        <a href="<?=$row['link'] ?>">
          <div class="product-img"><img src="<?=$row['img-src']; ?>" alt="<?= $row['name']; ?>" class="" /></div>
          <h6><?= $row['name'] ?></h6>
          <p class="list-price text-danger">List price: <s>&#8377;<?=$row['o-price']; ?></s></p>
          <p class="price">Our Price: &#8377;<?= $row['d-price']; ?></p>
        </a>
      </div>
<?php endwhile; ?>
    </div>
  </div>
  <!---product slider end-->
  </div>
  <!---------This is first offer section----------------->

  <div class="container-fluid p-0 offer">
    <div class="row mx-auto no-gutters">
      <div class="col-md-4">
        <a href="#"><img src="images/offer/offer1.jpg" alt="offer" class="img-fluid" /></a>
      </div>
      <div class="col-md-4">
        <a href="#"><img src="images/offer/offer2.jpg" alt="offer" class="img-fluid" /></a>
      </div>
      <div class="col-md-4">
        <a href="#"><img src="images/offer/offer3.jpg" alt="offer" class="img-fluid" /></a>
      </div>
      
    </div>
    <div class="row mx-auto no-gutters">
      <div class="col-md-4">
        <a href="#"><img src="images/offer/offer4.jpg" alt="offer" class="img-fluid" /></a>
      </div>
      <div class="col-md-4">
        <a href="#"><img src="images/offer/offer5.jpg" alt="offer" class="img-fluid" /></a>
      </div>
      <div class="col-md-4">
        <a href="#"><img src="images/offer/offer6.jpg" alt="offer" class="img-fluid" /></a>
      </div>
    </div>

    <!---product slider end-->
  </div>
  <!-------------this is  Trending offer secton----------------->

  <div class="product tranding-offers container-fluid p-0">
    <div class="p-header row p-3 mx-auto">
      <div class="p-titel col-md-10">
        <h3>Trending Offers</h3>
      </div>
      <div class="col-md-2 text-right">
        <a href="#" class="btn btn-success  text-bold" role="button">View all</a>
      </div>
    </div>
    <!--header-->
    <div class="p-slider">
      <div class="row m-auto p-slider p-4">
        <div class="col-sm-6 col-md-4 col-lg-2 text-center">
          <a href="#">
            <div class="product-img"><img src="images/trending/bottle.jpeg" alt="bottle" class="" /></div>
            <p class="list-price text-danger">List price: <s>&#8377;130</s></p>
            <p class="price">Our Price: &#8377;99</p>
          </a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 text-center">
          <a href="#">
            <div class="product-img"><img src="images/trending/speaker.jpg" alt="speaker" /></div>
            <h6>JBL speaker</h6>
            <p class="list-price text-danger">List price: <s>&#8377;2999</s></p>
            <p class="price">Our Price: &#8377;1999</p>
          </a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 text-center">
          <a href="#">
            <div class="product-img"><img src="images/trending/shoes.jpeg" alt="shoes" /></div>
            <h6>Casual Shoes</h6>
            <p class="list-price text-danger">List price: <s>&#8377;1699</s></p>
            <p class="price">Our Price: &#8377;1399</p>
          </a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 text-center">
          <a href="#">
            <div class="product-img"><img src="images/trending/miband.jpeg" alt="miband" /></div>
            <h6>Mi band 3</h6>
            <p class="list-price text-danger">List price: <s>&#8377;1999</s></p>
            <p class="price">Our Price: &#8377;1299</p>
          </a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 text-center">
          <a href="#">
            <div class="product-img"><img src="images/trending/keychain.jpeg" alt="keychain" /></div>
            <h6>Keychain</h6>
            <p class="list-price text-danger">List price: <s>&#8377;169</s></p>
            <p class="price">Our Price: &#8377;99</p>
          </a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 text-center">
          <a href="#">
            <div class="product-img"><img src="images/trending/memmorycard.jpeg" alt="memmorycard" /></div>
            <h6>Samsung class 10</h6>
            <p class="list-price text-danger">List price: <s>&#8377;399</s></p>
            <p class="price">Our Price: &#8377;349</p>
          </a>
        </div>
      </div>
    </div>
    <!---product slider end-->
  </div>
  <!-------- featured product------------>

  <div class="product featured-brand container-fluid p-0">
    <div class="p-header row p-3 m-auto">
      <div class="p-titel col-md-10">
        <h3>Featured Brand</h3>
      </div>
      <div class="col-md-2 text-right">
        <a href="#" class="btn btn-success  text-bold" role="button">View all</a>
      </div>
    </div>
    <div class="row m-auto p-slider p-4">
      <div class="col-sm-6 col-md-4 col-lg-2 text-center">
        <a href="#">
          <div class="product-img"><img src="images/feature/fridge2.jpeg" alt="fridge" class="" /></div>
          <h6>Samsung fridge</h6>
          <p class="list-price text-danger">List price: <s>&#8377;15999</s></p>
          <p class="price">Our Price: &#8377;14999</p>
        </a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-2 text-center">
        <a href="#">
          <div class="product-img"><img src="images/feature/leptop1.jpeg" alt="leptop" /></div>
          <h6>Lenovo i3</h6>
          <p class="list-price text-danger">List price: <s>&#8377;32999</s></p>
          <p class="price">Our Price: &#8377;29999</p>
        </a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-2 text-center">
        <a href="#">
          <div class="product-img"><img src="images/feature/product2.jpeg" alt="shoes" /></div>
          <h6>VU 49inc</h6>
          <p class="list-price text-danger">List price: <s>&#8377;35999</s></p>
          <p class="price">Our Price: &#8377;32999</p>
        </a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-2 text-center">
        <a href="#">
          <div class="product-img"><img src="images/feature/product3.jpeg" alt="tv" /></div>
          <h6>LG smart TV</h6>
          <p class="list-price text-danger">List price: <s>&#8377;29999</s></p>
          <p class="price">Our Price: &#8377;26599</p>
        </a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-2 text-center">
        <a href="#">
          <div class="product-img"><img src="images/feature/punta-superior-series.jpeg" alt="computer" />
          </div>
          <h6>Punta pantium</h6>
          <p class="list-price text-danger">List price: <s>&#8377;26999</s></p>
          <p class="price">Our Price: &#8377;24999</p>
        </a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-2 text-center">
        <a href="#">
          <div class="product-img"><img src="images/feature/washing1.jpeg" alt="washing machine" /></div>
          <h6>Lg semi automatic</h6>
          <p class="list-price text-danger">List price: <s>&#8377;22999</s></p>
          <p class="price">Our Price: &#8377;18999</p>
        </a>
      </div>
    </div>
  </div>
  <!---product slider end-->
  </div>
  <!-------This is second offers section-------------->
  <div class="container-fluid p-0 offer">
    <div class="row mx-auto no-gutters">
      <div class="col-md-4">
        <a href="#"><img src="images/offer/offer7.jpg" alt="offer" class="img-fluid" /></a>
      </div>
      <div class="col-md-4">
        <a href="#"><img src="images/offer/offer8.jpg" alt="offer" class="img-fluid" /></a>
      </div>
      <div class="col-md-4">
        <a href="#"><img src="images/offer/offer9.jpg" alt="offer" class="img-fluid" /></a>
      </div>
    </div>
    <div class="row mx-auto no-gutters">
      <div class="col-md-4">
        <a href="#"><img src="images/offer/offer14.jpg" alt="offer" class="img-fluid" /></a>
      </div>
      <div class="col-md-4">
        <a href="#"><img src="images/offer/offer11.jpg" alt="offer" class="img-fluid" /></a>
      </div>
      <div class="col-md-4">
        <a href="#"><img src="images/offer/offer12.jpg" alt="offer" class="img-fluid" /></a>
      </div>
    </div>
  </div>
  <!---------------This is Best brand section----------------->

  <div class="product brand-best container-fluid p-0">
    <div class="p-header row p-3 mx-auto">
      <div class="p-titel col-md-10">
        <h3>Best Brands on This Price</h3>
      </div>
      <div class="col-md-2 text-right">
        <a href="#" class="btn btn-success  text-bold" role="button">View all</a>
      </div>
    </div>
    <!--header-->
    <div class="p-slider">
      <div class="row m-auto p-slider p-4">
        <div class="col-sm-6 col-md-4 col-lg-2 text-center">
          <a href="#">
            <div class="product-img"><img src="images/best-selling/ac1.jpeg" alt="ac" class="" /></div>
            <h6>Voltas 1.5t</h6>
            <p class="list-price text-danger">List price: <s>&#8377;39999</s></p>
            <p class="price">Our Price: &#8377;37999</p>
          </a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 text-center">
          <a href="#">
            <div class="product-img"><img src="images/best-selling/ac2.jpeg" alt="ac" /></div>
            <h6>Samsung 2t</h6>
            <p class="list-price text-danger">List price: <s>&#8377;42999</s></p>
            <p class="price">Our Price: &#8377;39999</p>
          </a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 text-center">
          <a href="#">
            <div class="product-img"><img src="images/best-selling/product1.jpeg" alt="tv" /></div>
            <h6>Intex 32</h6>
            <p class="list-price text-danger">List price: <s>&#8377;22999</s></p>
            <p class="price">Our Price: &#8377;14999</p>
          </a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 text-center">
          <a href="#">
            <div class="product-img"><img src="images/best-selling/product4.jpeg" alt="tv" /></div>
            <h6>Samsung smart tv 42</h6>
            <p class="list-price text-danger">List price: <s>&#8377;26999</s></p>
            <p class="price">Our Price: &#8377;23999</p>
          </a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 text-center">
          <a href="#">
            <div class="product-img"><img src="images/best-selling/product5.jpeg" alt="tv" /></div>
            <h6>Lg Smart Tv</h6>
            <p class="list-price text-danger">List price: <s>&#8377;17999</s></p>
            <p class="price">Our Price: &#8377;13999</p>
          </a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 text-center">
          <a href="#">
            <div class="product-img"><img src="images/best-selling/guitar1.jpeg" alt="guitar" /></div>
            <h6>Acoustic Guitar</h6>
            <p class="list-price text-danger">List price: <s>&#8377;18999</s></p>
            <p class="price">Our Price: &#8377;11999</p>
          </a>
        </div>
      </div>
    </div>
    <!---product slider end-->
  </div>
  <!-----------------This is limited time offers section---------------->

  <div class="product limited-tm container-fluid p-0">
    <div class="p-header row p-3 mx-auto">
      <div class="p-titel col-md-10">
        <h3>Limited Time Offers</h3>
      </div>
      <div class="col-md-2 text-right">
        <a href="#" class="btn btn-success  text-bold" role="button">View all</a>
      </div>
    </div>
    <!--header-->
    <div class="p-slider">
      <div class="row m-auto p-slider p-4">
        <div class="col-sm-6 col-md-4 col-lg-2 text-center">
          <a href="#">
            <div class="product-img"><img src="images/limited/asus.jpeg" alt="leptop" class="" /></div>
            <h6>Asus i3</h6>
            <p class="list-price text-danger">List price: <s>&#8377;25999</s></p>
            <p class="price">Our Price: &#8377;24999</p>
          </a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 text-center">
          <a href="#">
            <div class="product-img"><img src="images/limited/core-i5.jpg" alt="leptop" /></div>
            <h6>Dell i5</h6>
            <p class="list-price text-danger">List price: <s>&#8377;49999</s></p>
            <p class="price">Our Price: &#8377;33999</p>
          </a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 text-center">
          <a href="#">
            <div class="product-img"><img src="images/limited/gaming-laptops.jpeg" alt="gaming leptop" />
            </div>
            <h6>Predator gaming laptops</h6>
            <p class="list-price text-danger">List price: <s>&#8377;59999</s></p>
            <p class="price">Our Price: &#8377;49999</p>
          </a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 text-center">
          <a href="#">
            <div class="product-img"><img src="images/limited/hp-na-thin.jpeg" alt="leptop" /></div>
            <h6>Hp Spector</h6>
            <p class="list-price text-danger">List price: <s>&#8377;79999</s></p>
            <p class="price">Our Price: &#8377;74999</p>
          </a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 text-center">
          <a href="#">
            <div class="product-img"><img src="images/limited/hp-pantium.jpeg" alt="leptop" /></div>
            <h6>Hp pantium 520</h6>
            <p class="list-price text-danger">List price: <s>&#8377;24999</s></p>
            <p class="price">Our Price: &#8377;21999</p>
          </a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 text-center">
          <a href="#">
            <div class="product-img"><img src="images/limited/lenevo-r5.jpeg" alt="lenevo leptop" /></div>
            <h6>Lenevo r5</h6>
            <p class="list-price text-danger">List price: <s>&#8377;29999</s></p>
            <p class="price">Our Price: &#8377;24999</p>
          </a>
        </div>
      </div>
    </div>
    <!---product slider end-->
  </div>
  <div class="row mx-auto offer no-gutters">
    <div class="col-md-4">
      <a href="#"><img src="images/offer/offer12.jpg" alt="offer" class="img-fluid" /></a>
    </div>
    <div class="col-md-4">
      <a href="#"><img src="images/offer/offer15.jpg" alt="offer" class="img-fluid" /></a>
    </div>
    <div class="col-md-4">
      <a href="#"><img src="images/offer/offer14.jpg" alt="offer" class="img-fluid" /></a>
    </div>
  </div>
</main>
<?php
include('includes/footer.php');
?>