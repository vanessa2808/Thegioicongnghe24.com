@section('content')
    @extends('admin.layouts.master')
@section('title','admin')
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">add sidebar</h3>
                    </div>

                    <form action="{{route('admin.sidebar.edit_sidebar',['id'=>$idSidebar->id])}}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                       placeholder="Enter title" value="{{$idSidebar->title}}">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputFile">Image1</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile"
                                               name="image1">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                            </div>
                            <div><img src="{{ asset($idSidebar->image1)}}"
                                      style="width: auto; height: auto;max-width: 150px;max-height: 150px"></div>


                            <div class="form-group">
                                <label for="exampleInputFile">Image2</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile"
                                               name="image2">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                            </div>
                            <div><img src="{{ asset($idSidebar->image2)}}"
                                      style="width: auto; height: auto;max-width: 150px;max-height: 150px"></div>

                            <div class="form-group">
                                <label for="exampleInputFile">Image3</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile"
                                               name="image3">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                            </div>
                            <div><img src="{{ asset($idSidebar->image3)}}"
                                      style="width: auto; height: auto;max-width: 150px;max-height: 150px"></div>


                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace('description');
    </script>


</div>


@endsection
@section('script')
    <script>
        $(document).ready(function () {
            @if(Session::has('message'))
            @if (Session::get('class') == 'error')
            toastr.error('{{ Session::get('message') }}')
            @else
            toastr.success('{{ Session::get('message') }}')
            @endif
            @endif

        })
    </script>
@endsection
