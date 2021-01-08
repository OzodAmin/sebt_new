<?php 
require_once "../lang/ru.php";
require_once '../header.php';
require_once '../sidebar.php';
?>
<div class="card card-custom">
  <div class="card-header flex-wrap border-0 pt-6 pb-0">
    <div class="card-title">
        <h3 class="card-label">НОВЫЙ ТРЕЙДЕР</h3>
      </div>
      <div class="card-toolbar">
        <a href="/sebt/pages/own_firm_treyder_list.php" class="btn btn-primary"><i class="fas fa-chevron-left"></i>Вернуться в список</a>
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
      <p class="text-primary"><b>Контактная информация</b></p>
      <div class="form-group row">
        <label  class="col-2 col-form-label">Телефон</label>
        <div class="col-10">
          <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text">+998</span></div>
            <input type="text" class="form-control"/>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-2 col-form-label">Мобильный</label>
        <div class="col-10">
          <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text">+998</span></div>
            <input type="text" class="form-control"/>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-2 col-form-label">Email</label>
        <div class="col-10">
          <input class="form-control" type="text"/>
        </div>
      </div>
    </div>
    <div class="card-footer">
      <a href="/sebt/pages/own_firm_treyder_list.php" class="btn btn-secondary mr-2">Отмена</a>
      <button type="button" class="btn btn-primary">Сохранить</button>
    </div>
  </form>
 <!--end::Form-->
</div>
<?php require_once '../footer.php'; ?>