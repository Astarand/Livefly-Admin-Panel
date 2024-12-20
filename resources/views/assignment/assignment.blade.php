@extends('includes.layout')

@section('main')

    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="content-page-header ">
                    <h5>Service Details</h5>
                    <div class="list-btn">
                        <ul class="filter-list">
                            <li>
                                <a class="btn btn-filters w-auto popup-toggle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="filter"><span class="me-2"><img src="{{ asset('assets/img/icons/filter-icon.svg') }}" alt="filter"></span>Filter </a>
                            </li>
                            <li class="">
                                <div class="dropdown dropdown-action" data-bs-toggle="tooltip" data-bs-placement="top" title="download">
                                    <a href="#" class="btn-filters" data-bs-toggle="dropdown" aria-expanded="false"><span><i class="fe fe-download"></i></span></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <ul class="d-block">
                                            <li>
                                                <a class="d-flex align-items-center download-item" href="javascript:void(0);" download=""><i class="far fa-file-pdf me-2"></i>PDF</a>
                                            </li>
                                            <li>
                                                <a class="d-flex align-items-center download-item" href="javascript:void(0);" download=""><i class="far fa-file-text me-2"></i>CVS</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class="btn-filters" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="bottom" title="print"><span><i class="fe fe-printer"></i></span> </a>
                            </li>
                            <li>
                                <a class="btn btn-primary" href="{{ route('add-service') }}"><i class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add New Service</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="filter_inputs" class="card filter-card">
                <div class="card-body pb-0">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="input-block mb-3">
                                <label>Name</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="input-block mb-3">
                                <label>Email</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="input-block mb-3">
                                <label>Phone</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-table">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-center table-hover datatable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Customer Name</th>
                                            <th>Nurse Name</th>
                                            <th>Service Starts on</th>
                                            <th>Service End on</th>
                                            <th>Status</th>
                                            <th class="no-sort">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($services as $index => $service)
                                            <tr>
                                                <!-- Index -->
                                                <td>{{ $index + 1 }}</td>
                                    
                                                <!-- Customer Details -->
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="#">{{ $service->customer_fname }} {{ $service->customer_lname }}
                                                            {{-- <span><span>Email Address Goes Here</span></span> --}}
                                                        </a>
                                                    </h2>
                                                </td>
                                    
                                                <!-- Nurse Details -->
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="#">{{ $service->nurse_fname }} {{ $service->nurse_lname }}
                                                            {{-- <span><span>Email Address Goes Here</span></span> --}}
                                                        </a>
                                                    </h2>
                                                </td>
                                    
                                                <!-- Service Start Date -->
                                                <td>{{ \Carbon\Carbon::parse($service->service_start_date)->format('d M Y') }}</td>
                                    
                                                <!-- Service End Date -->
                                                <td>{{ \Carbon\Carbon::parse($service->service_end_date)->format('d M Y') }}</td>
                                    
                                                <!-- Status -->
                                                <td>
                                                    @if ($service->status == 0)
                                                        <span class="badge bg-success-light">Ongoing</span>
                                                    @else
                                                        <span class="badge bg-danger-light">End</span>
                                                    @endif
                                                </td>
                                    
                                                <!-- Actions -->
                                                <td class="d-flex align-items-center">
                                                    {{-- <a href="{{ route('view.service', $service->id) }}" class="btn btn-greys me-2" data-bs-toggle="modal" data-bs-target="#edit_vendor"> --}}
                                                    <a href="#" class="btn btn-greys me-2" data-bs-toggle="modal" data-bs-target="#view_vendor{{ $index }}">
                                                        <i class="fa-regular fa-eye me-1"></i> View Details
                                                    </a>
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="btn-action-icon" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-v"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul>
                                                                {{-- <li>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="fa-regular fa-eye me-2"></i>View</a>
                                                                </li> --}}
                                                                <li>
                                                                    <a class="dropdown-item" href="{{ route('service.deactivate', $service->id) }}" onclick="return confirm('Are You Sure?')">
                                                                        <i class="far fa-trash-alt me-2"></i>Delete
                                                                    </a>
                                                                </li>
                                                                
                                                                <li>
                                                                    @if($service->status == 0)
                                                                        <a class="dropdown-item" href="{{ route('service.complete', $service->id) }}" onclick="return confirm('Are You Sure?')">
                                                                            <i class="far fa-bell-slash me-2"></i>Completed
                                                                        </a>
                                                                    @endif
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="modal custom-modal fade" id="view_vendor{{ $index }}" role="dialog">
                                                        <div class="modal-dialog modal-dialog-centered modal-md">
                                                            <div class="modal-content">
                                                                <div class="modal-header border-0 pb-0">
                                                                    <div class="form-header modal-header-title text-start mb-0">
                                                                        <h4 class="mb-0">View service Details</h4>
                                                                    </div>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                    </button>
                                                                </div>
                                                                <form action="#">
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="input-block mb-3">
                                                                                    <label>Patitent Name</label>
                                                                                    <input type="text" class="form-control" value="{{ $service->customer_fname }} {{ $service->customer_lname }}" placeholder="Enter Name" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-12">
                                                                                <div class="input-block mb-0">
                                                                                    <label>Nurse Name</label>
                                                                                    <input type="text" class="form-control" value="{{ $service->nurse_fname }} {{ $service->nurse_lname }}" placeholder="Enter Reference Number" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-12 mt-3">
                                                                                <div class="input-block mb-3">
                                                                                    <label>Service Start Date</label>
                                                                                    <input type="text" class="form-control" value="{{ \Carbon\Carbon::parse($service->service_start_date)->format('d M Y') }}" placeholder="Enter Reference Number" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-12 mt-3">
                                                                                <div class="input-block mb-0">
                                                                                    <label>Service End Date</label>
                                                                                    <input type="text" class="form-control" value="{{ \Carbon\Carbon::parse($service->service_end_date)->format('d M Y') }}" placeholder="Enter Reference Number" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-12 col-md-12">
                                                                                <div class="input-block mb-3">
                                                                                    <label>Service Name</label>
                                                                                    <input type="text" class="form-control" value="{{ $service->customer_fname }} {{ $service->customer_lname }}" placeholder="Enter Name" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                                <div class="input-block mb-3">
                                                                                    <label>Equepment Provided<span class="text-danger">*</span></label>
                                                                                    <textarea type="text" name="equepment_provided" class="form-control" placeholder="Equepment Provided" disabled></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-12 mt-3">
                                                                                <div class="input-block mb-0">
                                                                                    <label>Address Line 1</label>
                                                                                    <input type="text" class="form-control" placeholder="Address Line 1" disabled="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-12 mt-3">
                                                                                <div class="input-block mb-0">
                                                                                    <label>Address Line 2</label>
                                                                                    <input type="text" class="form-control" placeholder="Address Line 2" disabled="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-12 mt-3">
                                                                                <div class="input-block mb-0">
                                                                                    <label>City</label>
                                                                                    <input type="text" class="form-control" placeholder="City" disabled="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-12 mt-3">
                                                                                <div class="input-block mb-0">
                                                                                    <label>Pincode</label>
                                                                                    <input type="text" class="form-control" placeholder="Pincode" disabled="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button  data-bs-dismiss="modal" class="btn btn-primary paid-continue-btn">Close</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
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
    
    <div class="toggle-sidebar">
        <div class="sidebar-layout-filter">
            <div class="sidebar-header">
                <h5>Filter</h5>
                <a href="#" class="sidebar-closes"><i class="fa-regular fa-circle-xmark"></i></a>
            </div>
            <div class="sidebar-body">
                <form action="#" autocomplete="off">
                    <div class="accordion accordion-last" id="accordionMain1">
                        <div class="card-header-new" id="headingOne">
                            <h6 class="filter-title">
                                <a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Nurse
                                <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                </a>
                            </h6>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample1">
                            <div class="card-body-chat">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="checkBoxes1">
                                            <div class="form-custom">
                                                <input type="text" class="form-control" id="member_search1" placeholder="Search Customer Name">
                                                <span><img src="{{ asset('assets/img/icons/search.svg') }}" alt="img"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div id="checkBoxes1">
                                            <div class="form-custom">
                                                <input type="text" class="form-control" id="member_search1" placeholder="Search Phone Number">
                                                <span><img src="{{ asset('assets/img/icons/search.svg') }}" alt="img"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filter-buttons">
                        <button type="submit" class="d-inline-flex align-items-center justify-content-center btn w-100 btn-primary">
                            Apply
                        </button>
                        <button type="submit" class="d-inline-flex align-items-center justify-content-center btn w-100 btn-secondary">
                            Reset
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
    <div class="modal custom-modal fade" id="delete_modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Service</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <button type="reset" data-bs-dismiss="modal" class="w-100 btn btn-primary paid-continue-btn">Delete</button>
                            </div>
                            <div class="col-6">
                                <button type="submit" data-bs-dismiss="modal" class="w-100 btn btn-primary paid-cancel-btn">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection