
	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Client</a></li>
		   
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
		    foreach($clientEdit as $row)
				    $clientImage= $row['aboutClientImg'];
				    $clientImage= explode(",", $clientImage);
				    
				   $length = count($clientImage);
				    
				    
			            ?>
		    <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('GlobalController/ClientImage_Edit/'.$row['id']); ?>"" class="form-horizontal">
                    <div class="row AdjustPadding" id="image1" style="padding-bottom:20px;" >
                         <div class="col-md-4">
			    <div class="form-group">
                                <label class="col-md-4">Image Name</label>
				<div class="col-md-12">
                                <input type="text" name="aboutClientTitle" id=""  class="form-control input-sm" value="<?php echo $row['aboutClientTitle']?>" placeholder="Image Name" />
                            </div>
				</div>
				
			 </div>
			      
			      
			      
		
                        <div class="col-md-12" id="gallery">
			    <?php
				for($i =0; $i <$length; $i++)
				{
				?>
                            <div class="col-md-4 col-sm-4 col-xs-12 ImageView AdjustPadding" style="padding-bottom:20px;"  >
                          
                                
                                <img src="<?php echo site_url('uploads/'.$clientImage[$i]);?>" class="col-md-12 previewimage " id="dummy1" style="height: 185px;" >
                              <input type="hidden" name="oldimage[]" value="<?php echo $clientImage[$i]?>">
			        <input type="file" id="preview" name="image[]" class="col-md-12 "onchange="attachment(this);" >
                            </div><?php } ?>
                        </div>
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

	
	<!-- begin scroll to top btn -->
	<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>

</div>

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
$(document).ready(function() {
    $('#form_validation').bootstrapValidator({
	message: 'This value is not valid',
	//excluded:[':disabled'],
	//container: 'tooltip',
	feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        fields: {
	    
	    aboutClientTitle:{
		
		validators: {
		    
		     notEmpty: {
                        message: 'Image is required'
                    }
		}
		
	    }
	}
    });
});

</script>
