<?php 
require_once "../lang/ru.php";
require_once '../header.php';
require_once '../sidebar.php';
?>
	<!--begin::Card-->
	<div class="card card-custom">
		<!--begin::Header-->
		<div class="card-header flex-wrap border-0 pt-6 pb-0">
			<div class="card-title">
				<h3 class="card-label">СПИСОК НЕУТВЕРЖДЕННЫХ ЗАЯВОК</h3>
			</div>
		</div>
		<div class="card-body">
<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th scope="col">№</th>
				<th scope="col">БК</th>
				<th scope="col">Филиал</th>
				<th scope="col">Тип</th>
				<th scope="col">Наименование</th>
				<th scope="col">Кол-во</th>
				<th scope="col">Цена</th>
				<th scope="col">Сумма</th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>801</td>
				<td>361</td>
				<td>РУАПБ</td>
				<td>Реализация</td>
				<td>Шерстяное одеяло ведомственное синего цвета с тремя черными поперечными полосками двусторонней ворсовой поверхностью . Изделие соответствует ГОСТ 9382<br><span class="text-danger">Текстильная продукция</span></td>
				<td>500<br><span class="text-danger">т</span></td>
				<td>500<br><span class="text-danger">доллар США</span></td>
				<td>250 000 000<br><span class="text-danger">сум</span></td>
				<td>
					<a href="/sebt/pages/offer_comfirm_edit.php" class="btn btn-warning"><i class="fas fa-edit"></i></a>
				</td>
			</tr>
			<tr>
				<td>232</td>
				<td>351</td>
				<td>РУАПБ</td>
				<td>Реализация</td>
				<td>Мясо говяжье замороженные в четвертях на кости 1 категории ГОСТ 779-55<br><span class="text-danger">Сельхозпродукция и продукция её переработки</span></td>
				<td>500<br><span class="text-danger">т</span></td>
				<td>500<br><span class="text-danger">сум</span></td>
				<td>250 000 000<br><span class="text-danger">сум</span></td>
				<td>
					<a href="/sebt/pages/offer_comfirm_edit.php" class="btn btn-warning"><i class="fas fa-edit"></i></a>
				</td>
			</tr>
		</tbody>
	</table>
</div>
		</div>
	</div>

<?php require_once '../footer.php'; ?>