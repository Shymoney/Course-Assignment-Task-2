@extends('layouts.header')
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
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                <strong>{{ session('status') }}</strong>
                            </div>
                        @endif {{ __('You are logged in!') }}
                    </div>
                    <!--course data form --->
                    <div class="row">
                        <div class="col-12">
                            <form method="POST" action="{{ route('submission') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <h4 class="header-title text-danger text-center">Upload Course Data</h4>

                                    <ul class="nav nav-tabs nav-bordered mb-3" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a href="#floating-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active" aria-selected="true" role="tab">
                                                Preview
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- end nav-->
                                    <div class="tab-content">
                                        <div class="">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <!--Course Name-->
                                                    <h5 class="mb-3">Course Name</h5>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" name="courseName" class="form-control @error('courseName') is-invalid @enderror" required />
                                                            @error('courseName')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        <label for="floatingInput">Course Name</label>
                                                    </div>
                                                    <!---course details---->
                                                    <h5 class="mb-3 mt-4">Course Details</h5>
                                                    <div class="form-floating">
                                                        <textarea class="form-control @error('courseDetails') is-invalid @enderror" name="courseDetails" placeholder="Leave a comment here" required style="height: 350px;"></textarea>
                                                            @error('courseDetails')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        <label for="floatingTextarea">Course Details</label>
                                                    </div>
                                                </div>

                                                <!--subject area-->
                                                <div class="col-lg-6">
                                                    <h5 class="mb-3">Subject Area</h5>
                                                    <div class="form-control-sm">
                                                        <select class="form-select @error('subjectArea') is-invalid @enderror" name="subjectArea" required>
                                                                @error('subjectArea')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            <option selected="">- Please Choose Subject Area-</option>
                                                            <option value="Computing">Computing</option>
                                                            <option value="Biological Sciences">Biological Sciences</option>
                                                            <option
                                                                value="Business Management and
                                                            Entrepreneurship"
                                                            >
                                                                Business Management and Entrepreneurship
                                                            </option>
                                                            <option value="Human Resource Management"> Human Resource Management</option>
                                                            <option value="Computer Science"> Computer Science </option>
                                                            <option value="Music and Arts"> Music and Arts</option>
                                                        </select>
                                                    </div>
                                                    <!--Level section-->
                                                    <h5 class="mb-3 mt-4">Level</h5>
                                                    <div class="row g-2">
                                                        <div class="col-md">
                                                            <div class="form-control-sm">
                                                                <select class="form-select @error('level') is-invalid @enderror" name="level" required>
                                                                    @error('level')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                    <option selected="">- Please Choose Level - </option>
                                                                    <option value="Undergraduate">Undergraduate</option>
                                                                    <option value="Postgraduate">Postgraduate</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--location section-->
                                                    <h5 class="mb-3 mt-4">Location</h5>
                                                    <div class="row g-2">
                                                        <div class="col-md">
                                                            <div class="form-control-sm">
                                                                <select class="form-select @error('location') is-invalid @enderror" name="location" required>
                                                                    @error('location')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                    <option selected="">- Please Choose Location - </option>
                                                                    <option value="WaterSide">WaterSide</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--starting section-->
                                                    <h5 class="mb-3 mt-4">Starting Session</h5>
                                                    <div class="row g-2">
                                                        <div class="col-md">
                                                            <div class="form-control-sm">
                                                                <select class="form-select @error('starting') is-invalid @enderror" name="starting" required>
                                                                    @error('starting')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                    <option selected="">- Please Choose Starting Session - </option>
                                                                    <option value="January">January</option>
                                                                    <option value="September">September</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="g-2">
                                                        <h5 class="mb-3 mt-4">Entry Requirements</h5>
                                                        <!--- Entry requirements section--->
                                                        <div class="form-check form-check-inline mb-2">
                                                            <input type="checkbox" value="18years and above" name="year" class="form-check-input @error('year') is-invalid @enderror" required />
                                                            @error('year')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                            <label class="form-check-label" for="customCheckcolor1">18 years and above</label>
                                                        </div>
                                                        <div class="form-check form-check-inline form-checkbox-success mb-2">
                                                            <input type="checkbox" value="Integrated Foundation Year" name="integrated" class="form-check-input @error('integrated') is-invalid @enderror" required />
                                                            @error('integrated')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                            <label class="form-check-label" for="customCheckcolor2"> Integrated Foundation Year</label>
                                                        </div>
                                                        <div class="form-check form-check-inline form-checkbox-info mb-2">
                                                            <input type="checkbox" value="English Language IELTS 6.0" name="IELTS" class="form-check-input @error('IELTS') is-invalid @enderror" required />
                                                            @error('IELTS')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                            <label class="form-check-label" for="customCheckcolor3">English Language IELTS 6.0</label>
                                                        </div>
                                                    </div>
                                                    <br />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end tab-content-->

                                    <h4 class="header-title text-danger text-center">Fees and Funding</h4>

                                <p class="">2023/2024 Tuition Fees</p>

                                <div class="row g-2">

                                    <!--- Fees and Funding section--->
                                    <div class="form-check mb-2">
                                          <input type="checkbox" name="fullTime" value="&pound;9,250" class="form-check-input" required />
                                            @error('fullTime')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                         <label class="form-check-label" for="customCheckcolor1">UK-Full Time: &pound;9,250</label>
                                    </div>

                                    <div class="form-check mb-2">
                                          <input type="checkbox" value="&pound;1,540 (per credit module)" name="partTime" class="form-check-input" required />
                                            @error('partTime')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        <label class="form-check-label"  for="customCheckcolor2"> UK-Part-Time: &pound;1,540(per credit module)</label>
                                    </div>

                                    <div class="form-check mb-2">
                                          <input type="checkbox" value="&pound;16,000" name="internationalFullTime" class="form-check-input" required />
                                            @error('internationalFullTime')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        <label class="form-check-label" for="customCheckcolor3">Internation Full Time: &pound;16,000</label>
                                    </div>

                                </div>


                                    <div class="row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-lg btn-outline-danger">
                                                {{ __('Submit') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <!-- end card -->
                        </div>

                        <!-- end col -->
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
