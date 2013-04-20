<!DOCTYPE html>
<html>
  <head>
    <title>Queen Villas</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <script type="text/javascript" src="/assets/js/modernizr.custom.79639.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.slitslider.js"></script>
  </head>
    <style>
      h1,h2,h3,h4,body { font-family:georgia,serif;font-weight:normal; }
      .bgtit { background-color:#feca28;width:105%;}
      p { text-align:justify;line-height:18pt;color:#888;}
      h6 { font-style:italic;color:#888;}
      .bot20 { padding-bottom:20px;}
      .bg { padding:10px;s}
      .feca { color:#000; }
      .feca a { color:#888;}
      .feca a:hover { color:#feca28;}
      .btn-spc { margin:-px 5px 0 5px;}
      .bgfeca { border-bottom:1px solid #feca28;top:5px;}
      .pull10 { padding-left:10px;}
      .top60 {margin-top:60px;}
      .test {background-color:#444;background-image:url(/assets/img/newsbg.jpg);background-size:cover;width:100%;height:300px;}
      .bahe {background:url(/assets/img/atfot.gif); background-size: cover;height:300px; padding-top: -100px;}
    </style>
  <body>
     <?php
        $year = date('Y', strtotime($content->timestamp));
        $month = date('m', strtotime($content->timestamp));
        $date = date('d', strtotime($content->timestamp));
      ?>
    <?php $this->load->view('static/nav'); ?>
    <div class="bg-head" style="background: url('/assets/img/eventscover.jpg'); background-size: cover;">
    </div>
    <div class="bahe">
      <div class="title-container">
        <div class="yellow-s"></div>
        <div class="container">
          <div class="yellow">
            <h2>What's On</h2>
            <p><i>Queen Villas & Spa</i></p>
          </div>
        </div>
      </div>
    </div>
    <div class="content container e10">
      <!-- Example row of columns -->
      <div class="row">
        <div class="span7">
            <h3><?=$content->title;?></h3>
            <h6><?="Published : ".date('M d, Y', strtotime($content->timestamp));?></h6>
            <div class="event-content">
              <?=$content->content;?>
            </div>
            </br>
            </hr>
        </div>
        <div class="span3 offset1 ">
          <h4 class="bgfeca">Latest Events</h4>
          <ul class="nav nav-pills nav-stacked pull10">
          <li><a href="/event/<?=$year;?>/<?=$month;?>/<?=$date;?>/<?=$content->slug;?>"><?=$content->title;?></a></li>
      </ul>
       </div>
        <div class="span3 offset1 ">
          <h4 class="bgfeca">Newsletter</h4>
        <p class="feca bg">Sign up to receive our email newsletter and we'll let you know about upcoming events and promotions and of course, special, email-only coupons and offers.</p>
        <form><input type="text" name="you"><a href="#" class="btn btn-primary btn-spc">Subscribe</a></form>
        </div>
      </div>
    </div>
      <div class="flame">
      </div>
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
  <script type="text/javascript" src="/assets/js/holder.js"></script>
  </body>
  </html>
