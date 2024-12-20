@extends('includes.layout')

@section('main')

    <div class="page-wrapper">
        <div class="content container-fluid">
            @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
            <div class="page-header">
                <div class="content-page-header ">
                    
                    <h5>New Nurse Quries</h5>
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
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Quires On</th>
                                            <th>Experience Certificate</th>
                                            <th>Status</th>
                                            <th class="no-sort">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($nurses as $nurse)

                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="#">{{ $nurse->f_name }} {{ $nurse->l_name }} <span><span>{{ $nurse->email }}</span></span></a>
                                                </h2>
                                            </td>
                                            <td>{{ $nurse->phone_number }}</td>

                                            <td>{{ \Carbon\Carbon::parse($nurse->created_at)->format('d M Y, h:i A') }}</td>
                                            <td class="d-flex align-items-center">
                                                <a href="{{ asset('/storage/'. $nurse->exp_certificate) }}" 
                                                   target="_blank" 
                                                   class="btn btn-greys me-2">
                                                    <i class="fa-regular fa-eye me-1"></i> View Experience Certificate
                                                </a>
                                            </td>
                                                
                                            
                                            <td>
                                                @if($nurse->nurse_status == '1')
                                                    <span class="badge bg-success-light">Active</span>
                                                @else
                                                    <span class="badge bg-danger-light">Inactive</span>
                                                @endif
                                            </td>
                                            <td class="d-flex align-items-center">
                                                <a href="#" class="btn btn-greys me-2" data-bs-toggle="modal" data-bs-target="#view_vendor{{ $loop->iteration }}"><i class="fa-regular fa-eye me-1"></i> View Details</a>

                                                {{-- <a href="{{ route('nurse.view', $nurse->id) }}" class="btn btn-greys me-2" data-bs-toggle="modal" data-bs-target="#view_nurse">
                                                    <i class="fa-regular fa-eye me-1"></i> View Details
                                                </a> --}}
                                                <a href="{{ route('nurse.move', $nurse->id) }}"  class="btn btn-greys me-2">
                                                    <i class="fa fa-plus-circle me-1"></i> Move to Nurse
                                                </a>
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="btn-action-icon" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item" href="{{ route('nurse.delete', $nurse->id) }}">
                                                                    <i class="far fa-trash-alt me-2"></i>Delete
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="{{ route('nurse.reject', $nurse->id) }}" onclick="return confirm('Are you sure you want to reject this nurse?');">
                                                                    <i class="far fa-bell-slash me-2"></i>Reject
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>

                                            <div class="modal custom-modal fade" id="view_vendor{{ $loop->iteration }}" role="dialog">
                                                <div class="modal-dialog modal-dialog-centered modal-md">
                                                    <div class="modal-content">
                                                        <div class="modal-header border-0 pb-0">
                                                            <div class="form-header modal-header-title text-start mb-0">
                                                                <h4 class="mb-0">View Nurse Details</h4>
                                                            </div>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                            </button>
                                                        </div>
                                                        <form action="#">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-12">
                                                                        <div class="input-block mb-3">
                                                                            <label>Name</label>
                                                                            <input type="text" class="form-control" value="{{ $nurse->f_name }} {{ $nurse->l_name }}" placeholder="Enter Name" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-12">
                                                                        <div class="input-block mb-3">
                                                                            <label>Email</label>
                                                                            <input type="text" class="form-control" value="{{ $nurse->email }}" placeholder="Select Date" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-12">
                                                                        <div class="input-block mb-3">
                                                                            <label>Phone Number</label>
                                                                            <input type="text" class="form-control" value="{{ $nurse->phone_number }}" placeholder="Enter Reference Number" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-12">
                                                                        <div class="input-block mb-0">
                                                                            <label>Experience Year</label>
                                                                            <input type="text" class="form-control" value="{{ $nurse->exp_year }}" placeholder="Experience Year" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12">
                                                                        <div class="input-block mb-0">
                                                                            <a href="{{ asset('/storage/'. $nurse->exp_certificate) }}" 
                                                                                target="_blank" 
                                                                                class="btn btn-greys text-center">
                                                                                 <i class="fa-regular fa-eye"></i> View Experience Certificate
                                                                             </a>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" data-bs-dismiss="modal" class="btn btn-primary paid-cancel-btn me-2">Cancel</button>
                                                                <button type="submit" data-bs-dismiss="modal" class="btn btn-primary paid-continue-btn">Move to Nurse List</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </tr>

                                        @endforeach

                                        {{-- <tr>
                                            <td>1</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="#">John Smith <span><span>Email Addres Goes Here</span></span></a>
                                                </h2>
                                            </td>
                                            <td>9609412418</td>
                                            <td>19 Dec 2023, 06:12 PM</td>
                                            <td d-flex align-item-center>
                                                <a href="customers-ledger.html" class="btn btn-greys me-2"><i class="fa-regular fa-eye me-1"></i> View CV</a>
                                            </td>
                                            <td><span class="badge bg-success-light">New Quries</span></td>
                                            <td class="d-flex align-items-center">
                                                <a href="add-invoice.html" class="btn btn-greys me-2"><i class="fa fa-plus-circle me-1"></i>Move to Nurse</a>
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class=" btn-action-icon " data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="deactive-customers.html"><i class="far fa-bell-slash me-2"></i>Reject</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr> --}}
                                        
                                        {{-- <tr>
                                            <td>2</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="#">John Smith <span><span>Email Addres Goes Here</span></span></a>
                                                </h2>
                                            </td>
                                            <td>9609412418</td>
                                            <td>19 Dec 2023, 06:12 PM</td>
                                            <td d-flex align-item-center>
                                                <a href="customers-ledger.html" class="btn btn-greys me-2"><i class="fa-regular fa-eye me-1"></i> View CV</a>
                                            </td>
                                            <td><span class="badge bg-danger-light">Rejected</span></td>
                                            <td class="d-flex align-items-center">
                                                <a href="customers-ledger.html" class="btn btn-greys me-2" data-bs-toggle="modal" data-bs-target="#edit_vendor"><i class="fa-regular fa-eye me-1"></i> View Details</a>
                                                <a href="add-invoice.html" class="btn btn-greys me-2"><i class="fa fa-plus-circle me-1"></i>Move to Nurse</a>
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class=" btn-action-icon " data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="deactive-customers.html"><i class="far fa-bell-slash me-2"></i>Reject</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr> --}}
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

    <div class="modal custom-modal fade" id="view_vendor" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header border-0 pb-0">
                    <div class="form-header modal-header-title text-start mb-0">
                        <h4 class="mb-0">View Nurse Details</h4>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <form action="#">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="input-block mb-3">
                                    <label>Name</label>
                                    <input type="text" class="form-control" value="John Smith" placeholder="Enter Name" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="input-block mb-3">
                                    <label>Email</label>
                                    <input type="text" class="form-control" value="john@example.com" placeholder="Select Date" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="input-block mb-3">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" value="+1 989-438-3131" placeholder="Enter Reference Number" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="input-block mb-0">
                                    <label>Subject</label>
                                    <input type="text" class="form-control" value="$4200" placeholder="Enter Reference Number" disabled>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="input-block mb-0">
                                    <label>CV</label>
                                    <input class="form-control" type="file" id="formFileDisabled" disabled>
                                </div>
                            </div>
                            
                            <div class="col-lg-12 col-md-12">
                                <div class="input-block mb-0">
                                    <label>Message</label>
                                    <textarea type="text" class="form-control" value="$4200" placeholder="Enter Reference Number" disabled></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-primary paid-cancel-btn me-2">Cancel</button>
                        <button type="submit" data-bs-dismiss="modal" class="btn btn-primary paid-continue-btn">Move to Nurse List</button>
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
                        <h3>Delete Nurse</h3>
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

    <script>
        setTimeout(() => {
            const alert = document.querySelector('.alert-success');
            if (alert) {
                alert.remove();
            }
        }, 5000); // 5 seconds
    </script>
    
    
    
@endsection