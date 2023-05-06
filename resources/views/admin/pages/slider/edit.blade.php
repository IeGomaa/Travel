@extends('admin.layouts.master')

@section('title')
    Slider | Edit
@endsection

@push('css')
    <link href="{{ asset('AdminAssets/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{ asset('AdminAssets/plugins/file-upload/file-upload-with-preview.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
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
                                        <h4>Edit Slider</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">

                                <form action="{{ route('admin.slider.update') }}" method="post" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    @include('admin.pages.slider._form')
                                    <input type="hidden" name="id" value="{{ $slider->id }}">
                                    <button type="submit" class="btn btn-primary mt-3">Edit</button>
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
@endpush
