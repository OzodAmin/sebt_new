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
				<h3 class="card-label">СПИСОК ЧЛЕНОВ БИРЖИ</h3>
			</div>
		</div>
		<!--end::Header-->
		<!--begin::Body-->
		<div class="card-body">
<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th scope="col">№</th>
				<th scope="col">Номер</th>
				<th scope="col">Наименование</th>
				<th scope="col">Юридический адрес</th>
				<th scope="col">Филиал</th>
				<th scope="col">Статус</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				<td>02001007</td>
				<td><a href="/sebt/pages/bk_view.php?role=moderator&back=moderator_bk_list.php">MChJ "ULUG-EL"</a></td>
				<td>AJ "Respublika ko'p tarmoqli agrosanoat birjasi"</td>
				<td>Паркентский р-н, п.Хисарак</td>
				<td><span class="text-success">Активен</span></td>
			</tr>
			<tr>
				<th scope="row">2</th>
				<td>02001007</td>
				<td><a href="/sebt/pages/bk_view.php?role=moderator&back=moderator_bk_list.php">XK "AKROM-EZOZ SERVIS"</a></td>
				<td>AJ "Respublika ko'p tarmoqli agrosanoat birjasi"</td>
				<td>Кибрайский р-н, ул.Сичков</td>
				<td><span class="text-success">Активен</span></td>
			</tr>
			<tr>
				<th scope="row">3</th>
				<td>02001007</td>
				<td><a href="/sebt/pages/bk_view.php?role=moderator&back=moderator_bk_list.php">MChJ "QIBRAY MADAD SERVIS"</a></td>
				<td>AJ "Respublika ko'p tarmoqli agrosanoat birjasi"</td>
				<td>г.Карши ул.Таймир 34</td>
				<td><span class="text-success">Активен</span></td>
			</tr>
			<tr>
				<th scope="row">4</th>
				<td>02001007</td>
				<td><a href="/sebt/pages/bk_view.php?role=moderator&back=moderator_bk_list.php">XK "FALAK-SARI"</a></td>
				<td>AJ "Respublika ko'p tarmoqli agrosanoat birjasi"</td>
				<td>г.Карши 3-микрорайон</td>
				<td><span class="text-warning">Новый член биржи</span></td>
			</tr>
			<tr>
				<th scope="row">5</th>
				<td>02001007</td>
				<td><a href="/sebt/pages/bk_view.php?role=moderator&back=moderator_bk_list.php">MChJ "ASL ZAMON QURILISH"</a></td>
				<td>AJ "Respublika ko'p tarmoqli agrosanoat birjasi"</td>
				<td>Чирокчинский р-н ул.У.Бозоров 70</td>
				<td><span class="text-warning">Новый член биржи</span></td>
			</tr>
			<tr>
				<th scope="row">6</th>
				<td>02001007</td>
				<td><a href="/sebt/pages/bk_view.php?role=moderator&back=moderator_bk_list.php">MChJ "KASPIY INVEST"</a></td>
				<td>AJ "Respublika ko'p tarmoqli agrosanoat birjasi"</td>
				<td>Чирокчинский р-н ул.У.Бозоров 70</td>
				<td><span class="text-danger">Отказан</span></td>
			</tr>
			<tr>
				<th scope="row">7</th>
				<td>02001007</td>
				<td><a href="/sebt/pages/bk_view.php?role=moderator&back=moderator_bk_list.php">XF "UMAROV ERKIN MUYSINOVICH"</a></td>
				<td>AJ "Respublika ko'p tarmoqli agrosanoat birjasi"</td>
				<td>Чирокчинский р-н ул.У.Бозоров 70</td>
				<td><span class="text-danger">Неуплата комиссионных сборов</span></td>
			</tr>
			<tr>
				<th scope="row">8</th>
				<td>02001007</td>
				<td><a href="/sebt/pages/bk_view.php?role=moderator&back=moderator_bk_list.php">XK "BROK-MADINA"</a></td>
				<td>AJ "Respublika ko'p tarmoqli agrosanoat birjasi"</td>
				<td>Чирокчинский р-н ул.У.Бозоров 70</a></td>
				<td><span class="text-danger">Неполнота предоставленных документов</span></td>
			</tr>
			<tr>
				<th scope="row">9</th>
				<td>02001007</td>
				<td><a href="/sebt/pages/bk_view.php?role=moderator&back=moderator_bk_list.php">FIRMA "ALMUROD NABIRASI JAXONGIR"</a></td>
				<td>AJ "Respublika ko'p tarmoqli agrosanoat birjasi"</td>
				<td>Чирокчинский р-н ул.У.Бозоров 70</td>
				<td><span class="text-danger">Неактивен по прочим причинам</span></td>
			</tr>
			<tr>
				<th scope="row">10</th>
				<td>02001007</td>
				<td><a href="/sebt/pages/bk_view.php?role=moderator&back=moderator_bk_list.php">XK "ELNUR UNIVERSAL BROK"</a></td>
				<td>AJ "Respublika ko'p tarmoqli agrosanoat birjasi"</td>
				<td>Чирокчинский р-н ул.У.Бозоров 70</td>
				<td><span class="text-danger">Заблокирован сотрудником РКП</span></td>
			</tr>
		</tbody>
	</table>
</div>

</div>
		<!--end::Body-->
	</div>
<?php require_once '../footer.php'; ?>