@section('content')
    @extends('admin.layouts.master')
@section('title', 'admin')

<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">add food</h3>
                    </div>

                    <form action="admin/food/add_food" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                       placeholder="Enter name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">chef</label>
                                <input type="text" name="chef" class="form-control" id="exampleInputEmail1"
                                       placeholder="Enter chef">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Time</label>
                                <input type="text" name="time" class="form-control" id="exampleInputEmail1"
                                       placeholder="Enter time">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">description</label>
                                <textarea type="text" class="form-control" id="description"
                                          placeholder="Enter description" name="description"></textarea>

                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">price</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                       placeholder="Enter price" name="price">
                            </div>



                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
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


@endsection



