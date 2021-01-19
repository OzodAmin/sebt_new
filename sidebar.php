<?php 
$URL = explode("/", $_SERVER['PHP_SELF']);
$page = $URL[3];
$active = '';
unset($URL);
 ?>
<div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
	<!--begin::Logo-->
	<a href="/sebt">
		<img alt="Logo" src="/sebt/assets/media/logos/logo-light.png" />
	</a>
	<!--end::Logo-->
	<!--begin::Toolbar-->
	<div class="d-flex align-items-center">
		<!--begin::Aside Mobile Toggle-->
		<button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
			<span></span>
		</button>
		<!--end::Aside Mobile Toggle-->
		<!--begin::Topbar Mobile Toggle-->
		<button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
			<span class="svg-icon svg-icon-xl">
				<i class="fas fa-user"></i>
			</span>
		</button>
		<!--end::Topbar Mobile Toggle-->
	</div>
	<!--end::Toolbar-->
</div>
<!--end::Header Mobile-->
<div class="d-flex flex-column flex-root">
	<!--begin::Page-->
	<div class="d-flex flex-row flex-column-fluid page">
		<!--begin::Aside-->
		<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
			<!--begin::Brand-->
			<div class="brand flex-column-auto" id="kt_brand">
				<!--begin::Logo-->
				<a href="/sebt" class="brand-logo">
					<img alt="Logo" src="/sebt/assets/media/logos/logo-light.png" />
				</a>
				<!--end::Logo-->
				<!--begin::Toggle-->
				<button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
					<i class="fas fa-align-justify"></i>
				</button>
				<!--end::Toolbar-->
			</div>
			<!--end::Brand-->
			<!--begin::Aside Menu-->
			<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
				<!--begin::Menu Container-->
				<div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
					<!--begin::Menu Nav-->
					<ul class="menu-nav">

						<?php $active = (in_array($page, ['login.php', 'register.php', 'registerRKP.php']) ? "menu-item-open menu-item-here" : "");?>
						 
						<li class="menu-item menu-item-submenu <?=$active;?>" aria-haspopup="true" data-menu-toggle="hover">
							<a href="javascript:;" class="menu-link menu-toggle">
								<span class="svg-icon menu-icon"><i class="fas fa-align-justify"></i></span>
								<span class="menu-text">Вход & Регистрация</span>
								<i class="menu-arrow"></i>
							</a>
							<div class="menu-submenu"><i class="menu-arrow"></i>
								<ul class="menu-subnav">

									<?php $active = ($page == "login.php" ? "menu-item-active" : "");?>
									<li class="menu-item <?=$active;?>" aria-haspopup="true">
										<a href="/sebt/pages/login.php" class="menu-link">
											<i class="menu-bullet menu-bullet-dot">
												<span></span>
											</i>
											<span class="menu-text">Вход</span>
										</a>
									</li>

									<?php $active = ($page == "register.php" ? "menu-item-active" : "");?>
									<li class="menu-item <?=$active;?>" aria-haspopup="true">
										<a href="/sebt/pages/register.php" class="menu-link">
											<i class="menu-bullet menu-bullet-dot">
												<span></span>
											</i>
											<span class="menu-text">Регистрация член биржи</span>
										</a>
									</li>

									<?php $active = ($page == "registerRKP.php" ? "menu-item-active" : "");?>
									<li class="menu-item <?=$active;?>" aria-haspopup="true">
										<a href="/sebt/pages/registerRKP.php" class="menu-link">
											<i class="menu-bullet menu-bullet-dot">
												<span></span>
											</i>
											<span class="menu-text">Регистрация РКП</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<?php $active = (in_array($page, ['users.php', 'roles.php', 'permission.php', 'log.php', 'tarifs.php']) ? "menu-item-open menu-item-here" : "");?>
						 
						<li class="menu-item menu-item-submenu <?=$active;?>" aria-haspopup="true" data-menu-toggle="hover">
							<a href="javascript:;" class="menu-link menu-toggle">
								<span class="svg-icon menu-icon"><i class="fas fa-align-justify"></i></span>
								<span class="menu-text">Администратор</span>
								<i class="menu-arrow"></i>
							</a>
							<div class="menu-submenu"><i class="menu-arrow"></i>
								<ul class="menu-subnav">

									<?php $active = ($page == "users.php" ? "menu-item-active" : "");?>
									<li class="menu-item <?=$active;?>" aria-haspopup="true">
										<a href="/sebt/pages/users.php" class="menu-link">
											<i class="menu-bullet menu-bullet-dot">
												<span></span>
											</i>
											<span class="menu-text">Пользователи</span>
										</a>
									</li>

									<?php $active = ($page == "roles.php" ? "menu-item-active" : "");?>
									<li class="menu-item <?=$active;?>" aria-haspopup="true">
										<a href="/sebt/pages/roles.php" class="menu-link">
											<i class="menu-bullet menu-bullet-dot">
												<span></span>
											</i>
											<span class="menu-text">Роли</span>
										</a>
									</li>

									<?php $active = ($page == "permission.php" ? "menu-item-active" : "");?>
									<li class="menu-item <?=$active;?>" aria-haspopup="true">
										<a href="/sebt/pages/permission.php" class="menu-link">
											<i class="menu-bullet menu-bullet-dot">
												<span></span>
											</i>
											<span class="menu-text">Права доступа</span>
										</a>
									</li>

									<?php $active = ($page == "log.php" ? "menu-item-active" : "");?>
									<li class="menu-item <?=$active;?>" aria-haspopup="true">
										<a href="/sebt/pages/log.php" class="menu-link">
											<i class="menu-bullet menu-bullet-dot">
												<span></span>
											</i>
											<span class="menu-text">Логи</span>
										</a>
									</li>

									<?php $active = ($page == "tarifs.php" ? "menu-item-active" : "");?>
									<li class="menu-item <?=$active;?>" aria-haspopup="true">
										<a href="/sebt/pages/tarifs.php" class="menu-link">
											<i class="menu-bullet menu-bullet-dot">
												<span></span>
											</i>
											<span class="menu-text">Тарифы</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<?php $active = (in_array($page, ['firms.php', 'offer_comfirm.php', 'ticket_list.php', 'products.php', 'admin_bill_list.php', 'bk_confirm.php']) ? "menu-item-open menu-item-here" : "");?>
						 
						<li class="menu-item menu-item-submenu <?=$active;?>" aria-haspopup="true" data-menu-toggle="hover">
							<a href="javascript:;" class="menu-link menu-toggle">
								<span class="svg-icon menu-icon"><i class="fas fa-align-justify"></i></span>
								<span class="menu-text">Модератор</span>
								<i class="menu-arrow"></i>
							</a>
							<div class="menu-submenu"><i class="menu-arrow"></i>
								<ul class="menu-subnav">

									<?php $active = ($page == "bk_confirm.php" ? "menu-item-active" : "");?>
									<li class="menu-item <?=$active;?>" aria-haspopup="true">
										<a href="/sebt/pages/bk_confirm.php" class="menu-link">
											<i class="menu-bullet menu-bullet-dot">
												<span></span>
											</i>
											<span class="menu-text">Заявки на брокерское обслуживание</span>
										</a>
									</li>									

									<?php $active = ($page == "firms.php" ? "menu-item-active" : "");?>
									<li class="menu-item <?=$active;?>" aria-haspopup="true">
										<a href="/sebt/pages/firms.php" class="menu-link">
											<i class="menu-bullet menu-bullet-dot">
												<span></span>
											</i>
											<span class="menu-text">Члены биржи</span>
										</a>
									</li>									

									<?php $active = ($page == "offer_comfirm.php" ? "menu-item-active" : "");?>
									<li class="menu-item <?=$active;?>" aria-haspopup="true">
										<a href="/sebt/pages/offer_comfirm.php" class="menu-link">
											<i class="menu-bullet menu-bullet-dot">
												<span></span>
											</i>
											<span class="menu-text">Неутвержденные заявки</span>
										</a>
									</li>

									<?php $active = ($page == "ticket_list.php" ? "menu-item-active" : "");?>
									<li class="menu-item <?=$active;?>" aria-haspopup="true">
										<a href="/sebt/pages/ticket_list.php" class="menu-link">
											<i class="menu-bullet menu-bullet-dot">
												<span></span>
											</i>
											<span class="menu-text">Протокол торгов</span>
										</a>
									</li>

									<?php $active = ($page == "products.php" ? "menu-item-active" : "");?>
									<li class="menu-item <?=$active;?>" aria-haspopup="true">
										<a href="/sebt/pages/products.php" class="menu-link">
											<i class="menu-bullet menu-bullet-dot">
												<span></span>
											</i>
											<span class="menu-text">Товары</span>
										</a>
									</li>

									<?php $active = ($page == "admin_bill_list.php" ? "menu-item-active" : "");?>
									<li class="menu-item <?=$active;?>" aria-haspopup="true">
										<a href="/sebt/pages/admin_bill_list.php" class="menu-link">
											<i class="menu-bullet menu-bullet-dot">
												<span></span>
											</i>
											<span class="menu-text">Счета на оплату</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<?php $active = (in_array($page, ['own_firm_treyder_list.php', 'bill_list.php', 'bill_pay_list.php', 'reestr.php', 'own_firm_client_list.php', 'assignment.php', 'offers.php', 'buliten.php', 'buyList.php', 'bk_assignment.php']) ? "menu-item-open menu-item-here" : "");?>
						 
						<li class="menu-item menu-item-submenu <?=$active;?>" aria-haspopup="true" data-menu-toggle="hover">
							<a href="javascript:;" class="menu-link menu-toggle">
								<span class="svg-icon menu-icon"><i class="fas fa-align-justify"></i></span>
								<span class="menu-text">Брокер</span>
								<i class="menu-arrow"></i>
							</a>
							<div class="menu-submenu"><i class="menu-arrow"></i>
								<ul class="menu-subnav">

									<?php $active = ($page == "bk_assignment.php" ? "menu-item-active" : "");?>
									<li class="menu-item <?=$active;?>" aria-haspopup="true">
										<a href="/sebt/pages/bk_assignment.php" class="menu-link">
											<i class="menu-bullet menu-bullet-dot">
												<span></span>
											</i>
											<span class="menu-text">Договор поручениe на продажу</span>
										</a>
									</li>

									<?php $active = ($page == "own_firm_treyder_list.php" ? "menu-item-active" : "");?>
									<li class="menu-item <?=$active;?>" aria-haspopup="true">
										<a href="/sebt/pages/own_firm_treyder_list.php" class="menu-link">
											<i class="menu-bullet menu-bullet-dot">
												<span></span>
											</i>
											<span class="menu-text">Трейдеры</span>
										</a>
									</li>

									<?php $active = ($page == "own_firm_client_list.php" ? "menu-item-active" : "");?>
									<li class="menu-item <?=$active;?>" aria-haspopup="true">
										<a href="/sebt/pages/own_firm_client_list.php" class="menu-link">
											<i class="menu-bullet menu-bullet-dot">
												<span></span>
											</i>
											<span class="menu-text">Клиенты (резидент)</span>
										</a>
									</li>

									<?php $active = ($page == "offers.php" ? "menu-item-active" : "");?>
									<li class="menu-item <?=$active;?>" aria-haspopup="true">
										<a href="/sebt/pages/offers.php" class="menu-link">
											<i class="menu-bullet menu-bullet-dot">
												<span></span>
											</i>
											<span class="menu-text">Список заявок</span>
										</a>
									</li>

									<?php $active = ($page == "buliten.php" ? "menu-item-active" : "");?>
									<li class="menu-item <?=$active;?>" aria-haspopup="true">
										<a href="/sebt/pages/buliten.php" class="menu-link">
											<i class="menu-bullet menu-bullet-dot">
												<span></span>
											</i>
											<span class="menu-text">Бюллетень</span>
										</a>
									</li>

									<?php $active = ($page == "buyList.php" ? "menu-item-active" : "");?>
									<li class="menu-item <?=$active;?>" aria-haspopup="true">
										<a href="/sebt/pages/buyList.php" class="menu-link">
											<i class="menu-bullet menu-bullet-dot">
												<span></span>
											</i>
											<span class="menu-text">Аукционы</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<?php $active = (in_array($page, ['bill_list.php', 'bill_pay_list.php', 'reestr.php', 'own_brokers.php', 'assignment.php', 'offers.php', 'buliten.php', 'buyList.php']) ? "menu-item-open menu-item-here" : "");?>
						 
						<li class="menu-item menu-item-submenu <?=$active;?>" aria-haspopup="true" data-menu-toggle="hover">
							<a href="javascript:;" class="menu-link menu-toggle">
								<span class="svg-icon menu-icon"><i class="fas fa-align-justify"></i></span>
								<span class="menu-text">Клиент</span>
								<i class="menu-arrow"></i>
							</a>
							<div class="menu-submenu"><i class="menu-arrow"></i>
								<ul class="menu-subnav">

									<?php $active = ($page == "bill_list.php" ? "menu-item-active" : "");?>
									<li class="menu-item <?=$active;?>" aria-haspopup="true">
										<a href="/sebt/pages/bill_list.php" class="menu-link">
											<i class="menu-bullet menu-bullet-dot">
												<span></span>
											</i>
											<span class="menu-text">Счета на оплату</span>
										</a>
									</li>

									<?php $active = ($page == "bill_pay_list.php" ? "menu-item-active" : "");?>
									<li class="menu-item <?=$active;?>" aria-haspopup="true">
										<a href="/sebt/pages/bill_pay_list.php" class="menu-link">
											<i class="menu-bullet menu-bullet-dot">
												<span></span>
											</i>
											<span class="menu-text">Список оплат</span>
										</a>
									</li>

									<?php $active = ($page == "reestr.php" ? "menu-item-active" : "");?>
									<li class="menu-item <?=$active;?>" aria-haspopup="true">
										<a href="/sebt/pages/reestr.php" class="menu-link">
											<i class="menu-bullet menu-bullet-dot">
												<span></span>
											</i>
											<span class="menu-text">Реестр сделок</span>
										</a>
									</li>

									<?php $active = ($page == "own_brokers.php" ? "menu-item-active" : "");?>
									<li class="menu-item <?=$active;?>" aria-haspopup="true">
										<a href="/sebt/pages/own_brokers.php" class="menu-link">
											<i class="menu-bullet menu-bullet-dot">
												<span></span>
											</i>
											<span class="menu-text">Брокеры</span>
										</a>
									</li>

									<?php $active = ($page == "assignment.php" ? "menu-item-active" : "");?>
									<li class="menu-item <?=$active;?>" aria-haspopup="true">
										<a href="/sebt/pages/assignment.php" class="menu-link">
											<i class="menu-bullet menu-bullet-dot">
												<span></span>
											</i>
											<span class="menu-text">Договор поручениe на продажу</span>
										</a>
									</li>

									<?php $active = ($page == "offers.php" ? "menu-item-active" : "");?>
									<li class="menu-item <?=$active;?>" aria-haspopup="true">
										<a href="/sebt/pages/offers.php" class="menu-link">
											<i class="menu-bullet menu-bullet-dot">
												<span></span>
											</i>
											<span class="menu-text">Список заявок</span>
										</a>
									</li>

									<?php $active = ($page == "buliten.php" ? "menu-item-active" : "");?>
									<li class="menu-item <?=$active;?>" aria-haspopup="true">
										<a href="/sebt/pages/buliten.php" class="menu-link">
											<i class="menu-bullet menu-bullet-dot">
												<span></span>
											</i>
											<span class="menu-text">Бюллетень</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
					<!--end::Menu Nav-->
				</div>
				<!--end::Menu Container-->
			</div>
			<!--end::Aside Menu-->
		</div>
		<!--end::Aside-->
		<!--begin::Wrapper-->
		<div class="d-flex flex-column flex-row-fluid wrapper" style="padding-top: 0px!important;" id="kt_wrapper">