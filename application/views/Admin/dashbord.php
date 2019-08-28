<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("templates/admin_header") ?>
</head>

<body>
  <div class="fixed-button">
    <a href="https://codedthemes.com/item/gradient-able-admin-template" target="_blank" class="btn btn-md btn-primary">
      <i class="fa fa-shopping-cart" aria-hidden="true"></i> Upgrade To Pro
    </a>
  </div>
  <!-- Pre-loader start -->
  <div class="theme-loader">
    <div class="loader-track">
      <div class="loader-bar"></div>
    </div>
  </div>
  <!-- Pre-loader end -->
  <div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

      <?php $this->load->view("templates/admin_navbar") ?>
      <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
          <?php $this->load->view("templates/admin_sidebar") ?>
          <div class="pcoded-content">
            <div class="pcoded-inner-content">
              <div class="main-body">
                <div class="page-wrapper">
                  <div class="page-body">

                    <!-- Primer Content -->
                    <div class="row">
                      <div class="col-lg">
                        <div class="row">
                          <!-- Order Card IN/OUT Sampah -->
                          <div class="col-md-6 col-xl-3">
                            <div class="card bg-c-blue order-card">
                              <div class="card-block">
                                <h6 class="m-b-20">Sampah</h6>
                                <h2 class="text-right"><i class="ti-import f-left"></i><span>100</span></h2>
                                <h2 class="text-right"><i class="ti-export f-left"> </i><span>130</span></h2>
                                <!-- <p class="m-b-0">Completed Orders<span class="f-right">351</span></p> -->
                              </div>
                            </div>
                          </div>
                          <!-- end Order Card IN/OUT Sampah -->
                        </div>

                        <div class="row">
                          <!-- Statistik Sampah -->
                          <div class="col-lg-6">
                            <div class="card">
                              <div class="card-header">
                                <h5>Statistik Sampah</h5>
                              </div>
                              <div class="card-block">

                              </div>
                            </div>
                          </div>
                          <!-- end Statistik Sampah -->
                        </div>

                      </div>
                    </div>
                    <!-- end Primer Content -->

                    <!-- Second Content -->
                    <div class="row mt-5">

                      <!-- Second Content order-card -->
                      <div class="col-md-6 col-xl-3">
                        <div class="card bg-c-blue order-card">
                          <?php foreach($personal as $a) { ?>
                            <div class="card-block">
                              <h6 class="m-b-20">Jumlah Anggota</h6>
                              <h2 class="text-right"><i class="ti-user f-left"></i><span><?= $a->jumlah ?></span></h2>
                              <!-- <p class="m-b-0">Completed Orders<span class="f-right">351</span></p> -->
                            </div>
                          <?php } ?>
                        </div>
                      </div>

                      <div class="col-md-6 col-xl-3">
                        <div class="card bg-c-green order-card">
                        <?php foreach($community as $a) { ?>
                          <div class="card-block">
                            <h6 class="m-b-20">Jumlah Komunitas</h6>
                            <h2 class="text-right"><i class="ti-comments f-left"></i><span><?= $a->jumlah?></span></h2>
                            <!-- <p class="m-b-0">This Month<span class="f-right">213</span></p> -->
                          </div>
                        <?php } ?>
                        </div>
                      </div>

                      <div class="col-md-6 col-xl-3">
                        <div class="card bg-c-yellow order-card">
                        <?php foreach($event as $a) { ?>
                          <div class="card-block">
                            <h6 class="m-b-20">Total Event</h6>
                            <h2 class="text-right"><i class="ti-notepad f-left"></i><span><?= $a->jumlah ?></span></h2>
                            <!-- <p class="m-b-0">This Month<span class="f-right">$5,032</span></p> -->
                          </div>
                          <?php } ?>
                        </div>
                      </div>

                      <div class="col-md-6 col-xl-3">
                        <div class="card bg-c-pink order-card">
                          <div class="card-block">
                            <h6 class="m-b-20">New Community Requast</h6>
                            <h2 class="text-right"><i class="ti-envelope f-left"></i><span>0</span></h2>
                          </div>
                        </div>
                      </div>
                      <!-- end Second Content order-card -->
                      
                      <!-- Content Pengguna -->
                      <div class="col-lg">
                        <div class="card">
                          <div class="card-header">
                            <h5>Pengguna</h5>
                          </div>
                          <div class="card-block">
                              
                            <!-- Data Pengguna -->
                            <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>First Name</th>
                                      <th>Last Name</th>
                                      <th>Username</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                      </tr>
                                  </tbody>
                              </table>
                            </div>
                            <!-- end Data Pengguna -->

                          </div>
                        </div>
                      </div>
                      <!-- end Content Pengguna -->

                      <!-- Content Event -->
                      <div class="col-lg">
                        <div class="card bg-primary">
                          <div class="card-header">
                            <h5 class="text-white">Event</h5>
                          </div>
                          <div class="card-block">
                              
                            <!-- Data Event -->
                            <div class="table-responsive">
                                <table class="table table-hover">
                  
													<thead>
														<tr>
															<th>No</th>
															<th>Name Event</th>
															<th>Address</th>
															<th>Description</th>
												
															<th>Photo</th>
															<th>Status Event</th>
				
														</tr>
													</thead>
													<tbody>
														<?php
														$no=1;
														foreach($dataevent as $e)
														{   
														?>
														<tr>
															<th><?= $no++?></th>
															<td><?= $e->name_event?></td>
															<td><?= $e->address?></td>
															<td><?= $e->description?></td>
													
															<td><img src="<?php echo base_url('./upload/'.$e->photo) ?>"  width="100" /></td>
															<td><?= $e->status_event?></td>
								
														</tr>
														<?php
														
													}?>
													</tbody>
												</table>
                            </div>
                            <!-- end Data Event -->

                          </div>
                        </div>
                      </div>
                      <!-- end Content Event -->

                    </div>
                    <!-- end Second Content -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

        <!-- Warning Section Starts -->
        <!-- Older IE warning message -->
        <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
        <!-- Warning Section Ends -->
        <!-- Required Jquery -->
        <?php $this->load->view("templates/admin_footer") ?>