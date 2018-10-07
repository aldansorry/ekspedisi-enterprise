<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">  

            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Pengiriman</h2>
                        <a href="<?php echo base_url('Admin/Pengiriman/insert') ?>" class="au-btn au-btn-icon au-btn--blue">
                            <i class="zmdi zmdi-plus"></i>Tambah Data</a>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <!-- DATA TABLE-->
                        <div class="table-responsive m-b-40">
                            <table class="table table-borderless table-data3" id="table-datatable">
                                <thead>
                                    <tr>
                                        <th>no</th>
                                        <th>sopir</th>
                                        <th>tujuan</th>
                                        <th>status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $value): ?>
                                        <tr>
                                            <td><?php echo $value->id ?></td>
                                            <td><?php echo $value->sopir_nama ?></td>
                                            <td><?php echo $value->kota_tujuan ?></td>
                                            <td><?php echo $value->status ?></td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <a href="<?php echo base_url("Admin/Pengiriman/detail/".$value->id) ?>" class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Send">
                                                        <i class="zmdi zmdi-mail-send"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>