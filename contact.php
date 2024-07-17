<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL-CONTACT</title>  
    <?php require('inc/links.php');?>
  
</head>
<body class="bg-light">
    <?php require('inc/header.php');?>
        <div class="my-5 px-5">
            <h2 class="h-font fw-bold text-center">CONTACT US</h2>
            <div class="h-line bg-dark"></div>
            <p class="text-center">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. <br>
                Placeat voluptatibus ab hic sint quasi reiciendis asperiores at quas rerum blanditiis.
            </p>
        </div>
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">

                <div class="bg-white rounded shadow p-4">
                    <iframe class="w-100 rounded mb-4" height="320" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63581.16582650895!2d-1.3078143535939963!3d5.132211969774826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfddfc29c7b3faad%3A0xeae5bdfb8639e093!2sCape%20Coast!5e0!3m2!1sen!2sgh!4v1709304281291!5m2!1sen!2sgh" loading="lazy"></iframe>

                    <h5>Address</h5>
                    <a href="https://maps.app.goo.gl/GTUpuBzyKt9HnuNw5" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                     <i class="bi bi-geo-alt-fill"></i> put address here
                    </a>

                        <h5 class="mt-4">Call us</h5> 
                            <a href="tel: +233555109980" class="d-inline-block mb-2 text-decoration-none text-dark">
                                <i class="bi bi-telephone-fill"></i>+233555109980
                            </a>
                            <br>
                            <a href="tel: +233555109980" class=" d-inline-block  text-decoration-none text-dark">
                                <i class="bi bi-telephone-fill"></i>+233555109980
                            </a>

                        <h5 class="mt-4">Email</h5>
                            <a href="malito:email.com" class="d-inline-block mb-2 text-decoration-none text-dark">
                                <i class="bi bi-envelope-fill"></i> email.com
                            </a>

                        <h5 class="mt-4">Follow us</h5> 
                            <a href="#" class=" d-inline-block mb-3 text-dark fs-5 me-2">
                            <i class="bi bi-twitter-x me-1"></i>                         
                            </a>
                                
                             <a href="#" class=" d-inline-block mb-3 text-dark fs-5 me-2">
                                <i class="bi bi-facebook me-1"></i>
                             </a>
                                
                            <a href="#" class=" d-inline-block mb-3 text-dark fs-5 me-2">
                              <i class="bi bi-instagram me-1"></i>                           
                            </a>
                </div>
            </div>
                  
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow p-4">
                        <form>
                            <h5>Send a Message</h5>
                            <div class="mt-3">
                                <label class="form-label" style="font-weight:500;">Name</label>
                                <input type="text" class="form-control shadow-none">            
                            </div>
                            <div class="mt-3">
                                <label class="form-label" style="font-weight:500;">Email</label>
                                <input type="email" class="form-control shadow-none">            
                            </div>
                            <div class="mt-3">
                                <label class="form-label" style="font-weight:500;">Subject</label>
                                <input type="text" class="form-control shadow-none">            
                            </div>
                            <div class="mt-3">
                                <label class="form-label" style="font-weight:500;">Message</label>
                                <textarea class="form-control shadow-none"rows="5" style="resize:none;"></textarea>            
                            </div>
                            <button type="submit" class="btn text-white btn-dark shadow-none mt-3" >SEND</button>
                        </form>
                    </div>
                </div> 

         </div>
      </div>
    <?php require('inc/footer.php');?>

</body>
</html>