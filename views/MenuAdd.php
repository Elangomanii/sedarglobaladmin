<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Slider</a></li>
       
	<li class="active">Add Your Images Here</li>
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
		<div class="panel-body" id="form_validation">
		    <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('GlobalController/globalMenuAdd'); ?>"" class="form-horizontal">
			
			<legend>CHOOSE OPTION FOR CHANGE MENU..</legend>
			    <div class="row">
				
			    <div class="col-md-4">
				<div class="form-group">
					<label class="col-md-4">Menu Title</label>
				     <div class="col-md-12">
					<input class="form-control input-sm" type="text" name="title" placeholder="Default input">
				    </div>
				</div>
				</div>
				<div class="col-md-4">
				<div class="form-group">
					<label class="col-md-4">Menu Type</label>
				    <div class="col-md-12">
					<select class="form-control input-sm" name="type">
					    <option value="Header">Header</option>
					    <option value="Footer">Footer</option>
					</select>
				    </div>
				</div>
			    </div>

				<div class="col-md-4">
				<div class="form-group">
					<label class="col-md-3 control-label">Menu URL</label>
				    <div class="col-md-12">
					<input class="form-control input-sm" name="url" type="text" placeholder="Default input">
				    </div>
				</div>
				</div>
			    </div>
			
			
			
			<div class="pager form-group">
                             <div class="col-md-7 control-label">
				<button class="btn btn-sm btn-danger " onclick="window.history.back();" type="button"> Cancel </button>
				<button class="btn btn-sm btn-info " onclick=" form_reset();" id="clear_data" type="button"> Reset </button>
				<input type="submit" class="btn btn-sm btn-success"  name="save" id="submit_but" value="Save" >
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
            title: {

                validators: {
                    notEmpty: {
                        message: 'The username is required'
                    }
                }
            },
	     type: {
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    }
                }
            },
	    url: {
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
