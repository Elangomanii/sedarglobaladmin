

	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    
		    <li><a href="javascript:;">Franchising Opportunities</a></li>
		    <li class="active">Franchising Opportunities Edit</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header"><small> You may Edit Your details here...</small></h1>
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
		    <h4 class="panel-title">Franchising Opportunities </h4>
		</div>
		<div class="panel-body" id="">
		  <?php
		    foreach($opportunitiesEdit as $row)
				    $opportunitiesEdit= $row['franchisingTitle'];
				    $opportunitiesEdit= $row['franchisingDetails'];
				   ?>
		<form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('GlobalController/FranchisingOpportunities_Edit/'.$row['id']); ?>" class="form-horizontal form12">
		 <legend>Add The Content</legend>
		 <div class="row">
		   <div class="col-md-6">
			    <div class="form-group">
			      <label class="col-md-6">Franchising Opportunities Title</label>

				<div class="col-md-12">
				    <input type="text" name="franchisingTitle" id="franchisingTitle"  class="form-control input-sm" value="<?php echo $row['franchisingTitle']; ?>" placeholder="Franchising Opportunities Title" />
				</div>
			    </div>
		   </div>
		 </div>
			    
		<div class="row">	    
			 
				
			 <div class="col-md-6">
			    <div class="form-group">
			    <label class="col-md-6">Description</label>
				<div class="col-md-12">
				<textarea id="franchisingDetails" name="franchisingDetails" placeholder="Enter your content here" cols="25" rows="5" class="ckeditor textarea form-control  textarea_middle required"><?php echo $row['franchisingDetails']; ?> </textarea>
				</div>
		    </div>
		</div>
		</div>
			   
			 <div class="pager form-group">
                             <div class="col-md-7 control-label">
				<input type="submit" class="btn btn-sm btn-success" name="Update" id="submit" value="Update" >
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


 