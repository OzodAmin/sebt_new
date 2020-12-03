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
				<a href="/" class="brand-logo">
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
						<li class="menu-item menu-item-active" aria-haspopup="true">
							<a href="/sebt/<?=$language;?>/login" class="menu-link">
								<span class="svg-icon menu-icon">
									<i class="fas fa-align-justify"></i>
								</span>
								<span class="menu-text">Login</span>
							</a>
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