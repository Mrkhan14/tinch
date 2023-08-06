<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.datatables'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<!--datatable css-->
<link href="<?php echo e(URL::asset('build/css/dataTables.bootstrap5.min.css')); ?>" id="app-style" rel="stylesheet" type="text/css" />
<!--datatable responsive css-->
<link href="<?php echo e(URL::asset('build/css/responsive.bootstrap.min.css')); ?>" id="app-style" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('build/css/buttons.dataTables.min.css')); ?>" id="app-style" rel="stylesheet" type="text/css" />

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
                    <h5 class="card-title mb-0"><?php echo app('translator')->get('translation.payments'); ?></h5>
                    <div class="d-flex">
                        <div class="d-flex">
                            <button
                                data-bs-toggle="modal"
                                data-bs-target="#fullscreeexampleModalProvider"
                                type="button"
                                class="btn btn-soft-success">
                                <i class="ri-add-circle-line align-middle me-1"></i>
                                <span><?php echo app('translator')->get('translation.outgoingPayments'); ?></span>
                            </button>
                        </div>
                        <div class="d-flex ms-3">
                            <button
                                data-bs-toggle="modal"
                                data-bs-target="#fullscreeexampleModalClient"
                                type="button"
                                class="btn btn-soft-success">
                                <i class="ri-add-circle-line align-middle me-1"></i>
                                <span><?php echo app('translator')->get('translation.incomingPayments'); ?></span>
                            </button>
                        </div>
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
                                <th>No.</th>
                                <th><?php echo app('translator')->get('translation.payments'); ?></th>
                                <th><?php echo app('translator')->get('translation.settingPaymentTypes'); ?></th>
                                <th><?php echo app('translator')->get('translation.settingCurrencies'); ?></th>
                                <th><?php echo app('translator')->get('translation.settingCurrenciesKurs'); ?></th>
                                <th><?php echo app('translator')->get('translation.Цена'); ?></th>
                                <th>Create Date</th>

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
                                <td><span class="badge bg-info fs-12">Ali Mark</span></td>
                                <td><?php echo app('translator')->get('translation.incomingPayments'); ?></td>
                                <td>USD </td>
                                <td>11 700</td>
                                <td>9 200 USD</td>
                                <td>03 Oct, 2021</td>
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
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                    </div>
                                </th>
                                <td>01</td>
                                <td><span class="badge bg-success fs-12">Ali Mark</span></td>
                                <td><?php echo app('translator')->get('translation.outgoingPayments'); ?></td>
                                <td>USD </td>
                                <td>11 700</td>
                                <td>9 200 USD</td>
                                <td>03 Oct, 2021</td>
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


    <div class="modal fade" id="fullscreeexampleModalClient" tabindex="-1" aria-labelledby="fullscreeexampleModalClientLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="fullscreeexampleModalClientLabel" data-key="t-modalTitCreate" >Новый</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="live-preview">
                        <div class="row gy-4">
                            <div class="col-xxl-4 col-md-6 col-12">
                                <div>
                                    <label for="hrRol" class="form-label"><?php echo app('translator')->get('translation.client'); ?></label>
                                    <select class="form-select mb-3" aria-label="Default select example">
                                        <option selected>-----</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6 col-12">
                                <div>
                                    <label for="userName" class="form-label"><?php echo app('translator')->get('translation.priceru'); ?></label>
                                    <input type="text" class="form-control" id="userName">
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6 col-12">
                                <div>
                                    <label for="NumberBank" class="form-label"><?php echo app('translator')->get('translation.NumberBank'); ?></label>
                                    <select class="form-select mb-3"  id="NumberBank" aria-label="Default select example">
                                        <option selected>-----</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                             <!--end col-->
                            <div class="col-xxl-6 col-md-6 col-12">
                                <div>
                                    <label for="date" class="form-label"><?php echo app('translator')->get('translation.date'); ?></label>
                                    <input type="date" class="form-control" id="date">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-6 col-md-6 col-12">
                                <div>
                                    <label for="typePayment" class="form-label"><?php echo app('translator')->get('translation.typePayment'); ?></label>
                                    <select class="form-select mb-3"  id="typePayment" aria-label="Default select example">
                                        <option selected>-----</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->

                        <div class="row gy-4">
                            <div class="col-xxl-4 col-md-6 col-12">
                                <div>
                                    <label for="hrRol" class="form-label"><?php echo app('translator')->get('translation.settingCurrencies'); ?></label>
                                    <select class="form-select mb-3" aria-label="Default select example">
                                        <option selected>-----</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6 col-12">
                                <div>
                                    <label for="userName" class="form-label"><?php echo app('translator')->get('translation.settingCurrenciesKurs'); ?></label>
                                    <input type="text" class="form-control" id="userName">
                                </div>
                            </div>
                        </div>
                        <!--end row-->

                        <hr>
                        <div class="row gy-4">
                            <div class="col-xxl-4 col-md-6 col-12">
                                <div>
                                    <label for="hrRol" class="form-label">Qaysi Valutadagi qarzdorlik yopilmoqchi</label>
                                    <select class="form-select mb-3" aria-label="Default select example">
                                        <option selected>-----</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                         <!--end row-->

                         <div class="row">
                            <div class="col-lg-3 col-sm-12">
                                <div class="card">
                                    <a class="card-body bg-soft-info" >
                                        <h5 class="card-title text-uppercase fw-semibold mb-1 fs-15">
                                            <b data-key="t-rest">Остальные</b>
                                            <span class="fw-medium">6 000 UZB</span>
                                        </h5>
                                        <!-- <p class="text-muted mb-0">
                                            <b data-key="t-rest">Остальные</b>
                                            <span class="fw-medium">6 000 UZB</span>
                                        </p> -->
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-12">
                                <div class="card">
                                    <a class="card-body bg-soft-success" >
                                        <h5 class="card-title text-uppercase fw-semibold mb-1 fs-15">
                                            <b data-key="t-rest">Остальные</b>
                                            <span class="fw-medium">6 000 USD</span>
                                        </h5>
                                    </a>
                                </div>
                            </div>
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

    <div class="modal fade" id="fullscreeexampleModalProvider" tabindex="-1" aria-labelledby="fullscreeexampleModalProviderLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="fullscreeexampleModalProviderLabel" data-key="t-modalTitCreate" >Новый</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="live-preview">
                        <div class="row gy-4">
                            <div class="col-xxl-4 col-md-6 col-12">
                                <div>
                                    <label for="hrRol" class="form-label"><?php echo app('translator')->get('translation.provider'); ?></label>
                                    <select class="form-select mb-3" aria-label="Default select example">
                                        <option selected>-----</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6 col-12">
                                <div>
                                    <label for="userName" class="form-label"><?php echo app('translator')->get('translation.priceru'); ?></label>
                                    <input type="text" class="form-control" id="userName">
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6 col-12">
                                <div>
                                    <label for="NumberBank" class="form-label"><?php echo app('translator')->get('translation.NumberBank'); ?></label>
                                    <select class="form-select mb-3"  id="NumberBank" aria-label="Default select example">
                                        <option selected>-----</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                             <!--end col-->
                            <div class="col-xxl-6 col-md-6 col-12">
                                <div>
                                    <label for="date" class="form-label"><?php echo app('translator')->get('translation.date'); ?></label>
                                    <input type="date" class="form-control" id="date">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-6 col-md-6 col-12">
                                <div>
                                    <label for="typePayment" class="form-label"><?php echo app('translator')->get('translation.typePayment'); ?></label>
                                    <select class="form-select mb-3"  id="typePayment" aria-label="Default select example">
                                        <option selected>-----</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->

                        <div class="row gy-4">
                            <div class="col-xxl-4 col-md-6 col-12">
                                <div>
                                    <label for="hrRol" class="form-label"><?php echo app('translator')->get('translation.settingCurrencies'); ?></label>
                                    <select class="form-select mb-3" aria-label="Default select example">
                                        <option selected>-----</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6 col-12">
                                <div>
                                    <label for="userName" class="form-label"><?php echo app('translator')->get('translation.settingCurrenciesKurs'); ?></label>
                                    <input type="text" class="form-control" id="userName">
                                </div>
                            </div>
                        </div>
                        <!--end row-->

                        <hr>
                        <div class="row gy-4">
                            <div class="col-xxl-4 col-md-6 col-12">
                                <div>
                                    <label for="hrRol" class="form-label">Qaysi Valutadagi qarzdorlik yopilmoqchi</label>
                                    <select class="form-select mb-3" aria-label="Default select example">
                                        <option selected>-----</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                         <!--end row-->

                         <div class="row">
                            <div class="col-lg-3 col-sm-12">
                                <div class="card">
                                    <a class="card-body bg-soft-info" >
                                        <h5 class="card-title text-uppercase fw-semibold mb-1 fs-15">
                                            <b data-key="t-rest">Остальные</b>
                                            <span class="fw-medium">6 000 UZB</span>
                                        </h5>
                                        <!-- <p class="text-muted mb-0">
                                            <b data-key="t-rest">Остальные</b>
                                            <span class="fw-medium">6 000 UZB</span>
                                        </p> -->
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-12">
                                <div class="card">
                                    <a class="card-body bg-soft-success" >
                                        <h5 class="card-title text-uppercase fw-semibold mb-1 fs-15">
                                            <b data-key="t-rest">Остальные</b>
                                            <span class="fw-medium">6 000 USD</span>
                                        </h5>
                                    </a>
                                </div>
                            </div>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\turonsoft.uz\resources\views/transactions-payments.blade.php ENDPATH**/ ?>