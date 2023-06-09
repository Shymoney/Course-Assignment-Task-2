@extends('layouts.view_course_data')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if(session('message'))
            <div class="alert alert-success" role="alert">
                <h4>{{ session('message') }}</h4>
            </div>
            @endif
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif {{ __('You are logged in!') }}
                </div>
                @if(session('success'))
                    <span class="alert alert-success alert-dismissible" role="alert">
                        <h4>{{ session('success') }}</h4>
                    </span>
                @endif
                <!--course data form --->
                <div class="row">
                    <div id="tableExample" data-list="{&quot;valueNames&quot;:[&quot;name&quot;,&quot;email&quot;,&quot;age&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}">
                        <div class="table-responsive mx-n1 px-1">

                            <table class="table table-sm border-top border-200 fs--1 mb-0">
                                <thead>
                                <tr>
                                    <th class="white-space-nowrap fs--1 align-middle ps-0" style="max-width:20px; width:18px;">
                                        <div class="form-check mb-0 fs-0"><input class="form-check-input" id="bulk-select-example" type="checkbox" data-bulk-select="{&quot;body&quot;:&quot;bulk-select-body&quot;,&quot;actions&quot;:&quot;bulk-select-actions&quot;,&quot;replacedElement&quot;:&quot;bulk-select-replace-element&quot;}"></div>
                                    </th>
                                    <th class="sort align-middle ps-3" data-sort="name">Course Name</th>
                                    <th class="sort align-middle" data-sort="age">Course Details</th>
                                    <th class="sort align-middle" data-sort="email">Subject Area</th>
                                    <th class="sort align-middle" data-sort="age">Level</th>
                                    <th class="sort align-middle" data-sort="age">Location</th>
                                    <th class="sort align-middle" data-sort="age">Session</th>
                                    <th class="sort text-end align-middle pe-0" scope="col">ACTION</th>
                                </tr>
                                </thead>
                                @foreach($courseData as $data)
                                <tbody class="list" id="bulk-select-body"><tr>
                                    <td class="fs--1 align-middle">
                                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;name&quot;:&quot;Anna&quot;,&quot;email&quot;:&quot;anna@example.com&quot;,&quot;age&quot;:18}"></div>
                                    </td>
                                    <td class="align-middle ps-3 name"> {{ $data->course_name }} </td>
                                    <td class="align-middle email">{{ $data->course_details }} </td>
                                    <td class="align-middle email">{{ $data->subject_area }}</td>
                                    <td class="align-middle">{{ $data->level }}</td>
                                    <td class="align-middle">{{ $data->location }}</td>
                                    <td class="align-middle">{{ $data->starting }}</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="mb-3">
                                            <div class="input-group">
                                                <button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                                <div class="dropdown-menu">
                                                    <div class="dropdown-item">
                                                        <button type="button" class="btn btn-link btn-sm">
                                                            <a href="{{ route('viewReport', ['uuid' => $data->uuid]) }}"> View</a>
                                                        </button>
                                                    </div>
                                                    <div class="dropdown-item align-self-start">
                                                        <form action="{{ route('deleteCourse', ['uuid' => $data->uuid]) }}" method="POST">
                                                            @csrf
                                                            <button type="submit" class="btn btn-link btn-sm text-danger">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <button type="button" class="btn btn-link btn-sm">
                                                            <a href="#"> Generate Report</a>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    </tr><tr>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                            {{ $courseData->links() }}
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
