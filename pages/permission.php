<div class="container">
	<!--begin::Card-->
	<div class="card card-custom">
		<!--begin::Header-->
		<div class="card-header flex-wrap border-0 pt-6 pb-0">
			<div class="card-title">
				<h3 class="card-label">СПИСОК РОЛЕЙ ПОЛЬЗОВАТЕЛЕЙ</h3>
			</div>
			<div class="card-toolbar">
				<button type="button" data-toggle="modal" data-target="#newUserModal" class="btn btn-primary font-weight-bolder">
					<i class="fas fa-plus"></i>НОВЫЙ Права доступа
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
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				<td>Главный маклер</td>
				<td>
					<button type="button" data-toggle="modal" data-target="#rolesPermission" class="btn btn-warning"><i class="fas fa-edit"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">2</th>
				<td>Администратор</td>
				<td>
					<button type="button" data-toggle="modal" data-target="#rolesPermission" class="btn btn-warning"><i class="fas fa-edit"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">3</th>
				<td>Трейдер</td>
				<td>
					<button type="button" data-toggle="modal" data-target="#rolesPermission" class="btn btn-warning"><i class="fas fa-edit"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">4</th>
				<td>Руководитель БК</td>
				<td>
					<button type="button" data-toggle="modal" data-target="#rolesPermission" class="btn btn-warning"><i class="fas fa-edit"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">5</th>
				<td>Наблюдатель</td>
				<td>
					<button type="button" data-toggle="modal" data-target="#rolesPermission" class="btn btn-warning"><i class="fas fa-edit"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">6</th>
				<td>Бухгалтер</td>
				<td>
					<button type="button" data-toggle="modal" data-target="#rolesPermission" class="btn btn-warning"><i class="fas fa-edit"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">7</th>
				<td>Региональный маклер</td>
				<td>
					<button type="button" data-toggle="modal" data-target="#rolesPermission" class="btn btn-warning"><i class="fas fa-edit"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">8</th>
				<td>Аналитик</td>
				<td>
					<button type="button" data-toggle="modal" data-target="#rolesPermission" class="btn btn-warning"><i class="fas fa-edit"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">9</th>
				<td>Специалист РКП</td>
				<td>
					<button type="button" data-toggle="modal" data-target="#rolesPermission" class="btn btn-warning"><i class="fas fa-edit"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">10</th>
				<td>Регистратор ТП</td>
				<td>
					<button type="button" data-toggle="modal" data-target="#rolesPermission" class="btn btn-warning"><i class="fas fa-edit"></i></button>
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
				<h5 class="modal-title">НОВЫЙ Права доступа</h5>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label>Основное меню<span class="text-danger">*</span></label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Дочерное меню<span class="text-danger">*</span></label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Название права доступа<span class="text-danger">*</span></label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Название права доступа в скрипте<span class="text-danger">*</span></label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>URL в скрипте</label>
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
<div class="modal" tabindex="-1" id="rolesPermission">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Права доступа для роли: "Администратор"</h5>
			</div>
			<div class="modal-body">
				<div class="table-responsive">
					<table class="table table-hover  table-striped">
						<tbody>
							<tr class="bg-primary">
								<td colspan="2" class="text-center text-white">РКП РЕЗИДЕНТЫ</td>
							</tr>
							<tr class="bg-success">
								<td rowspan="6" class="text-center align-middle">Клиенты-резиденты</td>
							</tr>
							<tr>
								<td>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" checked>
										<label class="form-check-label">Регистрация клиентов-резидентов РКП</label>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-check">
										<input class="form-check-input" type="checkbox">
										<label class="form-check-label">Просмотр подробной информации о клиентах-резидентах РКП</label>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-check">
										<input class="form-check-input" type="checkbox">
										<label class="form-check-label">Редактирование информации о клиентах-резидентах РКП</label>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" checked>
										<label class="form-check-label">Удаление карточки клиента-резидента РКП</label>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" checked>
										<label class="form-check-label">Прикрепление брокеров к клиентам-резидентам РКП</label>
									</div>
								</td>
							</tr>
							<tr class="bg-success">
								<td rowspan="5" class="text-center align-middle">Платежи резидентов</td>
							</tr>
							<tr>
								<td>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" checked>
										<label class="form-check-label">Ввод платежей по клиентам-резидентам РКП</label>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" checked>
										<label class="form-check-label">Просмотр платежей по клиентам-резидентам РКП</label>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" checked>
										<label class="form-check-label">Редактирование платежей по клиентам-резидентам РКП</label>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" checked>
										<label class="form-check-label">Удаление платежей по клиентам-резидентам РКП</label>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
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