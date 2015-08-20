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
		  <form action="<?php echo base_url('GlobalController/globalstateEdit/'.$statedit[0]['id']); ?>" class="form-horizontal"  id="form_validation" method="post" name="form_validation" enctype="multipart/form-data">
                  <legend>Add GeoLocation as your wish</legend>
                    <div class="row">
                        
                           <div class="col-md-4">
			    <div class="form-group">
                           <label class="col-md-5">State Name</label>
			    <div class="col-md-12">
                            <input class="form-control input-sm" name="stateName" type="text" value="<?php echo $statedit[0]['StateName']?>" placeholder="TYPE YOUR OWN TITLE">
                          </div>
			    </div>
			   </div>
			    
			   <div class="col-md-4">
			    <div class="form-group">
                            <label class="col-md-5">State Code</label>
			     <div class="col-md-12">
                            <input class="form-control input-sm" name="stateCode" type="text" value="<?php echo $statedit[0]['StateCode']?>" placeholder="TYPE YOUR OWN TITLE">
                          </div>
			    </div>
			   </div>
			    
			   <div class="col-md-4">
			    <div class="form-group">
                            <label class="col-md-5">Country Code</label>
			     <div class="col-md-12">
                            <input class="form-control input-sm" name="countryCode" type="text" value="<?php echo $statedit[0]['CountryCode']?>" placeholder="TYPE YOUR OWN TITLE">
                          </div>
			    </div>
			   </div>

		    </div>

			    
			<div class="pager form-group">
                             <div class="col-md-7 control-label">
                                <button  class="btn btn-success btn-sm" type="submit" name="update" >Update</button>
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