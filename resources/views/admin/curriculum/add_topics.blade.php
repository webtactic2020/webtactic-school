@extends('admin.layouts.master')
@section('title', 'Add-Topics')
@section('content')


<style>

</style>
            <!-- Basic Form Start -->
            <div class="basic-form-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline12-list shadow-reset mg-t-30">
                                <div class="sparkline12-hd">
                                    <div class="main-sparkline12-hd">
                                        <h1>Add Topics</h1>
                                        <div class="sparkline12-outline-icon">
                                            <span class="sparkline12-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline12-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline12-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="all-form-element-inner">
                                        
                                            
                          

                                          <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Select Subject</label>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-select-list">
                                                            

                   <select required class="form-control custom-select-value" name="subt_sub" onchange="">
                            <option value="">Subject</option>
                       
                        
                                <option value=""></option>
                            
                    
                        </select> 
                         
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                                 <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro"><!-- Topics Name --></label>
                                                                </div>
                                                                <div class="col-lg-6" id="categorySelect1">



                                                                </div>
                                                            </div>
                                                        </div>

                                             


                                                             <div class="form-group-inner">
                                                            <div class="login-btn-inner">
                                                                <div class="row">
                                                                    <div class="col-lg-5"></div>
                                                                    <div class="col-lg-7">
                                                                        <div class="login-horizental cancel-wp pull-left">
                                                                         
                                                                            <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Save Change</button>
                                                                        </div>

                              
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                     
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                       <div class="" style="padding:10px;">
                                  
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                       </div>
                    </div>


       
@endsection