<div class="navbar visible-desktop">
		<div class="navbar-wrapper"></div>
	  <div class="navbar-inner">
	  	<a class="brand" href="#"><img src="/assets/img/logo.png" alt="" /></a>
	  	<ul class="nav nav-left">
	  		<li><a href="/">Home</a></li>
	  		<li class="dropdown">
	  			<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-event="hover">Facilities</a>
	  			<ul class="dropdown-menu" role="menu">
	  				<?php foreach ($nav as $row): ?>
	  					<?php if ($row->category_id == '2') : ?>
	  						<li><a href="/facilities/<?=$row->slug;?>"><?=$row->title;?></a></li>
	  					<?php endif; ?>
					<?php endforeach; ?>
	  			</ul>
	  		</li>
	  		<li class="dropdown">
	  			<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-event="hover">Accomodation</a>
	  			<ul class="dropdown-menu" role="menu">
	  				<?php foreach ($nav as $row): ?>
	  					<?php if ($row->category_id == '1') : ?>
	  						<li><a href="/accomodation/<?=$row->slug;?>"><?=$row->title;?></a></li>
	  					<?php endif; ?>
					<?php endforeach; ?>
	  			</ul>
			<li><a href="/package">Packages</a></li>
	  	</ul>
		
	  	<ul class="nav nav-right" style="left:20%;">
			<li><a href="#">Testimonials</a></li>
	  		<li><a href="/events/">Events</a></li>
	  		<li><a href="/gallery/">Gallery</a></li>
	  		<li><a href="/contact/">Contact</a></li>
	  	</ul>
		
	  </div>
	</div>

 <div class="navbar-wrapper hidden-desktop">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="/"><img src="/assets/img/logo_resp.png" width="auto" height="40px;"></a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="#">Home</a></li>
                 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Facilities <b class="caret"></b></a>
                  <ul class="dropdown-menu" role="menu">
                   <?php foreach ($nav as $row): ?>
	  					<?php if ($row->category_id == '2') : ?>
	  						<li><a href="/facilities/<?=$row->slug;?>"><?=$row->title;?></a></li>
	  					<?php endif; ?>
					<?php endforeach; ?>
                  </ul>
                <li class="dropdown">
	  			<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-event="dropdown">Accomodation <b class="caret"></b></a>
	  			<ul class="dropdown-menu" role="menu">
	  				<?php foreach ($nav as $row): ?>
	  					<?php if ($row->category_id == '1') : ?>
	  						<li><a href="/accomodation/<?=$row->slug;?>"><?=$row->title;?></a></li>
	  					<?php endif; ?>
					<?php endforeach; ?>
	  			</ul>
                <li><a href="/package">Packages</a></li>
                <li><a href="#">Tour</a></li>
                <li><a href="/events">Events</a></li>
                <li><a href="/gallery">Gallery</a></li>
                <li><a href="/contact">Contact</a></li>
                <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
               
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->

