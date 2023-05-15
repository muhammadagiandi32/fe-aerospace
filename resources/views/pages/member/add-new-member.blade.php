@extends('layouts.admin')
@section('header', 'Dashboard')


@section('css')
    <!-- dataTables -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" /> -->
    <!-- <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet"> -->
    <!-- <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css"
                                                                                                                                                                                                                                                                integrity="sha512-ELV+xyi8IhEApPS/pSj66+Jiw+sOT1Mqkzlh8ExXihe4zfqbWkxPRi8wptXIO9g73FSlhmquFlUOuMSoXz5IRw=="
                                                                                                                                                                                                                                                                crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
@endsection

@section('content')
    <div class="card mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">Add New Member</span>
            </h3>
            <div class="card-toolbar">
                <a href="javascript:void(0)" id="createNew" class="btn btn-sm btn-light-primary">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                    <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                transform="rotate(-90 11.364 20.364)" fill="black"></rect>
                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black">
                            </rect>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->Create
                </a>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-3">
            <!--begin::Table container-->
            <form class="form">
                <div class="card-body">
                    <div class="form-group">
                        <label>Usename:</label>
                        <input type="email" class="form-control" placeholder="Enter full name" />
                        <span class="form-text text-muted">Please enter your full name</span>
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="email" class="form-control" placeholder="Enter full name" />
                        <span class="form-text text-muted">Please enter your full name</span>
                    </div>
                    <div class="form-group">
                        <label>Full Name:</label>
                        <input type="email" class="form-control" placeholder="Enter full name" />
                        <span class="form-text text-muted">Please enter your full name</span>
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" class="form-control" placeholder="Enter full name" />
                        <span class="form-text text-muted">Please enter your full name</span>
                    </div>
                    <div class="form-group">
                        <label>No. KTP:</label>
                        <input type="email" class="form-control" placeholder="Enter full name" />
                        <span class="form-text text-muted">Please enter your full name</span>
                    </div>
                    <div class="form-group">
                        <label>No. NPWP:</label>
                        <input type="email" class="form-control" placeholder="Enter full name" />
                        <span class="form-text text-muted">Please enter your full name</span>
                    </div>
                    <div class="form-group">
                        <label>DOB:</label>
                        <input type="email" class="form-control" placeholder="Enter email" />
                        <span class="form-text text-muted">We'll never share your email with anyone else</span>
                    </div>
                    <div class="form-group">
                        <label>Gender:</label>
                        <input type="email" class="form-control" placeholder="Enter full name" />
                        <span class="form-text text-muted">Please enter your full name</span>
                    </div>
                    <div class="form-group">
                        <label>No. Phone:</label>
                        <input type="email" class="form-control" placeholder="Enter full name" />
                        <span class="form-text text-muted">Please enter your full name</span>
                    </div>
                    <div class="form-group">
                        <label>Provinsi:</label>
                        <input type="email" class="form-control" placeholder="Enter full name" />
                        <span class="form-text text-muted">Please enter your full name</span>
                    </div>
                    <div class="form-group">
                        <label>City:</label>
                        <input type="email" class="form-control" placeholder="Enter full name" />
                        <span class="form-text text-muted">Please enter your full name</span>
                    </div>
                    <div class="form-group">
                        <label>Kecamatan:</label>
                        <input type="email" class="form-control" placeholder="Enter full name" />
                        <span class="form-text text-muted">Please enter your full name</span>
                    </div>
                    <div class="form-group">
                        <label>Kelurahan:</label>
                        <input type="email" class="form-control" placeholder="Enter full name" />
                        <span class="form-text text-muted">Please enter your full name</span>
                    </div>
                    <div class="form-group">
                        <label>Address:</label>
                        <input type="email" class="form-control" placeholder="Enter full name" />
                        <span class="form-text text-muted">Please enter your full name</span>
                    </div>
                    <div class="form-group mb-0">
                        <label>Communication:</label>
                        <div class="checkbox-list">
                            <label class="checkbox checkbox-outline">
                                <input type="checkbox" />
                                <span></span>
                                Email
                            </label>
                            <label class="checkbox checkbox-outline">
                                <input type="checkbox" />
                                <span></span>
                                SMS
                            </label>
                            <label class="checkbox checkbox-outline">
                                <input type="checkbox" />
                                <span></span>
                                Phone
                            </label>
                        </div>
                    </div>
                </div>
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Add New Member</span>
                </h3>
                <div class="card-body">
                    <div class="form-group">
                        <label>Full Name:</label>
                        <input type="email" class="form-control" placeholder="Enter full name" />
                        <span class="form-text text-muted">Please enter your full name</span>
                    </div>
                    <div class="form-group">
                        <label>Email address:</label>
                        <input type="email" class="form-control" placeholder="Enter email" />
                        <span class="form-text text-muted">We'll never share your email with anyone else</span>
                    </div>
                    <div class="form-group mb-0">
                        <label>Communication:</label>
                        <div class="checkbox-list">
                            <label class="checkbox checkbox-outline">
                                <input type="checkbox" />
                                <span></span>
                                Email
                            </label>
                            <label class="checkbox checkbox-outline">
                                <input type="checkbox" />
                                <span></span>
                                SMS
                            </label>
                            <label class="checkbox checkbox-outline">
                                <input type="checkbox" />
                                <span></span>
                                Phone
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="reset" class="btn btn-primary mr-2">Submit</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
            </form>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>

    <div class="modal fade" id="ajaxModel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modelHeading"></h4>
                </div>
                <div class="modal-body">
                    <form id="dataForm" name="dataForm" class="form-horizontal">
                        <input type="hidden" name="IdSupplier" id="IdSupplier">
                        <div class="form-group">
                            <label class="col-sm-4 control-label">SupplierPt</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="SupplierPt" name="SupplierPt"
                                    placeholder="Enter SupplierPt" value="" maxlength="50" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">SupplierName</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="SupplierName" name="SupplierName"
                                    placeholder="Enter SupplierName" value="" maxlength="50" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Address</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="Address" name="Address"
                                    placeholder="Enter Address" value="" maxlength="50" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">City</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="City" name="City"
                                    placeholder="Enter City" value="" maxlength="50" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">PostCode</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="PostCode" name="PostCode"
                                    placeholder="Enter PostCode" value="" maxlength="50" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Phone</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="Phone" name="Phone"
                                    placeholder="Enter Phone" value="" maxlength="50" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Fax</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="Fax" name="Fax"
                                    placeholder="Enter Fax" value="" maxlength="50" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Email</label>
                            <div class="col-sm-12">
                                <input type="email" class="form-control" id="Email" name="Email"
                                    placeholder="Enter Email" value="" maxlength="50" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">CompanyId</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="CompanyId" name="CompanyId"
                                    placeholder="Enter CompanyId" value="" maxlength="50" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">TaxGroupId</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="TaxGroupId" name="TaxGroupId"
                                    placeholder="Enter TaxGroupId" value="" maxlength="50" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">TermsPaymentId</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="TermsPaymentId" name="TermsPaymentId"
                                    placeholder="Enter TermsPaymentId" value="" maxlength="50" required="">
                            </div>
                        </div>
                        <div class="col-sm-offset-2 col-sm-10 mt-3">
                            <button type="submit" class="btn btn-primary" id="saveBtn" value="create">
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"
        integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script> -->
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>


    <script type="text/javascript"></script>
@endsection
