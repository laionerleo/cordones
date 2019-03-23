 <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!-- LOGO -->
                    <a href="<?=$url?>" class="logo text-center mb-4">
                        <span class="logo-lg">
                            <img src="<?php echo base_url(); ?>application/assets/assets/images/logo.png" alt="" height="20">

                        </span>
                        <span class="logo-sm">
                            <img src="<?php echo base_url(); ?>application/assets/assets/images/logo-sm.png" alt="" height="24">
                        </span>
                    </a>

                    <!--- Sidemenu -->
                    <?php if (@$_SESSION['user']->usu_privilegio==1){ ?>
                        
                    
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            

                            <li>
                                <a href="<?=$url?>personas">
                                    <i class="fe-airplay"></i>
                                    
                                    <span> personas </span>
                                </a>
                            </li>

                            <li>
                                <a href="<?=$url?>produccion">
                                    <i class="fe-briefcase"></i>
                                    <span> produccion    </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?=$url?>paquete">
                                    <i class="fe-briefcase"></i>
                                    <span> paquetes    </span>
                                </a>
                            </li>

                           
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-bookmark"></i>
                                    
                                    <span> pagos </span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    
                                    <li>
                                        <a href="<?=$url?>pagoingeniero">pago del ingeniero</a>
                                    </li>
                                    <li>
                                        <a href="<?=$url?>pagotrabajadores">pago trabajadores</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?=$url?>planilla">
                                    <i class="fe-briefcase"></i>
                                    <span> planillas    </span>
                                </a>
                            </li>

                            

                            
                        </ul>

                    </div>
                    <!-- End Sidebar -->
                <?php } ?>
                <?php if (@$_SESSION['user']->usu_privilegio==2){ ?>
                        
                    
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            
                            <li>
                                <a href="<?=$url?>produccion">
                                    <i class="fe-briefcase"></i>
                                    <span> produccion    </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?=$url?>paquete">
                                    <i class="fe-briefcase"></i>
                                    <span> paquetes    </span>
                                </a>
                            </li>

                           
                            
                            <li>
                                <a href="<?=$url?>planilla">
                                    <i class="fe-briefcase"></i>
                                    <span> planillas    </span>
                                </a>
                            </li>

                            

                            
                        </ul>

                    </div>
                    <!-- End Sidebar -->
                <?php } ?>
                <?php if (@$_SESSION['user']->usu_privilego==3){ ?>
                        
                    
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            

                            <li>
                                <a href="<?=$url?>personas">
                                    <i class="fe-airplay"></i>
                                    
                                    <span> personas </span>
                                </a>
                            </li>

                            <li>
                                <a href="<?=$url?>produccion">
                                    <i class="fe-briefcase"></i>
                                    <span> produccion    </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?=$url?>paquete">
                                    <i class="fe-briefcase"></i>
                                    <span> paquetes    </span>
                                </a>
                            </li>

                           
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-bookmark"></i>
                                    
                                    <span> pagos </span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    
                                    <li>
                                        <a href="<?=$url?>pagoingeniero">pago del ingeniero</a>
                                    </li>
                                    <li>
                                        <a href="<?=$url?>pagotrabajadores">pago trabajadores</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?=$url?>planilla">
                                    <i class="fe-briefcase"></i>
                                    <span> planillas    </span>
                                </a>
                            </li>

                            

                            
                        </ul>

                    </div>
                    <!-- End Sidebar -->
                <?php } ?>
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>