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

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0" >@lang('translation.provider')</h5>
                    <div class="d-flex">
                        <button
                            data-bs-toggle="modal"
                            data-bs-target="#fullscreeexampleModal"
                            type="button"
                            class="btn btn-soft-success">
                            <i class="ri-add-circle-line align-middle me-1"></i>
                            <span>@lang('translation.cret')</span>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
                        <thead>
                            <tr>
                                <th>№.</th>
                                <th>@lang('translation.nameCompany')</th>
                                <th>@lang('translation.userName')</th>
                                <th>@lang('translation.userFamil')</th>
                                <th>@lang('translation.telfon')</th>
                                <th>@lang('translation.detali')</th>
                                <th>@lang('translation.settingTable')</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>Tinch</td>
                                <td> User User</td>
                                <td>Famili</td>
                                <td>+998 93 000 00 00</td>
                                <td>
                                    <a  href="counterparties-provider-profil"
                                        class="badge bg-success pt-2 pb-2  w-100"
                                        data-key="t-detali">
                                        Detal
                                    </a>
                                </td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
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

    <div class="modal fade" id="fullscreeexampleModal" tabindex="-1" aria-labelledby="fullscreeexampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="fullscreeexampleModalLabel" >@lang('translation.modalTitCreate')</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="live-preview">
                        <div class="row gy-4">
                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="nameCompany" class="form-label">@lang('translation.userName')</label>
                                    <input type="text" class="form-control" id="nameCompany">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="userName" class="form-label">@lang('translation.userName')</label>
                                    <input type="text" class="form-control" id="userName">
                                </div>
                            </div>
                             <!--end col-->
                             <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="userFamil" class="form-label">@lang('translation.userFamil')</label>
                                    <input type="text" class="form-control" id="userFamil">
                                </div>
                            </div>
                             <!--end col-->
                             <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="telfon" class="form-label">@lang('translation.telfon')</label>
                                    <input type="text" class="form-control" id="telfon">
                                </div>
                            </div>
                             <!--end col-->
                             <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="commen" class="form-label">@lang('translation.commen')</label>
                                    <input type="text" class="form-control" id="commen">
                                </div>
                            </div>

                        </div>
                        <!--end row-->
                    </div>
                </div>
                <div class="modal-footer">
                    <a   href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal">
                        <i class="ri-close-line me-1 align-middle"></i>@lang('translation.modalBtnClose')
                    </a>
                    <button type="button" class="btn btn-primary ">@lang('translation.modalBtnSeve')</button>
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

