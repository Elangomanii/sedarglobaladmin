<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li><a href="javascript:;">User</a></li>
        <li class="active">User</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">View<small> You may Add User here...</small></h1>
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
                    <h4 class="panel-title">Add User</h4>
                </div>
                <div class="panel-body" >
                    <form action="<?php echo base_url('GlobalController/sedarUserAdd'); ?>" class="form-horizontal"  id="form_validation" method="post" name="form_validation" enctype="multipart/form-data">                   
                        <legend>ADD USER DETAILS FOR CHANGE</legend>
                        <div class="row">
				<div class="col-md-4">
				    <div class="form-group">
					    <label class="col-md-4">User Name</label>
					<div class="col-md-12">
					    <input class="form-control input-sm" name="sedarName" value="" type="text" placeholder="Name">
					</div>
				    </div>
				</div>
				    
				<div class="col-md-4">
				    <div class="form-group">
					    <label class="col-md-4">Email</label>
					<div class="col-md-12">
					    <input class="form-control input-sm" name="sedarEmail" value="" type="text" placeholder="Email">
					</div>
				    </div>
				</div>
				    
				<div class="col-md-4">
				    <div class="form-group">
					    <label class="col-md-4">Password</label>
					<div class="col-md-12">
					    <input class="form-control input-sm" name="sedarPassword" value="" type="password" placeholder="Password">
					</div>
				    </div>
				</div>
                            </div>                                        
                            <div class="pager form-group">
				<div class="col-md-7 control-label">
				    <button class="btn btn-sm btn-danger " onclick="window.history.back();" type="button"> Cancel </button>
				    <button class="btn btn-sm btn-info" id="clear_data"  type="button"> Reset </button>
				    <button type="submit" class="btn btn-sm btn-success" name="submit_form" id="submit_but" value="Save" >Save</button>
				</div>
			    </div>
			</form>
		    </div>
		</div>
	    </div>
	</div>
 
    <!-- begin scroll to top btn -->
	<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
    <!-- end scroll to top btn -->
</div>
<!-- end page container -->
</body>
</html>
<script>
    
$('#clear_data').click(function() {
    $(':input').val('');
    $('#form_validation').data('bootstrapValidator').resetForm();
});
    
    
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
	    
            sedarName: {
		trigger:'blur',
                validators: {
                    notEmpty: {
                        message: 'Username is required'
                    },
		     remote: {
		    message: 'User Name Already Existed',
                    url: '<?php echo base_url('GlobalController/SedaruserCheck')?>',
                    type: 'POST'
		   
                }
                }
            },
            sedarEmail: {

                validators: {
                     notEmpty: {
                        message: 'Mail id is required'
                    },
		     regexp: {
                        regexp: /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z]{2,4})+$/,
                        message: 'Enter Valid Emnil address'
                    }
                }
            },
	     sedarPassword: {
                validators: {
                    notEmpty: {
                        message: 'Password is required'
                    }
                }
            }
        }
    });
});
</script>

