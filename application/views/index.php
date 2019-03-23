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
                                            <li class="breadcrumb-item"><a href="#">Simulor</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                    

                            <
                       
                        <!-- end row -->

                       
                        <!-- end row -->
                    </div> <!-- container -->

                        <div id="contenedor"></div>
                    
                        

                        <script type="text/javascript">
                                                            Highcharts.chart('contenedor', {

                                          title: {
                                            text: 'Solar Employment Growth by Sector, 2010-2016'
                                          },

                                          subtitle: {
                                            text: 'Source: thesolarfoundation.com'
                                          },

                                          yAxis: {
                                            title: {
                                              text: 'Number of Employees'
                                            }
                                          },
                                          legend: {
                                            layout: 'vertical',
                                            align: 'right',
                                            verticalAlign: 'middle'
                                          },

                                          plotOptions: {
                                            series: {
                                              label: {
                                                connectorAllowed: false
                                              },
                                              pointStart: 2019
                                            }
                                          },

                                          series: [{
                                            name: 'PRODUCCION',
                                            data: [100, 150, 150, 150, 150, 150, 150, 150]
                                          }],

                                          responsive: {
                                            rules: [{
                                              condition: {
                                                maxWidth: 200
                                              },
                                              chartOptions: {
                                                legend: {
                                                  layout: 'horizontal',
                                                  align: 'center',
                                                  verticalAlign: 'bottom'
                                                }
                                              }
                                            }]
                                          }

                                });

                                                            


                                                            
</script>

                </div> <!-- content -->

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


         <!-- END wrapper -->
        <?php $this->load->View('theme/js'); ?>

    </body>

<!-- Mirrored from coderthemes.com/simulor/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Feb 2019 17:56:15 GMT -->
</html>