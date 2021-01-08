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
			<div class="card-toolbar">
				<a href="/sebt/pages/firms_new.php" class="btn btn-primary font-weight-bolder">
					<i class="fas fa-plus"></i>НОВЫЙ ЧЛЕН БИРЖИ
				</a>
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
				<th scope="col">Статус</th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				<td>02001007</td>
				<td><a href="/sebt/pages/firms_view.php">MChJ "ULUG-EL"</a></td>
				<td>Паркентский р-н, п.Хисарак</td>
				<td><span class="text-success">Активен</span></td>
				<td>
					<a href="/sebt/pages/firms_new.php" class="btn btn-warning"><i class="fas fa-edit"></i></a>
				</td>
			</tr>
			<tr>
				<th scope="row">2</th>
				<td>02001007</td>
				<td><a href="/sebt/pages/firms_view.php">XK "AKROM-EZOZ SERVIS"</a></td>
				<td>Кибрайский р-н, ул.Сичков</td>
				<td><span class="text-success">Активен</span></td>
				<td>
					<a href="/sebt/pages/firms_new.php" class="btn btn-warning"><i class="fas fa-edit"></i></a>
				</td>
			</tr>
			<tr>
				<th scope="row">3</th>
				<td>02001007</td>
				<td><a href="/sebt/pages/firms_view.php">MChJ "QIBRAY MADAD SERVIS"</a></td>
				<td>г.Карши ул.Таймир 34</td>
				<td><span class="text-success">Активен</span></td>
				<td>
					<a href="/sebt/pages/firms_new.php" class="btn btn-warning"><i class="fas fa-edit"></i></a>
				</td>
			</tr>
			<tr>
				<th scope="row">4</th>
				<td>02001007</td>
				<td><a href="/sebt/pages/firms_view.php">XK "FALAK-SARI"</a></td>
				<td>г.Карши 3-микрорайон</td>
				<td><span class="text-success">Активен</span></td>
				<td>
					<a href="/sebt/pages/firms_new.php" class="btn btn-warning"><i class="fas fa-edit"></i></a>
				</td>
			</tr>
			<tr>
				<th scope="row">5</th>
				<td>02001007</td>
				<td><a href="/sebt/pages/firms_view.php">MChJ "ASL ZAMON QURILISH"</a></td>
				<td>Чирокчинский р-н ул.У.Бозоров 70</td>
				<td><span class="text-warning">Новый член биржи</span></td>
				<td>
					<a href="/sebt/pages/firms_new.php" class="btn btn-warning"><i class="fas fa-edit"></i></a>
				</td>
			</tr>
			<tr>
				<th scope="row">6</th>
				<td>02001007</td>
				<td><a href="/sebt/pages/firms_view.php">MChJ "KASPIY INVEST"</a></td>
				<td>Чирокчинский р-н ул.У.Бозоров 70</td>
				<td><span class="text-danger">Нарушение правил торгов</span></td>
				<td>
					<a href="/sebt/pages/firms_new.php" class="btn btn-warning"><i class="fas fa-edit"></i></a>
				</td>
			</tr>
			<tr>
				<th scope="row">7</th>
				<td>02001007</td>
				<td><a href="/sebt/pages/firms_view.php">XF "UMAROV ERKIN MUYSINOVICH"</a></td>
				<td>Чирокчинский р-н ул.У.Бозоров 70</td>
				<td><span class="text-danger">Неуплата комиссионных сборов</span></td>
				<td>
					<a href="/sebt/pages/firms_new.php" class="btn btn-warning"><i class="fas fa-edit"></i></a>
				</td>
			</tr>
			<tr>
				<th scope="row">8</th>
				<td>02001007</td>
				<td><a href="/sebt/pages/firms_view.php">XK "BROK-MADINA"</td>
				<td>Чирокчинский р-н ул.У.Бозоров 70</a></td>
				<td><span class="text-danger">Неполнота предоставленных документов</span></td>
				<td>
					<a href="/sebt/pages/firms_new.php" class="btn btn-warning"><i class="fas fa-edit"></i></a>
				</td>
			</tr>
			<tr>
				<th scope="row">9</th>
				<td>02001007</td>
				<td><a href="/sebt/pages/firms_view.php">FIRMA "ALMUROD NABIRASI JAXONGIR"</a></td>
				<td>Чирокчинский р-н ул.У.Бозоров 70</td>
				<td><span class="text-danger">Неактивен по прочим причинам</span></td>
				<td>
					<a href="/sebt/pages/firms_new.php" class="btn btn-warning"><i class="fas fa-edit"></i></a>
				</td>
			</tr>
			<tr>
				<th scope="row">10</th>
				<td>02001007</td>
				<td><a href="/sebt/pages/firms_view.php">XK "ELNUR UNIVERSAL BROK"</a></td>
				<td>Чирокчинский р-н ул.У.Бозоров 70</td>
				<td><span class="text-danger">Заблокирован сотрудником РКП</span></td>
				<td>
					<a href="/sebt/pages/firms_new.php" class="btn btn-warning"><i class="fas fa-edit"></i></a>
				</td>
			</tr>
		</tbody>
	</table>
</div>

</div>
		<!--end::Body-->
	</div>
<?php require_once '../footer.php'; ?>