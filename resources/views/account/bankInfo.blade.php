@extends('layouts.myAccount')
@section('content')
    <div class="account-bank container mb-5">
        <form style="w-100">
            <div class="signup-inputs mb-3 w-sm-25 ">
                <label class="fs-6">Name of the bank</label>
                <input class="form-control" type="text" placeholder="Provide bank name" required autofocus>
            </div>
          
            <div class="signup-inputs mb-3 w-sm-25 ">
                <label class="fs-6">Name of the branch</label>
                <input class="form-control" type="text" placeholder="Type branch name" required autofocus>
            </div>
          
            <div class="signup-inputs mb-3 w-sm-25 ">
                <label class="fs-6">Name of the Account Holder</label>
                <input class="form-control" type="text" placeholder="Type account name" required autofocus>
            </div>
            
            <div class="signup-inputs mb-3 w-sm-25 ">
                <label class="fs-6">Account Number</label>
                <input class="form-control" type="text" placeholder="Type account number" required autofocus>
            </div>
            <a class="btn w-sm-25 py-3 btn-primary submit-btn btn-block text-white mt-3" style="background-color: #00BD6A; border:none;">
                Submit
            </a>

        </form>
    </div>
@endsection
