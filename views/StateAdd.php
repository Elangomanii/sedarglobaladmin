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
		  <form action="<?php echo base_url(); ?>GlobalController/stateAdder" class="form-horizontal"  id="form_validation" method="post" name="form_validation" enctype="multipart/form-data">
                  <legend>ADD STATE FOR CHANGE ..</legend>
                    <div class="row">
                        
                         <div class="col-md-4">
			    <div class="form-group">
                            <label class="col-md-5">State Name</label>
			     <div class="col-md-12">
                            <input class="form-control input-sm" name="stateName" type="text" value="<?php //echo $getStory[0]['latitude']?>" placeholder="TYPE YOUR OWN TITLE">
                          </div>
			    </div>
			 </div>
			     
			     
			  <div class="col-md-4">
			    <div class="form-group">
                            <label class="col-md-5">State Code</label>
			    <div class="col-md-12">
                            <input class="form-control input-sm" name="stateCode" type="text" value="<?php //echo $getStory[0]['longitude']?>" placeholder="TYPE YOUR OWN TITLE">
                          </div>
			    </div>
			  </div>
			    
			  <div class="col-md-4">
			    <div class="form-group">
                            <label class="col-md-5">Country Code</label>
			    <div class="col-md-12">
                            <input class="form-control input-sm" name="countryCode" type="text" value="<?php //echo $getStory[0]['latitude']?>" placeholder="TYPE YOUR OWN TITLE">
                          </div>
		    </div>
			  </div>
		    </div>
			    
			    
			<div class="pager form-group">
                             <div class="col-md-7 control-label">
                                <button  class="btn btn-success btn-sm" type="submit" name="save" >Save</button>
				 <button class="btn btn-sm btn-info" id="clear_data" type="button"> Reset </button>
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
<!-- end page container -->
</body>
</html>


<script>

          $('#clear_data').click(function() {
 
     $('#form_validation')[0].reset();
   
});

function attachments()
    {
	
	$(".removeButton").on('click',function(){
	   
	    var $row = $(this).parents('.ImageView');
	    $row.remove();
	});
    }
    
    function addImage(){
    $('<div class="col-md-4 col-sm-4 col-xs-12 ImageView " style="padding-bottom:20px;"  ><img src="<?php echo site_url('assets/img/no-image.png');?>" class="col-md-12 previewimage" id="dummy1" style="height: 185px;" ><input type="file" id="preview" name="image[]" class="col-md-12 "onchange="attachment(this);" ><p></p><div class="col-md-12 " ><a  onclick="" class=" pull-right btn btn-danger removeButton" data-template="textbox"><i class="fa fa-trash"></i></a> </div>').appendTo("#gallery");	
    attachments();
    }
    
    function attachment($this) {
  var imgval=$('#preview').val();
$('.getter').val(imgval);
    var oFReader = new FileReader();
    oFReader.readAsDataURL($this.files[0]);
    oFReader.onload = function (oFREvent) {
    $($this).parents('.ImageView').find('img').attr("src",  oFREvent.target.result);
    
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
            stateName: {

                validators: {
                    notEmpty: {
                        message: 'The country name is required'
                    }
                }
            },
	    stateCode: {
                validators: {
                    notEmpty: {
                        message: 'The country code is required'
                    }
                }
            },
	     countryCode: {
                validators: {
                    notEmpty: {
                        message: 'The latitude is required'
                    }
                }
            }
	    
        }
    });
});
</script>