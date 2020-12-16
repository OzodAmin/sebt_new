<?php 
require_once "../lang/ru.php";
require_once '../header.php';
require_once '../sidebar.php';
?>	<!--begin::Card-->
	<div class="card card-custom">
		<!--begin::Header-->
		<div class="card-header flex-wrap border-0 pt-6 pb-0">
			<h3 class="card-title align-items-start flex-column">
				<span class="card-label font-weight-bolder text-dark h3">Список моих аукционов</span>
				<span class="mt-3 font-weight-bold font-size-m">13.12.2020 15:02:41 <span class="text-danger">2-я торговая сессия</span></span>
				
			</h3>
		</div>
		<!--end::Header-->
		<!--begin::Body-->
		<div class="card-body">
<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th scope="col" class="align-middle text-center">№</th>
				<th scope="col" class="align-middle text-center">Поз.</th>
				<th scope="col" class="align-middle text-center">Товар</th>
				<th scope="col" class="align-middle text-center">У-ки</th>
				<th scope="col" class="align-middle text-center">Клиент</th>
				<th scope="col" class="align-middle text-center">Ваша цена</th>
				<th scope="col" class="align-middle text-center">Нынешная цена товара</th>
				<th scope="col" class="align-middle text-center">Купить</th>
				<th scope="col" class="align-middle text-center"></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>261</td>
				<td>12</td>
				<td><a href="/sebt/pages/buyView.php">Уголь марки Б3 Сарыкольский производство Казахстан фракция 50-200 мм<br><span class="text-danger">Энергоносители</span></a></td>
				<td>6</td>
				<td>AKUMSHIN SAVDO</td>
				<td>45 000 Сум</td>
				<td><span class="text-danger">46 500 Сум</span></td>
				<td>
					<div class="input-group">
						<input type="text" class="form-control">
						<div class="input-group-append">
							<button class="btn-primary btn" type="button">Подтверждение</button>
						</div>
					</div>
				</td>
				<td><a href="/sebt/pages/buyView.php" class="btn btn-warning"><i class="fas fa-eye"></i></a></td>
			</tr>
			<tr>
				<td>379</td>
				<td>12</td>
				<td><a href="/sebt/pages/buyView.php">Гидронасос BOSCH REXROTH 11VLO 190DRS/11R <br><span class="text-danger">Металлы, металлопрокат</span></a></td>
				<td>11</td>
				<td>ООО "PLASTEKS"</td>
				<td>11 000 Сум</td>
				<td><span class="text-success">11 000 Сум</span></td>
				<td>
					<div class="input-group">
						<input type="text" class="form-control">
						<div class="input-group-append">
							<button class="btn-primary btn" type="button">Подтверждение</button>
						</div>
					</div>
				</td>
				<td><a href="/sebt/pages/buyView.php" class="btn btn-warning"><i class="fas fa-eye"></i></a></td>
			</tr>
			<tr>
				<td>261</td>
				<td>12</td>
				<td><a href="/sebt/pages/buyView.php">Уголок 63х63х5,0 ГОСТ 8509.<br><span class="text-danger">Прочее</span></a></td>
				<td>3</td>
				<td>ООО "DAVRON BOBO"</td>
				<td>8 165 Сум</td>
				<td><span class="text-danger">8 200 Сум</span></td>
				<td>
					<div class="input-group">
						<input type="text" class="form-control">
						<div class="input-group-append">
							<button class="btn-primary btn" type="button">Подтверждение</button>
						</div>
					</div>
				</td>
				<td><a href="/sebt/pages/buyView.php" class="btn btn-warning"><i class="fas fa-eye"></i></a></td>	
			</tr>
		</tbody>
	</table>
</div>

		</div>
		<!--end::Body-->
	</div>
<?php require_once '../footer.php'; ?>