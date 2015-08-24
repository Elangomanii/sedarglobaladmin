

	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    
		    <li><a href="javascript:;">Contact</a></li>
		    <li class="active">Contact info</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">View<small> Your contact details here...</small></h1>
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
		    <h4 class="panel-title">Contact Page </h4>
		</div>
		<div class="panel-body">
		
		<form id="formvalidation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('GlobalController/contact/'.$contact[0]['id']); ?>" class="form-horizontal form12">
		
		 <legend>CHOOSE OPTION FOR CHANGE ..</legend>
			<div class="row">
			    <div class="col-md-6">
				<div class="form-group">
				<label class="col-md-6">Contact Title</label>
				 <div class="col-md-12">
				    <input type="text" name="contactTitle" id="contactTitle"  class="form-control input-sm" value="<?php echo $contact[0]['contactTitle']?>" placeholder="Contact Title" />
				</div>
				 </div>
				</div>
				<div class="col-md-6">
				<div class="form-group">
			     <label class="col-md-6">Contact Sub Title</label>
				 <div class="col-md-12">
				    <input type="text" name="contactSubTitle" id="contactTitle"  class="form-control input-sm" value="<?php echo $contact[0]['contactSubTitle']?>" placeholder="Contact Sub Title" />
				</div>
				</div>
				</div>
			    </div>
			    <div class="row">
				<div class="col-md-6">
				    <div class="form-group">
					<label class="col-md-6">Description</label>
				<div class="col-md-12">
				<textarea id="Service_Content" name="description" placeholder="Enter your content here" cols="25" rows="5" class="ckeditor textarea form-control  textarea_middle required"><?php echo $contact[0]['description']?> </textarea>
				</div>
				</div>
				</div>
				
				<div class="col-md-6">
				<div class="form-group">
			     <label class="col-md-6">Footer Title</label>
				 <div class="col-md-12">
				    <input type="text" name="footertitle" class="form-control input-sm" value="<?php echo $contact[0]['footertitle']?>" placeholder="Contact Sub Title" />
				</div>
				</div>
				</div>
			    </div>
			    
			    <div class="row">
			    <div class="col-md-6">
				<div class="form-group">
				<label class="col-md-6">Footer sub Title</label>
				 <div class="col-md-12">
				    <textarea class="form-control" name="footersubtitle"  class="form-control input-sm" value="" rows="2" placeholder="Textarea"><?php echo $contact[0]['footersubtitle']?></textarea>
			    
				</div>
				 </div>
				</div>
				<div class="col-md-6">
				<div class="form-group">
			     <label class="col-md-6">Footer user name</label>
				 <div class="col-md-12">
				    <input type="text" name="footerusername"  class="form-control input-sm" value="<?php echo $contact[0]['footerusername']?>" placeholder="Contact Sub Title" />
				</div>
				</div>
				</div>
			    </div>
			    
			    <div class="row">
			    <div class="col-md-6">
				<div class="form-group">
				<label class="col-md-6">Footer email</label>
				 <div class="col-md-12">
				    <input type="text" name="footerpassword"  class="form-control input-sm" value="<?php echo $contact[0]['footerpassword']?>" placeholder="Contact Title" />
				</div>
				 </div>
				</div>
				<div class="col-md-6">
				<div class="form-group">
			     <label class="col-md-6">Footer phone no</label>
				 <div class="col-md-12">
				    <input type="text" name="footerphone" class="form-control input-sm" value="<?php echo $contact[0]['footerphone']?>" placeholder="Contact Sub Title" />
				</div>
				</div>
				</div>
			    </div>
			    <div class="row">
			    <div class="col-md-6">
				<div class="form-group">
				<label class="col-md-6">Footer feedback reson</label>
				 <div class="col-md-12">
				    <input type="text" name="footereason" class="form-control input-sm" value="<?php echo $contact[0]['footereason']?>" placeholder="Contact Title" />
				</div>
				 </div>
				</div>
				<div class="col-md-6">
				<div class="form-group">
			     <label class="col-md-6">Footer feedback</label>
				 <div class="col-md-12">
				    <input type="text" name="footerfeedback"  class="form-control input-sm" value="<?php echo $contact[0]['footerfeedback']?>" placeholder="Contact Sub Title" />
				</div>
				</div>
				</div>
			    </div>
			    <div class="row">
				
				<div class="col-md-6">
				<div class="form-group">
			     <label class="col-md-6">Footer feedback</label>
				 <div class="col-md-12">
				    <input type="text" name="footerhead"  class="form-control input-sm" value="<?php echo $contact[0]['footerhead']?>" placeholder="Contact Sub Title" />
				</div>
				</div>
				</div>
				
			    </div>
			    
			<div class="pager form-group">
                             <div class="col-md-7 control-label">
				<button type="submit" class="btn btn-sm btn-success" name="Save" value="Save" >Save</button>
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
	<!-- end #content -->
	
	<!-- begin scroll to top btn -->
	<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
	<!-- end scroll to top btn -->
</div>
<!-- end page container -->
</body>
</html>
<script>
    
//$('#clear_data').click(function() {
//    $(':input').val('');
//    $('.ckeditor').empty();
//    
//   CKEDITOR.instances["email-body"].setData('');
//editor.resetDirty();
//    
//    $('#formvalidation').data('bootstrapValidator').resetForm();
//});
    
    
</script>
<script>
$(document).ready(function() {
    $('#formvalidation').bootstrapValidator({
	message: 'This value is not valid',
	//excluded:[':disabled'],
	//container: 'tooltip',
	feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        fields: {
            contactTitle: {

                validators: {
                    notEmpty: {
                        message: 'The username is required'
                    }
                }
            },
	     contactSubTitle: {
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


 