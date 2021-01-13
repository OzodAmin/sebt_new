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
				<th scope="col">Вид</th>
				<th scope="col">Кол-вo</th>
				<th scope="col">Срок</th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				<td>2233</td>
				<td>Продажа</td>
				<td>123 <br><span class="text-danger">шт</span></td>
				<td>12.12.2021</td>
				<td>
					<button type="button" data-toggle="modal" data-target="#newUserModal" class="btn btn-warning"><i class="fas fa-edit"></i></button>
				</td>
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
							<label>Вид<span class="text-danger">*</span></label>
							<select class="form-control">
								<option>Продажа</option>
								<option>Покупка</option>
							</select>
						</div>
					</div>
					<div class="row">
					<div class="form-group col-4">
						<label>Кол-вo<span class="text-danger">*</span></label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group col-4">
						<label>Ед.изм<span class="text-danger">*</span></label>
						<select class="form-control">
							<option>шт</option>
				            <option>грамм</option>
				            <option>кв.метр</option>
				            <option>килограмм</option>
				            <option>куб.метр</option>
				            <option>литр</option>
				            <option>тонна</option>
				        </select>
					</div>
					<div class="form-group col-4">
						<label>Срок<span class="text-danger">*</span></label>
						<input type="text" class="form-control">
					</div>
					</div>

<p>*****   Когда покупка   *****</p>
					<div class="row">
					<div class="form-group col-4">
						<label>Мин. цена</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group col-4">
						<label>Макс. цена<span class="text-danger">*</span></label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group col-4">
						<label>Валюта</label>
						<select class="form-control">
							<option>UZS</option>
				            <option>RUB</option>
				            <option>EUR</option>
				            <option>USD</option>
				        </select>
					</div>
					
					</div>
<p>*****   *****   *****</p>
				<div class="form-group">
					<label>Договор поручениe</label>
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="customFile">
						<label class="custom-file-label" for="customFile"><i class="fas fa-paperclip"></i>&nbsp;Обзор</label>
					</div>
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
<?php require_once '../footer.php'; ?>