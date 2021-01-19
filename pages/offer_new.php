<?php 
require_once "../lang/ru.php";
require_once '../header.php';
require_once '../sidebar.php';
?>
<div class="card card-custom">
  <div class="card-header flex-wrap border-0 pt-6 pb-0">
    <div class="card-title">
        <h3 class="card-label">Ввод новой заявки</h3>
      </div>
      <div class="card-toolbar">
        <a href="/sebt/pages/offers.php" class="btn btn-primary"><i class="fas fa-chevron-left"></i>Вернуться в список</a>
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
        <label class="col-sm-2 col-form-label">Клиент<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
        <div class="col-sm-10">
          <select class="form-control">
            <option>(не выбрано)</option>
            <option>AKUMSHIN SAVDO - 2000025487</option>
            <option>ООО "DAVRON BOBO" - 2000025487</option>
            <option>ООО "PLASTEKS" - 2000025487</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-2 col-form-label">Договор поручениe</label>
        <div class="col-10">
          <select class="form-control">
            <option>(не выбрано)</option>
            <option>Договор поручениe от 12.12.2020</option>
            <option>Договор поручениe от 12.04.2020</option>
            <option>Договор поручениe от 12.01.2020</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Тип торгов<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
          <select class="form-control">
            <option>Биржевые торги</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label>Секция торгов<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
          <select class="form-control">
            <option>Секция реализации высоколиквидной продукции предприятий-монополистов</option>
            <option>Секция реализации биржевых товаров, не входящих в перечень высоколиквидной продукции предприятий-монополистов</option>
            <option>Секция фьючерсной торговли</option>
            <option>Секция торгов опционами</option>
          </select>
        </div>
      </div>
      <p class="text-primary"><b>Сведения по товару</b></p>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Тип торгов<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
          <select class="form-control">
            <option>Биржевые торги</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label>Секция торгов<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
          <select class="form-control">
            <option>Секция реализации высоколиквидной продукции предприятий-монополистов</option>
            <option>Секция реализации биржевых товаров, не входящих в перечень высоколиквидной продукции предприятий-монополистов</option>
            <option>Секция фьючерсной торговли</option>
            <option>Секция торгов опционами</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Наименование товара<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
          <select class="form-control">
            <option> - выберите - </option>
            <option>Cталь прокат плоский нелегированная</option>
            <option></option>
            <option></option>
            <option></option>
            <option></option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label>Марка товара<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
          <select class="form-control">
            <option> - выберите - </option>
            <option>х/к марка стали-DC04EK,толщ 0,60мм, шир 1250мм</option>
            <option>х/к марка стали-DC01,толщ 0,50мм</option>
            <option></option>
            <option></option>
            <option></option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Группа товара<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
          <select class="form-control">
            <option>(не выбрано)</option><option>Технические культуры и продукция их переработки</option><option>Сельхозпродукция и продукция её переработки</option><option>Сельхозхимия, химическая продукция</option><option>Энергоносители</option><option>Технологические комплексы и мини технологии</option><option>Сельхозтехника, с/х оборудование, транспорт зап.части</option><option>Оборудование и продукция произв.технического назначения</option><option>Металлы, металлопрокат</option><option>Строительные материалы</option><option>Целлюлозно-бумажная продукция</option><option>Текстильная продукция</option><option>Кабельная продукция и провода</option><option>Напитки и табачные изделия</option><option>Компьютеры и оргтехника</option><option>Товары народного потребления</option><option>Рабочая спец.одежда</option><option>Мед.оборудование и лекарственные препараты</option><option>Недвижимость</option><option>Ценные бумаги</option><option>Прочее</option><option>Работы строительно-монтажные</option><option>Работы по ремонту оборудования, транспортных средств</option><option>Переработка сырья</option><option>Услуги туристические</option><option>Услуги коммунальные</option><option>Толинг</option><option>Услуги транспортные</option><option>Уральская торговая площадка</option><option>Челябинская торговая площадка</option><option>Уфимская торговая площадка</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label>ТНВЭД<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
          <select class="form-control">
            <option> - выберите - </option>
            <option>0207119000 - Куриное мясо</option>
            <option>040300000  - Молоко</option>
            <option>0407001900 - Куриное яйцо</option>
            <option>071300000  - Горох (ядрица)</option>
            <option>100100000  - Кормовые смеси</option>
            <option>1003900000 - Ячмень</option>
            <option>1206009900 - Семена подсолнечника, дробленые или недробленые</option>
            <option>151800000  - Животные жиры и масла</option>
            <option>230600000  - Шелуха хлопковая</option>
            <option>2309904100 - Комбикорма</option>
            <option>2517410000 - порошок из мрамора</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label>Наименование<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
        <input class="form-control" type="text"/>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Тип упаковки<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
          <select class="form-control">
            <option>paket</option>
            <option>автоцистерна</option>
            <option>баллон</option>
            <option>банка</option>
            <option>бочки</option>
            <option>ж/д цистерны</option>
            <option>канистра</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label>Ед. изм. упаковки<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
          <select class="form-control">
            <option>грамм</option>
            <option>кв.метр</option>
            <option>килограмм</option>
            <option>куб.метр</option>
            <option>литр</option>
            <option>тонна</option>
            <option>штука</option>
          </select>
        </div>
      </div>
      <hr class="bg-danger">
      <div class="form-row">
        <div class="form-group col-md-3">
          <label>Количество<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
          <input class="form-control" type="text"/>
        </div>
        <div class="form-group col-md-3">
          <label>Ед.изм<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
          <select class="form-control">
            <option>шт</option>
            <option>грамм</option>
            <option>кв.метр</option>
            <option>килограмм</option>
            <option>куб.метр</option>
            <option>литр</option>
            <option>тонна</option>
          </select>
        </div>
        <div class="form-group col-md-3">
          <label>Размер лота<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
          <div class="input-group">
            <input type="text" class="form-control">
            <div class="input-group-append">
              <span class="input-group-text">шт</span>
            </div>
          </div>
        </div>
        <div class="form-group col-md-3">
          <label>Количество лотов</label>
          <div class="input-group">
            <input type="text" class="form-control" readonly>
            <div class="input-group-append">
              <span class="input-group-text">лотов</span>
            </div>
          </div>
          <small class="form-text text-primary">Automated</small>
        </div>
        <!-- <div class="form-group col-md-3">
          <label>Тип упаковки</label>
          <select class="form-control">
            <option> - выберите - </option>
            <option>paket</option>
            <option>автоцистерна</option>
            <option>банка</option>
            <option>барабан</option>
          </select>
        </div> -->
      </div>
      <div class="form-row">
        <div class="form-group col-md-3">
          <label>Базовая цена<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
          <input class="form-control" type="text"/>
        </div>
        <div class="form-group col-md-3">
          <label>Валюта<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
          <select class="form-control">
            <option>сум</option>
            <option>доллар</option>
            <option>евро</option>
          </select>
        </div>
        <div class="form-group col-md-3">
          <label>Сумма</label>
          <div class="input-group">
            <input type="text" class="form-control" readonly>
            <div class="input-group-append">
              <span class="input-group-text">сум</span>
            </div>
          </div>
          <small class="form-text text-primary">Automated</small>
        </div>
        <div class="form-group col-md-3">
          <label>Форма оплаты<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
          <select class="form-control">
            <option>б/н</option>
            <option>аккредетив</option>
            <option>Банковская гарантия</option>
            <option>Страховой полис</option>
            <option>Гарантия доверителя</option>
          </select>
        </div>
      </div>
      <hr class="bg-danger">
      <p class="text-primary"><b>Базис поставки</b></p>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label>Страна происхождения<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
          <select class="form-control">
            <option> - выберите - </option>
            <option>Узбекистан</option>
            <option>США</option>
            <option>Великобритания</option>
          </select>
        </div>
        <div class="form-group col-md-8">
          <label>Место нахождения товара<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
          <input class="form-control" type="text"/>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-3">
          <label>Базис поставки<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
          <select class="form-control">
            <option>-</option><option>EXW - самовывоз
            </option><option>FCA</option><option>FAS</option><option>FOB</option><option>CFR</option><option>CIF</option><option>CPT</option><option>CIP</option><option>DDP</option><option>DAP</option><option>DAT</option>
          </select>
        </div>
        <div class="form-group col-md-3">
          <label>Вид сделки<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
          <select class="form-control">
            <option>Спот</option>
            <option>Фьючерс</option>
            <option>Форвард</option>
            <option>Опцион</option>
          </select>
        </div>
        <div class="form-group col-md-3">
          <label>Срок поставки<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
          <div class="input-group">
            <input type="text" class="form-control">
            <div class="input-group-append">
              <span class="input-group-text">банк. дней</span>
            </div>
          </div>
          <small class="form-text text-primary">Срок поставки допускает ввод цифр, и учитывается банк. дни.</small>
        </div>
        <div class="form-group col-md-3">
          <label>Срок действия заявки<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
          <div class="input-group">
            <input type="text" class="form-control">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
            </div>
          </div>
          <small class="form-text text-primary">Формат даты: 'дд.мм.гггг'.</small>
        </div>
      </div>
      <hr class="bg-danger">
      <p class="text-primary"><b>Дополнительная информация</b></p>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Особые условия (Примечание)<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
          <textarea class="form-control"></textarea>
        </div>
        <div class="form-group col-md-6">
          <label>Особые условия (Примечание) (узб)<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
          <textarea class="form-control"></textarea>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>% залога с продавца<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
          <select class="form-control">
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label>% залога с покупателя<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
          <select class="form-control">
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
          </select>
        </div>
      </div>
      <hr class="bg-danger">
      <div class="row align-items-center">
        <div class="col text-left text-primary"><b>Фото товара</b></div>
        <div class="col text-right">
          <button type="reset" class="btn btn-primary">
            <i class="fas fa-plus"></i>Добавить фото
          </button>
        </div>
      </div>
      <small class="form-text text-primary">Формат фото jpg. Размер каждого фото - не более 2Мб</small>
      <div class="form-group row">
        <label  class="col-2 col-form-label">Файл фото</label>
        <div class="col-10">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile"><i class="fas fa-paperclip"></i>&nbsp;<?=$lang['16'];?></label>
          </div>
          
        </div>
      </div>
      <hr class="bg-danger">
      <div class="row align-items-center">
        <div class="col text-left text-primary"><b>Товарные позиции заявки</b></div>
        <div class="col text-right">
          <button type="reset" class="btn btn-primary"><i class="fas fa-plus"></i>Добавить</button>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label>Наименование</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group col-md-1">
          <label>Кол-во</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group col-md-2">
          <label>Ед.изм.</label>
          <select class="form-control">
            <option>шт</option>
            <option>грамм</option>
            <option>кв.метр</option>
            <option>килограмм</option>
            <option>куб.метр</option>
            <option>литр</option>
            <option>тонна</option>
          </select>
        </div>
        <div class="form-group col-md-1">
          <label>Кол. лотов</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group col-md-2">
          <label>Цена</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group col-md-2">
          <label>Сумма</label>
          <input type="text" class="form-control">
        </div>
      </div>

      <div class="form-group row">
        <label  class="col-2 col-form-label">Код подтверждения действия<span class="text-danger">*</span></label>
        <div class="col-10">
          <input type="text" class="form-control" placeholder="****">
        </div>
      </div>

      <a href="/sebt/pages/offers.php" class="btn btn-secondary mr-2">Отмена</a>
      <a href="/sebt/pages/offers.php" class="btn btn-primary">Сохранить</a>
    </div>
  </form>
</div>
<?php require_once '../footer.php'; ?>