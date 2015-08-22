
	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Project</a></li>
		   
		    <li class="active">Add Your Image Here</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">Add Your Images Here<small></small></h1>
		<!-- end page-header -->
		
		<!-- begin row -->
		<div class="row">
		    <!-- begin col-10 -->
		    <div class="col-md-12">
			<!-- begin panel -->
	    <div class="panel panel-inverse">
		<div class="panel-heading">
		    <div class="panel-heading-btn">
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
		    </div>
		    <h4 class="panel-title">Image Gallery</h4>
		</div>
		<div class="panel-body" id="">
		    <?php
		    foreach($docsedit as $row)
				    $projectImage= $row['projectImage'];
				    $projectImage= explode(",", $projectImage);
				   $length = count($projectImage);
				   ?>
		    
		  <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('GlobalController/ProjectImage_Edit/'.$row['id']); ?>" class="form-horizontal">
                    
		    <div class="row">
				 <div class="col-md-4">
			    <div class="form-group">
                               <label class="col-md-4">Image Name</label>
			       <div class="col-md-12">
                                <input type="text"name="projectImgTitle" id=""  class="form-control input-sm" value="<?php echo $row['projectImgTitle']?>" placeholder="Image Name" />
				
                            </div>
			    </div>
				 </div>

                            <button type="button" class="pull-right btn btn-primary" onclick="addImage()"><i class="fa  fa-plus"></i></button>
			</div>
		    
		<!--    <div class="row AdjustPadding" style="padding-bottom:20px;" >-->
			  
<!--                        <div class="page-title">
                             <div class="col-md-4" style="padding:10px; ">
                                <label>Image Name</label>
                                <input type="text" name="projectImgTitle" id=""  class="form-control input-sm" value="<?php echo $row['projectImgTitle']?>" placeholder="Image Name" />
                            </div>
			</div>-->
                        <div class="col-md-12" id="gallery">
				<?php
				for($i =0; $i <$length; $i++)
				{
				?>
                            <div class="col-md-4 col-sm-4 col-xs-12 ImageView AdjustPadding"  style="padding-bottom:20px;"  >
                                <img src="<?php echo site_url('uploads/'.$projectImage[$i]);?>" class="col-md-12 previewimage " id="dummy1" style="height: 185px;" >
                                <input type="file" id="preview" name="image[]" class="col-md-12 "onchange="attachment(this);" >
				    <input type="hidden" id="preview" name="oldimage[]" value="<?php echo $projectImage[$i];?>" >
                            </div><?php
			    
			    } ?>
                        </div>
                    
		    
		    
		   <div class="pager form-group">
                             <div class="col-md-7 control-label">
				<input type="submit" class="btn btn-sm btn-success"  name="Update" id="submit_but" value="Update" >
				<button class="btn btn-sm btn-danger " onclick="window.history.back();" type="button"> Cancel </button>
			    </div>
		    </div>
                 </form> 
		</div>
		
		
	    <!-- end panel -->
	  
	</div>
	   
	<!-- end col-10 -->
    </div>
    <!-- end row --> 
	</div>
	<!-- end #content -->
	
	<!-- begin scroll to top btn -->
	<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
	<!-- end scroll to top btn -->
</div>
<!-- end page container -->

</body>
</html>


 
 
 
 <script>
    function attachment($this) {

var oFReader = new FileReader();
oFReader.readAsDataURL($this.files[0]);
oFReader.onload = function (oFREvent) {
    
$($this).parents('.ImageView').find('img').attr("src",  oFREvent.target.result);

};

};

    
    
function attachments()
    {
	
	$(".removeButton").on('click',function(){
	   
	    var $row   = $(this).parents('.ImageView');
	    $row.remove();
	});
    }

</script>
 
 
<script>
    var i=0;	
   
function addImage(){
    if (i<3) {

	   $('<div class="col-md-4 ImageView AdjustPadding" style="padding-bottom:20px;"  > <div class="form-group"><img src="<?php echo site_url('assets/img/no-image.png');?>" class="col-md-12 previewimage gott" id="dummy1" style="height: 185px;" ><div class="input-group"><input type="file" id="preview" name="image[]" class="col-md-12 "onchange="attachment(this);" ><span class="input-group-btn"><a  onclick="" class="btn btn-sm btn-danger removeButton" data-template="textbox"><i class="fa fa-trash"></i></a></span></div></div></div>').appendTo("#gallery");
	     var $clone = $('[name="image[]"]');
	    $('#form_validation').bootstrapValidator('addField', $clone);
	    attachments();
	    i++;
	    }
	   
}
</script>

