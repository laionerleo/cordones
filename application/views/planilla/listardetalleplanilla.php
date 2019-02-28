<div class="row">
                            <div>
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">LISTA DE LA PLANILLA </h4>
                                        <p class="text-muted font-13">
                                            aqui esta la planilla para pagar a  los trabajadores
                                        </p>
            
                                        <table class="table mb-0">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>NOMBRE</th>
                                                <th>TOTAL CORDONES</th>
                                                <th>TOTAL PAQUETE</th>
                                                <th>ANTICIPO</th>
                                                <th>TOTAL A PAGAR</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php for ($i=0; $i < count($detalleplanilla) ; $i++) { 
                                                    # code...
                                                 ?>
                                            <tr class="table-active">
                                                <th scope="row"><?php echo $i ?></th>
                                                <td><?php echo $detalleplanilla[$i]->per_id ?></td>
                                                <td><?php echo $detalleplanilla[$i]->det_totalcordones ?></td>
                                                <td><?php echo $detalleplanilla[$i]->det_totalpaquetes ?></td>
                                                <td><?php echo $detalleplanilla[$i]->det_anticipo ?></td>
                                                <td><?php echo $detalleplanilla[$i]->det_total_pagar ?></td>
                                                
                                                
                                            </tr>
                                        <?php }  ?>
                                            
                                            </tbody>
                                        </table>
                                    </div> <!-- end card-body -->
                                </div>
                            </div> <!-- end col -->
        
                        </div>