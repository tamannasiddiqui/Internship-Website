    
   <?php require_once 'config.php' ?>
   
   <script src="https://kit.fontawesome.com/c0106cd3ba.js"></script>
 

    <?php include('./includes/header.php'); ?>

    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">Contact</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./index.php"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="./asset/img/core-img/curve5d.png" alt="">
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->
   

    <!-- ***** Contact Area Start ***** -->
    <section class="uza-contact-area section-padding-80">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Contact Form -->
                <div class="col-12 col-lg-7">
                    <div class="uza-contact-form mb-80">
                        <div class="contact-heading mb-50">
                            <h4>Thank you for your interest. <br>Please fill out the form below to inquire about our work.</h4>
                        </div>
                        <div class="single-blog-post bg-img mb-50 mt-50" style="margin:15px; padding: 15px;">
                            <form action="<?=ACTION_PATH ?>\contactdb.php" method="POST" id="addContact">
                            <input type="hidden" name="action" value="contactForm">
                                <div class="row">
                                <input type="hidden" name="action" value="addContact">
                                     <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control mb-30" name="name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                           <input type="email" class="form-control mb-30" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control mb-30" name="phone" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control mb-30" name="message" rows="8" cols="80" placeholder="Message"></textarea>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                        <center><button class="btn uza-btn btn-3 mt-15" >Contact Us</button></center>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                  

               
                <!-- side blogs -->
                <div class="col-12 col-lg-5">
                   <div class="contact-heading mb-50">
                        <h4>Call, email- whatever works for you.We'll be here!</h4>
                    </div>
                    <div class="single-blog-post bg-img mb-50 mt-150" style="margin:15px; padding: 15px ;">  
                        <div class="contact-sidebar-area">
                            <h3></h3>
                            <!--Single Sidebar Area -->
                            <div class="single-contact-card">
                                <h4>Contact Us</h4>
                               
                                <h3><i class="fas fa-phone-alt"></i> 01242213587</h3>
                                <h6>hello@polyvalent.co.in</h6>
                                <h6>Mon - Fri: 9:00 - 19:00 <br>Closed on Weekends</h6>
                           </div>
                            <br>
                            <div class="single-contact-card mb-50 mt-30">
                                <h4>Address</h4>
                                <h6>117-119, 1st Floor, Vipul Trade Center, Sohna Rd, Sector 48, Gurugram, Haryana 122018</h6>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </section>
    <!-- ***** Contact Area End ***** -->
     

     
<?php include('./includes/footer.php'); ?>


<!-- ******* All JS Files ******* -->
<!-- jQuery js -->
<script src="js/jquery.min.js"></script>
<!-- Popper js -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- All js -->
<script src="js/uza.bundle.js"></script>
<!-- Active js -->
<script src="js/default-assets/active.js"></script>


</body>

</html>