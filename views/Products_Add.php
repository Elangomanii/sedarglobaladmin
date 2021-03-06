
	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    
		    <li><a href="javascript:;">Explore Products</a></li>
		    <li class="active">Explore Products Add</li>
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
		    <h4 class="panel-title">Explore Products </h4>
		</div>
		<div class="panel-body" >
		
		<form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('GlobalController/Products_Add'); ?>" class="form-horizontal form12">
		    <legend>ADD CONTENT FOR CHANGE</legend>
			<div class="row">
			    <div class="col-md-6">
				<div class="form-group">
					<label class="col-md-4">Brand</label>
				    <div class="col-md-12">
					<select name="brandId" id="brandId" class="form-control input-sm">
					    <option selected="" disabled="">Select</option>
					    <?php if (count($brandsView) > 0 )
					    {
						foreach ($brandsView as $row)
						{
							    ?>
					    <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
							   <?php } }?>
					</select>
				    </div>
				</div>
			    </div>

		   
		    <div class="col-md-6">
			    <div class="form-group">
                                    <label class="col-md-4">Product Category</label>
				<div class="col-md-12">
							
					<select name="productCat" id="productCat" class="form-control input-sm">
					    <option selected="" disabled="">Select</option>
					    <?php if (count($productCatView) > 0 )
					    {
						foreach ($productCatView as $row)
						{
							    ?>
					    <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
							   <?php } }?>
					</select>
				</div>
			    </div>
		   </div>
		 </div>
		 
				
				
			<div class="row">
			    <div class="col-md-6">
				    <div class="form-group">
                                    <label class="col-md-4">Product Material</label>
			
				<div class="col-md-12">
							<select name="productMat" id="productMat" class="form-control input-sm">
							    <option selected="" disabled="">Select</option>
							    <?php if (count($Material) > 0 )
							    {
								foreach ($Material as $row)
								{
									    ?>
							    <option value="<?php echo $row['id']; ?>"><?php echo $row['materialName']; ?></option>
									   <?php } }?>
							</select>
						
						</div>
			    </div>
		   </div>
		   
		    <div class="col-md-6">
			    <div class="form-group">
                                   <label class="col-md-4">Product Accesories</label>
			
				<div class="col-md-12">
					
							<select name="productAcc" id="productAcc" class="form-control input-sm">
							    <option selected="" disabled="">Select</option>
							    <?php if (count($Accessories) > 0 )
							    {
								foreach ($Accessories as $row)
								{
									    ?>
							    <option value="<?php echo $row['id']; ?>"><?php echo $row['AccessoriesName']; ?></option>
									   <?php } }?>
							</select>
				</div>
			    </div>
		   </div>
			</div>
										
			<div class="row">
			    <div class="col-md-6">
			    <div class="form-group">
                                    <label class="col-md-4">Motorzation</label>
		
				  
				  <div class="col-md-12">
				
					<b>No</b> <input name="motor" type="checkbox" onchange="if ($(this).prop('checked')) {$('#MotorOn').val('Y'); alert('Y');}else{$('#MotorOn').val('N'); alert('N');}" class="js-switch"  />
					<input type="hidden" name="MotorOn" id="MotorOn">
					    <b>Yes</b>
				  </div>
				  </div>
			    </div>
			</div>
				  
			<div class="row">
			    <div class="col-md-6">
			    <div class="form-group">
				    <label class="col-md-4">Product Name</label>
			
				  <div class="col-md-12">
				    <input type="text" name="productName" id="productName"  class="form-control input-sm" value="" placeholder="Product Name" />
				</div>
			    </div>
			    </div>
			</div>
				
				
			   
			   
			   <div class="row">
		                <div class="col-md-6">
			    <div class="form-group">
				<label class="col-md-4">Description</label>
			  
			    <div class="col-md-12">
				<textarea id="productDesc" name="productDesc" placeholder="Enter your content here" cols="25" rows="5" class="ckeditor textarea form-control  textarea_middle required"> </textarea>
			    </div>
		    </div>
		   </div>
	
				 <div class="col-md-4 col-md-offset-1">
			    <div class="form-group">
			<label class="col-md-4">Product Image</label>

                                <div class="col-md-12" id="gallery1">
                                    <div class="col-md-12 ImageViews AdjustPadding" style="padding-bottom:20px;"  >
                                        <img src="<?php echo site_url('assets/img/no-image.png');?>" class="col-md-12 previewsimage gott" id="dummy2" style="height: 185px; width: 200px;" >
                                        <input type="file" id="previews" name="imagename" class="col-md-12 "onchange="attachmentss(this);" >
                        </div>
                    </div>
		    </div>
				 </div>
				 
			    </div>
		  
		  
		      <div class="row">
				 <div class="col-md-12">
			    <div class="form-group">
			<h4 class="col-md-5">Product Multi Image</h4>
			<button type="button" class="pull-right btn btn-primary" onclick="addImage()"><i class="fa  fa-plus"></i></button>
			    </div>
				 </div>
		      </div>
			 
				<div class="col-md-12" id="gallery">
				    <div class="col-md-4 ImageView AdjustPadding" style="padding-bottom:20px;"  >
					 <div class="form-group">
					<img src="<?php echo site_url('assets/img/no-image.png');?>" class="col-md-12 previewimage gott2" id="dummy1" style="height: 185px;" >
					<input type="file" id="preview" name="image[]" class="col-md-12 "onchange="attachment(this);" >
				    </div>
				    </div>
				</div>
			     

                             <div class="col-md-7 control-label">
				<input type="submit" class="btn btn-sm btn-success" name="Save" value="Save" >
                                <button class="btn btn-sm btn-info " onclick=" form_reset();" id="clear_data" type="button"> Reset </button>
                                <button class="btn btn-sm btn-danger" onclick="window.history.back();" type="button"> Cancel </button>
                            
                             </div>
			
			</form>
		</div>
	    </div>
	    </div>
	    <!-- end panel -->
	</div>
    </div>


	<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>

<script>
    
    $('#clear_data').click(function() {

     $('.gott').removeAttr('src');
     $('.gott2').removeAttr('src');
      $('.gott').replaceWith("<img src='<?php echo site_url('assets/img/no-image.png');?>' class='col-md-12 previewimage gott' id='dummy1' style='height: 185px; width: 200px;' >");
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
function addImage(){
    $('<div class="col-md-4 col-sm-4 col-xs-12 ImageView " style="padding-bottom:20px;"  ><div class="form-group"><img src="<?php echo site_url('assets/img/no-image.png');?>" class="col-md-12 previewimage gott2" id="dummy1" style="height: 185px;" ><div class="input-group"><input type="file" id="preview" name="image[]" class="col-md-12 "onchange="attachment(this);" ><span class="input-group-btn"><a  onclick="" class="btn btn-sm btn-danger removeButton" data-template="textbox"><i class="fa fa-trash"></i></a></span></div></div></div></div>').appendTo("#gallery");
	   var $clone = $('[name="image[]"]');
	    $('#form_validation').bootstrapValidator('addField', $clone);   
	    attachments();
	    }

	
        var elem = document.querySelector('.js-switch');
        var init = new Switchery(elem,{ color: '#24D6FA'});
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
            brandId: {
            
                validators: {
                    notEmpty: {
                        message: 'The brand id is required'
                    }
                }
            },
            productCat: {

                validators: {
                    notEmpty: {
                        message: 'The product category is required'
                    }
                }
            },
	     productMat: {
                validators: {
                    notEmpty: {
                        message: 'The product material is required'
                    }
                }
            },
	     productAcc: {

                validators: {
                    notEmpty: {
                        message: 'The product accessory is required'
                    }
                }
            },
	    productName: {

                validators: {
                    notEmpty: {
                        message: 'The product accessory is required'
                    }
                }
            },
	    
	      imagename:{
		validators: {

		   file: {
			extension: 'jpg,png,gif',
			type: 'image/jpeg,image/png,image/gif',
			
			message: 'The file must not exceed 100kb in size'
                        },
			 notEmpty: {
                        message: 'Image is required'
                    }
                }
	    },
	      'image[]':{
		validators: {

		   file: {
			extension: 'jpg,png,gif',
			type: 'image/jpeg,image/png,image/gif',
			
			message: 'The file must not exceed 100kb in size'
                        },
			 notEmpty: {
                        message: 'Image is required'
                    }
                }
	    }
        }
    });
});
</script>

 
