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
				<h3 class="card-label">СПИСОК УТВЕРЖДЕННЫХ ЗАЯВОК</h3>
			</div>
		</div>
		<div class="card-body">
<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th scope="col">№</th>
				<th scope="col">Поз</th>
				<th scope="col">Наименование</th>
				<th scope="col">Кол-во</th>
				<th scope="col">Цена</th>
				<th scope="col">Сумма</th>
				<th scope="col">Базис</th>
				<th scope="col">Страна происхождения</th>
				<th scope="col">Статус</th>
				<th scope="col">Прим.</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>3450</td>
				<td>13</td>
				<td><a href="/sebt/pages/buliten_view.php">Хлопковое волокно средневолокнистое 4-тип, сорт-4, класс «Олий»,ур.2019 г. АО Узпахтасаноат<br><span class="text-danger">Технические культуры и продукция их переработки</span></a></td>
				<td>6<br><span class="text-danger">т</span></td>
				<td>18 033 719,86<br><span class="text-danger">сум</span></td>
				<td>108 202 319,16<br><span class="text-danger">сум</span></td>
				<td>FCA<br><span class="text-danger">22 банк. дней</span></td>
				<td>Узбекистан</td>
				<td class="align-middle text-center"><span class="label label-secondary label-inline font-weight-bolder ">новый</span></td>
				<td><button type="button" data-toggle="modal" data-target="#info" class="btn btn-secondary"><i class="fas fa-exclamation-circle"></i></button></td>
			</tr>
			<tr>
				<td>3450</td>
				<td>13</td>
				<td><a href="/sebt/pages/buliten_view.php">Хлопковое волокно средневолокнистое 4-тип, сорт-4, класс «Олий»,ур.2019 г. АО Узпахтасаноат<br><span class="text-danger">Технические культуры и продукция их переработки</span></a></td>
				<td>6<br><span class="text-danger">т</span></td>
				<td>18 033 719,86<br><span class="text-danger">сум</span></td>
				<td>108 202 319,16<br><span class="text-danger">сум</span></td>
				<td>FCA<br><span class="text-danger">22 банк. дней</span></td>
				<td>Узбекистан</td>
				<td style='white-space: nowrap' class="align-middle text-center"><span class="label label-warning label-inline font-weight-bolder">в торге</span></td>
				<td></td>
			</tr>
			<tr>
				<td>3450</td>
				<td>13</td>
				<td><a href="/sebt/pages/buliten_view.php">Хлопковое волокно средневолокнистое 4-тип, сорт-4, класс «Олий»,ур.2019 г. АО Узпахтасаноат<br><span class="text-danger">Технические культуры и продукция их переработки</span></a></td>
				<td>6<br><span class="text-danger">т</span></td>
				<td>18 033 719,86<br><span class="text-danger">сум</span></td>
				<td>108 202 319,16<br><span class="text-danger">сум</span></td>
				<td>FCA<br><span class="text-danger">22 банк. дней</span></td>
				<td>Узбекистан</td>
				<td class="align-middle text-center">свободные</td>
				<td><button type="button" data-toggle="modal" data-target="#info" class="btn btn-secondary"><i class="fas fa-exclamation-circle"></i></button></td>
			</tr>
			<tr>
				<td>3450</td>
				<td>13</td>
				<td><a href="/sebt/pages/buliten_view.php">Хлопковое волокно средневолокнистое 4-тип, сорт-4, класс «Олий»,ур.2019 г. АО Узпахтасаноат<br><span class="text-danger">Технические культуры и продукция их переработки</span></a></td>
				<td>6<br><span class="text-danger">т</span></td>
				<td>18 033 719,86<br><span class="text-danger">сум</span></td>
				<td>108 202 319,16<br><span class="text-danger">сум</span></td>
				<td>FCA<br><span class="text-danger">22 банк. дней</span></td>
				<td>Узбекистан</td>
				<td class="align-middle text-center"><span class="label label-success label-inline font-weight-bolder ">купленные</span></td>
				<td></td>
			</tr>
		</tbody>
	</table>
</div>

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

<?php require_once '../footer.php'; ?>