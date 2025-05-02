@extends('user.layout.app')
@section('title', 'Dashboard')
@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-12">
                                    <h4>Files</h4>
                                </div>
                            </div>
                            <div class="card-body table-striped table-bordered table-responsive">
                                {{-- <a class="btn btn-success mb-3" href="{{ route('certificates.create',$id) }}">Add PDF</a> --}}
                                <table class="table" id="table_id_1">
                                    <thead>
                                        <tr>
                                            <th>Sr.</th>
                                            <th>File</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user_files as $pdf_file)
                                            <tr>
                                                <td>
                                                    {{$loop->iteration}}
                                                </td>
                                                    @php
                                                    $file_name = $pdf_file->file;
                                                    $ext = explode('.', $file_name);
                                                    @endphp
                                                <td>
                                                    <a target="_black" href="{{ asset('' . '/' . $pdf_file->file) }}">
                                                        @if ($ext[1] == 'pdf')
                                                            <img src="{{ asset('public/admin/assets/images/pdf-icon.png') }}"
                                                                style="height: 50px;width:50px">
                                                        @else
                                                            <img src="{{ asset('' . '/' . $pdf_file->file) }}"
                                                                style="height: 50px;width:50px">
                                                        @endif
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        @php
                                                            $file_name = $pdf_file->file;
                                                            $ext = explode('users/', $file_name);
                                                        @endphp
                                                            <a href="{{route('certificate.download',$ext[1])}}" class='btn btn-download'><span><button class="btn btn-primary">Download</button></span></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


@section('js')

@endsection