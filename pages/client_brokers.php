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
				<h3 class="card-label">СПИСОК БРОКЕРОВ</h3>
			</div>
			<div class="card-toolbar">
				<button class="btn btn-secondary mr-2 font-weight-bolder" data-toggle="modal" data-target="#myModal">
					<i class="fas fa-user"></i>Новый брокер
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
				<th scope="col">Наименование</th>
				<th scope="col">Срок</th>
				<th scope="col">Статус</th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">bk76</th>
				<td>MCHJ "AKUMSHIN SAVDO"</td>
				<td>12.12.2020</td>
				<td><span class="label label-success label-inline font-weight-bolder ">Активен</span></td>
				<td>
					<button type="button" class="btn btn-danger delete"><i class="fas fa-trash-alt"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">bk34</th>
				<td>ООО "DAVRON BOBO"</td>
				<td>12.12.2020</td>
				<td><span class="label label-warning label-inline font-weight-bolder ">На модерации</span></td>
				<td>
					<button type="button" class="btn btn-danger delete"><i class="fas fa-trash-alt"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">bk230</th>
				<td>ООО "DAVRON BOBO22"</td>
				<td>12.12.2020</td>
				<td><span class="label label-danger label-inline font-weight-bolder ">Истек срок</span></td>
				<td>
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
				<h5 class="modal-title" id="exampleModalLabel">Добавление брокера</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i aria-hidden="true" class="ki ki-close"></i>
				</button>
			</div>
			<form class="form">
				<div class="modal-body">
					<div class="form-group row">
						<label class="col-form-label text-right col-lg-3 col-sm-12">Брокер<span class="text-danger">*</span></label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<select class="form-control">
								<option>БК-123 MCHJ "oltin savdo"</option>
								<option>БК-11 MCHJ "changalidan uzadiganlar"</option>
								<option>БК-461 MCHJ "brokeri zo'ri"</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-form-label text-right col-lg-3 col-sm-12">Срок договора<span class="text-danger">*</span></label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-form-label text-right col-lg-3 col-sm-12">Договор на брокерское обслуживание<span class="text-danger">*</span></label>
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
					<a href="/sebt/pages/bk_confirm.php" class="btn btn-primary">Сохранить</a>
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
			title: "Удалить брокера?",
			text: "Вы не сможете отменить это!",
			icon: "warning",
			showCancelButton: true,
			confirmButtonText: "Да, расторгнут договор с брокером!",
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