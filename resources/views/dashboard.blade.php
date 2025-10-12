@extends('layouts.default', ['page' => '/'])
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="bg-primary pt-10 pb-21"></div>
    <div class="container-fluid mt-n22 px-6">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mb-2 mb-lg-0">
                            <h3 class="mb-0  text-white"> Projects</h3>
                        </div>
                        <div>
                            <a href="#" class="btn btn-white">Create New Project</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                <!-- card -->
                <div class="card ">
                    <!-- card body -->
                    <div class="card-body">
                        <!-- heading -->
                        <div class="d-flex justify-content-between align-items-center
                    mb-3">
                            <div>
                                <h4 class="mb-0">Projects</h4>
                            </div>
                            <div class="icon-shape icon-md bg-light-primary text-primary
                      rounded-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="18" height="18"
                                    fill="currentColor" class="bi bi-briefcase">
                                    <path
                                        d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5m1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0M1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <!-- project number -->
                        <div>
                            <h1 class="fw-bold">18</h1>
                            <p class="mb-0"><span class="text-dark me-2">2</span>Completed</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                <!-- card -->
                <div class="card ">
                    <!-- card body -->
                    <div class="card-body">
                        <!-- heading -->
                        <div class="d-flex justify-content-between align-items-center
                    mb-3">
                            <div>
                                <h4 class="mb-0">Active Task</h4>
                            </div>
                            <div class="icon-shape icon-md bg-light-primary text-primary
                      rounded-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="18" height="18"
                                    fill="currentColor" class="bi bi-list-task">
                                    <path fill-rule="evenodd"
                                        d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5zM3 3H2v1h1z">
                                    </path>
                                    <path
                                        d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1z">
                                    </path>
                                    <path fill-rule="evenodd"
                                        d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5zM2 7h1v1H2zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm1 .5H2v1h1z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <!-- project number -->
                        <div>
                            <h1 class="fw-bold">132</h1>
                            <p class="mb-0"><span class="text-dark me-2">28</span>Completed</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                <!-- card -->
                <div class="card ">
                    <!-- card body -->
                    <div class="card-body">
                        <!-- heading -->
                        <div class="d-flex justify-content-between align-items-center
                    mb-3">
                            <div>
                                <h4 class="mb-0">Teams</h4>
                            </div>
                            <div class="icon-shape icon-md bg-light-primary text-primary
                      rounded-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="18" height="18"
                                    fill="currentColor" class="bi bi-people">
                                    <path
                                        d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <!-- project number -->
                        <div>
                            <h1 class="fw-bold">12</h1>
                            <p class="mb-0"><span class="text-dark me-2">1</span>Completed</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                <!-- card -->
                <div class="card ">
                    <!-- card body -->
                    <div class="card-body">
                        <!-- heading -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <h4 class="mb-0">Productivity</h4>
                            </div>
                            <div class="icon-shape icon-md bg-light-primary text-primary rounded-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="18" height="18"
                                    fill="currentColor" class="bi bi-bullseye">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"></path>
                                    <path d="M8 13A5 5 0 1 1 8 3a5 5 0 0 1 0 10m0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12"></path>
                                    <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6m0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8"></path>
                                    <path d="M9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"></path>
                                </svg>
                            </div>
                        </div>
                        <!-- project number -->
                        <div>
                            <h1 class="fw-bold">76%</h1>
                            <p class="mb-0"><span class="text-success me-2">5%</span>Completed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row  -->
        <div class="row mt-6">
            <div class="col-md-12 col-12">
                <!-- card  -->
                <div class="card">
                    <!-- card header  -->
                    <div class="card-header bg-white  py-4">
                        <h4 class="mb-0">Active Projects</h4>
                    </div>
                    <!-- table  -->
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Project name</th>
                                    <th>Hours</th>
                                    <th>priority</th>
                                    <th>Members</th>
                                    <th>Progress</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="icon-shape icon-md border p-4 rounded-1">
                                                    <img src="{{ Vite::asset('resources/images/brand/dropbox-logo.svg') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class=" mb-1"> <a href="#" class="text-inherit">Dropbox Design
                                                        System</a></h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">34</td>
                                    <td class="align-middle"><span class="badge bg-warning">Medium</span></td>
                                    <td class="align-middle">
                                        <div class="avatar-group">
                                            <span class="avatar avatar-sm">
                                                <img src="{{ Vite::asset('resources/images/avatar/avatar-1.jpg') }}"
                                                    alt="avatar" class="rounded-circle" />
                                            </span>
                                            <span class="avatar avatar-sm">
                                                <img src="{{ Vite::asset('resources/images/avatar/avatar-2.jpg') }}"
                                                    alt="avatar" class="rounded-circle" />
                                            </span>
                                            <span class="avatar avatar-sm">
                                                <img src="{{ Vite::asset('resources/images/avatar/avatar-3.jpg') }}"
                                                    alt="avatar" class="rounded-circle" />
                                            </span>
                                            <span class="avatar avatar-sm avatar-primary">
                                                <span class="avatar-initials rounded-circle fs-6">+5</span>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="align-middle text-dark">
                                        <div class="float-start me-3">15%</div>
                                        <div class="mt-2">
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar" style="width:15%"
                                                    aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="icon-shape icon-md border p-4 rounded-1">
                                                    <img src="{{ Vite::asset('resources/images/brand/slack-logo.svg') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class=" mb-1"> <a href="#" class="text-inherit">Slack Team UI
                                                        Design</a></h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">47</td>
                                    <td class="align-middle"><span class="badge bg-danger">High</span></td>
                                    <td class="align-middle">
                                        <div class="avatar-group">
                                            <span class="avatar avatar-sm">
                                                <img src="{{ Vite::asset('resources/images/avatar/avatar-4.jpg') }}"
                                                    alt="avatar" class="rounded-circle" />
                                            </span>
                                            <span class="avatar avatar-sm">
                                                <img src="{{ Vite::asset('resources/images/avatar/avatar-5.jpg') }}"
                                                    alt="avatar" class="rounded-circle" />
                                            </span>
                                            <span class="avatar avatar-sm">
                                                <img src="{{ Vite::asset('resources/images/avatar/avatar-6.jpg') }}"
                                                    alt="avatar" class="rounded-circle" />
                                            </span>
                                            <span class="avatar avatar-sm avatar-primary">
                                                <span class="avatar-initials rounded-circle fs-6">+5</span>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="align-middle text-dark">
                                        <div class="float-start me-3">35%</div>
                                        <div class="mt-2">
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar" style="width:35%"
                                                    aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="icon-shape icon-md border p-4 rounded-1">
                                                    <img src="{{ Vite::asset('resources/images/brand/github-logo.svg') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class=" mb-1"> <a href="#" class="text-inherit">GitHub
                                                        Satellite</a></h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">120</td>
                                    <td class="align-middle"><span class="badge bg-info">Low</span></td>
                                    <td class="align-middle">
                                        <div class="avatar-group">
                                            <span class="avatar avatar-sm">
                                                <img src="{{ Vite::asset('resources/images/avatar/avatar-7.jpg') }}"
                                                    alt="avatar" class="rounded-circle" />
                                            </span>
                                            <span class="avatar avatar-sm">
                                                <img src="{{ Vite::asset('resources/images/avatar/avatar-8.jpg') }}"
                                                    alt="avatar" class="rounded-circle" />
                                            </span>
                                            <span class="avatar avatar-sm">
                                                <img src="{{ Vite::asset('resources/images/avatar/avatar-9.jpg') }}"
                                                    alt="avatar" class="rounded-circle" />
                                            </span>
                                            <span class="avatar avatar-sm avatar-primary">
                                                <span class="avatar-initials rounded-circle fs-6">+1</span>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="align-middle text-dark">
                                        <div class="float-start me-3">75%</div>
                                        <div class="mt-2">
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar" style="width:75%"
                                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="icon-shape icon-md border p-4 rounded-1">
                                                    <img src="{{ Vite::asset('resources/images/brand/3dsmax-logo.svg') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class=" mb-1"> <a href="#" class="text-inherit">3D Character
                                                        Modelling</a></h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">89</td>
                                    <td class="align-middle"><span class="badge bg-warning">Medium</span></td>
                                    <td class="align-middle">
                                        <div class="avatar-group">
                                            <span class="avatar avatar-sm">
                                                <img src="{{ Vite::asset('resources/images/avatar/avatar-10.jpg') }}"
                                                    alt="avatar" class="rounded-circle" />
                                            </span>
                                            <span class="avatar avatar-sm">
                                                <img src="{{ Vite::asset('resources/images/avatar/avatar-11.jpg') }}"
                                                    alt="avatar" class="rounded-circle" />
                                            </span>
                                            <span class="avatar avatar-sm">
                                                <img src="{{ Vite::asset('resources/images/avatar/avatar-12.jpg') }}"
                                                    alt="avatar" class="rounded-circle" />
                                            </span>
                                            <span class="avatar avatar-sm avatar-primary">
                                                <span class="avatar-initials rounded-circle fs-6">+5</span>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="align-middle text-dark">
                                        <div class="float-start me-3">63%</div>
                                        <div class="mt-2">
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar" style="width:63%"
                                                    aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="icon-shape icon-md border p-4 rounded bg-primary">
                                                    <img src="{{ Vite::asset('resources/images/brand/layers-logo.svg') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class=" mb-1"> <a href="#" class="text-inherit">Webapp
                                                        DesignSystem</a></h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">108</td>
                                    <td class="align-middle"><span class="badge bg-success">Track</span></td>
                                    <td class="align-middle">
                                        <div class="avatar-group">
                                            <span class="avatar avatar-sm">
                                                <img src="{{ Vite::asset('resources/images/avatar/avatar-13.jpg') }}"
                                                    alt="avatar" class="rounded-circle" />
                                            </span>
                                            <span class="avatar avatar-sm">
                                                <img src="{{ Vite::asset('resources/images/avatar/avatar-14.jpg') }}"
                                                    alt="avatar" class="rounded-circle" />
                                            </span>
                                            <span class="avatar avatar-sm">
                                                <img src="{{ Vite::asset('resources/images/avatar/avatar-15.jpg') }}"
                                                    alt="avatar" class="rounded-circle" />
                                            </span>
                                            <span class="avatar avatar-sm avatar-primary">
                                                <span class="avatar-initials rounded-circle fs-6">+5</span>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="align-middle text-dark">
                                        <div class="float-start me-3">100%</div>
                                        <div class="mt-2">
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width:100%" aria-valuenow="100" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle border-bottom-0">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="icon-shape icon-md border p-4 rounded-1">
                                                    <img src="{{ Vite::asset('resources/images/brand/github-logo.svg') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class=" mb-1"> <a href="#" class="text-inherit">Github Event
                                                        Design</a></h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle border-bottom-0">120</td>
                                    <td class="align-middle border-bottom-0"><span class="badge bg-info">Low</span></td>
                                    <td class="align-middle border-bottom-0">
                                        <div class="avatar-group">
                                            <span class="avatar avatar-sm">
                                                <img src="{{ Vite::asset('resources/images/avatar/avatar-13.jpg') }}"
                                                    alt="avatar" class="rounded-circle" />
                                            </span>
                                            <span class="avatar avatar-sm">
                                                <img src="{{ Vite::asset('resources/images/avatar/avatar-14.jpg') }}"
                                                    alt="avatar" class="rounded-circle" />
                                            </span>
                                            <span class="avatar avatar-sm">
                                                <img src="{{ Vite::asset('resources/images/avatar/avatar-15.jpg') }}"
                                                    alt="avatar" class="rounded-circle" />
                                            </span>
                                            <span class="avatar avatar-sm avatar-primary">
                                                <span class="avatar-initials rounded-circle fs-6">+1</span>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="align-middle text-dark border-bottom-0">
                                        <div class="float-start me-3">75%</div>
                                        <div class="mt-2">
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar" style="width:75%"
                                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- card footer  -->
                    <div class="card-footer bg-white text-center">
                        <a href="#" class="link-primary">View All Projects</a>
                    </div>
                </div>

            </div>
        </div>
        <!-- row  -->
        <div class="row my-6">
            <div class="col-xl-4 col-lg-12 col-md-12 col-12 mb-6 mb-xl-0">
                <!-- card  -->
                <div class="card h-100">
                    <!-- card body  -->
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h4 class="mb-0">Tasks Performance</h4>
                            </div>
                            <!-- dropdown  -->
                            <div class="dropdown dropstart">
                                <a class="text-muted text-primary-hover" href="#" role="button" id="dropdownTask"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-xxs" data-feather="more-vertical"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownTask">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <!-- chart  -->
                        <div class="mb-8">
                            <div id="perfomanceChart"></div>
                        </div>
                        <!-- icon with content  -->
                        <div class="d-flex align-items-center justify-content-around">
                            <div class="text-center">
                                <i class="icon-sm text-success" data-feather="check-circle"></i>
                                <h1 class="mt-3  mb-1 fw-bold">76%</h1>
                                <p>Completed</p>
                            </div>
                            <div class="text-center">
                                <i class="icon-sm text-warning" data-feather="trending-up"></i>
                                <h1 class="mt-3  mb-1 fw-bold">32%</h1>
                                <p>In-Progress</p>
                            </div>
                            <div class="text-center">
                                <i class="icon-sm text-danger" data-feather="trending-down"></i>
                                <h1 class="mt-3  mb-1 fw-bold">13%</h1>
                                <p>Behind</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card  -->
            <div class="col-xl-8 col-lg-12 col-md-12 col-12">
                <div class="card h-100">
                    <!-- card header  -->
                    <div class="card-header bg-white py-4">
                        <h4 class="mb-0">Teams </h4>
                    </div>
                    <!-- table  -->
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead class="table-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Last Activity</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <img src="{{ Vite::asset('resources/images/avatar/avatar-2.jpg') }}"
                                                    alt="" class="avatar-md avatar rounded-circle" />
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class=" mb-1">Anita Parmar</h5>
                                                <p class="mb-0">anita@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">Front End Developer</td>
                                    <td class="align-middle">3 May, 2023</td>
                                    <td class="align-middle">
                                        <div class="dropdown dropstart">
                                            <a class="text-muted text-primary-hover" href="#" role="button"
                                                id="dropdownTeamOne" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="icon-xxs" data-feather="more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownTeamOne">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else
                                                    here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <img src="{{ Vite::asset('resources/images/avatar/avatar-1.jpg') }}"
                                                    alt="" class="avatar-md avatar rounded-circle" />
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class=" mb-1">Jitu Chauhan</h5>
                                                <p class="mb-0">jituchauhan@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">Project Director </td>
                                    <td class="align-middle">Today</td>
                                    <td class="align-middle">
                                        <div class="dropdown dropstart">
                                            <a class="text-muted text-primary-hover" href="#" role="button"
                                                id="dropdownTeamTwo" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="icon-xxs" data-feather="more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownTeamTwo">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else
                                                    here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <img src="{{ Vite::asset('resources/images/avatar/avatar-3.jpg') }}"
                                                    alt="" class="avatar-md avatar rounded-circle" />
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class=" mb-1">Sandeep Chauhan</h5>
                                                <p class="mb-0">sandeepchauhan@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">Full- Stack Developer</td>
                                    <td class="align-middle">Yesterday</td>
                                    <td class="align-middle">
                                        <div class="dropdown dropstart">
                                            <a class="text-muted text-primary-hover" href="#" role="button"
                                                id="dropdownTeamThree" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="icon-xxs" data-feather="more-vertical"></i>
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownTeamThree">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else
                                                    here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex align-items-center">

                                            <div>
                                                <img src="{{ Vite::asset('resources/images/avatar/avatar-4.jpg') }}"
                                                    alt="" class="avatar-md avatar rounded-circle" />
                                            </div>

                                            <div class="ms-3 lh-1">
                                                <h5 class=" mb-1">Amanda Darnell</h5>
                                                <p class="mb-0">amandadarnell@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">Digital Marketer</td>
                                    <td class="align-middle">3 May, 2023</td>
                                    <td class="align-middle">
                                        <div class="dropdown dropstart">
                                            <a class="text-muted text-primary-hover" href="#" role="button"
                                                id="dropdownTeamFour" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="icon-xxs" data-feather="more-vertical"></i>
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownTeamFour">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else
                                                    here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td class="align-middle">
                                        <div class="d-flex align-items-center">

                                            <div>
                                                <img src="{{ Vite::asset('resources/images/avatar/avatar-5.jpg') }}"
                                                    alt="" class="avatar-md avatar rounded-circle" />
                                            </div>

                                            <div class="ms-3 lh-1">
                                                <h5 class=" mb-1">Patricia Murrill</h5>
                                                <p class="mb-0">patriciamurrill@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">Account Manager</td>
                                    <td class="align-middle">3 May, 2023</td>
                                    <td class="align-middle">
                                        <div class="dropdown dropstart">
                                            <a class="text-muted text-primary-hover" href="#" role="button"
                                                id="dropdownTeamFive" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="icon-xxs" data-feather="more-vertical"></i>
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownTeamFive">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else
                                                    here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle border-bottom-0">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <img src="{{ Vite::asset('resources/images/avatar/avatar-6.jpg') }}"
                                                    alt="" class="avatar-md avatar rounded-circle" />
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class=" mb-1">Darshini Nair</h5>
                                                <p class="mb-0">darshininair@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle border-bottom-0">Front End Developer</td>
                                    <td class="align-middle border-bottom-0">3 May, 2023</td>
                                    <td class="align-middle border-bottom-0">
                                        <div class="dropdown dropstart">
                                            <a class="text-muted text-primary-hover" href="#" role="button"
                                                id="dropdownTeamSix" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="icon-xxs" data-feather="more-vertical"></i>
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownTeamSix">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else
                                                    here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection