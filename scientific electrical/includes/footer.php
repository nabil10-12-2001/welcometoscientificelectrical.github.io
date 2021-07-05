<div class="footer">
    <div class="content">
        <div class="footerwrap">
            <div class="copyright">
                <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                <p>Copyright © <?php echo date('Y');?> Scientific Electrical.com All rights reserved Developed by : <?php
                        $page_name = basename($_SERVER['PHP_SELF']);
                        if ($page_name == "index.php"){  ?>
                        <a href="linkedin.com/in/nabil-shaikh-a7577a1b7" target="_blank">Nabil</a>
                        <?php } else { ?>
                        @Nabil
                        <?php } ?></p>
            </div>
            <div class="quicklink">
                <h3 class="footertext">Terms Of Use</h3>
                <ul class="link">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about-us.php">About Us</a></li>
                    <li><a href="services.php">Services</a></li>
                </ul>
            </div>
            <div class="quicklink">
                <h3 class="footertext">Know As</h3>
                <ul class="link">
                    <li><a href="products.php">Our Products</a></li>
                    <li><a href="contact-us.php">Contact Us</a></li>
                    
                </ul>
            </div>
            <div class="footerbox">
                <h3 class="footertext">Follow Us</h3>
                <ul class="social">
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="https://use.fontawesome.com/c8ef8e6e73.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>var plugin_path = 'https://ntsmep.com/wp-content/themes/livefire_webster/webster_theme_files/js/';</script>
<script>
            AOS.init();
      </script>
      <!-- jQuery -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script type="text/javascript">
	// makes sure the whole site is loaded
	jQuery(window).load(function () {
		jQuery(".load").delay(1500).fadeOut("slow");
	})
</script>
<!-- jQuery -->
 <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script>
 $(document).ready(function() {
  var counter = 0;

  // Start the changing images
  setInterval(function() {
    if(counter == 2) { 
      counter = 0; 
    }

     changeImage(counter);
    counter++;
  }, 3000);

  // Set the percentage off
 // loading();
});

function changeImage(counter) {
   var images = [
    '<i class="fa fa-cube"></i>',
   '<i class="fa fa-cube"></i>',
   '<i class="fa fa-cube"></i>'

 ];

  $(".loader .image").html(""+ images[counter] +"");
}

function loading(){
  var num = 0;

  for(i=0; i<=100; i++) {
    setTimeout(function() { 
      $('.loader span').html("loading..." + num+'%');

      if(num == 100) {
        loading();
      }
      num++;
    },i*120);
  };

}

</script> -->
   <!-- <script type="text/javascript"> --> 
 
  
<!-- //     window.addEventListener("load", 
//     function(){
        
    

    
//      const loader = document.querySelector(".loader");
//      loader.className += "hidden";
//      //class loader
// // loader.classList.add("hidden");
//      } );
//  -->  

<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 0,
      responsiveClass: true,
      dots: false,
  responsive:{
    0: {
                        items: 1,
                        nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 4,
                    nav: true,
                    loop: false,
                    margin: 0
                }
    }
})
</script>


</body>
</html>