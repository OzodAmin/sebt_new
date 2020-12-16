<?php 
require_once "../lang/ru.php";
require_once '../header.php';
require_once '../sidebar.php';
?>
<div class="card card-custom">
  <div class="card-header flex-wrap border-0 pt-6 pb-0">
    <div class="card-title">
        <h3 class="card-label">Новый член биржи</h3>
      </div>
      <div class="card-toolbar">
        <a href="/sebt/pages/firms.php" class="btn btn-primary"><i class="fas fa-chevron-left"></i>Вернуться в список</a>
      </div>
  </div>
  <!--begin::Form-->
  <form>
    <div class="card-body">
      <div class="form-group row">
        <label  class="col-2 col-form-label">Статус</label>
        <div class="col-10">
          <select class="form-control">
            <option>Активен</option><option>Окончание срока действия</option><option>Нарушение правил торгов</option><option>Неуплата комиссионных сборов</option><option>Неполнота предоставленных документов</option><option>Неактивен по прочим причинам</option><option>Заблокирован руководителем БК</option><option>Нет оплаты брокерского места</option><option>Заблокирован сотрудником РКП</option><option>Заблокирован по вопросу легализации</option><option>Заблокирован по решению зам гендир</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-2 col-form-label"><?=$lang['15'];?></label>
        <div class="col-10">
          <div class="custom-file">
           <input type="file" class="custom-file-input" id="customFile"/>
           <label class="custom-file-label" for="customFile"><i class="fas fa-paperclip"></i>&nbsp;<?=$lang['16'];?></label>
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label>ИНН</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group col-md-4">
          <label>ОКЭД</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group col-md-4">
          <label>ИНПО</label>
          <input type="text" class="form-control">
        </div>
      </div>
      <!-- <div class="form-group row">
        <label  class="col-2 col-form-label">ИНН</label>
        <div class="col-10">
          <input class="form-control" type="text"/>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-2 col-form-label">ОКЭД</label>
        <div class="col-10">
          <input class="form-control" type="text"/>
        </div>
      </div> -->
      <div class="form-group row">
        <label  class="col-2 col-form-label">ФИО руководителя</label>
        <div class="col-10">
          <input class="form-control" type="text"/>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-2 col-form-label">Наименование организации</label>
        <div class="col-10">
          <div class="row">
            <div class="col-2">
              <select class="form-control">
                <option>ООО</option>
                <option>СП</option>
                <option>БК</option>
                <option>ОАО</option>
                <option>ДП</option>
                <option>ФХ</option>
              </select>
            </div>
            <div class="col-10">
              <input class="form-control" type="text"/>
            </div>
          </div>
          
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-2 col-form-label">Местонахождение</label>
        <div class="col-4">
          <select class="form-control">
            <option>Uzbekistan</option>
            <option>Russia</option>
            <option>Kazakhstan</option>
          </select>
        </div>
        <div class="col-3">
          <select class="form-control">
            <option>Tashkent</option>
            <option>Bukhara</option>
            <option>Samarand</option>
          </select>
        </div>
        <div class="col-3">
          <select class="form-control">
            <option>Tashkent city</option>
            <option>Buxoro</option>
            <option>Samarqand</option>
          </select>
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
      <div class="row align-items-center">
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
      <hr>
    </div>
    <div class="card-footer">
      <a href="/sebt/pages/firms.php" class="btn btn-secondary mr-2">Отмена</a>
      <button type="button" class="btn btn-primary">Сохранить</button>
    </div>
  </form>
 <!--end::Form-->
</div>
<?php require_once '../footer.php'; ?>