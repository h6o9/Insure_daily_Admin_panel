@extends('admin.layout.app')
@section('title', 'Dashboard')
@section('content')

    <body>
        <div class="main-content">
            <section class="section">
                <div class="section-body">
                    <a class="btn btn-primary mb-3" href="{{ url()->previous() }}">Back</a>
                    <form id="add_student" action="{{ route('faq.update', ['id' => $data->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="card">
                                    <h4 class="text-center my-4">Update FAQ's</h4>
                                    <div class="row mx-0 px-4">
                                        <div class="col-sm-12 pl-sm-0 pr-sm-3">
                                            <div class="form-group">
                                                <label for="questions">Question <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="questions" name="questions"
                                                    placeholder="Enter the question" value="{{ $data->questions }}"
                                                    required>
                                                <div class="invalid-feedback">Please provide a question.</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 pl-sm-0 pr-sm-2">
                                            <div class="form-group mb-3">
                                                <label>Answer</label>
                                                <textarea name="answers" id="answers" class="form-control">{{ $data->answers }}</textarea>
                                            </div>
                                        </div>
                                        <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
                                        <script>
                                            let editor;
                                            ClassicEditor
                                                .create(document.querySelector('#answers'))
                                                .then(newEditor => {
                                                    editor = newEditor;
                                                    editor.setData({!! json_encode($data->answers) !!});
                                                })
                                                .catch(error => {
                                                    console.error(error);
                                                });
                                        </script>
                                    </div>
                                    <div class="card-footer text-center row">
                                        <div class="card-footer text-center row">
                                            <div class="col">
                                                <button type="submit" class="btn btn-success mr-1 btn-bg" id="submit">
                                                    <span class="spinner-border spinner-border-sm d-none" role="status"
                                                        aria-hidden="true"></span>
                                                    Update
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </body>
@endsection

@section('js')
    @if (\Illuminate\Support\Facades\Session::has('message'))
        <script>
            toastr.success('{{ \Illuminate\Support\Facades\Session::get('message') }}');
        </script>
    @endif
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#task-textarea'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#task-textarea1'))
            .catch(error => {
                console.error(error);
            });

        document.getElementById('add_student').addEventListener('submit', function() {
            var button = document.getElementById('submit');
            var spinner = button.querySelector('.spinner-border');

            button.disabled = true; // Button disable karein
            spinner.classList.remove('d-none'); // Spinner show karein
        });
    </script>
@endsection
