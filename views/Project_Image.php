	<!-- begin #content -->

	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Client</a></li>
		   
		    <li class="active">Client Overview</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">View<small> You may View Details here...</small></h1>
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
		    <h4 class="panel-title">View</h4>
		</div>
		<div class="panel-body" id="form_validation">
		    <p>
                        <a class="btn btn-primary btn-sm " href="<?php echo site_url('GlobalController/ProjectImage_Add')?>"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add </span></a>
                    </p>
                    <div class="table-responsive" style="border: none">
		    <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
		      <thead>
			    <tr>
				<th>Drag Here</th>
				<th data-class="expand">Image</th>
				<th>Position</th>
				<th data-hide="phone,tablet">Description</th>
				
				<th>Action</th>
			        
			    </tr>
			</thead>
			<tbody class="handles list" id="sortable">
			    <?php foreach($formData as $row){ ?>
			    <tr class="even gradeC" id="<?php echo $row['id'] ?>">
			    <td><span><i class="fa fa-refresh fa-5x"></span></td>
				<td><?php echo $row['projectImage']; ?></td>
				<td><?php echo $row['position']; ?></td>
				<td><?php echo $row['projectImgTitle']; ?></td>	
				
				<td>
				<a href="<?php echo site_url('GlobalController/ProjectImage_Edit/'.$row['id'])?>" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i> </a>
				
				  <a href="<?php echo site_url('GlobalController/ProjectImage_Delete/'.$row['id'])?>" class="btn btn-xs btn-danger" id="delete_box"><i class="fa  fa-trash-o"></i> </a>
    
				</td>
			    </tr>
			  <?php }?>
			</tbody>
		    </table>
		    
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
<style>
    
    .handles span {
	    cursor: move;
    }
</style>
<script>
$('#form_validation').on('click', '#delete_box', function(e) {
 e.preventDefault();
         var link = $(this).attr('href');
      bootbox.confirm("Are you sure you want to delete?", function(confirmed) {   
               if (confirmed) {
                     window.location.href = link;     
                }    
            });
 });
</script>
<script>
$(function() {
    $('#sortable').sortable({
        axis: 'y',
        opacity: 0.7,
        handle: 'span',
        update: function(event, ui) {
            var list_sortable = $(this).sortable('toArray').toString();
    		//alert(list_sortable);
		// change order in the database using Ajax
            $.ajax({
                url: 'http://localhost/Global_Admin/GlobalController/repositionProjectImages',
                type: 'POST',
                data: {position:list_sortable},
                success: function(data) {
                   //alert(data);
                }
		
            });
        }
    }); // fin sortable
});
</script>
