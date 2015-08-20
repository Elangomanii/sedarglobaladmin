

	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    
		    <li><a href="javascript:;">Client</a></li>
		    <li class="active">Client Overview</li>
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
		    <h4 class="panel-title">Client Overview </h4>
		</div>
		<div class="panel-body" >
		
		<form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('GlobalController/Terms_Add'); ?>" class="form-horizontal form12">
		 <legend>ADD TERMS FOR SHOW</legend>
		 <div class="row">
		    <div class="col-md-6">
				<div class="form-group">
			     <label class="col-md-4">Terms Title</label>
				<div class="col-md-12">
				    <input type="text" name="title" id="aboutTitle"  class="form-control input-sm" value="" placeholder="Terms Title" />
				</div>
				</div>
		    </div>

		    <div class="col-md-6">
				<div class="form-group">
			      <label class="col-md-4">Terms link</label>
			
				<div class="col-md-12">
				    <input type="text" name="linkTitle" id="aboutTitle"  class="form-control input-sm" value="" placeholder="Terms link" />
				</div>
				</div>
		    </div>
				 </div>
				
			    <div class="row">
		    <div class="col-md-5">
				<div class="form-group">
			     <label class="col-md-6">Terms Description</label>
		
				<div class="col-md-12">
				<textarea id="description" name="description" placeholder="Enter your content here" cols="25" rows="5" class="ckeditor textarea form-control  textarea_middle required"> </textarea>
				</div>
		    </div>
		</div>
			    </div>
			   
			<div class="pager form-group">
                             <div class="col-md-7 control-label">
				<input type="submit" class="btn btn-sm btn-success" name="Save" value="Save" >
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
	    linkTitle: {
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

 