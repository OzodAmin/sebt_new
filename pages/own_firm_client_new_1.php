<?php 
require_once "../lang/ru.php";
require_once '../header.php';
require_once '../sidebar.php';
?>
<div class="card card-custom">
  <div class="card-header flex-wrap border-0 pt-6 pb-0">
    <div class="card-title">
        <h3 class="card-label"> Новый клиент</h3>
      </div>
      <div class="card-toolbar">
        <a href="/sebt/pages/own_firm_client_list.php" class="btn btn-primary"><i class="fas fa-chevron-left"></i>Вернуться в список</a>
      </div>
  </div>
  
  <!--begin::Form-->
  <form>
    <div class="card-body">
      <!-- Alert -->
      <div class="alert alert-custom alert-outline-2x alert-outline-danger fade show mb-5" role="alert">
        <div class="alert-icon"><i class="flaticon-warning"></i></div>
        <div class="alert-text">Заполните все поля.</div>
        <div class="alert-close">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="ki ki-close"></i></span>
          </button>
        </div>
      </div>

      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">Ф.И.О. клиента<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
        <div class="col-9">
          <input type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">Адрес<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
        <div class="col-9">
          <input type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">Серия и номер паспорта<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
        <div class="col-9">
          <input type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">Когда и кем выдан<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
        <div class="col-9">
          <input type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">Телефон<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
        <div class="col-9">
          <input type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">Факс<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
        <div class="col-9">
          <input type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">E-mail<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
        <div class="col-9">
          <input type="text" class="form-control">
        </div>
      </div>

      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">Код подтверждения действия<span class="text-danger">*</span></label>
        <div class="col-9">
          <input type="text" class="form-control" placeholder="****">
        </div>
      </div>

      <a href="/sebt/pages/own_firm_client_list.php" class="btn btn-secondary mr-2">Отмена</a>
      <button type="button" class="btn btn-primary">Сохранить</button>
    </div>
  </form>
</div>
<?php require_once '../footer.php'; ?>