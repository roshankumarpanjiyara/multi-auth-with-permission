	<!--begin::Body-->
	<body id="kt_body" class="sidebar-enabled">
        {{-- @include('notify::messages') --}}
        {{--  Laravel 7 or greater --}}
        <x:notify-messages />
        @notifyJs
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
				<div id="kt_aside" class="aside py-9" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
					<!--begin::Brand-->
					<div class="aside-logo flex-column-auto px-6 mb-2" id="kt_aside_logo">
						<!--begin::Logo-->
						<a href="{{route('admin.dashboard')}}">
							<img alt="Logo" src="{{asset("template/dist/assets/media/logos/logo-demo3-default.svg")}}" class=" h-50px w-200px logo" />
						</a>
						<!--end::Logo-->
					</div>
					<!--end::Brand-->
					<!--begin::Aside menu-->
					<div class="aside-menu flex-column-fluid ps-5 pe-3 mb-9" id="kt_aside_menu">
						<!--begin::Aside Menu-->
						<div class="w-100 hover-scroll-overlay-y d-flex pe-2" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu, #kt_aside_menu_wrapper" data-kt-scroll-offset="100">
							<!--begin::Menu-->
							<div class="menu menu-column menu-rounded fw-bold my-auto" id="#kt_aside_menu" data-kt-menu="true">
                                <div class="menu-item">
									<a class="menu-link {{ Route::is('admin.dashboard') ? 'active' : '' }}" href="{{route('admin.dashboard')}}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
											<span class="svg-icon svg-icon-5">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="black" />
													<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Dashboard</span>
									</a>
								</div>

                                @if(isset(auth()->user()->role->permission['name']['user']['can-view']))
                                    <div class="menu-item">
                                        <a class="menu-link {{ Route::is('admins.index') ? 'active' : '' }}" href="{{route('admins.index')}}">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                <span class="svg-icon svg-icon-5">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="black" />
                                                        <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title">Admin</span>
                                        </a>
                                    </div>
                                @endif

                                @if(isset(auth()->user()->role->permission['name']['user']['can-view']))
                                    <div class="menu-item">
                                        <a class="menu-link {{ Route::is('users.index') ? 'active' : '' }}" href="{{route('users.index')}}">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                <span class="svg-icon svg-icon-5">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="black" />
                                                        <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title">User</span>
                                        </a>
                                    </div>
                                @endif

                                @if(isset(auth()->user()->role->permission['name']['role']['can-view']))
                                    <div class="menu-item">
                                        <a class="menu-link {{ Route::is('roles.index') ? 'active' : '' }}" href="{{route('roles.index')}}">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                <span class="svg-icon svg-icon-5">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="black" />
                                                        <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title">Role</span>
                                        </a>
                                    </div>
                                @endif

                                @if(isset(auth()->user()->role->permission['name']['permission']['can-view']))
                                    <div class="menu-item">
                                        <a class="menu-link {{ Route::is('permissions.index') ? 'active' : '' }}" href="{{route('permissions.index')}}">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                <span class="svg-icon svg-icon-5">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="black" />
                                                        <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title">Permission</span>
                                        </a>
                                    </div>
                                @endif
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
											<span class="svg-icon svg-icon-5">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="black" />
													<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Crafted</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion">
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Pages</span>
												<span class="menu-arrow"></span>
											</span>
											<div class="menu-sub menu-sub-accordion menu-active-bg">
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Profile</span>
														<span class="menu-arrow"></span>
													</span>
													<div class="menu-sub menu-sub-accordion menu-active-bg">
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/pages/profile/overview.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Overview</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/pages/profile/projects.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Projects</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/pages/profile/campaigns.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Campaigns</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/pages/profile/documents.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Documents</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/pages/profile/connections.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Connections</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/pages/profile/activity.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Activity</span>
															</a>
														</div>
													</div>
												</div>
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Projects</span>
														<span class="menu-arrow"></span>
													</span>
													<div class="menu-sub menu-sub-accordion menu-active-bg">
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/pages/projects/list.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">My Projects</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/pages/projects/project.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">View Project</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/pages/projects/targets.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Targets</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/pages/projects/budget.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Budget</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/pages/projects/users.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Users</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/pages/projects/files.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Files</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/pages/projects/activity.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Activity</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/pages/projects/settings.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Settings</span>
															</a>
														</div>
													</div>
												</div>
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Wizards</span>
														<span class="menu-arrow"></span>
													</span>
													<div class="menu-sub menu-sub-accordion menu-active-bg">
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/pages/wizards/horizontal.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Horizontal</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/pages/wizards/vertical.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Vertical</span>
															</a>
														</div>
													</div>
												</div>
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Search</span>
														<span class="menu-arrow"></span>
													</span>
													<div class="menu-sub menu-sub-accordion menu-active-bg">
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/pages/search/horizontal.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Horizontal</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/pages/search/vertical.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Vertical</span>
															</a>
														</div>
													</div>
												</div>
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Blog</span>
														<span class="menu-arrow"></span>
													</span>
													<div class="menu-sub menu-sub-accordion menu-active-bg">
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/pages/blog/home.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Blog Home</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/pages/blog/post.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Blog Post</span>
															</a>
														</div>
													</div>
												</div>
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Company</span>
														<span class="menu-arrow"></span>
													</span>
													<div class="menu-sub menu-sub-accordion menu-active-bg">
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/pages/company/about.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">About Us</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/pages/company/pricing.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Pricing</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/pages/company/contact.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Contact Us</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/pages/company/team.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Our Team</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/pages/company/licenses.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Licenses</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/pages/company/sitemap.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Sitemap</span>
															</a>
														</div>
													</div>
												</div>
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Careers</span>
														<span class="menu-arrow"></span>
													</span>
													<div class="menu-sub menu-sub-accordion menu-active-bg">
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/pages/careers/list.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Careers List</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/pages/careers/apply.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Careers Apply</span>
															</a>
														</div>
													</div>
												</div>
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">FAQ</span>
														<span class="menu-arrow"></span>
													</span>
													<div class="menu-sub menu-sub-accordion menu-active-bg">
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/pages/faq/classic.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Classic</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/pages/faq/extended.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Extended</span>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Account</span>
												<span class="menu-arrow"></span>
											</span>
											<div class="menu-sub menu-sub-accordion menu-active-bg">
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/account/overview.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Overview</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/account/settings.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Settings</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/account/security.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Security</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/account/billing.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Billing</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/account/statements.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Statements</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/account/referrals.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Referrals</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/account/api-keys.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">API Keys</span>
													</a>
												</div>
											</div>
										</div>
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Authentication</span>
												<span class="menu-arrow"></span>
											</span>
											<div class="menu-sub menu-sub-accordion menu-active-bg">
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Basic Flow</span>
														<span class="menu-arrow"></span>
													</span>
													<div class="menu-sub menu-sub-accordion menu-active-bg">
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/authentication/flows/basic/sign-in.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Sign-in</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/authentication/flows/basic/sign-up.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Sign-up</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/authentication/flows/basic/two-steps.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Two-steps</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/authentication/flows/basic/password-reset.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Password Reset</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/authentication/flows/basic/new-password.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">New Password</span>
															</a>
														</div>
													</div>
												</div>
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Aside Flow</span>
														<span class="menu-arrow"></span>
													</span>
													<div class="menu-sub menu-sub-accordion menu-active-bg">
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/authentication/flows/aside/sign-in.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Sign-in</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/authentication/flows/aside/sign-up.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Sign-up</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/authentication/flows/aside/two-steps.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Two-steps</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/authentication/flows/aside/password-reset.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Password Reset</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/authentication/flows/aside/new-password.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">New Password</span>
															</a>
														</div>
													</div>
												</div>
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Dark Flow</span>
														<span class="menu-arrow"></span>
													</span>
													<div class="menu-sub menu-sub-accordion menu-active-bg">
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/authentication/flows/dark/sign-in.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Sign-in</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/authentication/flows/dark/sign-up.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Sign-up</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/authentication/flows/dark/two-steps.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Two-steps</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/authentication/flows/dark/password-reset.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Password Reset</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/authentication/flows/dark/new-password.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">New Password</span>
															</a>
														</div>
													</div>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/authentication/extended/multi-steps-sign-up.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Multi-steps Sign-up</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/authentication/extended/free-trial-sign-up.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Free Trial Sign-up</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/authentication/extended/coming-soon.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Coming Soon</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/authentication/general/welcome.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Welcome Message</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/authentication/general/verify-email.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Verify Email</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/authentication/general/password-confirmation.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Password Confirmation</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/authentication/general/deactivation.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Account Deactivation</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/authentication/general/error-404.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Error 404</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/authentication/general/error-500.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Error 500</span>
													</a>
												</div>
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Email Templates</span>
														<span class="menu-arrow"></span>
													</span>
													<div class="menu-sub menu-sub-accordion menu-active-bg">
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/authentication/email/verify-email.html" target="blank">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Verify Email</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/authentication/email/invitation.html" target="blank">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Account Invitation</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/authentication/email/password-reset.html" target="blank">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Password Reset</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/authentication/email/password-change.html" target="blank">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Password Changed</span>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Modals</span>
												<span class="menu-arrow"></span>
											</span>
											<div class="menu-sub menu-sub-accordion menu-active-bg">
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">General</span>
														<span class="menu-arrow"></span>
													</span>
													<div class="menu-sub menu-sub-accordion menu-active-bg">
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/modals/general/invite-friends.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Invite Friends</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/modals/general/view-users.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">View Users</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/modals/general/upgrade-plan.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Upgrade Plan</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/modals/general/share-earn.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Share &amp; Earn</span>
															</a>
														</div>
													</div>
												</div>
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Forms</span>
														<span class="menu-arrow"></span>
													</span>
													<div class="menu-sub menu-sub-accordion menu-active-bg">
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/modals/forms/new-target.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">New Target</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/modals/forms/new-card.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">New Card</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/modals/forms/new-address.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">New Address</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/modals/forms/create-api-key.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Create API Key</span>
															</a>
														</div>
													</div>
												</div>
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Wizards</span>
														<span class="menu-arrow"></span>
													</span>
													<div class="menu-sub menu-sub-accordion menu-active-bg">
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/modals/wizards/two-factor-authentication.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Two Factor Auth</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/modals/wizards/create-app.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Create App</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/modals/wizards/create-account.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Create Account</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/modals/wizards/create-project.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Create Project</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/modals/wizards/offer-a-deal.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Offer a Deal</span>
															</a>
														</div>
													</div>
												</div>
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Search</span>
														<span class="menu-arrow"></span>
													</span>
													<div class="menu-sub menu-sub-accordion menu-active-bg">
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/modals/search/users.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Users</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/modals/search/select-location.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Select Location</span>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Widgets</span>
												<span class="menu-arrow"></span>
											</span>
											<div class="menu-sub menu-sub-accordion menu-active-bg">
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/widgets/lists.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Lists</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/widgets/statistics.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Statistics</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/widgets/charts.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Charts</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/widgets/mixed.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Mixed</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/widgets/tables.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Tables</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/widgets/feeds.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Feeds</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
											<span class="svg-icon svg-icon-5">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="black" />
													<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Applications</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion">
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Customers</span>
												<span class="menu-arrow"></span>
											</span>
											<div class="menu-sub menu-sub-accordion">
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/apps/customers/getting-started.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Getting Started</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/apps/customers/list.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Customer Listing</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/apps/customers/view.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Customer Details</span>
													</a>
												</div>
											</div>
										</div>
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Subscriptions</span>
												<span class="menu-arrow"></span>
											</span>
											<div class="menu-sub menu-sub-accordion">
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/apps/subscriptions/getting-started.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Getting Started</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/apps/subscriptions/list.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Subscription List</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/apps/subscriptions/add.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Add Subscription</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/apps/subscriptions/view.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">View Subscription</span>
													</a>
												</div>
											</div>
										</div>
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Invoice Manager</span>
												<span class="menu-arrow"></span>
											</span>
											<div class="menu-sub menu-sub-accordion">
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">View Invoices</span>
														<span class="menu-arrow"></span>
													</span>
													<div class="menu-sub menu-sub-accordion menu-active-bg">
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/apps/invoices/view/invoice-1.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Invoice 1</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/apps/invoices/view/invoice-2.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Invoice 2</span>
															</a>
														</div>
													</div>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/apps/invoices/create.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Create Invoice</span>
													</a>
												</div>
											</div>
										</div>
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">User Management</span>
												<span class="menu-arrow"></span>
											</span>
											<div class="menu-sub menu-sub-accordion">
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Users</span>
														<span class="menu-arrow"></span>
													</span>
													<div class="menu-sub menu-sub-accordion">
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/apps/user-management/users/list.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Users List</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/apps/user-management/users/view.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">View User</span>
															</a>
														</div>
													</div>
												</div>
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Roles</span>
														<span class="menu-arrow"></span>
													</span>
													<div class="menu-sub menu-sub-accordion">
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/apps/user-management/roles/list.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Roles List</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/apps/user-management/roles/view.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">View Role</span>
															</a>
														</div>
													</div>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/apps/user-management/permissions.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Permissions</span>
													</a>
												</div>
											</div>
										</div>
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Support Center</span>
												<span class="menu-arrow"></span>
											</span>
											<div class="menu-sub menu-sub-accordion">
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/apps/support-center/overview.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Overview</span>
													</a>
												</div>
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Tickets</span>
														<span class="menu-arrow"></span>
													</span>
													<div class="menu-sub menu-sub-accordion">
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/apps/support-center/tickets/list.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Tickets List</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/apps/support-center/tickets/view.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">View Ticket</span>
															</a>
														</div>
													</div>
												</div>
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Tutorials</span>
														<span class="menu-arrow"></span>
													</span>
													<div class="menu-sub menu-sub-accordion">
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/apps/support-center/tutorials/list.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Tutorials List</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="../../demo3/dist/apps/support-center/tutorials/post.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Tutorial Post</span>
															</a>
														</div>
													</div>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/apps/support-center/faq.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">FAQ</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/apps/support-center/licenses.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Licenses</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/apps/support-center/contact.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Contact Us</span>
													</a>
												</div>
											</div>
										</div>
										<div class="menu-item">
											<a class="menu-link" href="../../demo3/dist/apps/calendar.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Calendar</span>
											</a>
										</div>
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Chat</span>
												<span class="menu-arrow"></span>
											</span>
											<div class="menu-sub menu-sub-accordion">
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/apps/chat/private.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Private Chat</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/apps/chat/group.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Group Chat</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="../../demo3/dist/apps/chat/drawer.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Drawer Chat</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="menu-item">
									<a class="menu-link" href="https://preview.keenthemes.com/metronic8/demo3/layout-builder.html">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
											<span class="svg-icon svg-icon-5">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="black" />
													<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Layout Builder</span>
									</a>
								</div>
							</div>
							<!--end::Menu-->
						</div>
						<!--end::Aside Menu-->
					</div>
					<!--end::Aside menu-->
					<!--begin::Footer-->
					<div class="aside-footer flex-column-auto px-9" id="kt_aside_footer">
						<!--begin::User panel-->
						<div class="d-flex flex-stack">
							<!--begin::Wrapper-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-circle symbol-40px">
                                    @if (auth()->user()->profile_photo_path)
                                        <img src="{{asset(Auth::user()->profile_photo_path) }}" alt="{{ Auth::user()->name }}" />
                                    @else
                                        <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                    @endif
                                </div>
                                <!--end::Avatar-->
                                <!--begin::User info-->
                                <div class="ms-2">
                                    <!--begin::Name-->
                                    <p class="text-gray-800 text-hover-primary fs-6 fw-bolder lh-1">{{auth()->user()->name}}</p>
                                    <!--end::Name-->
                                    <!--begin::Major-->
                                    <span class="text-white fw-bold d-block fs-7 lh-1">{{auth()->user()->username}}</span>
                                    <!--end::Major-->
                                </div>
                                <!--end::User info-->
                            </div>
							<!--end::Wrapper-->
							<!--begin::User menu-->
							<div class="ms-1">
								<div class="btn btn-sm btn-icon btn-active-color-primary position-relative me-n2" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-end">
									<!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
									<span class="svg-icon svg-icon-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="black" />
											<path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
								<!--begin::Menu-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<div class="menu-content d-flex align-items-center px-3">
											<!--begin::Avatar-->
											<div class="symbol symbol-50px me-5">
                                                @if (auth()->user()->profile_photo_path)
                                                    <img src="{{asset(Auth::user()->profile_photo_path) }}" alt="{{ Auth::user()->name }}" />
                                                @else
                                                    <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                                @endif
											</div>
											<!--end::Avatar-->
											<!--begin::Username-->
											<div class="d-flex flex-column">
												<div class="fw-bolder d-flex align-items-center fs-5">{{Auth::user()->name}}</div>
												<p class="fw-bold text-muted text-hover-primary fs-8">{{Auth::user()->email}}</p>
											</div>
											<!--end::Username-->
										</div>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu separator-->
									<div class="separator my-2"></div>
									<!--end::Menu separator-->
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="{{ route('admin.profile.view') }}" class="menu-link px-5">My Profile</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu separator-->
									<div class="separator my-2"></div>
									<!--end::Menu separator-->
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										    <a href="{{ route('logout') }}" class="menu-link px-5" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">Sign Out</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu separator-->
									<div class="separator my-2"></div>
									<!--end::Menu separator-->
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<div class="menu-content px-5">
											<label class="form-check form-switch form-check-custom form-check-solid pulse pulse-success" for="kt_user_menu_dark_mode_toggle">
												<input class="form-check-input w-30px h-20px" type="checkbox" value="1" name="mode" id="kt_user_menu_dark_mode_toggle" data-kt-url="../../demo3/dist/index.html" />
												<span class="pulse-ring ms-n1"></span>
												<span class="form-check-label text-gray-600 fs-7">Dark Mode</span>
											</label>
										</div>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu-->
							</div>
							<!--end::User menu-->
						</div>
						<!--end::User panel-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Aside-->
                <!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header">
						<!--begin::Container-->
						<div class="container d-flex align-items-center justify-content-between" id="kt_header_container">
							<!--begin::Page title-->
							<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
								<!--begin::Heading-->
								<h1 class="d-flex flex-column text-dark fw-bolder my-0 fs-1">Hello, {{Auth::user()->name}}
								<!--end::Heading-->
							</div>
							<!--end::Page title=-->
							<!--begin::Wrapper-->
							<div class="d-flex d-lg-none align-items-center ms-n2 me-2">
								<!--begin::Aside mobile toggle-->
								<div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
									<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
									<span class="svg-icon svg-icon-1 mt-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
								<!--end::Aside mobile toggle-->
								<!--begin::Logo-->
								<a href="{{route('admin.dashboard')}}" class="d-flex align-items-center">
									<img alt="Logo" src="{{asset("logos/img/blogbus-logo-1.png")}}" class="h-30px" />
								</a>
								<!--end::Logo-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
