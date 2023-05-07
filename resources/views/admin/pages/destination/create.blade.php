@extends('admin.layouts.master')

@section('title')
    Destination | Create
@endsection

@push('css')
    <link href="{{ asset('AdminAssets/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{ asset('AdminAssets/plugins/file-upload/file-upload-with-preview.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('AdminAssets/assets/css/forms/theme-checkbox-radio.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('AdminAssets/assets/css/forms/switches.css') }}">
    <!--  END CUSTOM STYLE FILE  -->
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('AdminAssets/plugins/bootstrap-select/bootstrap-select.min.css') }}">
    <!--  END CUSTOM STYLE FILE  -->
@endpush

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="container">
            <div class="container">

                <div class="row">
                    <div id="flStackForm" class="col-lg-12 layout-spacing layout-top-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Create Destination</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">

                                <form action="{{ route('admin.destination.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @include('admin.pages.destination._form')
                                    <button type="submit" class="btn btn-primary mt-3">Create</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--  END CONTENT AREA  -->
@endsection

@push('js')
    <script src="{{ asset('AdminAssets/plugins/highlight/highlight.pack.js') }}"></script>
    <script src="{{ asset('AdminAssets/assets/js/scrollspyNav.js') }}"></script>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->

    <script src="{{ asset('AdminAssets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/plugins/blockui/jquery.blockUI.min.js') }}"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{{ asset('AdminAssets/plugins/file-upload/file-upload-with-preview.min.js') }}"></script>

    <script>
        //First upload
        var firstUpload = new FileUploadWithPreview('myFirstImage')
    </script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('AdminAssets/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
@endpush
