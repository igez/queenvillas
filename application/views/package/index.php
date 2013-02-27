
  <style type="text/css">
  @font-face {
  font-family: "Redacted";
  src: url("/assets/fonts/red.eot");
  .lead { font-family: Redacted,sans-serif;
  }
  </style>

    <!-- NAVBAR
    ================================================== -->
    <?php $this->load->view('static/nav'); ?>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner hidden-phone hidden-tablet">
        <div class="item active">
          <img src="/assets/img/slide-01.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              
            </div>
          </div>
        </div>
        <div class="item">
          <img src="/assets/img/slide-02.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              
            </div>
          </div>
        </div>
        <div class="item">
          <img src="/assets/img/slide-03.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              
            </div>
          </div>
        </div>
		<div class="item">
          <img src="/assets/img/slide-04.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              
            </div>
          </div>
        </div>
        <div class="item">
          <img src="/assets/img/slide-06.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              
            </div>
          </div>
        </div>

		<div class="item">
          <img src="/assets/img/slide-05.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
	<script type="text/javascript">
		
		$(document).ready(function () {
			$('a.btn').on('click', function(e) {
			    e.preventDefault();
			    var url = $(this).attr('href');
			    $(".modal-body").html('<iframe width="100%" height="100%" frameborder="0" scrolling="no" allowtransparency="true" src="'+url+'"></iframe>');
			});
		});
		
	</script>
	
	
	
    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
        <?php $i=1; ?>
        <?php foreach ($content as $row) : ?>
        <?php if ($i == 1 || $i%3==0) echo "<div class='row' style='margin-bottom: 20px;'>"; ?>
			<div class="span4">
	          <img src="<?=$row->image;?>" class="img-circle" data-src="holder.js/140x140">
	          <h2><?=$row->name;?></h2>
	          <p><?=$row->desc;?></p>
	          <a href="/package/show" data-toggle="modal" class="btn" data-target="#packageModal">View Detail</a>
	        </div>
	    <?php if ($i%3==0) echo "</div>"; ?>
        <?php $i++; ?>
      <?php endforeach; ?>
     <!-- Modal Start Here ! -->
    	<div id="packageModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="color:black;">
			<div class="modal-header">
	   			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	    		<h3>Modal header</h3>
	  		</div>
	  		<div class="modal-body">
	  		</div>
		</div>


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-right" src="/assets/img/feat01.jpg">
        <h2 class="featurette-heading">Trust Us. <span class="muted">It'll blow your mind!</span></h2>
        <p class="lead">An island where no building is taller than a palm tree.</p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-left" src="/assets/img/feat02.jpg">
        <h2 class="featurette-heading">Oh yeah, it's that good. <span class="muted">See for yourself.</span></h2>
        <p class="lead">Often called "The Friendly Island" because the aloha spirit flourishes here.</p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-right" src="/assets/img/feat03.jpg">
        <h2 class="featurette-heading">And lastly, this one. <span class="muted">Checkmate.</span></h2>
        <p class="lead">Life here is slow and relaxed.

It's rural and peaceful. 

It's like stepping back in time 50 years.

It's a place like no other.</p>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->
      
    </div><!-- /.container -->
    
    <footer>
      <div class="footer-logo pull-left">
      </div>
      <div class="footer-desc pull-left">
        <p style="color: #695d58; font-weight: bold; font-size: 12px; padding-top: 10px;">Queen Villas & Spa</p>
        <p>Gili Trawangan Island, North Lombok - Indonesia</p>
      <p>ph: (62) 370-633686 (hunting) m: (62) 878-6450-4800 </p>
      <p>fax: (62) 370-633626</p>
      <p>email: info@queenvillas.com</p>
      </div>
      <div class="footer-soc">
        <ul>
          <li><img src="/assets/img/twitter.gif" alt="" /></li>
          <li><img src="/assets/img/fb.gif" alt="" /></li>
          <li><img src="/assets/img/mail.gif" alt="" /></li>
        </ul>
      </div>
    </footer>



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	
    <script src="/assets/js/bootstrap-transition.js"></script>
    <script src="/assets/js/bootstrap-alert.js"></script>
    <script src="/assets/js/bootstrap-modal.js"></script>
    <script src="/assets/js/bootstrap-dropdown.js"></script>
    <script src="/assets/js/bootstrap-scrollspy.js"></script>
    <script src="/assets/js/bootstrap-tab.js"></script>
    <script src="/assets/js/bootstrap-tooltip.js"></script>
    <script src="/assets/js/bootstrap-popover.js"></script>
    <script src="/assets/js/bootstrap-button.js"></script>
    <script src="/assets/js/bootstrap-carousel.js"></script>
    <script src="/assets/js/bootstrap-collapse.js"></script>
    <script src="/assets/js/bootstrap-typeahead.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script src="/assets/js/holder.js"></script>