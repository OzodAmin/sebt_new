<?php 
require_once '../header.php';
require_once '../sidebar.php';
?>
<div class="container">
	<!--begin::Card-->
	<div class="card card-custom">
		<!--begin::Header-->
		<div class="card-header flex-wrap border-0 pt-6 pb-0">
			<div class="card-title">
				<h3 class="card-label">Договор поручениe</h3>
			</div>
			<div class="card-toolbar">
				<button type="button" data-toggle="modal" data-target="#newUserModal" class="btn btn-primary font-weight-bolder">
					<i class="fas fa-plus"></i>НОВЫЙ поручениe
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
				<th scope="col">Брокер</th>
				<th scope="col">Срок</th>
				<th scope="col">Статус</th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				<td>bk2233</td>
				<td>12.12.2021</td>
				<td><span class="label label-success label-inline font-weight-bolder ">Новый</span></td>
				<td>
					<button type="button" class="btn btn-danger delete"><i class="fas fa-trash-alt"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">1</th>
				<td>bk2233</td>
				<td>12.12.2021</td>
				<td><span class="label label-danger label-inline font-weight-bolder ">Исползован</span></td>
				<td></td>
			</tr>
		</tbody>
	</table>
</div>
<div class="modal" tabindex="-1" id="newUserModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">НОВЫЙ поручениe</h5>
			</div>
			<div class="modal-body">
				<form>
					<div class="row">
						<div class="form-group col-6">
							<label>Брокер<span class="text-danger">*</span></label>
							<select class="form-control">
								<option>123</option>
								<option>22-1</option>
								<option>124323-2</option>
							</select>
						</div>
						<div class="form-group col-6">
							<label>Срок<span class="text-danger">*</span></label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="form-group">
				        <label>Документ<span class="text-danger">*</span></label>
				        <div class="col-10">
				          <div class="form-check form-check-inline">
				            <input class="form-check-input" type="radio">
				            <label class="form-check-label">Складская справка</label>
				          </div>
				          <div class="form-check form-check-inline">
				            <input class="form-check-input" type="radio">
				            <label class="form-check-label">Документ качества (сертификат, паспорт, ТУ)</label>
				          </div>
				        </div>
				      </div>

					<div class="form-group">
						<label>Документ товара<span class="text-danger">*</span></label>
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="customFile">
							<label class="custom-file-label" for="customFile"><i class="fas fa-paperclip"></i>&nbsp;Обзор</label>
						</div>
					</div>
					<div class="form-group">
						<label>Гарантийное письмо<span class="text-danger">*</span></label>
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="customFile">
							<label class="custom-file-label" for="customFile"><i class="fas fa-paperclip"></i>&nbsp;Обзор</label>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
				<a href="/sebt/pages/bk_assignment.php" class="btn btn-primary">Сохранить</a>
			</div>
		</div>
	</div>
</div>

		</div>
		<!--end::Body-->
	</div>
	<!--end::Card-->
</div>

<?php $script = '
<script>
	$(".delete").click(function(e) {
		Swal.fire({
			title: "Удалить договор поручениe?",
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
'; ?>
<?php require_once '../footer.php'; ?>