<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.datatables'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<!--datatable css-->
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
<!--datatable responsive css-->
<link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Tables <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?>Datatables <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0"  data-key="t-warehousesMoving">Переместить Склад </h5>
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
                                <th data-key="t-qanchaKerak">Miqdor</th>
                                <th data-key="t-warehousesMoving1">Chiqivchi Omborda</th>
                                <th data-key="t-warehousesMoving2">Kiruvchi  Omborda</th>
                                <th data-key="t-date">Sana</th>
                                <th data-key="t-detali">Detal</th>
                                <th data-key="t-settingTable">Настройки</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <td>Ombor A</td>
                                <td>Ombor B</td>
                                <td>14</td>
                                <td>20.05.2023</td>
                                <td>
                                    <span
                                        data-bs-toggle="modal"
                                        data-bs-target="#fullscreeexampleModalDetal"
                                        class="badge bg-success pt-2 pb-2  w-100"
                                        data-key="t-detali">
                                        Detal
                                    </span>
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


    <div class="modal fade" data-bs-backdrop="static" id="fullscreeexampleModal" tabindex="-1" aria-labelledby="fullscreeexampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="fullscreeexampleModalLabel" data-key="t-modalTitCreate" >Новый</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="live-preview">
                        <div class="row gy-4">
                            <div class="col-xxl-6 col-md-12">
                                <label for="warehousesMoving1" class="form-label" data-key="t-warehousesMoving1"></label>
                                <select class="form-select mb-3" aria-label="Default select example">
                                    <option selected>-----</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                             <!--end col-->
                            <div class="col-xxl-6 col-md-12">
                                <label for="warehousesMoving2" class="form-label" data-key="t-warehousesMoving12"></label>
                                <select class="form-select mb-3" aria-label="Default select example">
                                    <option selected>-----</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                             <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <div class="row gy-4">
                        <div class="col-xxl-9 col-md-12">
                            <label for="settingPraduk" class="form-label" data-key="t-settingPraduk"></label>
                            <select class="form-select mb-3" aria-label="Default select example">
                                <option selected>-----</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="col-xxl-12 col-md-12">
                            <table class="table table-success table-striped align-middle table-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col" data-key="t-settingPraduk">Продукты</th>
                                        <th scope="col" data-key="t-settingMeasurement">Единица измерения</th>
                                        <th scope="col" data-key="t-praductPart">Part</th>
                                        <th scope="col" data-key="t-Soni">Soni</th>
                                        <th scope="col" data-key="t-Miqdor">Miqdori</th>
                                        <th scope="col" data-key="t-delet">Udalit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td  style="width: 300px;">Olma Olma Olma</td>
                                        <td>kg</td>
                                        <td>
                                            <select class="form-select" style="width: 250px;" aria-label="Default select example">
                                                <option selected>-----</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </td>
                                        <td><i class="ri-checkbox-circle-line align-middle text-success "></i> 1 </td>
                                        <td><input type="number" class="form-control " style="width: 100px;"></td>
                                        <td>
                                            <div class="hstack gap-3 flex-wrap">
                                                <a href="javascript:void(0);" class="link-danger fs-15"><i class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
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

    <div class="modal fade" data-bs-backdrop="static" id="fullscreeexampleModalDetal" tabindex="-1" aria-labelledby="fullscreeexampleModalDetalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="fullscreeexampleModalDetalLabel"  data-key="t-detali" >Detalii</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row gy-4">
                        <div class="col-xxl-6 col-md-12 d-flex">
                            <div class="pe-3 ms-2" scope="row" data-key="t-warehousesMoving1"></div>
                            <div class="text-muted">Anna Adame</div>
                        </div>
                        <div class="col-xxl-6 col-md-12  d-flex">
                            <div class="pe-3" scope="row" data-key="t-warehousesMoving12"></div>
                            <div class="text-muted">Anna Adame</div>
                        </div>
                        <div class="col-xxl-12 col-md-12">
                            <table class="table table-success table-striped align-middle table-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col" data-key="t-settingPraduk">Продукты</th>
                                        <th scope="col" data-key="t-settingMeasurement">Единица измерения</th>
                                        <th scope="col" data-key="t-praductPart">Part</th>
                                        <th scope="col" data-key="t-Miqdor">Miqdori</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Olma Olma Olma</td>
                                        <td>kg</td>
                                        <td>Partya A 25-07</td>
                                        <td>20</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a   href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"
                        data-key="t-modalBtnClose">
                        <i class="ri-close-line me-1 align-middle"></i>Закрывать
                    </a>
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

<script src="<?php echo e(URL::asset('build/js/pages/jquery-3.6.0.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('build/js/pages/dataTables.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('build/js/pages/dataTables.bootstrap5.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('build/js/pages/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('build/js/pages/dataTables.buttons.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('build/js/pages/buttons.print.min.js')); ?>"></script>
<!-- <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script> -->

<script src="<?php echo e(URL::asset('build/js/pages/datatables.init.js')); ?>"></script>

<script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\turonsoft.uz\resources\views/warehouses-moving.blade.php ENDPATH**/ ?>