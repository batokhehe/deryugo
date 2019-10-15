@extends('layouts.tools.influencer.master.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Payment Option
        <small>{{ $data->name }}</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="invoice">
      <form class="form-horizontal" action="{{ route('influencer.campaign.update_paymentoption' , ['id' => $data->id]) }}" method="POST">
      {{ csrf_field() }}
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> {{ $data->name }}
            <small class="pull-right">{{ $data->start_date }}</small>
          </h2>
        </div>
        <!-- /.col -->
      </div>

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>No</th>
              <th>Post</th>
              <th>Like</th>
              <th>Comment</th>
              <th>Income</th>
            </tr>
            </thead>
            <tbody>
             <?php $type = $influencer->type; ?>
              @php $i = 1 @endphp
              @foreach($details as $detail)
              <tr>
                <td>{{ $i }}</td>
                <td><img width="200px" src="{{ $detail->image }}" /><br>{{ $detail->post_id }}</td>
                <td>{{ $detail->comment }}</td>
                <td>{{ $detail->like }}</td>
                <?php 
                if($type == "Nano"){
                    $type_price = '4000';
                  } else if($type == "Micro"){
                    $type_price = '6000';
                  } else {
                    $type_price = '5000';
                  }  
                  ?>
                <td>
                  <?php 
                  $income = (($detail->comment + $detail->like) / $influencer->avg_impression) * $type_price; echo $income; 
                  ?>
                </td>
              </tr>
              @php $i++ @endphp
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
          <p class="lead">Payment Option:</p>
          <div class="radio">
            <label>
              <input type="radio" name="bank" value="bca" {{ $campaign_influencers->bank == 'bca' ? 'checked' : '' }}>
               &nbsp; <img width="100px" src="{{ url('/assets/images/bank/bca.png') }}" alt="BCA">
            </label>
          </div>
          <br/>
          <div class="radio">
            <label>
              <input type="radio" name="bank" value="bni" {{ $campaign_influencers->bank == 'bni' ? 'checked' : '' }}>
               &nbsp; <img width="100px" src="{{ url('/assets/images/bank/bni.png') }}" alt="BNI">
            </label>
          </div>
          <br/>
          <div class="radio">
            <label>
              <input type="radio" name="bank" value="mandiri" {{ $campaign_influencers->bank == 'mandiri' ? 'checked' : '' }}>
               &nbsp; <img width="100px" src="{{ url('/assets/images/bank/mandiri.png') }}" alt="MANDIRI">
            </label>
          </div>
          <br/>
          <div class="form-group">
              <label for="bank_account" class="control-label">Bank Account</label>
              <input type="text" class="form-control" name="bank_account" placeholder="Bank Account" value="{{ $campaign_influencers->bank_account }}">
            </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <p class="lead">Amount Due {{ $data->stopped_at }}</p>

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Subtotal:</th>
                <td><?php echo $income; ?></td>
              </tr>
              <tr>
                <th>Tax (10%)</th>
                <td><?php $tax = $income * 0.1; echo $tax; ?></td>
              </tr>
              <tr>
                <th>Total:</th>
                <td><?php echo $tax + $income; ?></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <button type="submit" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment
          </button>
        </div>
      </div>
    </form>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
@endsection
