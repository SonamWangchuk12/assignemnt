@extends('admin.layouts.master')

@section('content')


@if ($errors->any())
<div class="alert alert-danger">
 <ul>
     @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
     @endforeach
 </ul>
</div>
@endif


<div class="container mt-7">
    <div class="row justify-content-center">
        <div class="col-md-10">
                @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
        </div>
                @endif

{{-- end --}}
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Send SMS</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form  action="{{ route('submitsms') }}"method="POST" enctype="multipart/form-data"> @csrf
      <div class="card-body">
       

      

        <div class="form-row">

            <div class="form-group col-md-12">
                <label for="name">Mobile Number</label>
<input id="mobile_number" type="text" placeholder="Enter phone numbers seperated by comma" class="form-control @error('mobile_number')
    is-invalid @enderror" name="mobile_number"
  autocomplete="mobile_number">

                      @error('mobile_number')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror


              </div>
              </div>
            
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary" style="float: right;" >Submit</button>
      </div>
    </form>
  </div>




        </div>
    </div>
</div>
</div>
</div>

@endsection
