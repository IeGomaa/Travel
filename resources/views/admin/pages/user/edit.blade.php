@extends('admin.layouts.master')

@section('title')
    User | Edit
@endsection

@push('css')
    <link href="{{ asset('AdminAssets/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
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
                                        <h4>Edit User</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">

                                <form action="{{ route('admin.user.update') }}" method="post">
                                    @method('PUT')
                                    @csrf
                                    @include('admin.pages.user._form')
                                    <input type="hidden" name="id" value="{{ $user->id }}">
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
@endpush
