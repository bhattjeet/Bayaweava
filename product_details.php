<?php include ('header.php'); ?>
    <main>
        <!-- breadcrumb Start-->
        <div class="page-notification">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">shop</a></li> 
                                <li class="breadcrumb-item"><a href="#">Product Details</a></li> 
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb End-->
        <!--?  Details start -->
        <div class="directory-details pt-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                       <!-- <div class="small-tittle mb-20">
                            <h2>Description</h2>
                        </div>
                        <div class="directory-cap mb-40">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
                        </div>-->
                        <div class="small-tittle mb-20">
                            <h2>Description</h2>
                        </div>
                        <div class="gallery-img">
                            <div class="row">
							<?php if ($_GET['id']=='1'){?>
							  <div class="col-lg-4">
									<img src="assets/img/gallery/PHOTO-2020-08-29-17-23-32.jpg" class="mb-30" alt="">
                                </div>
								<div class="col-lg-8">
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
								</div>
							<?php } else if($_GET['id']=='2'){?>
                                <div class="col-lg-4">
                                     <img src="assets/img/gallery/PHOTO-2020-08-29-17-23-33(1).jpg" class="mb-30" alt="">
                                </div>
								<div class="col-lg-8">
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
								</div>
							<?php }else{?>
                                <div class="col-lg-4">
                                    <img src="assets/img/gallery/gallery3.png"  class="mb-30"alt="">
                                </div>
								<div class="col-lg-8">
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
								</div>
							<?php }?>
                            </div>
                        </div>
                    </div>
                   <!-- <div class="col-lg-4">
                        <div class="map">
                            <img src="assets/img/gallery/map.png" alt="">
                        </div>
                        <div class="form-wrapper pt-80">
                            <div class="row ">
                                <div class="col-xl-12">
                                    <div class="small-tittle mb-30">
                                        <h2>Contact</h2>
                                    </div>
                                </div>
                            </div>
                           <form id="contact-form" action="#" method="POST">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-box user-icon mb-15">
                                            <input type="text" name="name" placeholder="Your name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-box email-icon mb-15">
                                            <input type="text" name="email" placeholder="Email address">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-box message-icon mb-15">
                                            <textarea name="message" id="message" placeholder="Comment"></textarea>
                                        </div>
                                        <div class="submit-info">
                                            <button class="submit-btn2" type="submit">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> side bare remove -->
                </div>
            </div>
        </div>
        <!--  Details End -->
        
    </main>

       <?php include ('footer.php'); ?>