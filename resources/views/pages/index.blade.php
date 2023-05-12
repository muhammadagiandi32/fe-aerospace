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
    <style>
        .ui-autocomplete {
            z-index: 2147483647;
        }

        #data-table tbody tr {
            cursor: pointer;
        }
    </style>
    <style>
        @media only screen and (max-width: 1200px) {

            .jaringan-bawah {

                display: none;

            }

            .garis_bawah {

                display: none;

            }

        }

        .garis {
            width: 2px;
            background: #000;
            height: 30px;
            align-self: center;
        }

        .garis-vertical {
            background: #000;
            height: 2px;
            position: relative;
        }

        @media (max-width: 768px) {
            .nogaris {
                display: none !important;
            }
        }

        @media (max-width: 991px) {
            .nogaris {
                display: none !important;
            }

        }
    </style>
@endsection

@section('content')
    <div class="card mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">Dashboard</span>
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
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-3 text-center">
                    <img src="https://member-dev.aerospace.co.id/assets/img/foto/upline.jpg" style="height: 100px;"
                        class="img-fluid mb-3" alt="User Profile">
                    <div style="font-size:14px; color:#000"><strong>{{ $data[0]['data']['Username'] }}</strong></div>
                    <div style="font-size:14px; color:#172fe1"><strong>Spaceman</strong></div>
                    <div style="padding-bottom:5px" class="my-2">
                        <small class="badge badge-danger"><i class="fa fa-user"></i> 78</small>
                        <small class="badge badge-primary"><i class="fa fa-user"></i> 138</small>
                    </div>
                    <div style="padding-bottom:10px">
                        <small class="badge badge-dark"><i class="fa fa-user"></i> 0</small>
                        <small class="badge badge-dark"><i class="fa fa-user"></i> 92</small>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-success" data-bs-original-title=""
                            title="">{{ $data[0]['data']['Username'] }}</button>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="garis">&nbsp;</div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-6 p-0" style="height: 30px;">
                    <div class="garis" style="position: absolute;right: 5">&nbsp;</div>
                    <div class="garis-vertical"></div>
                    <div class="garis" style="position: absolute;left: 10">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-6 col-sm-6">
                        <div class="text-center">
                            <p>
                                <span class="badge badge-danger">Group Kiri</span>
                            </p>
                            <img src="https://member-dev.aerospace.co.id/assets/img/foto/21.jpg" style="height: 100px;"
                                class="img-fluid mb-3" alt="User Profile">
                            <div style="font-size:14px; color:#000">
                                <strong>{{ $data[0]['children'][0]['data']['Username'] }}</strong>
                            </div>
                            <div style="font-size:14px; color:#172fe1"><strong>Spaceman</strong></div>
                            <div style="padding-bottom:5px" class="my-2">
                                <small class="badge badge-danger"><i class="fa fa-user"></i> 77</small>
                                <small class="badge badge-primary"><i class="fa fa-user"></i> 0</small>
                            </div>
                            <div style="padding-bottom:10px">
                                <small class="badge badge-dark"><i class="fa fa-user"></i> 154</small>
                                <small class="badge badge-dark"><i class="fa fa-user"></i> 0</small>
                            </div>
                            <a style="position:relative; z-index:999" class="btn btn-dark btn-flat margin"
                                href="https://member-dev.aerospace.co.id/user/network_diagram/QVMwMDAwMDI3fHNlanV0YXdlYi5jb20="
                                data-bs-original-title="" title=""><i class="fa fa-user"></i>
                                {{ $data[0]['children'][0]['data']['Username'] }}</a>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="garis">&nbsp;</div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-6 p-0" style="height: 30px;">
                                <div class="garis" style="position: absolute;right: 0">&nbsp;</div>
                                <div class="garis-vertical"></div>
                                <div class="garis" style="position: absolute;left: 0">&nbsp;</div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-6 col-md-6 text-center">
                                <img src="https://member-dev.aerospace.co.id/assets/img/foto/21.jpg"
                                    style="height: 100px;" class="img-fluid mb-3" alt="User Profile">
                                <div style="font-size:14px; color:#000">
                                    <strong>{{ $data[0]['children'][0]['children'][0]['children'][0]['data']['Username'] }}</strong>
                                </div>
                                <div style="font-size:14px; color:#172fe1"><strong>Spaceman</strong></div>
                                <div style="padding-bottom:5px" class="my-2">
                                    <small class="badge badge-danger"><i class="fa fa-user"></i> 19</small>
                                    <small class="badge badge-primary"><i class="fa fa-user"></i> 57</small>
                                </div>
                                <div style="padding-bottom:10px">
                                    <small class="badge badge-dark"><i class="fa fa-user"></i> 0</small>
                                    <small class="badge badge-dark"><i class="fa fa-user"></i> 90</small>
                                </div>
                                <a class="btn btn-dark btn-flat margin"
                                    href="https://member-dev.aerospace.co.id/user/network_diagram/QVMwMDAwMTg3fHNlanV0YXdlYi5jb20="
                                    data-bs-original-title="" title=""><i
                                        class="fa fa-user"></i>{{ $data[0]['children'][0]['children'][0]['children'][0]['data']['Username'] }}</a>
                            </div>
                            <div class="col-6 col-md-6 text-center">
                                <img src="https://member-dev.aerospace.co.id/assets/img/foto/21.jpg"
                                    style="height: 100px;" class="img-fluid mb-3" alt="User Profile">
                                <div style="font-size:14px; color:#000">
                                    <strong>{{ $data[0]['children'][0]['children'][0]['children'][1]['data']['Username'] }}</strong>
                                </div>
                                <div style="font-size:14px; color:#172fe1"><strong>Spaceman</strong></div>
                                <div style="padding-bottom:5px" class="my-2">
                                    <small class="badge badge-danger"><i class="fa fa-user"></i> 19</small>
                                    <small class="badge badge-primary"><i class="fa fa-user"></i> 57</small>
                                </div>
                                <div style="padding-bottom:10px">
                                    <small class="badge badge-dark"><i class="fa fa-user"></i> 0</small>
                                    <small class="badge badge-dark"><i class="fa fa-user"></i> 90</small>
                                </div>
                                <a class="btn btn-dark btn-flat margin"
                                    href="https://member-dev.aerospace.co.id/user/network_diagram/QVMwMDAwMTg3fHNlanV0YXdlYi5jb20="
                                    data-bs-original-title="" title=""><i
                                        class="fa fa-user"></i>{{ $data[0]['children'][0]['children'][0]['children'][1]['data']['Username'] }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-6 col-sm-6">
                        <div class="text-center">
                            <p>
                                <span class="badge badge-danger">Group Kanan</span>
                            </p>
                            <img src="https://member-dev.aerospace.co.id/assets/img/foto/21.jpg" style="height: 100px;"
                                class="img-fluid mb-3" alt="User Profile">
                            <div style="font-size:14px; color:#000">
                                <strong>{{ $data[0]['children'][0]['children'][0]['data']['Username'] }}</strong>
                            </div>
                            <div style="font-size:14px; color:#172fe1"><strong>Spaceman</strong></div>
                            <div style="padding-bottom:5px" class="my-2">
                                <small class="badge badge-danger"><i class="fa fa-user"></i> 0</small>
                                <small class="badge badge-primary"><i class="fa fa-user"></i> 137</small>
                            </div>
                            <div style="padding-bottom:10px">
                                <small class="badge badge-dark"><i class="fa fa-user"></i> 0</small>
                                <small class="badge badge-dark"><i class="fa fa-user"></i> 249</small>
                            </div>
                            <a class="btn btn-dark btn-flat margin"
                                href="https://member-dev.aerospace.co.id/user/network_diagram/QVMwMDAwMDI4fHNlanV0YXdlYi5jb20="
                                data-bs-original-title="" title=""><i
                                    class="fa fa-user"></i>{{ $data[0]['children'][0]['children'][0]['data']['Username'] }}</a>
                            <div class="d-flex justify-content-center">
                                <div class="garis">&nbsp;</div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-6 p-0" style="height: 30px;">
                                    <div class="garis" style="position: absolute;right: 0">&nbsp;</div>
                                    <div class="garis-vertical"></div>
                                    <div class="garis" style="position: absolute;left: 0">&nbsp;</div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-6 col-md-6 text-center">
                                    <img src="https://member-dev.aerospace.co.id/assets/img/foto/kosong.jpg"
                                        style="height: 100px;" class="img-fluid mb-3" alt="User Profile">
                                    <br>
                                    <a class="btn btn-primary my-2"
                                        href="https://member-dev.aerospace.co.id/user/add/QVMwMDAwMDI4fGtpcml8c2VqdXRhd2ViLmNvbQ=="
                                        data-bs-original-title="" title="">Add</a>
                                </div>
                                <div class="col-6 col-md-6 text-center">
                                    <img src="https://member-dev.aerospace.co.id/assets/img/foto/wanita.jpg"
                                        style="height: 100px;" class="img-fluid mb-3" alt="User Profile">
                                    <div style="font-size:14px; color:#000"><strong>alicelee</strong></div>
                                    <div style="font-size:14px; color:#172fe1"><strong>Spaceman</strong></div>
                                    <div style="padding-bottom:5px" class="my-2">
                                        <small class="badge badge-danger"><i class="fa fa-user"></i> 0</small>
                                        <small class="badge badge-primary"><i class="fa fa-user"></i> 0</small>
                                    </div>
                                    <div style="padding-bottom:10px">
                                        <small class="badge badge-dark"><i class="fa fa-user"></i> 0</small>
                                        <small class="badge badge-dark"><i class="fa fa-user"></i> 0</small>
                                    </div>
                                    <a class="btn btn-dark btn-flat margin"
                                        href="https://member-dev.aerospace.co.id/user/network_diagram/QVMwMDAwMDM5fHNlanV0YXdlYi5jb20="
                                        data-bs-original-title="" title=""><i class="fa fa-user"></i> lilis
                                        yuliani...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--begin::Body-->
    </div>
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        <!--begin::Col-->
        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
            <!--begin::Card widget 20-->
            <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10"
                style="background-color: #F1416C;background-image:url('/metronic8/demo1/assets/media/patterns/vector-1.png')">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <div class="card-title d-flex flex-column">
                        <!--begin::Amount-->
                        <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">69</span>
                        <!--end::Amount-->

                        <!--begin::Subtitle-->
                        <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Active Projects</span>
                        <!--end::Subtitle-->
                    </div>
                    <!--end::Title-->
                </div>
                <!--end::Header-->

                <!--begin::Card body-->
                <div class="card-body d-flex align-items-end pt-0">
                    <!--begin::Progress-->
                    <div class="d-flex align-items-center flex-column mt-3 w-100">
                        <div class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                            <span>43 Pending</span>
                            <span>72%</span>
                        </div>

                        <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                            <div class="bg-white rounded h-8px" role="progressbar" style="width: 72%;"
                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <!--end::Progress-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card widget 20-->

            <!--begin::Card widget 7-->
            <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <div class="card-title d-flex flex-column">
                        <!--begin::Amount-->
                        <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">357</span>
                        <!--end::Amount-->

                        <!--begin::Subtitle-->
                        <span class="text-gray-400 pt-1 fw-semibold fs-6">Professionals</span>
                        <!--end::Subtitle-->
                    </div>
                    <!--end::Title-->
                </div>
                <!--end::Header-->

                <!--begin::Card body-->
                <div class="card-body d-flex flex-column justify-content-end pe-0">
                    <!--begin::Title-->
                    <span class="fs-6 fw-bolder text-gray-800 d-block mb-2">Today’s Heroes</span>
                    <!--end::Title-->

                    <!--begin::Users group-->
                    <div class="symbol-group symbol-hover flex-nowrap">
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                            data-bs-original-title="Alan Warden" data-kt-initialized="1">
                            <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                        </div>
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                            aria-label="Michael Eberon" data-bs-original-title="Michael Eberon" data-kt-initialized="1">
                            <img alt="Pic" src="/metronic8/demo1/assets/media/avatars/300-11.jpg">
                        </div>
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                            data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                            <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                        </div>
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy"
                            data-bs-original-title="Melody Macy" data-kt-initialized="1">
                            <img alt="Pic" src="/metronic8/demo1/assets/media/avatars/300-2.jpg">
                        </div>
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                            data-bs-original-title="Perry Matthew" data-kt-initialized="1">
                            <span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                        </div>
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Barry Walter"
                            data-bs-original-title="Barry Walter" data-kt-initialized="1">
                            <img alt="Pic" src="/metronic8/demo1/assets/media/avatars/300-12.jpg">
                        </div>
                        <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_view_users">
                            <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+42</span>
                        </a>
                    </div>
                    <!--end::Users group-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card widget 7-->
        </div>
        <!--end::Col-->

        <!--begin::Col-->
        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">

            <!--begin::Card widget 17-->
            <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <div class="card-title d-flex flex-column">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center">
                            <!--begin::Currency-->
                            <span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">$</span>
                            <!--end::Currency-->

                            <!--begin::Amount-->
                            <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">69,700</span>
                            <!--end::Amount-->

                            <!--begin::Badge-->
                            <span class="badge badge-light-success fs-base">
                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                        class="path1"></span><span class="path2"></span></i>
                                2.2%
                            </span>
                            <!--end::Badge-->
                        </div>
                        <!--end::Info-->

                        <!--begin::Subtitle-->
                        <span class="text-gray-400 pt-1 fw-semibold fs-6">Projects Earnings in April</span>
                        <!--end::Subtitle-->
                    </div>
                    <!--end::Title-->
                </div>
                <!--end::Header-->

                <!--begin::Card body-->
                <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
                    <!--begin::Chart-->
                    <div class="d-flex flex-center me-5 pt-2">
                        <div id="kt_card_widget_17_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70"
                            data-kt-line="11">
                            <span></span><canvas height="70" width="70"></canvas>
                        </div>
                    </div>
                    <!--end::Chart-->

                    <!--begin::Labels-->
                    <div class="d-flex flex-column content-justify-center flex-row-fluid">
                        <!--begin::Label-->
                        <div class="d-flex fw-semibold align-items-center">
                            <!--begin::Bullet-->
                            <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                            <!--end::Bullet-->

                            <!--begin::Label-->
                            <div class="text-gray-500 flex-grow-1 me-4">Leaf CRM</div>
                            <!--end::Label-->

                            <!--begin::Stats-->
                            <div class="fw-bolder text-gray-700 text-xxl-end">$7,660</div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Label-->

                        <!--begin::Label-->
                        <div class="d-flex fw-semibold align-items-center my-3">
                            <!--begin::Bullet-->
                            <div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
                            <!--end::Bullet-->

                            <!--begin::Label-->
                            <div class="text-gray-500 flex-grow-1 me-4">Mivy App</div>
                            <!--end::Label-->

                            <!--begin::Stats-->
                            <div class="fw-bolder text-gray-700 text-xxl-end">$2,820</div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Label-->

                        <!--begin::Label-->
                        <div class="d-flex fw-semibold align-items-center">
                            <!--begin::Bullet-->
                            <div class="bullet w-8px h-3px rounded-2 me-3" style="background-color: #E4E6EF"></div>
                            <!--end::Bullet-->

                            <!--begin::Label-->
                            <div class="text-gray-500 flex-grow-1 me-4">Others</div>
                            <!--end::Label-->

                            <!--begin::Stats-->
                            <div class=" fw-bolder text-gray-700 text-xxl-end">$45,257</div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Label-->
                    </div>
                    <!--end::Labels-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card widget 17-->

            <!--begin::List widget 26-->
            <div class="card card-flush h-lg-50">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <h3 class="card-title text-gray-800 fw-bold">External Links</h3>
                    <!--end::Title-->

                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                            data-kt-menu-overflow="true">
                            <i class="ki-duotone ki-dots-square fs-1 text-gray-300 me-n1"><span
                                    class="path1"></span><span class="path2"></span><span class="path3"></span><span
                                    class="path4"></span></i>
                        </button>


                        <!--begin::Menu 2-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu separator-->
                            <div class="separator mb-3 opacity-75"></div>
                            <!--end::Menu separator-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">
                                    New Ticket
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">
                                    New Customer
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                data-kt-menu-placement="right-start">
                                <!--begin::Menu item-->
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">New Group</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--end::Menu item-->

                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            Admin Group
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            Staff Group
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            Member Group
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">
                                    New Contact
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu separator-->
                            <div class="separator mt-3 opacity-75"></div>
                            <!--end::Menu separator-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content px-3 py-3">
                                    <a class="btn btn-primary  btn-sm px-4" href="#">
                                        Generate Reports
                                    </a>
                                </div>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 2-->

                        <!--end::Menu-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div class="card-body pt-5">
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Section-->
                        <a href="#" class="text-primary fw-semibold fs-6 me-2">Avg. Client Rating</a>
                        <!--end::Section-->

                        <!--begin::Action-->
                        <button type="button"
                            class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
                            <i class="ki-duotone ki-exit-right-corner fs-2"><span class="path1"></span><span
                                    class="path2"></span></i> </button>
                        <!--end::Action-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-3"></div>
                    <!--end::Separator-->

                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Section-->
                        <a href="#" class="text-primary fw-semibold fs-6 me-2">Instagram Followers</a>
                        <!--end::Section-->

                        <!--begin::Action-->
                        <button type="button"
                            class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
                            <i class="ki-duotone ki-exit-right-corner fs-2"><span class="path1"></span><span
                                    class="path2"></span></i> </button>
                        <!--end::Action-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-3"></div>
                    <!--end::Separator-->

                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Section-->
                        <a href="#" class="text-primary fw-semibold fs-6 me-2">Google Ads CPC</a>
                        <!--end::Section-->

                        <!--begin::Action-->
                        <button type="button"
                            class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
                            <i class="ki-duotone ki-exit-right-corner fs-2"><span class="path1"></span><span
                                    class="path2"></span></i> </button>
                        <!--end::Action-->
                    </div>
                    <!--end::Item-->



                </div>
                <!--end::Body-->
            </div>
            <!--end::LIst widget 26-->



        </div>
        <!--end::Col-->


        <!--begin::Col-->
        <div class="col-xxl-6">

            <!--begin::Engage widget 10-->
            <div class="card card-flush h-md-100">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column justify-content-between mt-9 bgi-no-repeat bgi-size-cover bgi-position-x-center pb-0"
                    style="background-position: 100% 50%; background-image:url('/metronic8/demo1/assets/media/stock/900x600/42.png')">
                    <!--begin::Wrapper-->
                    <div class="mb-10">
                        <!--begin::Title-->
                        <div class="fs-2hx fw-bold text-gray-800 text-center mb-13">
                            <span class="me-2">
                                Try our all new Enviroment with
                                <br>
                                <span class="position-relative d-inline-block text-danger">
                                    <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html"
                                        class="text-danger opacity-75-hover">Pro Plan</a>

                                    <!--begin::Separator-->
                                    <span
                                        class="position-absolute opacity-15 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                                    <!--end::Separator-->
                                </span>
                            </span>
                            for Free
                        </div>
                        <!--end::Title-->

                        <!--begin::Action-->
                        <div class="text-center">
                            <a href="#" class="btn btn-sm btn-dark fw-bold" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_upgrade_plan">
                                Upgrade Now
                            </a>
                        </div>
                        <!--begin::Action-->
                    </div>
                    <!--begin::Wrapper-->

                    <!--begin::Illustration-->
                    <img class="mx-auto h-150px h-lg-200px  theme-light-show"
                        src="/metronic8/demo1/assets/media/illustrations/misc/upgrade.svg" alt="">
                    <img class="mx-auto h-150px h-lg-200px  theme-dark-show"
                        src="/metronic8/demo1/assets/media/illustrations/misc/upgrade-dark.svg" alt="">
                    <!--end::Illustration-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Engage widget 10-->

        </div>
        <!--end::Col-->
    </div>


    <div class="modal fade" id="ajaxModel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modelHeading"></h4>
                </div>
                <div class="modal-body">
                    <form id="dataForm" name="dataForm" class="form-horizontal">
                        <div class="input-group mb-3">
                            <input type="text" id="customer_search" class="form-control"
                                placeholder="Search Customer" aria-label="Search Customer"
                                aria-describedby="basic-addon2" autofocus>
                            <input type="hidden" id="customerId" readonly>
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">Search</span>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="row">
                            <table>
                                <td> <input class="form-control" id="item_search" type="text"
                                        placeholder="Item Name">
                                </td>
                                <td> <input class="form-control" type="hidden" id="itemId"> </td>
                                <td> <input class="form-control" type="text" id="uomName" placeholder="Uom">
                                    {{-- <input type="text" id="UomId"> --}}
                                    <input hidden class="form-control" type="text" id="UomId" placeholder="Uom">
                                </td>
                                <td> <input class="form-control" type="number" id="qty" placeholder="qty"> </td>
                                <td> <input class="form-control" type="number" id="price" placeholder="price">
                                </td>
                                <td>
                                    <select name="tax" id="tax" data-id="TAX" class="form-control">
                                        <option>--Option--</option>
                                    </select>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" id="addDetail" onclick="addDetail()"
                                        class="btn btn-success addMore"><i class="fas fa-plus"></i></a>
                                </td>
                    </form>
                    </table>
                </div>
                <br>
                <br>
                <br>
                <h3> Detail SO</h3>
                <form id="detail-po">
                    <div class="table-responsive">
                        <div class="form-group row">
                            <div class="col-12">
                                <table class="table table-separate" id="table-so">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name Item</th>
                                            <th scope="col">Uom</th>
                                            <th scope="col">Qty</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody id="body-so">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-6 button-group">
                                <button type="submit" hidden="true" id="saveBtn"
                                    class="btn btn-primary mr-2">Save</button>
                                <button type="submit" hidden="true" id="updateBtn"
                                    class="btn btn-primary mr-2">Update</button>
                            </div>
                            <div class="col-lg-6 text-end">
                                <button type="reset" class="btn btn-danger" onclick="cancel()">Cancel</button>
                            </div>
                        </div>
                        <!-- <button class="btn btn-primary" type="submit" id="submit-so">Submit SO</button> -->
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>

    <div class="modal fade" id="modalDetails" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="headingDetails"></h4>
                </div>
                <div class="modal-body">
                    <table class="table align-middle gs-0 gy-4 data-uom" id="DetailsTable">
                        <!--begin::Table head-->
                        <thead>

                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>

                        </tbody>
                        <!--end::Table body-->
                    </table>
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
