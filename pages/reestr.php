<?php 
require_once "../lang/ru.php";
require_once '../header.php';
require_once '../sidebar.php';
?>
	<div class="card card-custom">
		<div class="card-header flex-wrap border-0 pt-6 pb-0">
			<div class="card-title">
				<h3 class="card-label">Реестр оплаченных сделок</h3>
			</div>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="text-nowrap table table-hover">
					<thead>
						<tr class="text-center align-middle">
							<th scope="col" rowspan="2">№ договора</th>
							<th scope="col" rowspan="2">Покупатель</th>
							<th scope="col" rowspan="2">Товар</th>
							<th scope="col" rowspan="2">Сумма</th>
							<th scope="col" colspan="2">Оплата</th>
							<th scope="col" rowspan="2">Свобод. ср-ва</th>
							<th scope="col" colspan="4">Реализация</th>
							<th scope="col" rowspan="2">Статус</th>
						</tr>
						<tr class="text-center">
							<th scope="col">Сумма</th>
							<th scope="col">%</th>
							<th scope="col">Сумма</th>
							<th scope="col">Цена</th>
							<th scope="col">Реализ</th>
							<th scope="col">Остаток</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>0102/18-Б</td>
							<td>
								ООО "MAHSULOT TRANZIT INVEST" 
								<br><span class="text-danger">БК № 449</span>
							</td>
							<td><a href="/sebt/pages/reestr_view.php">
								Мыло хозяйственное - 350 гр. 60%
								<br><span class="text-danger">срок поставки 28.02.2019 г.</span></a>
							</td>
							<td>916 133 400,00<br><span class="text-danger">сум</span></td>
							<td>916 133 400,00<br><span class="text-danger">сум</span></td>
							<td>100,00</td>
							<td>0,00<br><span class="text-danger">сум</span></td>
							<td>916 133 400,00<br><span class="text-danger">сум</span></td>
							<td>2 450,00<br><span class="text-danger">сум</span></td>
							<td>373 920<br><span class="text-danger">сум</span></td>
							<td>12<br><span class="text-danger">сум</span></td>
							<td><span class="label label-success label-inline font-weight-bolder ">закрытый</span></td>
							<td></td>
						</tr>
						<tr>
							<td>0102/18-Б</td>
							<td>
								ООО "MAHSULOT TRANZIT INVEST" 
								<br><span class="text-danger">БК № 449</span>
							</td>
							<td><a href="/sebt/pages/reestr_view.php">
								Мыло хозяйственное - 350 гр. 60%
								<br><span class="text-danger">срок поставки 28.02.2019 г.</span></a>
							</td>
							<td>916 133 400,00<br><span class="text-danger">сум</span></td>
							<td>916 133 400,00<br><span class="text-danger">сум</span></td>
							<td>10,00</td>
							<td>1 246 821,00<br><span class="text-danger">сум</span></td>
							<td>916 133 400,00<br><span class="text-danger">сум</span></td>
							<td>2 450,00<br><span class="text-danger">сум</span></td>
							<td>373 920<br><span class="text-danger">сум</span></td>
							<td>12<br><span class="text-danger">сум</span></td>
							<td><span class="label label-warning label-inline font-weight-bolder ">действующий</span></td>
							<td></td>
						</tr>
						<tr>
							<td>0102/18-Б</td>
							<td>
								ООО "MAHSULOT TRANZIT INVEST" 
								<br><span class="text-danger">БК № 449</span>
							</td>
							<td><a href="/sebt/pages/reestr_view.php">
								Мыло хозяйственное - 350 гр. 60%
								<br><span class="text-danger">срок поставки 28.02.2019 г.</span></a>
							</td>
							<td>916 133 400,00<br><span class="text-danger">сум</span></td>
							<td>916 133 400,00<br><span class="text-danger">сум</span></td>
							<td>100,00</td>
							<td>12 361,00<br><span class="text-danger">сум</span></td>
							<td>916 133 400,00<br><span class="text-danger">сум</span></td>
							<td>2 450,00<br><span class="text-danger">сум</span></td>
							<td>373 920<br><span class="text-danger">сум</span></td>
							<td>12<br><span class="text-danger">сум</span></td>
							<td><span class="label label-light label-inline font-weight-bolder "> оплата 100%</span></td>
							<td></td>
						</tr>
						<tr>
							<td>0102/18-Б</td>
							<td>
								ООО "MAHSULOT TRANZIT INVEST" 
								<br><span class="text-danger">БК № 449</span>
							</td>
							<td><a href="/sebt/pages/reestr_view.php">
								Мыло хозяйственное - 350 гр. 60%
								<br><span class="text-danger">срок поставки 28.02.2019 г.</span></a>
							</td>
							<td>916 133 400,00<br><span class="text-danger">сум</span></td>
							<td>916 133 400,00<br><span class="text-danger">сум</span></td>
							<td>100,00</td>
							<td>0,00<br><span class="text-danger">сум</span></td>
							<td>916 133 400,00<br><span class="text-danger">сум</span></td>
							<td>2 450,00<br><span class="text-danger">сум</span></td>
							<td>373 920<br><span class="text-danger">сум</span></td>
							<td>12<br><span class="text-danger">сум</span></td>
							<td><span class="label label-secondary label-inline font-weight-bolder ">аннулированный</span></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>

		</div>
		<!--end::Body-->
	</div>
<?php require_once '../footer.php';?>