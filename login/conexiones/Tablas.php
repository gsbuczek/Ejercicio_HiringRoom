<table name = "tabla1" border="1" id="example" class="display" style="width:100%">
        
			<caption><h1>TABLA VACANTES</h1></caption>
			<colgroup>
				<col style="width: 20%"/>
				<col style="width: 40%"/>
				<col style="width: 50%"/>
			</colgroup>
			<thead>
				<tr>
					<th rowspan="2">ID</th>
                                        <th rowspan="2">NOMBRE</th>
					<th colspan="6">AREA</th>
                                        <th rowspan="2">SUB AREA</th>
                                        <th rowspan="2">FECHA CREACION</th>
                                        <th rowspan="2">FECHA CIERRE</th>
                                        <th colspan="3">UBICACION</th>
                                        <th rowspan="2">SALARIO OFRECIDO</th>
                                        <th rowspan="2">REQUISITOS</th>
                                        <th rowspan="2">BENEFICIOS</th>
                                        <th rowspan="2">DESC. EMPRESA</th>
                                        <th rowspan="2">BUSCAR</th>
                                        
				</tr>
				<tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Responsable</th>
                                        <th>E-mail/Responsable</th>
                                        <th>Tel/Responsable</th>
                                        <th>Fecha Creacion</th>
                                        <th>Pais</th>
                                        <th>Provincia</th>
                                        <th>Ciudad</th>
                                        
                                        <th>Pais</th>
                                        <th>Provincia</th>
                                        <th>Ciudad</th>
				</tr>
                                
                             
			</thead>
			
			<tbody><!--  foreach-->
                            <?php foreach($vacantes as $vacante):?>
				<tr>
					<td><?=$vacante['id']?></td>
                                        <td><?=$vacante["nombre"]?></td>
					<td><?=$vacante['area']['id']?></td>
                                        <td><?=$vacante['area']['nombre']?></td>
                                        <td><?=$vacante['area']['responsable']?></td>
                                        <td><?=$vacante['area']['emailResponsable']?></td>
                                        <td><?=$vacante['area']['telefonoResponsable']?></td>
                                        <td><?=$vacante['area']['fechaCreacion']?></td>
					<td><?=$vacante['subArea']?></td>
                                        <td><?=$vacante['fechaCreacion']?></td>
                                        <td><?=$vacante['fechaCierre']?></td>
                                        <td><?=$vacante['ubicacion']['pais']?></td>
                                        <td><?=$vacante['ubicacion']['provincia']?></td>
                                        <td><?=$vacante['ubicacion']['ciudad']?></td>
                                        <td><?=$vacante['salarioOfrecido']?></td>
                                        <td><?=$vacante['requisitos']?></td>
                                        <td><?=$vacante['beneficios']?></td>
                                        <td><?=$vacante['descripcionEmpresa']?></td>
                                        <td><input type="search" name="nombre" placeholder="BUSCAR POR NOMBRE" style="outline: none; padding: 10px;width: 200px; border-radius: 3px; border: 1px solid #eee; margin: 10px auto;"></td>
				</tr>
                            <?php endforeach; ?>  
			</tbody>
		</table>
