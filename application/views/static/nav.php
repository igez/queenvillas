<div class="navbar">
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
			<li><a href="#">Tour</a></li>
	  		<li><a href="/events/">Events</a></li>
	  		<li><a href="/gallery/">Gallery</a></li>
	  		<li><a href="/contact/">Contact</a></li>
	  	</ul>
		
	  </div>
	</div>