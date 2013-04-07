  <?php foreach ($contents as $row) : ?>
  <div class="row-fluid">
    <div class="span12">
      <div class="well well-large">

        <h3>"<?=$row->title;?>"</h3>
        <p><?=$row->testimonial;?></p>

        <p class="guests"><i><b><?=$row->cust_name;?></b><?=", ".$row->cust_from;?>.</i></p>

      </div> <!-- /container -->
    </div> <!-- /span7 -->
  </div>
  <?php endforeach; ?>
