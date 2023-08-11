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
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <i class="cc BTC text-warning"></i>
                                <div class="ml-2">
                                    <span class="text-dark font-medium">BTC<span
                                            class="font-normal">&nbsp;/&nbsp;</span>Bitcoin</span>
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
                                <h3 class="mb-0">$3,640.65</h3>
                                <div class="ml-auto">
                                    <span class="text-danger"><i class="fas fa-caret-down mr-1"></i>
                                        -0.70%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <i class="cc ETH text-info"></i>
                                <div class="ml-2">
                                    <span class="text-dark font-medium">ETH<span
                                            class="font-normal">&nbsp;/&nbsp;</span>Ethereum</span>
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
                                <h3 class="mb-0">$123.50</h3>
                                <div class="ml-auto">
                                    <span class="text-success"><i class="fas fa-caret-up mr-1"></i> 3.57%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <i class="cc XRP text-purple"></i>
                                <div class="ml-2">
                                    <span class="text-dark font-medium">XRP<span
                                            class="font-normal">&nbsp;/&nbsp;</span>Ripple</span>
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
                                <h3 class="mb-0">$0.303093</h3>
                                <div class="ml-auto">
                                    <span class="text-danger"><i class="fas fa-caret-down mr-1"></i>
                                        -2.33%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
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
                </div>
            </div>

        </div>

        <!-- End Container fluid  -->
    @endsection
