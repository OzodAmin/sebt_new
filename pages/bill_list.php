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
				<h3 class="card-label">Счета на оплату биржевого сбора</h3>
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
				<th scope="col">Группа</th>
				<th scope="col">Номер</th>
				<th scope="col">Контракт</th>
				<th scope="col">Сумма</th>
				<th scope="col">Срок оплаты</th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				<td>биржевой сбор</td>
				<td>№ 1 от 07.01.2021 г.</td>
				<td>
					<a href="#">
						№ 359/3 от 12.03.2020 г. <br>
						<span class="label label-success label-inline font-weight-bolder ">Новый</span>
					</a>
				</td>
				<td>432 000,00 сум</td>
				<td>17.01.2021</td>
				<td>
					<a href="/sebt/pages/bill_prn.php" target="_blank" class="btn btn-warning mr-2"><i class="flaticon2-printer"></i></a>
				</td>
			</tr>
			<tr>
				<th scope="row">2</th>
				<td>биржевой сбор</td>
				<td>№ 2 от 07.01.2021 г.</td>
				<td>
					<a href="#">
						№ 359/3 от 12.03.2020 г. <br>
						<span class="label label-danger label-inline font-weight-bolder ">Просрочен</span>
					</a>
				</td>
				<td>432 000,00 сум</td>
				<td>01.01.2021</td>
				<td>
					<a href="/sebt/pages/bill_prn.php" target="_blank" class="btn btn-warning mr-2"><i class="flaticon2-printer"></i></a>
				</td>
			</tr>
			<tr>
				<th scope="row">3</th>
				<td>биржевой сбор</td>
				<td>№ 3 от 07.01.2021 г.</td>
				<td><a href="#">№ 359/3 от 12.03.2020 г. <br></a></td>
				<td>432 000,00 сум</td>
				<td>17.01.2021</td>
				<td>
					<a href="/sebt/pages/bill_prn.php" target="_blank" class="btn btn-warning mr-2"><i class="flaticon2-printer"></i></a>
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