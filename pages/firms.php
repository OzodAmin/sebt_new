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
					<div class="dropdown">
						<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Операции</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="/sebt/pages/firms_new.php">
								<span data-toggle="tooltip" data-placement="left" title="Редактировать">
									<i class="fas fa-edit text-warning"></i>
								</span>
							</a>
							<a class="dropdown-item" data-toggle="modal" data-target="#antiterror" href="#">
								<span data-toggle="tooltip" data-placement="left" title="Назначить ответственного за антитеррор">
									<i class="fas fa-user text-info"></i>
								</span>
							</a>
							<a class="dropdown-item" href="/sebt/pages/users_new.php">
								<span data-toggle="tooltip" data-placement="left" title="Добавить брокера">
									<i class="fas fa-plus text-success"></i>
								</span>
							</a>
						</div>
					</div>
					<!-- <a href="/sebt/pages/firms_new.php" class="btn btn-warning mr-2"><i class="fas fa-edit"></i></a>
					<button type="button" data-toggle="modal" data-target="#antiterror" class="btn btn-info"><i class="fas fa-user"></i></button> -->
				</td>
			</tr>
			<tr>
				<th scope="row">2</th>
				<td>02001007</td>
				<td><a href="/sebt/pages/firms_view.php">XK "AKROM-EZOZ SERVIS"</a></td>
				<td>Кибрайский р-н, ул.Сичков</td>
				<td><span class="text-success">Активен</span></td>
				<td>
					<span data-toggle="tooltip" data-placement="top" title="Редактировать">
						<a href="/sebt/pages/firms_new.php" class="btn btn-warning mr-2"><i class="fas fa-edit"></i></a>
					</span>
					<span data-toggle="tooltip" data-placement="top" title="Назначить ответственного за антитеррор">
						<button type="button" data-toggle="modal" data-target="#antiterror" class="btn btn-info mr-2"><i class="fas fa-user"></i></button>
					</span>
					<span data-toggle="tooltip" data-placement="top" title="Добавить брокера">
						<a href="/sebt/pages/users_new.php" class="btn btn-success"><i class="fas fa-plus"></i></a>
					</span>
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
				<td><span class="text-danger">Окончание срока действия</span></td>
				<td>
					<a href="/sebt/pages/firms_new.php" class="btn btn-warning"><i class="fas fa-edit"></i></a>
				</td>
			</tr>
			<tr>
				<th scope="row">6</th>
				<td>02001007</td>
				<td><a href="/sebt/pages/firms_view.php">MChJ "KASPIY INVEST"</a></td>
				<td>Чирокчинский р-н ул.У.Бозоров 70</td>
				<td><span class="text-danger">Окончание срока действия</span></td>
				<td>
					<a href="/sebt/pages/firms_new.php" class="btn btn-warning"><i class="fas fa-edit"></i></a>
				</td>
			</tr>
			<tr>
				<th scope="row">7</th>
				<td>02001007</td>
				<td><a href="/sebt/pages/firms_view.php">XF "UMAROV ERKIN MUYSINOVICH"</a></td>
				<td>Чирокчинский р-н ул.У.Бозоров 70</td>
				<td><span class="text-danger">Окончание срока действия</span></td>
				<td>
					<a href="/sebt/pages/firms_new.php" class="btn btn-warning"><i class="fas fa-edit"></i></a>
				</td>
			</tr>
			<tr>
				<th scope="row">8</th>
				<td>02001007</td>
				<td><a href="/sebt/pages/firms_view.php">XK "BROK-MADINA"</td>
				<td>Чирокчинский р-н ул.У.Бозоров 70</a></td>
				<td><span class="text-danger">Окончание срока действия</span></td>
				<td>
					<a href="/sebt/pages/firms_new.php" class="btn btn-warning"><i class="fas fa-edit"></i></a>
				</td>
			</tr>
			<tr>
				<th scope="row">9</th>
				<td>02001007</td>
				<td><a href="/sebt/pages/firms_view.php">FIRMA "ALMUROD NABIRASI JAXONGIR"</a></td>
				<td>Чирокчинский р-н ул.У.Бозоров 70</td>
				<td><span class="text-danger">Окончание срока действия</span></td>
				<td>
					<a href="/sebt/pages/firms_new.php" class="btn btn-warning"><i class="fas fa-edit"></i></a>
				</td>
			</tr>
			<tr>
				<th scope="row">10</th>
				<td>02001007</td>
				<td><a href="/sebt/pages/firms_view.php">XK "ELNUR UNIVERSAL BROK"</a></td>
				<td>Чирокчинский р-н ул.У.Бозоров 70</td>
				<td><span class="text-danger">Окончание срока действия</span></td>
				<td>
					<a href="/sebt/pages/firms_new.php" class="btn btn-warning"><i class="fas fa-edit"></i></a>
				</td>
			</tr>
		</tbody>
	</table>
</div>
<div class="modal fade" id="antiterror" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Соглашение "антитеррор"</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i aria-hidden="true" class="ki ki-close"></i>
				</button>
			</div>
			<form class="form">
				<div class="modal-body">
					<div class="form-group row">
						<label class="col-form-label text-right col-lg-3 col-sm-12">Ответственный<span class="text-danger">*</span></label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<select class="form-control">
								<option>Эгамбердиев Комилжон Ашурович</option>
								<option>Исаев Акбар Эргашевич</option>
								<option>Сохибов Лазиз Ахадович</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-form-label text-right col-lg-3 col-sm-12">Приказ №<span class="text-danger">*</span></label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<input type="text" class="form-control"/>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-form-label text-right col-lg-3 col-sm-12">от</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<div class="input-group date">
								<input type="text" class="form-control"/>
								<div class="input-group-append">
									<span class="input-group-text">
										<i class="la la-calendar"></i>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-form-label text-right col-lg-3 col-sm-12">2038 приказ</label>
						<div class="col-9">
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="customFile">
								<label class="custom-file-label" for="customFile"><i class="fas fa-paperclip"></i>&nbsp;<?=$lang['16'];?></label>
							</div>
							<span class="form-text text-muted">Прикрепите отсканированный документ</span>
						</div>
					</div>
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary mr-2" data-dismiss="modal">Отмена</button>
					<button type="button" class="btn btn-primary">Сохранить</button>
				</div>
			</form>
		</div>
	</div>
</div>
<nav aria-label="Page navigation example">
	<ul class="pagination justify-content-end">
		<li class="page-item disabled">
			<a class="page-link" href="#" tabindex="-1" aria-disabled="true">
				<span aria-hidden="true">&laquo;</span>
			</a>
		</li>
		<li class="page-item"><a class="page-link" href="#">1</a></li>
		<li class="page-item"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item">
			<a class="page-link" href="#">
				<span aria-hidden="true">&raquo;</span>
			</a>
		</li>
	</ul>
</nav>

		</div>
		<!--end::Body-->
	</div>
<?php require_once '../footer.php'; ?>