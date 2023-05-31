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
                                        <th class="sort align-middle" data-sort="age">Fees and Funding</th>
                                        <th class="sort text-end align-middle pe-0" scope="col">ACTION</th>
                                    </tr>
                                    </thead>
                                    @foreach($course as $data)
                                        @foreach($feesFunding as $fees)
                                        <tbody class="list" id="bulk-select-body"><tr>
                                            <td class="fs--1 align-middle">
                                                <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;name&quot;:&quot;Anna&quot;,&quot;email&quot;:&quot;anna@example.com&quot;,&quot;age&quot;:18}"></div>
                                            </td>
                                            <td class="align-middle ps-3 name"> {{ ucfirst($data->course_name) }} </td>
                                            <td class="align-middle email">{{ strtolower($data->course_details) }} </td>
                                            <td class="align-middle email">{{ ucfirst($data->subject_area) }}</td>
                                            <td class="align-middle">{{ ucfirst($data->level) }}</td>
                                            <td class="align-middle">{{ ucfirst($data->location) }}</td>
                                            <td class="align-middle">{{ $data->starting }}</td>
                                            <td class="align-self-start">{{ ' UK-Full-Time '. $fees->uk_full_time.' UK-Part-Time '.$fees->uk_part_time.' International Full-Time '.$fees->international_full_time }}</td>
                                            <td class="align-middle">
                                                <button type="button" class="btn  btn-primary">Generate Report</button>
                                            </td>
                                        </tr><tr>
                                        </tr>
                                        </tbody>
                                        @endforeach
                                    @endforeach
                                </table>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

