<!--  @if(Session::has('message'))
<p class="alert alert-success">{{Session::get('message')}}</p>
@endif        
 -->
 <!-- Personal Information
          ============================================= -->
            <div class="row">

              <div class="col-lg-4 col-sm-12">
              <div class="card  mb-3"  style=" 
              -webkit-box-shadow: -5px 8px 24px -17px rgba(0,0,0,0.75);
              -moz-box-shadow: -5px 8px 24px -17px rgba(0,0,0,0.75);
              box-shadow: -5px 8px 24px -17px rgba(0,0,0,0.75); ">
                  <div class="card-header"><b class="mb-4">{{ __('Sender Details') }}</b></div>
                  <div class="card-body">
                    <div class="form-group ">
                     <div class="row">
                        <div class="col-md-5 col-sm-5">Mobile Number</div>
                        <div class="col-md-1 col-sm-1">:</div>
                        <div class="col-md-6 col-sm-6">{{$mobileNumber}}</div>
                      </div>
                    </div>
                     <div class="form-group ">
                     <div class="row">
                        <div class="col-md-5">Sender Name</div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-6">{{$senderName}}</div>
                      </div>
                    </div>
                    <div class="form-group ">
                     <div class="row">
                        <div class="col-md-5">Address</div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-6">{{$address}}</div>
                      </div>
                    </div>


                  </div>
              </div>

              
                 
                  

                


             
              </div>
              <div class="col-lg-4">

                <div class="card  mb-3"  style=" 
              -webkit-box-shadow: -5px 8px 24px -17px rgba(0,0,0,0.75);
              -moz-box-shadow: -5px 8px 24px -17px rgba(0,0,0,0.75);
              box-shadow: -5px 8px 24px -17px rgba(0,0,0,0.75); ">
                  <div class="card-header"><b class="mb-4">{{ __('Monthly Limit Details') }}</b></div>
                  <div class="card-body">
                    <div class="form-group ">
                     <div class="row">
                        <div class="col-md-5">Monthly Limit</div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-6" style="color:black; font-weight:bold;">{{GeneralHelper::getAmount($monthlyLimit)}}</div>
                      </div>
                    </div>
                     <div class="form-group ">
                     <div class="row">
                        <div class="col-md-5">Utilized</div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-6" style="color:red; font-weight: normal;">{{GeneralHelper::getAmount($utilized)}}</div>
                      </div>
                    </div>
                    <div class="form-group ">
                     <div class="row">
                        <div class="col-md-5">Balance</div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-6" style="color: green; font-weight: bold;">{{GeneralHelper::getAmount($balance)}}</div>
                      </div>
                    </div>


                  </div>
              </div>
              </div>

               <div class="col-lg-4" >
                <div class="cards">
                 <div class="card-bodys mt-2">
                    <div class="form-group ">
                     <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                          <a href="{{route('roaddaccount',['id'=>$id])}}" class="btn btn-success"  style="font-size: 14px; width: 100%;text-decoration: none">Account Verification</a>
                         </div>
                         <div class="col-md-1"></div>
                      </div>
                    </div>
                     <div class="form-group ">
                     <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                          <a href="#" class="btn btn-info" style="font-size: 14px;  width: 100%; text-decoration: none">Add Recipient</a>
                        </div>
                        <div class="col-md-1"></div>
                      </div>
                    </div>
                    <div class="form-group ">
                     <div class="row">
                      <div class="col-md-1"></div>
                       <div class="col-md-10">
                          <a href="#" class="btn btn-danger" style="font-size: 14px;  width: 100%;text-decoration: none" >Refund Tranaction</a>
                        </div>
                        <div class="col-md-1"></div>

                      </div>
                    </div>


                  </div>
              </div>
               </div>

         
          <!-- Orders History end --> 
            </div>

        


           <div class="row">
            <div class="col-md-12">
            <h5 class="mb-4"></h5>
            <div class="accordion" id="accordionDefault">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0"> <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="">All Beneficiries List</a> </h5>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionDefault"   style="border:solid 1px #CCC; padding: 1px;">
                  <div class="card-body" style="padding:5px;"> 
            <?php if(count($bankList)){ ?>
            <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="first" role="tabpanel" aria-labelledby="first-tab">
              <div class="table-responsive-md" style="overflow: auto">
                <table class="table table-hover border" style="font-size: 13px;">
                  <thead class="thead-light">
                    <tr>
                      <th>SN</th>
                      <th>Sender Name</th>
                      <th>Bank Name</th>
                      <th>IFSC Code</th>
                      <th>Account No</th>
                      <th class="text-center">Status</th>
                      <th>Pay By IFSC</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $count=1;foreach ($bankList as $key => $value) {  ?>
                    <tr>
                      <td class="align-middle">{{$count}}</td>
                      <td class="align-middle" nowrap="nowrap">{{$value['VerifyBeneficiariesBankAccount']['account_name']}}</td>
                      <td class="align-middle">{{$value['VerifyBeneficiariesBankAccount']['bank_name']}}</td>
                      <td class="align-middle">{{$value['VerifyBeneficiariesBankAccount']['account_number']}}</td>
                      <td class="align-middle">{{$value['VerifyBeneficiariesBankAccount']['account_ifsc']}}</td>
                      <td class="align-middle text-center">
                        <?php if($value['status']=='1'){ ?>
                          <i class="fas fa-check-circle text-4 text-success" data-toggle="tooltip" data-original-title="Active"></i>
                        <?php }else{ ?>
                           <i class="fas fa-times-circle text-4 text-danger" data-toggle="tooltip" data-original-title="InActive"></i>
                        <?php } ?>
                      </td>
                      <td class="pull-right" align="text-right" style="width: 15%">
                        <?php if($value['status']=='1'){ ?>
                         <a href="{{route('rotransfermoney',['id'=>Crypt::encryptString($value['id'])])}}" class="btn btn-success " style="padding:10px;font-size: 12px;">Pay Now</a>
                        <?php }else{ ?>
                           <p class="btn btn-default"  style="padding:10px;font-size: 12px; background-color: #CCC">Pay Now</p>
                        <?php } ?>
                        &nbsp;
                        <a href="{{route('rodeleteaccount',['id'=>$value['id']])}}" class="btn btn-danger" style="padding:10px;font-size: 12px;" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                      </td>
                     
                    </tr>
                    <?php $count++;} ?>
                  </tbody>
                </table>
                {{$bankList->links()}}
              </div>
            </div>
          </div>
           <?php } ?>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">All Transaction History</a> </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionDefault" style="">
                  <div class="card-body"> Transaction History Goes Here</div>
                </div>
              </div>
           
            </div>
          </div>
             
           </div>
          