	<!-- begin #content -->

	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Product Category</a></li>
		   
		    <li class="active"> Product Category View</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header"><small> You may View Details here...</small></h1>
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
                        <a class="btn btn-primary btn-sm " href="<?php echo site_url('GlobalController/ProductCategory_Add')?>"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add </span></a>
                    </p>
                    <div class="table-responsive" style="border: none">
		    <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
		      <thead>
			    <tr>
				<!--<th>Drag Here</th>-->
				<th>Name</th>
				<th>Image</th>
				<th>Status</th>
				<th>Action</th>
			        
			    </tr>
			</thead>
			<tbody class="handles list" id="sortable">
			   <?php foreach($productCatView as $row){ ?>
			    <tr class="odd" id="<?php echo $row['id'] ?>">
			   <!-- <td><span><i class="fa fa-refresh fa-5x"></span></td>-->
				<td><span><?php echo $row['name']; ?></span></td>
				<td><span><?php echo $row['image']; ?></span></td>
				<td><span><button <?php if($row['status']=="ENABLED") echo 'class="btn btn-success"'; else  echo 'class="btn btn-danger"';  ?> name="status[]" id="status-<?php echo $row['id']; ?>" value="<?php echo $row['id']; ?>"><?php echo $row['status']; ?></button></span></td>
				<!--<td><span><//?php echo $row['position']; ?></span></td>-->
				<script>
				$("#status-<?php echo $row['id']; ?>").click(function() {
				    var productCatId=<?php echo $row['id']; ?>;
				    $.ajax({
					type: "POST",
					dataType: "json",
					data: {productCatId:productCatId},
					url: "<?php echo base_url(); ?>GlobalController/ajaxProjectCategoryStatus",
					success: function(json){
					    if (json.status=="ENABLED")
					    {
						$("#status-<?php echo $row['id']; ?>").html(json.status);
						$("#status-<?php echo $row['id']; ?>").removeAttr("class");
						$("#status-<?php echo $row['id']; ?>").attr("class","btn btn-success");
					    }
					    else
					    {
						$("#status-<?php echo $row['id']; ?>").html(json.status);
						$("#status-<?php echo $row['id']; ?>").removeAttr("class");
						$("#status-<?php echo $row['id']; ?>").attr("class","btn btn-danger");
					    }
					
					},
				    });
				});
				</script>
                                
				<td>
				<a href="<?php echo site_url('GlobalController/ProductCategory_Edit/'.$row['id'])?>" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i> </a>
				
				  <a href="<?php echo site_url('GlobalController/ProductCategory_Delete/'.$row['id'])?>" class="btn btn-xs btn-danger" id="delete_box"><i class="fa  fa-trash-o"></i> </a>
    
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
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.4.custom.min.js"></script>
<style>
    
    .handles tr {
	    cursor: -webkit-grab; cursor: -moz-grab;
    }
</style>
<script>
    
        $(document).ready(function() {
 $("#data-table").DataTable();
    });
	
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
        handle: 'td',
        update: function(event, ui) {
            var list_sortable = $(this).sortable('toArray').toString();
    		//alert(list_sortable);
		// change order in the database using Ajax
            $.ajax({
                url: 'http://localhost/Global_Admin/GlobalController/repositionProductCategory',
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



</script>
<script>
  //  $(document).ready(function() {
  //   $("#dataRespTable").DataTable();
  // 
  //});
//********ON / OFF Status
    $('#form_validation').on('click', '[name="status[]"]', function()
	{
	var $row    = $(this).parents('.odd');
	var productCatId=$(this).val();
	//var item_code=$row.find("input[name='print1[]']").val();


})
//*******ON / OFF Status


  </script>