@extends('admin.layouts.master')
@section('title', 'View-Notice')
@section('content')
   

<style type="text/css">
.bt{
        background: #03a9f4;
    height: 45px;
    z-index: -1;
    content: "";
}
.bt:hover{
    color: #23527c;
    text-decoration: underline;
}

.modal-area-button a{
    padding: 13px 13px !important;
}
.modal-adminpro-general .modal-body {
    padding: 10px 20px!important;
}
</style>    <!-- modals CSS
        ============================================ -->
    <link rel="stylesheet" href="">
    <!-- tabs CSS
        ============================================ -->
    <link rel="stylesheet" href="">
    <!-- style CSS
        ============================================ -->
            <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1>Notice <span class="table-project-n">Data</span> Table</h1>
                                        <div class="sparkline13-outline-icon">
                                            <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline13-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <div id="toolbar">
                                            <select class="form-control">
                                                <option value="">Export Basic</option>
                                                <option value="all">Export All</option>
                                                <option value="selected">Export Selected</option>
                                            </select>
                                        </div>
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true"  data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="state" data-checkbox="true" ></th>
                                                   <th data-field="Student name" >Title</th>
                                                   <th data-field="Roll name" >Details</th>
                                                    <th data-field="cl name" >Class</th>
                                                   <th data-field="Class name" >Update by</th>
                                                    <th data-field="Section name" >Date</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 <tr>
                                                    <td></td>
                                                 <td></td>
                                                 <td></td>
                                                 <td></td>
                                                 <td></td>
                                                 <td></td>
                                               
                                                 </tr>


                            
                                             
                     
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Static Table End -->


<div class="login-form-area adminpro-pd mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                         
                            <div id="PrimaryModalalert" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                        <div class="modal-body">
                                            <i class="fa fa-check modal-check-pro"></i>
                                            
                                            <h2>Update Feedback!</h2>
                                            
                                              <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Select Status</label>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-select-list">
                                                            

                  <select class="form-control custom-select-value" name="project_status" required>
                            <option value="">Select Status</option>
                            <option value="Project Completed">Project Completed</option>
                            <option value="Project Pending">Project Pending</option>
                         
                        </select> 
                    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                              <input type="hidden" name="aid" id="hiddenValue" value="" />
                                            <p><textarea rows="4" columns="470" placeholder="comment" type="text" name="re_preport"></textarea></p>
                                        </div>  
                                        <div class="modal-footer">
                                            <button class="btn btn-sm btn-warning login-submit-cs" data-dismiss="modal" href="#">Cancel</button>
                                            <button class="btn btn-sm btn-success login-submit-cs" value="submit" type="submit" >Process</button> 

                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                                    </div>
                                    </div>
                                </div>
                            </div>

     <!-- modal JS
        ============================================ -->
    <script src=""></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  
 <script type="text/javascript">
    $(function () {
        $(".identifyingClass").click(function () {
            var my_id_value = $(this).data('id');
            $(".modal-body #hiddenValue").val(my_id_value);
        })
    });
</script>
@endsection