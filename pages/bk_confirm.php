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
				<h3 class="card-label">Заявки на брокерское обслуживание</h3>
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
				<th scope="col">Клиент</th>
				<th scope="col">Брокер</th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				<td>MChJ "ULUG-EL"</td>
				<td>bk123</td>
				<td>
					<a href="/sebt/pages/bk_confirm_edit.php" class="btn btn-warning"><i class="fas fa-edit"></i></a>
				</td>
			</tr>
		</tbody>
	</table>
</div>

</div>
		<!--end::Body-->
	</div>
<?php require_once '../footer.php'; ?>