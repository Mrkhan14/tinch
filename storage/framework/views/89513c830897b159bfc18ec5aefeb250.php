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

        <div class="row d-flex justify-content-center">
            <div class="col-lg-3 col-sm-12">
                <div class="card">
                    <a class="card-body bg-soft-warning" >
                        <h5 class="card-title text-uppercase fw-semibold mb-1 fs-15">15 000 000 So'm</h5>
                    </a>
                </div>
            </div>
            <!-- <div class="col-lg-3 col-sm-12">
                <div class="card">
                    <a class="card-body bg-soft-success" >
                        <h5 class="card-title text-uppercase fw-semibold mb-1 fs-15">15 000 000 USD</h5>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12">
                <div class="card">
                    <a class="card-body bg-soft-info" >
                        <h5 class="card-title text-uppercase fw-semibold mb-1 fs-15">500 000 AED</h5>
                    </a>
                </div>
            </div> -->
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-start align-items-center">
                        <a href="warehouse-show" class="me-4">
                            <button type="button" class="btn btn-primary waves-effect waves-light">
                                <i class="las la-angle-double-left"></i>
                            </button>
                        </a>
                        <h5 class="card-title mb-0  pe-4" >
                            <span  data-key="t-settingPraduk"></span>:
                            <span><b>Plma</b></span>
                        </h5>
                        <div>
                            <span data-key="t-settingMeasurement">Единица измерения</span>:
                            <span><b>kg</b></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
                            <thead>
                                <tr>
                                    <th><?php echo app('translator')->get('translation.settingWarehouses'); ?></th>
                                    <th><?php echo app('translator')->get('translation.Soni'); ?></thdata-key=>
                                    <th><?php echo app('translator')->get('translation.brak'); ?></thdata-key=>
                                    <th><?php echo app('translator')->get('translation.settingCurrencies'); ?></thdata-key=>
                                    <th><?php echo app('translator')->get('translation.settingCurrenciesKurs'); ?></thdata-key=>

                                    <th><?php echo app('translator')->get('translation.expenses'); ?></thdata-key=>
                                    <th><?php echo app('translator')->get('translation.ProductArrivalPrice'); ?></thdata-key=>
                                    <th><?php echo app('translator')->get('translation.letProductBeTaror'); ?></th>
                                    <th><?php echo app('translator')->get('translation.totalSum'); ?></th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>VLZ-452</td>
                                    <td>10</td>
                                    <td>1</td>
                                    <td><span class="badge bg-info">USD</span></td>
                                    <td>11 700</td>
                                    <td> 3 USD <br> <span>(35 100 so'm)</span> </td>
                                    <td>15 USD <br>  <span>(175 500 so'm)</span></td>
                                    <td>18 USD <br> <span>(210 600 so'm)</span></td>
                                    <td>180 USD <br> <span>(2 106 000 so'm)</span></td>
                                </tr>
                                <tr>
                                    <td>VLZ-452</td>
                                    <td>10</td>
                                    <td>1</td>
                                    <td><span class="badge bg-info">UZS</span></td>
                                    <td>1</td>
                                    <td>30 000 so'm</td>
                                    <td>150 000 so'm</td>
                                    <td>180 000 so'm</td>
                                    <td>1 800 000 so'm</td>
                                </tr>
                                <tr>
                                    <td>VLZ-452</td>
                                    <td>10</td>
                                    <td>1</td>
                                    <td><span class="badge bg-info">UZS</span></td>
                                    <td>1</td>
                                    <td>30 000 so'm</td>
                                    <td>150 000 so'm</td>
                                    <td>180 000 so'm</td>
                                    <td>1 800 000 so'm</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->


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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\turonsoft.uz\resources\views/warehouse-praducts-show.blade.php ENDPATH**/ ?>