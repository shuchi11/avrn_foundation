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
               
                <div class="col-md-4">
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
            
              <div class="col-md-4">
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
            
              <div class="col-md-4">
              <img class="img-responsive" src="<?php echo base_url('assets/images/ebook.jpg')?>"  >
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
