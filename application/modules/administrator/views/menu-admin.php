        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
			<?php 
                $usr = $this->db->query("SELECT * FROM users where username='".$this->session->username."'")->row_array(); 
				?>
              <img src="<?php echo base_url(); ?>/asset/foto_user/<?php echo "$usr[foto]"; ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <?php 
                $usr = $this->db->query("SELECT * FROM users where username='".$this->session->username."'")->row_array(); 
                echo "<p>$usr[nama_lengkap]</p>";
				$level = $usr['level_id'];
				//echo "<p>$usr[level_id]</p>";
              ?>
              
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header" style='color:#fff; text-transform:uppercase; border-bottom:2px solid #00c0ef'>MENU ADMIN</li>
            <li><a href="<?php echo base_url(); ?>administrator/home"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

			<!--<li><a href="<?php //echo base_url(); ?>examples"><i class="fa fa-dashboard"></i> <span>example dropdown</span></a></li>-->
			
<?php
//$keymail = "'".$email."'";
$keymail ="'".$this->session->username."'";
// $sqlm ="SELECT * FROM users as u, user_group as ug, detail_user_group as dug where u.username = dug.username and dug.level_id = ug.level_id and u.username = $keymail";
$sqlm ="SELECT dug.level_id FROM users as u, user_group as ug, detail_user_group as dug where dug.level_id = ug.level_id and dug.username = $keymail GROUP BY ug.nama_group ";
//echo $sqlm;
$querym = $this->db->query($sqlm);
foreach ($querym->result() as $menuid)
{
$level=$menuid->level_id;
//echo "level : ".$level;
$q="SELECT * FROM menu_user_group as mug, menu as m where mug.id_menu=m.id_menu and mug.kode_group=$level and m.id_parent=0 group by mug.id_menu"; 
$ul = $this->db->query($q);
foreach ($ul->result() as $m)
	{
		$parent=$m->nama_menu;
		$keyparent=$m->id_menu;
		//echo "parent : ".$parent;
		?>
		<li class="treeview">
		<a href="#"><i class="glyphicon glyphicon-th-list"></i> <span><?php echo $parent ?></span><i class="fa fa-angle-left pull-right"></i></a>
		<ul class="treeview-menu">
			<?php 
			$qc="SELECT * FROM menu as m where m.id_parent=$keyparent and m.frontback = 'back' ";
			$cm = $this->db->query($qc);
				foreach ($cm->result() as $c)
				{
				$child=$c->nama_menu;	
				//echo "child : ".$child."<br>";
				?><li><a href="<?php echo base_url($c->link_menu)?>"><i class="fa fa-circle-o"></i> <?php echo $c->nama_menu;  ?></a></li>
				<?php
				}
			?>
		</ul>
		</li>
		<?php
	}
}

?>
		
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-th-list"></i> <span>Menu Utama</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>administrator/identitaswebsite"><i class="fa fa-circle-o"></i> Identitas Website</a></li>
                <li><a href="<?php echo base_url(); ?>administrator/menuwebsite"><i class="fa fa-circle-o"></i> Menu Website</a></li>
                <li><a href="<?php echo base_url(); ?>administrator/menugroup"><i class="fa fa-circle-o"></i> Menu Group</a></li>
                <li><a href="<?php echo base_url(); ?>administrator/menugrouplist"><i class="fa fa-circle-o"></i> Menu Group List</a></li>
                <li><a href="<?php echo base_url(); ?>administrator/halamanbaru"><i class="fa fa-circle-o"></i> Halaman Baru</a></li>
              </ul>
            </li>
            	<!--<li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-pencil"></i> <span>Modul Berita</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>administrator/listberita"><i class="fa fa-circle-o"></i> List Berita</a></li>
                <li><a href="<?php echo base_url(); ?>administrator/kategoriberita"><i class="fa fa-circle-o"></i> Kategori Berita</a></li>
                <li><a href="<?php echo base_url(); ?>administrator/tagberita"><i class="fa fa-circle-o"></i> Tag Berita</a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-object-align-left"></i> <span>Modul Web</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>administrator/logowebsite"><i class="fa fa-circle-o"></i> Logo Website</a></li>
                <li><a href="<?php echo base_url(); ?>administrator/lowker"><i class="fa fa-circle-o"></i> Info Lowker</a></li>
                <li><a href="<?php echo base_url(); ?>administrator/download"><i class="fa fa-circle-o"></i> File Download</a></li>
                <li><a href="<?php echo base_url(); ?>administrator/agenda"><i class="fa fa-circle-o"></i> List Agenda</a></li>
                <li><a href="<?php echo base_url(); ?>administrator/pesanmasuk"><i class="fa fa-circle-o"></i> Pesan Masuk</a></li>
              </ul>
            </li> 
            <li class="treeview">
              <a href="#"><i class="fa fa-cog"></i> <span>Modul Users</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>administrator/manajemenuser"><i class="fa fa-circle-o"></i> Manajemen User</a></li>
              </ul>
            </li>
           -->
            <li><a href="<?php echo base_url(); ?>administrator/edit_manajemenuser/<?php echo $this->session->username; ?>"><i class="fa fa-user"></i> <span>Edit Profile</span></a></li>
            <li><a href="<?php echo base_url(); ?>administrator/logout"><i class="fa fa-power-off"></i> <span>Logout</span></a></li>
          </ul>
        </section>