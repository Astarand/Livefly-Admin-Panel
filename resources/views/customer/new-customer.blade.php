@extends('includes.layout')

@section('main')

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="content-page-header ">
                <h5>New Customer Quries</h5>
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
                                        <th>QuiresOn</th>
                                        <th>QuiresAbout</th>
                                        <th>Service Type</th>
                                        <th>Status</th>
                                        <th class="no-sort">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $count = 1; ?>;
                                    @foreach ($customers as $customer)
                                        <tr>
                                            <td>{{ $count++ }}</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="#">{{ $customer->fname }} {{ $customer->lname }} 
                                                        <span><span>{{ $customer->email }}</span></span>
                                                    </a>
                                                </h2>
                                            </td>
                                            <td>{{ $customer->phone_no }}</td>
                                            <td>{{ \Carbon\Carbon::parse($customer->created_at)->format('d M Y') }}</td>
                                            <td>{{ $customer->service }}</td>
                                            <td>{{ $customer->service_request_for ?? 'N/A' }}</td>
                                            <td>
                                                <span class="badge 
                                                    {{ $customer->verified_status == 0 ? 'bg-success-light' : 'bg-danger-light' }}">
                                                    {{ $customer->verified_status == 0 ? 'New Quries' : 'Reject' }}
                                                </span>
                                            </td>
                                            <td class="d-flex align-items-center">
                                                <a href="customers-ledger.html" class="btn btn-greys me-2" data-bs-toggle="modal" data-bs-target="#view_vendor{{ $customer->id }}">
                                                    <i class="fa-regular fa-eye me-1"></i> View Details
                                                </a>
                                                {{-- <a href="#" onclick="return confirm('Are you sure you want to Move this customer?');" class="btn btn-greys me-2"> --}}
                                                    <a href="{{ route('customer.move', $customer->id) }}" onclick="return confirm('Are you sure you want to Move this customer?');" class="btn btn-greys me-2">
                                                        <i class="fa fa-plus-circle me-1"></i>Move to Customer
                                                    </a>
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class=" btn-action-icon " data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_modal" onclick="setDeleteUrl('{{ route('customer.delete', $customer->id) }}')">
                                                                    <i class="far fa-trash-alt me-2"></i>Delete
                                                                </a>
                                                            </li>
                                                            {{-- <li>
                                                                <a class="dropdown-item" href="{{ route('customer.delete', $customer->id) }}" onclick="return confirm('Are you sure you want to delete this customer?');">
                                                                    <i class="far fa-trash-alt me-2"></i>Delete
                                                                </a>
                                                            </li> --}}
                                                            {{-- <li>
                                                                <a class="dropdown-item" href="{{ route('customer.reject', $customer->id) }}" onclick="return confirm('Are you sure you want to reject this customer?');">
                                                                    <i class="far fa-bell-slash me-2"></i>Reject
                                                                </a>
                                                            </li> --}}
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>

                                            <div class="modal custom-modal fade" id="view_vendor{{ $customer->id }}" role="dialog">
                                                <div class="modal-dialog modal-dialog-centered modal-md">
                                                    <div class="modal-content">
                                                        <div class="modal-header border-0 pb-0">
                                                            <div class="form-header modal-header-title text-start mb-0">
                                                                <h4 class="mb-0">View Customer QuiresDetails</h4>
                                                            </div>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                            </button>
                                                        </div>
                                                        <form action="#">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <h6 class="mb-3">Patients Details</h6>
                                                                    <div class="col-lg-6 col-md-12">
                                                                        <div class="input-block mb-3">
                                                                            <label>Name</label>
                                                                            <input type="text" class="form-control" value="{{ $customer->fname }} {{ $customer->lname }} " placeholder="Enter Name" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-12">
                                                                        <div class="input-block mb-3">
                                                                            <label>Email</label>
                                                                            <input type="text" class="form-control" value="{{ $customer->email }}" placeholder="Select Date" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-12">
                                                                        <div class="input-block mb-3">
                                                                            <label>Phone Number</label>
                                                                            <input type="text" class="form-control" value="{{ $customer->phone_no }}" placeholder="Enter Reference Number" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-12">
                                                                        <div class="input-block mb-0">
                                                                            <label>Equipment Required</label>
                                                                            <input type="text" class="form-control" value="{{ $customer->equipmentString }}" placeholder="ICU Nursing Care" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-12">
                                                                        <div class="input-block mb-0">
                                                                            <label>Service Required</label>
                                                                            <input type="text" class="form-control" value="{{ $customer->service_request_for }}" placeholder="ICU Nursing Care" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-12">
                                                                        <div class="input-block mb-0">
                                                                            <label>Service</label>
                                                                            <input type="text" class="form-control" value="{{ $customer->service }}" placeholder="ICU Nursing Care" disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                 <div class="row">
                                                                    <h6 class="my-3">Contact Person Details</h6>
                                                                    <div class="col-lg-12 col-md-12">
                                                                        <div class="input-block mb-3">
                                                                            <label>Name</label>
                                                                            <input type="text" class="form-control" value="{{ $customer->fname }} {{ $customer->lname }} " placeholder="Enter Name" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-12">
                                                                        <div class="input-block mb-3">
                                                                            <label>Email</label>
                                                                            <input type="text" class="form-control" value="{{ $customer->email }}" placeholder="Select Date" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-12">
                                                                        <div class="input-block mb-3">
                                                                            <label>Phone Number</label>
                                                                            <input type="text" class="form-control" value="{{ $customer->phone_no }}" placeholder="Enter Reference Number" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12">
                                                                        <div class="input-block mb-0">
                                                                            <label>Message</label>
                                                                            <textarea type="text" class="form-control" placeholder="Enter Message" disabled>{{ $customer->apt_message }}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" data-bs-dismiss="modal" class="btn btn-primary paid-cancel-btn me-2">Cancel</button>
                                                                <a href="{{ route('customer.move', $customer->id) }}" onclick="return confirm('Are you sure you want to Move this customer?');" class="btn paid-continue-btn me-2">
                                                                    <i class="fa fa-plus-circle me-1"></i> Move to Customer
                                                                </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
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
                                Customer
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
                    <h3>Delete Customer</h3>
                    <p>Are you sure you want to delete?</p>
                </div>
                <div class="modal-btn delete-action">
                    <div class="row">
                        <div class="col-6">
                            <a href="#" id="confirm-delete" class="w-100 btn btn-primary paid-continue-btn">Delete</a>
                        </div>
                        <div class="col-6">
                            <button type="button" data-bs-dismiss="modal" class="w-100 btn btn-primary paid-cancel-btn">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function setDeleteUrl(url) {
        document.getElementById('confirm-delete').setAttribute('href', url);
    }
</script>
@endsection