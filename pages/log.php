<?php 
require_once "../lang/ru.php";
require_once '../header.php';
require_once '../sidebar.php';
?>
<div class="container">
	<!--begin::Card-->
	<div class="card card-custom">
		<!--begin::Header-->
		<div class="card-header flex-wrap border-0 pt-6 pb-0">
			<div class="card-title">
				<h3 class="card-label">ЖУРНАЛ ДЕЙСТВИЙ ПОЛЬЗОВАТЕЛЕЙ</h3>
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
				<th scope="col">Дата и время</th>
				<th scope="col">Пользователь</th>
				<th scope="col">Вид действия</th>
				<th scope="col">Действие</th>
				<th scope="col">Пояснение</th>
				<th scope="col">IP-адрес</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				<td>09.12.2020 14:13:06	</td>
				<td>user</td>
				<td>Вход в систему</td>
				<td><span class="text-danger">/authorize.php</span></td>
				<td>Вход по url: 192.168.10.206</td>
				<td>192.168.10.17 <br><span class="text-danger">Chrome 86.0</span></td>
			</tr>
			<tr>
				<th scope="row">2</th>
				<td>07.12.2020 19:00:39	</td>
				<td>suxrob</td>
				<td>Просмотр формы</td>
				<td>Просмотр договора с залогом <br><span class="text-danger">/offers/liquid_view.php?aid=27&id=23601</span></td>
				<td>№ 0809/144-Б от 08.09.2018 г.</td>
				<td>192.168.10.17 <br><span class="text-danger">Firefox 78.0</span></td>
			</tr>
			<tr>
				<th scope="row">3</th>
				<td>20.11.2020 18:35:44</td>
				<td>user</td>
				<td>Новая запись</td>
				<td>Ввод договора с залогом<br><span class="text-danger">/offers/liquid_1.php?aid=29</span></td>
				<td>№ 2201/446-Б от 22.01.2020 г.</td>
				<td>192.168.10.17 <br><span class="text-danger">Firefox 78.0</span></td>
			</tr>
			<tr>
				<th scope="row">4</th>
				<td>20.11.2020 18:35:44</td>
				<td>user</td>
				<td>Редактирование</td>
				<td>Редактирование договора с залогом<br><span class="text-danger">/offers/liquid_1.php?aid=29</span></td>
				<td>№ 2201/446-Б от 22.01.2020 г.</td>
				<td>192.168.10.17 <br><span class="text-danger">Firefox 78.0</span></td>
			</tr>
			<tr>
				<th scope="row">5</th>
				<td>20.11.2020 18:35:44</td>
				<td>user</td>
				<td>Удаление</td>
				<td>Удаление договора с залогом<br><span class="text-danger">/offers/liquid_1.php?aid=29</span></td>
				<td>№ 2201/446-Б от 22.01.2020 г.</td>
				<td>192.168.10.17 <br><span class="text-danger">Firefox 78.0</span></td>
			</tr>
			<tr>
				<th scope="row">6</th>
				<td>20.11.2020 18:35:44</td>
				<td>user</td>
				<td>Новая запись</td>
				<td>Ввод договора с залогом<br><span class="text-danger">/offers/liquid_1.php?aid=29</span></td>
				<td>№ 2201/446-Б от 22.01.2020 г.</td>
				<td>192.168.10.17 <br><span class="text-danger">Firefox 78.0</span></td>
			</tr>
			<tr>
				<th scope="row">7</th>
				<td>07.12.2020 19:00:39	</td>
				<td>suxrob</td>
				<td>Просмотр формы</td>
				<td>Просмотр договора с залогом <br><span class="text-danger">/offers/liquid_view.php?aid=27&id=23601</span></td>
				<td>№ 0809/144-Б от 08.09.2018 г.</td>
				<td>192.168.10.17 <br><span class="text-danger">Firefox 78.0</span></td>
			</tr>
			<tr>
				<th scope="row">8</th>
				<td>09.12.2020 14:13:06	</td>
				<td>user</td>
				<td>Вход в систему</td>
				<td><span class="text-danger">/authorize.php</span></td>
				<td>Вход по url: 192.168.10.206</td>
				<td>192.168.10.17 <br><span class="text-danger">Chrome 86.0</span></td>
			</tr>
			<tr>
				<th scope="row">9</th>
				<td>07.12.2020 19:00:39	</td>
				<td>suxrob</td>
				<td>Просмотр формы</td>
				<td>Просмотр договора с залогом <br><span class="text-danger">/offers/liquid_view.php?aid=27&id=23601</span></td>
				<td>№ 0809/144-Б от 08.09.2018 г.</td>
				<td>192.168.10.17 <br><span class="text-danger">Firefox 78.0</span></td>
			</tr>
			<tr>
				<th scope="row">10</th>
				<td>07.12.2020 19:00:39	</td>
				<td>suxrob</td>
				<td>Просмотр формы</td>
				<td>Просмотр договора с залогом <br><span class="text-danger">/offers/liquid_view.php?aid=27&id=23601</span></td>
				<td>№ 0809/144-Б от 08.09.2018 г.</td>
				<td>192.168.10.17 <br><span class="text-danger">Firefox 78.0</span></td>
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

		</div>
		<!--end::Body-->
	</div>
	<!--end::Card-->
</div>

<?php $script='<script src="/sebt/assets/js/pages/custom/user/list-datatable.js"></script>'; ?>
<?php require_once '../footer.php'; ?>