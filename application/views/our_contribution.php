<?php 
  $this->view('includes/head.php');
?>
  <body>
 
    <?php 
      $this->view('includes/nav.php');
    ?>
    
  <div class="container">
         
        <div class="row">
          
         
        <div class="container nav2"  style="margin-top: 70px;" >
        <div class="row">
               
               <div class="col-md-4" style="padding-top: 50px;">
                 <img class="img-responsive" src="<?php echo base_url('assets/images/suraksha3.jpg')?>" >  
               </div>
               <div class="col-md-6">
                   <h2 style="text-align: center;">Suraksha Kavach Masala</h2>
                  <p style="text-align: justify;"> The latest pandemic Corona Virus is spreading exponentially day by day in over 24 countries including India. Currently, there are no vaccines for this infection and so preventative measures are best to control the spread of the infection.
                   Different studies carried out all over the world says - 80% of covid19 infection are mild, 14% are severe and 4% are critical and rest cases are fatal.
                   The only option left is to increase our immunity level naturally. Recently the Ministry of AYUSH also advised people to drink decoction to increase immunity in a natural way.
                   At AVRN Foundation we have prepared the Suraksha Kavach Masala based on the guidelines of Ministry of AYUSH and has distributed the same to old age home and Gharonda - Destitute women house.
                   </p>
               </div>
               
           </div>
           <div class="row">
             
             <div class="col-md-10"><h6>Some packets are available and if anyone needs them for distribution or wants to use them in person, they may please contact us on this mobile number - 7770821853 or 9893611501 </div>
             </h4></div>
            <div class="row">
               
                <div class="col-md-4" style="padding-top: 50px;">
                <img class="img-responsive" src="<?php echo base_url('assets/images/cards.jpg')?>"  >
                </div>
                <div class="col-md-6">
                    <h2 style="text-align: center;">CARDS</h2>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut sollicitudin mi. Nunc 
                  vitae laoreet neque. Ut ut porta diam, nec tincidunt lacus. Aliquam cursus libero sit
                   amet neque porta feugiat. Nulla non leo vehicula, dictum magna consectetur, ullamcorper 
                   s. In ligula neque, convallis eu tortor eu, dignissim convallis velit. Nulla facilisi.
                    Vestibulum maximus arcu ac pulvinar laoreet. Pellentesque fringilla nunc a quam sodales 
                    finibus.
                </div>
                
            </div>
            <div class="row">
            
              <div class="col-md-4" style="padding-top: 50px;">
              <img class="img-responsive" src="<?php echo base_url('assets/images/paper_bag.jpeg')?>"  >
              </div>
              <div class="col-md-6">
                  <h2 style="text-align: center;">Paper Bags</h2>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut sollicitudin mi. Nunc 
                vitae laoreet neque. Ut ut porta diam, nec tincidunt lacus. Aliquam cursus libero sit
                 amet neque porta feugiat. Nulla non leo vehicula, dictum magna consectetur, ullamcorper 
                 s. In ligula neque, convallis eu tortor eu, dignissim convallis velit. Nulla facilisi.
                  Vestibulum maximus arcu ac pulvinar laoreet. Pellentesque fringilla nunc a quam sodales 
                  finibus.
              </div>
              
          </div>
          <div class="row">
            
              <div class="col-md-4" style="padding-top: 50px;">
              <img class="img-responsive" src="<?php echo base_url('assets/images/ebook3.jpg')?>"  >
              </div>
              <div class="col-md-6">
                  <h2 style="text-align: center;">Ebooks</h2>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut sollicitudin mi. Nunc 
                vitae laoreet neque. Ut ut porta diam, nec tincidunt lacus. Aliquam cursus libero sit
                 amet neque porta feugiat. Nulla non leo vehicula, dictum magna consectetur, ullamcorper 
                 s. In ligula neque, convallis eu tortor eu, dignissim convallis velit. Nulla facilisi.
                  Vestibulum maximus arcu ac pulvinar laoreet. Pellentesque fringilla nunc a quam sodales 
                  finibus.
              </div>
              
          </div>
           
          </div>
     <?php 
  $this->view('includes/footer.php');
?>
<script>
      $('.owl-carousel').owlCarousel(
    {
    loop :true,
    margin:10,
    nav:true,
    items:3,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1},
        
        600:{
            items:2
        },
        1000:{
            items:3}
    
    }
})
</script>
