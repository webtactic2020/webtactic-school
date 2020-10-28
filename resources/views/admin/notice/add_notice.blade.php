@extends('admin.layouts.master')
@section('title', 'Add-Notice')
@section('content')

<style type="text/css">
   .panell{
        background: #ca60d56b;
    border-radius: 10px;
    }
</style>
         
                         
                                    
                                     
            <!-- Basic Form Start -->
            <div class="basic-form-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline12-list shadow-reset mg-t-30">
                                <div class="sparkline12-hd">
                                    <div class="main-sparkline12-hd">
                                        <h1>Add Notice</h1>
                                        <div class="sparkline12-outline-icon">
                                            <span class="sparkline12-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline12-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline12-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row ">
                                            <div class="col-lg-12">
                                        
                                                <div class="all-form-element-inner">
                                                    <div class="form-group-inner panell" >
                                                        <br>
                                                        <h4 class="m-t-2">Select Student or Group of Students</h4>
                                                                            <div class="row">
                                                                                 <div class="col-lg-4">
                                                                          <label class="login2">Notice To All</label>
                                                <p>  <input value="all" name="n_cls[]" type="checkbox"> All Students </p>
                                                                              </div>


                                                                <div class="col-lg-4">
                                                                    <label class="login2 ">Select Class</label><br>
                                                                    
                                                                  <input value="" name="" type="checkbox"> 
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <label class="login2"> Select Student</label>
                                   <div class="form-group-inner">
                                                      
                                                               
                                                                    <div class="form-select-list">
                                                            

            
                          <select class="form-control custom-select-value" id="categorySelect" name="n_student">
                          
                          
          
                                
                            
                    
                        </select>   
                       
                                                                    
                                                              
                                                            </div>
                                                        </div>

                                                                </div>

                                                                
                                                             
                                                            </div> 
                                                        </div>

                                                              <div class="form-group-inner">
                                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <label class="login2 ">Notice title</label><br>
                                                                  <input placeholder="Add title" type="text" name="n_title" class="form-control">
                                                                </div>
                                                          

                       

                                                                 <div class="col-lg-6">
                                                                    <label class="login2">Upload file</label>
                                                                <div class="login-btn-inner">
                                                   
                                                                 
                                                                    <div class="col-lg-12">

                                                                                        <div class="file-upload-inner ts-forms">
                                                                        <div class="input prepend-big-btn">
                                                                            <label class="icon-right" for="prepend-big-btn">
                                                                                <i class="fa fa-download"></i>
                                                                            </label>
                                                                            <div class="file-button">
                                                                                Browse

                                <input type="file" name="n_img" onchange="">
                                                                                                                     

                                                                            </div>
                                                                            <input type="text" id="abc" placeholder="no file selected">
                                                                        </div>
                                                                
                                                              
                                                        </div>
                                                                

                              
                                                                    </div>
                                                              
                                                            </div>
                                                                </div>
                                                             
                                                            </div> 
                                                        </div>

                                                                    <div class="form-group-inner">
                                                                            <div class="row">
                                                         
                                                                <div class="col-lg-6">
                                                                    <label class="login2">Notice details</label><br>
                                                                 <textarea placeholder="Add details" type="text" name="n_text" class="form-control" rows="4"></textarea>
                                                                </div>


                                                                 <div class="col-lg-4">
                                                                    <label class="login2"> </label>
                                                                <div class="login-btn-inner">
                                                   
                                                                 
                                                                    <div class="col-lg-12">

                                                           
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