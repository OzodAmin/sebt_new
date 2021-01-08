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
				<h3 class="card-label">СПИСОК ТРЕЙДЕР</h3>
			</div>
			<div class="card-toolbar">
				<button class="btn btn-secondary mr-2 font-weight-bolder" data-toggle="modal" data-target="#antiterror">
					<i class="fas fa-user"></i>Aнтитеррор
				</button>
				<a href="/sebt/pages/own_firm_treyder_new.php" class="btn btn-primary font-weight-bolder">
					<i class="fas fa-plus"></i>НОВЫЙ ТРЕЙДЕР
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
				<th scope="col">Логин</th>
				<th scope="col">Наименование</th>
				<th scope="col">Статус</th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				<td>bk303-1</td>
				<td>Кучаров Бахтиёр Бойкобилович</td>
				<td><span class="label label-success label-inline font-weight-bolder ">Активен</span></td>
				<td>
					<a href="/sebt/pages/own_firm_treyder_new.php" class="btn btn-warning mr-2"><i class="fas fa-edit"></i></a>
					<button type="button" class="btn btn-danger delete"><i class="fas fa-trash-alt"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">2</th>
				<td>bk303-5</td>
				<td>Акрамов Абзал Шухратович</td>
				<td><span class="label label-warning label-inline font-weight-bolder ">Новый</span></td>
				<td>
					<a href="/sebt/pages/own_firm_treyder_new.php" class="btn btn-warning mr-2"><i class="fas fa-edit"></i></a>
					<button type="button" class="btn btn-danger delete"><i class="fas fa-trash-alt"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">3</th>
				<td>bk303-3</td>
				<td>Акрамов Абзал Шухратович</td>
				<td><span class="label label-danger label-inline font-weight-bolder ">Заблокирован руководителем БК</span></td>
				<td>
					<a href="/sebt/pages/own_firm_treyder_new.php" class="btn btn-warning mr-2"><i class="fas fa-edit"></i></a>
					<button type="button" class="btn btn-danger delete"><i class="fas fa-trash-alt"></i></button>
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