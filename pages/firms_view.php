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
			<h3 class="card-label">Информация о члене биржи</h3>
		</div>
		<div class="card-toolbar">
			<a href="/sebt/pages/firms.php" class="btn btn-primary"><i class="fas fa-chevron-left"></i>Вернуться в список</a>
		</div>
	</div>
	<!--end::Header-->
	<!--begin::Body-->
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-hover">
				<tbody>
					<tr>
						<td class="bg-primary text-white"><b>Статус</b></td>
						<td>Заблокирован руководителем БК</td>
					</tr>
					<tr>
						<td class="bg-primary text-white"><b>Биржа</b></td>
						<td>Республиканская универсальная агропромышленная биржа</td>
					</tr>
					<tr>
						<td class="bg-primary text-white"><b>Список БК</b></td>
						<td>bk123 <br>bk321 <br>bk001</td>
						<td class="bg-primary text-white"><b>Филиал</b></td>
						<td>AJ "Respublika ko'p tarmoqli agrosanoat birjasi"</td>
					</tr>
					<tr>
						<td class="bg-primary text-white"><b>Наименование</b></td>
						<td>MchJ "Resurs tamirlash zaxira"</td>
					</tr>
					<tr>
						<td class="bg-primary text-white"><b>ФИО руководителя:</b></td>
						<td>Орзукулов С.О.</td>
						<td class="bg-primary text-white"><b>Дата регистрации на бирже:</b></td>
						<td>26.07.2017 г.</td>
					</tr>
					<tr>
						<td class="bg-primary text-white"><b>Соглашение "антитеррор"</b></td>
						<td></td>
						<td class="bg-primary text-white"><b>Приказ</b></td>
						<td>№ 123 от 12.12.2018 г.</td>
					</tr>
					<tr><td colspan="4" class="text-primary"><b>Местонахождение и реквизиты</b></td></tr>
					<tr>
						<td class="bg-primary text-white"><b>Город</b></td>
						<td>Карши</td>
						<td class="bg-primary text-white"><b>Юридический адреc</b></td>
						<td>г.Карши Шуртан мах.</td>
					</tr>
					<tr>
						<td class="bg-primary text-white"><b>ИНН</b></td>
						<td>301743260</td>
						<td class="bg-primary text-white"><b>ОКЭД</b></td>
						<td>00</td>
					</tr>
					<tr><td colspan="4" class="text-primary"><b>Контактная информация</b></td></tr>
					<tr>
						<td class="bg-primary text-white"><b>Телефон1</b></td>
						<td>-</td>
						<td class="bg-primary text-white"><b>Телефон2</b></td>
						<td>+998 941234567</td>
					</tr>
					<tr>
						<td class="bg-primary text-white"><b>E-mail</b></td>
						<td>asd@qwe.uz</td>
						<td class="bg-primary text-white"><b>Website</b></td>
						<td>-</td>
					</tr>
					<tr><td colspan="4" class="text-primary"><b>Банковские реквизиты</b></td></tr>
					<tr>
						<td class="bg-primary text-white"><b>Наименование банка</b></td>
						<td></td>
					</tr>
					<tr>
						<td class="bg-primary text-white"><b>Расчетный счет</b></td>
						<td></td>
						<td class="bg-primary text-white"><b>МФО</b></td>
						<td></td>
					</tr>
					
				</tbody>
			</table>
		</div>
	</div>
	<!--end::Body-->
</div>
<?php require_once '../footer.php'; ?>