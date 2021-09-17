<?php include 'includes/header.php';?>
    <hr>
    <!--top bar ends-->
    <div class="row m-2">
      <!--form starts here-->
      <div class="col-lg-7 bg-light">
        <nav>
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="oneWay-tab" data-toggle="tab" href="#one-content" role="tab">
                one way
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="twoWay-tab" data-toggle="tab" href="#two-content" role="tab">
                two way
              </a>
            </li>
          </ul>
          <div class="tab-content p-4" id="myTabContent">
              <div class="tab-pane fade show active" id="one-content" role="tabpanel">
                <form action="search.php" method="post">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-plane"></i></div>
                          </div>
                          <select class="form-control" name="from">
                            <option>FROM</option>
                            <option>BHADRAPUR</option>
                            <option>BHAIRAHAWA</option>
                            <option>BHARATPUR</option>
                            <option>BIRATNAGAR</option>
                            <option>DHANGADHI</option>
                            <option>JANAKPUR</option>
                            <option>JOMSOM</option>
                            <option>KATHMANDU</option>
                            <option>LUKLA</option>
                            <option>MOUNTAIN</option>
                            <option>NEPALGUNJ</option>
                            <option>POKHARA</option>
                            <option>RAJBIRAJ</option>
                            <option>SIMARA</option>
                            <option>SIMIKOT</option>
                            <option>SURKHET</option>
                            <option>TUMLINGTAR</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-plane"></i></div>
                          </div>
                          <select class="form-control" name="to">
                            <option>TO</option>
                            <option>BHADRAPUR</option>
                            <option>BHAIRAHAWA</option>
                            <option>BHARATPUR</option>
                            <option>BIRATNAGAR</option>
                            <option>DHANGADHI</option>
                            <option>JANAKPUR</option>
                            <option>JOMSOM</option>
                            <option>KATHMANDU</option>
                            <option>LUKLA</option>
                            <option>MOUNTAIN</option>
                            <option>NEPALGUNJ</option>
                            <option>POKHARA</option>
                            <option>RAJBIRAJ</option>
                            <option>SIMARA</option>
                            <option>SIMIKOT</option>
                            <option>SURKHET</option>
                            <option>TUMLINGTAR</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-6">
                        <label>Departure Date:</label>
                        <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                          </div>
                          <input id="today1" class="form-control" type="date" name="dd">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="btn-group colors" data-toggle="buttons">
                      <label class="btn btn-success active">
                        <input type="radio" name="options" value="economy" autocomplete="off" checked> economy
                      </label>
                      <label class="btn btn-success">
                        <input type="radio" name="options" value="buisness class" autocomplete="off"> buisness class
                      </label>
                    </div>
                	</div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-6">
                        <label>Adults (12 Years+)</label>
                        <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                          </div>
                          <input class="form-control" type="number" value="0" name="adults">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <label>Children(2-12 Years)</label>
                        <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                          </div>
                          <input class="form-control" type="number" value="0" name="childrens">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-envelope-square"></i>&nbsp;&nbsp;email</div>
                          </div>
                          <input class="form-control" type="email" name="email" placeholder="example@example.com">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-3">
                      <input class="form-control btn btn-success" type="submit" value="search">
                    </div>
                  </div>

                </form>
              </div>
            <div class="tab-pane fade" id="two-content" role="tabpanel">
              <form action="search.php" method="post">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-plane"></i></div>
                        </div>
                        <select class="form-control" name="from">
                          <option>FROM</option>
                          <option>BHADRAPUR</option>
                          <option>BHAIRAHAWA</option>
                          <option>BHARATPUR</option>
                          <option>BHIRATNAGAR</option>
                          <option>DHANGADHI</option>
                          <option>JANAKPUR</option>
                          <option>JOMSOM</option>
                          <option>KATHMANDU</option>
                          <option>LUKLA</option>
                          <option>MOUNTAIN</option>
                          <option>NEPALGUNJ</option>
                          <option>POKHARA</option>
                          <option>RAJBIRAJ</option>
                          <option>SIMARA</option>
                          <option>SIMIKOT</option>
                          <option>SURKHET</option>
                          <option>TUMLINGTAR</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-plane"></i></div>
                        </div>
                        <select class="form-control" name="to">
                          <option>TO</option>
                          <option>BHADRAPUR</option>
                          <option>BHAIRAHAWA</option>
                          <option>BHARATPUR</option>
                          <option>BHIRATNAGAR</option>
                          <option>DHANGADHI</option>
                          <option>JANAKPUR</option>
                          <option>JOMSOM</option>
                          <option>KATHMANDU</option>
                          <option>LUKLA</option>
                          <option>MOUNTAIN</option>
                          <option>NEPALGUNJ</option>
                          <option>POKHARA</option>
                          <option>RAJBIRAJ</option>
                          <option>SIMARA</option>
                          <option>SIMIKOT</option>
                          <option>SURKHET</option>
                          <option>TUMLINGTAR</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6">
                      <label>Departure Date:</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                        </div>
                        <input id="today2" class="form-control" type="date" name="dd">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <label>Return Date:</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                        </div>
                        <input id="today3" class="form-control" type="date" name="rd">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="btn-group colors" data-toggle="buttons">
                    <label class="btn btn-success active">
                      <input type="radio" name="options" value="economy" autocomplete="off" checked> economy
                    </label>
                    <label class="btn btn-success">
                      <input type="radio" name="options" value="buisness class" autocomplete="off"> buisness class
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6">
                      <label>Adults (12 Years+)</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-user"></i></div>
                        </div>
                        <input class="form-control" type="number" value="0" name="adults">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <label>Children(2-12 Years)</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-user"></i></div>
                        </div>
                        <input class="form-control" type="number" value="0" name="childrens">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-envelope-square"></i>&nbsp;&nbsp;email</div>
                        </div>
                        <input class="form-control" type="email" name="email" placeholder="example@example.com">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-3">
                    <input class="form-control btn btn-success" type="submit" value="search">
                  </div>
                </div>

              </form>
            </div>
          </div>
        </nav>
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
      </div>
    </div>
    <hr>
<?php include 'includes/footer.php';?>
