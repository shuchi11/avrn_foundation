<nav class="navbar navbar-expand-lg fixed-top " style="background-image: linear-gradient(#660066,#e600ac);" >
      <a class="navbar-brand" href="#">
        <img src="<?php echo base_url('assets/images/loogo.png')?>" alt="" loading="lazy">
      </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Events</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Get Involved
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo base_url('Main_controller/open_membership_form')?>">Membership form</a>
              <a class="dropdown-item" href="<?php echo base_url('Main_controller/open_volunteer_form')?>">Volunteer Form</a>
              <div class="dropdown-divider"></div>
              
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Main_controller/open_about_us')?>">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Main_controller/open_our_contribution')?>">Our contributions</a>
          </li>
        </ul>
        
      </div>
    </nav>