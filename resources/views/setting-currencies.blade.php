@extends('layouts.master')
@section('title') @lang('translation.datatables') @endsection
@section('css')
<!--datatable css-->
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
<!--datatable responsive css-->
<link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />

@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Tables @endslot
@slot('title')Datatables @endslot
@endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0"  data-key="t-settingCurrencies">Продукты</h5>
                    <div class="d-flex">
                        <button
                            data-bs-toggle="modal"
                            data-bs-target="#fullscreeexampleModal"
                            type="button"
                            class="btn btn-soft-success">
                            <i class="ri-add-circle-line align-middle me-1"></i>
                            <span data-key="t-cret">Создать</span>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
                        <thead>
                            <tr>
                                <th>№.</th>
                                <th data-key="t-settingCurrenciesName">Валюта учета</th>
                                <th data-key="t-settingCurrenciesSimvil">Символ</th>
                                <th data-key="t-FullName">Полное наименование</th>
                                <th data-key="t-settingCurrenciesISO">ISO код</th>
                                <th data-key="t-settingCurrenciesKurs">Курс</th>
                                <th data-key="t-settingTable">Настройки</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td>01</td>
                                <td>True</td>
                                <td>USD</td>
                                <td>Доллар США</td>
                                <td>USD</td>
                                <td>11 500</td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                            <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>

                                <td>02</td>
                                <td>Folse</td>
                                <td>EUR</td>
                                <td>ЕВРО</td>
                                <td>EUR</td>
                                <td>12 100</td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                            <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>

                                <td>03</td>
                                <td>Folse</td>
                                <td>SUM</td>
                                <td>Узбекский сум</td>
                                <td>SUM</td>
                                <td>1</td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                            <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->


    <!-- modals -->
    <div class="modal fade" id="fullscreeexampleModal" tabindex="-1" aria-labelledby="fullscreeexampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="fullscreeexampleModalLabel" data-key="t-modalTitCreate" >Новый</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="live-preview">
                        <div class="row gy-4">
                            <div class="col-xxl-6 col-md-12">
                                <div>
                                    <label for="settingCurrenciesSimvil" class="form-label" data-key="t-settingCurrenciesSimvil">Символ</label>
                                    <input type="text" class="form-control" id="settingCurrenciesSimvil">
                                </div>
                            </div>
                             <!--end col-->

                            <div class="col-xxl-6 col-md-12">
                                <div>
                                    <label for="FullName" class="form-label" data-key="t-FullName">Полное наименование </label>
                                    <input type="text" class="form-control" id="FullName">
                                </div>
                            </div>
                             <!--end col-->

                            <div class="col-xxl-3 col-md-3">
                                <div class="form-check form-check-secondary mb-3">
                                    <input class="form-check-input" type="checkbox" id="formCheck7" checked>
                                    <label class="form-check-label" for="formCheck7">
                                        <span  data-key="t-settingCurrenciesCheckbox">Обратный курс </span>
                                    </label>
                                </div>
                            </div>
                             <!--end col-->

                            <div class="col-xxl-3 col-md-3">
                                <div>
                                    <label for="Kue" class="form-label" >1 SUM = </label>
                                    <input type="text" class="form-control" id="Kue">
                                </div>
                            </div>
                             <!--end col-->

                            <div class="col-xxl-6 col-md-12">
                                <div>
                                    <label for="Kue" class="form-label"  data-key="t-settingCurrenciesISO">1 SUM = </label>
                                    <input type="text" class="form-control" id="Kue">
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                </div>
                <div class="modal-footer">
                    <a   href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"
                        data-key="t-modalBtnClose">
                        <i class="ri-close-line me-1 align-middle"></i>Закрывать
                    </a>
                    <button type="button" class="btn btn-primary "  data-key="t-modalBtnSeve">Save changes</button>
                </div>
            </div>
        </div>
    </div>


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