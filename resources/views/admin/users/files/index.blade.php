@extends('admin.layout.app')
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
                                <a class="btn btn-success mb-3" href="{{ route('certificates.create',$id) }}">Add PDF</a>
                                <table class="table" id="table_id_1">
                                    <thead>
                                        <tr>
                                            <th>Sr.</th>
                                            <th>File</th>
                                            <th scope="col">Actions</th>
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
                                                    <div  style="display: flex;align-items: center;justify-content: center;column-gap: 8px">
                                                    <form method="post"
                                                        action="{{ route('certificates.destroy', $pdf_file->id)}}">
                                                        @csrf
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <button type="submit" class="btn btn-danger btn-flat show_confirm"
                                                            data-toggle="tooltip">Delete</button>
                                                    </form>
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
    {{-- @if (\Illuminate\Support\Facades\Session::has('message'))
        <script>
            toastr.success('{{ \Illuminate\Support\Facades\Session::get('message') }}');
        </script>
    @endif --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
    $(function() {
        $('#table_id_1').DataTable();

        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Are you sure you want to delete this record?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    });
    </script>
@endsection