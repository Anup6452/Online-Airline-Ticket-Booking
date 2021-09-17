<?php include 'includes/header.php';?>
    <hr>
    <!--top bar ends-->
    <div class="row m-2">
      <!--form starts here-->
      <div class="col-lg-7 bg-light">
        <form>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-lg-12">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">FROM</div>
                  </div>
                  <input class="form-control" type="email" name="email" value="<?php  if(isset($_POST['from'])){echo $_POST['from'];}?>" disabled>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-lg-12">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">TO</div>
                  </div>
                  <input class="form-control" type="email" name="email" value="<?php  if(isset($_POST['to'])){echo $_POST['to'];}?>" disabled>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-lg-12">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Dearture Date</div>
                  </div>
                  <input class="form-control" type="email" name="email" value="<?php  if(isset($_POST['dd'])){echo $_POST['dd'];}?>" disabled>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-lg-12">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Return Date</div>
                  </div>
                  <input class="form-control" type="email" name="email" value="<?php  if(isset($_POST['rd'])){echo $_POST['rd'];}?>" disabled>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-lg-12">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Ticket type</div>
                  </div>
                  <input class="form-control" type="email" name="email" value="<?php  if(isset($_POST['options'])){echo $_POST['options'];}?>" disabled>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-lg-12">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Adults</div>
                  </div>
                  <input class="form-control" type="email" name="email" value="<?php  if(isset($_POST['adults'])){echo $_POST['adults'];}?>" disabled>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-lg-12">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Childrens</div>
                  </div>
                  <input class="form-control" type="email" name="email" value="<?php  if(isset($_POST['childrens'])){echo $_POST['childrens'];}?>" disabled>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-lg-12">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Email</div>
                  </div>
                  <input class="form-control" type="email" name="email" value="<?php  if(isset($_POST['email'])){echo $_POST['email'];}?>" disabled>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <!--form ends here-->
      <div class="col-lg-5">
        <!-- scroll bar starts her-->
        <div class="container-fluid bg-white">
          <center class="text-muted" style="font-family: Impact;">AVAILABLE AIRLINES<i class="fas fa-plane-departure"></i></center>
          <marquee>
            <p style="font-family: Impact;">
              <span class="text-success">Buddha Air</span>&nbsp;&nbsp;&nbsp;
              <span class="text-info">Yeti Airlines</span>&nbsp;&nbsp;&nbsp;
             <span class="text-success">Shree Airlines</span>&nbsp;&nbsp;&nbsp;
             <span class="text-info">Saurya Airlinesr</span>&nbsp;&nbsp;&nbsp;
            <span class="text-success">Simrik Airlines</span>&nbsp;&nbsp;&nbsp;
          </p>
          </marquee>
        </div>
        <!--scroll bar ends here-->
        <div class="container">
          The price for the flight is given below.Please confirm your details and proceed.
          <?php
            $price = " ";
            $adults = $_POST['adults'];
            $childrens = $_POST['childrens'];
            if(isset($_POST['rd'])){
              if($_POST['options'] == "economy"){
                $price = ($adults * 5000 + $childrens * 4000) * 2;
              }else{
                $price = ($adults * 7000 + $childrens * 6000) * 2;
              }
            }else{
              if($_POST['options'] == "economy"){
                $price = $adults * 5000 + $childrens * 4000;
              }else{
                $price = $adults * 7000 + $childrens * 6000;
              }
            }

          ?>
          <form action="confirm.php" method="post">
            <div class="form-group mt-2">
              <div class="row">
                <div class="col-lg-12">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">Price</div>
                    </div>
                    <input class="form-control" type="email" name="email" value="<?php echo "Rs. ".$price; ?>" disabled>
                    <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
                    <input type="hidden" name="from" value="<?php echo $_POST['from']; ?>">
                    <input type="hidden" name="to" value="<?php echo $_POST['to']; ?>">
                    <input type="hidden" name="dd" value="<?php echo $_POST['dd']; ?>">
                    <input type="hidden" name="rr" value="<?php if(isset($_POST['rd'])){ echo $_POST['rd'];} ?>">
                    <input type="hidden" name="adults" value="<?php echo $_POST['adults']; ?>">
                    <input type="hidden" name="childrens" value="<?php echo $_POST['childrens']; ?>">
                    <input type="hidden" name="options" value="<?php echo $_POST['options']; ?>">
                    <input type="hidden" name="price" value="<?php echo $price; ?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-3">
                <input class="form-control btn btn-success" type="submit" value="confirm">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <hr>
    <?php include 'includes/footer.php';?>
