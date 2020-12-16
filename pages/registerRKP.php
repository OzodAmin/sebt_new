<?php 
$style = '<link href="/sebt/assets/css/pages/wizard/wizard-6.css" rel="stylesheet" type="text/css" />';
require_once "../lang/ru.php";
require_once '../header.php';
require_once '../sidebar.php';
?>
	<!--begin::Content-->
	<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
		<!--begin::Entry-->
		<div class="d-flex flex-column-fluid">
			<!--begin::Container-->
			<div class="container">
				<div class="card card-custom">
					<div class="card-body p-0">
						<!--begin::Wizard 6-->
						<div class="wizard wizard-6 d-flex flex-column flex-lg-row flex-column-fluid" id="kt_wizard">
							<!--begin::Container-->
							<div class="wizard-content d-flex flex-column mx-auto py-10 py-lg-20 w-100 w-md-700px">
								<!--begin::Nav-->
								<div class="d-flex flex-column-auto flex-column px-10">
									<!--begin: Wizard Nav-->
									<div class="wizard-nav pb-lg-10 pb-3 d-flex flex-column align-items-center align-items-md-start">
										<!--begin::Wizard Steps-->
										<div class="wizard-steps d-flex flex-column flex-md-row">
											<!--begin::Wizard Step 1 Nav-->
											<div class="wizard-step flex-grow-1 flex-basis-0" data-wizard-type="step" data-wizard-state="current">
												<div class="wizard-wrapper pr-lg-7 pr-5">
													<div class="wizard-icon">
														<i class="wizard-check ki ki-check"></i>
														<span class="wizard-number">1</span>
													</div>
													<div class="wizard-label mr-3">
														<h3 class="wizard-title"><?=$lang['8'];?></h3>
													</div>
													<span class="svg-icon">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<polygon points="0 0 24 0 24 24 0 24" />
																<rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
																<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
															</g>
														</svg>
													</span>
												</div>
											</div>
											<!--end::Wizard Step 1 Nav-->
											<!--begin::Wizard Step 2 Nav-->
											<div class="wizard-step flex-grow-1 flex-basis-0" data-wizard-type="step">
												<div class="wizard-wrapper pr-lg-7 pr-5">
													<div class="wizard-icon">
														<i class="wizard-check ki ki-check"></i>
														<span class="wizard-number">2</span>
													</div>
													<div class="wizard-label mr-3">
														<h3 class="wizard-title"><?=$lang['9'];?></h3>
													</div>
													<span class="svg-icon">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<polygon points="0 0 24 0 24 24 0 24" />
																<rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
																<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
															</g>
														</svg>
													</span>
												</div>
											</div>
											<!--end::Wizard Step 2 Nav-->
											<!--begin::Wizard Step 3 Nav-->
											<div class="wizard-step flex-grow-1 flex-basis-0" data-wizard-type="step">
												<div class="wizard-wrapper">
													<div class="wizard-icon">
														<i class="wizard-check ki ki-check"></i>
														<span class="wizard-number">3</span>
													</div>
													<div class="wizard-label">
														<h3 class="wizard-title"><?=$lang['10'];?></h3>
													</div>
												</div>
											</div>
											<!--end::Wizard Step 3 Nav-->
										</div>
										<!--end::Wizard Steps-->
									</div>
									<!--end: Wizard Nav-->
								</div>
								<!--end::Nav-->
								<!--begin::Form-->
								<form class="px-10" novalidate="novalidate" id="kt_form">
									<!--begin: Wizard Step 1-->
									<div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
										<!--begin::Title-->
										<div class="pb-10 pb-lg-12 text-center text-md-left">
											<h3 class="font-weight-bolder text-dark font-size-h2"><?=$lang['7'];?></h3>
											<div class="text-muted font-weight-bold font-size-h4"><?=$lang['12'];?>
											<a href="#" class="text-primary font-weight-bolder"><?=$lang['13'];?></a></div>
										</div>



	<div class="card card-custom mb-8 mb-lg-0">
		<div class="card-body">
			<div class="d-flex align-items-center p-5">
				<div class="d-flex flex-column">
					<div class="text-dark-75">
						Lorem ipsum dolor sit amet consectetur adipisicing, elit. Doloribus dicta recusandae adipisci culpa fuga distinctio in molestias animi exercitationem nam, maiores placeat est laboriosam iste, consequatur voluptatum vero. Recusandae, fugit?
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="form-group mt-5">
		<label class="checkbox">
			<input type="checkbox">
			<span></span><?=$lang['14'];?>
		</label>
	</div>


										
									</div>
									<!--end: Wizard Step 1-->
									<!--begin: Wizard Step 2-->
									<div class="pb-5" data-wizard-type="step-content">


	<div class="card card-custom mb-5">
		<div class="card-body p-5">
			<div class="form-group row">
				<label  class="col-6 col-form-label"><?=$lang['15'];?></label>
				<div class="col-6">
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="customFile">
						<label class="custom-file-label" for="customFile"><i class="fas fa-paperclip"></i>&nbsp;<?=$lang['16'];?></label>
					</div>
				</div>
			</div>
		</div>
	</div>

										<!--begin::Row-->
										<div class="row mb-5">
											<div class="col-xl-4">
												<input type="text" class="form-control form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6" placeholder="ИНН"/>
											</div>
											<div class="col-xl-4">
												<input type="text" class="form-control form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6" placeholder="ОКЭД"/>
											</div>
											<div class="col-xl-4">
												<input type="text" class="form-control form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6" placeholder="ИНПО"/>
											</div>
										</div>
										<!--end::Row-->
										<!--begin::Row-->
										<div class="row mb-5">
											<div class="col-xl-4">
												<select class="form-control form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6">
													<option>ООО</option>
													<option>СП</option>
													<option>БК</option>
													<option>ОАО</option>
													<option>ДП</option>
													<option>ФХ</option>
												</select>
											</div>
											<div class="col-xl-8">
												<input type="text" class="form-control form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6" placeholder="Наименование организации"/>
											</div>
										</div>
										<!--end::Row-->
										<div class="form-group mb-5">
											<input type="text" class="form-control form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6" placeholder="ФИО руководителя"/>
										</div>
										<div class="form-group mb-5">
											<input type="text" class="form-control form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6" placeholder="Должность руководителя"/>
										</div>
										<div class="form-group mb-5">
											<input type="text" class="form-control form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6" placeholder="Действующий на основании"/>
										</div>

										<div class="row mb-5">
											<div class="col-xl-4">
												<select class="form-control form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6">
													<option>Страна</option>
													<option>Uzbekistan</option>
													<option>Russia</option>
													<option>Kazakhstan</option>
												</select>
											</div>
											<div class="col-xl-4">
												<select class="form-control form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6">
													<option>Область</option>
													<option>Tashkent</option>
													<option>Bukhara</option>
													<option>Samarand</option>
												</select>
											</div>
											<div class="col-xl-4">
												<select class="form-control form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6">
													<option>Город</option>
													<option>Tashkent city</option>
													<option>Buxoro</option>
													<option>Samarqand</option>
												</select>
											</div>
										</div>

										<div class="form-group mb-5">
											<input type="text" class="form-control form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6" placeholder="Юридический адрес"/>
										</div>
										<div class="form-group mb-5">
											<input type='text' class="form-control form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6" id="kt_inputmask_3" placeholder="Мобильный телефон"/>
										</div>
										<div class="form-group mb-5">
											<input type='text' class="form-control form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6" id="kt_inputmask_4" placeholder="Рабочий телефон"/>
										</div>

										<div class="row mb-5">
											<div class="col-xl-6">
												<div class="form-group mb-5">
													<input type='text' class="form-control form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6" id="kt_inputmask_9" placeholder="Емайл"/>
												</div>
											</div>
											<div class="col-xl-6">
												<div class="form-group mb-5">
													<input type='text' class="form-control form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6" placeholder="Вебсайт"/>
												</div>
											</div>
										</div>

										<div class="form-group mb-5">
											<input type='text' class="form-control form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6" id="kt_inputmask_4" placeholder="Наименование банка"/>
										</div>

										<div class="row mb-5">
											<div class="col-xl-6">
												<div class="form-group mb-5">
													<input type='text' class="form-control form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6" placeholder="МФО"/>
												</div>
											</div>
											<div class="col-xl-6">
												<div class="form-group mb-5">
													<input type='text' class="form-control form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6" placeholder="Расчетный счет"/>
												</div>
											</div>
										</div>

										<div class="card card-custom">
											<div class="card-body p-5">
												<div class="form-group row">
													<label  class="col-6 col-form-label">Паспортные данные</label>
													<div class="col-6">
														<div class="custom-file">
															<input type="file" class="custom-file-input" id="customFile">
															<label class="custom-file-label" for="customFile"><i class="fas fa-paperclip"></i>&nbsp;<?=$lang['16'];?></label>
														</div>
														<span class="form-text text-muted">Прикрепите отсканированный документ</span>
													</div>
												</div>
												<div class="form-group row">
													<label  class="col-6 col-form-label">Устав</label>
													<div class="col-6">
														<div class="custom-file">
															<input type="file" class="custom-file-input" id="customFile">
															<label class="custom-file-label" for="customFile"><i class="fas fa-paperclip"></i>&nbsp;<?=$lang['16'];?></label>
														</div>
														<span class="form-text text-muted">Прикрепите отсканированный документ</span>
													</div>
												</div>
												<div class="form-group row">
													<label  class="col-6 col-form-label">Guvohnoma</label>
													<div class="col-6">
														<div class="custom-file">
															<input type="file" class="custom-file-input" id="customFile">
															<label class="custom-file-label" for="customFile"><i class="fas fa-paperclip"></i>&nbsp;<?=$lang['16'];?></label>
														</div>
														<span class="form-text text-muted">Прикрепите отсканированный документ</span>
													</div>
												</div>
												<div class="form-group row">
													<label  class="col-6 col-form-label">Приказ</label>
													<div class="col-6">
														<div class="custom-file">
															<input type="file" class="custom-file-input" id="customFile">
															<label class="custom-file-label" for="customFile"><i class="fas fa-paperclip"></i>&nbsp;<?=$lang['16'];?></label>
														</div>
														<span class="form-text text-muted">Прикрепите отсканированный документ</span>
													</div>

												</div>
											</div>
										</div>

									</div>
									<!--end: Wizard Step 2-->
									<!--begin: Wizard Step 3-->
									<div class="pb-5" data-wizard-type="step-content">
										<!--begin::Title-->
										<div class="pt-lg-0 pt-5 pb-15 text-center text-md-left">
											<h3 class="font-weight-bolder text-dark font-size-h2">Ваша заявка принята.</h3>
											<div class="text-muted font-weight-bold font-size-h4">Ваша заявка на регистрацию отправлено. Логин и пароль будет отправлен на ваш указанный электронный адрес.</div>
										</div>
										<!--end::Title-->
									</div>
									<!--end: Wizard Step 3-->
									<!--begin: Wizard Actions-->
									<div class="d-flex justify-content-between pt-7">
										<div class="mr-2">
											<button type="button" class="btn btn-light-primary font-weight-bolder font-size-h6 pr-8 pl-6 py-4 my-3 mr-3" data-wizard-type="action-prev">
											<span class="svg-icon svg-icon-md mr-2">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Left-2.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24" />
														<rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000)" x="14" y="7" width="2" height="10" rx="1" />
														<path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997)" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>Previous</button>
										</div>
										<div>
											<button type="button" class="btn btn-primary font-weight-bolder font-size-h6 pl-8 pr-4 py-4 my-3" data-wizard-type="action-submit">Завершить
											<span class="svg-icon svg-icon-md ml-2">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Right-2.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24" />
														<rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
														<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span></button>
											<button type="button" class="btn btn-primary font-weight-bolder font-size-h6 pl-8 pr-4 py-4 my-3" data-wizard-type="action-next">Next
											<span class="svg-icon svg-icon-md ml-2">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Right-2.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24" />
														<rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
														<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span></button>
										</div>
									</div>
									<!--end: Wizard Actions-->
								</form>
								<!--end::Form-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Wizard 6-->
					</div>
					<!--end::Wizard-->
				</div>
			</div>
			<!--end::Container-->
		</div>
		<!--end::Entry-->
	</div>
	<!--end::Content-->
<?php $script = '<script src="/sebt/assets/js/pages/crud/forms/widgets/input-mask.js"></script>
<script src="/sebt/assets/js/pages/custom/wizard/wizard-6.js"></script>'; ?>
<?php require_once '../footer.php'; ?>