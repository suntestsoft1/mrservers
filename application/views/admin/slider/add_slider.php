<style>#slider_image{	border:1px solid #CCCCCC;	color:black;}</style><div class="row-fluid">	<!-- block -->	<div class="block">		<div class="navbar navbar-inner block-header">			<div class="muted pull-left">				<?php echo $title; ?>			</div>		</div>		<div class="block-content collapse in">			<div class="span12">				<form class="form-horizontal" method="post" name="add_slider" id="add_slider" action="<?php echo base_url();?>admin/slider/save_slider" enctype="multipart/form-data">					<fieldset>						<div class="control-group">							<label class="control-label" for="typeahead">Page Name</label>							<div class="controls">								<input type="text" class="span6" id="slider_page" name="slider_page" > 							</div>						</div>						<div class="control-group">							<label class="control-label" for="typeahead">Slider Title</label>							<div class="controls">								<input type="text" class="span6" id="slider_title" name="slider_title" >							</div>						</div>						<div class="control-group">							<label class="control-label" for="typeahead">Slider Image</label>							<div class="controls">								<input type="file" class="span6" id="slider_image" name="slider_image" >							</div>						</div>						<div class="control-group">							<label class="control-label" for="textarea2">Slider Link</label>							<div class="controls">								<input type="text" class="span6" id="slider_link" name="slider_link" >							</div>						</div>						<div class="form-actions">							<button type="submit" class="btn btn-primary" id="save_page">Save</button>						</div>					</fieldset>				</form>			</div>		</div>	</div>	<!-- /block --></div></div></div></div><script>	$("#add_slider").validate({		rules: 		{			slider_page: "required",			slider_title: "required",			slider_link:  { required: true, url: true } ,			slider_image: { required: true} ,		},					messages: 		{            slider_page: "Enter page name",            slider_title: "Enter a slider title",            slider_link: {								required: "Enter slider link",								url: "Please enter a URL"								},            slider_image: {								required: "Enter slider link",								},        }	});</script>