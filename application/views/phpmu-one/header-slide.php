<div id="rotator" class="cycle-slideshow" data-cycle-swipe="true" data-cycle-slides="> div">
		<?php
			  $terkini = $this->db->query("SELECT * FROM berita left join users on berita.username=users.username
										left join kategori on berita.id_kategori=kategori.id_kategori
											WHERE headline='Y' ORDER BY id_berita DESC LIMIT 5");
			  foreach ($terkini->result_array() as $t){
					echo "<div style='height:350px; overflow:hidden'>
							<a href='berita-$t[judul_seo].html'>
								<div>";
								if ($t['gambar'] == ''){
									echo "<img style='width:820px' src='".base_url()."asset/foto_berita/no-image.jpg' class='20130930155741' alt='$t[judul]' />";
								}else{
									echo "<img style='width:820px' src='".base_url()."asset/foto_berita/$t[gambar]' class='20130930155741' alt='$t[judul]' />";
								}
								echo "</div>
							</a>
						 </div>";
			  }
		?>
</div>