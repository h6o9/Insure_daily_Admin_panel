@extends('user.layout.app')
@section('title', 'Dashboard')
@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="row mb-3">
                <div class="col-xl-3 mb-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="card-statistic-4">
                            <div class="align-items-center justify-content-between">
                                @php
                                    $user = Auth::guard('web')->user();
                                    $user_files = App\Models\Certificate::where('user_id', $user->id)->count();
                                    $certificate = App\Models\Certificate::where('user_id', $user->id)->first();
                                @endphp
                                <div class="row ">
                                    @if($certificate && $user_files > 1)
                                        <a href="{{route('user.certificates')}}" class="d-flex text-decoration-none w-100">     
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                                <div class="card-content">
                                                    
                                                    <h5 class="font-15">Cesxrtificates</h5>
                                                    <h2 class="mb-3 font-18">{{ $user_files }}</h2>
                                                    {{-- <p class="mb-0"><span class="col-green">10%</span> Increase</p> --}}
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                                <div class="banner-img">
                                                    <img src="{{ asset('public/admin/assets/images/pdf-icon.png') }}"
                                                    alt="">
                                                </div>
                                            </div>
                                        </a>
                                    @endif
                                    @if($certificate && $user_files == 1)
                                        <a href="{{ asset($certificate->file) }}" target="_blank" class="d-flex text-decoration-none w-100">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                                <div class="card-content">
                                                    
                                                    <h5 class="font-15">Certificates</h5>
                                                    <h2 class="mb-3 font-18">{{ $user_files }}</h2>
                                                    {{-- <p class="mb-0"><span class="col-green">10%</span> Increase</p> --}}
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                                <div class="banner-img">
                                                    <img src="{{ asset('public/admin/assets/images/pdf-icon.png') }}"
                                                    alt="">
                                                </div>
                                            </div>
                                        </a>
                                    @endif
                                    @if($user_files == 0)
                                    <a href="{{route('user.certificates')}}" class="d-flex text-decoration-none w-100">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                            <div class="card-content">
                                                
                                                <h5 class="font-15">Certificates</h5>
                                                <h2 class="mb-3 font-18">{{ $user_files }}</h2>
                                                {{-- <p class="mb-0"><span class="col-green">10%</span> Increase</p> --}}
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                            <div class="banner-img">
                                                <img src="{{ asset('public/admin/assets/images/pdf-icon.png') }}"
                                                alt="">
                                            </div>
                                        </div>
                                    </a>
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
