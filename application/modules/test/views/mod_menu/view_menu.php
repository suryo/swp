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
                  <h3 class="box-title">Menu Website (Multilevel)</h3>
                  <a class='pull-right btn btn-primary btn-sm' href='<?php echo base_url(); ?>administrator/tambah_menuwebsite'>Tambahkan Data</a>
                </div><!-- /.box-header -->
                <div class="box-body">
				
				<div>
		<?php echo $output; ?>
    </div>
				
				
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style='width:20px'>No</th>
                        <th>Menu</th>
                        <th>Level Menu</th>
                        <th>Link</th>
                        <th>Aktif</th>
                        <th>Position</th>
                        <th>Urutan</th>
                        <th style='width:70px'>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php 
                    $no = 1;
                    foreach ($record->result_array() as $row){
                    $cmenu = $this->model_menu->menu_cek($row['id_parent'])->row_array();
                    if ($cmenu['id_parent']==''){ $menu = 'Menu Utama'; }else{ $menu = $cmenu['nama_menu']; }
                    echo "<tr><td>$no</td>
                              <td>$row[nama_menu]</td>
                              <td>$menu</td>
                              <td><a target='_BLANK' href='".base_url()."$row[link]'>$row[link]</a></td>
                              <td>$row[aktif]</td>
                              <td>$row[position]</td>
                              <td>$row[urutan]</td>
                              <td><center>
                                <a class='btn btn-success btn-xs' title='Edit Data' href='".base_url()."administrator/edit_menuwebsite/$row[id_menu]'><span class='glyphicon glyphicon-edit'></span></a>
                                <a class='btn btn-danger btn-xs' title='Delete Data' href='".base_url()."administrator/delete_menuwebsite/$row[id_menu]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
                              </center></td>
                          </tr>";
                      $no++;
                    }
                  ?>
                  </tbody>
                </table>
              </div>
			  </div> 
		</div> 
</body>
	  </html>