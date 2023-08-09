<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.storeTransition'); ?> <?php $__env->stopSection(); ?>
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
                    <h5 class="card-title mb-0"><?php echo app('translator')->get('translation.storeTransition'); ?></h5>
                    <div class="d-flex">
                        <div class="d-flex ms-3">
                            <button
                                data-bs-toggle="modal"
                                data-bs-target="#fullscreeexampleModalClient"
                                type="button"
                                class="btn btn-soft-success">
                                <i class="ri-add-circle-line align-middle me-1"></i>
                                <span><?php echo app('translator')->get('translation.cret'); ?></span>
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
                            <div class="col-xxl-4 col-md-6 col-12 mb-3">
                                <label for="hrRol" class="form-label"><?php echo app('translator')->get('translation.provider'); ?></label>
                                <select class="form-control"
                                        id="choices-single-no-sorting"
                                        name="choices-single-no-sorting"
                                        data-choices data-choices-sorting-false>
                                    <option value="">This is a placeholder</option>
                                    <option value="Madrid">Madrid</option>
                                    <option value="Toronto">Toronto</option>
                                    <option value="Vancouver">Vancouver</option>
                                    <option value="London">London</option>
                                    <option value="Manchester">Manchester</option>
                                    <option value="Liverpool">Liverpool</option>
                                    <option value="Paris">Paris</option>
                                    <option value="Malaga">Malaga</option>
                                    <option value="Washington" disabled>Washington</option>
                                    <option value="Lyon">Lyon</option>
                                    <option value="Marseille">Marseille</option>
                                    <option value="Hamburg">Hamburg</option>
                                    <option value="Munich">Munich</option>
                                    <option value="Barcelona">Barcelona</option>
                                    <option value="Berlin">Berlin</option>
                                    <option value="Montreal">Montreal</option>
                                    <option value="New York">New York</option>
                                    <option value="Michigan">Michigan</option>
                                </select>
                            </div>
                             <!--end col-->
                            <div class="col-xxl-4 col-md-6 col-12  mb-3">
                                <div>
                                     <label for="consignment" class="form-label"><?php echo app('translator')->get('translation.consignment'); ?></label>
                                    <input type="text" class="form-control" id="consignment"  placeholder="<?php echo app('translator')->get('translation.consignment'); ?>">
                                </div>
                            </div>
                             <!--end col-->
                            <div class="col-xxl-4 col-md-6 col-12  mb-3">
                                <div>
                                    <label for="date"  class="form-label"><?php echo app('translator')->get('translation.date'); ?></label>
                                    <input type="date" class="form-control" id="date" placeholder="<?php echo app('translator')->get('translation.date'); ?>">
                                </div>
                            </div>
                             <!--end col-->
                        </div>
                        <!--end row-->

                        <div class="row gy-4">
                            <div class="col-xxl-4 col-md-6 col-12">
                                <div>
                                    <label for="hrRol" class="form-label"><?php echo app('translator')->get('translation.settingCurrencies'); ?></label>
                                    <select class="form-select mb-1" aria-label="Default select example">
                                        <option selected></option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div>
                                    <input type="text" class="form-control" id="userName" placeholder="<?php echo app('translator')->get('translation.settingCurrenciesKurs'); ?>">
                                </div>
                            </div>
                        </div>
                        <!--end row-->

                        <hr>
                        <div class="row gy-4">
                            <div class="col-xxl-9 col-12">
                                <label for="hrRol" class="form-label"><?php echo app('translator')->get('translation.provider'); ?></label>
                                <select placeholder="salom" class="form-control"
                                        id="choices-single-no-sorting"
                                        name="choices-single-no-sorting"
                                        data-choices data-choices-sorting-false>
                                    <option value="">This is a placeholder</option>
                                    <option value="Madrid">Madrid</option>
                                    <option value="Toronto">Toronto</option>
                                    <option value="Vancouver">Vancouver</option>
                                    <option value="London">London</option>
                                    <option value="Manchester">Manchester</option>
                                    <option value="Liverpool">Liverpool</option>
                                    <option value="Paris">Paris</option>
                                    <option value="Malaga">Malaga</option>
                                    <option value="Washington" disabled>Washington</option>
                                    <option value="Lyon">Lyon</option>
                                    <option value="Marseille">Marseille</option>
                                    <option value="Hamburg">Hamburg</option>
                                    <option value="Munich">Munich</option>
                                    <option value="Barcelona">Barcelona</option>
                                    <option value="Berlin">Berlin</option>
                                    <option value="Montreal">Montreal</option>
                                    <option value="New York">New York</option>
                                    <option value="Michigan">Michigan</option>
                                </select>
                            </div>
                        </div>
                         <!--end row-->

                         <!-- Bordered Tables -->
                        <table class="table table-bordered table-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col"><?php echo app('translator')->get('translation.provider'); ?></th>
                                    <th scope="col" style="width: 100px;"><?php echo app('translator')->get('translation.settingMeasurement'); ?></th>
                                    <th scope="col" style="width: 150px;"><?php echo app('translator')->get('translation.miqdorMin'); ?></th>
                                    <th scope="col"><?php echo app('translator')->get('translation.settingWarehouses'); ?></th>
                                    <th scope="col" style="width: 200px;"><?php echo app('translator')->get('translation.expenses'); ?> %</th>
                                    <th scope="col"><?php echo app('translator')->get('translation.arrivalPrice'); ?></th>
                                    <th scope="col"><?php echo app('translator')->get('translation.arrivalPrice'); ?>, <?php echo app('translator')->get('translation.expenses'); ?></th>
                                    <th scope="col"><?php echo app('translator')->get('translation.typeSale'); ?></th>
                                    <th scope="col"><?php echo app('translator')->get('translation.saleProduct'); ?></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Implement new UX</td>
                                    <td>kg</td>
                                    <td><input type="text" class="form-control" id="userName"></td>
                                    <td>
                                        <select class="form-select mb-1">
                                            <option selected></option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </td>
                                    <td><input type="text" class="form-control" id="userName"></td>
                                    <td><input type="text" class="form-control" id="userName"></td>
                                    <td> 10 200 00 So'm </td>
                                    <td>
                                        <select class="form-select mb-1">
                                            <option selected></option>
                                            <option value="1">%</option>
                                            <option value="2">Цена </option>
                                        </select>
                                    </td>
                                     <td><input type="text" class="form-control" id="userName"></td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-2-fill"></i>
                                            </a>

                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <li><a class="dropdown-item" href="#">View</a></li>
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>


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
<script src="<?php echo e(URL::asset('build/libs/prismjs/prism.js')); ?>"></script>
<script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\turonsoft.uz\resources\views/store-transition.blade.php ENDPATH**/ ?>