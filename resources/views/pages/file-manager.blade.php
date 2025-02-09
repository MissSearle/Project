@extends('layout.default', [
    'appClass' => 'app-content-full-height',
    'appContentClass' => 'd-flex flex-column'
])

@section('title', 'Messenger')

@push('js')
	<script src="/assets/js/demo/file-manager.demo.js"></script>
@endpush

@section('content')
	<!-- BEGIN page-header -->
	<h1 class="page-header">File Manager <small>header small text goes here...</small></h1>
	<!-- END page-header -->
	
	<div class="card flex-1 m-0 d-flex flex-column overflow-hidden">
		<div class="card-header with-btn">
			FILE MANAGER
			<div class="card-header-btn">
				<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
				<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
				<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
			</div>
		</div>
		<div class="card-body p-0 flex-1 overflow-hidden">
			<div class="file-manager h-100" id="fileManager">
				<div class="file-manager-toolbar">
					 <button type="button" class="btn border-0 d-inline-flex align-items-center"><iconify-icon icon="material-symbols-light:add" class="fs-20px my-n2 me-1 text-theme"></iconify-icon> File</button>
					 <button type="button" class="btn border-0 d-inline-flex align-items-center"><iconify-icon icon="material-symbols-light:add" class="fs-20px my-n2 me-1 text-theme"></iconify-icon> Folder</button>
					 <button type="button" class="btn border-0 d-inline-flex align-items-center opacity-3" disabled><iconify-icon icon="material-symbols-light:content-copy-outline-sharp" class="fs-20px my-n2 me-1"></iconify-icon> Copy</button>
					 <button type="button" class="btn border-0 d-inline-flex align-items-center opacity-3" disabled><iconify-icon icon="material-symbols-light:drag-pan" class="fs-20px my-n2 me-1"></iconify-icon> Move</button>
					 <button type="button" class="btn border-0 d-inline-flex align-items-center"><iconify-icon icon="material-symbols-light:upload-sharp" class="fs-20px my-n2 me-1 text-theme"></iconify-icon> Upload</button>
					 <button type="button" class="btn border-0 d-inline-flex align-items-center opacity-3" disabled><iconify-icon icon="material-symbols-light:download-sharp" class="fs-20px my-n2 me-1"></iconify-icon> Download</button>
					 <button type="button" class="btn border-0 d-inline-flex align-items-center opacity-3"><iconify-icon icon="material-symbols-light:delete-forever-outline-sharp" class="fs-20px my-n2 me-1"></iconify-icon> Delete</button>
					 <button type="button" class="btn border-0 d-inline-flex align-items-center opacity-3"><iconify-icon icon="material-symbols-light:settings-backup-restore" class="fs-20px my-n2 me-1"></iconify-icon> Restore</button>
					 <button type="button" class="btn border-0 d-inline-flex align-items-center opacity-3"><iconify-icon icon="material-symbols-light:person-edit-outline-sharp" class="fs-20px my-n2 me-1"></iconify-icon> Rename</button>
					 <button type="button" class="btn border-0 d-inline-flex align-items-center opacity-3"><iconify-icon icon="material-symbols-light:edit-square-outline-sharp" class="fs-20px my-n2 me-1"></iconify-icon> Edit</button>
					 <button type="button" class="btn border-0 d-inline-flex align-items-center opacity-3"><iconify-icon icon="material-symbols-light:code-blocks-outline-sharp" class="fs-20px my-n2 me-1"></iconify-icon> HTML Editor</button>
					 <button type="button" class="btn border-0 d-inline-flex align-items-center opacity-3"><iconify-icon icon="material-symbols-light:security" class="fs-20px my-n2 me-1"></iconify-icon> Permissions</button>
					 <button type="button" class="btn border-0 d-inline-flex align-items-center opacity-3"><iconify-icon icon="material-symbols-light:eye-tracking-outline-sharp" class="fs-20px my-n2 me-1"></iconify-icon> View</button>
					 <button type="button" class="btn border-0 d-inline-flex align-items-center opacity-3"><iconify-icon icon="material-symbols-light:login-outline-sharp" class="fs-20px my-n2 me-1"></iconify-icon> Extract</button>
					 <button type="button" class="btn border-0 d-inline-flex align-items-center opacity-3"><iconify-icon icon="material-symbols-light:compress" class="fs-20px my-n2 me-1"></iconify-icon> Compress</button>
				</div>
				<div class="file-manager-container">
					<div class="file-manager-sidebar">
						<div class="file-manager-sidebar-mobile-toggler">
							<button type="button" class="btn border-0 d-inline-flex align-items-center" data-toggle-class="file-manager-sidebar-mobile-toggled" data-toggle-target="#fileManager"><i class="far fa-lg fa-folder"></i></button>
						</div>
						<div class="file-manager-sidebar-content">
							<div data-scrollbar="true" data-height="100%" class="p-3">
								<input type="text" class="form-control mb-3" placeholder="Seach file..." />
								<div class="file-tree mb-3">
									<div class="file-node has-sub expand selected">
										<a href="javascript:;" class="file-link">
											<span class="file-arrow"></span>
											<span class="file-info">
												<span class="file-icon"><i class="fa fa-folder fa-lg text-theme"></i></span>
												<span class="file-text">public_html</span>
											</span>
										</a>
										<div class="file-tree">
											<div class="file-node has-sub">
												<a href="javascript:;" class="file-link">
													<span class="file-arrow"></span>
													<span class="file-info">
														<span class="file-icon"><i class="fa fa-folder fa-lg text-theme"></i></span>
														<span class="file-text">services</span>
													</span>
												</a>
												<div class="file-tree">
													<div class="file-node has-sub">
														<a href="javascript:;" class="file-link">
															<span class="file-arrow"></span>
															<span class="file-info">
																<span class="file-icon"><i class="fa fa-folder fa-lg text-theme"></i></span>
																<span class="file-text">app_development</span>
															</span>
														</a>
														<div class="file-tree">
															<div class="file-node">
																<a href="javascript:;" class="file-link">
																	<span class="file-arrow"></span>
																	<span class="file-info">
																		<span class="file-icon"><i class="fa fa-file-code fa-lg text-body text-opacity-50"></i></span>
																		<span class="file-text">index.html</span>
																	</span>
																</a>
															</div>
															<div class="file-node">
																<a href="javascript:;" class="file-link">
																	<span class="file-arrow"></span>
																	<span class="file-info">
																		<span class="file-icon"><i class="fa fa-file-code fa-lg text-body text-opacity-50"></i></span>
																		<span class="file-text">android_app.html</span>
																	</span>
																</a>
															</div>
															<div class="file-node">
																<a href="javascript:;" class="file-link">
																	<span class="file-arrow"></span>
																	<span class="file-info">
																		<span class="file-icon"><i class="fa fa-file-code fa-lg text-body text-opacity-50"></i></span>
																		<span class="file-text">ios_app.html</span>
																	</span>
																</a>
															</div>
														</div>
													</div>
													<div class="file-node has-sub">
														<a href="javascript:;" class="file-link">
															<span class="file-arrow"></span>
															<span class="file-info">
																<span class="file-icon"><i class="fa fa-folder fa-lg text-theme"></i></span>
																<span class="file-text">digital_marketing</span>
															</span>
														</a>
														<div class="file-tree">
															<div class="file-node">
																<a href="javascript:;" class="file-link">
																	<span class="file-arrow"></span>
																	<span class="file-info">
																		<span class="file-icon"><i class="fa fa-file-code fa-lg text-body text-opacity-50"></i></span>
																		<span class="file-text">index.html</span>
																	</span>
																</a>
															</div>
															<div class="file-node">
																<a href="javascript:;" class="file-link">
																	<span class="file-arrow"></span>
																	<span class="file-info">
																		<span class="file-icon"><i class="fa fa-file-code fa-lg text-body text-opacity-50"></i></span>
																		<span class="file-text">social_media.html</span>
																	</span>
																</a>
															</div>
															<div class="file-node">
																<a href="javascript:;" class="file-link">
																	<span class="file-arrow"></span>
																	<span class="file-info">
																		<span class="file-icon"><i class="fa fa-file-code fa-lg text-body text-opacity-50"></i></span>
																		<span class="file-text">seo.html</span>
																	</span>
																</a>
															</div>
														</div>
													</div>
													<div class="file-node">
														<a href="javascript:;" class="file-link">
															<span class="file-arrow"></span>
															<span class="file-info">
																<span class="file-icon"><i class="fa fa-file-code fa-lg text-body text-opacity-50"></i></span>
																<span class="file-text">index.html</span>
															</span>
														</a>
													</div>
													<div class="file-node">
														<a href="javascript:;" class="file-link">
															<span class="file-arrow"></span>
															<span class="file-info">
																<span class="file-icon"><i class="fa fa-file-code fa-lg text-body text-opacity-50"></i></span>
																<span class="file-text">web_design.html</span>
															</span>
														</a>
													</div>
													<div class="file-node">
														<a href="javascript:;" class="file-link">
															<span class="file-arrow"></span>
															<span class="file-info">
																<span class="file-icon"><i class="fa fa-file-code fa-lg text-body text-opacity-50"></i></span>
																<span class="file-text">seo_services.html</span>
															</span>
														</a>
													</div>
												</div>
											</div>
											<div class="file-node has-sub">
												<a href="javascript:;" class="file-link">
													<span class="file-arrow"></span>
													<span class="file-info">
														<span class="file-icon"><i class="fa fa-folder fa-lg text-theme"></i></span>
														<span class="file-text">portfolio</span>
													</span>
												</a>
												<div class="file-tree">
													<div class="file-node">
														<a href="javascript:;" class="file-link">
															<span class="file-arrow"></span>
															<span class="file-info">
																<span class="file-icon"><i class="fa fa-file-code fa-lg text-body text-opacity-50"></i></span>
																<span class="file-text">index.html</span>
															</span>
														</a>
													</div>
													<div class="file-node">
														<a href="javascript:;" class="file-link">
															<span class="file-arrow"></span>
															<span class="file-info">
																<span class="file-icon"><i class="fa fa-file-code fa-lg text-body text-opacity-50"></i></span>
																<span class="file-text">project_1.html</span>
															</span>
														</a>
													</div>
													<div class="file-node">
														<a href="javascript:;" class="file-link">
															<span class="file-arrow"></span>
															<span class="file-info">
																<span class="file-icon"><i class="fa fa-file-code fa-lg text-body text-opacity-50"></i></span>
																<span class="file-text">project_2.html</span>
															</span>
														</a>
													</div>
													<div class="file-node">
														<a href="javascript:;" class="file-link">
															<span class="file-arrow"></span>
															<span class="file-info">
																<span class="file-icon"><i class="fa fa-file-code fa-lg text-body text-opacity-50"></i></span>
																<span class="file-text">project_3.html</span>
															</span>
														</a>
													</div>
													<div class="file-node">
														<a href="javascript:;" class="file-link">
															<span class="file-arrow"></span>
															<span class="file-info">
																<span class="file-icon"><i class="fa fa-file-code fa-lg text-body text-opacity-50"></i></span>
																<span class="file-text">project_4.html</span>
															</span>
														</a>
													</div>
													<div class="file-node">
														<a href="javascript:;" class="file-link">
															<span class="file-arrow"></span>
															<span class="file-info">
																<span class="file-icon"><i class="fa fa-file-code fa-lg text-body text-opacity-50"></i></span>
																<span class="file-text">project_5.html</span>
															</span>
														</a>
													</div>
												</div>
											</div>
											<div class="file-node has-sub">
												<a href="javascript:;" class="file-link">
													<span class="file-arrow"></span>
													<span class="file-info">
														<span class="file-icon"><i class="fa fa-folder fa-lg text-theme"></i></span>
														<span class="file-text">blog</span>
													</span>
												</a>
												<div class="file-tree">
													<div class="file-node">
														<a href="javascript:;" class="file-link">
															<span class="file-arrow"></span>
															<span class="file-info">
																<span class="file-icon"><i class="fa fa-file-code fa-lg text-body text-opacity-50"></i></span>
																<span class="file-text">index.html</span>
															</span>
														</a>
													</div>
													<div class="file-node">
														<a href="javascript:;" class="file-link">
															<span class="file-arrow"></span>
															<span class="file-info">
																<span class="file-icon"><i class="fa fa-file-code fa-lg text-body text-opacity-50"></i></span>
																<span class="file-text">post_1.html</span>
															</span>
														</a>
													</div>
													<div class="file-node">
														<a href="javascript:;" class="file-link">
															<span class="file-arrow"></span>
															<span class="file-info">
																<span class="file-icon"><i class="fa fa-file-code fa-lg text-body text-opacity-50"></i></span>
																<span class="file-text">post_2.html</span>
															</span>
														</a>
													</div>
													<div class="file-node">
														<a href="javascript:;" class="file-link">
															<span class="file-arrow"></span>
															<span class="file-info">
																<span class="file-icon"><i class="fa fa-file-code fa-lg text-body text-opacity-50"></i></span>
																<span class="file-text">post_3.html</span>
															</span>
														</a>
													</div>
													<div class="file-node">
														<a href="javascript:;" class="file-link">
															<span class="file-arrow"></span>
															<span class="file-info">
																<span class="file-icon"><i class="fa fa-file-code fa-lg text-body text-opacity-50"></i></span>
																<span class="file-text">post_4.html</span>
															</span>
														</a>
													</div>
													<div class="file-node">
														<a href="javascript:;" class="file-link">
															<span class="file-arrow"></span>
															<span class="file-info">
																<span class="file-icon"><i class="fa fa-file-code fa-lg text-body text-opacity-50"></i></span>
																<span class="file-text">post_5.html</span>
															</span>
														</a>
													</div>
												</div>
											</div>
											<div class="file-node has-sub">
												<a href="javascript:;" class="file-link">
													<span class="file-arrow"></span>
													<span class="file-info">
														<span class="file-icon"><i class="fa fa-folder fa-lg text-theme"></i></span>
														<span class="file-text">assets</span>
													</span>
												</a>
												<div class="file-tree">
													<div class="file-node has-sub">
														<a href="javascript:;" class="file-link">
															<span class="file-arrow"></span>
															<span class="file-info">
																<span class="file-icon"><i class="fa fa-folder fa-lg text-theme"></i></span>
																<span class="file-text">css</span>
															</span>
														</a>
														<div class="file-tree">
															<div class="file-node">
																<a href="javascript:;" class="file-link">
																	<span class="file-arrow"></span>
																	<span class="file-info">
																		<span class="file-icon"><i class="fa fa-file-text fa-lg text-body text-opacity-50"></i></span>
																		<span class="file-text">styles.css</span>
																	</span>
																</a>
															</div>
															<div class="file-node">
																<a href="javascript:;" class="file-link">
																	<span class="file-arrow"></span>
																	<span class="file-info">
																		<span class="file-icon"><i class="fa fa-file-text fa-lg text-body text-opacity-50"></i></span>
																		<span class="file-text">main.css</span>
																	</span>
																</a>
															</div>
															<div class="file-node">
																<a href="javascript:;" class="file-link">
																	<span class="file-arrow"></span>
																	<span class="file-info">
																		<span class="file-icon"><i class="fa fa-file-text fa-lg text-body text-opacity-50"></i></span>
																		<span class="file-text">responsive.css</span>
																	</span>
																</a>
															</div>
															<div class="file-node">
																<a href="javascript:;" class="file-link">
																	<span class="file-arrow"></span>
																	<span class="file-info">
																		<span class="file-icon"><i class="fa fa-file-text fa-lg text-body text-opacity-50"></i></span>
																		<span class="file-text">typography.css</span>
																	</span>
																</a>
															</div>
															<div class="file-node">
																<a href="javascript:;" class="file-link">
																	<span class="file-arrow"></span>
																	<span class="file-info">
																		<span class="file-icon"><i class="fa fa-file-text fa-lg text-body text-opacity-50"></i></span>
																		<span class="file-text">colors.css</span>
																	</span>
																</a>
															</div>
															<div class="file-node">
																<a href="javascript:;" class="file-link">
																	<span class="file-arrow"></span>
																	<span class="file-info">
																		<span class="file-icon"><i class="fa fa-file-text fa-lg text-body text-opacity-50"></i></span>
																		<span class="file-text">layout.css</span>
																	</span>
																</a>
															</div>
															<div class="file-node">
																<a href="javascript:;" class="file-link">
																	<span class="file-arrow"></span>
																	<span class="file-info">
																		<span class="file-icon"><i class="fa fa-file-text fa-lg text-body text-opacity-50"></i></span>
																		<span class="file-text">animations.css</span>
																	</span>
																</a>
															</div>
															<div class="file-node">
																<a href="javascript:;" class="file-link">
																	<span class="file-arrow"></span>
																	<span class="file-info">
																		<span class="file-icon"><i class="fa fa-file-text fa-lg text-body text-opacity-50"></i></span>
																		<span class="file-text">forms.css</span>
																	</span>
																</a>
															</div>
															<div class="file-node">
																<a href="javascript:;" class="file-link">
																	<span class="file-arrow"></span>
																	<span class="file-info">
																		<span class="file-icon"><i class="fa fa-file-text fa-lg text-body text-opacity-50"></i></span>
																		<span class="file-text">buttons.css</span>
																	</span>
																</a>
															</div>
															<div class="file-node">
																<a href="javascript:;" class="file-link">
																	<span class="file-arrow"></span>
																	<span class="file-info">
																		<span class="file-icon"><i class="fa fa-file-text fa-lg text-body text-opacity-50"></i></span>
																		<span class="file-text">grids.css</span>
																	</span>
																</a>
															</div>
														</div>
													</div>
													<div class="file-node has-sub">
														<a href="javascript:;" class="file-link">
															<span class="file-arrow"></span>
															<span class="file-info">
																<span class="file-icon"><i class="fa fa-folder fa-lg text-theme"></i></span>
																<span class="file-text">js</span>
															</span>
														</a>
														<div class="file-tree">
															<div class="file-node">
																<a href="javascript:;" class="file-link">
																	<span class="file-arrow"></span>
																	<span class="file-info">
																		<span class="file-icon"><i class="fa fa-file-text fa-lg text-body text-opacity-50"></i></span>
																		<span class="file-text">main.js</span>
																	</span>
																</a>
															</div>
															<div class="file-node">
																<a href="javascript:;" class="file-link">
																	<span class="file-arrow"></span>
																	<span class="file-info">
																		<span class="file-icon"><i class="fa fa-file-text fa-lg text-body text-opacity-50"></i></span>
																		<span class="file-text">script.js</span>
																	</span>
																</a>
															</div>
															<div class="file-node">
																<a href="javascript:;" class="file-link">
																	<span class="file-arrow"></span>
																	<span class="file-info">
																		<span class="file-icon"><i class="fa fa-file-text fa-lg text-body text-opacity-50"></i></span>
																		<span class="file-text">sliders.js</span>
																	</span>
																</a>
															</div>
															<div class="file-node">
																<a href="javascript:;" class="file-link">
																	<span class="file-arrow"></span>
																	<span class="file-info">
																		<span class="file-icon"><i class="fa fa-file-text fa-lg text-body text-opacity-50"></i></span>
																		<span class="file-text">gallery.js</span>
																	</span>
																</a>
															</div>
															<div class="file-node">
																<a href="javascript:;" class="file-link">
																	<span class="file-arrow"></span>
																	<span class="file-info">
																		<span class="file-icon"><i class="fa fa-file-text fa-lg text-body text-opacity-50"></i></span>
																		<span class="file-text">form-validation.js</span>
																	</span>
																</a>
															</div>
															<div class="file-node">
																<a href="javascript:;" class="file-link">
																	<span class="file-arrow"></span>
																	<span class="file-info">
																		<span class="file-icon"><i class="fa fa-file-text fa-lg text-body text-opacity-50"></i></span>
																		<span class="file-text">animations.js</span>
																	</span>
																</a>
															</div>
															<div class="file-node">
																<a href="javascript:;" class="file-link">
																	<span class="file-arrow"></span>
																	<span class="file-info">
																		<span class="file-icon"><i class="fa fa-file-text fa-lg text-body text-opacity-50"></i></span>
																		<span class="file-text">navigation.js</span>
																	</span>
																</a>
															</div>
															<div class="file-node">
																<a href="javascript:;" class="file-link">
																	<span class="file-arrow"></span>
																	<span class="file-info">
																		<span class="file-icon"><i class="fa fa-file-text fa-lg text-body text-opacity-50"></i></span>
																		<span class="file-text">modal.js</span>
																	</span>
																</a>
															</div>
															<div class="file-node">
																<a href="javascript:;" class="file-link">
																	<span class="file-arrow"></span>
																	<span class="file-info">
																		<span class="file-icon"><i class="fa fa-file-text fa-lg text-body text-opacity-50"></i></span>
																		<span class="file-text">tabs.js</span>
																	</span>
																</a>
															</div>
															<div class="file-node">
																<a href="javascript:;" class="file-link">
																	<span class="file-arrow"></span>
																	<span class="file-info">
																		<span class="file-icon"><i class="fa fa-file-text fa-lg text-body text-opacity-50"></i></span>
																		<span class="file-text">accordion.js</span>
																	</span>
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="file-node">
												<a href="javascript:;" class="file-link">
													<span class="file-arrow"></span>
													<span class="file-info">
														<span class="file-icon"><i class="fa fa-file-code fa-lg text-body text-opacity-50"></i></span>
														<span class="file-text">index.html</span>
													</span>
												</a>
											</div>
											<div class="file-node">
												<a href="javascript:;" class="file-link">
													<span class="file-arrow"></span>
													<span class="file-info">
														<span class="file-icon"><i class="fa fa-file-code fa-lg text-body text-opacity-50"></i></span>
														<span class="file-text">home.html</span>
													</span>
												</a>
											</div>
											<div class="file-node">
												<a href="javascript:;" class="file-link">
													<span class="file-arrow"></span>
													<span class="file-info">
														<span class="file-icon"><i class="fa fa-file-code fa-lg text-body text-opacity-50"></i></span>
														<span class="file-text">about.html</span>
													</span>
												</a>
											</div>
											<div class="file-node">
												<a href="javascript:;" class="file-link">
													<span class="file-arrow"></span>
													<span class="file-info">
														<span class="file-icon"><i class="fa fa-file-code fa-lg text-body text-opacity-50"></i></span>
														<span class="file-text">contact.html</span>
													</span>
												</a>
											</div>
											<div class="file-node">
												<a href="javascript:;" class="file-link">
													<span class="file-arrow"></span>
													<span class="file-info">
														<span class="file-icon"><i class="fa fa-file-code fa-lg text-body text-opacity-50"></i></span>
														<span class="file-text">testimonials.html</span>
													</span>
												</a>
											</div>
											<div class="file-node">
												<a href="javascript:;" class="file-link">
													<span class="file-arrow"></span>
													<span class="file-info">
														<span class="file-icon"><i class="fa fa-file-code fa-lg text-body text-opacity-50"></i></span>
														<span class="file-text">faq.html</span>
													</span>
												</a>
											</div>
											<div class="file-node">
												<a href="javascript:;" class="file-link">
													<span class="file-arrow"></span>
													<span class="file-info">
														<span class="file-icon"><i class="fa fa-file-code fa-lg text-body text-opacity-50"></i></span>
														<span class="file-text">pricing.html</span>
													</span>
												</a>
											</div>
											<div class="file-node">
												<a href="javascript:;" class="file-link">
													<span class="file-arrow"></span>
													<span class="file-info">
														<span class="file-icon"><i class="fa fa-file-code fa-lg text-body text-opacity-50"></i></span>
														<span class="file-text">404.shtml</span>
													</span>
												</a>
											</div>
											<div class="file-node">
												<a href="javascript:;" class="file-link">
													<span class="file-arrow"></span>
													<span class="file-info">
														<span class="file-icon"><i class="fa fa-file-text fa-lg text-body text-opacity-50"></i></span>
														<span class="file-text">.htaccess</span>
													</span>
												</a>
											</div>
											<div class="file-node">
												<a href="javascript:;" class="file-link">
													<span class="file-arrow"></span>
													<span class="file-info">
														<span class="file-icon"><i class="far fa-file-image fa-lg text-success"></i></span>
														<span class="file-text">favicon.ico</span>
													</span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="file-manager-sidebar-footer">
							<div class="d-flex align-items-center">
								<div class="mx-n1">
									<iconify-icon class="fa-3x" icon="solar:ssd-square-line-duotone"></iconify-icon>
								</div>
								<div class="flex-1 ps-3 small">
									<div class="text-body fw-semibold">SSD Storage:</div>
									<div class="progress h-4px my-1">
										<div class="progress-bar progress-bar-striped bg-theme" style="width: 80%"></div>
									</div>
									<div class="text-body text-opacity-50">
										<b class="text-body fw-semibold">127.7GB</b> free of <b class="text-body fw-semibold">256GB</b>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="file-manager-content d-flex flex-column">
						<div class="mb-0 d-flex flex-wrap text-nowrap py-3">
							<button type="button" class="btn bg-white bg-opacity-15 me-2 px-2 mb-2 mb-lg-0"><iconify-icon icon="material-symbols-light:home-outline" class="fs-20px d-block text-theme my-n1"></iconify-icon></button>
							<button type="button" class="btn bg-white bg-opacity-15 opacity-5 mb-2 mb-lg-0 me-2 d-flex align-items-center border-0" disabled><iconify-icon icon="material-symbols-light:arrow-upward-alt" class="fs-20px d-block me-1 ms-n2 my-n1"></iconify-icon> Up One Level&nbsp;</button>
					
							<div class="btn-group me-2 mb-2 mb-lg-0">
								<button type="button" class="btn bg-white bg-opacity-15 opacity-5 me-2 d-flex align-items-center border-0" disabled><iconify-icon icon="material-symbols-light:arrow-left-alt" class="fs-20px d-block me-1 ms-n2 my-n1"></iconify-icon> Back</button>
								<button type="button" class="btn bg-white bg-opacity-15 opacity-5 d-flex align-items-center border-0" disabled>Forward <iconify-icon icon="material-symbols-light:arrow-right-alt" class="fs-20px d-block ms-1 me-n2 my-n1"></iconify-icon></button>
							</div>
							
							<button type="button" class="btn bg-white bg-opacity-15 me-2 px-2 mb-2 mb-lg-0"><iconify-icon icon="material-symbols-light:refresh" class="fs-18px d-block text-theme"></iconify-icon></button>
							
							<div class="btn-group me-2 mb-2 mb-lg-0">
								<button type="button" class="btn bg-white bg-opacity-15 me-2 d-flex align-items-center"><iconify-icon icon="material-symbols-light:check-box-outline" class="fs-20px d-block me-1 ms-n2 my-n1 text-theme"></iconify-icon> Select All</button>
								<button type="button" class="btn bg-white bg-opacity-15 me-2 d-flex align-items-center"><iconify-icon icon="material-symbols-light:indeterminate-check-box-outline" class="fs-20px d-block me-1 ms-n2 my-n1 text-theme"></iconify-icon> Unselect All</button>
							</div>
						</div>
						<div class="flex-1 overflow-hidden">
							<div data-scrollbar="true" data-skip-mobile="true" data-height="100%" class="p-0">
								<table class="table table-striped table-borderless table-sm m-0 text-nowrap">
									<thead class="text-uppercase small">
										<tr>
											<th class="w-10px ps-3"></th>
											<th class="px-3 text-white">Name</th>
											<th class="px-3 text-white w-100px">Size</th>
											<th class="px-3 text-white w-200px">Last Modified</th>
											<th class="px-3 text-white w-200px">Type</th>
											<th class="px-3 text-white w-100px">Permission</th>
										</tr>
									</thead>
									<tbody class="fs-11px">
										<tr>
											<td class="ps-10px border-0 text-center"><i class="fa fa-folder text-theme fa-lg"></i></td>
											<td class="px-10px border-0">services</td>
											<td class="px-10px">4 KB</td>
											<td class="px-10px">Jun 11, 2024, 10:35PM</td>
											<td class="px-10px">http:/unix-directory</td>
											<td class="px-10px border-0">0755</td>
										</tr>
										<tr>
											<td class="ps-10px border-0 text-center"><i class="fa fa-folder text-theme fa-lg"></i></td>
											<td class="px-10px border-0">portfolio</td>
											<td class="px-10px">4 KB</td>
											<td class="px-10px">Jun 11, 2024, 10:36PM</td>
											<td class="px-10px">http:/unix-directory</td>
											<td class="px-10px border-0">0755</td>
										</tr>
										<tr>
											<td class="ps-10px border-0 text-center"><i class="fa fa-folder text-theme fa-lg"></i></td>
											<td class="px-10px border-0">blog</td>
											<td class="px-10px">4 KB</td>
											<td class="px-10px">Jun 11, 2024, 10:04PM</td>
											<td class="px-10px">http:/unix-directory</td>
											<td class="px-10px border-0">0755</td>
										</tr>
										<tr>
											<td class="ps-10px border-0 text-center"><i class="fa fa-folder text-theme fa-lg"></i></td>
											<td class="px-10px border-0">assets</td>
											<td class="px-10px">4 KB</td>
											<td class="px-10px">Jun 11, 2024, 10:14PM</td>
											<td class="px-10px">http:/unix-directory</td>
											<td class="px-10px border-0">0755</td>
										</tr>
										<tr>
											<td class="ps-10px border-0 text-center"><i class="fa fa-folder text-theme fa-lg"></i></td>
											<td class="px-10px border-0">php</td>
											<td class="px-10px">4 KB</td>
											<td class="px-10px">Jun 11, 2024, 10:36PM</td>
											<td class="px-10px">http:/unix-directory</td>
											<td class="px-10px border-0">0755</td>
										</tr>
										<tr>
											<td class="ps-10px border-0 text-center"><i class="fa fa-folder text-theme fa-lg"></i></td>
											<td class="px-10px border-0">docs</td>
											<td class="px-10px">4 KB</td>
											<td class="px-10px">Jun 11, 2024, 10:36PM</td>
											<td class="px-10px">http:/unix-directory</td>
											<td class="px-10px border-0">0755</td>
										</tr>
										<tr>
											<td class="ps-10px border-0 text-center"><i class="fa fa-folder text-theme fa-lg"></i></td>
											<td class="px-10px border-0">archives</td>
											<td class="px-10px">4 KB</td>
											<td class="px-10px">Jun 11, 2024, 10:36PM</td>
											<td class="px-10px">http:/unix-directory</td>
											<td class="px-10px border-0">0755</td>
										</tr>
										<tr>
											<td class="ps-10px border-0 text-center"><i class="fa fa-folder text-theme fa-lg"></i></td>
											<td class="px-10px border-0">video</td>
											<td class="px-10px">4 KB</td>
											<td class="px-10px">Jun 11, 2024, 10:36PM</td>
											<td class="px-10px">http:/unix-directory</td>
											<td class="px-10px border-0">0755</td>
										</tr>
										<tr>
											<td class="ps-10px border-0 text-center"><i class="fa fa-folder text-theme fa-lg"></i></td>
											<td class="px-10px border-0">audio</td>
											<td class="px-10px">4 KB</td>
											<td class="px-10px">Jun 11, 2024, 10:36PM</td>
											<td class="px-10px">http:/unix-directory</td>
											<td class="px-10px border-0">0755</td>
										</tr>
										<tr>
											<td class="ps-10px border-0 text-center"><i class="fa fa-folder text-theme fa-lg"></i></td>
											<td class="px-10px border-0">docs</td>
											<td class="px-10px">4 KB</td>
											<td class="px-10px">Jun 11, 2024, 10:36PM</td>
											<td class="px-10px">http:/unix-directory</td>
											<td class="px-10px border-0">0755</td>
										</tr>
										<tr>
											<td class="ps-10px border-0 text-center"><i class="fa fa-file-code text-body text-opacity-50 fa-lg"></i></td>
											<td class="px-10px border-0">index.html</td>
											<td class="px-10px">39.5 KB</td>
											<td class="px-10px">July 05, 2024, 10:35PM</td>
											<td class="px-10px">text/html</td>
											<td class="px-10px border-0">0644</td>
										</tr>
										<tr>
											<td class="ps-10px border-0 text-center"><i class="fa fa-file-code text-body text-opacity-50 fa-lg"></i></td>
											<td class="px-10px border-0">home.html</td>
											<td class="px-10px">129.1 KB</td>
											<td class="px-10px">July 06, 2024, 1:00PM</td>
											<td class="px-10px">text/html</td>
											<td class="px-10px border-0">0644</td>
										</tr>
										<tr>
											<td class="ps-10px border-0 text-center"><i class="fa fa-file-code text-body text-opacity-50 fa-lg"></i></td>
											<td class="px-10px border-0">about.html</td>
											<td class="px-10px">24 KB</td>
											<td class="px-10px">July 01, 2024, 6:59AM</td>
											<td class="px-10px">text/html</td>
											<td class="px-10px border-0">0644</td>
										</tr>
										<tr>
											<td class="ps-10px border-0 text-center"><i class="fa fa-file-code text-body text-opacity-50 fa-lg"></i></td>
											<td class="px-10px border-0">contact.html</td>
											<td class="px-10px">39.5 KB</td>
											<td class="px-10px">July 05, 2024, 10:35PM</td>
											<td class="px-10px">text/html</td>
											<td class="px-10px border-0">0644</td>
										</tr>
										<tr>
											<td class="ps-10px border-0 text-center"><i class="fa fa-file-code text-body text-opacity-50 fa-lg"></i></td>
											<td class="px-10px border-0">testimonials.html</td>
											<td class="px-10px">11 KB</td>
											<td class="px-10px">July 05, 2024, 10:35PM</td>
											<td class="px-10px">text/html</td>
											<td class="px-10px border-0">0644</td>
										</tr>
										<tr>
											<td class="ps-10px border-0 text-center"><i class="fa fa-file-code text-body text-opacity-50 fa-lg"></i></td>
											<td class="px-10px border-0">faq.html</td>
											<td class="px-10px">12 KB</td>
											<td class="px-10px">July 05, 2024, 1.59PM</td>
											<td class="px-10px">text/html</td>
											<td class="px-10px border-0">0644</td>
										</tr>
										<tr>
											<td class="ps-10px border-0 text-center"><i class="fa fa-file-code text-body text-opacity-50 fa-lg"></i></td>
											<td class="px-10px border-0">pricing.html</td>
											<td class="px-10px">128 KB</td>
											<td class="px-10px">July 05, 2024, 12.49PM</td>
											<td class="px-10px">text/html</td>
											<td class="px-10px border-0">0644</td>
										</tr>
										<tr>
											<td class="ps-10px border-0 text-center"><i class="fa fa-file-code text-body text-opacity-50 fa-lg"></i></td>
											<td class="px-10px border-0">404.shtml</td>
											<td class="px-10px">251 bytes</td>
											<td class="px-10px">July 10, 2024, 10.35AM</td>
											<td class="px-10px">text/html</td>
											<td class="px-10px border-0">0644</td>
										</tr>
										<tr>
											<td class="ps-10px border-0 text-center"><i class="fa fa-file-text text-body text-opacity-50 fa-lg"></i></td>
											<td class="px-10px border-0">.htaccess</td>
											<td class="px-10px">128 KB</td>
											<td class="px-10px">August 05, 2024, 12.49PM</td>
											<td class="px-10px">text/html</td>
											<td class="px-10px border-0">0644</td>
										</tr>
										<tr>
											<td class="ps-10px border-0 text-center"><i class="far fa-file-image text-teal fa-lg"></i></td>
											<td class="px-10px border-0">favicon.ico</td>
											<td class="px-10px">2 KB</td>
											<td class="px-10px">July 05, 2024, 7.39AM</td>
											<td class="px-10px">image/x-generic</td>
											<td class="px-10px border-0">0644</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
