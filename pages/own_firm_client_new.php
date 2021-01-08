<?php 
require_once "../lang/ru.php";
require_once '../header.php';
require_once '../sidebar.php';
?>
<div class="card card-custom">
  <div class="card-header flex-wrap border-0 pt-6 pb-0">
    <div class="card-title">
        <h3 class="card-label">Ввод нового клиента (резидента)</h3>
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
        <label  class="col-3 col-form-label bg-warning">Договор на брокерское обслуживание</label>
        <div class="col-9">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile"><i class="fas fa-paperclip"></i>&nbsp;<?=$lang['16'];?></label>
          </div>
          <span class="form-text text-muted">Прикрепите отсканированный документ</span>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">Наименование<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
        <div class="col-9">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <select>
                  <option>АО</option><option>БФ</option><option>ВТО</option><option>ДП</option><option>ДХ</option><option>ЗАО</option><option>ИП</option><option>ИЦ</option><option>МДП</option><option>МП</option><option>МП ЧФ</option><option>НПФ</option><option>ОАО</option><option>ОК</option><option>ООО</option><option>ООО СП</option><option>ПТФ</option><option>СП</option><option>СП ООО ТД</option><option>ТД</option><option>ТЗП</option><option>ТПП</option><option>ТПФ</option><option>УП</option><option>Фирма</option><option>ФХ</option><option>ЧП</option><option>ЧПКФ</option><option>ЧПФ</option><option>ЧТФ</option><option>ЧФ</option>
                </select>
              </div>
            </div>
            <input type="text" class="form-control" aria-label="Text input with radio button">
          </div>
          <span class="form-text text-muted">вводите наименование на латинице</span>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">Ф.И.О. руководителя<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
        <div class="col-9">
          <input type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">Паспорт  руководителя</label>
        <div class="col-9">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile"><i class="fas fa-paperclip"></i>&nbsp;<?=$lang['16'];?></label>
          </div>
          <span class="form-text text-muted">Прикрепите отсканированный документ</span>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">Должность руководителя<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
        <div class="col-9">
          <input type="text" class="form-control" value="Директор">
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">Действующий на основании<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
        <div class="col-9">
          <input type="text" class="form-control" value="Устава">
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">Наличие документа основания</label>
        <div class="col-9">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile"><i class="fas fa-paperclip"></i>&nbsp;<?=$lang['16'];?></label>
          </div>
          <span class="form-text text-muted">Прикрепите отсканированный документ</span>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">Юридический адрес<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
        <div class="col-9">
          <input type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">Код ИНН<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
        <div class="col-9">
          <input type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">Код ОКОНХ<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
        <div class="col-9">
          <input type="text" class="form-control">
        </div>
      </div>
      <hr class="bg-danger">
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">Код банка<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
        <div class="col-9">
          <div class="input-group">
            <input type="text" class="form-control" aria-label="Text input with radio button">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <button class="btn-primary" type="button" id="button-addon2">проверить</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">Наименование банка<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
        <div class="col-9">
          <input type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">Код МФО<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
        <div class="col-9">
          <input type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">Расчетный счет<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
        <div class="col-9">
          <input type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">Реквизиты организации</label>
        <div class="col-9">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile"><i class="fas fa-paperclip"></i>&nbsp;<?=$lang['16'];?></label>
          </div>
          <span class="form-text text-muted">Прикрепите отсканированный документ</span>
        </div>
      </div>
      <hr class="bg-danger">
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