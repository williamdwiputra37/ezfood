@extends('admin.admin_master')
@section('admin')
    
<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <center><br><br>
                    <img class="rounded-circle avatar-xl" src="{{asset('backend/images/small/img-5.jpg')}}" alt="400x400">
                    </center>
                    <div class="card-body">
                        <h4 class="card-title">Name&emsp;&emsp;&emsp;: {{ $adminData->name }}</h4>
                        <hr>
                        <h4 class="card-title">Email  &emsp;&emsp;&emsp;: {{ $adminData->email }}</h4>
                        <hr>
                        <h4 class="card-title">Username&emsp;: {{ $adminData->username }}</h4>
                        <hr>
                        <a href="{{ route('admin.edit.profile') }}" class="btn btn-primary btn-rounded waves-effect waves-light">Edit Profile</a>
                        
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

@endsection