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
                                <h4 class="m-t-0">User Name</h4>
                                <input class="form-control input-md" name="sedarName" value="" type="text" placeholder="Name">
                                <p></p>
                                
                                <h4 class="m-t-0">Email</h4>
                                <input class="form-control input-md" name="sedarEmail" value="" type="text" placeholder="Email">
                                <p></p>
                                
                                <h4 class="m-t-0">Password</h4>
                                <input class="form-control input-md" name="sedarPassword" value="" type="password" placeholder="Password">
                                <p></p>
                            </div>                                        
                        </div>
                                  
                        <div class="col-md-offset-3 col-md-6">
                            <div class="form-group">
                                <label class="col col-4"></label>
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