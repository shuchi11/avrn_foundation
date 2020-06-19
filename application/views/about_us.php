<?php 
  $this->view('includes/head.php');
?>
  <body>
 
    <?php 
      $this->view('includes/nav.php');
    ?>
    <div style="margin-top: 100px;">
   <h1 style="text-align: center;">OUR TEAM</h1>

        <div class="shadow p-3 mb-5  rounded container">
        <div class="card-deck">
            <div class="card card-set4 text-white">
              <img src="<?php echo base_url('assets/images/about4.jpg')?>" class="card-img-top  hover-shadow cursor " alt="...">
              <div class="card-body">
                <h5 class="card-title">Name</h5>
                <p class="card-text">position</p>
              
              </div>
            </div>
            <div class="card card-set4 text-white">
                <img src="<?php echo base_url('assets/images/about4.jpg')?>" class="card-img-top  hover-shadow cursor" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Name</h5>
                  <p class="card-text">position</p>
                  
                </div>
              </div>
              <div class="card card-set4 text-white">
                <img src="<?php echo base_url('assets/images/about4.jpg')?>" class="card-img-top  hover-shadow cursor" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Name</h5>
                  <p class="card-text">position</p>
                  
                </div>
              </div>
              <div class="card card-set4 text-white">
                <img src="<?php echo base_url('assets/images/about4.jpg')?>" class="card-img-top  hover-shadow cursor" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Name</h5>
                  <p class="card-text">position</p>
                  
                </div>
              </div>
          </div>
      </div>
        <div class="b1">
    <div class="container">
      <div class="row">
        <div class="col-md-0.5"></div>
        <div class="col-xl-6"><h3 style="text-align: left;">AVRN Foundation</h3><p style="text-align: justify;" >
          At AVRN Foundation, we are aimed at being the cause for not only social and civic
           impact but also for transforming people into advocates of bringing positive change. Focusing
            on education, skill development, health and digital education for every citizen, our
             objective extends beyond one of providing people with assistance in their efforts towards
              a better life, to that of enabling them to be positive
               change-makers in someone else’s!</p>
          
         
          </div>

        </div>
      </div>
    </div>
    <div class="b2">
      <div class="container">
      <p style="text-align: center;"> © 2020 Copyright AVRN Foundation</p>
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
