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
		<div class="panel-body" id="form_validation">
		  <form action="<?php echo base_url('GlobalController/globalcountryEdit/'.$countryedit[0]['id']); ?>" class="form-horizontal"  id="form_validation" method="post" name="form_validation" enctype="multipart/form-data">
                  <legend>Add GeoLocation as your wish</legend>
                    <div class="row">
                        
                          <div class="col-md-6">
			    <div class="form-group">
                           <label class="col-md-5"> Country Name</label>
			    <div class="col-md-12">
                            <input class="form-control input-sm" name="countryName" type="text" value="<?php echo $countryedit[0]['CountryName']?>" placeholder="TYPE YOUR OWN TITLE">
                          </div>
			  </div>
			  </div>
			    
			   <div class="col-md-6">
			    <div class="form-group">
                           <label class="col-md-5"> Country Code</label>
			    <div class="col-md-12">
                            <input class="form-control input-sm" name="CountryCode" type="text" value="<?php echo $countryedit[0]['CountryCode']?>" placeholder="TYPE YOUR OWN TITLE">
                          </div>
			    </div>
		    </div>
			  </div>
			  
		    <div class="row">
			
			  <div class="col-md-6">
			    <div class="form-group">
                           <label class="col-md-5"> Latitude</label>
			    <div class="col-md-12">
                            <input class="form-control input-sm" name="latitude" type="text" value="<?php echo $countryedit[0]['Latitude']?>" placeholder="TYPE YOUR OWN TITLE">
                          </div>
			    </div>
			  </div>
			    
			    
			  <div class="col-md-6">
			    <div class="form-group">
                           <label class="col-md-5"> Longitude</label>
			    <div class="col-md-12">
                            <input class="form-control input-sm" name="longitude" type="text" value="<?php echo $countryedit[0]['Longitude']?>" placeholder="TYPE YOUR OWN TITLE">
                          </div>
			    </div>
			  </div>
			
		    </div>
		    
			<div class="pager form-group">
                             <div class="col-md-7 control-label">
                                <button  class="btn btn-success" type="submit" name="update" >Update</button>
                                <button  class="btn btn-default" onclick="window.history.back();" type="button">Cancel</button>
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
            countryName: {

                validators: {
                    notEmpty: {
                        message: 'The country name is required'
                    }
                }
            },
	    CountryCode: {
                validators: {
                    notEmpty: {
                        message: 'The country code is required'
                    }
                }
            },
	     latitude: {
                validators: {
                    notEmpty: {
                        message: 'The latitude is required'
                    }
                }
            },
	     longitude: {
                validators: {
                    notEmpty: {
                        message: 'The longitude is required'
                    }
                }
            }
	    
        }
    });
});
</script>