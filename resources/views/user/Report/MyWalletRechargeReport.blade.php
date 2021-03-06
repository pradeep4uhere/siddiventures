@extends('layouts.defaultDashboard')
@section('content')
<section class="containers">
<div class="bg-light shadow-md rounded p-4">
  <div class="row"> 
    <div class="col-lg-12">
    <div class="bg-light shadow-md rounded p-4"> 
      <!--User Profile Section

      ============================================= -->
      <h5 class="mb-4">My Wallet Recharge Transactions</h5>
      <?php if(count($payment_wallet_transactions)){ ?>

            <div class="tab-content my-3" id="myTabContent">
            <div class="tab-pane fade show active" id="first" role="tabpanel" aria-labelledby="first-tab">
              <div class="table-responsive-md" style=" width:1240px; overflow: auto">
                <table class="table table-hover border" style="font-size: 12px;">
                  <thead class="thead-light">
                    <tr>
                      <th>SN</th>
                      <th>Date</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Mobile</th>
                      <th>Amount</th>
                      <th>Mode</th>
                      <th>Txn No</th>
                      <th>Remarks</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $count=1;foreach ($payment_wallet_transactions as $key => $value) { //dd($value); ?>
                    <tr>
                      <td class="align-middle">{{$count}}</td>
                      <td class="align-middle" nowrap="nowrap">{{GeneralHelper::getDateFormate($value['payment_date'])}}</td>
                      <td class="align-middle" nowrap="nowrap">{{$value['firstname']}}</td>
                      <td class="align-middle" nowrap="nowrap">{{$value['email']}}</td>
                      <td class="align-middle" nowrap="nowrap">{{$value['phone']}}</td>
                      <td class="align-middle" nowrap="nowrap">{{GeneralHelper::getAmount($value['net_amount_credit'])}}</td>
                      <td class="align-middle" nowrap="nowrap">{{GeneralHelper::getTransactionType($value['payment_mode'])}}</td>
                      <td class="align-middle" nowrap="nowrap">{{$value['txnid']}}</td>
                      <td class="align-middle" nowrap="nowrap">{{$value['productinfo']}}</td>

                      <td class="align-middle">
                       <?php if($value['status']!='success'){ ?>
                          <i class="fas fa-times-circle text-4 text-danger" data-toggle="tooltip" data-original-title="No"></i> &nbsp; {{$value['status']}}
                      
        
                      <?php }else{ ?>
                           <i class="fas fa-check-circle text-4 text-success" data-toggle="tooltip" data-original-title="Yes"></i>
                      <?php } ?>
                      </td>
                    </tr>
                    <?php $count++;} ?>
                     
                   

                  
                  </tbody>
                </table>
                <p class="pull-right" style="float: right;">{{ $payment_wallet_transactions->onEachSide(5)->links() }}</p>

              </div>

            </div>
           
          </div>
           <?php } ?>
      <!-- Personal Information end --> 
    </div>
  </div>
  </div>
</div>
</section>
<!-- Document Wrapper end --> 
@endsection

