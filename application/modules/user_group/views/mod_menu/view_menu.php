<?php error_reporting(0)?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<?php
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
  <title></title>
  <?php //echo $this->load->view('css_top')?>
  
</head>
<body>           
		   <div class="col-xs-12">  
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Menu User Group</h3>
           
                </div><!-- /.box-header -->
                <div class="box-body">
				
				<div>
		<?php echo $output; ?>
    </div>
				
				
                 
              </div>
			  </div> 
		</div> 
</body>
	  </html>