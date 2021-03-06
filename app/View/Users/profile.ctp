<script language="javascript" type="text/javascript">
$(document).ready(function(){
	$("#SaveButton").click(function()
	{
		var profImage = $("#profImage").val();
		if(profImage){
			return true;
		}else{
			return false;
		}	
	});
});
</script>
<div class="container">
	<div><h2>Profile Settings</h2></div>
	<div class="well">
		<div class="row">
			 <form class="form-horizontal" action="<?php echo HTTP_ROOT; ?>users/profile" method="post" enctype="multipart/form-data">
			 <input type="hidden" name="hid_old_prof_img" id="hid_old_prof_img" value="<?php echo $this->Session->read('profile_image'); ?>" />
				<fieldset>
					<div class="control-group">
						<label class="control-label">Profile Image <b>:</b></label>
						<div class="controls">
							<input type="file" name="data[profile][uploadimage]" id="profImage" class="input-xlarge"/>
						</div><br />
						<div class="controls">
							<?php if($this->Session->read('profile_image')){ ?>
								<img src="<?php echo HTTP_FILES."profile_images/".$this->Session->read('profile_image'); ?>" border="0" style="max-height:100px;max-width:100px;" />
							<?php } ?>	
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<button class="btn btn-primary" id="SaveButton">Save</button>
						</div>	
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>