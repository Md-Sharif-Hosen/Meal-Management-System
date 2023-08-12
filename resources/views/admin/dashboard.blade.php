@extends('admin.layouts.index')

@section('content')
    <!-- Page wrapper  -->
    <div class="page-wrapper">

        <!-- Bread crumb and right sidebar toggle -->

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <div class="d-flex align-items-center">
                    </div>
                    <h4 class="page-title">Dashboard</h4>
                </div>

            </div>
        </div>

        <!-- End Bread crumb and right sidebar toggle -->


        <!-- Container fluid  -->

        <div class="container-fluid">

            <!-- Sales -->

            <div class="row crypto-sales">
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body" style="background-color: #b19d9d; border-radius: 43px;">
                            <div class="d-flex align-items-center">
                                <i class="cc BTC text-warning"></i>
                                <div class="ml-2">
                                    <span class="text-dark font-medium">Total Cash</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <h3 class="mb-0">&#2547; 5000 taka</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body" style="background-color: #f46666; border-radius: 43px;">
                            <div class="d-flex align-items-center">
                                <i class="cc ETH text-info"></i>
                                <div class="ml-2">
                                    <span class="text-dark font-medium">Due Cash</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <h3 class="mb-0">&#2547; 3000 taka</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body" style="background-color: #9ed1a7; border-radius: 43px;">
                            <div class="d-flex align-items-center">
                                <i class="cc ETH text-info"></i>
                                <div class="ml-2">
                                    <span class="text-dark font-medium">Extra Cash</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <h3 class="mb-0">&#2547; 2000 taka</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body" style="background-color: #e6f276; border-radius: 43px;">
                            <div class="d-flex align-items-center">
                                <i class="cc XRP text-purple"></i>
                                <div class="ml-2">
                                    <span class="text-dark font-medium">This month total expense</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <h3 class="mb-0">&#2547; 7000 taka</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body" style="background-color: #7cd0da; border-radius: 43px;">
                            <div class="d-flex align-items-center">
                                <i class="cc XRP text-purple"></i>
                                <div class="ml-2">
                                    <span class="text-dark font-medium">Total Users</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center text-center">
                                <h3 class="mb-0 text-center">50 person</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body" style="background-color:#a792dc; border-radius: 43px;">
                            <div class="d-flex align-items-center">
                                <i class="cc BTC text-warning"></i>
                                <div class="ml-2">
                                    <span class="text-dark font-medium">This month current meal rate</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center text-center">
                                <h3 class="mb-0 text-center">&#2547; 55 Taka</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body" style="background-color: #cc83c1; border-radius: 43px;">
                            <div class="d-flex align-items-center">
                                <i class="cc BTC text-warning"></i>
                                <div class="ml-2">
                                    <span class="text-dark font-medium">This year average meal rate</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center text-center">
                                <h3 class="mb-0 text-center">&#2547; 52 Taka</h3>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <i class="cc LTC text-danger"></i>
                                <div class="ml-2">
                                    <span class="text-dark font-medium">LTC<span
                                            class="font-normal">&nbsp;/&nbsp;</span>Litecoin</span>
                                </div>
                            </div>
                            <div class="custom-input mt-2 mb-3">
                                <select class="custom-select form-control">
                                    <option>Select One</option>
                                    <option value="1" selected>7 Days</option>
                                    <option value="2">15 Days</option>
                                    <option value="3">30 Days</option>
                                </select>
                            </div>
                            <div class="d-flex align-items-center">
                                <h3 class="mb-0">$43.90</h3>
                                <div class="ml-auto">
                                    <span class="text-danger"><i class="fas fa-caret-down mr-1"></i>
                                        -0.86%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>

        </div>

        <!-- End Container fluid  -->
    @endsection
