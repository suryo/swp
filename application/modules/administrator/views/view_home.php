           
 <div class="btn-box-row row-fluid">
        <div class="span12">
            <div class="well well-small well-box">
                <small class="pull-right">Tanggal: <?
$tgl=date('d-M-Y');
echo $tgl;
?></small>
                Selamat datang di <b> Enterprise System-Academy</b>
                <br>
                <i class="icon icon-map-marker"></i> IP: <?php

$ip_address=$_SERVER['REMOTE_ADDR'];

echo "$ip_address";

?>
                <i class="icon icon-phone"></i> Browser: <?php

$info=$_SERVER['HTTP_USER_AGENT'];

echo "$info";

?>
            </div>
        </div>
    </div>
			<a style='color:#000' href='<?php echo base_url(); ?>administrator/listberita'>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-book"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Berita</span>
                  <?php $jmla = $this->db->query("SELECT * FROM berita")->num_rows(); ?>
                  <span class="info-box-number"><?php echo $jmla; ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            </a>
			
			

            <a style='color:#000' href='<?php echo base_url(); ?>administrator/halamanbaru'>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-file"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Halaman</span>
                  <?php $jmlb = $this->db->query("SELECT * FROM halamanstatis")->num_rows(); ?>
                  <span class="info-box-number"><?php echo $jmlb; ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            </a>

            <a style='color:#000' href='<?php echo base_url(); ?>administrator/agenda'>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Agenda</span>
                  <?php $jmlc = $this->db->query("SELECT * FROM agenda")->num_rows(); ?>
                  <span class="info-box-number"><?php echo $jmlc; ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            </a>

            <a style='color:#000' href='<?php echo base_url(); ?>administrator/manajemenuser'>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-users"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Users</span>
                  <?php $jmld = $this->db->query("SELECT * FROM users")->num_rows(); ?>
                  <span class="info-box-number"><?php echo $jmld; ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            </a>

            <section class="col-lg-7 connectedSortable">
                <?php include "home_grafik.php"; ?>
            </section><!-- /.Left col -->

            <section class="col-lg-5 connectedSortable">
                <?php include "home_berita.php"; ?>

            </section><!-- right col -->
            