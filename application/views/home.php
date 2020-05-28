<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Desa Gendereh</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>/assets/eBusiness/img/logo.png" rel="icon">
  <link href="<?php echo base_url(); ?>/assets/eBusiness/img/logosumedang.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url(); ?>/assets/eBusiness/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url(); ?>/assets/eBusiness/lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/eBusiness/lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/eBusiness/lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/eBusiness/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/eBusiness/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/eBusiness/lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="<?php echo base_url(); ?>/assets/eBusiness/css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url(); ?>/assets/eBusiness/css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="<?php echo base_url(); ?>/assets/eBusiness/css/responsive.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="index.html">
                  <h1><span style="color:#42d53e">Desa</span>Gendereh</h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="#home">Home</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#about">Profile</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#services">Pelayanan</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#statistik">Statistik</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#team">Team</a>
                  </li>
                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Desa<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a class="page-scroll" href=#pricing >Kelembagaan Desa</a></li>
                      <li><a href=# >Data Desa</a></li>
                      <li><a href=# >Potensi Desa</a></li>
                      <li><a href=# >Transparansi</a></li>
                      <li><a href=# >Regulasi</a></li>
                    </ul> 
                  </li>

                  <li>
                    <a class="page-scroll" href="#blog">Berita</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#contact">Hubungi Kami</a>
                  </li>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->

  <!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <?php foreach($home as $slider){ ?>
          <img src="<?php echo base_url(); ?>/assets/eBusiness/img/slider/<?php echo $slider['gambar_slider']; ?>" alt="" title="#slider-direction-<?php echo $slider['id_home']; ?>" />  
        <?php } ?>
        <!-- <img src="<?php echo base_url(); ?>/assets/eBusiness/img/slider/slider1.jpg" alt="" title="#slider-direction-1" />
        <img src="<?php echo base_url(); ?>/assets/eBusiness/img/slider/slider2.jpg" alt="" title="#slider-direction-2" />
        <img src="<?php echo base_url(); ?>/assets/eBusiness/img/slider/slider3.jpg" alt="" title="#slider-direction-3" /> -->
      </div>

      <?php foreach($home as $direction){ 
        if($direction['id_home'] == 1){ ?>
          <!-- direction 1 -->
          <div id="slider-direction-1" class="slider-direction slider-one">
            <div class="container">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="slider-content">
                    <!-- layer 1 -->
                    <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                      <h2 class="title1"><?php echo $direction['title_1']; ?> </h2>
                    </div>
                    <!-- layer 2 -->
                    <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                      <h1 class="title2"><?php echo $direction['title_2']; ?></h1>
                    </div>
                    <!-- layer 3 -->
                    <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                      <a class="ready-btn right-btn page-scroll" href="#services"><?php echo $direction['page_scroll_1']; ?></a>
                      <a class="ready-btn page-scroll" href="#about"><?php echo $direction['page_scroll_2']; ?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php
        }else{?>
          <!-- direction 2 -->
          <div id="slider-direction-<?php echo $direction['id_home']; ?>" class="slider-direction slider-two">
            <div class="container">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="slider-content text-center">
                    <!-- layer 1 -->
                    <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                      <h2 class="title1"><?php echo $direction['title_1']; ?> </h2>
                    </div>
                    <!-- layer 2 -->
                    <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                      <h1 class="title2"><?php echo $direction['title_2']; ?></h1>
                    </div>
                    <!-- layer 3 -->
                    <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                      <a class="ready-btn right-btn page-scroll" href="#services"><?php echo $direction['page_scroll_1']; ?></a>
                      <a class="ready-btn page-scroll" href="#about"><?php echo $direction['page_scroll_2']; ?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      <?php 
      }
      ?>
    </div>
  </div>
  <!-- End Slider Area -->

  <!-- Start About area -->
  <div id="about" class="about-area area-padding">
    <div class="container">
      <?php foreach($profile as $profile_desa) { ?>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2><?php echo $profile_desa['title_profile']; ?></h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
								  <img src="<?php echo base_url(); ?>/assets/eBusiness/img/about/<?php echo $profile_desa['gambar_profile']; ?>" alt="">
								</a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <a href="#">
                <h4 class="sec-head"><?php echo $profile_desa['subtitle_profile']; ?></h4>
              </a>
              <p>
                <?php echo $profile_desa['description']; ?>
              </p>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    <?php } ?>
    </div>
  </div>
  <!-- End About area -->

  <!-- Start Service area -->
  <div id="services" class="services-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <h2>Pelayanan Desa</h2>
          </div>
        </div>
      </div>
      <div class="row text-center">
        <div class="services-contents">
          <!-- Start Left services -->
          <?php foreach ($pelayanan as $pelayanan_desa) { ?>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon page-scroll" href="<?php echo $pelayanan_desa['link']; ?>">
											<i class="<?php echo $pelayanan_desa['icon']; ?>"></i>
										</a>
                  <h4><?php echo $pelayanan_desa['nama_pelayanan']; ?></h4>
                  <p>
                    <?php echo $pelayanan_desa['penjelasan_pelayanan']; ?>
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <!-- End Service area -->

  <!-- our-skill-area start -->
  <div id="statistik" class="our-skill-area fix hidden-sm">
    <div class="test-overly"></div>
    <div class="skill-bg area-padding-2">
      <div class="container">
        <!-- section-heading end -->
        <div class="row">
          <div class="skill-text">
            <!-- single-skill start -->
            <div class="col-xs-12 col-sm-3 col-md-3 text-center">
              <div class="single-skill">
                <div class="progress-circular">
                  <input type="text" class="knob" value="0" data-rel="95" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                  <h3 class="progress-h4">Web Design</h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
            <!-- single-skill start -->
            <div class="col-xs-12 col-sm-3 col-md-3 text-center">
              <div class="single-skill">
                <div class="progress-circular">
                  <input type="text" class="knob" value="0" data-rel="85" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                  <h3 class="progress-h4">Graphics Design</h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
            <!-- single-skill start -->
            <div class="col-xs-12 col-sm-3 col-md-3 text-center">
              <div class="single-skill">
                <div class="progress-circular">
                  <input type="text" class="knob" value="0" data-rel="75" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                  <h3 class="progress-h4">Php Developer</h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
            <!-- single-skill start -->
            <div class="col-xs-12 col-sm-3 col-md-3 text-center">
              <div class="single-skill">
                <div class="progress-circular">
                  <input type="text" class="knob" value="0" data-rel="65" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                  <h3 class="progress-h4">Java Script</h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- our-skill-area end -->

  <!-- Start team Area -->
  <div id="team" class="our-team-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Pegawai Desa Gendereh </h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="team-top">
          <?php foreach ($team as $pegawai_desa) { ?>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
										<img src="<?php echo base_url(); ?>/assets/eBusiness/img/team/<?php echo $pegawai_desa['foto_pegawai']; ?>" alt="">
									</a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
													<i class="fa fa-facebook"></i>
												</a>
                    </li>
                    <li>
                      <a href="#">
													<i class="fa fa-twitter"></i>
												</a>
                    </li>
                    <li>
                      <a href="#">
													<i class="fa fa-instagram"></i>
												</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4><?php echo $pegawai_desa['nama_pegawai']; ?></h4>
                <p><?php echo $pegawai_desa['jabatan']; ?></p>
              </div>
            </div>
          </div>
        <?php } ?>
          <!-- End column -->
          
        </div>
      </div>
    </div>
  </div>
  <!-- End Team Area -->

  <!-- Start Wellcome Area -->
  <div class="wellcome-area">
    <div class="well-bg">
      <div class="test-overly"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="wellcome-text">
              <div class="well-text text-center">
                <h2>Selamat Datang di Website Desa Gendereh</h2>
                <p>
                  Pusat Informasi mengenai Desa Gendereh
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Wellcome Area -->

  <!-- Faq area start -->
  <div id="pelayanan_desa" class="faq-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Pelayanan Surat Online</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="form contact-form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <label>Silahkan lengkapi semua isian sesuai dengan data yang diperlukan</label>
                </div>
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required="true">
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="NIK" data-rule="email" data-msg="Please enter a valid email" required="true">
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Email" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required="true">
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                   <select class="form-control" id="sel1">
                      <option>Pilih Jenis Surat</option>
                      <option>Surat Keterangan Usaha</option>
                      <option>Surat Keterangan Tidak Mampu</option>
                      <option>Surat Keterangan Miskin</option>
                      <option>Surat Keterangan Belum Pernah Menikah</option>
                      <option>Surat Keterangan Kelahiran</option>
                      <option>Surat Keterangan Kematian</option>
                      <option>Surat Keterangan Beda Nama</option>
                      <option>Surat Keterangan Penghasilan</option>
                      <option>Surat Keterangan Harga Tanah</option>
                    </select>
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Pesan"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Kirim Permohonan</button></div>
              </form>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="tab-menu">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li class="active">
                <a href="#p-view-1" role="tab" data-toggle="tab">Project</a>
              </li>
              <li>
                <a href="#p-view-2" role="tab" data-toggle="tab">Planning</a>
              </li>
              <li>
                <a href="#p-view-3" role="tab" data-toggle="tab">Success</a>
              </li>
            </ul>
          </div>
          <div class="tab-content">
            <div class="tab-pane active" id="p-view-1">
              <div class="tab-inner">
                <div class="event-content head-team">
                  <h4>Project</h4>
                  <p>
                    Redug Lares dolor sit amet, consectetur adipisicing elit. Animi vero excepturi magnam ducimus adipisci voluptas, praesentium maxime necessitatibus in dolor dolores unde ab, libero quo. Aut, laborum sequi.
                  </p>
                  <p>
                    voluptas, praesentium maxime cum fugiat,magnam ducimus adipisci voluptas, praesentium architecto ducimus, doloribus fuga itaque omnis placeat.
                  </p>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="p-view-2">
              <div class="tab-inner">
                <div class="event-content head-team">
                  <h4>Planning</h4>
                  <p>
                    voluptas, praesentium maxime cum fugiat,magnam ducimus adipisci voluptas, praesentium architecto ducimus, doloribus fuga itaque omnis.
                  </p>
                  <p>
                    Redug Lares dolor sit amet, consectetur adipisicing elit. Animi vero excepturi magnam ducimus adipisci voluptas, praesentium maxime necessitatibus in dolor dolores unde ab, libero quo. Aut.
                  </p>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="p-view-3">
              <div class="tab-inner">
                <div class="event-content head-team">
                  <h4>Success</h4>
                  <p>
                    voluptas, praesentium maxime cum fugiat,magnam ducimus adipisci voluptas, praesentium architecto ducimus, doloribus fuga itaque omnis placeat.
                  </p>
                  <p>
                    voluptas, praesentium maxime cum fugiat,magnam ducimus adipisci voluptas, praesentium architecto ducimus, doloribus fuga itaque omnis.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end Row -->
    </div>
  </div>
  <!-- End Faq Area -->

  <!-- Start reviews Area -->
  <div class="reviews-area hidden-xs">
    <div class="work-us">
      <div class="work-left-text">
        <a href="#">
						<img src="<?php echo base_url(); ?>/assets/eBusiness/img/about/image_kantor.jpg" alt="">
					</a>
      </div>
      <div class="work-right-text text-center">
        <h2>website desa gendereh</h2>
        <h5>Memberikan Informasi mengenai Desa Gendereh</h5>
        <a href="#contact" class="ready-btn">Hubungi Kami</a>
      </div>
    </div>
  </div>
  <!-- End reviews Area -->

  <!-- Start portfolio Area -->
  <div id="portfolio" class="portfolio-area area-padding fix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Data Desa</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Start Portfolio -page -->
        <div class="awesome-project-1 fix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="awesome-menu ">
              <ul class="project-menu">
                <li>
                  <a href="#" class="active" data-filter="*">All</a>
                </li>
                <li>
                  <a href="#" data-filter=".development">Development</a>
                </li>
                <li>
                  <a href="#" data-filter=".design">Design</a>
                </li>
                <li>
                  <a href="#" data-filter=".photo">Photoshop</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="awesome-project-content">
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 design development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo base_url(); ?>/assets/eBusiness/img/portfolio/1.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="img/portfolio/1.jpg">
                      <h4>Business City</h4>
                      <span>Web Development</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 photo">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo base_url(); ?>/assets/eBusiness/img/portfolio/2.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="img/portfolio/2.jpg">
                      <h4>Blue Sea</h4>
                      <span>Photosho</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 design">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo base_url(); ?>/assets/eBusiness/img/portfolio/3.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="img/portfolio/3.jpg">
                      <h4>Beautiful Nature</h4>
                      <span>Web Design</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 photo development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo base_url(); ?>/assets/eBusiness/img/portfolio/4.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="img/portfolio/4.jpg">
                      <h4>Creative Team</h4>
                      <span>Web design</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo base_url(); ?>/assets/eBusiness/img/portfolio/5.jpg" alt="" /></a>
                <div class="add-actions text-center text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="img/portfolio/5.jpg">
                      <h4>Beautiful Flower</h4>
                      <span>Web Development</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 design photo">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo base_url(); ?>/assets/eBusiness/img/portfolio/6.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="img/portfolio/6.jpg">
                      <h4>Night Hill</h4>
                      <span>Photoshop</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
        </div>
      </div>
    </div>
  </div>
  <!-- awesome-portfolio end -->
  <!-- start pricing area -->
  <div id="pricing" class="pricing-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Kelembagaan Desa</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="pri_table_list">
            <h3>LPM</h3>
            <ol>
              Lembaga Pemberdayaan Masyarakat (LPM) adalah salah satu lembaga kemasyaratan yang berada di desa. Lembaga Pemberdayaan Masyarakat mempunyai tugas menyusun rencana pembangunan secara partisipatif, menggerakkan swadaya gotong royong masyarakat, melaksanakan dan mengendalikan pembangunan.
            </ol>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="pri_table_list">
            <h3>Karang Taruna</h3>
            <p>
              menanggulangi berbagai masalah kesejahteraan sosial terutama yang dihadapi generasi muda, baik yang bersifat preventif, rehabilitatif, maupun pengembangan potensi generasi muda di lingkungannya
            </p>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="pri_table_list">
            <h3>PKK</h3>
            <p>
              organisasi kemasyarakatan yang memberdayakan wanita untuk turut berpartisipasi dalam pembangunan Indonesia. PKK terkenal akan "10 program pokok"-nya. 
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End pricing table area -->
  <!-- Start Testimonials -->
  <div class="testimonials-area">
    <div class="testi-inner area-padding">
      <div class="testi-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <!-- Start testimonials Start -->
            <div class="testimonial-content text-center">
              <a class="quate" href="#"><i class="fa fa-quote-right"></i></a>
              <!-- start testimonial carousel -->
              <div class="testimonial-carousel">
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.<br>consectetur adipiscing elit. Sed pulvinar luctus est eget congue.
                    </p>
                    <h6>Boby</h6>
                  </div>
                </div>
                <!-- End single item -->
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.<br>consectetur adipiscing elit. Sed pulvinar luctus est eget congue.
                    </p>
                    <h6>Jhon</h6>
                  </div>
                </div>
                <!-- End single item -->
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.<br>consectetur adipiscing elit. Sed pulvinar luctus est eget congue.
                    </p>
                    <h6>Fleming</h6>
                  </div>
                </div>
                <!-- End single item -->
              </div>
            </div>
            <!-- End testimonials end -->
          </div>
          <!-- End Right Feature -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Testimonials -->
  <!-- Start Blog Area -->
  <div id="blog" class="blog-area">
    <div class="blog-inner area-padding">
      <div class="blog-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Berita Terbaru</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start Left Blog -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <a href="blog.html">
										<img src="<?php echo base_url(); ?>/assets/eBusiness/img/blog/1.jpg" alt="">
									</a>
              </div>
              <div class="blog-meta">
                <span class="comments-type">
										<i class="fa fa-comment-o"></i>
										<a href="#">13 comments</a>
									</span>
                <span class="date-type">
										<i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
									</span>
              </div>
              <div class="blog-text">
                <h4>
                                        <a href="blog.html">Assumenda repud eum veniam</a>
									</h4>
                <p>
                  Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                </p>
              </div>
              <span>
									<a href="blog.html" class="ready-btn">Read more</a>
								</span>
            </div>
            <!-- Start single blog -->
          </div>
          <!-- End Left Blog-->
          <!-- Start Left Blog -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <a href="blog.html">
										<img src="<?php echo base_url(); ?>/assets/eBusiness/img/blog/2.jpg" alt="">
									</a>
              </div>
              <div class="blog-meta">
                <span class="comments-type">
										<i class="fa fa-comment-o"></i>
										<a href="#">130 comments</a>
									</span>
                <span class="date-type">
										<i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
									</span>
              </div>
              <div class="blog-text">
                <h4>
                                        <a href="blog.html">Explicabo magnam quibusdam.</a>
									</h4>
                <p>
                  Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                </p>
              </div>
              <span>
									<a href="blog.html" class="ready-btn">Read more</a>
								</span>
            </div>
            <!-- Start single blog -->
          </div>
          <!-- End Left Blog-->
          <!-- Start Right Blog-->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <a href="blog.html">
										<img src="<?php echo base_url(); ?>/assets/eBusiness/img/blog/3.jpg" alt="">
									</a>
              </div>
              <div class="blog-meta">
                <span class="comments-type">
										<i class="fa fa-comment-o"></i>
										<a href="#">10 comments</a>
									</span>
                <span class="date-type">
										<i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
									</span>
              </div>
              <div class="blog-text">
                <h4>
                                        <a href="blog.html">Lorem ipsum dolor sit amet</a>
									</h4>
                <p>
                  Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                </p>
              </div>
              <span>
									<a href="blog.html" class="ready-btn">Read more</a>
								</span>
            </div>
          </div>
          <!-- End Right Blog-->
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog -->
  <!-- Start Suscrive Area -->
  <div class="suscribe-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
        </div>
      </div>
    </div>
  </div>
  <!-- End Suscrive Area -->
  <!-- Start contact Area -->
  <div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Contact us</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-mobile"></i>
                <p>
                  Call: +1 5589 55488 55<br>
                  <span>Monday-Friday (9am-5pm)</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-envelope-o"></i>
                <p>
                  Email: info@example.com<br>
                  <span>Web: www.example.com</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-map-marker"></i>
                <p>
                  Location: A108 Adam Street<br>
                  <span>NY 535022, USA</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->

  <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>eBusiness</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
              -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="<?php echo base_url(); ?>/assets/eBusiness/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/eBusiness/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/eBusiness/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/eBusiness/lib/venobox/venobox.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/eBusiness/lib/knob/jquery.knob.js"></script>
  <script src="<?php echo base_url(); ?>/assets/eBusiness/lib/wow/wow.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/eBusiness/lib/parallax/parallax.js"></script>
  <script src="<?php echo base_url(); ?>/assets/eBusiness/lib/easing/easing.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/eBusiness/lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>/assets/eBusiness/lib/appear/jquery.appear.js"></script>
  <script src="<?php echo base_url(); ?>/assets/eBusiness/lib/isotope/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="<?php echo base_url(); ?>/assets/eBusiness/contactform/contactform.js"></script>

  <script src="<?php echo base_url(); ?>/assets/eBusiness/js/main.js"></script>
</body>

</html>
