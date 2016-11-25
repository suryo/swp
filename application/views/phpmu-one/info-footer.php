		<div class="wrap">
			<div id="about">
				<img src="<?php echo base_url();?>asset/logo/logo-footer.png" alt="Unidha" />
				<?php 
					$identitas = $this->db->query("SELECT * FROM identitas")->row_array();
					echo "$identitas[keterangan]"; 
				?>
			</div>
			
			<span id="copy">&copy; <?php echo date('Y'); ?> Universitas Indonesia Raya</span>
			<span id="social">
				Follow Universitas Indonesia Raya : 
				<a href="#" target="_blank"><img src="<?php echo base_url();?>asset/images/fb.png" alt="Facebook" width="16" height="16"></a>
				<a href="#" target="_blank"><img src="<?php echo base_url();?>asset/images/tw.png" alt="Twitter" width="16" height="16"></a>
				<a href="#" target="_blank"><img src="<?php echo base_url();?>asset/images/linkedin.png" alt="Linked" width="16" height="16"></a>
				<a href="#" target="_blank"><img src="<?php echo base_url();?>asset/images/yt.png" alt="Youtube" width="16" height="16"></a>
			</span>
			<div class="clear"></div>
		</div>