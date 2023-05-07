@extends('admin.layouts.master')

@section('title')
    Tour | Index
@endsection

@push('css')
    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link href="{{ asset('AdminAssets/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('AdminAssets/assets/css/forms/theme-checkbox-radio.css') }}">
    <link href="{{ asset('AdminAssets/assets/css/tables/table-basic.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL CUSTOM STYLES -->
@endpush

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="container-fluid">
            <div class="container" style="max-width: 100% !important;">

                <div class="row layout-top-spacing">

                    <div id="tableHover" class="col-lg-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Tour Table</h4>
                                        <a href="{{ route('admin.tour.create') }}">
                                            <button class="btn btn-primary">Create Tour</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover mb-4">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>No.Of.Days</th>
                                            <th>Location</th>
                                            <th>Price</th>
                                            <th>Discount</th>
                                            <th>Date</th>
                                            <th>Country</th>
                                            <th>Travel Type</th>
                                            <th>Delete</th>
                                            <th>Edit</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($tours as $tour)
                                                <tr>
                                                    <td>{{ $tour->id }}</td>
                                                    <td>{{ $tour->name }}</td>
                                                    <td>{{ $tour->number_of_days }}</td>
                                                    <td>{{ $tour->location }}</td>
                                                    <td>{{ $tour->price }}</td>
                                                    <td>{{ $tour->discount }}</td>
                                                    <td>{{ $tour->date }}</td>
                                                    <td>{{ $tour->country->name }}</td>
                                                    <td>{{ $tour->travel->type }}</td>
                                                    <td>
                                                        <form action="{{ route('admin.tour.delete') }}" method="post">
                                                            @method('DELETE')
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{ $tour->id }}">
                                                            <input type="submit" value="Delete" class="btn btn-danger">
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('admin.tour.edit') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{ $tour->id }}">
                                                            <input type="submit" value="Edit" class="btn btn-warning">
                                                        </form>
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

            </div>
        </div>
    </div>
    <!--  END CONTENT AREA  -->
@endsection

@push('js')
    <script src="{{ asset('AdminAssets/plugins/highlight/highlight.pack.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    <script src="{{ asset('AdminAssets/assets/js/scrollspyNav.js') }}"></script>
    <script>
        checkall('todoAll', 'todochkbox');
        $('[data-toggle="tooltip"]').tooltip()
    </script>
    <!-- END PAGE LEVEL CUSTOM SCRIPTS -->
@endpush
