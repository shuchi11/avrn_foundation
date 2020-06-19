<?php 
  $this->view('includes/head.php');
?>
  <body>
 
    <?php 
      $this->view('includes/nav.php');
    ?>
    
    <div class="img-wrapper">
        <img class="img-responsive" src="<?php echo base_url('assets/images/background1.webp')?>" style="height: 100vh;">
        <div class="img-overlay">
          <p class="texth" style="color: white;">“At the end of the day, it's not about what you have or even what you've accomplished.</br> 
            It's about what you've done with those accomplishments.</br> It’s about who you've lifted up, 
            who you've made better. It about what you've given back.” - Denzel Washington</p>
          <button type="button" class="btn btn-warning btn-lg">DONATE NOW</button>
        </div>
    </div>
  <div class="shadow p-3 mb-5  rounded container">
      <div class="row  ">
          <div class=" col-xl-6 left1 " >
              <h2 style="text-align: center;">ABOUT US</h2>
              <p style="text-align: justify;">It is this sense of empowerment that drives the AVRN Foundation, 
            where we focus on contributing to positive change for the underprivileged. Working 
            with education and skill development, we are primarily focused on rural areas, education for 
            children, women empowerment and digital education of citizens. We are also focused on making
             people aware of their surroundings while taking care of hygiene and ensuring steps for proper 
             healthcare and also of providing them with immediate facilities in events of natural disasters.</p></div>
          <div class="col-xl-6 right1">
              <h2 style="text-align: center;">OUR BACKDROUND</h2>
              <p style="text-align: justify;">AVRN Foundation started under the name of 
            Abhiyant NGO and had been working in Madhya Pradesh since 2015, with humanitarian causes as Library
             for Entertainment, tree plantation and food, old clothes and medicine distribution for the local 
             public in Madhya Pradesh. As of 2019, Abhiyant has transformed into AVRN Foundation, 
            increasing its area of activity from the state to the entirety of India.</p></div>
            <div class="col-xl-6 left" >
                <h2 style="text-align: center;">MISSION</h2>
                <p style="text-align: justify;">“At the end of the day, it's not about what you have or even what you've
                    complished. It's about what you've done with those accomplishments. It’s about 
                    who you've lifted up, who you've made better. It about what you've given back.” - Denzel 
                    Washington.AVRN Foundation’s mission is to support the underprivileged with the right resources
                     and guidance to help them achieve better lives.</p></div>
            <div class="col-xl-6 right">
                <h2 style="text-align: center;">VISION</h2>
                <p style="text-align: justify;">Our vision is to make India skilled for the industry and society alike.
                     Aligning to the initiative of Digital India, AVRN Foundation is striving to put people from all age
                     ps and across villages on a digitally enabled platform. We are committed to helping people discover
                      the internet, 
                    and bring the benefits of knowledge, awareness and education into their easy reach.</p></div>
          
        
      </div>
     

  </div>
  <h1 style="text-align: center;">WE WORK FOR</h1>
 
    <div class="container">
        <div class="row">
            
        <div class="col-xl-4"><input type="image" src="<?php echo base_url('assets/images/r4.jpg')?>" alt="Submit" class="img-thumbnail hover-shadow cursor " id="myImg"  onclick="myFunction()"></div>
        <div class="col-xl-4"><input type="image" src="<?php echo base_url('assets/images/s6.jpg')?>" alt="Submit" class="img-thumbnail hover-shadow cursor " id="myImg"  onclick="myFunction()"></div>
        <div class="col-xl-4"><input type="image" src="<?php echo base_url('assets/images/e2.jpg')?>" alt="Submit" class="img-thumbnail hover-shadow cursor " id="myImg"  onclick="myFunction()"></div>
       
        </div>
    </div>
    <script>
            function myFunction() {
                $('#exampleModal').modal('toggle')
            }
            </script>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" style="text-align: center;">WOMEN EMPOWERMENT</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p style="text-align:justify;">Women empowerment is something the entire society can benefit from, as a woman forms the 
                strongest pillar in a family. In such acknowledgement, if the conditions that women are
                 subjected to are improved, it would lead to a boost in the growth of individual families
                 d communities alike. But it’s often observed that women are subjected to prejudice- in some
                  cases beginning from the childhood itself- in terms of education, opportunities and
                   exposure to technology.</p>
          </div>
          <div class="modal-footer">
            
            <button type="button" class="btn btn-primary">Close</button>
          </div>
        </div>
      </div>
    </div>
</div>
    <div class="container">
        <div class="row">
      
          <div class="col-xl-4"><input type="image" src="<?php echo base_url('assets/images/l6.jpg')?>" alt="Submit" class="img-thumbnail hover-shadow cursor " id="myImg"  onclick="myFunction()"></div>
          <div class="col-xl-4"><input type="image" src=" <?php echo base_url('assets/images/D2.jpg')?>" alt="Submit" class="img-thumbnail hover-shadow cursor " id="myImg"  onclick="myFunction()"></div>
          <div class="col-xl-4"><input type="image" src="<?php echo base_url('assets/images/h5.jpg')?>" alt="Submit" class="img-thumbnail hover-shadow cursor " id="myImg"  onclick="myFunction()"></div>
        </div>
    </div>
    <h1 style="text-align: center;">EVENTS</h1>
    
    <div class="container mt-5">
    <div class="card-deck">
      <div class="card card-set1 text-white">
        <div class="card-body" >
          <img src="<?php echo base_url('assets/images/w.jpeg')?>" class="img-fluid" alt="paper bag"/>
          <h3 class="card-title mt-2">Workshop on Paper Bags For Women</h3>
          <p style="text-align: justify;" class="card-text mt-3">On December 2, 2019 our Non - Government Organisation – AVRN Foundation organized an interactive 
            workshop for destitute women of a shelter home named GHARONDA, who are in difficult circumstances, 
            have no one to support, has been left alone by the family and are unable to live life respectfully.
            <button type="button" class="btn btn-dark btn-sm" style="float: right;">Read more..</button>
</p>
        </div>

      </div>
      <div class="card card-set2  text-white">
        <div class="card-body">
          <img src="<?php echo base_url('assets/images/2p.jpg')?>" class="img-fluid" alt="paper bag"/>
          <h3 class="card-title mt-2">Paper Bag Making for Children</h3>
          <p style="text-align: justify;" class="card-text mt-3">School Name : Sagar Public School, Ratibad</br>
            Date : 08 Dec 2019</br>
            Public : Student - Class I to Class XII and their parents, teachers of SPS and public of 
            Nehru Nagar etc.</br>
            Objective :</br>
            1) To popularize paper bags and promote BYOB. <button type="button" class="btn btn-dark btn-sm" style="float: right;">Read more..</button></p>
            
        </div>

      </div>
      <div class="card card-set3  text-white">
        <div class="card-body">
          <img src="<?php echo base_url('assets/images/4p.jpeg')?>" class="img-fluid" alt="paper bag"/>
          <h3 class="card-title mt-2">Report on Activity – Paper Bag Making</h3>
          <p style="text-align: justify;"  class="card-text mt-3">School Name : Global Public School
            Public : Student - Class I to Class VII
            Objective :
            1) To popularize paper bags and promote BYOB (Bring Your Own Bag).
            2) To encourage the students to make their own bags with used paper.
            3) To help greatly reduce plastic bags usage. <button type="button" class="btn btn-dark btn-sm" style="float: right;">Read more..</button></p>
        </div>
        </div>
      </div>
    </div>
    
    
    <div class="parent-box owl-carousel ">
      <div class="box"><img src="<?php echo base_url('assets/images/1.jpg')?>" class="img-thumbnail"></div>
      <div class="box"><img src="<?php echo base_url('assets/images/2.jpg')?>" class="img-thumbnail"></div>
      <div class="box"><img src="<?php echo base_url('assets/images/3.jpg')?>" class="img-thumbnail"></div>
      <div class="box"><img src="<?php echo base_url('assets/images/4.jpg')?>" class="img-thumbnail"></div>
      <div class="box"><img src="<?php echo base_url('assets/images/5.jpg')?>" class="img-thumbnail"></div>
      <div class="box"><img src="<?php echo base_url('assets/images/6.jpg')?>" class="img-thumbnail"></div>
      <div class="box"><img src="<?php echo base_url('assets/images/7.jpg')?>" class="img-thumbnail"></div>
      <div class="box"><img src="<?php echo base_url('assets/images/8.jpeg')?>" class="img-thumbnail"></div>
      <div class="box"><img src="<?php echo base_url('assets/images/9.jpeg')?>" class="img-thumbnail"></div>
      <div class="box"><img src="<?php echo base_url('assets/images/10.jpg')?>" class="img-thumbnail"></div>
      <div class="box"><img src="<?php echo base_url('assets/images/11.jpeg')?>" class="img-thumbnail"></div>
      <div class="box"><img src="<?php echo base_url('assets/images/12.jpg')?>" class="img-thumbnail"></div>
      <div class="box"><img src="<?php echo base_url('assets/images/13.jpg')?>" class="img-thumbnail"></div>
      <div class="box"><img src="<?php echo base_url('assets/images/14.jpeg')?>" class="img-thumbnail"></div>
      <div class="box"><img src="<?php echo base_url('assets/images/15.jpg')?>" class="img-thumbnail"></div>
      <div class="box"><img src="<?php echo base_url('assets/images/16.jpg')?>" class="img-thumbnail"></div>
      
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
