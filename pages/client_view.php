<?php 
isset($_GET['role']) ? $role=$_GET['role'] : $role="";
isset($_GET['back']) ? $back=$_GET['back'] : $back="";
switch ($role) {
	case 'moderator':
		$status = '<span class="text-warning">Новый клиент</span>';
		$moderator = true;
		break;
	
	default:
		$status = '<span class="text-success">Активен</span>';
		$moderator = false;
		break;
}

require_once '../header.php';
require_once '../sidebar.php';
?>

<!--begin::Card-->
<div class="card card-custom">
	<!--begin::Header-->
	<div class="card-header flex-wrap border-0 pt-6 pb-0">
		<div class="card-title">
			<h3 class="card-label">Информация о клиенте (резиденте)</h3>
		</div>
		<div class="card-toolbar">
			<a href="/sebt/pages/<?=$back;?>" class="btn btn-primary"><i class="fas fa-chevron-left"></i>Вернуться в список</a>
		</div>
	</div>
	<!--end::Header-->
	<!--begin::Body-->
	<div class="card-body">
		<div class="table-responsive">
			<table class="table">
				<tbody>
					<tr>
						<th scope="row">Статус</th>
						<td colspan="3"><?=$status;?></td>
					</tr>					
					
					
					<?php if (!$moderator){
					echo '<tr><th scope="row">Биржа</th><td colspan="3">Республиканская универсальная агропромышленная биржа</td></tr>';
					echo '<tr><th scope="row">Филиал</th><td colspan="3">AJ "Respublika ko\'p tarmoqli agrosanoat birjasi"</td></tr>';
					echo '<tr><th scope="row">Список брокеров</th><td colspan="3">БК-361.</td></tr>';
					}?>

					<tr>
						<th scope="row">Наименование организации</th>
						<td colspan="3">MchJ "Resurs tamirlash zaxira"</td>
					</tr>
					<tr>
						<th scope="row">ФИО руководителя:</th>
						<td>Орзукулов С.О.</td>
						<th scope="row">Должность руководителя</th>
						<td>Директор</td>
					</tr>
					<tr>
						<th scope="row">Действующий на основании</th>
						<td>Устава</td>
						<th scope="row">Дата регистрации</th>
						<td>26.07.2017 г.</td>
					</tr>
					<tr><td colspan="4" class="text-primary text-center"><b>Местонахождение и реквизиты</b></td></tr>
					<tr>
						<th scope="row">Страна</th>
						<td>Узбекистан</td>
						<th scope="row">Регион</th>
						<td>Ташкентская область</td>
					</tr>
					<tr>
						<th scope="row">Город</th>
						<td>Ташкент</td>
						<th scope="row">Юридический адреc</th>
						<td>ул. Шуртан мах., 12</td>
					</tr>
					<tr>
						<th scope="row">ИНН</th>
						<td>301743260</td>
						<th scope="row">ОКЭД</th>
						<td>00</td>
					</tr>
					<tr>
						<th scope="row">ИНПО</th>
						<td>301743260</td>
						<th scope="row">МФО банка</th>
						<td>00</td>
					</tr>
					<tr>
						<th scope="row">Наименование банка</th>
						<td>Капитал</td>
						<th scope="row">Расчетный счет</th>
						<td>00</td>
					</tr>
					<tr><td colspan="4" class="text-primary text-center"><b>Контактная информация</b></td></tr>
					<tr>
						<th scope="row">Рабочий телефон</th>
						<td>-</td>
						<th scope="row">Мобильный телефон</th>
						<td>+998 94 12345667</td>
					</tr>
					<tr>
						<th scope="row">Емайл</th>
						<td>asd@qwe.com</td>
						<th scope="row">Вебсайт</th>
						<td>-</td>
					</tr>
					<tr><td colspan="4" class="text-primary text-center"><b>Документы</b></td></tr>
					<tr>
						<td colspan="4" class="text-primary">
<div class="row">
<div class="col">
<div class="card card-custom gutter-b card-stretch">
<div class="card-body">
<div class="d-flex flex-column align-items-center">
<img alt="" class="max-h-65px" src="/sebt/img/pdf.svg" />
<a href="#" class="text-dark-75 font-weight-bold mt-15 font-size-lg">Паспортные данные</a>
</div>
</div>
</div>
</div>
<div class="col">
<div class="card card-custom gutter-b card-stretch">
<div class="card-body">
<div class="d-flex flex-column align-items-center">
<img alt="" class="max-h-65px" src="/sebt/img/doc.svg" />
<a href="#" class="text-dark-75 font-weight-bold mt-15 font-size-lg">Устав</a>
</div>
</div>
</div>
</div>
<div class="col">
<div class="card card-custom gutter-b card-stretch">
<div class="card-body">
<div class="d-flex flex-column align-items-center">
<img alt="" class="max-h-65px" src="/sebt/img/jpg.svg" />
<a href="#" class="text-dark-75 font-weight-bold mt-15 font-size-lg">Guvohnoma</a>
</div>
</div>
</div>
</div>
<div class="col">
<div class="card card-custom gutter-b card-stretch">
<div class="card-body">
<div class="d-flex flex-column align-items-center">
<img alt="" class="max-h-65px" src="/sebt/img/jpg.svg" />
<a href="#" class="text-dark-75 font-weight-bold mt-15 font-size-lg">Приказ</a>
</div>
</div>
</div>
</div>
</div>
						</td>
					</tr>
									
						
					<?php if ($moderator){
					echo '<tr><th scope="row">Биржа</th><td colspan="3"><select class="form-control"><option value="1" selected="">Республиканская универсальная агропромышленная биржа</option><option value="2">Киевская агропромышленная биржа</option><option value="3">ТБ “Аграрная биржа”</option><option value="4">Товарно-сырьевая биржа “ЭКЮ”</option><option value="5">Казахстанская Международная товарно-сырьевая универсальная биржа “Ел Қазына”</option></select></td></tr>';
				
					echo '<tr><th scope="row">Филиал</th><td colspan="3"><select class="form-control"><option value="1" selected="">AJ "Respublika ko\'p tarmoqli agrosanoat birjasi"</option><option value="6">АНДИЖАН</option><option value="8">БУХАРА</option><option value="14">КАРАКАЛПАКСТАН</option><option value="15">КАШКАДАРЬЯ</option><option value="13">НАВОИ</option><option value="7">НАМАНГАН</option><option value="11">САМАРКАНД</option><option value="10">СУРХАНДАРЬЯ</option><option value="5">ФЕРГАНА</option><option value="16">ХОРЕЗМ</option></select></td></tr>';
					echo '<tr><th scope="row">Статус</th><td colspan="3"><select class="form-control"><option value="1">Активен</option><option value="0">Отклонен</option><option value="1">Заблокирован</option></select></td></tr>';
					echo '<tr><th scope="row">Примечание</th><td colspan="3"><textarea rows="3" class="form-control"></textarea></td></tr>';
					echo '<tr><th scope="row">Код подтверждения действия</th><td colspan="3"><input type="password" class="form-control" placeholder="****"></input></td></tr>';
					}?>
				</tbody>
			</table>
		</div>
      
	</div>
	<!--end::Body-->
</div>
<?php require_once '../footer.php'; ?>