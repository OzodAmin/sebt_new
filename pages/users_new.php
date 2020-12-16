<?php 
require_once "../lang/ru.php";
require_once '../header.php';
require_once '../sidebar.php';
?>
<div class="card card-custom">
  <div class="card-header flex-wrap border-0 pt-6 pb-0">
    <div class="card-title">
        <h3 class="card-label">НОВЫЙ ПОЛЬЗОВАТЕЛЬ</h3>
      </div>
      <div class="card-toolbar">
        <a href="/sebt/pages/users.php" class="btn btn-primary"><i class="fas fa-chevron-left"></i>Вернуться в список</a>
      </div>
  </div>
  <!--begin::Form-->
  <form>
    <div class="card-body">
      <div class="form-group row">
        <label  class="col-2 col-form-label"><?=$lang['15'];?></label>
        <div class="col-10">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile"><i class="fas fa-paperclip"></i>&nbsp;<?=$lang['16'];?></label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-2 col-form-label">Статус</label>
        <div class="col-10">
          <select class="form-control">
            <option>Активен</option><option>Окончание срока действия</option><option>Нарушение правил торгов</option><option>Неуплата комиссионных сборов</option><option>Неполнота предоставленных документов</option><option>Неактивен по прочим причинам</option><option>Заблокирован руководителем БК</option><option>Нет оплаты брокерского места</option><option>Заблокирован сотрудником РКП</option><option>Заблокирован по вопросу легализации</option><option>Заблокирован по решению зам гендир</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-2 col-form-label">Роль</label>
        <div class="col-10">
          <select class="form-control">
            <option>(не выбрано)</option>
            <option>Администратор</option>
            <option>Главный маклер</option>
            <option>Трейдер</option>
            <option>Руководитель БК</option>
            <option>Региональный маклер</option>
            <option>Наблюдатель</option>
            <option>Бухгалтер</option>
            <option>Аналитик</option>
            <option>Специалист РКП</option>
            <option>Регистратор ТП</option>
            <option>Помощник главного маклера</option>
            <option>Стажер РКП</option>
            <option>Директор филиала</option>
            <option>Сотрудник биржи</option>
            <option>Участник МТС</option>
            <option>Гендиректор</option>
            <option>Клиент РКП</option>
            <option>Председатель РКП</option>
            <option>Консультант РКП</option>
            <option>Гл. специалист РКП</option>
            <option>Юрист</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-2 col-form-label">Филиал</label>
        <div class="col-10">
          <select class="form-control">
            <optgroup label="филиалы"><option>AJ "Respublika ko'p tarmoqli agrosanoat birjasi"</option><option>АНДИЖАН</option><option>БУХАРА</option><option>КАРАКАЛПАКСТАН</option><option>КАШКАДАРЬЯ</option><option>НАВОИ</option><option>НАМАНГАН</option><option>САМАРКАНД</option><option>СУРХАНДАРЬЯ</option><option>ФЕРГАНА</option><option>ХОРЕЗМ</option></optgroup><optgroup label="торговые площадки"><option>06-09</option><option value="32">07-02</option><option>08-01</option><option>09-01</option><option>15-02</option><option>16-04</option><option>16-05</option></optgroup>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-2 col-form-label">Логин</label>
        <div class="col-10">
          <input class="form-control" type="text"/>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-2 col-form-label">Пол</label>
        <div class="col-10">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio">
            <label class="form-check-label">мужской</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio">
            <label class="form-check-label">женский</label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-2 col-form-label">ФИО пользователя</label>
        <div class="col-10">
          <input class="form-control" type="text"/>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-2 col-form-label">Паспорт №</label>
        <div class="col-10">
          <input class="form-control" type="text"/>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-2 col-form-label">Юридический адрес</label>
        <div class="col-10">
          <input class="form-control" type="text"/>
        </div>
      </div>
      <p><label  class="col-form-label">Контактная информация:</label></p>
      <div class="form-group row">
        <div class="col-6">
          <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text">+998</span></div>
            <input type="text" class="form-control"/>
          </div>
        </div>
        <div class="col-6">
          <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text">+998</span></div>
            <input type="text" class="form-control"/>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-6">
          <input class="form-control" type="text" placeholder="Email" />
        </div>
        <div class="col-6">
          <input class="form-control" type="text" placeholder="Website" />
        </div>
      </div>
      <hr>
      <!-- <div class="row align-items-center">
        <div class="col text-left">Банковские реквизиты</div>
        <div class="col text-right">
          <button type="reset" class="btn btn-primary font-weight-bold">
            <i class="fas fa-plus"></i>Добавить банк
          </button>
        </div>
      </div>
      <p><label  class="col-form-label"></label></p>
      <div class="form-group">
          <input class="form-control" type="text" placeholder="Наименование банка" />
      </div>
      <div class="form-group row">
        <div class="col-6">
          <input class="form-control" type="text" placeholder="Расчетный счет" />
        </div>
        <div class="col-6">
          <input class="form-control" type="text" placeholder="МФО" />
        </div>
      </div>
      <hr> -->
    </div>
    <div class="card-footer">
      <a href="/sebt/pages/users.php" class="btn btn-secondary mr-2">Отмена</a>
      <button type="button" class="btn btn-primary">Сохранить</button>
    </div>
  </form>
 <!--end::Form-->
</div>
<?php require_once '../footer.php'; ?>