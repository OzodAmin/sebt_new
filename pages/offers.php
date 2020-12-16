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
				<h3 class="card-label">СПИСОК СОБСТВЕННЫХ ЗАЯВОК</h3>
			</div>
			<div class="card-toolbar">
				<button type="button" data-toggle="modal" data-target="#newUserModal" class="btn btn-primary font-weight-bolder">
					<i class="fas fa-plus"></i>Новая заявка
				</button>
			</div>
		</div>
		<div class="card-body">
<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th scope="col">№</th>
				<th scope="col">Наименование</th>
				<th scope="col">Кол-во</th>
				<th scope="col">Цена</th>
				<th scope="col">Сумма</th>
				<th scope="col">Базис</th>
				<th scope="col">Страна происхождения</th>
				<th scope="col">Статус</th>
				<th scope="col">Прим.</th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				<td>Шрот хлопковый<br><span class="text-danger">ООО "PLASTEKS"</span></td>
				<td>500<br><span class="text-danger">т</span></td>
				<td>500<br><span class="text-danger">доллар США</span></td>
				<td>250 000 000<br><span class="text-danger">сум</span></td>
				<td>FCA<br><span class="text-danger">22 банк. дней</span></td>
				<td>США</td>
				<td class="align-middle text-center"><span class="label label-warning label-inline font-weight-bolder ">новый</span></td>
				<td></td>
				
				<td>
					<a href="/sebt/pages/offer_new.php" class="btn btn-warning mr-2"><i class="fas fa-edit"></i></a>
					<button type="button" class="btn btn-danger delete"><i class="fas fa-trash-alt"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">2</th>
				<td>Сульфат калия по 500 гр<br><span class="text-danger">ООО "ТЕСТ 1"</span></td>
				<td>2 000<br><span class="text-danger">шт</span></td>
				<td>500 000<br><span class="text-danger">сум</span></td>
				<td>250 000 000<br><span class="text-danger">сум</span></td>
				<td>FCA<br><span class="text-danger">22 банк. дней</span></td>
				<td>Узбекистан</td>
				<td class="align-middle text-center"><span class="label label-warning label-inline font-weight-bolder ">новый</span></td>
				<td><button type="button" data-toggle="modal" data-target="#info" class="btn btn-secondary"><i class="fas fa-exclamation-circle"></i></button></td>
				<td>
					<a href="/sebt/pages/offer_new.php" class="btn btn-warning mr-2"><i class="fas fa-edit"></i></a>
					<button type="button" class="btn btn-danger delete"><i class="fas fa-trash-alt"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">3</th>
				<td>Масло "ЁГДУ"<br><span class="text-danger">ООО "PLASTEKS"</span></td>
				<td>860<br><span class="text-danger">кг</span></td>
				<td>500 000<br><span class="text-danger">сум</span></td>
				<td>250 000 000<br><span class="text-danger">сум</span></td>
				<td>FCA<br><span class="text-danger">22 банк. дней</span></td>
				<td>Узбекистан</td>
				<td class="align-middle text-center"><span class="label label-info label-inline font-weight-bolder ">просроченный</span></td>
				<td></td>
				
				<td>
					<a href="/sebt/pages/offer_new.php" class="btn btn-warning mr-2"><i class="fas fa-edit"></i></a>
					<button type="button" class="btn btn-danger delete"><i class="fas fa-trash-alt"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">4</th>
				<td>Масло хлоп рафин дезод в/с<br><span class="text-danger">ООО "ТЕСТ 1"</span></td>
				<td>500<br><span class="text-danger">т</span></td>
				<td>500 000<br><span class="text-danger">сум</span></td>
				<td>250 000 000<br><span class="text-danger">сум</span></td>
				<td>FCA<br><span class="text-danger">22 банк. дней</span></td>
				<td>Узбекистан</td>
				<td class="align-middle text-center"><span class="label label-danger label-inline font-weight-bolder ">отказанный</span></td>
				<td></td>

				<td>
					<a href="/sebt/pages/offer_new.php" class="btn btn-warning mr-2"><i class="fas fa-edit"></i></a>
					<button type="button" class="btn btn-danger delete"><i class="fas fa-trash-alt"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">5</th>
				<td>Уголь каменный<br><span class="text-danger">ООО "DAVRON BOBO"</span></td>
				<td>500<br><span class="text-danger">т</span></td>
				<td>500 000<br><span class="text-danger">сум</span></td>
				<td>250 000 000<br><span class="text-danger">сум</span></td>
				<td>FCA<br><span class="text-danger">22 банк. дней</span></td>
				<td>Узбекистан</td>
				<td class="align-middle text-center"><span class="label label-success label-inline font-weight-bolder ">утвержденный</span></td>
				<td><button type="button" data-toggle="modal" data-target="#info" class="btn btn-secondary"><i class="fas fa-exclamation-circle"></i></button></td>
				<td>
					<a href="/sebt/pages/offer_new.php" class="btn btn-warning mr-2"><i class="fas fa-edit"></i></a>
					<button type="button" class="btn btn-danger delete"><i class="fas fa-trash-alt"></i></button>
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
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<a href="/sebt/pages/offer_new.php" class="btn btn-primary btn-block">Биржевые торги</a>
				<a href="/sebt/pages/offer_new.php" class="btn btn-primary btn-block">Аукционные торги</a>
				<a href="/sebt/pages/offer_new.php" class="btn btn-primary btn-block">Выставочно-ярмарочные торги</a>
			</div>
		</div>
	</div>
</div>
<div class="modal" tabindex="-1" id="info">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				Lorem ipsum, dolor sit amet, consectetur adipisicing elit. In nulla blanditiis autem cupiditate consequuntur, alias at animi atque? Voluptate possimus, aspernatur. Eos, ad delectus deserunt. Reprehenderit, voluptas deleniti! Repellendus, deleniti.
				Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Aspernatur laborum adipisci tempora, deserunt, ad officia maxime sed, possimus accusamus temporibus inventore distinctio magni quis autem illum! Veniam assumenda, quas consectetur?
			</div>
		</div>
	</div>
</div>
		</div>
	</div>

<?php 
	$script = '
<script>
	$(".delete").click(function(e) {
		Swal.fire({
			title: "Удалить заявку?",
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