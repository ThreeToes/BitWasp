	    <div class="span9 mainContent" id="admin-panel">
		  
		  <?php echo $nav; ?>
			
		  <div class="container-fluid">
			<div class="row-fluid">
			  <span class="span3">User Count</span>
			  <span class="span7"><?php echo $user_count; ?></span>
			</div>
			
			<div class='row-fluid'>
			  <span class='span3'>Session Timeout</span>
			  <span class='span7'><?php echo $config['login_timeout']; ?> minutes</span>			  
			</div>
			
			<div class='row-fluid'>
			  <span class='span3'>Captcha Length</span>
			  <span class='span7'><?php echo $config['captcha_length']; ?> characters</span>			  
			</div>
			
			<div class='row-fluid'>
			  <span class='span3'>Registration Allowed?</span>	
			  <span class='span7'><?php echo ($config['registration_allowed'] == TRUE) ? 'Enabled' : 'Disabled'; ?></span>
			</div>

			<div class='row-fluid'>
			  <span class='span3'>Vendor Registration Allowed?</span>	
			  <span class='span7'><?php echo ($config['vendor_registration_allowed'] == TRUE) ? 'Enabled' : 'Disabled'; ?></span>
			</div>
			
			<div class="row-fluid">
			  <span class="span3">Registration Tokens</span>
			  <span class="span7"><?php echo anchor('admin/tokens','Manage'); ?></span>
			</div>
						
			<div class='row-fluid'>
			  <span class='span3'>Encrypted PM's</span>
			  <span class='span7'><?php echo ($config['encrypt_private_messages'] == TRUE) ? 'Enabled' : 'Disabled'; ?></span>
			</div>
			
			<div class='row-fluid'>
			  <span class='span3'>Force Vendor PGP?</span>
			  <span class='span7'><?php echo ($config['force_vendor_pgp'] == TRUE) ? 'Enabled' : 'Disabled'; ?></span>
			</div>
			  
		  </div>
		</div>
