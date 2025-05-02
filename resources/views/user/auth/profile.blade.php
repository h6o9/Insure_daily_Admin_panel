@extends('user.layout.app')
@section('title', 'Profile')
@section('content')
<style>
    .user-sections .card-headings{
        color: #2a3333 !important;
    }
</style>
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="padding-20 user-sections">
                                {{-- <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                   
                                    <li class="nav-item">
                                        <a class="nav-link active" id="profile-tab2" data-toggle="tab" href="#settings"
                                            role="tab" aria-selected="true">Setting</a>
                                    </li>
                                </ul>
                                <div class="tab-content tab-bordered" id="myTab3Content">
                                    <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="home-tab2">
                                        <div class="row">
                                            <div class="col-md-3 col-6 b-r">
                                                <strong>Name</strong>
                                                <br>
                                                <p class="text-muted">{{ $data->name }}</p>
                                            </div>
                                            <div class="col-md-3 col-6 b-r">
                                                <strong>Mobile</strong>
                                                <br>
                                                <p class="text-muted">{{ $data->phone }}</p>
                                            </div>
                                            <div class="col-md-3 col-6 b-r">
                                                <strong>Email</strong>
                                                <br>
                                                <p class="text-muted">{{ $data->email }}</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade active show" id="settings" role="tabpanel"
                                        aria-labelledby="profile-tab2">
                                        <form method="post" action="{{ url('user/update-profile') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="card-header">
                                                <h4>Profile</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="form-group col-md-6 col-12">
                                                        <label>Name</label>
                                                        <input type="text" name="name" value="{{ $data->name }}"
                                                            class="form-control" readonly>
                                                        @error('name')
                                                            <div class="text-danger">
                                                                Please fill in the Name
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-6 col-12">
                                                        <label>Email</label>
                                                        <input type="email" name="email" value="{{ $data->email }}"
                                                            class="form-control" readonly>
                                                        @error('email')
                                                            <div class="text-danger">
                                                                Please fill in the email
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6 col-12">
                                                        <label>Date of Birth</label>
                                                        <input 
                                                            type="date" 
                                                            name="dob" 
                                                            value="{{ old('dob', $data->dob ?? '') }}" 
                                                            class="form-control" readonly>
                                                        @error('dob')
                                                            <div class="text-danger">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-6 col-12">
                                                        <label>Phone</label>
                                                        <input type="tel" name="phone" value="{{ $data->phone }}"
                                                            class="form-control" value="" readonly>
                                                        @error('phone')
                                                            <div class="text-danger">
                                                                Please fill in the email
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6 col-12">
                                                      
                                                            <label>Address</label>
                                                            <input type="tel" name="address" value="{{ $data->address }}"
                                                                class="form-control" readonly>
                                                            @error('address')
                                                                <div class="text-danger">
                                                                    Please fill in the email
                                                                </div>
                                                            @enderror
                                                 
                                                    </div>
                                                    <div class="form-group col-md-6 col-12">
                                                        <label>licence Type</label>
                                                        <input type="text" name="licence_type" value="{{ $data->licence_type }}"
                                                            class="form-control" readonly>
                                                        @error('licence_type')
                                                            <div class="text-danger">
                                                                Please fill in the email
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6 col-12">
                                                        <label>Date of Birth</label>
                                                        <input 
                                                            type="date" 
                                                            name="dob" 
                                                            value="{{ old('dob', $data->dob ?? '') }}" 
                                                            class="form-control" readonly>
                                                        @error('dob')
                                                            <div class="text-danger">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div> 
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div> --}}
                                <div class="shadow p-3 rounded">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h6 class="mb-0 card-headings">Name:</h6>
                                        <p class="mb-0">{{$data->name}}</p>
                                    </div>
                                    <div class="mt-3 d-flex justify-content-between align-items-center">
                                        <h6 class="mb-0 card-headings">Date of birth:</h6>
                                        <p class="mb-0">{{$data->dob}}</p>
                                    </div>
                                    <div class="mt-3 d-flex justify-content-between align-items-center">
                                        <h6 class="mb-0 card-headings">License type:</h6>
                                        <p class="mb-0">{{$data->licence_type}}</p>
                                    </div>
                                </div>
                                <div class="container">
                                <div class="border-top mt-5 pt-5 d-flex" style="align-items: flex-start">
                                        <img src="{{ asset('public\user\assets\images/contact-details.png') }}" alt="">
                                        <div class="ml-3">
                                            <h5 class="card-headings">Contact details</h5>
                                            <p>You have only edit these details once every 30 days. So if you are editing them, just double check it before hitting Save. On the note, you need to hit 'Save detials' at the bottom for any changes you make to be saved.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <h6 class="card-headings">Your address</h6>
                                    <textarea name="" id="" cols="20" rows="5" class="border shadow-none rounded shadow-sm w-100" readonly>{{$data->address}}</textarea>
                                </div>
                                <div class="mt-3">
                                    <h6 class="card-headings">Your phone number</h6>
                                    <textarea name="" id="" cols="20" rows="3" class="border shadow-none rounded shadow-sm w-100" readonly>{{$data->phone}}</textarea>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

