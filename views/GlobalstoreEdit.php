<?php
//
//print"<pre>";
//
//print_r($getStory[0]);
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
		  <form action="<?php echo base_url('GlobalController/globalStoreEdit/'.$getStory[0]['id']); ?>" class="form-horizontal"  id="form_validation" method="post" name="form_validation" enctype="multipart/form-data">
		    <legend>EDIT COUNTRY FOR CHANGE..</legend>
                    <div class="row">
			     <div class="col-md-4">
				<div class="form-group">
                            <label class="col-md-6">Country</label>
			    <div class="col-md-12">
			    <select class="form-control" id="country" name="country">
				<option>select Country</option>
			    <?php foreach ($country as $row) {?>
				<option value="<?php echo $row['CountryCode']?>" <?php if($row['CountryCode'] == $getStory[0]['country']) echo "selected"; ?>><?php echo $row['CountryName']?></option>
				<?php }?>
			    </select>
			    </div>
				</div>
			    </div>
			     
			    <div class="col-md-4">
				<div class="form-group">
                            <label class="col-md-4">State</label>
			    <div class="col-md-12">
			    <select class="form-control" id="state" name="state">
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
                             <label class="col-md-4">City</label>
			    <div class="col-md-12">
			    <select class="form-control" id="city" name="city">
				<option>select City</option>
				<?php foreach ($city as $row) {?>
				<option value="<?= $row['CityCode']?>"><?= $row['CityName']?></option>
				<?php }?>
				 </select>
			    </div>
				</div>
                        </div>
		    </div>

		    <legend>EDIT COUNTRY FOR CHANGE..</legend>
                    <div class="row">

                          <div class="col-md-4">
				<div class="form-group">
                             <label class="col-md-4">Address title</label>
			     <div class="col-md-12">
                            <input class="form-control input-sm" name="address1" type="text" value="<?php echo $getStory[0]['addresstitle']?>" placeholder="TYPE YOUR OWN TITLE">
                          </div>
				</div>
			  </div>
			     
			 <div class="col-md-4">
				<div class="form-group">
                            <label class="col-md-4">Address#1</label>
			    <div class="col-md-12">
                            <input class="form-control input-sm" name="address2" type="text" value="<?php echo $getStory[0]['address1']?>" placeholder="TYPE YOUR OWN TITLE">
                          </div>
				</div>
			 </div>
			    
			 <div class="col-md-4">
				<div class="form-group">
                            <label class="col-md-4">Address#2</label>
			    <div class="col-md-12">
                            <input class="form-control input-sm" name="address3" type="text" value="<?php echo $getStory[0]['address2']?>" placeholder="TYPE YOUR OWN TITLE">
                          </div>
				</div>
			 </div>
		    </div>
		    <div class="row">
			
                         <div class="col-md-4">
				<div class="form-group">
                            <label class="col-md-4">Fax</label>
			    <div class="col-md-12">
                            <input class="form-control input-sm" name="fax" type="text" value="<?php echo $getStory[0]['fax']?>" placeholder="TYPE YOUR OWN TITLE">
                          </div>
				</div>
			 </div>
			    
			<div class="col-md-4">
				<div class="form-group">
                            <label class="col-md-4">Phone Number</label>
			    <div class="col-md-12">
                            <input class="form-control input-sm" name="phone" type="text" value="<?php echo $getStory[0]['phone']?>" placeholder="TYPE YOUR OWN TITLE">
                          </div>
				</div>
			</div>
		    </div>

			 
			 <legend>EDIT STORE FOR CHANGE ..</legend>
			<div class="row">
			<div class="row AdjustPadding" id="image1" style="padding-bottom:20px;" >
                        <div class="col-md-12">
                            <div class="col-md-4 viewer AdjustPadding" style="padding-bottom:20px;"  >
				<img src="<?php echo site_url('uploads/'.$getStory[0]['textImage']);?>" class="col-md-12 previewimage" style="height: 185px;" >
				    <input type="file" id="previewer" name="imagetext" class="col-md-12 "onchange="attachmenter(this);" >
					<input type="hidden" id="previewer" name="oldimagee" value="<?php echo $getStory[0]['textImage']?>" >
                            </div>
                        </div>
                    </div>
		    </div>
			 
			 
		     <legend>EDIT EXTRA STORES FOR CHANGE ..<button type="button" onclick="addImage()" class="pull-right btn btn-primary"><i class="fa  fa-plus"></i></button></legend>
		   
                        
		    <div class="row AdjustPadding" id="image1" style="padding-bottom:20px;" >
			<div class="col-md-4">
				<div class="form-group">
                             <!--<div class="col-md-4" style="padding:10px; ">-->
                                <label class="col-md-4">Image Name</label>
				<div class="col-md-12">
                                <input type="text" name="description" class="form-control input-md" value="<?php echo $getStory[0]['description']?>" placeholder="Image Name" />
                            </div>
				</div>
			</div>
		    </div>
			 <div class="row">
                        <?php foreach ($getStory as $row)
                        
                        $stores=$row['image'];
                        $story=explode(",", $stores);
                        $leangth=count($story);
                        
                        ?>
                        <div class="col-md-12" id="gallery">
                            <?php for($i=0;$i<$leangth;$i++) {?>
                            <div class="col-md-4 col-sm-4 col-xs-12 ImageView AdjustPadding" style="padding-bottom:20px;"  >
				<img src="<?php echo site_url('uploads/'.$story[$i]);?>" class="col-md-12 previewimage" id="dummy1" style="height: 185px;" >
                               <input type="hidden" id="preview" name="oldimage[]" value="<?php echo $story[$i]?>" >
			        <input type="file" id="preview" name="image[]" class="col-md-12 "onchange="attachment(this);" >
                              </div>
                             <?php } ?>
                        </div>
                    </div>
			<div class="pager form-group">
                             <div class="col-md-7 control-label">
                                <button  class="btn btn-success btn-sm" type="submit" name="update" >update</button>
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

	
	<!-- begin scroll to top btn -->
	<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
	<!-- end scroll to top btn -->
</div>
<!-- end page container -->
</body>
</html>

<script>
    $(document).ready(function () {

	getState(statecode);
	getcity(citycode);

	});
   
   
   
   var statecode= "<?php echo $getStory[0]['country']; ?>";
   var citycode= "<?php echo $getStory[0]['state']; ?>";

    function getState(statecode) {
	
	$.ajax({
	
	type:'post',
	url: "<?=site_url('GlobalController/getState');?>",
	data:{statecode:statecode},
	success: function (response){
	
	$('#state').html(response);
	}
	
    });
	
    }

    function getcity(citycode) {
	
	$.ajax({
	
	type:'post',
	url: "<?=site_url('GlobalController/getCity');?>",
	data:{citycode:citycode},
	success: function (response){
	
	$('#city').html(response);
	}
	
    });
	
    }
    
    
     $('#country').change(function() { 
    var codecountry=$(this).find("option:selected").val();

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
	   
	    var $row = $(this).parents('.ImageView');
	    $row.remove();
	});
    }
    
    function addImage(){
    $('<div class="col-md-4 col-sm-4 col-xs-12 ImageView" style="padding-bottom:20px;" ><div class="form-group"><img src="<?php echo site_url('assets/img/no-image.png');?>" class="col-md-12 previewimage gott2" id="dummy1" style="height: 185px;" ><div class="input-group"><input type="file" id="preview" name="image[]" class="col-md-12" onchange="attachment(this)" ><span class="input-group-btn"><a  onclick="" class="btn btn-sm btn-danger removeButton" data-template="textbox"><i class="fa fa-trash"></i></a></span></div></div></div>').appendTo("#gallery");
    attachments();
    }
    
    function attachment($this) {
  
    var oFReader = new FileReader();
    oFReader.readAsDataURL($this.files[0]);
    oFReader.onload = function (oFREvent) {
    $($this).parents('.ImageView').find('img').attr("src",  oFREvent.target.result);
    
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
                        message: 'The username is required'
                    }
                }
            },
            state: {

                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    }
                }
            },
	     city: {
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    }
                }
            },
	     address1: {

                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    }
                }
            },
	     address2: {

                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    }
                }
            },
	     address3: {
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    }
                }
            },
	    fax: {
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    }
                }
            },
	    phone: {
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    }
                }
            }
        }
    });
});
</script>
 