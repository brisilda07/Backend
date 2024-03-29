@extends('admin.admin_master')
@section('admin')


    <div class="content-body" style="min-height: 788px;">
        <div class="container-fluid">
            <!-- Add Project -->
            <div class="modal fade" id="addProjectSidebar">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">


                        </div>
                        <div class="modal-body">

                        </div>
                    </div>
                </div>
            </div>

            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">

                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">

                </div>
            </div>

            <!-- row -->
            <div class="row">

                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Information </h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">

                                <form method="post" action="{{ route('store.information') }}" >
                                    @csrf

                                    <div class="form-group">
                                        <label class="info-title">About Information </label>
                                        <textarea class="form-control" name="summernote" id="summernote"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label class="info-title">Refund Policy</label>
                                        <textarea class="form-control" name="summernote" id="summernote2"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label class="info-title">Terms And Condition</label>
                                        <textarea class="form-control" name="summernote" id="summernote3"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label class="info-title">Privacy And Policy</label>
                                        <textarea class="form-control" name="summernote" id="summernote4"></textarea>
                                    </div>

                                    <input type="submit" class="btn btn-success" value="Add Information">

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script type="text/javascript">
        $('#summernote').summernote({
            height: 400
        });
    </script>

    <script type="text/javascript">
        $('#summernote2').summernote({
            height: 400
        });
    </script>

    <script type="text/javascript">
        $('#summernote3').summernote({
            height: 400
        });
    </script>

    <script type="text/javascript">
        $('#summernote4').summernote({
            height: 400
        });
    </script>


@endsection
