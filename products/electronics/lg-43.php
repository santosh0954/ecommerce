<?php
include("../includes/header.php");
if (isset($_POST['add-to-cart'])) {
  if(!empty($_SESSION['email'])){
    $email = $_SESSION['email'];
  }else {
    $email = "";
  }
    $title = $_POST['title'];
    $img_src = $_POST['img-src'];
    $price = $_POST['d-price'];
    $o_price = $_POST['o-price'];
    $qnt = $_POST['qnt'];
    $sql = "INSERT INTO cart (title,price,email,o_price,qnt,img_src) VALUES('$title',$price,'$email',$o_price,$qnt,'$img_src')";
    if($con->query($sql)) {
      $error= 'inserted successfully';
    }else {
      $error='not working'. $con->error;
    }
}

?>

<div class="container-fluid bg-white border border-muted rounded py-3">
  <div class="row">
    <div class="col-4">
      <div class="card">
          <div class='h-5 text-center p-5'>
      <img src="../../images/new-launch/product7.jpeg" alt=" redmi">
</div>
        <div class="card-footer text-center">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" id="add">
              <input type="hidden" value="lg 43" name="title">
              <input type="hidden" value="images/new-launch/product7.jpeg" name="img-src">
              <input type="hidden" value="22999" name="o-price">
              <input type="hidden" value="19999" name="d-price">
              <button type="submit" name="add-to-cart" class='btn btn-lg btn-success text-white mr-5'><i class="fa fa-cart-plus"></i> Add to Cart</button>
              <a class='btn btn-lg btn-danger text-white'><i class="fa fa-enery"></i> Buy Now</a>
        </form>
        </div>
      </div>
    </div>
    <div class="col-8 p-5">
        <h2>LG 43 inc TV</h2>
        <p>&#8377;19999 <s class="text-muted">&#8377;22999</s></p>
        <p><input type="number" name="qnt" form="add" value="1"></p>

        <article class="description">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi optio, fuga et consequatur in odit saepe magnam obcaecati, blanditiis iusto dicta, id nemo ducimus molestiae quisquam possimus itaque repellat corrupti.
            Atque omnis, beatae, neque maxime cumque ab ipsa quaerat exercitationem quas blanditiis maiores explicabo dolorem incidunt laborum dolorum! Architecto maxime aspernatur eum distinctio exercitationem nam commodi sed neque praesentium quod.
            Harum aut cumque inventore doloribus qui debitis placeat a laboriosam totam explicabo molestias corrupti expedita incidunt, possimus eos, ipsum atque impedit esse necessitatibus illo quas, illum nobis! Alias, fuga? Sequi.
            Distinctio iste corporis aperiam suscipit sed consectetur cupiditate modi harum sapiente dolorem, a fugit, incidunt qui quas et illo numquam cum? Beatae est voluptatum earum fugiat unde tempora rem placeat.
            Voluptatibus officia deleniti minus accusamus similique sequi labore corporis aspernatur sunt consectetur distinctio necessitatibus aliquam blanditiis excepturi, harum sapiente in quibusdam ullam quis eos autem magni! Enim, sunt ad. Error?</p>
        </article>
    </div>
  </div>

</div>









<?php
include("../includes/footer.php")


?>