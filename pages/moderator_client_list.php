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
				<h3 class="card-label">Список клиентов-резидентов</h3>
			</div>
		</div>
		<!--end::Header-->
		<!--begin::Body-->
		<div class="card-body">
<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th scope="col" rowspan="2">№</th>
				<th scope="col" rowspan="2">Дата регистрации</th>
				<th scope="col" rowspan="2">Наименование</th>
				<th scope="col" rowspan="2">ИНП</th>
				<th scope="col" rowspan="2">Филиал</th>
				<th scope="col" colspan="3" class="text-center">Состояние счета</th>
				<th scope="col" rowspan="2">Статус</th>
			</tr>
			<tr>
				<th scope="col">Всего</th>
				<th scope="col">Бронь</th>
				<th scope="col">Свободно</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				<td>12.12.2020 г.</td>
				<td><a href="/sebt/pages/client_view.php?role=moderator&back=moderator_client_list.php">MChJ "ULUG-EL"</a></td>
				<td>306593983</td>
				<td>-</td>
				<td>0,00</td>
				<td>0,00</td>
				<td>0,00</td>
				<td><span class="text-warning">Новый клиент</span></td>
			</tr>
			<tr>
				<th scope="row">2</th>
				<td>12.12.2020 г.</td>
				<td><a href="/sebt/pages/client_view.php?role=moderator&back=moderator_client_list.php">MChJ "ULUG-EL" <p class="text-center text-danger">БК-544.</p></a></td>
				<td>306593983</td>
				<td>AJ "Respublika ko'p tarmoqli agrosanoat birjasi"</td>
				<td>13 056 254 553,20</td>
				<td>7 957 415 116,20</td>
				<td>5 098 839 437,00</td>
				<td><span class="text-success">Активен</span></td>
			</tr>
			<tr>
				<th scope="row">3</th>
				<td>12.12.2020 г.</td>
				<td><a href="/sebt/pages/client_view.php?role=moderator&back=moderator_client_list.php">MChJ "ULUG-EL" <p class="text-center text-danger">БК-544.</p></a></td>
				<td>306593983</td>
				<td>AJ "Respublika ko'p tarmoqli agrosanoat birjasi"</td>
				<td>0,00</td>
				<td>0,00</td>
				<td>0,00</td>
				<td><span class="text-danger">Заблокирован</span></td>
			</tr>
		</tbody>
	</table>
</div>

</div>
		<!--end::Body-->
	</div>
<?php require_once '../footer.php'; ?>