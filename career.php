<?php require_once 'config.php' ?>

<?php include('./includes/header.php');?>
     
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">Career</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./index.php"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Career</li>
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

   <!-- ***** career area start ***** -->
<section class="uza-contact-area section-padding-80">
    <div class="container">
        <div class="row justify-content-between">
         
            <div class="col-12 col-lg-7">
                <div class="uza-contact-form mb-80">
                    <div class="contact-heading mb-15">
                        <h4 class="head4">CURRENT VACANCIES</h2>
                         
                        <h4 class="head4"><b>JOB DESCRIPTION:</b></h4>
                    </div>  
                    <div class="single-blog-post bg-img mb-50 mt-20">                        
                                                      
                        <div class="about-us-content" style="margin:10px; padding:20px;">
                            <div ><b>1. Business Development Executive:</b></div>
                            <ul class="ultype">
                                <li>  Identify growth opportunities from the client portfolio and drive revenue.</li>
                                <li> Prepare client presentations and conduct in-person client meetings.</li>
                                <li>  Understanding client goals/objectives and their entire digital marketing needs including Social Media, Display Advertising, Email Marketing, Affiliate Marketing & more.</li>
                            </ul> 
                            
                        </div>
                   </div>
                   <div class="single-blog-post bg-img mb-50 mt-20">      
                       <div class="about-us-content" style="margin:10px; padding:20px;">
                            <div ><b> 2. Web Developer:</b></div>
                               <ul class="ultype">
                                   <li>  Should have minimum 6 months - 2 years of experience in PHP with strong hand in Core PHP.</li>
                                   <li>  Should have knowledge in any PHP Framework.</li>
                                   <li>  Demonstrable knowledge of web technologies including HTML, CSS.</li>
                                   <li>  Good in Product Delivery and Client Interaction</li>
                                   <li>   Experience in Angular JS 8 is preferable</li>
                               </ul>
                        </div>
                    </div>
                    
                    <div class="single-blog-post bg-img mb-50 mt-20">      
                       <div class="about-us-content" style="margin:10px; padding:20px;">
                            <div ><b> 3. Social Media Strategist:</b></div>
                            <ul class="ultype" >
                                <li> Analyze and evaluate both existing and potential social media activities and strategies..</li>
                                <li>  Plan, manage, coordinate and execute all social media programs and initiatives.</li>
                                <li>  Conduct, gather and analyze market research to determine social media opportunities and competitiveness.</li>
                                <li>  Achieve targeted results and ensure timely and effective execution of social media tactics and programs.</li>
                            </ul>
                        </div>
                     </div>
                    
                  
                </div>
             </div>
              
                <div class="col-12 col-lg-5">
                   <div class="uza-contact-form mb-80">
                        <div class="contact-heading mb-60">
                            <center><h4 class="head4">SUBMIT YOUR DETAILS</h4></center>
                        </div>
                        <div class="single-blog-post bg-img mb-50 mt-50" style="margin:15px; padding: 15px;">
                        <form  method="POST" action="<?=ACTION_PATH ?>\careerdb.php" enctype="multipart/form-data">
                            <div class="row">
                            <input type="hidden" name="action" value="addCareer">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control mb-30" name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control mb-30" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
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
                                    <div class="file-upload">
                                       <div class="file-select">
                                           <div class="file-select-button" id="fileName">Choose File</div>
                                           <div class="file-select-name" id="noFile">No file chosen...</div> 
                                           <input type="file" name="chooseFile" id="chooseFile">
                                        </div>
                                    </div>
                                </div>
                                     
                            </div>
                                <div class="col-12">
                                    <center><button class="btn uza-btn btn-3 mt-15" name="submit">SUBMIT</button></center>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
               </div>
        </div>
    </section>

   
 
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

<script>
 $('#chooseFile').bind('change', function () {
    
        var filename = $("#chooseFile").val();
        
        if (/^\s*$/.test(filename)) {
        $(".file-upload").removeClass('active');
        $("#noFile").text("No file chosen..."); 
        }
       else {
        $(".file-upload").addClass('active');
        $("#noFile").text(filename.replace("C:\\fakepath\\", "")); 
       } 
       });
  
</script>

</body>

</html>