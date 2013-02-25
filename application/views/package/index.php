
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
	
    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <?php $i=1; ?>
        <?php foreach ($content as $row) : ?>
          <?php if ($i == 5): ?>
              <div class="span4"></div>
              <div class="span4">
              <img src="<?=$row->image;?>" class="img-circle" data-src="holder.js/140x140">
              <h2><?=$row->name;?></h2>
              <p><?=$row->desc;?></p>
              <p><a class="btn" href="/package/<?=$row->slug;?>">View details &raquo;</a></p>
            </div><!-- /.span4 -->
          <?php else : ?>
            <div class="span4">
              <img src="<?=$row->image;?>" class="img-circle" data-src="holder.js/140x140">
              <h2><?=$row->name;?></h2>
              <p><?=$row->desc;?></p>
              <p><a class="btn" href="/package/<?=$row->slug;?>">View details &raquo;</a></p>
            </div><!-- /.span4 -->
          <?php endif; ?>
        <?php $i++; ?>
      <?php endforeach; ?>
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-right" src="/assets/img/feat01.png">
        <h2 class="featurette-heading">Trust Us. <span class="muted">It'll blow your mind!</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-left" src="/assets/img/feat02.png">
        <h2 class="featurette-heading">Oh yeah, it's that good. <span class="muted">See for yourself.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-right" src="/assets/img/feat03.png">
        <h2 class="featurette-heading">And lastly, this one. <span class="muted">Checkmate.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
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
	<script src="/assets/js/jquery.js"></script>
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