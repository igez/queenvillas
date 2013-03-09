<!-- Example row of columns -->
	    <div class="row">
        <div class="span7">
        	<?php foreach ($content as $row) : ?>
        		<h3><?=$row->title;?></h3>
        		<h6><?="Published : ".date('M d, Y', strtotime($row->timestamp));?></h6>
        		<div class="event-content">
        			<?=$row->content;?>
        		</div>
        		</br>
        		</hr>
        	<?php endforeach ?>
		<ul class="pager">
		  <li class="previous">
			<a href="#">&larr; Older</a>
		  </li>
		  <li class="next">
			<a href="#">Newer &rarr;</a>
		  </li>
		</ul>
		
        </div>
        <div class="span3 offset2 ">
          <h4 class="bgfeca">Latest Events</h4>
          <ul class="nav nav-pills nav-stacked pull10">
			  <?php foreach ($content as $row): ?>
			  	<li><a href="/events/<?=$row->slug;?>"><?=$row->title;?></a></li>
			  <?php endforeach ?>
		  </ul>
       </div>
        <div class="span3 offset2 ">
          <h4 class="bgfeca">Newsletter</h4>
        <p class="feca bg">Sign up to receive our email newsletter and we'll let you know about upcoming events and promotions and of course, special, email-only coupons and offers.</p>
        <form><input type="text" name="you"><a href="#" class="btn btn-primary btn-spc">Subscribe</a></form>
        </div>
      </div>