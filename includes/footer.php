<div class="container-fluid to-top text-center p-0 mt-2"><a href="#to-top">Back to Top</a></div>
<footer id="myFooter" class="bg-success text-white pt-4">

  <div class="container">
    <div class="row row-30">
      <div class="col-md-4 col-xl-5">
        <div class="pr-xl-4"><a class="brand" href="index.php"><img class="brand-logo-light" src="images/ecommerce2.png" alt="" width="140" height="auto"></a>
          <p>This is Ecommerce website where you can buy clothes by Categories like Men and Women, and you can
            also buy Electronics such as Mobile, Tv, Fridge, Washing machine etc.</p>
          <!-- Rights-->
          <p class="rights"><span>©  </span>
            <span class="copyright-year"><?php echo date('Y'); ?> </span><span>One deals</span><span>. </span><span>All
              Rights Reserved.</span></p>
        </div>
      </div>
      <div class="col-md-4">
        <h5>Contacts</h5>
        <dl class="contact-list">
          <dt>Address:</dt>
          <dd>Sudamapur, Varanasi, Santosh Jha</dd>
        </dl>
        <dl class="contact-list">
          <dt>Email:</dt>
          <dd><a href="mailto:santosh0954jha@gmail.com" class="text-white">santosh0954jha@gmail.com</a></dd>
        </dl>
        <dl class="contact-list">
          <dt>Phones:</dt>
          <dd><a href="tel:8601261887" class="text-white">+91 8601261887</a> <span>or</span> <a href="tel:8299519708" class="text-white">+91 8299519708</a>
          </dd>
        </dl>
      </div>
      <div class="col-md-4 col-xl-3">
        <h5>Links</h5>
        <ul class="nav-list list-unstyled">
          <li><a href="#" class="text-white">About</a></li>
          <li><a href="#" class="text-white">Help</a></li>
          <li><a href="#" class="text-white">Blog</a></li>
          <li><a href="#" class="text-white">Contacts</a></li>
          <li><a href="#" class="text-white">Pricing</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright ">
    <p class="text-center">© <?php echo date('Y'); ?> Copyright One deals </p>
  </div>
</footer>

<!-----------large model for login ---------------->

<div class="modal fade logIn" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content px-5 pb-5 pt-4">
      <div class="modal-header mb-4 p-0">
        <h2 class="text-success">Log In</h2>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form action="login.php" method="post">
        <div class="form-group">
          <label for="Email1">Email address</label>
          <input type="email" class="form-control" id="Email1" aria-describedby="emailHelp" placeholder="Enter email" name="login_name"
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="Password1">Password</label>
          <input type="password" class="form-control" id="Password1" placeholder="Password" name="login_pass">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-success" name="login">Log In</button>
      </form>
    </div>
  </div>
</div>
    <div class="modal fade signUp" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content p-5">
          <div class="modal-header mb-4 p-0 pb-2">
            <h2 class="text-success modal-title">Sign Up</h2>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <form action="insert.php" method="post">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="f-name">First Name</label>
                <input type="text" name="first_name" class="form-control" id="f-name" placeholder="First Name">
              </div>
              <div class="form-group col-md-6">
                <label for="l-name">Last Name</label>
                <input type="text" name="last_name" class="form-control" id="l-name" placeholder="Last Name">
              </div>
            </div>
              <div class="form-group">
                <label for="inputEmail4">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" name="sign_password" class="form-control" id="inputPassword4" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="c-password"> Confirm Password</label>
                <input type="password" class="form-control" id="c-password4" placeholder="Confirm Password" name="sign_password_c">
              </div>
            <div class="form-group">
              <label for="inputAddress">Address</label>
              <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" name="city" class="form-control" id="inputCity">
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select id="inputState" class="form-control" name="state">
                  <option selected hidden>Choose...</option>
                  <option value="andhra pradesh">Andhra Pradesh</option>
                  <option value="arunachal pradesh">Arunachal Pradesh</option>
                  <option value="assam">Assam</option>
                  <option value="bihar">Bihar</option>
                  <option value="chhattisgarh">Chhattisgarh</option>
                  <option value="goa">Goa</option>
                  <option value="gujarat">Gujarat</option>
                  <option value="haryana">Haryana</option>
                  <option value="himachal pradesh">Himachal Pradesh</option>
                  <option value="jammu and kashmir">Jammu and Kashmir</option>
                  <option value="jharkhand">Jharkhand</option>
                  <option value="karnatka">Karnataka</option>
                  <option value="kerala">Kerala</option>
                  <option value="madhya pradesh">Madhya Pradesh</option>
                  <option value="maharashtra">Maharashtra</option>
                  <option value="manipur">Manipur</option>
                  <option value="meghalaya">Meghalaya</option>
                  <option value="mizoram">Mizoram</option>
                  <option value="nagaland">Nagaland</option>
                  <option value="odisha">Odisha</option>
                  <option value="punjab">Punjab</option>
                  <option value="rajasthan">Rajasthan</option>
                  <option value="sikkim">Sikkim</option>
                  <option value="tamil nadu">Tamil Nadu</option>
                  <option value="telangana">Telangana</option>
                  <option value="tripura">Tripura</option>
                  <option value="uttar pradesh">Uttar Pradesh</option>
                  <option value="uttarakhand">Uttarakhand</option>
                  <option value="west bengal">West Bengal</option>
                </select>
              </div>
              <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" name="zip" class="form-control" id="inputZip">
              </div>
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  I agree the terms and condition of the onedeals.
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-success">Sign Up</button>
          </form>
        </div>
      </div>
    </div>


    
    <script src="js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">

</script>
<?php mysqli_close($con); ?>
    </body>

    </html>