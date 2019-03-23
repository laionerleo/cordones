<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/simulor/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Feb 2019 17:55:48 GMT -->
<head>
        <?php $this->load->View('theme/head'); ?>
</head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <?php $this->load->View('theme/menu'); ?>
           
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Topbar Start -->
                        <?php $this->load->View('theme/menuarriba'); ?>
                    <!-- end Topbar -->

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="#">pagos</a></li>
                                            
                                        </ol>
                                    </div>
                                    <h4 class="page-title">PAGOS </h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                </div>

              
                   <div class="row">
                           

                          <div class="col-xl-3 col-lg-6">
                                <div class="card widget-flat">
                                    <div class="card-body p-0">
                                        <div class="p-3 pb-0">
                                            <div class="float">
                                                 
                                               <a href="<?=$url?>pagoingeniero/crear"><p style="font-size: 25px">Nuevo Pago</p></a>
                                            </div>
                                            
                                            

                                            
                                        </div>
                                        <div id="sparkline1"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                    
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">TABLA PRODUCCION</h4>
                                        <p class="text-muted font-13">
                                           tabla de produccion diaria separada por fecha
                                        </p>
            
                                        <table class="table mb-0">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>#</th>
                                                <th>FECHA </th>
                                                <th>DETALLE</th>
                                                <th>MONTO</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php for ($i=0; $i < count($pagoingeniero) ; $i++) { 
                                                ?>
                                            <tr>
                                                <th scope="row"><?php echo $i ?></th>
                                                <td><?php echo $pagoingeniero[$i]->pag_fecha ?></td>
                                                <td><?php echo $pagoingeniero[$i]->detalle ?></td>
                                                <td><?php echo $pagoingeniero[$i]->pag_monto ?></td>
                                                
                                            </tr>
                                        <?php } ?>
                                            
                                            </tbody>
                                        </table>
                                    </div> <!-- end card-body -->
                                </div>
                            </div> <!-- end col -->
        
                            
                        </div>




                    </div>

                       
                        <!-- end row -->
                    </div> <!-- container -->

                <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                Simulor Admin &copy; 2018 - Coderthemes.com
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="#">About Us</a>
                                    <a href="#">Help</a>
                                    <a href="#">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <!-- App js --><?php $this->load->View('theme/js'); ?>

    </body>

<!-- Mirrored from coderthemes.com/simulor/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Feb 2019 17:56:15 GMT -->
</html>