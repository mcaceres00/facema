					<li class="active"><a href="./?View=Inicio"><i class="icon-home4"></i> <span>Inicio</span></a></li>

					<?php  if($tipo_usuario == '1'){ ?>
						
						<!-- Ajustes -->
						<li>
							<a href="#"><i class="icon-cog2"></i> <span>Parametros Generales</span></a>
							<ul>
								<li><a href="./?View=Parametros">Datos de la empresa</a></li>
								<li><a href="./?View=Empleados">Empleados</a></li>
								<li><a href="./?View=Usuario">Usuarios</a></li>
								<li><a href="./?View=Monedas">Monedas</a></li>
								<li><a href="./?View=Tipo-Comprobante">Tipos de Comprobantes</a></li>
								<li><a href="./?View=Tirajes">Tiraje de Comprobantes</a></li>

							</ul>
						</li>
						<!-- /Ajustes -->					
					<!-- Compras -->
						<li>
							<a href="#"><i class="icon-truck"></i> <span>Compras</span></a>
							<ul>
								<li><a href="./?View=Proveedor">Proveedores</a></li>
								<li><a href="./?View=Compras">Realizar Compras</a></li>
								<li><a href="./?View=Compras-Fecha">Consultar Compras por Fecha</a></li>
								<li><a href="./?View=Compras-Mes">Consultar Compras por Mes</a></li>
								<li><a href="./?View=Historico-Precios">Historial de Precios</a></li>
							</ul>
						</li>
                    <!-- /Compras -->

					<!-- Ventas -->
					   <li>
							<a href="#"><i class="icon-cart"></i> <span>Ventas</span></a>
							<ul>
								<li><a href="./?View=Clientes">Clientes</a></li>
								<li><a href="./?View=Caja">Administrar Caja</a></li>
								<li><a href="./?View=Historico-Caja">Historial de Caja</a></li>
								<li><a href="./?View=POS">Realizar Ventas</a></li>
								<li><a href="./?View=Venta-Diaria">Consultar Ventas del Dia</a></li>
								<li><a href="./?View=Ventas-Fecha">Consultar Ventas por Fecha</a></li>
								<li><a href="./?View=Ventas-Mes">Consultar Ventas por Mes</a></li>
							</ul>
						</li>
					<!-- /Ventas -->

					<!-- Almacen -->
						<li>
							<a href="#"><i class="icon-box"></i> <span>Stock</span></a>
							<ul>
								<li><a href="./?View=Categoria">Categoria</a></li>
								<li><a href="./?View=Presentacion">Presentacion</a></li>
								<li><a href="./?View=Marca">Marca</a></li>
								<li><a href="./?View=Producto">Producto</a></li>
								<li><a href="./?View=Perecederos">Perecederos</a></li>
								<li><a href="./?View=Abrir-Inventario">Abrir Nuevo Inventario</a></li>
								<li><a href="./?View=Kardex">Kardex</a></li>

							</ul>
						</li>
					<!-- /Almacen -->

				    <!-- /Acera de -->
						<li>
							<a href="./?View=Acerca-de"><i class="icon-info22"></i> <span> Acerca de </span></a>
						</li>
				    <!--Acerca de  -->

					<?php } else { ?>

						<!-- Almacen -->
						<li>
							<a href="#"><i class="icon-box"></i> <span>Almacen</span></a>
							<ul>
								<li><a href="./?View=Producto">Producto</a></li>
							</ul>
						</li>
						<!-- /Almacen -->

						<!-- Caja -->
						<li>
							<a href="#"><i class="icon-cash3"></i> <span>Caja</span></a>
							<ul>
								<li><a href="./?View=Caja">Administrar Caja</a></li>
							</ul>
						</li>
						<!-- /Caja -->

						<!-- Ventas -->
						<li>
							<a href="#"><i class="icon-cart"></i> <span>Ventas</span></a>
							<ul>
								<li><a href="./?View=Clientes">Clientes</a></li>
								<li><a href="./?View=POS">Punto de Venta</a></li>
								<li><a href="./?View=Venta-Diaria">Consultar Ventas del Dia</a></li>
								<li><a href="./?View=Ventas-Fecha">Consultar Ventas por Fecha</a></li>
								<li><a href="./?View=Ventas-Mes">Consultar Ventas por Mes</a></li>
							</ul>
						</li>
						<!-- /Ventas -->

						<!-- Creditos -->
						<li>
							<a href="#"><i class="icon-coins"></i> <span>Ventas al Credito</span></a>
							<ul>
								<li><a href="./?View=Creditos">Administrar Creditos</a></li>
							</ul>
						</li>
						<!-- /Creditos -->

						<!-- Inventario -->
						<li>
							<a href="#"><i class="icon-grid6"></i> <span>Inventario</span></a>
							<ul>
								<li><a href="./?View=Kardex">Kardex</a></li>
							</ul>
						</li>
						<!-- /Inventario -->

						<!-- /Acera de -->
						<li>
							<a href="./?View=Acerca-de"><i class="icon-info22"></i> <span> Acerca de </span></a>
						</li>
						<!--Acerca de  -->

					<?php } ?>
