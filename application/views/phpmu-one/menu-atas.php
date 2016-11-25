<div id="nav-portal">
		<div class="wrap">
			<a id="nav-portal-toogle" href="#sidr">Nav Portal</a>
			<div id="sidr">
				<ul>
					<?php
						$menuatas = $this->db->query("SELECT * FROM menu where aktif='Ya' and position='Top' ORDER BY urutan ASC");
						foreach ($menuatas->result_array() as $row){
							echo '<li><a href="'.base_url().''.$row['link_menu'].'">'.$row['nama_menu'].'</a></li>';
						}
						?>
				</ul>
			</div>

		<img src="<?php echo base_url(); ?>asset/images/icon-search.png" title="Search" alt="Search" class="toggleSearch">
		<form class="ms-global-search_form" method="POST" action="<?php echo base_url(); ?>berita">
			<div>
			    <p>Search across all blogs:</p>
			    <input class="ms-global-search_vbox" name="kata" type="text" value="" size="16" tabindex="1" />
			    <input type="submit" class="button" value="Search" tabindex="2" />
			    <p><input title="Search on pages" type="checkbox" id="ms-global-search_80272361" name="msp" value="1"  />Search on pages</p>
    		 </div>
	    </form>	
		</div>
	</div>