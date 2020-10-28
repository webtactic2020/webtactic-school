@extends('admin.layouts.master')
@section('title', 'Register')
@section('content')



<style>

#hidden_div {
    display: none;
}
hr.style18 { 
  height: 30px; 
  border-style: solid; 
  border-color: #8c8b8b; 
  border-width: 1px 0 0 0; 
  border-radius: 20px; 
} 
hr.style18:before { 
  display: block; 
  content: ""; 
  height: 30px; 
  margin-top: -31px; 
  border-style: solid; 
  border-color: #8c8b8b; 
  border-width: 0 0 1px 0; 
  border-radius: 20px; 
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
                                        <h1>Registration From</h1>
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
                                                     
                                                     <div class="form-group-inner" style="background: #ca60d56b; border-radius: 10px;">
                                                        <label class="login2">Select User Type</label>
                                                            <div class="row">

                                                               <div class="col-lg-4">
                                                                  
                                                                   


                        <label class="login2 ">Student
                       <input type="radio" name="typee" value="s" onchange="" >
               </label> 
                     

                    
                                                                </div>
                                                               

                                                        <div class="col-lg-4">
                                                                  
                    <label class="login2 ">Teacher
                      <input type="radio" name="typee" value="t" onchange=""> </label>
                                                                </div>
                                                               

                                                               <div class="col-lg-4">
                       <label class="login2 ">Admin
                      <input type="radio" name="typee" value="a" onchange=""> </label>                                       

                                                                </div>
                                                                </div>


                                                        </div>
                                                        <hr class="style18">
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2 ">First name</label>
                                                                    <input type="text" name="" class="form-control">
                                                                     
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Middle name</label>
                                                                    <input type="text" name="" class="form-control">
                                                                </div>

                                                                 <div class="col-lg-4">
                                                                    <label class="login2">Last name</label>
                                                                    <input type="text" name="" class="form-control">
                                                                </div>
                                                             
                                                            </div>
                                                        </div>
                                                                   <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2 ">Email</label>
                                                                    <input type="email" name="" class="form-control">
                                                                     
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Mobile</label>
                                                                    <input type="text" name="" class="form-control">
                                                                </div>

                                                                 <div class="col-lg-4">
                                                                    <label class="login2">Address</label>
                                                                    <input type="text" name="" class="form-control">
                                                                </div>
                                                             
                                                            </div>
                                                        </div>
                                                                <div class="form-group-inner">
                                                            <div class="row">
      <div class="col-lg-4">
                                                                    <label class="login2">Gender</label>
                                                                   <div class="bt-df-checkbox">
   <label class="login2"> <b>  Male </b>      <input checked id="gender" name="gender" type="radio" class="" value="Male" /></label>
                              

   <label class="login2"><b style="padding-left: 10px">  Female </b>  <input  id="gender2" name="gender" type="radio" class=""  value="Female"  /></label>
                           

                                                                      
                                                                    </div>
                                                                </div>


                                                                <div class="col-lg-4">
                                                                    <label class="login2 ">DOB</label>
                                                                    <input type="date" name="" class="form-control">
                                                                     
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Age</label>
                                                                    <input type="text" name="" class="form-control">
                                                                </div>

                                                           
                                                             
                                                            </div>
                                                        </div>
                                             
                                                                   
                                                             <div class="form-group-inner">
                                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2 ">Parents name</label>
                                                                    <input type="text" name="" class="form-control">

                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Parents Mobile</label>
                                                                <input type="text" name="" class="form-control">
                         
                                                                </div>

                                                                 <div class="col-lg-4">
                                                                    <label class="login2">Parents Email</label>
                                                                <input type="email" name="" class="form-control">
                                                                </div>
                                                             
                                                            </div> 
                                                        </div>

                                                                      <div class="form-group-inner">
                                                                            <div class="row">
                                                                <div class="col-lg-4">
                    <label class="login2 ">Password</label>
                    <input type="password" name="" class="form-control">
                     

                                                                </div>
                                                                <div class="col-lg-4">
                                      <label class="login2">Confirm Password</label>
                                        <input type="password" name="" class="form-control">
                                                                </div>

                                                       
                                                             
                                                            </div> 
                                                        </div>
                                            
    <div id="hidden_div">

                                                     <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Select Class</label>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-select-list">
                                                            

                  <select class="form-control custom-select-value" name="class_id"  onchange="">
                            <option>Select Class</option>
                        
                        
                                <option value=""></option>
                            
                     
                        </select> 
                          
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                                 <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Select Section</label>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-select-list">
                                                            

            
                          <select class="form-control custom-select-value" id="categorySelect" name="sec_id">
                            <option value="0">Select Section</option>
                          
          
                                
                            
                    
                        </select>   
                       
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                             <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Roll No.</label>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                <input type="text" name="" class="form-control" placeholder="Roll-No">
                                                                </div>
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