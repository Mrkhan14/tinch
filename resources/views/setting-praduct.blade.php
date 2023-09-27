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
                    <h5 class="card-title mb-0"  data-key="t-settingPraduk">Продукты</h5>
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
                                <th scope="col" style="width: 10px;">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" id="checkAll" value="option">
                                    </div>
                                </th>
                                <th>SR No.</th>
                                <th>ID</th>
                                <th>Purchase ID</th>
                                <th>Title</th>
                                <th>User</th>
                                <th>Assigned To</th>
                                <th>Created By</th>
                                <th>Create Date</th>
                                <th>Status</th>
                                <th>Priority</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                    </div>
                                </th>
                                <td>01</td>
                                <td>VLZ-452</td>
                                <td>VLZ1400087402</td>
                                <td><a href="#!">Post launch reminder/ post list</a></td>
                                <td>Joseph Parker</td>
                                <td>Alexis Clarke</td>
                                <td>Joseph Parker</td>
                                <td>03 Oct, 2021</td>
                                <td><span class="badge badge-soft-info">Re-open</span></td>
                                <td><span class="badge bg-danger">High</span></td>
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
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">@lang('translation.fullscreeexampleModalLabel')</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="live-preview">
                        <div class="row gy-4">
                            <div class="col-xxl-3 col-md-6">
                                <div>
                                    <label for="basiInput" class="form-label">@lang('translation.label')</label>
                                    <input type="text" class="form-control" id="basiInput">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3 col-md-6">
                                <label for="exampleDataList" class="form-label">Datalist example</label>
                                <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Search your country...">
                                <datalist id="datalistOptions">
                                    <option value="Switzerland">
                                    </option><option value="New York New York New York New York New York New York New York New York New York">
                                    </option><option value="France">
                                    </option><option value="Spain">
                                    </option><option value="Chicago">
                                    </option><option value="Bulgaria">
                                    </option><option value="Hong Kong">
                                </option></datalist>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3 col-md-6">
                                <div>
                                    <label for="exampleInputdate" class="form-label">Input Date</label>
                                    <input type="date" class="form-control" id="exampleInputdate">
                                </div>
                            </div>
                            <!--end col-->


                            <div class="col-xxl-3 col-md-6">
                                <div>
                                    <label for="placeholderInput" class="form-label">Input with Placeholder</label>
                                    <input type="password" class="form-control" id="placeholderInput" placeholder="Placeholder">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3 col-md-6">
                                <div>
                                    <label for="valueInput" class="form-label">Input with Value</label>
                                    <input type="text" class="form-control" id="valueInput" value="Input value">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3 col-md-6">
                                <div>
                                    <label for="readonlyPlaintext" class="form-label">Readonly Plain Text Input</label>
                                    <input type="text" class="form-control-plaintext" id="readonlyPlaintext" value="Readonly input" readonly="">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3 col-md-6">
                                <div>
                                    <label for="readonlyInput" class="form-label">Readonly Input</label>
                                    <input type="text" class="form-control" id="readonlyInput" value="Readonly input" readonly="">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3 col-md-6">
                                <div>
                                    <label for="disabledInput" class="form-label">Disabled Input</label>
                                    <input type="text" class="form-control" id="disabledInput" value="Disabled input" disabled="">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3 col-md-6">
                                <div>
                                    <label for="iconInput" class="form-label">Input with Icon</label>
                                    <div class="form-icon">
                                        <input type="email" class="form-control form-control-icon" id="iconInput" placeholder="example@gmail.com">
                                        <i class="ri-mail-unread-line"></i>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3 col-md-6">
                                <div>
                                    <label for="iconrightInput" class="form-label">Input with Icon Right</label>
                                    <div class="form-icon right">
                                        <input type="email" class="form-control form-control-icon" id="iconrightInput" placeholder="example@gmail.com">
                                        <i class="ri-mail-unread-line"></i>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3 col-md-6">
                                <div>
                                    <label for="exampleInputdate" class="form-label">Input Date</label>
                                    <input type="date" class="form-control" id="exampleInputdate">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3 col-md-6">
                                <div>
                                    <label for="exampleInputtime" class="form-label">Input Time</label>
                                    <input type="time" class="form-control" id="exampleInputtime">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3 col-md-6">
                                <div>
                                    <label for="exampleInputpassword" class="form-label">Input Password</label>
                                    <input type="password" class="form-control" id="exampleInputpassword" value="44512465">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3 col-md-6">
                                <div>
                                    <label for="exampleFormControlTextarea5" class="form-label">Example Textarea</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea5" rows="3"></textarea>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3 col-md-6">
                                <div>
                                    <label for="formtextInput" class="form-label">Form Text</label>
                                    <input type="password" class="form-control" id="formtextInput">
                                    <div id="passwordHelpBlock" class="form-text">
                                        Must be 8-20 characters long.
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3 col-md-6">
                                <div>
                                    <label for="colorPicker" class="form-label">Color Picker</label>
                                    <input type="color" class="form-control form-control-color w-100" id="colorPicker" value="#364574">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3 col-md-6">
                                <div>
                                    <label for="borderInput" class="form-label">Input Border Style</label>
                                    <input type="text" class="form-control border-dashed" id="borderInput" placeholder="Enter your name">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3 col-md-6">
                                <label for="exampleDataList" class="form-label">Datalist example</label>
                                <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Search your country...">
                                <datalist id="datalistOptions">
                                    <option value="Switzerland">
                                    </option><option value="New York">
                                    </option><option value="France">
                                    </option><option value="Spain">
                                    </option><option value="Chicago">
                                    </option><option value="Bulgaria">
                                    </option><option value="Hong Kong">
                                </option></datalist>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3 col-md-6">
                                <div>
                                    <label for="exampleInputrounded" class="form-label">Rounded Input</label>
                                    <input type="text" class="form-control rounded-pill" id="exampleInputrounded" placeholder="Enter your name">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3 col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="firstnamefloatingInput" placeholder="Enter your firstname">
                                    <label for="firstnamefloatingInput">Floating Input</label>
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
                        <i class="ri-close-line me-1 align-middle"></i>
                        @lang('translation.modalBtnClose')
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
