@extends('admin.layouts.master')

@section('title')
    Employee | Index
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
            <div class="container">

                <div class="row layout-top-spacing">

                    <div id="tableHover" class="col-lg-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Employee Table</h4>
                                        <a href="{{ route('admin.employee.create') }}">
                                            <button class="btn btn-primary">Create Employee</button>
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
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Image</th>
                                            <th>Location</th>
                                            <th>Position</th>
                                            <th>Biography</th>
                                            <th>Delete</th>
                                            <th>Edit</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($employees as $employee)
                                                <tr>
                                                    <td>{{ $employee->id }}</td>
                                                    <td>{{ $employee->name }}</td>
                                                    <td>{{ $employee->email }}</td>
                                                    <td>{{ $employee->phone }}</td>
                                                    <td>
                                                        <img src="{{ asset($employee->image) }}" alt="employee image" width="50">
                                                    </td>
                                                    <td>{{ $employee->location }}</td>
                                                    <td>{{ $employee->position }}</td>
                                                    <td>{{ $employee->biography }}</td>
                                                    <td>
                                                        <form action="{{ route('admin.employee.delete') }}" method="post">
                                                            @method('DELETE')
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{ $employee->id }}">
                                                            <input type="submit" value="Delete" class="btn btn-danger">
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('admin.employee.edit') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{ $employee->id }}">
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
