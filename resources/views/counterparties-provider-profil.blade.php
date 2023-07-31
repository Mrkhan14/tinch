@extends('layouts.master')
@section('title') @lang('translation.datatables') @endsection
@section('css')
<!--datatable css-->
<link href="{{ URL::asset('build/css/dataTables.bootstrap5.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
<!--datatable responsive css-->
<link href="{{ URL::asset('build/css/responsive.bootstrap.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('build/css/buttons.dataTables.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Tables @endslot
@slot('title')Datatables @endslot
@endcomponent

    <div class="row d-flex justify-content-center">
        <div class="col-lg-3 col-sm-12">
            <div class="card">
                <a class="card-body bg-soft-info" >
                    <h5 class="card-title text-uppercase fw-semibold mb-1 fs-15">
                        126 000 - 120 000
                    </h5>
                    <p class="text-muted mb-0">
                        <b data-key="t-rest">Остальные</b>
                        <span class="fw-medium">6 000 UZB</span>
                    </p>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-12">
            <div class="card">
                <a class="card-body bg-soft-success" >
                    <h5 class="card-title text-uppercase fw-semibold mb-1 fs-15">
                        171 - 151
                    </h5>
                    <p class="text-muted mb-0">
                        <b data-key="t-rest">Остальные</b>
                        <span class="fw-medium">20  USD</span>
                    </p>
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-start align-items-center">
                    <a href="counterparties-provider.html" class="me-4">
                        <button type="button" class="btn btn-primary waves-effect waves-light">
                            <i class="las la-angle-double-left"></i>
                        </button>
                    </a>
                    <h5 class="card-title mb-0  pe-4" >
                        <span  data-key="t-nameCompany"></span>:
                        <span><b>Tinch</b></span>
                    </h5>
                    <div>
                        <span data-key="t-telfon"></span>:
                        <span><b>+998 (99) 000 00 00</b></span>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="nav nav-pills nav-justified mb-3" role="tablist">
                        <li class="nav-item waves-effect waves-light">
                            <a data-key="t-settingPraduk" class="nav-link active" data-bs-toggle="tab" href="#pill-justified-home-1" role="tab">
                                Продукты
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a data-key="t-payments" class="nav-link" data-bs-toggle="tab" href="#pill-justified-profile-1" role="tab">
                                Платежи
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content text-muted">
                        <div class="tab-pane active" id="pill-justified-home-1" role="tabpanel">
                            <table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>№.</th>
                                        <th data-key="t-date">Дата</th>
                                        <th data-key="t-user">Пользователь</th>
                                        <th data-key="t-settingPraduk">Продукты</th>
                                        <th data-key="t-settingMeasurement">Ед. изм</th>
                                        <th data-key="t-settingWarehouses">Склад</th>
                                        <th data-key="t-Miqdor">Количество</th>
                                        <th data-key="t-settingCurrencies">Валюты</th>
                                        <th data-key="t-settingCurrenciesKurs">Курс</th>
                                        <th data-key="t-priceru">Цена</th>
                                        <th data-key="t-totalSum">Итого</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>20.03.2023</td>
                                        <td>MrKhan</td>
                                        <td>Olma Eron</td>
                                        <td>kg</td>
                                        <td>Asosiy ombor</td>
                                        <td>9</td>
                                        <td>UZB</td>
                                        <td>1</td>
                                        <td>7 000</td>
                                        <td><b>63 000</b></td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>20.03.2023</td>
                                        <td>MrKhan</td>
                                        <td>Nok Xitoy</td>
                                        <td>kg</td>
                                        <td>Asosiy ombor</td>
                                        <td>15</td>
                                        <td>USD</td>
                                        <td>11 700</td>
                                        <td>9 </td>
                                        <td><b>171</b></td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>20.03.2023</td>
                                        <td>MrKhan</td>
                                        <td>Olma Eron</td>
                                        <td>kg</td>
                                        <td>Asosiy ombor</td>
                                        <td>9</td>
                                        <td>UZB</td>
                                        <td>1</td>
                                        <td>7 000</td>
                                        <td><b>63 000</b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="pill-justified-profile-1" role="tabpanel">
                            <table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>№.</th>
                                        <th data-key="t-date">Дата</th>
                                        <th data-key="t-user">Пользователь</th>
                                        <th data-key="t-typePayment">Тип платежа</th>
                                        <th data-key="t-settingCurrencies">Валюты</th>
                                        <th data-key="t-settingCurrenciesKurs">Курс</th>
                                        <th data-key="t-priceru">Цена</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>20.03.2023</td>
                                        <td>MrKhan</td>
                                        <td>Naqt pul</td>
                                        <td>UZB</td>
                                        <td>1</td>
                                        <td><b>120 000</b></td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>20.03.2023</td>
                                        <td>MrKhan</td>
                                        <td>Naqt pul</td>
                                        <td>USD</td>
                                        <td>11 700</td>
                                        <td><b>151</b> (176 600 UZB) </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!-- end card-body -->
            </div>
        </div><!--end col-->
    </div><!--end row-->

@endsection
@section('script')

<script src="{{ URL::asset('build/js/pages/jquery-3.6.0.min.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/dataTables.min.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/buttons.print.min.js') }}"></script>
<!-- <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script> -->

<script src="{{ URL::asset('build/js/pages/datatables.init.js') }}"></script>

<script src="{{ URL::asset('build/js/app.js') }}"></script>

@endsection

