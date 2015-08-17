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
                    <div class="panel-body" id="form_validation">
                        <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('GlobalController/Sedarmaterial_Edit/'.$materialrow[0]['id']); ?>" class="form-horizontal form12">
                             <legend>EDIT MATERIAL FOR CHANGE</legend>
                            <div class="row">
                                <div class="col-md-4">
				<div class="form-group">
                                       <label class="col-md-4">Material</label>
                         
                                    <div class="col-md-12">
                                        <input type="text" name="materialName" id="FeedbackTitle"  class="form-control input-sm" value="<?php echo $materialrow[0]['materialName'] ?>" placeholder="Material" />
                                    </div>
                                </div>
                            </div>
                            </div>
                            
                            <div class="pager form-group">
                                <div class="col-md-7 control-label">
                                    <input type="submit" class="btn btn-md btn-success m-r-5 m-b-5" name="Update" id="submit" value="Update" >
                                    <button class="btn btn-md btn-danger m-r-5 m-b-5" onclick="window.history.back();" type="button"> Cancel </button>
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
            materialName: {

                validators: {
                    notEmpty: {
                        message: 'The username is required'
                    }
                }
            }
        }
    });
});
</script>