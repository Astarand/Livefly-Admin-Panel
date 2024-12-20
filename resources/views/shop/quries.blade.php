@extends('includes.layout')

@section('main')

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            @if(session('success'))
    <div class="alert alert-success" id="success-message">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger" id="error-message">
        {{ session('error') }}
    </div>
@endif
            <div class="content-page-header ">
                <h5>Shop Quries</h5>
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
                                        <th>Quries On</th>
                                        <th>Products</th>
                                        <th>Status</th>
                                        <th class="no-sort">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($shop_queries as $query)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="#">{{ $query->name }}
                                                        <span><span>{{ $query->email }}</span></span>
                                                    </a>
                                                </h2>
                                            </td>
                                            <td>{{ $query->phone }}</td>
                                            <td>{{ \Carbon\Carbon::parse($query->created_at)->format('d M Y') }}</td>
                                            <td>{{ $query->product_name }}</td>
                                            <td>
                                                @if($query->status == 1)
                                                    <span class="badge bg-danger">Rejected</span>
                                                @elseif($query->status == 2)
                                                    <span class="badge bg-success">Confirmed</span>
                                                @else
                                                    <span class="badge bg-warning">New</span>
                                                @endif
                                            </td>
                                            <td class="d-flex align-items-center">
                                                <a href="{{ route('view-shop-quries-details', $query->id) }}" class="btn btn-greys me-2">
                                                    <i class="fa-regular fa-eye me-1"></i> View Details
                                                </a>
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="btn-action-icon" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul>
                                                            {{-- <li>
                                                                <a href="{{ route('view-shop-quries', $query->id) }}" class="dropdown-item">
                                                                    <i class="fa-regular fa-eye me-2"></i>View
                                                                </a>
                                                            </li> --}}
                                                            {{-- <li>
                                                                <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete_modal" data-id="{{ $query->id }}">
                                                                    <i class="far fa-trash-alt me-2"></i>Delete
                                                                </a>
                                                            </li> --}}

                                                            @if($query->status == 0)
                    <li>
                        <a href="{{ route('product.reject', $query->id) }}" onclick="return confirm('Are You Sure?')" class="dropdown-item">
                            <i class="far fa-bell-slash me-2"></i>Reject
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('product.confirm', $query->id) }}" onclick="return confirm('Are You Sure?')" class="dropdown-item">
                            <i class="far fa-bell-slash me-2"></i>Confirm
                        </a>
                    </li>
                @elseif($query->status == 1)
                    <li>
                        <a href="{{ route('product.confirm', $query->id) }}" onclick="return confirm('Are You Sure?')" class="dropdown-item">
                            <i class="far fa-check-circle me-2"></i>Confirm
                        </a>
                    </li>
                @elseif($query->status == 2)
                    <li>
                        <a href="{{ route('product.reject', $query->id) }}" onclick="return confirm('Are You Sure?')" class="dropdown-item">
                            <i class="far fa-times-circle me-2"></i>Reject
                        </a>
                    </li>
                @endif
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                
                                {{-- <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="#">John Smith <span><span>Email Addres Goes Here</span></span></a>
                                            </h2>
                                        </td>
                                        <td>9609412418</td>
                                        <td>19 Dec 2023</td>
                                        <td>Oxygen Cylender</td>
                                        <td class="d-flex align-items-center">
                                            <a href="{{ route('view-shop-quries') }}" class="btn btn-greys me-2"><i class="fa-regular fa-eye me-1"></i> View Details</a>
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class=" btn-action-icon " data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ route('view-shop-quries') }}" class="dropdown-item" href="javascript:void(0);"><i class="fa-regular fa-eye me-2"></i>View</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#"><i class="far fa-bell-slash me-2"></i>Reject</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody> --}}
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
                    <h3>Delete Quries</h3>
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
    // Hide success message after 5 seconds
    setTimeout(() => {
        const successMessage = document.getElementById('success-message');
        if (successMessage) {
            successMessage.style.display = 'none';
        }

        const errorMessage = document.getElementById('error-message');
        if (errorMessage) {
            errorMessage.style.display = 'none';
        }
    }, 5000); // 5000ms = 5 seconds
</script>
@endsection