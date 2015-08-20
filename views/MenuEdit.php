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
		<div class="panel-body">
		    <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('GlobalController/globalMenuEdit/'.$getmenunow[0]['id']); ?>"" class="form-horizontal">
			
						<div class="row">
			    <div class="col-md-12">
			<legend>CHOOSE OPTION FOR CHANGE MENU.. </legend>
			<a class="btn pull-right btn-success dropdown-toggle" data-toggle="dropdown" href="javascript:;">
			    <i class="fa fa-cog"></i></a>
				<ul class="dropdown-menu pull-right">
				<li class="getValue">
				<a href="javascript:;">SHOW SUB-MENU</a>
				</li>
				</ul>
			    </div>
			    </div>
			    <div class="row">
				 <div class="col-md-4">
				<div class="form-group">
					<label class="col-md-4">Menu Title</label>
				    <div class="col-md-12">
					<input class="form-control input-sm" type="text" value="<?php echo $getmenunow[0]['menu'];?>" name="title" placeholder="Default input">
				    </div>
				</div>
				</div>
				 
				 <div class="col-md-4">
				<div class="form-group">
					<label class="col-md-4">Menu Type</label>
				    <div class="col-md-12">
					<select class="form-control input-sm" name="type">
					    
					<option  <?php if($getmenunow[0]['menuType']=='Header' ) echo "selected"; ?> value="Header">Header</option>
					<option  <?php if($getmenunow[0]['menuType']=='Footer' ) echo "selected"; ?> value="Footer">Footer</option>				    
					
					</select>
				    </div>
				</div>
			    </div>

			    
			     <div class="col-md-4">
				<div class="form-group">
					<label class="col-md-4">Menu URL</label>
				    <div class="col-md-12">
					<input class="form-control input-sm" name="url" value="<?php echo $getmenunow[0]['menuLink'];?>" type="text" placeholder="Default input">
				    </div>
				</div>
				</div>
			    </div>
			    
			    <legend class="pullmenu">EDIT SUB-MENU FOR CHANGE ..</legend>
			    <div class="row pullmenu">
				
			    <div class="col-md-6">
				<div class="form-group">
					<label class="col-md-4">Sub-Menu Title</label>
				     <div class="col-md-12">
					<input class="form-control input-sm" value="<?php echo $getsubmenunow[0]['submenu1'];?>" type="text" name="submenu" placeholder="Default input">
				    </div>
				</div>
				</div>
			  
			    <div class="col-md-6">
				<div class="form-group">
					<label class="col-md-4">Sub-Menu Link</label>
				     <div class="col-md-12">
					<input class="form-control input-sm" value="<?php echo $getsubmenunow[0]['submenulink1'];?>" type="text" name="submenulink1" placeholder="Default input">
				    </div>
				</div>
				</div>
			    </div>
			    
			<div class="row pullmenu">
				
				  <div class="col-md-6">
				<div class="form-group">
					<label class="col-md-4">Sub-Menu Title</label>
				     <div class="col-md-12">
					<input class="form-control input-sm" value="<?php echo $getsubmenunow[0]['submenu2'];?>" type="text" name="submenu1" placeholder="Default input">
				    </div>
				</div>
				</div>
				  
			    <div class="col-md-6">
				<div class="form-group">
					<label class="col-md-4">Sub-Menu Link</label>
				     <div class="col-md-12">
					<input class="form-control input-sm" value="<?php echo $getsubmenunow[0]['submenulink2'];?>" type="text" name="submenulink2" placeholder="Default input">
				    </div>
				</div>
				</div>
			   
			    </div>
			    <div class="row pullmenu">
				
				 <div class="col-md-6">
				<div class="form-group">
					<label class="col-md-8">Sub-Menu Description</label>
				     <div class="col-md-9">
					<textarea class="form-control" name="subcontent" rows="5" placeholder="Textarea"><?php echo $getsubmenunow[0]['subdescription'];?></textarea>
				    </div>
				</div>
				</div>
				
				  <div class="col-md-6">
				<div class="form-group">
					<label class="col-md-4">Download content</label>
				     <div class="col-md-12">
					<input class="form-control input-sm" type="text" value="<?php echo $getsubmenunow[0]['download'];?>" name="download" placeholder="Default input">
				    </div>
				</div>
				</div>
				
			    </div>
			<div class="row pullmenu">
				
				<div class="col-md-4">
				<div class="form-group">
					<label class="col-md-4">Try Content</label>
				     <div class="col-md-12">
					<input class="form-control input-sm" type="text" value="<?php echo $getsubmenunow[0]['tryit'];?>" name="try" placeholder="Default input">
				    </div>
				</div>
				</div>
				
				  <div class="col-md-4">
				<div class="form-group">
					<label class="col-md-4">Sub-Menu Title</label>
				     <div class="col-md-12">
					<input class="form-control input-sm" value="<?php echo $getsubmenunow[0]['submenu3'];?>" type="text" name="submenu4" placeholder="Default input">
				    </div>
				</div>
				</div>
				  
			    <div class="col-md-4">
				<div class="form-group">
					<label class="col-md-4">Sub-Menu Title</label>
				     <div class="col-md-12">
					<input class="form-control input-sm" value="<?php echo $getsubmenunow[0]['submenu4'];?>" type="text" name="submenu3" placeholder="Default input">
				    </div>
				</div>
				</div>
			   
			    </div>
			
			<div class="pager form-group">
                             <div class="col-md-7 control-label">
				<button class="btn btn-sm btn-danger " onclick="window.history.back();" type="button"> Cancel </button>
				<input type="submit" class="btn btn-sm btn-success"  name="update" id="submit_but" value="Update" >
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
    
   $('.getValue').click(function (){

    $('.pullmenu').toggle();
    
   });
    
    
</script>

<script>
$(document).ready(function() {
    $('.pullmenu').hide();
    
    $('#form_validation').bootstrapValidator({
	
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
            },
	     menu1: {
                validators: {
                    notEmpty: {
                        message: 'The manu1 is required'
                    }
                }
            }
        }
    });
});
</script>

