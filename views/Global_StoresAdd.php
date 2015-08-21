<?php
//print_r($getStory[0]);
//
//exit;
?>
	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Application</a></li>
		    <li><a href="javascript:;">Define</a></li>
		    <li><a href="javascript:;">Address</a></li>
		    <li class="active">Country</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">View<small> You may view details here...</small></h1>
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
		    <h4 class="panel-title">View </h4>
		</div>
		<div class="panel-body">
		  <form action="<?php echo base_url(); ?>GlobalController/globalStoreAdd" class="form-horizontal"  id="form_validation" method="post" name="form_validation" enctype="multipart/form-data">
		    
		    <legend>ADD COUNTRY FOR CHANGE ..</legend>
                    <div class="row">
			    <div class="col-md-4">
				<div class="form-group">
				    <label for="inputEmail" class="col-md-2">Country</label>
					<div class="col-md-12">
					<select class="form-control input-sm" id="country" name="country">
					<option>select Country</option>
					<?php foreach ($country as $row) {?>
					<option value="<?php echo $row['CountryCode']?>"><?php echo $row['CountryName']?></option>
					<?php }?>
				    </select>
				</div>
			    </div>
			    </div>

			   <div class="col-md-4">
				<div class="form-group">
			    <label for="inputEmail" class="col-md-2">State</label>
			    <div class="col-md-12">
			    <select class="form-control input-sm" id="state" name="state">
				<option>select State</option>
				<?php foreach ($state as $row) {?>
				<option value="<?= $row['StateCode']?>"><?= $row['StateName']?></option>
				<?php }?>
				 </select>
			    </div>
			    </div>
			    </div>
			   
			   <div class="col-md-4">
				<div class="form-group">
			    <label for="inputEmail" class="col-md-2">City</label>
			    <div class="col-md-12">
			    <select class="form-control input-sm" id="city" name="city">
				<option>select City</option>
				<?php foreach ($city as $row) {?>
				<option value="<?= $row['CityCode']?>"><?= $row['CityName']?></option>
				<?php }?>
				 </select>
			    </div>
			    </div>
			   </div>
		    </div>	    
		    
		    
		    <legend>ADD COUNTRY FOR CHANGE ..</legend>
                    <div class="row">

			    <div class="col-md-4">
				<div class="form-group">
                            <label class="col-md-6">Address title</label>
			    <div class="col-md-12">
                            <input class="form-control input-sm" name="address1" type="text" value="<?php //echo $getStory[0]['address title']?>" placeholder="TYPE YOUR OWN TITLE">
			    </div>
			    </div>
			    </div>
			   <div class="col-md-4">
				<div class="form-group">
                            <label class="col-md-2">Address#1</label>
			    <div class="col-md-12">
                            <input class="form-control input-sm" name="address2" type="text" value="<?php //echo $getStory[0]['address1']?>" placeholder="TYPE YOUR OWN TITLE">
			    </div>
				</div>
			   </div>
			    <div class="col-md-4">
				<div class="form-group">
                            <label class="col-md-2">Address#2</label>
			    <div class="col-md-12">
                            <input class="form-control input-sm" name="address3" type="text" value="<?php //echo $getStory[0]['address2']?>" placeholder="TYPE YOUR OWN TITLE">
			    </div>
				</div>
                        </div>
		    </div>
			<div class="row">
			 <div class="col-md-4">
				<div class="form-group">
                            <label class="col-md-2">Fax</label>
			    <div class="col-md-12">
                            <input class="form-control input-sm" name="fax" type="text" value="<?php //echo $getStory[0]['fax']?>" placeholder="TYPE YOUR OWN TITLE">
			 </div>
				</div>
			 </div>
			  <div class="col-md-4">
				<div class="form-group">
                            <label class="col-md-6">Phone Number</label>
			    <div class="col-md-12">
                            <input class="form-control input-sm" name="phone" type="text" value="<?php //echo $getStory[0]['phone']?>" placeholder="TYPE YOUR OWN TITLE">
			 </div>
				</div>
			  </div>
			 </div>

			<legend>ADD STORE FOR CHANGE ..</legend>
			<div class="row">
			<div class="row AdjustPadding" id="image1" style="padding-bottom:20px;" >
                        <div class="col-md-12">
			     <div class="form-group">
                            <div class="col-md-4 viewer AdjustPadding" style="padding-bottom:20px;"  >
				<img src="<?php echo site_url('assets/img/no-image.png');?>" class="col-md-12 previewimage gott" style="height: 185px;" >
				    <input type="file" id="previewer" name="imagetext" class="col-md-12 "onchange="attachmenter(this);" >
                            </div>
			     </div>
                        </div>
                    </div>
		    </div>
			 
		     <legend>ADD EXTRA STORES FOR CHANGE ..<button type="button" onclick="addImage()" class="pull-right btn btn-primary"><i class="fa  fa-plus"></i></button></legend>
		    <div class="row">

			<div class="col-md-4">
				<div class="form-group">
                                <label class="col-md-6">Image Name</label>
				<div class="col-md-12">
                                <input type="text" name="description" class="form-control input-sm" value="" placeholder="Image Name" />
                            </div>
				</div>
			</div>
		    </div>
			<div class="row">
			<div class="row AdjustPadding" id="image1" style="padding-bottom:20px;" >
                        <div class="col-md-12" id="gallery">
                            <div class="col-md-4 ImageViewer AdjustPadding" style="padding-bottom:20px;"  >
				 <div class="form-group">
				<img src="<?php echo site_url('assets/img/no-image.png');?>" class="col-md-12 previewimage gott2" id="dummy1" style="height: 185px;" >
				    <input type="file" id="preview" name="image[]" class="col-md-12" onchange="attachment(this);" >
				 </div>
				 </div>
		     </div>
			</div>
		     </div>
                   
			<div class="pager form-group">
                             <div class="col-md-7 control-label">
                                <button  class="btn btn-success btn-sm" type="submit" name="save" >Save</button>
				<button class="btn btn-sm btn-info " id="clear_data" type="button"> Reset </button>
                                <button  class="btn btn-default btn-sm" onclick="window.history.back();" type="button">Cancel</button>
                             </div>
                             
                         </div>
                        
                    </form>
		</div>
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

<script>
    
      $('#clear_data').click(function() {
    //empty();
     $('.gott').removeAttr('src');
      $('.gott2').removeAttr('src');
      $('.gott').replaceWith("<img src='<?php echo site_url('assets/img/no-image.png');?>' class='col-md-12 previewimage gott' id='dummy1' style='height: 185px;' >");
    $('.gott2').replaceWith("<img src='<?php echo site_url('assets/img/no-image.png');?>' class='col-md-12 previewimage gott2' id='dummy1' style='height: 185px;' >");
     alert();
     $('#form_validation')[0].reset();
      $('#form_validation').data('bootstrapValidator').resetForm();
   
});
    
    
   
   $('#country').change(function() { 
    var codecountry=$(this).find("option:selected").val();
    //alert(codecountry);
    $.ajax({
	
	type:'post',
	url: "<?=site_url('GlobalController/findState');?>",
	data:{codecountry:codecountry},
	success: function (response){
	
	$('#state').html(response);
	}
	
    });
   });
    
    $('#state').change(function() { 
    var codestate=$(this).find("option:selected").val();
    //alert(codestate);
    $.ajax({
	
	type:'post',
	url: "<?=site_url('GlobalController/findcity');?>",
	data:{codestate:codestate},
	success: function (response){
	
	$('#city').html(response);
	}
	
    });
   });
    
</script>

<script>

function attachments()
    {
	
	$(".removeButton").on('click',function(){
	   
	    var $row = $(this).parents('.ImageViewer');
	    $row.remove();
	});
    }
    
    function addImage(){
    $('<div class="col-md-4 col-sm-4 col-xs-12 ImageViewer" style="padding-bottom:20px;"  ><div class="form-group"><img src="<?php echo site_url('assets/img/no-image.png');?>" class="col-md-12 previewimage gott2" id="dummy1" style="height: 185px;" ><div class="input-group"><input type="file" id="preview" name="image[]" onchange="attachment(this)" ><span class="input-group-btn"><a  onclick="" class="btn btn-sm btn-danger removeButton" data-template="textbox"><i class="fa fa-trash"></i></a></span></div></div></div>').appendTo("#gallery");	
    
      var $clone = $('[name="image[]"]');
	    $('#form_validation').bootstrapValidator('addField', $clone);
    attachments();
    }
    
    function attachment($this) {
  var imgval=$('#preview').val();
$('#dummy1').val(imgval);
    var oFReader = new FileReader();
    oFReader.readAsDataURL($this.files[0]);
    oFReader.onload = function (oFREvent) {
    $($this).parents('.ImageViewer').find('img').attr("src",  oFREvent.target.result);
    
    };
    };
    
    
    function attachmenter($this) {
    var imgval=$('#previewer').val();
    var oFReader = new FileReader();
    oFReader.readAsDataURL($this.files[0]);
    oFReader.onload = function (oFREvent) {
    $($this).parents('.viewer').find('img').attr("src",  oFREvent.target.result);
    
    };
    };
    
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
            country: {

                validators: {
                    notEmpty: {
                        message: 'The country is required'
                    }
                }
            },
            state: {

                validators: {
                    notEmpty: {
                        message: 'The state is required'
                    }
                }
            },
	     city: {
                validators: {
                    notEmpty: {
                        message: 'The city is required'
                    }
                }
            },
	     address1: {

                validators: {
                    notEmpty: {
                        message: 'The address is required'
                    }
                }
            },
	     address2: {

                validators: {
                    notEmpty: {
                        message: 'The address is required'
                    }
                }
            },
	     address3: {
                validators: {
                    notEmpty: {
                        message: 'The address is required'
                    }
                }
            },
	    fax: {
                validators: {
                    notEmpty: {
                        message: 'The fax is required'
                    }
                }
            },
	    phone: {
                validators: {
                    notEmpty: {
                        message: 'The phone is required'
                    }
                }
            },
	     imagetext:{
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