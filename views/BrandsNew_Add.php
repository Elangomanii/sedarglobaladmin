

	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    
		    <li><a href="javascript:;">Brands New Add</a></li>
		    <li class="active">Brands New Add</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header"><small> You may Add details here...</small></h1>
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
		    <h4 class="panel-title"> Brands </h4>
		</div>
		<div class="panel-body" >
		
		<form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('GlobalController/BrandsNew_Add'); ?>" class="form-horizontal form12">
		 <legend>ADD CONTENT FOR CHANGE</legend>
		 <div class="row">
		    <div class="col-md-6">
				<div class="form-group">
			     <label class="col-md-5">Brand Title</label>
		
				<div class="col-md-12">
				    <input type="text" name="name" id="name"  class="form-control input-sm" value="" placeholder="Brand Title" />
				</div>
				</div>
		    </div>

		    <div class="col-md-6">
				<div class="form-group">
			     <label class="col-md-5">Brand Link</label>
				
				<div class="col-md-12">
				    <input type="text" name="linkTitle" id="name"  class="form-control input-sm" value="" placeholder="Brand link" />
				</div>
				</div>
		    </div>
			</div>
				
			   <div class="row">
		    <div class="col-md-5">
				<div class="form-group">
			    <label class="col-md-5">Description</label>
			
				<div class="col-md-12">
				<textarea id="desc" name="desc" placeholder="Enter your content here" cols="25" rows="5" class="ckeditor textarea form-control  textarea_middle required"> </textarea>
				</div>
		    </div>
		    </div>

			<div class="col-md-3 col-md-offset-1">
			    <div class="form-group">
                                <label class="col-md-5">Name Image</label>
                              <div class="row AdjustPadding" id="image1">
                                <div class="col-md-12" id="gallery">
                                    <div class="ImageView AdjustPadding" style="padding-bottom:20px;"  >
                                        <img src="<?php echo site_url('assets/img/no-image.png');?>" class="col-md-12 previewimage gott2" id="dummy1" style="height: 185px; width: 200px;" >
                                        <input type="file" id="preview" name="image" class="col-md-12 "onchange="attachment(this);" >
                            </div>
                        </div>
                    </div>
			    </div>
			</div>
			    
			    
			    <div class="col-md-3">
			    <div class="form-group">
                               <label class="col-md-5">Brand Image</label>
                              <div class="row AdjustPadding" id="image2">
                                <div class="col-md-12" id="gallery1">
                                    <div class="ImageViews AdjustPadding" style="padding-bottom:20px;"  >
                                        <img src="<?php echo site_url('assets/img/no-image.png');?>" class="col-md-12 previewsimage gott" id="dummy2" style="height: 185px; width: 200px;" >
                                        <input type="file" id="previews" name="imagename" class="col-md-12 "onchange="attachmentss(this);" >

                            </div>
                        </div>
                    </div>
		    </div>
		</div>
			    </div>	
			   
			<div class="pager form-group">
                             <div class="col-md-7 control-label">
                                <input type="submit" class="btn btn-sm btn-success" name="Save" value="Save" >
				<button class="btn btn-sm btn-info" id="clear_data"  type="button"> Reset </button>
				<button class="btn btn-sm btn-danger" onclick="window.history.back();" type="button"> Cancel </button>
                             </div>
			</div>
			</form>
		</div>
	    </div>
	    </div>
	    <!-- end panel -->
	</div>
	<!-- end col-10 -->
    </div>
    <!-- end row -->
	</div>

	<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
	<!-- end scroll to top btn -->
</div>
<script>
    
  $('#clear_data').click(function() {
    //empty();
     $('.gott').removeAttr('src');
     $('.gott2').removeAttr('src');
      $('.gott').replaceWith("<img src='<?php echo site_url('assets/img/no-image.png');?>' class='col-md-12 previewimage gott' id='dummy1' style='height: 185px;' >");
      $('.gott2').replaceWith("<img src='<?php echo site_url('assets/img/no-image.png');?>' class='col-md-12 previewimage gott2' id='dummy1' style='height: 185px;' >");
     //alert();
     $('#form_validation')[0].reset();
         $('#form_validation').data('bootstrapValidator').resetForm();
   
});
    
</script>
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
    function attachmentss($this) {
  
var oFReader = new FileReader();
oFReader.readAsDataURL($this.files[0]);
oFReader.onload = function (oFREvent) {
    
$($this).parents('.ImageViews').find('img').attr("src",  oFREvent.target.result);

};
};
function attachmentsss()
    {
	
	$(".removeButton").on('click',function(){
	   
	    var $row   = $(this).parents('.ImageViews');
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
            name: {

                validators: {
                    notEmpty: {
                        message: 'The brand id is required'
                    }
                }
            },
            linkTitle: {

                validators: {
                    notEmpty: {
                        message: 'The product category is required'
                    }
                }
            }
        }
    });
});
</script>
 