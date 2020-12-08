<div class="container">
	<!--begin::Card-->
	<div class="card card-custom">
		<!--begin::Header-->
		<div class="card-header flex-wrap border-0 pt-6 pb-0">
			<div class="card-title">
				<h3 class="card-label">СПИСОК ПОЛЬЗОВАТЕЛЕЙ ЭСТБ</h3>
			</div>
			<div class="card-toolbar">
				<button type="button" data-toggle="modal" data-target="#newUserModal" class="btn btn-primary font-weight-bolder">
					<i class="fas fa-plus"></i>НОВЫЙ ПОЛЬЗОВАТЕЛЬ
				</button>
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
				<th scope="col">Роль</th>
				<th scope="col">Логин</th>
				<th scope="col">Ф.И.О</th>
				<th scope="col">Статус</th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				<td>Трейдер</td>
				<td>bk02001007</td>
				<td>Кучаров Бахтиёр Бойкобилович</td>
				<td><span class="text-danger">Окончание срока действия</span></td>
				<td>
					<button type="button" data-toggle="modal" data-target="#newUserModal" class="btn btn-warning"><i class="fas fa-edit"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">2</th>
				<td>Администратор</td>
				<td>admin</td>
				<td>Латипов Сухроб Наимжонович</td>
				<td><span class="text-success">Активен</span></td>
				<td>
					<button type="button" data-toggle="modal" data-target="#newUserModal" class="btn btn-warning"><i class="fas fa-edit"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">3</th>
				<td>Аналитик</td>
				<td>analitik</td>
				<td>Бурмистрова Ирина Николаевна</td>
				<td><span class="text-success">Активен</span></td>
				<td>
					<button type="button" data-toggle="modal" data-target="#newUserModal" class="btn btn-warning"><i class="fas fa-edit"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">4</th>
				<td>Бухгалтер</td>
				<td>bux</td>
				<td>Рузметова Рано Рахимбаевна</td>
				<td><span class="text-success">Активен</span></td>
				<td>
					<button type="button" data-toggle="modal" data-target="#newUserModal" class="btn btn-warning"><i class="fas fa-edit"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">5</th>
				<td>Трейдер</td>
				<td>bk1</td>
				<td>Broker</td>
				<td><span class="text-danger">Окончание срока действия</span></td>
				<td>
					<button type="button" data-toggle="modal" data-target="#newUserModal" class="btn btn-warning"><i class="fas fa-edit"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">6</th>
				<td>Трейдер</td>
				<td>bk11</td>
				<td>Broker</td>
				<td><span class="text-danger">Окончание срока действия</span></td>
				<td>
					<button type="button" data-toggle="modal" data-target="#newUserModal" class="btn btn-warning"><i class="fas fa-edit"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">7</th>
				<td>Трейдер</td>
				<td>bk13</td>
				<td>Broker</td>
				<td><span class="text-success">Активен</span></td>
				<td>
					<button type="button" data-toggle="modal" data-target="#newUserModal" class="btn btn-warning"><i class="fas fa-edit"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">8</th>
				<td>Трейдер</td>
				<td>bk15</td>
				<td>Broker</td>
				<td><span class="text-danger">Окончание срока действия</span></td>
				<td>
					<button type="button" data-toggle="modal" data-target="#newUserModal" class="btn btn-warning"><i class="fas fa-edit"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">9</th>
				<td>Трейдер</td>
				<td>bk18</td>
				<td>Broker</td>
				<td><span class="text-danger">Окончание срока действия</span></td>
				<td>
					<button type="button" data-toggle="modal" data-target="#newUserModal" class="btn btn-warning"><i class="fas fa-edit"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">10</th>
				<td>Трейдер</td>
				<td>bk17</td>
				<td>Broker</td>
				<td><span class="text-success">Активен</span></td>
				<td>
					<button type="button" data-toggle="modal" data-target="#newUserModal" class="btn btn-warning"><i class="fas fa-edit"></i></button>
				</td>
			</tr>
		</tbody>
	</table>
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
<div class="modal" tabindex="-1" id="newUserModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">НОВЫЙ ПОЛЬЗОВАТЕЛЬ</h5>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label>Роль<span class="text-danger">*</span></label>
						<select class="form-control">
							<option>(не выбрано)</option>
							<option>Администратор</option>
							<option>Главный маклер</option>
							<option>Трейдер</option>
							<option>Руководитель БК</option>
							<option>Региональный маклер</option>
							<option>Наблюдатель</option>
							<option>Бухгалтер</option>
							<option>Аналитик</option>
							<option>Специалист РКП</option>
							<option>Регистратор ТП</option>
							<option>Помощник главного маклера</option>
							<option>Стажер РКП</option>
							<option>Директор филиала</option>
							<option>Сотрудник биржи</option>
							<option>Участник МТС</option>
							<option>Гендиректор</option>
							<option>Клиент РКП</option>
							<option>Председатель РКП</option>
							<option>Консультант РКП</option>
							<option>Гл. специалист РКП</option>
							<option>Юрист</option>
						</select>
					</div>
					<div class="form-group">
						<label>Филиал<span class="text-danger">*</span></label>
						<select class="form-control">
							<optgroup label="филиалы"><option>AJ "Respublika ko'p tarmoqli agrosanoat birjasi"</option><option>АНДИЖАН</option><option>БУХАРА</option><option>КАРАКАЛПАКСТАН</option><option>КАШКАДАРЬЯ</option><option>НАВОИ</option><option>НАМАНГАН</option><option>САМАРКАНД</option><option>СУРХАНДАРЬЯ</option><option>ФЕРГАНА</option><option>ХОРЕЗМ</option></optgroup><optgroup label="торговые площадки"><option>06-09</option><option value="32">07-02</option><option>08-01</option><option>09-01</option><option>15-02</option><option>16-04</option><option>16-05</option></optgroup>
						</select>
					</div>
					<div class="form-group">
						<label>Статус<span class="text-danger">*</span></label>
						<select class="form-control">
							<option>Активен</option>
							<option>Окончание срока действия</option>
							<option>Нарушение правил торгов</option>
							<option>Неуплата комиссионных сборов</option>
							<option>Неполнота предоставленных документов</option>
							<option>Неактивен по прочим причинам</option>
							<option>Заблокирован руководителем БК</option>
							<option>Нет оплаты брокерского места</option>
							<option>Заблокирован сотрудником РКП</option>
							<option>Заблокирован по вопросу легализации</option>
							<option>Заблокирован по решению зам гендир</option>
						</select>
					</div>
					<div class="form-group">
						<label>Логин<span class="text-danger">*</span></label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group row">
						<label class="col-form-label col-sm-2 pt-0">Пол</label>
						<div class="col-sm-10">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio">
								<label class="form-check-label">мужской</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio">
								<label class="form-check-label">женский</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>ФИО пользователя<span class="text-danger">*</span></label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Паспорт №<span class="text-danger">*</span></label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Адрес<span class="text-danger">*</span></label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Телефон<span class="text-danger">*</span></label>
						<input type="text" class="form-control">
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
				<button type="button" class="btn btn-primary">Сохранить</button>
			</div>
		</div>
	</div>
</div>

		</div>
		<!--end::Body-->
	</div>
	<!--end::Card-->
</div>

<?php $script='<script src="/sebt/assets/js/pages/custom/user/list-datatable.js"></script>'; ?>