
            <!-- Personal Information
          ============================================= -->
            <div class="row">
              <div class="col-lg-12 col-sm-12">
              <p id="msgBank" style="font-size: 12px;"></p>
              <p id="msg" style="font-size: 12px;"></p>
            </div>
              <div class="col-lg-2 col-sm-12"></div>
                <div class="col-lg-12 col-sm-12">
              <?php //dd($result);?>
               @if(Session::has('message'))
                <p class="alert alert-danger">{{Session::get('message')}}</p>
                @endif
              <div class="card  mb-3">
                  <div class="card-header">
                    <center><b class="mb-4">{{ __('TRANSACTION DETAILS') }}</b></center>
                    </div>
                  <div class="card-body">
                    <div class="table-responsive-md">
                    <table class="table table-hover border" style="border:0px !important;line-height:14px; font-size: 12px;" border="0">
                  
                      <tbody>
                        <tr>
                          <td class="col-2 align-middle font-weight-600" colspan="2" style="font-size: 14px;">Sender Details</td>
                          <td class="col-2 text-center align-middle font-weight-600"  style="font-size: 14px;" nowrap="nowrap" colspan="4">Recipient Details</td>
                        </tr>
                        <tr>
                          <td class="text-muted align-middle font-weight-600">Name:</td>
                          <td class="col-2" nowrap="nowrap">{{$sender_name}}</td>
                          <td class="col-2 align-middle font-weight-600">Name:</td>
                          <td class="col-2" nowrap="nowrap">{{$recipentDetails['Name']}}</td>
                          <td class="col-2 align-middle font-weight-600" nowrap="nowrap">Mobile:</td>
                          <td class="col-2" nowrap="nowrap">9015445667</td>
                        </tr>
                         <tr>
                          <td class="text-muted align-middle font-weight-600" nowrap="nowrap">Mobile No:</td>
                          <td class="col-2" nowrap="nowrap">{{$sender_mobile}}</td>
                          <td class="col-2 align-middle font-weight-600" nowrap="nowrap">Bank Name:</td>
                          <td class="col-2" nowrap="nowrap">{{$recipentDetails['BankName']}}</td>
                          <td class="col-2 align-middle font-weight-600" nowrap="nowrap">Account Number:</td>
                          <td class="col-2" nowrap="nowrap">{{$recipentDetails['AccountNumber']}}</td>
                        </tr>
                        <tr>
                          <td class="text-muted">&nbsp;</td>
                          <td class="col-2" nowrap="nowrap">&nbsp;</td>
                          <td class="col-2 align-middle font-weight-600" nowrap="nowrap">IFSC Code:</td>
                          <td class="col-2" nowrap="nowrap">{{$recipentDetails['IFSCCode']}}</td>
                          <td class="col-2 align-middle font-weight-600" nowrap="nowrap">Total Amount:</td>
                          <td class="col-2" nowrap="nowrap">Rs. {{$totalAmount}}</td>
                        </tr>
                      
                      </tbody>
                    </table>
                  </div>
                   <div class="table-responsive-md">
                    <table class="table table-hover border" style="line-height: 12px; font-size: 12px;">
                      <thead class="thead-light sticky-top">
                        <tr>
                          <th class="text-muted align-middle">Transaction Id</th>
                          <th class="text-muted align-middle  py-2">Reference No</th>
                          <th class="text-muted align-middle  py-2">Date & Time</th>
                          <th class="text-muted align-middle  py-2">Status</th>
                          <th class="text-muted align-middle  py-2">Amount</th>
                          <th class="text-muted align-middle  py-2">Remarks</th>
                          <th class="text-muted align-middle  py-2">Reasons</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if(!empty($responseArr)){ ?>
                          <?php foreach($responseArr as $item){ ?>
                          <?php if($item['success'] == 'True'){ ?>  
                            <tr>
                              <td class="text-muted">{{$item['response']['data']['transfer_request']['unique_request_number']}}</td>
                              <td class="text-muted">{{$item['response']['data']['transfer_request']['id']}}</td>
                              <td class="text-muted">{{date('d M, Y H:i:s A')}}</td>
                              <td class="text-muted"><font color="green"><b>{{$item['status']}}</b></font></td>
                              <td class="text-muted"><font color="#000"><b>{{GeneralHelper::getAmount($item['amount'])}}</b></font></td>
                              <td class="text-muted">{{$item['remarks']}}</td>
                              <td class="text-muted">{{$item['message']}}</td>
                            </tr>
                        <?php }else{ ?>

                            <tr>
                              <td class="text-muted">&nbsp;</td>
                              <td class="text-muted">&nbsp;</td>
                              <td class="text-muted">{{date('d M, Y H:i:s A')}}</td>
                              <td class="text-muted"><font color="red"><b>{{$item['status']}}</b></font></td>
                              <td class="text-muted">{{GeneralHelper::getAmount($item['amount'])}}</td>
                              <td class="text-muted">{{$item['remarks']}}</td>
                              <td class="text-muted">{{$item['message']}}</td>
                            </tr>
                        <?php } ?>
                        <?php } ?>
                        <?php } ?>
                      
                      </tbody>
                    </table>
                  </div>
                  </div>
              </div>
              </div> 
              <div class="col-lg-2 col-sm-12"></div>
   
              
          <!-- Orders History end --> 
            </div>     
