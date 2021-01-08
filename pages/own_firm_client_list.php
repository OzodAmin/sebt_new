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
				<h3 class="card-label">СПИСОК КЛИЕНТОВ</h3>
			</div>
			<div class="card-toolbar">
				<button class="btn btn-secondary mr-2 font-weight-bolder" data-toggle="modal" data-target="#myModal">
					<i class="fas fa-user"></i>Новый клиент РКП
				</button>
				<div class="dropdown">
					<button class="btn btn-warning font-weight-bolder dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-plus"></i>	Новый клиент
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="/sebt/pages/own_firm_client_new.php">Юридическое лицо</a>
						<a class="dropdown-item" href="/sebt/pages/own_firm_client_new_1.php">Физическое лицо</a>
					</div>
				</div>
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
				<th scope="col">Наименование</th>
				<th scope="col">Тип</th>
				<th scope="col">ИНН</th>
				<th scope="col">Статус</th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				<td>MCHJ "AKUMSHIN SAVDO"</td>
				<td>Юридическое лицо</td>
				<td>300990218</td>
				<td><span class="label label-success label-inline font-weight-bolder ">Активен</span></td>
				<td>
					<a href="/sebt/pages/own_firm_client_new.php" class="btn btn-warning mr-2"><i class="fas fa-edit"></i></a>
					<button type="button" class="btn btn-danger delete"><i class="fas fa-trash-alt"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">2</th>
				<td>ООО "DAVRON BOBO"<br><span class="text-danger">клиент-резидент РКП</span></td>
				<td>Юридическое лицо</td>
				<td>202538841</td>
				<td><span class="label label-warning label-inline font-weight-bolder ">Новый</span></td>
				<td>
					<a href="/sebt/pages/own_firm_client_new.php" class="btn btn-warning mr-2"><i class="fas fa-edit"></i></a>
					<button type="button" class="btn btn-danger delete"><i class="fas fa-trash-alt"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">3</th>
				<td>ООО "PLASTEKS"<br><span class="text-danger">клиент-резидент РКП</span></td>
				<td>Юридическое лицо</td>
				<td>203227928</td>
				<td><span class="label label-danger label-inline font-weight-bolder ">Заблокирован сотрудником РКП</span></td>
				<td>
					<a href="/sebt/pages/own_firm_client_new.php" class="btn btn-warning mr-2"><i class="fas fa-edit"></i></a>
					<button type="button" class="btn btn-danger delete"><i class="fas fa-trash-alt"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">4</th>
				<td>AA BB CCC</td>
				<td>Физическое лицо</td>
				<td>203227928</td>
				<td><span class="label label-danger label-inline font-weight-bolder ">Заблокирован руководителем БК</span></td>
				<td>
					<a href="/sebt/pages/own_firm_client_new.php" class="btn btn-warning mr-2"><i class="fas fa-edit"></i></a>
					<button type="button" class="btn btn-danger delete"><i class="fas fa-trash-alt"></i></button>
				</td>
			</tr>
		</tbody>
	</table>
</div>
<div class="modal fade" id="myModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Ввод нового клиента РКП (резидента)</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i aria-hidden="true" class="ki ki-close"></i>
				</button>
			</div>
			<form class="form">
				<div class="modal-body">
					<div class="form-group row">
						<label class="col-form-label text-right col-lg-3 col-sm-12">Реквизиты клиента<span class="text-danger">*</span></label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<select class="form-control">
								<option>MCHJ "AKUMSHIN SAVDO"</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-form-label text-right col-lg-3 col-sm-12">Свидетельство о регистрации</label>
						<div class="col-9">
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="customFile">
								<label class="custom-file-label" for="customFile"><i class="fas fa-paperclip"></i>&nbsp;<?=$lang['16'];?></label>
							</div>
							<span class="form-text text-muted">Прикрепите отсканированный документ</span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-form-label text-right col-lg-3 col-sm-12">Разрешение на оптовую торговлю</label>
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

		</div>
		<!--end::Body-->
	</div>
<?php 
	$script = '
<script>
	$(".delete").click(function(e) {
		Swal.fire({
			title: "Удалить трейдера?",
			text: "Вы не сможете отменить это!",
			icon: "warning",
			showCancelButton: true,
			confirmButtonText: "Да удалить!",
			cancelButtonText: "Отмена"
		}).then(function(result) {
			if (result.value) {
				Swal.fire(
					"Deleted!",
					"Your file has been deleted.",
					"success"
				)
			}
		});
	});
</script>	
';
	require_once '../footer.php'; 
?>