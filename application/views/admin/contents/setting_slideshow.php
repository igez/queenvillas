<div>
	<ul class="breadcrumb">
		<li>
			<a href="#">Home</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="#">Setting</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="">Slideshow</a>
		</li>
	</ul>
</div>
<style>
	ul li {
		list-style: none;
	}

	.sliderSel {
		display: inline-block;
		padding: 6px 4px;
		width: 302px;
	}

	.sliderSel input[checked="checked"] {
		border: 1px solid blue;
	}

	.sliderSel img {
		border: 1px solid #fff;
	}
	.sliderSel textarea {
		margin-top: 5px;
		width:290px;
	}
	
	.actionBar input[type="checkbox"] {
		margin-left: 0;
	}


	.actionBar input, label {
		display: inline;
		width: 40px;
		padding: 2px;
	}
	.checkbox {
		float: left;
padding: 7px;
	}

	.selectWeight {
		width:50px;
	}
</style>
	
<script>
	$(document).ready(function() {
		$('button#delSlide').on('click', function(e) {
			var obj = $(this);
			var id = $(this).data('img');
			if (confirm('Are your sure?')) {
				$.ajax({
					url	: '/admin/setting/slideshow/delete',
					type : 'POST',
					data : "id="+id,
					success : function() {
						obj.parents('.sliderSel').fadeOut(500, function() {
							obj.parents('.sliderSel').remove();
						});
					},
					error : function() {
						console.log('error!');
					}
				});
				
				return false;
			}
			else {
				return false;
			}
			
		});
		$('.checkbox input').each(function() {
			if ($(this).attr('checked')) {
				//console.log($(this).val() + 'checked');
			}
			else {
				$('<input type="hidden" value="0" name="status[]" id="inputStatus"/>').appendTo($(this));
			}
		});
		$('.checkbox input').on('click', function() {
			$(this).find('#inputStatus').remove();
			if ($(this).attr('checked')) {
				$(this).attr('value', '1');
			}
			else {
				$(this).attr('value', '0');
				$('<input type="hidden" value="0" name="status[]" id="inputStatus"/>').appendTo($(this));
			}
		});
	});
</script>
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2>Slideshow Manager</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form action="" method="POST" enctype='multipart/form-data' type="file">
			<ul>
				<?php foreach ($sliders as $row): ?>
					<li class="sliderSel">
						<input type="hidden" name="id[]" value="<?=$row->id;?>" class="hide">
						<img src="/assets/img/sliders/<?=$row->image;?>">
						<textarea name="caption[]" cols="30" rows="3"><?=isset($row->caption) ? $row->caption : '';?></textarea>
						<div class="actionBar" style="float:left; width:300px;">
							<div class="checkbox">
								<?php if($row->status == 1) : ?>
									<input type="checkbox" class="chkStatus" name="status[]" value="1" checked> Publish
								<?php else : ?>
									<input type="checkbox" name="status[]" value="0"> Publish
								<?php endif; ?>
							</div>
							<div class="weight" style="float: right;">
								<label for="">Weight</label>
								<select name="weightFor[]" class="selectWeight" style="margin-bottom: 2px;">
									<?php for($i=1;$i<20;$i++):?>
										<?php if($row->weight == $i): ?>
											<?="<option value=\"$i\" selected>$i</option>";?>
										<?php else : ?>
											<?="<option value=\"$i\">$i</option>";?>
										<?php endif;?>
									<?php endfor;?>
								</select>
								<button class="btn btn-small btn-warning" style="margin-top: -2px;" id="delSlide" data-img="<?=$row->id;?>">x</button>
							</div>
						</div>
					</li>
				<?php endforeach ?>
			</ul>
			<hr>
			<div style="margin-left: 20px;">
				<label for="" style="display:block; width: 400px;">Add New Slide</label>
				<input type="file" name="img">
			</div>
			<hr>
			<button class="btn btn-large btn-success">Save</button>
			</form>
		</div>
	</div><!--/span-->
	
</div><!--/row-->