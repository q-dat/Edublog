(function ($) {
	'use strict';
	let tsvgToastrOptions = { "closeButton": true, "newestOnTop": false, "progressBar": true, "positionClass": "toast-top-right", "preventDuplicates": true, "showDuration": "300", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut", },
		tsvgThemeSettings = [],
		tsvgThemeOptionStyles = [];
	function getYTMaxResolution(url, callback) {
		const img = new Image();
		img.src = url;
		img.onload = function () { callback(this.width, this.height); }
	}
	$(window).on('load',
		function () {
			$('#tsvg_loader').hide();
			$('#tsvg_builder_section').removeAttr('style');
			if ($(window).width() <= 1024 && typeof tsvg_builder_object !== 'undefined') {
				document.getElementById("tsvg_sidebar").dataset.tsvgOpen = "close";
			}
		}
	);
	$(document).on('click',
		'#tsvg_switch_sidebar',
		function () {
			if (document.getElementById("tsvg_sidebar").dataset.tsvgOpen == "open") {
				document.getElementById("tsvg_sidebar").dataset.tsvgOpen = "close";
			} else if (document.getElementById("tsvg_sidebar").dataset.tsvgOpen == "close") {
				if ($(window).width() <= 1024 && typeof tsvg_builder_object !== 'undefined') {
					toastr["warning"]('Current window width is not support switch sidebar.', 'Warning', tsvgToastrOptions);
					return;
				}
				document.getElementById("tsvg_sidebar").dataset.tsvgOpen = "open";
			}
		}
	);
	$(window).on("resize", function () {
		if ($(window).width() <= 1024 && document.getElementById("tsvg_sidebar").dataset.tsvgOpen === "open" && typeof tsvg_builder_object !== 'undefined') {
			document.getElementById("tsvg_sidebar").dataset.tsvgOpen = "close";
		}
	});
	$(document).on('click',
		'div.tsvg_sidebar_item:not(".tsvg_active")',
		function () {
			if (typeof tsvg_builder_object !== 'undefined') {
				if ($(this).attr('data-tsvg-item') == "theme") {
					toastr["warning"]('You are already choose theme.', 'Warning', tsvgToastrOptions);
				} else {
					var tsvgShortcodeId = tsvg_builder_object.tsvg_proporties.id;
					switch ($(this).attr('data-tsvg-item')) {
						case "field":
						case "style":
						case "pagination":
						case "popup":
							$(`.tsvg_preview_content`).css('width', '100%');
						case "setting":
						case "shortcode":
							$('div.tsvg_sidebar_item').removeClass('tsvg_active');
							$(this).addClass('tsvg_active');
							$('.tsvg_content').removeClass('active');
							$('.tsvg_content[data-tsvg-section="field_style"]').addClass('active');
							$('.tsvg_content_subsection.active').removeClass('active');
							$('.tsvg_content_subsection[data-tsvg-subsection="' + $(this).attr('data-tsvg-item') + '"]').addClass('active');
							break;
						case "info":
							toastr["warning"]('vgallery statistics field is pro feature.', 'Info', { "closeButton": true, "newestOnTop": false, "progressBar": true, "positionClass": "toast-top-full-width", "preventDuplicates": true, "showDuration": "300", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut", });
							break;
						case "results":
							toastr["warning"]('vgallery results field is pro feature.', 'Info', { "closeButton": true, "newestOnTop": false, "progressBar": true, "positionClass": "toast-top-full-width", "preventDuplicates": true, "showDuration": "300", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut", });
							break;
						default:
							$('.tsvg_content[data-tsvg-section="' + $(this).attr('data-tsvg-item') + '"]').addClass('active');
							break;
					}
					$(`.tsvg_preview_content`).css('width', '70%');
				}
			} else {
				toastr["warning"]('Please Choose a theme for more experiance.', 'Warning', tsvgToastrOptions);
			}
		}
	);
	function tsvgGetTextareaContext(editor_id, textarea_id) {
		if (typeof editor_id == 'undefined') {
			editor_id = wpActiveEditor;
		}
		if (typeof textarea_id == 'undefined') {
			textarea_id = editor_id;
		}
		if (jQuery('#wp-' + editor_id + '-wrap').hasClass('tmce-active') && tinyMCE.get(editor_id)) {
			return tinyMCE.get(editor_id).getContent();
		} else {
			return jQuery('#' + textarea_id).val();
		}
	}
	function tsvgSetTextareaContext(content, editor_id, textarea_id) {
		if (typeof editor_id == 'undefined') {
			editor_id = wpActiveEditor;
		}
		if (typeof textarea_id == 'undefined') {
			textarea_id = editor_id;
		}
		if (jQuery('#wp-' + editor_id + '-wrap').hasClass('tmce-active') && tinyMCE.get(editor_id)) {
			return tinyMCE.get(editor_id).setContent(content);
		} else {
			return jQuery('#' + textarea_id).val(content);
		}
	}
	function tsvgSetAttributes(el, options) {
		Object.keys(options).forEach(function (attr) {
			el.setAttribute(attr, options[attr]);
		})
	}
	$(function () {
		if (typeof tsvg_builder_object !== 'undefined') {
			var tsvgStyles = tsvg_builder_object.tsvg_proporties.TS_VG_Style,
				tsvgOptions = JSON.parse(tsvg_builder_object.tsvg_proporties.TS_VG_Option),
				tsvgShortcodeId = tsvg_builder_object.tsvg_proporties.id,
				tsvgDeleteIds = [],
				tsvgShortcodeTheme = tsvgOptions.TS_vgallery_Q_Theme;
			tsvgThemeSettings = JSON.parse(tsvg_builder_object.tsvg_proporties.TS_VG_Settings);
			tsvgThemeOptionStyles = JSON.parse(tsvg_builder_object.tsvg_proporties.TS_VG_Option_Style);
			if (tsvg_builder_object.tsvg_creation != "save") {
				$("input#tsvg_global_shortcode").val(`[TS_Video_Gallery id="${tsvgShortcodeId}"]`);
				$("input#tsvg_global_theme_shortcode").val(`<?php echo do_shortcode( '[TS_Video_Gallery id="${tsvgShortcodeId}"]' ); ?>`);
				$('.tsvg_content_subsection[data-tsvg-subsection="shortcode"] > div[data-tsvg-field="notice"]').remove();
			} else {
				$('.tsvg_content_subsection[data-tsvg-subsection="shortcode"] > div[data-tsvg-field="shortcode"]').remove();
			}
			let tsvgVideos = Object();
			Object.keys(tsvg_builder_object.tsvg_proporties.tsvg_video_records).map((key) => tsvgVideos[key] = tsvg_builder_object.tsvg_proporties.tsvg_video_records[key]);
			let tsvgAllFonts = Object.assign(tsvg_builder_object.fonts.tsvg_fonts.tsvg_fontawesome, tsvg_builder_object.fonts.tsvg_fonts.tsvg_emojies),
				tsvgEditId = "",
				tsvgActiveSize = "desktop";
			$(document).on('click',
				'.tsvg_preview_content_sizes > .tsvg_preview_content_size',
				function (e) {
					if (tsvgActiveSize !== $(e.target).attr("data-tsvg-size")) {
						tsvgActiveSize = $(e.target).attr("data-tsvg-size");
						$('.tsvg_preview_content_sizes > .tsvg_preview_content_size_active').removeClass("tsvg_preview_content_size_active");
						$(`.tsvg_preview_content_sizes > .tsvg_preview_content_size[data-tsvg-size="${tsvgActiveSize}"]`).addClass("tsvg_preview_content_size_active");
						let root = document.documentElement;
						switch (tsvgActiveSize) {
							case "desktop":
								root.style.setProperty('--tsvg_shortcode_width', "100%");
								$("figure.tsvg-grid-content-" + tsvgShortcodeId).css("padding","13px 40px");
								break;
							case "tablet":
								root.style.setProperty('--tsvg_shortcode_width', "475px");
								$("figure.tsvg-grid-content-" + tsvgShortcodeId).css("padding","0px");
								break;
							case "mobile":
								root.style.setProperty('--tsvg_shortcode_width', "375px");
								$("figure.tsvg-grid-content-" + tsvgShortcodeId).css("padding","13px 40px");
								break;
							default:
								break;
						}
					}
				}
			);
			function tsvgGetKeyByValue(object, value) {
				return Object.keys(object).find(key => object[key] === value);
			}
			function tsvgSetImage(type, id, url, width, height) {
				jQuery('.wpv-video-frame').last().remove();
				if (type == "library") {
					jQuery('input#tsvg_video_attachment_id').val(id);
				} else if (type == "embed") {
					jQuery('input#tsvg_video_attachment_id').val(url);
				}
				document.documentElement.style.setProperty('--tsvg_img_aspect_ratio', `calc(${height} / ${width})`);
				$(".tsvg_img_change > img").attr("src", url);
				$("div.tsvg_img_loading_div").attr("style", "display:none;");
				tsvgVideos[`${tsvgEditId}`].TS_VG_Options.TotalSoftVGallery_Vid_Im = url;
				$(`main.tsvg-main-content-${tsvgShortcodeId}  ul li[data-tsvg-id='${tsvgEditId}']  img`).not('.emoji').attr("src", tsvgVideos[`${tsvgEditId}`].TS_VG_Options.TotalSoftVGallery_Vid_Im);
				if (tsvgShortcodeTheme == 'Elastic Gallery') {
					$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}']`).attr("data-poster", tsvgVideos[`${tsvgEditId}`].TS_VG_Options.TotalSoftVGallery_Vid_Im);
				} else if (tsvgShortcodeTheme == 'Fancy Gallery') {
					$(`main.tsvg-main-content-${tsvgShortcodeId}  ul li[data-tsvg-id='${tsvgEditId}']  figure`).attr("data-thumbnail", url)
				} else if (tsvgShortcodeTheme == 'Grid Video Gallery') {
					if ($(`.tsvg-grid-slideshow-${tsvgShortcodeId} li[data-tsvg-id='${tsvgEditId}']`).find(".tsvg-media-wrapper").length) {
						if ($(`.tsvg-grid-slideshow-${tsvgShortcodeId} li[data-tsvg-id='${tsvgEditId}'] .tsvg-media-wrapper`).hasClass("tsvg-iframe-wrapper")) {
							$(`.tsvg-grid-slideshow-${tsvgShortcodeId} li[data-tsvg-id='${tsvgEditId}']`).find(".tsvg-wrapper-bgc").attr("src", url);
						}
						else {
							$(`.tsvg-grid-slideshow-${tsvgShortcodeId} li[data-tsvg-id='${tsvgEditId}']`).find(".tsvg-media-wrapper img").attr("src", url);
						}
					}
					else {
						$(`.tsvg-grid-slideshow-${tsvgShortcodeId} li[data-tsvg-id='${tsvgEditId}']`).find(".tsvg-video-wrapper video").attr("poster", url);
					}
				}
			}
			function tsvgAddNewVideo(tsvgAction, tsvgTitle, tsvgCopiedId = "") {
				let tsvgNewBlockId = `new-${Math.floor(Math.random() * 900000) + 100000}`,
					tsvgNewBlock = "",
					tsvgBlockVideoUrl = "",
					tsvgTransitionDelay = 0.3,
					tsvgBlockTitle = tsvgTitle,
					tsvgBlockImgUrl = tsvgAction == "add" ? tsvg_builder_object.tsvg_no_img : $(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}'] img`).not('.emoji').attr("src"),
					tsvgNewPopupBlock = "";
				if (tsvgAction == "copy") {
					let tsvgNewBlockProps = JSON.parse(JSON.stringify(tsvgVideos[tsvgCopiedId]));
					tsvgNewBlockProps.id = `${tsvgNewBlockId}`;
					tsvgVideos[`${tsvgNewBlockId}`] = tsvgNewBlockProps;
					$(`.tsvg-list-item[aria-tsvg-video="${tsvgCopiedId}"]`).clone(true).attr("aria-tsvg-video", tsvgNewBlockId).prependTo("#tsvg-list");
					document.documentElement.style.setProperty(`--tsvg_a_c_${tsvgShortcodeId}-${tsvgNewBlockId}`, getComputedStyle(document.documentElement).getPropertyValue(`--tsvg_a_c_${tsvgShortcodeId}-${tsvgCopiedId}`));
					toastr["success"]('Video successfully copied.', 'Success', tsvgToastrOptions);
				} else {
					let tsvgNewBlockProps = {
						id: tsvgNewBlockId,
						TS_VG_SetType: tsvgShortcodeId,
						TS_VG_Options: { TotalSoftVGallery_Vid_Im: '', TotalSoftVGallery_Vid_Vd: '', TotalSoftVGallery_Vid_vont: '', TotalSoftVGallery_Vid_link: '', TotalSoftVGallery_Vid_vd_em: '', TotalSoftVGallery_Vid_desc: '', TotalSoftVGallery_Vid_Cl: '#23a24d' },
						TS_VG_SetName: tsvgTitle,
					};
					tsvgVideos[`${tsvgNewBlockId}`] = tsvgNewBlockProps;
					$("#tsvg-list").prepend(
						`
						<div class="tsvg-list-item" aria-tsvg-video = "${tsvgNewBlockId}">
							<div class="tsvg_handle_list tsvg_list_action flex-center ui-sortable-handle">
								<img src="${tsvg_builder_object.tsvg_svg_move}">
							</div>
							<div class="details tsvg_analytics_flex_r">
								<h2> ${tsvgBlockTitle} </h2>
							</div>
							<div class="tsvg_list_action flex-center" data-tsvg-action="edit">
								<img src="${tsvg_builder_object.tsvg_svg_edit}">
							</div>
							<div class="tsvg_list_action flex-center" data-tsvg-action="copy">
								<img src="${tsvg_builder_object.tsvg_svg_copy}">
							</div>
							<div class="tsvg_list_action flex-center" data-tsvg-action="delete">
								<img src="${tsvg_builder_object.tsvg_svg_remove}">
							</div>
						</div>
						`
					);
					document.documentElement.style.setProperty(`--tsvg_a_c_${tsvgShortcodeId}-${tsvgNewBlockId}`, "#23a24d");
					toastr["success"]('New video successfully added.', 'Success', tsvgToastrOptions);
				}
				switch (tsvgShortcodeTheme) {
					case 'Grid Video Gallery':
						let tsvgGridEffectSvg = $(".tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_06'] .tsvg_active").attr('data-tsvg-pos'),
							tsvgGridPopupLinkName = 'View More',
							tsvgGridPopupEffect = $(".tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_29'] .tsvg_active").attr('data-tsvg-pos'),
							tsvgGridPopupBool = $(".tsvg_position_select[data-tsvg-select='TotalSoft_GV_2_22'] .tsvg_active").attr('data-tsvg-pos'),
							tsvgGridPopupPosition = $(".tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_27'] .tsvg_active").attr('data-tsvg-pos'),
							tsvgGridEffect = $(" .tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_20'] .tsvg_active").attr('data-tsvg-pos'),
							tsvgGridBool = $("#TotalSoft_GV_1_40").val() == 'on' ? 'true' : 'false',
							tsvgGridBlockLink = tsvgAction == "add" ? '' : $(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}'] a`).attr("href"),
							tsvgGridLinkBool = tsvgGridBlockLink ? 'true' : 'false',
							tsvgGridTarget = tsvgAction == "add" ? '_self' : $(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}'] a`).attr("target"),
							tsvgGridDesc = tsvgAction == "add" ? '' : $(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}'] figcaption`).html(),
							tsvgGridTitle = $(" .tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_14'] .tsvg_active").attr('data-tsvg-pos'),
							tsvgGridBlockVideoUrl = ' ',
							tsvgGridBlockImgUrl = " ",
							tsvgGridMediaBlock = " ",
							tsvgTitleHide = "false",
							tsvgDescHide = "true",
							tsvgGridMediaBlockClass = " ";
						if (tsvgAction == "add") {
							tsvgGridMediaBlock = `
								<div class="tsvg-media-wrapper">
									<img width="" height="" src="${tsvg_builder_object.tsvg_no_video}" alt="${tsvgBlockTitle}" />
								</div>
							`;
							tsvgGridMediaBlockClass = 'tsvg-media-img-container';
						} else {
							tsvgTitleHide = $(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}'] h3`).attr("data-tsvg-hide");
							tsvgDescHide = $(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}'] figcaption`).attr("data-tsvg-hide");
							if ($(`.tsvg-grid-slideshow-${tsvgShortcodeId} li[data-tsvg-id='${tsvgCopiedId}']`).find(".tsvg-media-wrapper").length) {
								if ($(`.tsvg-grid-slideshow-${tsvgShortcodeId} li[data-tsvg-id='${tsvgCopiedId}'] .tsvg-media-wrapper`).hasClass("tsvg-iframe-wrapper")) {
									tsvgGridBlockVideoUrl = $(`.tsvg-grid-slideshow-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}'] .tsvg-iframe-wrapper `).attr("data-creat_src");
									tsvgGridBlockImgUrl = $(`.tsvg-grid-slideshow-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}'] .tsvg-media-wrapper .tsvg-wrapper-bgc`).attr("src");
									let tsvgGridImgLoad = $(`.tsvg-grid-slideshow-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}'] .tsvg-media-wrapper .tsvg-grid-slideshow-loader`).attr("src");
									tsvgGridMediaBlock = `
										<div class="tsvg-media-wrapper tsvg-iframe-wrapper" data-creat_src="${tsvgGridBlockVideoUrl}">
											<img src="${tsvgGridBlockImgUrl}" class="tsvg-wrapper-bgc">
											<img src="${tsvgGridImgLoad}" class="tsvg-grid-slideshow-loader tsvg-grid-slideshow-loader-hidden">
										</div>
									`;
									tsvgGridMediaBlockClass = 'tsvg-media-iframe-container';
								} else {
									tsvgGridBlockImgUrl = $(`.tsvg-grid-slideshow-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}'] .tsvg-media-wrapper img`).attr("src");
									tsvgGridMediaBlock = `
										<div class="tsvg-media-wrapper">
											<img width="" height="" src="${tsvgGridBlockImgUrl}" alt="${tsvgBlockTitle}" >
										</div>
									`;
									tsvgGridMediaBlockClass = 'tsvg-media-img-container';
								}
							} else {
								tsvgGridBlockVideoUrl = $(`.tsvg-grid-slideshow-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}'] .tsvg-video-wrapper source`).attr("src");
								tsvgGridBlockImgUrl = $(`.tsvg-grid-slideshow-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}'] .tsvg-video-wrapper video`).attr("poster");
								tsvgGridMediaBlock = `
									<div class="tsvg-video-wrapper">
										<video controls="" poster="${tsvgGridBlockImgUrl}" name="media">
										<source src="${tsvgGridBlockVideoUrl}"></video>
									</div> 
								`;
								tsvgGridMediaBlockClass = 'tsvg-media-video-container';
							}
						}
						tsvgNewBlock = `
							<li class="tsvg-grid-layout-item tsvg-grid-layout-item-${tsvgShortcodeId}"  data-tsvg-id='${tsvgNewBlockId}' style='-moz-animation-delay: ${tsvgTransitionDelay}s;-webkit-animation-delay: ${tsvgTransitionDelay}s;animation-delay: ${tsvgTransitionDelay}s;display:none;' >
								<figure  class="tsvg-grid-layout-item-block-${tsvgShortcodeId}" data-tsvg-effect="${tsvgGridEffectSvg}" data-tsvg-bool="${tsvgGridBool}" >
									<img width="" height="" src=" ${tsvgBlockImgUrl} " alt=" ${tsvgBlockTitle} " >
									<h3 class="tsvg-grid-layout-item-title-${tsvgShortcodeId}"  data-tsvg-title="${tsvgGridTitle}" data-tsvg-hide="${tsvgTitleHide}" >
										${tsvgBlockTitle}
									</h3>
									<figcaption class="tsvg-grid-layout-item-caption-${tsvgShortcodeId}"  data-tsvg-hide="${tsvgDescHide}" >
										${tsvgGridDesc}
									</figcaption>
								</figure>
							</li> 
						`;
						tsvgNewPopupBlock = `
							<li class="${tsvgGridMediaBlockClass} tsvg-grid-slide"  data-tsvg-id='${tsvgNewBlockId}' >
								<figure class='tsvg-grid-slide-block-${tsvgShortcodeId}' data-tsvg-effect='${tsvgGridEffect}' >
								    <figcaption class='tsvg-grid-slide-title-${tsvgShortcodeId}' data-tsvg-position='${tsvgGridPopupPosition}'  data-tsvg-bool='${tsvgGridPopupBool}' data-tsvg-effect='${tsvgGridPopupEffect}' >
								        ${tsvgBlockTitle}
								    </figcaption>
								    <div class='tsvg-grid-slide-div tsvg-grid-slide-desc-${tsvgShortcodeId}' data-tsvg-bool='${tsvgGridPopupBool}' >
								        ${tsvgGridDesc}
								    </div>
								    <div class='tsvg-grid-slide-div tsvg-grid-slide-link-${tsvgShortcodeId}'  data-tsvg-bool='${tsvgGridLinkBool}' >
								    	<a class='tsvg-grid-slide-href-${tsvgShortcodeId}' href = '${tsvgGridBlockLink}' target = '${tsvgGridTarget}' > ${tsvgGridPopupLinkName} </a>
								    </div>
								    ${tsvgGridMediaBlock}
								    </figcaption>
								</figure>
							</li>
						`;
						$(tsvgNewPopupBlock).insertBefore($(`figure .tsvg-grid-slides-${tsvgShortcodeId} > li`).first());
						break;
					case 'LightBox Video Gallery':
						let tsvgLightboxEffect = $(" .tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_06'] .tsvg_active").attr('data-tsvg-pos'),
							tsvgLightboxEffectLayout = $(" .tsvg_position_select[data-tsvg-select='TotalSoft_GV_2_13'] .tsvg_active").attr('data-tsvg-pos'),
							tsvgLightboxEffectHover = $(" .tsvg_position_select[data-tsvg-select='TotalSoft_GV_2_20'] .tsvg_active").attr('data-tsvg-pos'),
							tsvgLightboxEffectHoverLine = $(" .tsvg_position_select[data-tsvg-select='TotalSoft_GV_2_25'] .tsvg_active").attr('data-tsvg-pos'),
							tsvgLightboxEffectHoverBorder = $(" .tsvg_position_select[data-tsvg-select='TotalSoft_GV_2_23'] .tsvg_active").attr('data-tsvg-pos'),
							tsvgLightboxEffectImg = $(" .tsvg_position_select[data-tsvg-select='TotalSoft_GV_2_10'] .tsvg_active").attr('data-tsvg-pos'),
							tsvgLightboxEffectLinkBorder = $(" .tsvg_position_select[data-tsvg-select='TotalSoft_GV_2_31'] .tsvg_active").attr('data-tsvg-pos'),
							tsvgLightboxEffectLinkHover = $(" .tsvg_position_select[data-tsvg-select='TotalSoft_GV_2_33'] .tsvg_active").attr('data-tsvg-pos'),
							tsvgLightboxEffectLinkTitle = $("#TotalSoft_GV_2_32").val(),
							tsvgLightboxBlockTarget = $(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}'] a`).attr("target"),
							tsvgLightboxBlockLink = tsvgAction == "add" ? '' : $(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}'] a`).attr("href"),
							tsvgLightboxBlockVideoUrl = tsvgAction == "add" ? tsvg_builder_object.tsvg_no_iframe : $(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}'] .tsvg-lightbox-block-inner-${tsvgShortcodeId}`).attr("data-tsvg-href");
						tsvgNewBlock = `
								<li class='tsvg-lightbox-block  tsvg-lightbox-block-${tsvgShortcodeId}' data-tsvg-border='${tsvgLightboxEffect}'  data-tsvg-id='${tsvgNewBlockId}' style='-moz-animation-delay: ${tsvgTransitionDelay}s;-webkit-animation-delay: ${tsvgTransitionDelay}s;animation-delay: ${tsvgTransitionDelay}s;' >
									<figure  class='tsvg-lightbox-block-inner-${tsvgShortcodeId}'  data-tsvg-href='${tsvgLightboxBlockVideoUrl}' data-tsvg-title='${tsvgBlockTitle}' >
										<div class='tsvg-lightbox-block-hover-layout-${tsvgShortcodeId}' data-hoverlay='${tsvgLightboxEffectLayout}' ></div>
										<figcaption class='tsvg-block-title-hover-layout-${tsvgShortcodeId}' data-hover='${tsvgLightboxEffectHover}' >
											${tsvgBlockTitle}
										</figcaption>
										<div class='tsvg-block-hover-line-${tsvgShortcodeId}' data-hoverline='${tsvgLightboxEffectHoverLine}' data-tsvg-border='${tsvgLightboxEffectHoverBorder}' ></div>
										<img width="" height="" src="${tsvgBlockImgUrl} " alt=" ${tsvgBlockTitle} " class='tsvg-block-image tsvg-block-image-${tsvgShortcodeId} ' data-tsvg-img='${tsvgLightboxEffectImg}' >
										<a href='${tsvgLightboxBlockLink}' class='tsvg-block-link-hover tsvg-block-link-hover-${tsvgShortcodeId}'  data-hover='${tsvgLightboxEffectLinkHover}'  target = '${tsvgLightboxBlockTarget}' data-tsvg-border='${tsvgLightboxEffectLinkBorder}' >
											${tsvgLightboxEffectLinkTitle}
										</a>
									</figure>
								</li> 
							`;
						break;
					case 'Thumbnails Video':
						let tsvgThumbnailsBlockVideoUrl = tsvgAction == "add" ? tsvg_builder_object.tsvg_no_iframe : $(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}'] a`).attr("href"),
							tsvgThumbnailsEffect = $(".tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_02'] .tsvg_active").attr('data-tsvg-pos');
						tsvgNewBlock = `
								<li class='tsvg-thumbnails-block tsvg-thumbnails-block-${tsvgShortcodeId}'   data-tsvg-id='${tsvgNewBlockId}'  data-tsvg-ef='${tsvgThumbnailsEffect}' >
									<figure class='tsvg-thumbnails-block-effect' >
										<a href='${tsvgThumbnailsBlockVideoUrl}' class='tsvg-thumbnails-block-effect-inner tsvg-thumbnails-block-effect-inner-${tsvgShortcodeId}'  data-id='${tsvgShortcodeId}' data-gallery='video_gallery_${tsvgShortcodeId}' title='${tsvgBlockTitle}' >
											<img width='' height='' src='${tsvgBlockImgUrl}' alt='${tsvgBlockTitle}'  title='${tsvgBlockTitle}' class='tsvg-thumbnails-block-img-${tsvgShortcodeId}' >
										</a>
									</figure>
								</li>
							`;
						break;
					case 'Content Popup':
						let tsvgContentLinkUrl = tsvgAction == "add" ? '' : $(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}'] a`).attr("href"),
							tsvgContentLinkTarget = tsvgAction == "add" ? '_self' : $(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}'] a`).attr("target"),
							tsvgContentLinkTitle = $("#TotalSoft_GV_1_19").val(),
							tsvgContentLinkShow = $("#TotalSoft_GV_2_32").is(":checked") == false ? 'false' : 'true',
							tsvgContentDescShow = $("#TotalSoft_GV_1_16").is(":checked") == false ? 'false' : 'true',
							tsvgContentTitleShow = $("#TotalSoft_GV_1_11").is(":checked") == false ? 'false' : 'true',
							tsvgContentMaskView = $(" .tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_09'] .tsvg_active").attr('data-tsvg-pos'),
							tsvgContentDesc = tsvgAction == "add" ? '' : $(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}'] .tsvg-cp-block-desc-${tsvgShortcodeId}`).html(),
							tsvgContentMask = '',
							tsvgContentMaskOne = '',
							tsvgContentMaskTwo = '',
							tsvgContentFigcaption = '',
							tsvgContentMaskParent = '',
							tsvgContentShadow = $("#TotalSoft_GV_1_06").is(":checked") == false ? 'false' : 'true',
							tsvgContentMaskViewArr = ['', 'first', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eighth', 'ninth', 'tenth'];
						tsvgBlockVideoUrl = tsvgAction == "add" ? tsvg_builder_object.tsvg_no_iframe : $(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}'] `).attr("data-tsvg-href");
						if ($("#TotalSoft_GV_1_09").val() * 1 == '2') {
							tsvgContentMask = 'mask';
							tsvgContentFigcaption = `content content${tsvgShortcodeId}`;
						} else if ($("#TotalSoft_GV_1_09").val() * 1 == '9') {
							tsvgContentMaskOne = `mask mask-1 mask-1${tsvgShortcodeId}`;
							tsvgContentMaskTwo = `mask mask-2 mask-2${tsvgShortcodeId}`;
							tsvgContentFigcaption = `content content${tsvgShortcodeId}`;
						} else {
							tsvgContentMaskParent = 'mask';
						}
						tsvgNewBlock = `
							<li class='tsvg-content-popup-block-${tsvgShortcodeId} tsvg-cp-block-view tsvg-cp-block-view-${tsvgShortcodeId} tsvg-cp-block-view-${tsvgContentMaskViewArr[tsvgContentMaskView]}'  data-tsvg-target='${tsvgContentLinkTarget}'  data-tsvg-link='${tsvgContentLinkUrl}'  data-tsvg-href='${tsvgBlockVideoUrl}'   data-tsvg-id='${tsvgNewBlockId}'  data-tsvg-shadow='${tsvgContentShadow}'  style='-moz-animation-delay: ${tsvgTransitionDelay}s;-webkit-animation-delay: ${tsvgTransitionDelay}s;animation-delay: ${tsvgTransitionDelay}s;' >
								<figure class='tsvg-block-inner' >
									<img  width='' height='' src='${tsvgBlockImgUrl}' alt='${tsvgBlockTitle}'  title='${tsvgBlockTitle}' class='tsvg-thumbnails-block-img-${tsvgShortcodeId}' >
									<div class='${tsvgContentMaskParent}' >
										<div class='${tsvgContentMask}' ></div>
										<div class='tsvg-block-inner-column-one ${tsvgContentMaskOne}' ></div>
										<div class='tsvg-block-inner-column-second ${tsvgContentMaskTwo}' ></div>
										<figcaption class='${tsvgContentFigcaption}' >
											<h2 class='tsvg-cp-block-title-${tsvgShortcodeId}' data-tsvg-show='${tsvgContentTitleShow}' > ${tsvgBlockTitle} </h2>
												<div class='tsvg-cp-block-desc-${tsvgShortcodeId}' data-tsvg-show='${tsvgContentDescShow}' > ${tsvgContentDesc} </div>
												<a class='tsvg-cp-block-info-${tsvgShortcodeId} tsvg-cp-block-info tsvg-cp-block-info-link '  href='${tsvgContentLinkUrl}' target='${tsvgContentLinkTarget}'  data-tsvg-show='${tsvgContentLinkShow}' >
													${tsvgContentLinkTitle}
												</a>
										</figcaption>
									</div>
								</figure>
							</li> 
						`;
						break;
					case 'Elastic Gallery':
						let tsvgElasticLink = tsvgAction == "add" ? '#' : $(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}'] a`).attr("href"),
							tsvgElasticBlockEffect = $(" .tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_04'] .tsvg_active").attr('data-tsvg-pos'),
							tsvgElasticIconEffect = $(" .tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_22'] .tsvg_active").attr('data-tsvg-pos'),
							tsvgElasticLinkEffect = $(" .tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_22'] .tsvg_active").attr('data-tsvg-pos'),
							tsvgElasticFigcaptionHover = $(" .tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_14'] .tsvg_active").attr('data-tsvg-pos'),
							tsvgElasticSpanShow = $("#TotalSoft_GV_1_16").val(),
							tsvgElasticImgEffect = $(" .tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_08'] .tsvg_active").attr('data-tsvg-pos'),
							tsvgElasticIcon = $("#TotalSoft_GV_1_19-icon_value").val(),
							tsvgElasticLinkIcon = $("#TotalSoft_GV_1_27-icon_value").val(),
							tsvgElasticLinkTarget = tsvgAction == "add" ? '_self' : $(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}'] a`).attr("target");
						tsvgBlockVideoUrl = tsvgAction == "add" ? tsvg_builder_object.tsvg_no_iframe : $(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}'] `).attr("data-src");
						tsvgNewBlock = `
							<li class='tsvg-elastic-block-${tsvgShortcodeId}'  data-tsvg-id='${tsvgNewBlockId}' data-tsvg-effect='${tsvgElasticBlockEffect}' data-src='${tsvgBlockVideoUrl}' data-poster='${tsvgBlockImgUrl}' data-title='${tsvgBlockTitle}' style='-moz-animation-delay: ${tsvgTransitionDelay}s;-webkit-animation-delay: ${tsvgTransitionDelay}s;animation-delay: ${tsvgTransitionDelay}s;' >
								<figure  class='tsvg-block-inner' >
									<img width='' height='' src='${tsvgBlockImgUrl}' alt='img' class='tsvg-elastic-block-img' data-tsvg-img='${tsvgElasticImgEffect}' >
									<figcaption  data-tsvg-hover='${tsvgElasticFigcaptionHover}' >
										<span data-tsvg-show= '${tsvgElasticSpanShow}' >
											${tsvgBlockTitle}
										</span >
										<i class='tsvg-elastic-block-icon-${tsvgShortcodeId} ${tsvgElasticIcon}' data-tsvg-effect='${tsvgElasticIconEffect}' > </i>
										<a href='${tsvgElasticLink}' class='tsvg-elastic-block-link' target = ''${tsvgElasticLinkTarget}'>
											<i class='tsvg-elastic-block-link-icon-${tsvgShortcodeId} ${tsvgElasticLinkIcon}' data-tsvg-effect ='${tsvgElasticLinkEffect}' > </i>
										</a>
									</figcaption>
								</figure>
							</li> 
						`;
						break;
					case 'Fancy Gallery':
						let tsvgFancyLink = tsvgAction == "add" ? '#' : $(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}'] a`).attr("href"),
							tsvgFancyLinkShow = tsvgFancyLink != '#' ? 'yes' : 'no',
							tsvgFancyLinkPosition = $(".tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_20'] .tsvg_active ").attr('data-tsvg-pos'),
							tsvgFancyTitleShow = $("#TotalSoft_GV_2_11").is(":checked") == false ? 'false' : 'true',
							tsvgFancyTitleBottom = $(".tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_13'] .tsvg_active ").attr('data-tsvg-pos'),
							tsvgFancyLinkName = $("#TotalSoft_GV_2_25").val(),
							tsvgFancyLinkTarget = tsvgAction == "add" ? '_self' : $(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}'] a`).attr("target"),
							tsvgFancyBlockVideoUrl = tsvgAction == "add" ? tsvg_builder_object.tsvg_no_iframe : $(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}']  .tsvg-html5lightbox-${tsvgShortcodeId}`).attr("data-href"),
							tsvgFancyPopupWidth = $("#TotalSoft_GV_1_33").val(),
							tsvgFancyPopupHeight = $("#TotalSoft_GV_1_34").val(),
							tsvgFancyPopupDesc = tsvgAction == "add" ? '' : $(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}']  .tsvg-html5lightbox-${tsvgShortcodeId} .tsvg-fancy-block-desc`).html();
						tsvgNewBlock = `
							<li class='tsvg-fancy-block tsvg-fancy-block-${tsvgShortcodeId}'  data-tsvg-id='${tsvgNewBlockId}' style='-moz-animation-delay: ${tsvgTransitionDelay}s;-webkit-animation-delay: ${tsvgTransitionDelay}s;animation-delay: ${tsvgTransitionDelay}s;' >
								<figure  class='tsvg-block-inner tsvg-html5lightbox-${tsvgShortcodeId}' data-href='${tsvgFancyBlockVideoUrl}'  data-width='${tsvgFancyPopupWidth}' data-height='${tsvgFancyPopupHeight}' data-group='mygroup${tsvgShortcodeId}' data-thumbnail='${tsvgBlockImgUrl}'  data-title='${tsvgBlockTitle}' data-tsvgid='${tsvgNewBlockId}'>
									<div class="tsvg-fancy-block-desc" >${tsvgFancyPopupDesc}</div>
									<a class='tsvg-fancy-block-link' href = '${tsvgFancyLink}' target = '${tsvgFancyLinkTarget}' data-tsvg-title='${tsvgFancyLinkPosition}' data-tsvg-show='${tsvgFancyLinkShow}' > ${tsvgFancyLinkName} </a>
									<img width='' height='' src='${tsvgBlockImgUrl}' alt='img' >
									<div class='tsvg-fancy-block-hover' style="visibility : hidden;">
										<span class='tsvg-fancy-block-hover-span' data-tsvg-bottom='${tsvgFancyTitleBottom}' data-tsvg-show='${tsvgFancyTitleShow}' >
											${tsvgBlockTitle}
										</span>
									</div>
								</figure>
							</li> 
						`;
						break;
					case 'Parallax Engine':
						let tsvgParallaxBlockType = $(" .tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_06'] .tsvg_active").attr('data-tsvg-pos'),
							tsvgParallaxBlockEffect = $(" .tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_07'] .tsvg_active").attr('data-tsvg-pos'),
							tsvgParallaxLineEffect = $(" .tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_19'] .tsvg_active").attr('data-tsvg-pos'),
							tsvgParallaxLineShow = $("#TotalSoft_GV_1_20").val() == 'on' ? 'true' : 'false',
							tsvgParallaxHoverEffect = $(" .tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_26'] .tsvg_active").attr('data-tsvg-pos'),
							tsvgParallaxHoverShow = $("#TotalSoft_GV_1_27").val() == 'on' ? 'false' : 'true',
							tsvgParallaxHoverIconShow = $("#TotalSoft_GV_1_15").val(),
							tsvgParallaxTitleEffect = $(" .tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_14'] .tsvg_active").attr('data-tsvg-pos'),
							tsvgParallaxTitleIcon = $("#TotalSoft_GV_1_16-icon_value").val(),
							tsvgParallaxVideoUrl = tsvgAction == "add" ? tsvg_builder_object.tsvg_no_iframe : $(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}']`).attr("data-href");
						tsvgNewBlock = `
							<li class='tsvg-parallax-block-${tsvgShortcodeId}  tsvg-parallax-block-swipebox-${tsvgShortcodeId}'   data-href='${tsvgParallaxVideoUrl}'  data-name='${tsvgBlockTitle}' data-tsvg-id='${tsvgNewBlockId}' data-tsvg-type='${tsvgParallaxBlockType}' data-tsvg-ef='${tsvgParallaxBlockEffect}' style='-moz-animation-delay: ${tsvgTransitionDelay}s;-webkit-animation-delay: ${tsvgTransitionDelay}s;animation-delay: ${tsvgTransitionDelay}s;' >
								<figure class='tsvg-block-inner' >
									<img class='tsvg-parallax-block-img' src='${tsvgBlockImgUrl}' / >
									<div class='mask tsvg-parallax-block-lines' data-tsvg-ef='${tsvgParallaxLineEffect}'  data-tsvg-show='${tsvgParallaxLineShow}' >
										<div class='mask mask_1' data-tsvg-ef='${tsvgParallaxLineEffect}_1' ></div>
										<div class='mask mask_2' data-tsvg-ef='${tsvgParallaxLineEffect}_2' ></div>
										<div class='mask mask_3'  data-tsvg-ef='${tsvgParallaxLineEffect}_3' ></div>
										<div class='mask mask_4'  data-tsvg-ef='${tsvgParallaxLineEffect}_4' ></div>
									</div>
									<div class='tsvg-parallax-block-hover' data-tsvg-ef='${tsvgParallaxHoverEffect}'  data-tsvg-show='${tsvgParallaxHoverShow}' ></div>
									<figcaption class='tsvg-parallax-block-title-effect '  data-tsvg-ef='${tsvgParallaxTitleEffect}' >
										${tsvgBlockTitle}
										<i class='tsvg-parallax-block-icon ${tsvgParallaxTitleIcon}' data-tsvg-show='${tsvgParallaxHoverIconShow}' > </i>
									</figcaption>
								</figure>
							</li> 
						`;
						break;
					case 'Classic Gallery':
						let tsvgClassicLink = tsvgAction == "add" ? '#' : $(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}']`).attr("data-tsvg-link"),
							tsvgClassicBlockEffect = $(" .tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_05'] .tsvg_active").attr('data-tsvg-pos'),
							tsvgClassicBlockImgEffect = $(" .tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_08'] .tsvg_active").attr('data-tsvg-pos'),
							tsvgClassicBlockHover = $(" .tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_14'] .tsvg_active").attr('data-tsvg-pos'),
							tsvgClassicBlockHoverEffect = $(" .tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_02'] .tsvg_active").attr('data-tsvg-pos'),
							tsvgClassicBlockItemsEffect = $(" .tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_04'] .tsvg_active").attr('data-tsvg-pos'),
							tsvgClassicIcon = $("#TotalSoft_GV_1_12-icon_value").val(),
							tsvgClassicDesc = tsvgAction == "add" ? '' : $(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}'] .tsvg-classic-block-desc`).html(),
							tsvgClassicLinkTarget = tsvgAction == "add" ? '_self' : $(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}']`).attr("data-tsvg-target");
						tsvgBlockVideoUrl = tsvgAction == "add" ? tsvg_builder_object.tsvg_no_iframe : $(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}']`).attr("data-tsvg-src");
						tsvgNewBlock = `
							<li class='tsvg-classic-block-${tsvgShortcodeId}'  data-tsvg-id='${tsvgNewBlockId}' data-tsvg-effect='${tsvgClassicBlockEffect}' style='-moz-animation-delay: ${tsvgTransitionDelay}s;-webkit-animation-delay: ${tsvgTransitionDelay}s;animation-delay: ${tsvgTransitionDelay}s; '  data-tsvg-target='${tsvgClassicLinkTarget}'  data-tsvg-link='${tsvgClassicLink}' data-tsvg-src='${tsvgBlockVideoUrl}'>
								<figure class='tsvg-classic-block-inner-${tsvgShortcodeId}' >
									<div class='tsvg-classic-block-items-${tsvgShortcodeId}' data-tsvg-effect='${tsvgClassicBlockItemsEffect}' >
										<img  width='' height='' src='${tsvgBlockImgUrl}' alt='img' class='tsvg-classic-block-img-${tsvgShortcodeId}' data-tsvg-img='${tsvgClassicBlockImgEffect}' >
										<div class='tsvg-classic-block-desc' >
											${tsvgClassicDesc}
										</div>
										<figcaption  data-tsvg-hover='${tsvgClassicBlockHover}' >
											<div class='tsvg-classic-block-hover' data-tsvg-ef='${tsvgClassicBlockHoverEffect}' >
												<div class='tsvg-classic-block-hover-div-${tsvgShortcodeId}' >
													<div class='tsvg-classic-hover-field-one'></div>
													<div class='tsvg-classic-hover-field-two'>
														<div class='tsvg-classic-hover-field-three'></div>
													</div>
												</div>
												<div class='tsvg-classic-title-hover-div-${tsvgShortcodeId}' >
													<div class='tsvg-classic-title-hover-div-inner-${tsvgShortcodeId}' >
														<span class='tsvg-classic-title-hover-span-${tsvgShortcodeId}' >
															${tsvgBlockTitle}
														</span>
													</div>
												</div>
												<div class='tsvg-classic-icon-hover-div-${tsvgShortcodeId}' >
													<span>
														<i class='tsvg-classic-icon-hover-${tsvgShortcodeId} ${tsvgClassicIcon}' > </i>
													</span>
												</div>
											</div>
										</figcaption>
									 </div>
								</figure>
							</li> 
						`;
						break;
					case 'Space Gallery':
						tsvgBlockVideoUrl = tsvgAction == "add" ? tsvg_builder_object.tsvg_no_iframe : $(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}']`).attr("data-tsvg-src");
						let tsvgSpaceLink = tsvgAction == "add" ? '#' : $(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}']`).attr("data-tsvg-link"),
							tsvgSpaceSpanText = $("#TotalSoft_GV_1_14").val(),
							tsvgSpaceTitlePosition = $(".tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_06'] .tsvg_active ").attr('data-tsvg-pos'),
							tsvgSpaceTitleData = $(".tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_08'] .tsvg_active ").attr('data-tsvg-pos'),
							tsvgSpaceSpanIcon = $("#TotalSoft_GV_1_22-icon_value").val(),
							tsvgSpaceBlockMedia = ` <div class="tsvg-video-wrapper" > <iframe src="${tsvgBlockVideoUrl}" frameborder = "0" webkitAllowFullScreen > </iframe></div> `,
							tsvgSpaceDesc = tsvgAction == "add" ? '' : $(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}'] .tsvg-space-block-desc`).html(),
							tsvgSpaceLinkTarget = tsvgAction == "add" ? '_self' : $(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}']`).attr("data-tsvg-target");
						if (tsvgAction == "copy") {
							if ($(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}']`).find(`.tsvg-media-wrapper`).length) {
								tsvgSpaceBlockMedia = $(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}']`).find(`.tsvg-media-wrapper`).clone()[0];
								tsvgSpaceBlockMedia = $(tsvgSpaceBlockMedia).html();
								tsvgSpaceBlockMedia = ` <div class="tsvg-media-wrapper" > ${tsvgSpaceBlockMedia} </div> `;
							} else {
								tsvgSpaceBlockMedia = $(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgCopiedId}']`).find(`.tsvg-video-wrapper`).clone()[0];
								tsvgSpaceBlockMedia = $(tsvgSpaceBlockMedia).html();
								tsvgSpaceBlockMedia = ` <div class="tsvg-video-wrapper" > ${tsvgSpaceBlockMedia} </div> `;
							}
						}
						tsvgNewBlock = `
							<li class='tsvg-space-block-${tsvgShortcodeId}'  data-tsvg-id='${tsvgNewBlockId}' style='-moz-animation-delay: ${tsvgTransitionDelay}s;-webkit-animation-delay: ${tsvgTransitionDelay}s;animation-delay: ${tsvgTransitionDelay}s;'  data-tsvg-link='${tsvgSpaceLink}' data-tsvg-target='${tsvgSpaceLinkTarget}' data-tsvg-src='${tsvgBlockVideoUrl}' >
								<figure  class='tsvg-block-inner' >
									<span class='tsvg-space-block-title-${tsvgShortcodeId}' data-tsvg-text-ps='${tsvgSpaceTitlePosition}' data-tsvg-c='${tsvgSpaceTitleData}' >
										${tsvgBlockTitle}
									</span>
									${tsvgSpaceBlockMedia}
									<div class='tsvg-space-block-desc' > ${tsvgSpaceDesc} </div>
									<span class='tsvg-space-block-popup-btn-${tsvgShortcodeId}' >
										<span class='tsvg-space-block-popup-span-${tsvgShortcodeId}' >
											<i class='tsvg-space-block-popup-icon-${tsvgShortcodeId}  ${tsvgSpaceSpanIcon}' > </i>
											<span> ${tsvgSpaceSpanText} </span>
										</span>
									</span>
								</figure>
							</li> 
						`;
						break;
				}
				$(tsvgNewBlock).insertBefore($(`main.tsvg-main-content-${tsvgShortcodeId} li`).first());
				if (tsvgShortcodeTheme == 'Grid Video Gallery') {
					tsvgGridAdmin(tsvgNewBlockId);
				} else if (tsvgShortcodeTheme == 'LightBox Video Gallery') {
					$(`main.tsvg-main-content-${tsvgShortcodeId}`).replaceWith($(`main.tsvg-main-content-${tsvgShortcodeId}`).clone());
					setTimeout(() => {
						lightboxPhotoForAdmin();
					}, 1000);
				} else if (tsvgShortcodeTheme == 'Thumbnails Video') {
					$(`main.tsvg-main-content-${tsvgShortcodeId}`).replaceWith($(`main.tsvg-main-content-${tsvgShortcodeId}`).clone());
					jQuery(`.tsvg-thumbnails-block-img-${tsvgShortcodeId}`).adipoli(
						{
							'startEffect': $(".tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_01'] .tsvg_active").attr('data-tsvg-pos'),
							'hoverEffect': $(".tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_02'] .tsvg_active").attr('data-tsvg-pos'),
							'imageOpacity': 1,
							'animSpeed': $("#TotalSoft_GV_1_03").val() * 1,
							'fillColor': $("#TotalSoft_GV_1_04").val(),
							'textColor': '#ffffff',
							'overlayText': '<i class="' + $("#TotalSoft_GV_2_14-icon_value").val() + '"></i>',
							'slices': $("#TotalSoft_GV_1_05").val() * 1,
							'boxCols': $("#TotalSoft_GV_1_06").val() * 1,
							'boxRows': $("#TotalSoft_GV_1_07").val() * 1,
							'popOutMargin': $("#TotalSoft_GV_1_08").val() * 1,
							'popOutShadow': $("#TotalSoft_GV_1_09").val() * 1,
							'popOutShadowC': $("#TotalSoft_GV_1_10").val()
						}
					);
					if (jQuery(window).width() < 820) {
						jQuery(`.tsvg-thumbnails-block-effect-inner-${tsvgShortcodeId}`).boxer({ tsvgId: tsvgShortcodeId, mobile: true });
					} else {
						jQuery(`.tsvg-thumbnails-block-effect-inner-${tsvgShortcodeId}`).not(".retina, .boxer_fixed, .boxer_top, .boxer_format, .boxer_mobile, .boxer_object").boxer({ tsvgId: tsvgShortcodeId });
					}
				} else if (tsvgShortcodeTheme == 'Fancy Gallery') {
					$(`main.tsvg-main-content-${tsvgShortcodeId}`).replaceWith($(`main.tsvg-main-content-${tsvgShortcodeId}`).clone());
					jQuery(`.tsvg-fancy-blocks-list-${tsvgShortcodeId} > li `).each(
						function () {
							jQuery(this).hoverdir({ hoverDelay: 50, inverse: $("#TotalSoft_GV_1_28").val() == "Default" ? false : true });
						}
					);
					tsvgFancyAdmin();
				} else if (tsvgShortcodeTheme == 'Elastic Gallery') {
					$(`main.tsvg-main-content-${tsvgShortcodeId}`).replaceWith($(`main.tsvg-main-content-${tsvgShortcodeId}`).clone());
					setTimeout(() => {
						tsvgElasticForAdmin();
					}, 1000);
				} else if (tsvgShortcodeTheme == 'Parallax Engine') {
					$(`main.tsvg-main-content-${tsvgShortcodeId}`).replaceWith($(`main.tsvg-main-content-${tsvgShortcodeId}`).clone());
					tsvgParalaxEngine(jQuery(`.tsvg-parallax-blocks-container-${tsvgShortcodeId}`).attr('data-item-type'), jQuery(`.tsvg-parallax-blocks-container-${tsvgShortcodeId}`).attr('data-item-efect'));
				}
				if (jQuery(`.tsvg-main-content-${tsvgShortcodeId}`).attr("data-pagination") != 'all') {
					tsvgPaginationGenerate();
				}
			}
			$(document).on(
				'click',
				'.tsvg_shortcode_div > span',
				function (event) {
					event.stopPropagation();
					event.preventDefault();
					let tsvgValueShortcode = $(`input#${$(this).attr("data-tsvg-copy")}`).val(),
						tsvgCreateInput = document.createElement("input");
					tsvgCreateInput.setAttribute("value", tsvgValueShortcode);
					document.body.appendChild(tsvgCreateInput);
					tsvgCreateInput.select();
					document.execCommand("copy");
					document.body.removeChild(tsvgCreateInput);
					setTimeout(
						() => {
							if ($(this).attr("data-tsvg-copy") == "tsvg_global_shortcode") {
								toastr["success"](`Shortcode copied !`, 'Success', { "closeButton": true, "newestOnTop": false, "progressBar": true, "positionClass": "toast-top-right", "preventDuplicates": true, "showDuration": "300", "hideDuration": "1000", "timeOut": "3000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut", });
							} else {
								toastr["success"](`Shortcode theme code copied !`, 'Success', { "closeButton": true, "newestOnTop": false, "progressBar": true, "positionClass": "toast-top-right", "preventDuplicates": true, "showDuration": "300", "hideDuration": "1000", "timeOut": "3000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut", });
							}
						},
						100
					);
				}
			);
			$(document).on(
				'click',
				'span#tsvg_TS_VG_Title_e',
				function (event) {
					$('.tsvg_sidebar_item[data-tsvg-item="shortcode"]').trigger("click");
					let tsvgTitleInput = $('input#tsvg_global_title'),
						tsvgTitleInputLength = tsvgTitleInput.val().length;
					tsvgTitleInput.focus();
					tsvgTitleInput[0].setSelectionRange(tsvgTitleInputLength, tsvgTitleInputLength);
				}
			);
			$(document).on(
				'input',
				'input#tsvg_global_title',
				function (event) {
					tsvg_builder_object.tsvg_proporties.TS_VG_Title = $(this).val();
					$("#tsvg_TS_VG_Title_e").text($(this).val());
				}
			);
			$('.ts-vgallery-select-icon > i.ts-vgallery-none').each(
				function () {
					$(this).attr("class", "ts-vgallery ts-vgallery-ban");
				}
			);
			function tsvgCloseIconPicker() {
				$("#ts-vgallery-aim-modal").attr("style", "display:none;");
				$(".ts-vgallery-aim-icon-item.ts-vgallery-aim-icon-item-aesthetic-selected").each(
					function () {
						$(this).removeClass("ts-vgallery-aim-icon-item-aesthetic-selected");
					}
				);
				$("#ts-vgallery-aim-modal--search_input").val("");
			}
			$(document).on('click', '.ts-vgallery-aim-modal--header-close-btn', tsvgCloseIconPicker);
			function tsvgSetIconClass(changeItem, changeAttr, changeValue) {
				if (changeAttr == "class") {
					var tsvg_elem_classlist = $(`${changeItem}`).attr("class");
					var tsvg_elem_arr = tsvg_elem_classlist.split(" ");
					var tsvg_removed_elems = [];
					tsvg_elem_arr.forEach(
						element => {
							if (element.indexOf('ts-vgallery') > -1) {
								tsvg_removed_elems.push(element);
							}
						}
					);
					tsvg_elem_arr = tsvg_elem_arr.filter(
						function (val) {
							return tsvg_removed_elems.indexOf(val) == -1;
						}
					);
					var tsvg_add_classes = changeValue.split(" ");
					var tsvg_result_classes = tsvg_elem_arr.concat(tsvg_add_classes);
					tsvg_result_classes = tsvg_result_classes.join(" ");
					$(`${changeItem}`).attr("class", tsvg_result_classes);
				} else if (changeAttr.indexOf("data-") != -1) {
					$(`${changeItem}`).attr(changeAttr, changeValue)
				} else {
					document.documentElement.style.setProperty(changeItem, `"\\${tsvgGetKeyByValue(tsvgAllFonts, changeValue)}"`);
				}
				tsvgCloseIconPicker();
			}
			$(document).on(
				'click',
				'#ts-vgallery-aim-insert-icon-button',
				function () {
					var tsvg_selected_icon = $('.ts-vgallery-aim-icon-item.ts-vgallery-aim-icon-item-aesthetic-selected');
					var tsvg_select_item_for = $(this).attr("data-tsvg-field");
					var tsvg_select_item = $(`.ts-vgallery-select-icon#${tsvg_select_item_for}`);
					var tsvg_selected_value = "";
					var tsvg_input_icon_value = $(`#${tsvg_select_item_for}-icon_value`);
					if ($(tsvg_selected_icon).length != 0) {
						if ($(tsvg_selected_icon).attr("data-library-id") == "ts-vgallery-regular") {
							tsvg_selected_value = `ts-vgallery ts-vgallery-${$(tsvg_selected_icon).attr("data-filter")}`;
						} else {
							tsvg_selected_value = `ts-vgallery-emoji ts-vgallery-emoji-${$(tsvg_selected_icon).attr("data-filter")}`;
						}
						if (tsvg_select_item_for == 'TotalSoft_VGallery_Sty_14') {
							$(`.tsvg-section-${tsvgShortcodeId} .tsvg-pagination-pages`).attr("data-prev-icon", tsvg_selected_value);
						}
						if (tsvg_select_item_for == 'TotalSoft_VGallery_Sty_15') {
							$(`.tsvg-section-${tsvgShortcodeId} .tsvg-pagination-pages`).attr("data-next-icon", tsvg_selected_value);
						}
						if (tsvg_select_item_for == 'TotalSoft_VGallery_Sty_24') {
							$(`.tsvg-section-${tsvgShortcodeId} .tsvg-pagination-pages`).attr("data-load-icon", tsvg_selected_value);
						}
						if (tsvgShortcodeTheme == 'Classic Gallery') {
							if (tsvg_select_item_for == 'TotalSoft_GV_2_39') {
								$(`.tsvg-section-${tsvgShortcodeId} .tsvg-pagination-pages`).attr("data-prev-icon", tsvg_selected_value);
							}
							if (tsvg_select_item_for == 'TotalSoft_GV_2_38') {
								$(`.tsvg-section-${tsvgShortcodeId} .tsvg-pagination-pages`).attr("data-next-icon", tsvg_selected_value);
							}
							if (tsvg_select_item_for == 'TotalSoft_GV_2_17') {
								$(`.tsvg-section-${tsvgShortcodeId} .tsvg-pagination-pages`).attr("data-load-icon", tsvg_selected_value);
							}
						}
						if (tsvgShortcodeTheme == 'Space Gallery') {
							if (tsvg_select_item_for == 'TotalSoft_GV_2_39') {
								$(`.tsvg-section-${tsvgShortcodeId} .tsvg-pagination-pages`).attr("data-next-icon", tsvg_selected_value);
							}
							if (tsvg_select_item_for == 'TotalSoft_GV_2_38') {
								$(`.tsvg-section-${tsvgShortcodeId} .tsvg-pagination-pages`).attr("data-prev-icon", tsvg_selected_value);
							}
							if (tsvg_select_item_for == 'TotalSoft_GV_2_32') {
								$(`.tsvg-section-${tsvgShortcodeId} .tsvg-pagination-pages`).attr("data-load-icon", tsvg_selected_value);
							}
						}
						$(tsvg_input_icon_value).attr("value", tsvg_selected_value);
						tsvgSetIconClass($(tsvg_input_icon_value).attr("data-tsvg-elem"), $(tsvg_input_icon_value).attr("data-change-prop"), tsvg_selected_value);
						$(tsvg_select_item).children("i").attr("class", tsvg_selected_value);
						if (tsvgStyles.hasOwnProperty(`${tsvg_select_item_for}`)) {
							tsvgStyles[tsvg_select_item_for] = tsvg_selected_value;
						} else if (tsvgThemeOptionStyles.hasOwnProperty(`${tsvg_select_item_for}`)) {
							tsvgThemeOptionStyles[tsvg_select_item_for] = tsvg_selected_value;
						}
					} else {
						$(tsvg_select_item).children("i").attr("class", "ts-vgallery ts-vgallery-ban");
						tsvg_selected_value = "ts-vgallery ts-vgallery-none";
						$(tsvg_input_icon_value).attr("value", tsvg_selected_value);
						if (tsvgStyles.hasOwnProperty(`${tsvg_select_item_for}`)) {
							tsvgStyles[tsvg_select_item_for] = tsvg_selected_value;
						} else if (tsvgThemeOptionStyles.hasOwnProperty(`${tsvg_select_item_for}`)) {
							tsvgThemeOptionStyles[tsvg_select_item_for] = tsvg_selected_value;
						}
						tsvgSetIconClass($(tsvg_input_icon_value).attr("data-tsvg-elem"), $(tsvg_input_icon_value).attr("data-change-prop"), tsvg_selected_value);
					}
				}
			);
			$(document).on(
				'click',
				'.ts-vgallery-aim-modal--sidebar-tab-item',
				function () {
					if (!$(this).hasClass('aesthetic-active')) {
						$(".ts-vgallery-aim-modal--sidebar-tab-item.aesthetic-active").each(
							function () {
								$(this).removeClass("aesthetic-active");
							}
						);
						$(this).addClass("aesthetic-active");
						if ($(this).attr("data-library-id") == "all") {
							$(".ts-vgallery-aim-icon-item").each(
								function () {
									$(this).removeAttr("style");
								}
							);
						} else {
							$(`.ts-vgallery-aim-icon-item[data-library-id="${$(this).attr('data-library-id')}"]`).each(
								function () {
									$(this).removeAttr("style");
								}
							);
							$(`.ts-vgallery-aim-icon-item:not( [data-library-id="${$(this).attr('data-library-id')}"] )`).each(
								function () {
									$(this).attr("style", "display:none;");
								}
							);
							$('.ts-vgallery-aim-modal--icon-preview-inner').animate(
								{
									scrollTop: 0
								},
								50
							);
						}
						if ($("#ts-vgallery-aim-modal--search_input").val() != "") {
							$("#ts-vgallery-aim-modal--search_input").trigger('input');
						}
					}
				}
			);
			$(document).on(
				'click',
				'div.ts-vgallery-aim-icon-item',
				function () {
					if ($(this).hasClass("ts-vgallery-aim-icon-item-aesthetic-selected")) {
						$(this).removeClass("ts-vgallery-aim-icon-item-aesthetic-selected");
					} else {
						$(".ts-vgallery-aim-icon-item.ts-vgallery-aim-icon-item-aesthetic-selected").each(
							function () {
								$(this).removeClass("ts-vgallery-aim-icon-item-aesthetic-selected");
							}
						);
						$(this).addClass("ts-vgallery-aim-icon-item-aesthetic-selected");
					}
				}
			);
			$(document).on(
				'click',
				'.ts-vgallery-icon-picker-wrap > .icon-picker > .ts-vgallery-select-icon',
				function () {
					$("#ts-vgallery-aim-modal").attr("style", "display:flex;");
					$(".ts-vgallery-aim-icon-item.ts-vgallery-aim-icon-item-aesthetic-selected").each(
						function () {
							$(this).removeClass("ts-vgallery-aim-icon-item-aesthetic-selected");
						}
					);
					var tsvg_select_item_for = $(this).attr("id");
					$("#ts-vgallery-aim-insert-icon-button").attr("data-tsvg-field", tsvg_select_item_for);
					var tsvg_select_item = $(this);
					var tsvg_current = $(this).find("i").attr("class");
					if (tsvg_current == "ts-vgallery ts-vgallery-ban") {
						$('.ts-vgallery-aim-modal--sidebar-tab-item[data-library-id="all"]').trigger("click");
						$('.ts-vgallery-aim-modal--icon-preview-inner').animate(
							{
								scrollTop: 0
							},
							50
						);
					} else {
						$(`.ts-vgallery-aim-icon-item > .ts-vgallery-aim-icon-item-inner > i[class='${tsvg_current}']`).parent().parent().addClass('ts-vgallery-aim-icon-item-aesthetic-selected');
						var tsvg_selected_library = $(`.ts-vgallery-aim-icon-item > .ts-vgallery-aim-icon-item-inner > i[class='${tsvg_current}']`).parent().parent().attr('data-library-id');
						$(`.ts-vgallery-aim-modal--sidebar-tab-item[data-library-id="${tsvg_selected_library}"]`).trigger("click");
						var position = $(`.ts-vgallery-aim-icon-item > .ts-vgallery-aim-icon-item-inner > i[class='${tsvg_current}']`).parent().parent().offset().top -
							$('.ts-vgallery-aim-modal--icon-preview-inner').offset().top +
							$('.ts-vgallery-aim-modal--icon-preview-inner').scrollTop() - 10;
						$('.ts-vgallery-aim-modal--icon-preview-inner').animate(
							{
								scrollTop: position
							}
						);
					}
					$(document).mouseup(
						function (e) {
							if (!$(".ts-vgallery-aim-modal--content").is(e.target) && $(".ts-vgallery-aim-modal--content").has(e.target).length === 0) {
								tsvgCloseIconPicker();
							}
						}
					);
				}
			);
			$(document).on(
				'click',
				'.tsvg-set-icon-none',
				function () {
					var tsvg_selection_field = $(this).parent().parent().attr("data-tsvg-field");
					$(`.icon-picker li#${tsvg_selection_field} > i`).attr("class", "ts-vgallery ts-vgallery-ban")
					var tsvg_selected_value = "ts-vgallery ts-vgallery-none";
					var tsvg_input_icon_value = $(`input#${tsvg_selection_field}-icon_value`);
					$(tsvg_input_icon_value).attr("value", tsvg_selected_value);
					if (tsvgStyles.hasOwnProperty(`${tsvg_selection_field}`)) {
						tsvgStyles[tsvg_selection_field] = tsvg_selected_value;
					} else if (tsvgThemeOptionStyles.hasOwnProperty(`${tsvg_selection_field}`)) {
						tsvgThemeOptionStyles[tsvg_selection_field] = tsvg_selected_value;
					}
					tsvgSetIconClass($(tsvg_input_icon_value).attr("data-tsvg-elem"), $(tsvg_input_icon_value).attr("data-change-prop"), tsvg_selected_value);
				}
			);
			var tsvgMutationObserver = new MutationObserver(
				function (mutations) {
					mutations.forEach(
						function (mutation) {
							if (tsvgVideos.hasOwnProperty(`${tsvgEditId}`) && tsvgGetTextareaContext('tsvg_content_area') != '') {
								tsvgVideos[`${tsvgEditId}`].TS_VG_Options.TotalSoftVGallery_Vid_desc = tsvgGetTextareaContext('tsvg_content_area');
								switch (tsvgShortcodeTheme) {
									case 'Grid Video Gallery':
										$(`main.tsvg-main-content-${tsvgShortcodeId}  .tsvg-grid-layout-item[data-tsvg-id='${tsvgEditId}'] figcaption`).html(`${tsvgGetTextareaContext('tsvg_content_area')}`);
										$(`ul.tsvg-grid-slides-${tsvgShortcodeId} li[data-tsvg-id='${tsvgEditId}'] .tsvg-grid-slide-desc-${tsvgShortcodeId}`).html(`${tsvgGetTextareaContext('tsvg_content_area')}`);
										tsvgGridAdmin();
										break;
									case 'Content Popup':
										$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}'] .tsvg-cp-block-desc-${tsvgShortcodeId}`).html(`${tsvgGetTextareaContext('tsvg_content_area')}`);
										break;
									case 'Fancy Gallery':
										$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}'] figure .tsvg-fancy-block-desc`).html(`${tsvgGetTextareaContext('tsvg_content_area')}`)
										$(`main.tsvg-main-content-${tsvgShortcodeId}`).replaceWith($(`main.tsvg-main-content-${tsvgShortcodeId}`).clone());
										jQuery(`.tsvg-fancy-blocks-list-${tsvgShortcodeId} > li `).each(
											function () {
												jQuery(this).hoverdir({ hoverDelay: 50, inverse: $("#TotalSoft_GV_1_28").val() == "Default" ? false : true });
											}
										);
										tsvgFancyAdmin();
										break;
									case 'Classic Gallery':
										$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}'] .tsvg-classic-block-desc`).html(`${tsvgGetTextareaContext('tsvg_content_area')}`);
										break;
									case 'Space Gallery':
										$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}'] .tsvg-space-block-desc`).html(`${tsvgGetTextareaContext('tsvg_content_area')}`);
										break;
								}
							}
						}
					);
				}
			);
			let tsvgContentObserveInterval,
				tsvgContentObserve = function () {
					if (typeof (jQuery('[id="tsvg_content_area_ifr"]')[0]) != "undefined" && jQuery('[id="tsvg_content_area_ifr"]')[0] != null) {
						tsvgMutationObserver.observe(
							jQuery('[id="tsvg_content_area_ifr"]')[0].contentWindow.document,
							{
								attributes: true,
								characterData: false,
								childList: true,
								subtree: true,
								attributeOldValue: false,
								characterDataOldValue: false
							}
						);
						jQuery(jQuery('[id="tsvg_content_area_ifr"]')[0].contentWindow.document).on(
							'keyup',
							function (e) {
								if (tsvgVideos.hasOwnProperty(`${tsvgEditId}`)) {
									tsvgVideos[`${tsvgEditId}`].TS_VG_Options.TotalSoftVGallery_Vid_desc = tsvgGetTextareaContext('tsvg_content_area');
									switch (tsvgShortcodeTheme) {
										case 'Grid Video Gallery':
											let tsvgOldHeight = jQuery(`main.tsvg-main-content-${tsvgShortcodeId} .tsvg-grid-layout-item[data-tsvg-id='${tsvgEditId}'] figcaption`).height(),
												tsvgDescContent = $(`main.tsvg-main-content-${tsvgShortcodeId} .tsvg-grid-layout-item[data-tsvg-id='${tsvgEditId}'] figcaption`);
											tsvgDescContent.html(`${tsvgGetTextareaContext('tsvg_content_area')}`);
											tsvgDescContent.attr('data-tsvg-hide',tsvgDescContent.html() == '' ? 'true' : 'false' );
											$(`.tsvg-grid-slides-${tsvgShortcodeId} li[data-tsvg-id='${tsvgEditId}'] .tsvg-grid-slide-desc-${tsvgShortcodeId}`).attr('data-tsvg-bool',tsvgDescContent.html() != '' && $('#TotalSoft_GV_2_23').is(':checked') ? 'true' : 'false' );
											$(`ul.tsvg-grid-slides-${tsvgShortcodeId} li[data-tsvg-id='${tsvgEditId}'] .tsvg-grid-slide-desc-${tsvgShortcodeId}`).html(`${tsvgGetTextareaContext('tsvg_content_area')}`);
											let tsvgNewHeight = jQuery(`main.tsvg-main-content-${tsvgShortcodeId} .tsvg-grid-layout-item[data-tsvg-id='${tsvgEditId}'] figcaption`).height();
											if(tsvgNewHeight !==tsvgOldHeight){
												tsvgGridAdmin();
											}
											break;
										case 'Content Popup':
											$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}'] .tsvg-cp-block-desc-${tsvgShortcodeId}`).html(`${tsvgGetTextareaContext('tsvg_content_area')}`);
											break;
										case 'Fancy Gallery':
											$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}'] figure .tsvg-fancy-block-desc`).html(`${tsvgGetTextareaContext('tsvg_content_area')}`)
											$(`main.tsvg-main-content-${tsvgShortcodeId}`).replaceWith($(`main.tsvg-main-content-${tsvgShortcodeId}`).clone());
											jQuery(`.tsvg-fancy-blocks-list-${tsvgShortcodeId} > li `).each(
												function () {
													jQuery(this).hoverdir({ hoverDelay: 50, inverse: $("#TotalSoft_GV_1_28").val() == "Default" ? false : true });
												}
											);
											tsvgFancyAdmin();
											break;
										case 'Classic Gallery':
											$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}'] .tsvg-classic-block-desc`).html(`${tsvgGetTextareaContext('tsvg_content_area')}`);
											break;
										case 'Space Gallery':
											$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}'] .tsvg-space-block-desc`).html(`${tsvgGetTextareaContext('tsvg_content_area')}`);
											break;
									}
								}
							}
						);
						clearInterval(tsvgContentObserveInterval);
					}
				};
			$(document).ready(
				function () {
					tsvgContentObserveInterval = setInterval(tsvgContentObserve, 1000);
				}
			);
			$('#wp-tsvg_content_area-editor-container .mce-top-part ').on(
				'click',
				function () {
					$(`main.tsvg-main-content-${tsvgShortcodeId}  .tsvg-grid-layout-item[data-tsvg-id='${tsvgEditId}'] figcaption`).html(`${tsvgGetTextareaContext('tsvg_content_area')}`);
					if (tsvgVideos[`${tsvgEditId}`].hasOwnProperty(`TotalSoftVGallery_Vid_desc`)) {
						tsvgVideos[`${tsvgEditId}`].TS_VG_Options.TotalSoftVGallery_Vid_desc = tsvgGetTextareaContext('tsvg_content_area');
					}
				}
			)
			$(document).on(
				'input',
				'#ts-vgallery-aim-modal--search_input',
				function () {
					var searchText = $(this).val().toLowerCase();
					var tsvg_active_sidebar_item = $(".ts-vgallery-aim-modal--sidebar-tab-item.aesthetic-active").attr("data-library-id");
					if (searchText == "") {
						$(`.ts-vgallery-aim-icon-item[data-library-id="${tsvg_active_sidebar_item}"]`).each(
							function () {
								$(this).removeAttr("style");
							}
						);
					} else {
						switch (tsvg_active_sidebar_item) {
							case "ts-vgallery-emoji-regular":
							case "ts-vgallery-regular":
								$(`.ts-vgallery-aim-icon-item[data-library-id="${tsvg_active_sidebar_item}"]:not( [data-filter*= "${searchText}"] )`).each(
									function () {
										$(this).attr("style", "display:none;");
									}
								);
								$(`.ts-vgallery-aim-icon-item[data-library-id="${tsvg_active_sidebar_item}"][data-filter*= "${searchText}"]`).each(
									function () {
										$(this).removeAttr("style");
									}
								);
								break;
							default:
								$(`.ts-vgallery-aim-icon-item:not( [data-filter*= "${searchText}"] )`).each(
									function () {
										$(this).attr("style", "display:none;");
									}
								);
								$(`.ts-vgallery-aim-icon-item[data-filter*= "${searchText}"]`).each(
									function () {
										$(this).removeAttr("style");
									}
								);
								break;
						}
					}
				}
			);
			$(`#tsvg_video_color`).spectrum(
				{
					type: "color",
					showPalette: false,
					togglePaletteOnly: true,
					hideAfterPaletteSelect: true,
					showInput: true,
					showInitial: true,
					showButtons: false,
					move: function (color) {
						$(this).val(color.toRgbString());
						document.documentElement.style.setProperty(`--tsvg_title_bc_${tsvgShortcodeId}-${tsvgEditId}`, color.toRgbString());
						if (tsvgVideos[`${tsvgEditId}`].TS_VG_Options.hasOwnProperty(`TotalSoftVGallery_Vid_Cl`)) {
							tsvgVideos[`${tsvgEditId}`].TS_VG_Options.TotalSoftVGallery_Vid_Cl = color.toRgbString();
						}
					}
				}
			);
			$(document).on(
				'input',
				'input#tsvg_video_link[type="text"]',
				function () {
					tsvgVideos[`${tsvgEditId}`].TS_VG_Options.TotalSoftVGallery_Vid_link = $(this).val();
					switch (tsvgShortcodeTheme) {
						case 'Grid Video Gallery':
							$(`ul.tsvg-grid-slides-${tsvgShortcodeId} li[data-tsvg-id='${tsvgEditId}'] a`).attr('href', `${$(this).val()}`);
							break;
						case 'LightBox Video Gallery':
							$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}'] .tsvg-block-link-hover-${tsvgShortcodeId}`).attr('href', `${$(this).val()}`);
							break;
						case 'Content Popup':
							$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}']`).attr('data-tsvg-link', `${$(this).val()}`);
							$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}'] a`).attr('href', `${$(this).val()}`);
							break;
						case 'Elastic Gallery':
							$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}'] .tsvg-elastic-block-link`).attr('href', `${$(this).val()}`);
							break;
						case 'Fancy Gallery':
							$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}'] .tsvg-fancy-block-link`).attr('href', `${$(this).val()}`);
							break;
						case 'Classic Gallery':
							$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}']`).attr('data-tsvg-link', `${$(this).val()}`);
							break;
						case 'Space Gallery':
							$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}']`).attr('data-tsvg-link', `${$(this).val()}`);
							break;
					}
				}
			);
			$(document).on(
				'change',
				'input#tsvg_video_Video_ONT[type="checkbox"]',
				function () {
					tsvgVideos[`${tsvgEditId}`].TS_VG_Options.TotalSoftVGallery_Vid_vont = `${$(this).is(':checked')}`;
					switch (tsvgShortcodeTheme) {
						case 'Grid Video Gallery':
							if ($(this).is(':checked')) {
								$(`ul.tsvg-grid-slides-${tsvgShortcodeId} li[data-tsvg-id='${tsvgEditId}'] a`).attr('target', '_blank');
							} else {
								$(`ul.tsvg-grid-slides-${tsvgShortcodeId} li[data-tsvg-id='${tsvgEditId}'] a`).attr('target', '_self');
							}
							break;
							break;
						case 'LightBox Video Gallery':
							if ($(this).is(':checked')) {
								$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}'] .tsvg-block-link-hover-${tsvgShortcodeId}`).attr('target', '_blank');
							} else {
								$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}'] .tsvg-block-link-hover-${tsvgShortcodeId}`).attr(
									'target',
									'_self'
								);
							}
							break;
						case 'Content Popup':
							if ($(this).is(':checked')) {
								$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}']`).attr('data-tsvg-target', '_blank');
								$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}'] a`).attr('target', '_blank');
							} else {
								$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}']`).attr('data-tsvg-target', '_self');
								$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}'] a`).attr('target', '_self');
							}
							break;
						case 'Elastic Gallery':
							if ($(this).is(':checked')) {
								$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}'] .tsvg-elastic-block-link`).attr('target', '_blank');
							} else {
								$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}'] .tsvg-elastic-block-link`).attr('target', '_self');
							}
							break;
						case 'Fancy Gallery':
							if ($(this).is(':checked')) {
								$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}'] .tsvg-fancy-block-link`).attr('target', '_blank');
							} else {
								$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}'] .tsvg-fancy-block-link`).attr('target', '_self');
							}
							break;
						case 'Classic Gallery':
							if ($(this).is(':checked')) {
								$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}']`).attr('data-tsvg-target', '_blank');
							} else {
								$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}']`).attr('data-tsvg-target', '_self');
							}
							break;
						case 'Space Gallery':
							if ($(this).is(':checked')) {
								$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}']`).attr('data-tsvg-target', '_blank');
							} else {
								$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}']`).attr('data-tsvg-target', '_self');
							}
							break;
					}
				}
			);
			$(document).on(
				'input',
				'input#tsvg_TS_VG_SetName[type="text"]',
				function () {
					if (tsvgVideos[`${tsvgEditId}`].hasOwnProperty(`TS_VG_SetName`)) {
						tsvgVideos[`${tsvgEditId}`].TS_VG_SetName = $(this).val();
					}
					switch (tsvgShortcodeTheme) {
						case 'Grid Video Gallery':
							let tsvgOldHeight = $("li.tsvg-grid-layout-item[data-tsvg-id='"+tsvgEditId+"']").height(),
								tsvgTitleContent = $(`main.tsvg-main-content-${tsvgShortcodeId} .tsvg-grid-layout-item[data-tsvg-id='${tsvgEditId}'] h3.tsvg-grid-layout-item-title-${tsvgShortcodeId}`);
							$(`main.tsvg-main-content-${tsvgShortcodeId}  .tsvg-grid-layout-item[data-tsvg-id='${tsvgEditId}'] h3`).html(`${$(this).val()}`);
							$(`ul.tsvg-grid-slides-${tsvgShortcodeId} li[data-tsvg-id='${tsvgEditId}'] .tsvg-grid-slide-title-${tsvgShortcodeId}`).html(`${$(this).val()}`);
							tsvgTitleContent.attr('data-tsvg-hide',$(this).val() == '' ? 'true' : 'false' );
							$(`.tsvg-grid-slides-${tsvgShortcodeId} li[data-tsvg-id='${tsvgEditId}'] .tsvg-grid-slide-title-${tsvgShortcodeId}`).attr('data-tsvg-bool',$(this).val() != '' && $('#TotalSoft_GV_2_22').is(':checked') ? 'true' : 'false' );
							let tsvgNewHeight = $("li.tsvg-grid-layout-item[data-tsvg-id='"+tsvgEditId+"']").height();
							if(tsvgNewHeight !==tsvgOldHeight){
								tsvgGridAdmin();
							}
							break;
						case 'LightBox Video Gallery':
							$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}'] figcaption`).html(`${$(this).val()}`);
							$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}'] figure`).attr('data-tsvg-title', `${$(this).val()}`);
							break;
						case 'Thumbnails Video':
							$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}'] a`).attr("title", `${$(this).val()}`)
							break;
						case 'Content Popup':
							$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}'] .tsvg-cp-block-title-${tsvgShortcodeId}`).html(`${$(this).val()}`)
							break;
						case 'Elastic Gallery':
							$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}']`).attr("data-title", `${$(this).val()}`)
							$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}'] figcaption span`).html(`${$(this).val()}`)
							break;
						case 'Fancy Gallery':
							$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}']`).attr("data-title", `${$(this).val()}`)
							$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}'] .tsvg-fancy-block-hover-span`).html(`${$(this).val()}`)
							break;
						case 'Classic Gallery':
							$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}'] .tsvg-classic-title-hover-span-${tsvgShortcodeId}`).text(`${$(this).val()}`)
							break;
						case 'Space Gallery':
							$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}'] .tsvg-space-block-title-${tsvgShortcodeId}`).text(`${$(this).val()}`)
							break;
					}
					$(`.tsvg-list-item[aria-tsvg-video = "${tsvgEditId}"] h2`).html($(this).val());
				}
			);
			$(document).on(
				'click',
				'#tsvg-add_video',
				function () {
					tsvgAddNewVideo("add", "New video");
				}
			);
			$(document).on(
				'click',
				'.tsvg_list_action[data-tsvg-action="delete"]',
				function () {
					if ($("#tsvg-list > .tsvg-list-item").length <= 1) {
						toastr["error"]('Minimum amount of videos is 1.', 'Error', tsvgToastrOptions);
						return;
					}
					var tsvg_delete_video_id = $(this).parent().attr("aria-tsvg-video");
					$(`main.tsvg-main-content-${tsvgShortcodeId} li[data-tsvg-id='${tsvg_delete_video_id}']`).remove();
					$(this).parent().remove();
					delete tsvgVideos[tsvg_delete_video_id];
					tsvgDeleteIds.push(tsvg_delete_video_id);
					if (tsvgShortcodeTheme == 'Grid Video Gallery') {
						jQuery(`.tsvg-grid-slideshow-${tsvgShortcodeId} li[data-tsvg-id='${tsvg_delete_video_id}']`).remove();
						tsvgGridAdmin();
					}
					toastr["success"]('Video successfully deleted.', 'Success', tsvgToastrOptions);
					if (tsvgShortcodeTheme == 'LightBox Video Gallery') {
						$(`main.tsvg-main-content-${tsvgShortcodeId}`).replaceWith($(`main.tsvg-main-content-${tsvgShortcodeId}`).clone());
						lightboxPhotoForAdmin();
					}
					if (tsvgShortcodeTheme == 'Parallax Engine') {
						$(`main.tsvg-main-content-${tsvgShortcodeId}`).replaceWith($(`main.tsvg-main-content-${tsvgShortcodeId}`).clone());
						tsvgParalaxEngine(jQuery(`.tsvg-parallax-blocks-container-${tsvgShortcodeId}`).attr('data-item-type'), jQuery(`.tsvg-parallax-blocks-container-${tsvgShortcodeId}`).attr('data-item-efect'));
					}
					if (tsvgShortcodeTheme == 'Fancy Gallery') {
						$(`main.tsvg-main-content-${tsvgShortcodeId}`).replaceWith($(`main.tsvg-main-content-${tsvgShortcodeId}`).clone());
						jQuery(`.tsvg-fancy-blocks-list-${tsvgShortcodeId} > li `).each(
							function () {
								jQuery(this).hoverdir({ hoverDelay: 50, inverse: $("#TotalSoft_GV_1_28").val() == "Default" ? false : true });
							}
						);
						tsvgFancyAdmin();
					}
					if (jQuery(`.tsvg-main-content-${tsvgShortcodeId}`).attr("data-pagination") == 'pagination') {
						tsvgPaginationGenerate();
					}
				}
			);
			$(document).on(
				'click',
				'.tsvg_list_action[data-tsvg-action="edit"]',
				function () {
					tsvgEditId = $(this).parent().attr("aria-tsvg-video");
					$("input#tsvg_TS_VG_SetName").val(tsvgVideos[`${tsvgEditId}`].TS_VG_SetName);
					$("input#tsvg_video_link").val(tsvgVideos[`${tsvgEditId}`].TS_VG_Options.TotalSoftVGallery_Vid_link);
					$("input#tsvg_video_Video_ONT").prop('checked', false);
					if (tsvgVideos[`${tsvgEditId}`].TS_VG_Options.TotalSoftVGallery_Vid_vont) {
						$("input#tsvg_video_Video_ONT").prop('checked', true);
					}
					if (tsvgVideos[`${tsvgEditId}`].TS_VG_Options.TotalSoftVGallery_Vid_desc) {
						tsvgSetTextareaContext(
							tsvgVideos[`${tsvgEditId}`].TS_VG_Options.TotalSoftVGallery_Vid_desc,
							'tsvg_content_area'
						);
					}
					if (tsvgVideos[`${tsvgEditId}`].TS_VG_Options.TotalSoftVGallery_Vid_Im == "") {
						tsvgSetImage("embed", "", tsvg_builder_object.tsvg_no_img, 600, 600);
					} else {
						$.ajax(
							{
								url: tsvg_builder_object.ajaxurl,
								data: {
									action: 'tsvg_get_attachment_id',
									tsvg_nonce: tsvg_builder_object.tsvg_nonce,
									attachment_url: tsvgVideos[`${tsvgEditId}`].TS_VG_Options.TotalSoftVGallery_Vid_Im
								},
								beforeSend: function () {
									$("div.tsvg_img_loading_div").removeAttr("style");
								},
								type: 'POST',
							}
						).done(
							function (response) {
								if (response.success === true) {
									if (response.data.hasOwnProperty('id')) {
										tsvgSetImage("library", response.data.id, response.data.image, response.data.width, response.data.height);
									} else {
										tsvgSetImage("embed", "", response.data.image, response.data.width, response.data.height);
									}
								}
							}
						).fail(
							function () {
								tsvgSetImage("embed", "", tsvg_builder_object.tsvg_no_img, 600, 600);
							}
						);
					}
					if (tsvgVideos[`${tsvgEditId}`].TS_VG_Options.TotalSoftVGallery_Vid_Vd == "") {
						jQuery('input#tsvg_video_video_attachment_id').val('');
						jQuery('.tsvg_vd_change > iframe').attr("style", "display:none;");
						jQuery('.tsvg_vd_change > img').removeAttr("style");
						$(".tsvg_img_div_edit").attr("style", "display:none;");
					} else {
						let url = tsvgVideos[`${tsvgEditId}`].TS_VG_Options.TotalSoftVGallery_Vid_Vd;
						var regexp = /https?:\/\/www\.youtube\.com\/embed\/([^/]+)/;
						var youTubeEmbedMatch = regexp.exec(url);
						if (youTubeEmbedMatch) {
							url = 'https://www.youtube.com/watch?v=' + youTubeEmbedMatch[1];
						}
						var data = {
							action: 'tsvg_check_attachment',
							tsvg_nonce: tsvg_builder_object.tsvg_nonce,
							attachment_url: url
						};
						jQuery.post(
							tsvg_builder_object.ajaxurl,
							data,
							function (response) {
								if (response.success === true) {
									jQuery('.tsvg_vd_change').children("iframe").remove();
									jQuery('.tsvg_vd_change').children("video").remove();
									jQuery('.tsvg_vd_change').children("blockquote").remove();
									jQuery('.tsvg_img_div_edit').removeAttr("style");
									jQuery('input#tsvg_video_video_attachment_id').val(response.data);
									jQuery('.tsvg_vd_change').prepend(` <video controls="" name="media"><source src="${data.attachment_url}"></video>`);
									jQuery('.tsvg_vd_change > img').attr("style", "display:none;");
								} else {
									wp.apiRequest(
										{
											url: wp.media.view.settings.oEmbedProxyUrl,
											data: {
												url: url,
											},
											beforeSend: function () {
												$(".tsvg_vd_loading_div").removeAttr("style");
											},
											type: 'GET',
											dataType: 'json',
											context: this
										}
									).done(
										function (responseApi) {
											if (responseApi.provider_name == "Embed Handler") {
												responseApi.html = ` <video controls="" name="media"><source src="${data.url}"></video>`;
											}
											jQuery('.tsvg_vd_change').children("iframe").remove();
											jQuery('.tsvg_vd_change').children("video").remove();
											jQuery('.tsvg_vd_change').children("blockquote").remove();
											jQuery('.tsvg_img_div_edit').removeAttr("style");
											jQuery('input#tsvg_video_video_attachment_id').val(url);
											jQuery('.tsvg_vd_change > img').attr("style", "display:none;");
											jQuery('.tsvg_vd_change').prepend(responseApi.html);
											$(".tsvg_vd_loading_div").attr("style", "display:none;");
										}
									).fail(
										function () {
											$(".tsvg_vd_loading_div").attr("style", "display:none;");
										}
									);
								}
							}
						);
					}
					$("main.tsvg_content_fields_menu").attr("style", "display:none;");
					$("main.tsvg_content_fields_edit").removeAttr("style");
				}
			);
			$(document).on(
				'click',
				'.tsvg_back_to_videos',
				function () {
					$("main.tsvg_content_fields_edit").attr("style", "display:none;");
					$("main.tsvg_content_fields_menu").removeAttr("style");
					jQuery('input#tsvg_video_video_attachment_id').val('');
					jQuery('.tsvg_content_fields_edit .tsvg_vd_change > iframe,.tsvg_content_fields_edit .tsvg_vd_change > video,.tsvg_content_fields_edit .tsvg_vd_change > blockquote').remove();
					jQuery('.tsvg_content_fields_edit .tsvg_vd_change > img').removeAttr("style");
					tsvgSetTextareaContext('', 'tsvg_content_area');
				}
			);
			$(document).on(
				'click',
				'.tsvg_list_action[data-tsvg-action="copy"]',
				function () {
					var tsvg_copied_elem = $(this).parent();
					tsvgAddNewVideo("copy", $(tsvg_copied_elem).children(".details").children("h2").text(), $(tsvg_copied_elem).attr("aria-tsvg-video"));
				}
			);
			$('input[data-tsvg-field="color"]').each(
				function () {
					var tsvg_spectrum_element_id = $(this).attr('id');
					$(`#${$(this).attr('id')}`).spectrum(
						{
							type: "color",
							showPalette: false,
							togglePaletteOnly: true,
							hideAfterPaletteSelect: true,
							showInput: true,
							showInitial: true,
							showButtons: false,
							move: function (color) {
								$(this).val(color.toRgbString());
								document.documentElement.style.setProperty($(this).attr('data-tsvg-change'), color.toRgbString());
								if (tsvgStyles.hasOwnProperty(`${tsvg_spectrum_element_id}`)) {
									tsvgStyles[tsvg_spectrum_element_id] = color.toRgbString();
								} else if (tsvgThemeSettings.hasOwnProperty(`${tsvg_spectrum_element_id}`)) {
									tsvgThemeSettings[tsvg_spectrum_element_id] = color.toRgbString();
								} else if (tsvgThemeOptionStyles.hasOwnProperty(`${tsvg_spectrum_element_id}`)) {
									tsvgThemeOptionStyles[tsvg_spectrum_element_id] = color.toRgbString();
								}
								if (tsvgShortcodeTheme == 'Thumbnails Video') {
									if (tsvg_spectrum_element_id == 'TotalSoft_GV_1_10' || tsvg_spectrum_element_id == 'TotalSoft_GV_1_04') {
										$(`main.tsvg-main-content-${tsvgShortcodeId}`).replaceWith($(`main.tsvg-main-content-${tsvgShortcodeId}`).clone());
										jQuery(`.tsvg-thumbnails-block-img-${tsvgShortcodeId}`).adipoli(
											{
												'startEffect': $(".tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_01'] .tsvg_active").attr('data-tsvg-pos'),
												'hoverEffect': $(".tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_02'] .tsvg_active").attr('data-tsvg-pos'),
												'imageOpacity': 1,
												'animSpeed': $("#TotalSoft_GV_1_03").val() * 1,
												'fillColor': $("#TotalSoft_GV_1_04").val(),
												'textColor': '#ffffff',
												'overlayText': '<i class="' + $("#TotalSoft_GV_2_14-icon_value").val() + '"></i>',
												'slices': $("#TotalSoft_GV_1_05").val() * 1,
												'boxCols': $("#TotalSoft_GV_1_06").val() * 1,
												'boxRows': $("#TotalSoft_GV_1_07").val() * 1,
												'popOutMargin': $("#TotalSoft_GV_1_08").val() * 1,
												'popOutShadow': $("#TotalSoft_GV_1_09").val() * 1,
												'popOutShadowC': $("#TotalSoft_GV_1_10").val()
											}
										);
										if (jQuery(window).width() < 820) {
											jQuery(`.tsvg-thumbnails-block-effect-inner-${tsvgShortcodeId}`).boxer({ tsvgId: tsvgShortcodeId, mobile: true });
										} else {
											jQuery(`.tsvg-thumbnails-block-effect-inner-${tsvgShortcodeId}`).not(".retina, .boxer_fixed, .boxer_top, .boxer_format, .boxer_mobile, .boxer_object").boxer({ tsvgId: tsvgShortcodeId });
										}
									}
								}
							},
						}
					);
				}
			);
			$(document).on(
				'click',
				'.tsvg_accordion_header',
				function () {
					if ($(this).parent().hasClass('tsvg_accordion_item_opened')) {
						$(this).parent().children('.tsvg_accordion_item_content').removeAttr('style');
						$(this).parent().removeClass('tsvg_accordion_item_opened');
					} else if ($('.tsvg_accordion_item_opened').length > 0) {
						$('.tsvg_accordion_item_opened').children('.tsvg_accordion_item_content').removeAttr('style');
						$('.tsvg_accordion_item_opened').removeClass('tsvg_accordion_item_opened');
						$(this).parent().children('.tsvg_accordion_item_content').height(`${$(this).parent().children('.tsvg_accordion_item_content').prop("scrollHeight")}px`);
						$(this).parent().addClass('tsvg_accordion_item_opened');
					} else {
						$(this).parent().children('.tsvg_accordion_item_content').height(`${$(this).parent().children('.tsvg_accordion_item_content').prop("scrollHeight")}px`);
						$(this).parent().addClass('tsvg_accordion_item_opened');
					}
				}
			);
			if (tsvgShortcodeTheme == 'Grid Video Gallery') {
				if ($(`.tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_06'] > .tsvg_position_item.tsvg_active`).attr('data-tsvg-pos') != 'opacity') {
					$(`#TotalSoft_GV_1_07`).parent().css('display', 'none');
				}
				if ($(`.tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_06'] > .tsvg_position_item.tsvg_active`).attr('data-tsvg-pos') != 'drop-shadow') {
					$(`#TotalSoft_GV_1_08`).parent().css('display', 'none');
				}
			}
			$(document).on(
				'click',
				'.tsvg_position_select > .tsvg_position_item:not(.tsvg_active)',
				function (event) {
					event.preventDefault();
					$(this).siblings().removeClass('tsvg_active');
					$(this).addClass('tsvg_active');
					var tsvg_change_style = $(this).parent().attr('data-tsvg-select');
					if (tsvgStyles.hasOwnProperty(`${tsvg_change_style}`)) {
						tsvgStyles[tsvg_change_style] = $(this).attr('data-tsvg-pos');
					} else if (tsvgThemeSettings.hasOwnProperty(`${tsvg_change_style}`)) {
						tsvgThemeSettings[`${tsvg_change_style}`] = $(this).attr('data-tsvg-pos');
					} else if (tsvgThemeOptionStyles.hasOwnProperty(`${`${tsvg_change_style}`}`)) {
						tsvgThemeOptionStyles[`${tsvg_change_style}`] = $(this).attr('data-tsvg-pos');
					}
					if ($(this).parent().attr('data-change-prop').indexOf("data") != -1) {
						$(`${$(this).parent().attr('data-change-elem')}`).attr(`${$(this).parent().attr('data-change-prop')}`, $(this).attr('data-tsvg-pos'));
					} else {
						document.documentElement.style.setProperty(`${$(this).parent().attr('data-change-prop')}`, $(this).attr('data-tsvg-pos'));
					}
					if (tsvgShortcodeTheme == 'Grid Video Gallery') {
						$(`#TotalSoft_GV_1_07`).parent().css('display', 'none');
						$(`#TotalSoft_GV_1_08`).parent().css('display', 'none');
						if (tsvg_change_style == "TotalSoft_GV_1_06") {
							if ($(this).attr('data-tsvg-pos') == 'opacity') {
								$(`#TotalSoft_GV_1_07`).parent().removeAttr('style');
							} else {
								$(`#TotalSoft_GV_1_07`).parent().css('display', 'visible');
							}
							if ($(this).attr('data-tsvg-pos') == 'drop-shadow') {
								$(`#TotalSoft_GV_1_08`).parent().removeAttr('style');
							}
							$('.tsvg_accordion_item.tsvg_accordion_item_opened').find(".tsvg_accordion_item_content").height(`${$('.tsvg_accordion_item_opened').find(".tsvg_accordion_item_content").find(".tsvg_accordion_items")[0].scrollHeight}px`)
						}
						if (tsvg_change_style == "TotalSoft_VGallery_Set_07" || tsvg_change_style == "TotalSoft_VGallery_Set_08"){
							if (typeof event.isTrigger === 'undefined') {
								tsvgGridAdmin(false,true);
							}
						}
						return;
					}else if (tsvgShortcodeTheme == 'Content Popup') {
						if (tsvg_change_style == "TotalSoft_GV_1_09") {
							let TotSoft = ['', 'first', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eighth', 'ninth', 'tenth'],
								tsvg_totalsoftview = $(" .tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_09'] .tsvg_active").attr('data-tsvg-pos');
							$(`.tsvg-cp-block-view-${tsvgShortcodeId}`).removeAttr('class').attr('class', `tsvg-cp-block-view tsvg-cp-block-view-${tsvgShortcodeId} tsvg-cp-block-view-${TotSoft[tsvg_totalsoftview]}`);
						}
					}else if (tsvgShortcodeTheme == "Thumbnails Video") {
						if ($(this).closest(".tsvg_position_select").attr("data-tsvg-select") == "TotalSoft_GV_1_02" || $(this).closest(".tsvg_position_select").attr("data-tsvg-select") == "TotalSoft_GV_1_01") {
							$(`main.tsvg-main-content-${tsvgShortcodeId}`).replaceWith($(`main.tsvg-main-content-${tsvgShortcodeId}`).clone());
							jQuery(`.tsvg-thumbnails-block-img-${tsvgShortcodeId}`).adipoli(
								{
									'startEffect': $(".tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_01'] .tsvg_active").attr('data-tsvg-pos'),
									'hoverEffect': $(".tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_02'] .tsvg_active").attr('data-tsvg-pos'),
									'imageOpacity': 1,
									'animSpeed': $("#TotalSoft_GV_1_03").val() * 1,
									'fillColor': $("#TotalSoft_GV_1_04").val(),
									'textColor': '#ffffff',
									'overlayText': '<i class="' + $("#TotalSoft_GV_2_14-icon_value").val() + '"></i>',
									'slices': $("#TotalSoft_GV_1_05").val() * 1,
									'boxCols': $("#TotalSoft_GV_1_06").val() * 1,
									'boxRows': $("#TotalSoft_GV_1_07").val() * 1,
									'popOutMargin': $("#TotalSoft_GV_1_08").val() * 1,
									'popOutShadow': $("#TotalSoft_GV_1_09").val() * 1,
									'popOutShadowC': $("#TotalSoft_GV_1_10").val()
								}
							);
							if (jQuery(window).width() < 820) {
								jQuery(`.tsvg-thumbnails-block-effect-inner-${tsvgShortcodeId}`).boxer({ tsvgId: tsvgShortcodeId, mobile: true });
							} else {
								jQuery(`.tsvg-thumbnails-block-effect-inner-${tsvgShortcodeId}`).not(".retina, .boxer_fixed, .boxer_top, .boxer_format, .boxer_mobile, .boxer_object").boxer({ tsvgId: tsvgShortcodeId });
							}
						}
					}else if (tsvgShortcodeTheme == 'Parallax Engine') {
						$(`main.tsvg-main-content-${tsvgShortcodeId}`).replaceWith($(`main.tsvg-main-content-${tsvgShortcodeId}`).clone());
						tsvgParalaxEngine(jQuery(`.tsvg-parallax-blocks-container-${tsvgShortcodeId}`).attr('data-item-type'), jQuery(`.tsvg-parallax-blocks-container-${tsvgShortcodeId}`).attr('data-item-efect'));
						let mask_1 = jQuery(`.tsvg-parallax-block-${tsvgShortcodeId} .mask_1`).attr("data-tsvg-ef").replace("_1", "");
						let mask_2 = jQuery(`.tsvg-parallax-block-${tsvgShortcodeId} .mask_2`).attr("data-tsvg-ef").replace("_2", "");
						let mask_3 = jQuery(`.tsvg-parallax-block-${tsvgShortcodeId} .mask_3`).attr("data-tsvg-ef").replace("_3", "");
						let mask_4 = jQuery(`.tsvg-parallax-block-${tsvgShortcodeId} .mask_4`).attr("data-tsvg-ef").replace("_4", "");
						jQuery(`.tsvg-parallax-block-${tsvgShortcodeId} .mask`).removeAttr('style');
						jQuery(`.tsvg-parallax-block-${tsvgShortcodeId} .mask_1`).attr("data-tsvg-ef", mask_1 + "_1");
						jQuery(`.tsvg-parallax-block-${tsvgShortcodeId} .mask_2`).attr("data-tsvg-ef", mask_2 + "_2");
						jQuery(`.tsvg-parallax-block-${tsvgShortcodeId} .mask_3`).attr("data-tsvg-ef", mask_3 + "_3");
						jQuery(`.tsvg-parallax-block-${tsvgShortcodeId} .mask_4`).attr("data-tsvg-ef", mask_4 + "_4");
					}
					tsvgPaginationGenerate();
				}
			);
			$(document).on(
				'input',
				'.tsvg_range_input',
				function (event) {
					$(`.tsvg_range_div_title[data-tsvg-field="${$(this).attr('id')}"]`).attr('data-tsvg-length', `${event.target.value}${$(this).attr('data-tsvg-param')}`);
					var tsvg_range_width = (100 * ($(this).val() - $(this).attr('min'))) / ($(this).attr('max') - $(this).attr('min')),
						tsvg_range_background = `linear-gradient(90deg,#4b55be ${tsvg_range_width}%,rgba( 204, 204, 204, 0.214 ) ${tsvg_range_width + 0.1}%)`;
					$(this).css('background', tsvg_range_background);
					var tsvg_change_style = $(this).attr('id');
					if (tsvgStyles.hasOwnProperty(`${tsvg_change_style}`)) {
						tsvgStyles[tsvg_change_style] = event.target.value;
					} else if (tsvgThemeSettings.hasOwnProperty(`${tsvg_change_style}`)) {
						tsvgThemeSettings[tsvg_change_style] = event.target.value;
					} else if (tsvgThemeOptionStyles.hasOwnProperty(`${tsvg_change_style}`)) {
						tsvgThemeOptionStyles[`${tsvg_change_style}`] = event.target.value;
					}
					document.documentElement.style.setProperty($(this).attr('data-tsvg-change'), `${$(this).val() + $(this).attr('data-tsvg-param')}`);
					if (typeof event.isTrigger === 'undefined') {
						if (tsvgShortcodeTheme == 'Grid Video Gallery') {
							tsvgGridAdmin();
						}
					}
					if ($(this).attr("id") == "TotalSoft_VGallery_Set_02") {
						jQuery(`.tsvg-main-content-${tsvgShortcodeId}`).attr('data-item-number', $(this).val());
						if (jQuery(`.tsvg-main-content-${tsvgShortcodeId}`).attr("data-pagination") == 'pagination' || jQuery(`.tsvg-main-content-${tsvgShortcodeId}`).attr("data-pagination") == 'load-more') {
							tsvgPaginationGenerate();
						}
					}
				}
			);
			$(document).on(
				'input',
				'input.tsvg_checkbox_input',
				function (event) {
					if (tsvgStyles.hasOwnProperty(`${$(this).attr("id")}`)) {
						tsvgStyles[`${$(this).attr("id")}`] = `${$(this).is(':checked')}`;
					} else if (tsvgThemeSettings.hasOwnProperty(`${$(this).attr("id")}`)) {
						tsvgThemeSettings[`${$(this).attr("id")}`] = `${$(this).is(':checked')}`;
					} else if (tsvgThemeOptionStyles.hasOwnProperty(`${$(this).attr("id")}`)) {
						tsvgThemeOptionStyles[`${$(this).attr("id")}`] = `${$(this).is(':checked')}`;
					}
					if ($(this).is(':checked')) {
						$(`${$(this).attr('data-change-elem')}`).attr(`${$(this).attr('data-change-prop')}`, $(this).parent().attr('data-tsvg-check'));
					} else {
						$(`${$(this).attr('data-change-elem')}`).attr(`${$(this).attr('data-change-prop')}`, $(this).parent().attr('data-tsvg-uncheck'));
					}
					if (tsvgShortcodeTheme == 'Grid Video Gallery' && typeof event.isTrigger === 'undefined') {						
						if(jQuery(this).attr('id') == 'TotalSoft_GV_2_22' && jQuery(this).is(':checked') ){
							jQuery(`.tsvg-grid-slides-${tsvgShortcodeId} .tsvg-grid-slide-title-${tsvgShortcodeId}`).each(function( index ) {
								jQuery(this)[0].innerHTML == 0 ? jQuery( this ).attr('data-tsvg-bool','false') : jQuery( this ).attr('data-tsvg-bool','true');
							});
						}
						if(jQuery(this).attr('id') == 'TotalSoft_GV_2_23' && jQuery(this).is(':checked') ){
							jQuery(`.tsvg-grid-slides-${tsvgShortcodeId} .tsvg-grid-slide-desc-${tsvgShortcodeId}`).each(function( index ) {
								jQuery(this)[0].innerHTML == 0 ? jQuery( this ).attr('data-tsvg-bool','false') : jQuery( this ).attr('data-tsvg-bool','true');
							});
						}
						tsvgGridAdmin();
					}
				}
			);
			$(document).on(
				'change',
				'input.tsvg_range_input',
				function (event) {
					if (tsvgShortcodeTheme == "Fancy Gallery") {
						if ($(this).attr("id") == "TotalSoft_GV_1_33") {
							$(`main.tsvg-main-content-${tsvgShortcodeId}  li figure`).attr("data-width", $(this).val())
						}
						if ($(this).attr("id") == "TotalSoft_GV_1_34") {
							$(`main.tsvg-main-content-${tsvgShortcodeId}  li figure`).attr("data-height", $(this).val())
						}
						$(`main.tsvg-main-content-${tsvgShortcodeId}`).replaceWith($(`main.tsvg-main-content-${tsvgShortcodeId}`).clone());
						jQuery(`.tsvg-fancy-blocks-list-${tsvgShortcodeId} > li `).each(
							function () {
								jQuery(this).hoverdir({ hoverDelay: 50, inverse: $("#TotalSoft_GV_1_28").val() == "Default" ? false : true });
							}
						);
						tsvgFancyAdmin();
					}
					if (tsvgShortcodeTheme == "Thumbnails Video") {
						if ($(this).attr("id") == "TotalSoft_GV_1_03" || $(this).attr("id") == "TotalSoft_GV_1_05" || $(this).attr("id") == "TotalSoft_GV_1_06" || $(this).attr("id") == "TotalSoft_GV_1_07" || $(this).attr("id") == "TotalSoft_GV_1_08" || $(this).attr("id") == "TotalSoft_GV_1_09") {
							$(`main.tsvg-main-content-${tsvgShortcodeId}`).replaceWith($(`main.tsvg-main-content-${tsvgShortcodeId}`).clone());
							jQuery(`.tsvg-thumbnails-block-img-${tsvgShortcodeId}`).adipoli(
								{
									'startEffect': $(".tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_01'] .tsvg_active").attr('data-tsvg-pos'),
									'hoverEffect': $(".tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_02'] .tsvg_active").attr('data-tsvg-pos'),
									'imageOpacity': 1,
									'animSpeed': $("#TotalSoft_GV_1_03").val() * 1,
									'fillColor': $("#TotalSoft_GV_1_04").val(),
									'textColor': '#ffffff',
									'overlayText': '<i class="' + $("#TotalSoft_GV_2_14-icon_value").val() + '"></i>',
									'slices': $("#TotalSoft_GV_1_05").val() * 1,
									'boxCols': $("#TotalSoft_GV_1_06").val() * 1,
									'boxRows': $("#TotalSoft_GV_1_07").val() * 1,
									'popOutMargin': $("#TotalSoft_GV_1_08").val() * 1,
									'popOutShadow': $("#TotalSoft_GV_1_09").val() * 1,
									'popOutShadowC': $("#TotalSoft_GV_1_10").val()
								}
							);
							if (jQuery(window).width() < 820) {
								jQuery(`.tsvg-thumbnails-block-effect-inner-${tsvgShortcodeId}`).boxer({ tsvgId: tsvgShortcodeId, mobile: true });
							} else {
								jQuery(`.tsvg-thumbnails-block-effect-inner-${tsvgShortcodeId}`).not(".retina, .boxer_fixed, .boxer_top, .boxer_format, .boxer_mobile, .boxer_object").boxer({ tsvgId: tsvgShortcodeId });
							}
						}
					}
				}
			)
			$('.tsvg_range_input').trigger('input');
			$(document).on(
				'input',
				'input.tsvg_text_input',
				function (event) {
					if ($(this).attr('id') == 'TotalSoft_VGallery_Sty_01') {
						$(`.tsvg-section-${tsvgShortcodeId} .tsvg-pagination-pages`).attr("data-next-item", event.target.value);
					}
					if ($(this).attr('id') == 'TotalSoft_VGallery_Sty_02') {
						$(`.tsvg-section-${tsvgShortcodeId} .tsvg-pagination-pages`).attr("data-prev-item", event.target.value);
					}
					if ($(this).attr('id') == 'TotalSoft_VGallery_Sty_18') {
						$(`.tsvg-section-${tsvgShortcodeId} .tsvg-pagination-pages`).attr("data-load-text", event.target.value);
					}
					if (tsvgShortcodeTheme == 'Classic Gallery') {
						if ($(this).attr('id') == 'TotalSoft_VGallery_Set_03') {
							$(`.tsvg-section-${tsvgShortcodeId} .tsvg-pagination-pages`).attr("data-load-text", event.target.value);
						}
					}
					if (tsvgShortcodeTheme == 'Content Popup') {
						if ($(this).attr('id') == 'TotalSoft_GV_1_30') {
							$(`.tsvg-section-${tsvgShortcodeId} .tsvg-pagination-pages`).attr("data-next-item", event.target.value);
						}
						if ($(this).attr('id') == 'TotalSoft_GV_1_29') {
							$(`.tsvg-section-${tsvgShortcodeId} .tsvg-pagination-pages`).attr("data-prev-item", event.target.value);
						}
						if ($(this).attr('id') == 'TotalSoft_VGallery_Set_03') {
							$(`.tsvg-section-${tsvgShortcodeId} .tsvg-pagination-pages`).attr("data-load-text", event.target.value);
						}
					}
					if (tsvgShortcodeTheme == 'Elastic Gallery') {
						if ($(this).attr('id') == 'TotalSoft_GV_2_05') {
							$(`.tsvg-section-${tsvgShortcodeId} .tsvg-pagination-pages`).attr("data-next-item", event.target.value);
						}
						if ($(this).attr('id') == 'TotalSoft_GV_2_06') {
							$(`.tsvg-section-${tsvgShortcodeId} .tsvg-pagination-pages`).attr("data-prev-item", event.target.value);
						}
						if ($(this).attr('id') == 'TotalSoft_VGallery_Set_03') {
							$(`.tsvg-section-${tsvgShortcodeId} .tsvg-pagination-pages`).attr("data-load-text", event.target.value);
						}
					}
					if (tsvgShortcodeTheme == 'Fancy Gallery') {
						if ($(this).attr('id') == 'TotalSoft_GV_2_14') {
							$(`.tsvg-section-${tsvgShortcodeId} .tsvg-pagination-pages`).attr("data-next-item", event.target.value);
						}
						if ($(this).attr('id') == 'TotalSoft_GV_2_13') {
							$(`.tsvg-section-${tsvgShortcodeId} .tsvg-pagination-pages`).attr("data-prev-item", event.target.value);
						}
						if ($(this).attr('id') == 'TotalSoft_VGallery_Set_03') {
							$(`.tsvg-section-${tsvgShortcodeId} .tsvg-pagination-pages`).attr("data-load-text", event.target.value);
						}
					}
					if (tsvgShortcodeTheme == 'Grid Video Gallery') {
						if ($(this).attr('id') == 'TotalSoft_GV_2_12') {
							$(`.tsvg-section-${tsvgShortcodeId} .tsvg-pagination-pages`).attr("data-next-item", event.target.value);
						}
						if ($(this).attr('id') == 'TotalSoft_GV_2_13') {
							$(`.tsvg-section-${tsvgShortcodeId} .tsvg-pagination-pages`).attr("data-prev-item", event.target.value);
						}
						if ($(this).attr('id') == 'TotalSoft_VGallery_Set_03') {
							$(`.tsvg-section-${tsvgShortcodeId} .tsvg-pagination-pages`).attr("data-load-text", event.target.value);
						}
					}
					if (tsvgShortcodeTheme == 'LightBox Video Gallery') {
						if ($(this).attr('id') == 'TotalSoft_GV_1_37') {
							$(`.tsvg-section-${tsvgShortcodeId} .tsvg-pagination-pages`).attr("data-next-item", event.target.value);
						}
						if ($(this).attr('id') == 'TotalSoft_GV_1_38') {
							$(`.tsvg-section-${tsvgShortcodeId} .tsvg-pagination-pages`).attr("data-prev-item", event.target.value);
						}
						if ($(this).attr('id') == 'TotalSoft_VGallery_Set_03') {
							$(`.tsvg-section-${tsvgShortcodeId} .tsvg-pagination-pages`).attr("data-load-text", event.target.value);
						}
					}
					if (tsvgShortcodeTheme == 'Parallax Engine') {
						if ($(this).attr('id') == 'TotalSoft_GV_2_06') {
							$(`.tsvg-section-${tsvgShortcodeId} .tsvg-pagination-pages`).attr("data-next-item", event.target.value);
						}
						if ($(this).attr('id') == 'TotalSoft_GV_2_07') {
							$(`.tsvg-section-${tsvgShortcodeId} .tsvg-pagination-pages`).attr("data-prev-item", event.target.value);
						}
						if ($(this).attr('id') == 'TotalSoft_VGallery_Set_03') {
							$(`.tsvg-section-${tsvgShortcodeId} .tsvg-pagination-pages`).attr("data-load-text", event.target.value);
						}
					}
					if (tsvgShortcodeTheme == 'Space Gallery') {
						if ($(this).attr('id') == 'TotalSoft_VGallery_Set_03') {
							$(`.tsvg-section-${tsvgShortcodeId} .tsvg-pagination-pages`).attr("data-load-text", event.target.value);
						}
					}
					if (tsvgShortcodeTheme == 'Thumbnails Video') {
						if ($(this).attr('id') == 'TotalSoft_GV_1_38') {
							$(`.tsvg-section-${tsvgShortcodeId} .tsvg-pagination-pages`).attr("data-next-item", event.target.value);
						}
						if ($(this).attr('id') == 'TotalSoft_GV_1_39') {
							$(`.tsvg-section-${tsvgShortcodeId} .tsvg-pagination-pages`).attr("data-prev-item", event.target.value);
						}
						if ($(this).attr('id') == 'TotalSoft_VGallery_Set_03') {
							$(`.tsvg-section-${tsvgShortcodeId} .tsvg-pagination-pages`).attr("data-load-text", event.target.value);
						}
					}
					if ($(this).attr('data-change-prop')) {
						$(`${$(this).attr('data-tsvg-elem')}`).attr(
							`${$(this).attr('data-change-prop')}`,
							event.target.value
						);
					} else {
						$(`${$(this).attr('data-tsvg-elem')}`).text(event.target.value);
					}
					var tsvg_change_style = $(this).attr('id');
					if (tsvgStyles.hasOwnProperty(`${tsvg_change_style}`)) {
						tsvgStyles[tsvg_change_style] = event.target.value;
					} else if (tsvgThemeSettings.hasOwnProperty(`${tsvg_change_style}`)) {
						tsvgThemeSettings[tsvg_change_style] = event.target.value;
					} else if (tsvgThemeOptionStyles.hasOwnProperty(`${tsvg_change_style}`)) {
						tsvgThemeOptionStyles[tsvg_change_style] = event.target.value;
					}
				}
			);
			$(document).on(
				'change',
				'.tsvg_select_div > select',
				function (event) {
					if (tsvgStyles.hasOwnProperty(`${$(this).attr("id")}`)) {
						tsvgStyles[`${$(this).attr("id")}`] = `${event.target.value}`;
					} else if (tsvgThemeSettings.hasOwnProperty(`${$(this).attr("id")}`)) {
						tsvgThemeSettings[`${$(this).attr("id")}`] = `${event.target.value}`;
					} else if (tsvgThemeOptionStyles.hasOwnProperty(`${$(this).attr("id")}`)) {
						tsvgThemeOptionStyles[`${$(this).attr("id")}`] = `${event.target.value}`;
					}
					if ($(this).hasClass('tsvg_root_elem')) {
						document.documentElement.style.setProperty($(this).attr('data-change-prop'), event.target.value);
					} else {
						$(`${$(this).attr('data-change-elem')}`).attr(`${$(this).attr('data-change-prop')}`, event.target.value);
					}
					if ($(this).attr("id") == "ts_vgallery_a_iht") {
						if (event.target.value == "fixed") {
							$(".tsvg_position_select[data-tsvg-select='ts_vgallery_a_ihr']").parent().attr("style", "display:none");
							$(".tsvg_range_div_title[data-tsvg-field='ts_vgallery_a_ih']").parent().removeAttr("style");
							$(`main.tsvg-main-content-${tsvgShortcodeId}`).attr("data-tsvg-ratio", "none");
							$(`input#ts_vgallery_a_ih`).trigger("input");
						} else {
							$(".tsvg_range_div_title[data-tsvg-field='ts_vgallery_a_ih']").parent().attr("style", "display:none");
							$(".tsvg_position_select[data-tsvg-select='ts_vgallery_a_ihr']").parent().removeAttr("style");
							if ($(".tsvg_position_select[data-tsvg-select='ts_vgallery_a_ihr'] > .tsvg_active").length > 0) {
								$(`main.tsvg-main-content-${tsvgShortcodeId}`).attr("data-tsvg-ratio", $(".tsvg_position_select[data-tsvg-select='ts_vgallery_a_ihr'] > .tsvg_active").attr("data-tsvg-pos"));
								tsvgStyles["ts_vgallery_a_ih"] = $(".tsvg_position_select[data-tsvg-select='ts_vgallery_a_ihr'] > .tsvg_active").attr("data-tsvg-pos");
							} else {
								$(".tsvg_position_select[data-tsvg-select='ts_vgallery_a_ihr > .tsvg_position_item']").first().trigger("click");
							}
						}
						$('.tsvg_accordion_item_opened.video-image').children(".tsvg_accordion_item_content").height(`${$('.tsvg_accordion_item_opened.video-image').children(".tsvg_accordion_item_content").children(".tsvg_accordion_items").prop("scrollHeight")}px`);
					}
					if ($(this).attr("id") == "ts_vgallery_p_sheff") {
						$(`.ts_vgallery_r_section_${tsvgShortcodeId},#ts_vgallery_modal_result_section_${tsvgShortcodeId}`).removeAttr("style");
					}
					if ($(this).attr("id") == "TotalSoft_VGallery_Set_01") {
						$("#TotalSoft_VGallery_Set_02").parent().attr("style", "display:none;");
						$("#TotalSoft_VGallery_Set_03").parent().attr("style", "display:none;");
						$("[data-tsvg-select='TotalSoft_VGallery_Set_05']").parent().attr("style", "display:none;");
						$("[data-tsvg-select='TotalSoft_VGallery_Set_06']").parent().attr("style", "display:none;");
						$("[data-tsvg-select='TotalSoft_VGallery_Set_08']").parent().attr("style", "display:none;");
						$("#TotalSoft_VGallery_Set_03").parent().attr("style", "display:none;");
						$(".tsvg_accordion_item.style").attr("style", "display:none;");
						$("#TotalSoft_VGallery_Sty_01,#TotalSoft_VGallery_Sty_02,#TotalSoft_VGallery_Sty_03,#TotalSoft_VGallery_Sty_04,#TotalSoft_VGallery_Sty_05,#TotalSoft_VGallery_Sty_06,#TotalSoft_VGallery_Sty_07,#TotalSoft_VGallery_Sty_08,#TotalSoft_VGallery_Sty_09,#TotalSoft_VGallery_Sty_10,#TotalSoft_VGallery_Sty_11,#TotalSoft_VGallery_Sty_12,#TotalSoft_VGallery_Sty_13,#TotalSoft_VGallery_Sty_14-icon-picker-wrap,#TotalSoft_VGallery_Sty_15-icon-picker-wrap,#TotalSoft_VGallery_Sty_16,#TotalSoft_VGallery_Sty_17,#TotalSoft_VGallery_Sty_18,#TotalSoft_VGallery_Sty_19,#TotalSoft_VGallery_Sty_20,#TotalSoft_VGallery_Sty_21,#TotalSoft_VGallery_Sty_22,#TotalSoft_VGallery_Sty_23,#TotalSoft_VGallery_Sty_24-icon-picker-wrap,#TotalSoft_VGallery_Sty_25,#TotalSoft_VGallery_Sty_26,#TotalSoft_VGallery_Sty_27").parent().attr("style", "display:none;");
						jQuery('.tsvg-pagination-pages li').remove();
						if (typeof event.isTrigger === 'undefined') {
							if (tsvgShortcodeTheme == 'Grid Video Gallery') {
								tsvgGridAdmin(false,true);
							}
						}
						switch (event.target.value) {
							case "pagination":
								$("#TotalSoft_VGallery_Set_02").parent().removeAttr("style");
								$("[data-tsvg-select='TotalSoft_VGallery_Set_05']").parent().removeAttr("style");
								$("[data-tsvg-select='TotalSoft_VGallery_Set_06']").parent().removeAttr("style");
								$("#TotalSoft_VGallery_Sty_01,#TotalSoft_VGallery_Sty_02,#TotalSoft_VGallery_Sty_03,#TotalSoft_VGallery_Sty_04,#TotalSoft_VGallery_Sty_05,#TotalSoft_VGallery_Sty_06,#TotalSoft_VGallery_Sty_07,#TotalSoft_VGallery_Sty_08,#TotalSoft_VGallery_Sty_09,#TotalSoft_VGallery_Sty_10,#TotalSoft_VGallery_Sty_11,#TotalSoft_VGallery_Sty_12,#TotalSoft_VGallery_Sty_13,#TotalSoft_VGallery_Sty_14-icon-picker-wrap,#TotalSoft_VGallery_Sty_15-icon-picker-wrap,#TotalSoft_VGallery_Sty_16").parent().removeAttr("style");
								$(".tsvg_accordion_item.style").removeAttr("style");
								tsvgPaginationGenerate();
								break;
							case "load-more":
								$("#TotalSoft_VGallery_Set_02").parent().removeAttr("style");
								$("#TotalSoft_VGallery_Set_03").parent().removeAttr("style");
								$("[data-tsvg-select='TotalSoft_VGallery_Set_08']").parent().removeAttr("style");
								$("#TotalSoft_VGallery_Sty_17,#TotalSoft_VGallery_Sty_18,#TotalSoft_VGallery_Sty_19,#TotalSoft_VGallery_Sty_20,#TotalSoft_VGallery_Sty_21,#TotalSoft_VGallery_Sty_22,#TotalSoft_VGallery_Sty_23,#TotalSoft_VGallery_Sty_24-icon-picker-wrap,#TotalSoft_VGallery_Sty_25,#TotalSoft_VGallery_Sty_26,#TotalSoft_VGallery_Sty_27").parent().removeAttr("style");
								$(".tsvg_accordion_item.style").removeAttr("style");
								tsvgPaginationGenerate();
								break;
							default:
								if (typeof event.isTrigger === 'undefined') {
									if (tsvgShortcodeTheme == 'Grid Video Gallery') {
										jQuery.each( jQuery(".tsvg-grid-content-items > .tsvg-grid-layout-item") , function (index, value) {
											let tsvgAnimDelay = 0.3 * (index + 1);
											jQuery(this).css({'-moz-animation-delay': tsvgAnimDelay+'s','-webkit-animation-delay': tsvgAnimDelay+'s','animation-delay': tsvgAnimDelay+'s'});
										})
									}
								}
								break;
						}
						$('.tsvg_accordion_item.tsvg_accordion_item_opened').children(".tsvg_accordion_item_content").height(`${$('.tsvg_accordion_item_opened').children(".tsvg_accordion_item_content").children(".tsvg_accordion_items").prop("scrollHeight")}px`)
					}
					if (tsvgShortcodeTheme == "Thumbnails Video") {
						if ($(this).attr("id") == "TotalSoft_GV_1_02") {
							$("#TotalSoft_GV_1_03,#TotalSoft_GV_1_05,#TotalSoft_GV_1_06,#TotalSoft_GV_1_07,#TotalSoft_GV_1_08,#TotalSoft_GV_1_09,#TotalSoft_GV_1_10").parent().attr("style", "display:none;");
							const slice = ["sliceDown", "sliceDownLeft", "sliceUp", "sliceUpLeft", "sliceUpRandom", "sliceUpDownLeft", "sliceDownRandom", "sliceUpDown", "fold", "foldLeft"];
							const box = ["boxRandom", "boxRain", "boxRainReverse", "boxRainGrow", "boxRainGrowReverse"];
							switch (event.target.value) {
								case "normal":
									$("#TotalSoft_GV_1_03").parent().removeAttr("style");
									break;
								case "popout":
									$("#TotalSoft_GV_1_08,#TotalSoft_GV_1_09,#TotalSoft_GV_1_10").parent().removeAttr("style");
									break;
								default:
									break;
							}
							if (slice.includes(event.target.value)) {
								$("#TotalSoft_GV_1_03,#TotalSoft_GV_1_05,#TotalSoft_GV_1_06").parent().removeAttr("style");
							}
							if (box.includes(event.target.value)) {
								$("#TotalSoft_GV_1_03,#TotalSoft_GV_1_07,#TotalSoft_GV_1_06").parent().removeAttr("style");
							}
							$('.tsvg_accordion_item.tsvg_accordion_item_opened').children(".tsvg_accordion_item_content").height(`${$('.tsvg_accordion_item_opened').children(".tsvg_accordion_item_content").children(".tsvg_accordion_items").prop("scrollHeight")}px`)
						}
						if ($(this).attr("id") == "TotalSoft_GV_1_02" || $(this).attr("id") == "TotalSoft_GV_1_01") {
							$(`main.tsvg-main-content-${tsvgShortcodeId}`).replaceWith($(`main.tsvg-main-content-${tsvgShortcodeId}`).clone());
							jQuery(`.tsvg-thumbnails-block-img-${tsvgShortcodeId}`).adipoli(
								{
									'startEffect': $(".tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_01'] .tsvg_active").attr('data-tsvg-pos'),
									'hoverEffect': $(".tsvg_position_select[data-tsvg-select='TotalSoft_GV_1_02'] .tsvg_active").attr('data-tsvg-pos'),
									'imageOpacity': 1,
									'animSpeed': $("#TotalSoft_GV_1_03").val() * 1,
									'fillColor': $("#TotalSoft_GV_1_04").val(),
									'textColor': '#ffffff',
									'overlayText': '<i class="' + $("#TotalSoft_GV_2_14-icon_value").val() + '"></i>',
									'slices': $("#TotalSoft_GV_1_05").val() * 1,
									'boxCols': $("#TotalSoft_GV_1_06").val() * 1,
									'boxRows': $("#TotalSoft_GV_1_07").val() * 1,
									'popOutMargin': $("#TotalSoft_GV_1_08").val() * 1,
									'popOutShadow': $("#TotalSoft_GV_1_09").val() * 1,
									'popOutShadowC': $("#TotalSoft_GV_1_10").val()
								}
							);
							if (jQuery(window).width() < 820) {
								jQuery(`.tsvg-thumbnails-block-effect-inner-${tsvgShortcodeId}`).boxer({ tsvgId: tsvgShortcodeId, mobile: true });
							} else {
								jQuery(`.tsvg-thumbnails-block-effect-inner-${tsvgShortcodeId}`).not(".retina, .boxer_fixed, .boxer_top, .boxer_format, .boxer_mobile, .boxer_object").boxer({ tsvgId: tsvgShortcodeId });
							}
						}
					}
					if (tsvgShortcodeTheme == 'Fancy Gallery') {
						if ($(this).attr("id") == "TotalSoft_GV_1_28") {
							jQuery(`.tsvg-fancy-blocks-list-${tsvgShortcodeId} > li `).each(
								function () {
									jQuery(this).hoverdir({ hoverDelay: 50, inverse: $("#TotalSoft_GV_1_28").val() == "Default" ? false : true });
								}
							);
							tsvgFancyAdmin();
						}
					}
					if (tsvgShortcodeTheme == 'Parallax Engine') {
						if ($(this).attr("id") == "TotalSoft_GV_1_19") {
							jQuery(`.tsvg-parallax-block-${tsvgShortcodeId} .mask`).removeAttr('style');
							jQuery(`.tsvg-parallax-block-${tsvgShortcodeId} .mask_1`).attr("data-tsvg-ef", jQuery(`.tsvg-parallax-block-${tsvgShortcodeId} .mask_1`).attr("data-tsvg-ef") + "_1");
							jQuery(`.tsvg-parallax-block-${tsvgShortcodeId} .mask_2`).attr("data-tsvg-ef", jQuery(`.tsvg-parallax-block-${tsvgShortcodeId} .mask_2`).attr("data-tsvg-ef") + "_2");
							jQuery(`.tsvg-parallax-block-${tsvgShortcodeId} .mask_3`).attr("data-tsvg-ef", jQuery(`.tsvg-parallax-block-${tsvgShortcodeId} .mask_3`).attr("data-tsvg-ef") + "_3");
							jQuery(`.tsvg-parallax-block-${tsvgShortcodeId} .mask_4`).attr("data-tsvg-ef", jQuery(`.tsvg-parallax-block-${tsvgShortcodeId} .mask_4`).attr("data-tsvg-ef") + "_4");
						}
						if ($(this).attr("id") == "TotalSoft_GV_1_29" || $(this).attr("id") == "TotalSoft_GV_1_30") {
							$(`main.tsvg-main-content-${tsvgShortcodeId}`).replaceWith($(`main.tsvg-main-content-${tsvgShortcodeId}`).clone());
							tsvgParalaxEngine(jQuery(`.tsvg-parallax-blocks-container-${tsvgShortcodeId}`).attr('data-item-type'), jQuery(`.tsvg-parallax-blocks-container-${tsvgShortcodeId}`).attr('data-item-efect'));
						}
					}
				}
			);
			$(".tsvg_select_div > select#TotalSoft_GV_1_02").trigger("change");
			$(".tsvg_select_div > select#TotalSoft_GV_1_06").trigger("change");
			$(".tsvg_select_div > select#TotalSoft_VGallery_Set_01").trigger("change");
			$(document).on(
				'click',
				'.tsvg_save_btn ',
				function () {
					document.getElementById("tsvg_loader").style.display = "flex";
					document.getElementById("tsvg_loader").style.zIndex = 100053;
					let tsvgVideosOrder = [];
					$("#tsvg-list > .tsvg-list-item").each(function () { tsvgVideosOrder.push($(this).attr("aria-tsvg-video")); });
					let tsvgSendData = {
						tsvg_nonce: tsvg_builder_object.tsvg_nonce,
						tsvg_id: tsvgShortcodeId,
						tsvg_title: tsvg_builder_object.tsvg_proporties.TS_VG_Title,
						tsvg_videos: JSON.stringify(tsvgVideos),
						tsvg_videos_order: JSON.stringify(tsvgVideosOrder),
						tsvg_styles: JSON.stringify(tsvgStyles),
						tsvg_options: JSON.stringify(tsvgOptions),
						tsvg_settings: JSON.stringify(tsvgThemeSettings),
						tsvg_option_styles: JSON.stringify(tsvgThemeOptionStyles),
						tsvg_deleted_videos: JSON.stringify(tsvgDeleteIds)
					};
					let tsvgSaveForm = document.createElement('form');
					tsvgSetAttributes(tsvgSaveForm, {
						"id": "tsvg-save-form",
						"method": "post"
					});
					for (const tsvgKey in tsvgSendData) {
						if (Object.hasOwnProperty.call(tsvgSendData, tsvgKey)) {
							let tsvgNewInput = document.createElement('input');
							tsvgSetAttributes(tsvgNewInput, {
								"type": "hidden",
								"name": tsvgKey,
								"value" : tsvgSendData[tsvgKey]
							});
							tsvgSaveForm.prepend(tsvgNewInput);
						}
					}
					document.getElementById("tsvg_builder_section").append(tsvgSaveForm);
					tsvgSaveForm.submit();
				}
			);
			$('#tsvg-list').sortable(
				{
					cursor: 'move',
					handle: ".tsvg_handle_list",
					placeholder: "tsvg-portlet-placeholder",
					update: function (event, ui) {
						if ($(ui.item).prev().attr('aria-tsvg-video') == null) {
							$(`main.tsvg-main-content-${tsvgShortcodeId} ul li[data-tsvg-id='${$(ui.item).attr("aria-tsvg-video")}']`).insertBefore($(`main.tsvg-main-content-${tsvgShortcodeId} > figure > ul > li:first-child`));
							if (tsvgShortcodeTheme == 'Grid Video Gallery') {
								$(`.tsvg-grid-slideshow-${tsvgShortcodeId} ul li[data-tsvg-id='${$(ui.item).attr("aria-tsvg-video")}']`).insertBefore($(`.tsvg-grid-slideshow-${tsvgShortcodeId} > ul > li:first-child`));
								tsvgGridAdmin();
							}
						} else {
							$(`main.tsvg-main-content-${tsvgShortcodeId} ul li[data-tsvg-id='${$(ui.item).attr("aria-tsvg-video")}']`).insertAfter($(`main.tsvg-main-content-${tsvgShortcodeId} > figure > ul > li[data-tsvg-id="${$(ui.item).prev().attr('aria-tsvg-video')}"]`));
							if (tsvgShortcodeTheme == 'Grid Video Gallery') {
								$(`.tsvg-grid-slideshow-${tsvgShortcodeId} ul li[data-tsvg-id='${$(ui.item).attr("aria-tsvg-video")}']`).insertAfter($(`.tsvg-grid-slideshow-${tsvgShortcodeId} > ul > li[data-tsvg-id="${$(ui.item).prev().attr('aria-tsvg-video')}"]`));
								tsvgGridAdmin();
							}
						}
						tsvgPaginationGenerate();
					},
				}
			);
			jQuery(document).on(
				"click",
				"div.tsvg_img_change",
				function (e) {
					e.preventDefault();
					var tsvg_wp_media_library;
					if (tsvg_wp_media_library) {
						tsvg_wp_media_library.open();
					}
					tsvg_wp_media_library = wp.media(
						{
							frame: 'post',
							type: 'image',
							multiple: false,
							states: [new wp.media.controller.Library(
								{
									title: 'Select image',
									library: wp.media.query(
										{
											type: 'image'
										}
									),
									multiple: false,
									date: false,
									gallery: false,
								}
							)]
						}
					);
					tsvg_wp_media_library.state('embed').on(
						'select',
						function () {
							var state = tsvg_wp_media_library.state('embed'),
								type = state.get('type'),
								embed = state.props.toJSON();
							if (type == "image") {
								tsvgSetImage("embed", "", embed.url, embed.width, embed.height);
							} else {
								tsvgSetImage("embed", "", tsvg_builder_object.tsvg_no_img, 600, 600);
								toastr["error"](`Your inserted file type isn't image.`, 'Error', tsvgToastrOptions);
							}
						}
					);
					tsvg_wp_media_library.state('library').on(
						'select',
						function () {
							var selection = tsvg_wp_media_library.state('library').get('selection'),
								tsvg_selection_id = "";
							selection.each(
								function (attachment) {
									tsvg_selection_id = attachment["id"];
								}
							);
							if (Number.isInteger(tsvg_selection_id)) {
								var url = wp.media.attachment(tsvg_selection_id).get('url');
								var width = wp.media.attachment(tsvg_selection_id).get('width');
								var height = wp.media.attachment(tsvg_selection_id).get('height');
								tsvgSetImage("library", tsvg_selection_id, url, width, height);
							}
						}
					);
					tsvg_wp_media_library.on(
						'open',
						function () {
							$("button#menu-item-video-playlist,button#menu-item-playlist,button#menu-item-gallery,button#menu-item-insert").remove();
							var tsvg_selected_attachment = jQuery('input#tsvg_video_attachment_id').val();
							if (Number.isInteger(+tsvg_selected_attachment)) {
								$("button#menu-item-library").trigger("click");
								var selection = tsvg_wp_media_library.state('library').get('selection');
								var attachment = wp.media.attachment(+tsvg_selected_attachment);
								attachment.fetch();
								selection.add(attachment ? [attachment] : []);
							} else {
								$("button#menu-item-embed").trigger("click");
								$("input#embed-url-field").val(tsvg_selected_attachment).trigger("input");
							}
						}
					);
					tsvg_wp_media_library.open();
				}
			);
			jQuery(document).on(
				"click",
				"div.tsvg_vd_change",
				function (e) {
					e.preventDefault();
					var tsvg_wp_media_library;
					if (tsvg_wp_media_library) {
						tsvg_wp_media_library.open();
					}
					tsvg_wp_media_library = wp.media(
						{
							frame: 'post',
							type: 'video',
							multiple: false,
							states: [new wp.media.controller.Library(
								{
									title: 'Select video',
									library: wp.media.query(
										{
											type: 'video'
										}
									),
									multiple: false,
									date: false,
									gallery: false,
								}
							)]
						}
					);
					tsvg_wp_media_library.state('embed').on(
						'select',
						function () {
							var state = tsvg_wp_media_library.state('embed'),
								embed = state.props.toJSON(),
								url = embed.url;
							var url_split = url.split("&");
							url = url_split[0];
							var regexp = /https?:\/\/www\.youtube\.com\/embed\/([^/]+)/;
							var youTubeEmbedMatch = regexp.exec(url);
							if (youTubeEmbedMatch) {
								url = 'https://www.youtube.com/watch?v=' + youTubeEmbedMatch[1];
							}
							wp.apiRequest(
								{
									url: wp.media.view.settings.oEmbedProxyUrl,
									data: {
										url: url,
									},
									beforeSend: function () {
										$(".tsvg_vd_loading_div").removeAttr("style");
									},
									type: 'GET',
									dataType: 'json',
									context: this
								}
							).done(
								function (response) {
									if (response.hasOwnProperty("thumbnail_url")) {
										var tsvgImgSrc = response.thumbnail_url;
										var tsvgImgW = response.thumbnail_width;
										var tsvgImgH = response.thumbnail_height;
										if (response.provider_name === "YouTube") {
											if (tsvgImgSrc !== "") {
												if (!tsvgImgSrc.includes('maxresdefault.jpg')) {
													if (tsvgImgSrc.includes('hqdefault.jpg')) {
														tsvgImgSrc = tsvgImgSrc.replace('hqdefault.jpg', 'maxresdefault.jpg');
														getYTMaxResolution(
															tsvgImgSrc,
															(width, height) => {
																if (width > 130) {
																	tsvgSetImage("embed", "", tsvgImgSrc, width, height);
																} else {
																	tsvgSetImage("embed", "", tsvgImgSrc.replace('maxresdefault.jpg', 'mqdefault.jpg'), tsvgImgW, tsvgImgH);
																}
															}
														);
													} else if (tsvgImgSrc.includes('mqdefault.jpg')) {
														tsvgImgSrc = tsvgImgSrc.replace('mqdefault.jpg', 'maxresdefault.jpg');
														getYTMaxResolution(
															tsvgImgSrc,
															(width, height) => {
																if (width > 130) {
																	tsvgSetImage("embed", "", tsvgImgSrc, width, height);
																} else {
																	tsvgSetImage("embed", "", tsvgImgSrc.replace('maxresdefault.jpg', 'mqdefault.jpg'), tsvgImgW, tsvgImgH);
																}
															}
														);
													} else {
														tsvgSetImage("embed", "", tsvgImgSrc, tsvgImgW, tsvgImgH);
													}
												}
											}
										} else {
											tsvgSetImage("embed", "", tsvgImgSrc, tsvgImgW, tsvgImgH);
										}
										toastr["info"](`Your selected video has thumbnail,but you can change it.`, 'Info', tsvgToastrOptions);
									} else {
										if (response.provider_name == "Embed Handler") {
											response.html = ` <video controls="" name="media"><source src="${url}"></video>`;
										}
										toastr["warning"](`Your selected video has not thumbnail,but you can add image.`, 'Warning', tsvgToastrOptions);
									}
									jQuery('.tsvg_vd_change').children("iframe").remove();
									jQuery('.tsvg_vd_change').children("video").remove();
									jQuery('.tsvg_vd_change').children("blockquote").remove();
									jQuery('.tsvg_img_div_edit').removeAttr("style");
									jQuery('input#tsvg_video_video_attachment_id').val(url);
									jQuery('.tsvg_vd_change > img').attr("style", "display:none;");
									jQuery('.tsvg_vd_change').prepend(response.html);
									$(".tsvg_vd_loading_div").attr("style", "display:none;");
									var regExp = /^.*(vimeo\.com\/)((channels\/[A-z]+\/)|(groups\/[A-z]+\/videos\/))?([0-9]+)/;
									var match = url.match(regExp);
									if (match) {
										url = 'https://player.vimeo.com/video/' + match[5];
									} else {
										if (response.provider_url === "https://rumble.com/") {
											let rumblerIframeDiv = document.createElement('div')
											rumblerIframeDiv.innerHTML = response.html
											url = rumblerIframeDiv.querySelector('iframe').src;
											if (url.indexOf('#?secret=') > -1) {
												url = url.replace('#?secret=','');
											}
										} else {
											if (response.provider_name === "YouTube") {
												if (url.indexOf('youtube.com/shorts/') > -1) {
													url = url.replace("shorts", "embed");
												}
												if (url.indexOf('watch?v=') > -1) {
													var url_ifr = url.split("=");
													url = 'https://www.youtube.com/embed/' + url_ifr[1];
												}
												if (url.indexOf('youtu.be/') > -1) {
													var url_ifr = url.split("/");
													url = 'https://www.youtube.com/embed/' + url_ifr[3];
												}
												if (url.indexOf('?feature=share') > -1) {
													url = url.replace('?feature=share','');
												}
											}
										}
									}
									tsvgVideos[`${tsvgEditId}`].TS_VG_Options.TotalSoftVGallery_Vid_Vd = url;
									if (tsvgShortcodeTheme == 'Grid Video Gallery') {
										$(`ul.tsvg-grid-slides-${tsvgShortcodeId}  .tsvg-grid-slide[data-tsvg-id='${tsvgEditId}']`).removeClass('tsvg-media-video-container tsvg-media-img-container');
										$(`ul.tsvg-grid-slides-${tsvgShortcodeId}  .tsvg-grid-slide[data-tsvg-id='${tsvgEditId}']`).addClass("tsvg-media-iframe-container");
										$(`ul.tsvg-grid-slides-${tsvgShortcodeId}  .tsvg-grid-slide[data-tsvg-id='${tsvgEditId}'] .tsvg-video-wrapper`).removeClass("tsvg-video-wrapper").addClass("tsvg-media-wrapper");
										$(`ul.tsvg-grid-slides-${tsvgShortcodeId}  .tsvg-grid-slide[data-tsvg-id='${tsvgEditId}'] .tsvg-media-wrapper`).remove();
										$(`ul.tsvg-grid-slides-${tsvgShortcodeId}  .tsvg-grid-slide[data-tsvg-id='${tsvgEditId}'] figure`).append(`<div class="tsvg-media-wrapper tsvg-iframe-wrapper" data-creat_src="${url}"><img src="${tsvgImgSrc}" class="tsvg-wrapper-bgc"><img src="${tsvg_builder_object.tsvg_image_load}" class="tsvg-grid-slideshow-loader tsvg-grid-slideshow-loader-hidden"></div>`);
										$(`ul.tsvg-grid-slides-${tsvgShortcodeId}  .tsvg-grid-slide[data-tsvg-id='${tsvgEditId}']`).find('.tsvg-iframe-wrapper').attr('data-creat_src', url);
									}
									if (tsvgShortcodeTheme == 'LightBox Video Gallery') {
										$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}'] .tsvg-lightbox-block-inner-${tsvgShortcodeId}`).attr("data-tsvg-href", url)
									}
									if (tsvgShortcodeTheme == 'Thumbnails Video') {
										$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}'] a`).attr("href", url)
									}
									if (tsvgShortcodeTheme == 'Content Popup') {
										$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}']`).attr("data-tsvg-href", url)
									}
									if (tsvgShortcodeTheme == 'Elastic Gallery') {
										$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}']`).attr("data-src", url)
									}
									if (tsvgShortcodeTheme == 'Fancy Gallery') {
										$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}' ] figure `).attr("data-href", url);
										$(`main.tsvg-main-content-${tsvgShortcodeId}`).replaceWith($(`main.tsvg-main-content-${tsvgShortcodeId}`).clone());
										jQuery(`.tsvg-fancy-blocks-list-${tsvgShortcodeId} > li `).each(
											function () {
												jQuery(this).hoverdir({ hoverDelay: 50, inverse: $("#TotalSoft_GV_1_28").val() == "Default" ? false : true });
											}
										);
										tsvgFancyAdmin();
									}
									if (tsvgShortcodeTheme == 'Parallax Engine') {
										$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}' ]`).attr("data-href", url);
									}
									if (tsvgShortcodeTheme == 'Classic Gallery') {
										$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}']`).attr("data-tsvg-src", url)
									}
									if (tsvgShortcodeTheme == 'Space Gallery') {
										let tsvgRumbleCheck = url.indexOf('rumble') > -1 ? 'sandbox=allow-scripts' : '' ;
										$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}']`).attr("data-tsvg-src", url);
										$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}'] .tsvg-video-wrapper `).html(` <iframe src="${url}" ${tsvgRumbleCheck} frameborder = "0" webkitAllowFullScreen > </iframe> `)
									}
								}
							).fail(
								function () {
									$(".tsvg_vd_loading_div").attr("style", "display:none;");
									toastr["error"](`Your inserted link isn't valid.`, 'Error', tsvgToastrOptions)
								}
							);
						}
					);
					tsvg_wp_media_library.state('library').on(
						'select',
						function () {
							$(".tsvg_vd_loading_div").removeAttr("style");
							var selection = tsvg_wp_media_library.state('library').get('selection'),
								tsvg_selection_id = "";
							selection.each(
								function (attachment) {
									tsvg_selection_id = attachment["id"];
								}
							);
							if (Number.isInteger(tsvg_selection_id)) {
								toastr["warning"](`Your selected video has not thumbnail,but you can add image.`, 'Warning', tsvgToastrOptions);
								jQuery('.tsvg_vd_change').children("iframe").remove();
								jQuery('.tsvg_vd_change').children("video").remove();
								jQuery('.tsvg_vd_change').children("blockquote").remove();
								jQuery('.tsvg_img_div_edit').removeAttr("style");
								var url = wp.media.attachment(tsvg_selection_id).get('url');
								tsvgVideos[`${tsvgEditId}`].TS_VG_Options.TotalSoftVGallery_Vid_Vd = url;
								if (tsvgShortcodeTheme == 'LightBox Video Gallery') {
									$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}'] .tsvg-lightbox-block-inner-${tsvgShortcodeId}`).attr("data-tsvg-href", url)
								}
								if (tsvgShortcodeTheme == 'Thumbnails Video') {
									$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}'] a`).attr("href", url)
								}
								if (tsvgShortcodeTheme == 'Content Popup') {
									$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}']`).attr("data-tsvg-href", url)
								}
								if (tsvgShortcodeTheme == 'Elastic Gallery') {
									$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}']`).attr("data-src", url)
								}
								if (tsvgShortcodeTheme == 'Fancy Gallery') {
									$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}'] figure`).attr("data-href", url);
									$(`main.tsvg-main-content-${tsvgShortcodeId}`).replaceWith($(`main.tsvg-main-content-${tsvgShortcodeId}`).clone());
									jQuery(`.tsvg-fancy-blocks-list-${tsvgShortcodeId} > li `).each(
										function () {
											jQuery(this).hoverdir({ hoverDelay: 50, inverse: $("#TotalSoft_GV_1_28").val() == "Default" ? false : true });
										}
									);
									tsvgFancyAdmin();
								}
								if (tsvgShortcodeTheme == 'Grid Video Gallery') {
									if ($(`ul.tsvg-grid-slides-${tsvgShortcodeId}  .tsvg-grid-slide[data-tsvg-id='${tsvgEditId}']`).hasClass("tsvg-media-img-container")) $(`ul.tsvg-grid-slides-${tsvgShortcodeId}  .tsvg-grid-slide[data-tsvg-id='${tsvgEditId}']`).removeClass("tsvg-media-img-container");
									if ($(`ul.tsvg-grid-slides-${tsvgShortcodeId}  .tsvg-grid-slide[data-tsvg-id='${tsvgEditId}']`).hasClass("tsvg-media-iframe-container")) $(`ul.tsvg-grid-slides-${tsvgShortcodeId}  .tsvg-grid-slide[data-tsvg-id='${tsvgEditId}']`).removeClass("tsvg-media-iframe-container");
									$(`ul.tsvg-grid-slides-${tsvgShortcodeId}  .tsvg-grid-slide[data-tsvg-id='${tsvgEditId}']`).addClass("tsvg-media-video-container");
									$(`ul.tsvg-grid-slides-${tsvgShortcodeId}  .tsvg-grid-slide[data-tsvg-id='${tsvgEditId}'] .tsvg-media-wrapper`).removeClass("tsvg-media-wrapper").addClass("tsvg-video-wrapper");
									$(`ul.tsvg-grid-slides-${tsvgShortcodeId}  .tsvg-grid-slide[data-tsvg-id='${tsvgEditId}'] .tsvg-video-wrapper`).html(` <video controls="" controlslist="nodownload" name="media"><source src="${url}"></video>`);
								}
								if (tsvgShortcodeTheme == 'Classic Gallery') {
									$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}']`).attr("data-tsvg-src", url)
									$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}'] .tsvg-video-wrapper `).html(` <video controls="" controlslist="nodownload" name="media"><source src="${url}"></video>`)
								}
								if (tsvgShortcodeTheme == 'Space Gallery') {
									$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}']`).attr("data-tsvg-src", url);
									$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}'] .tsvg-video-wrapper `).html(` <video controls="" controlslist="nodownload" name="media"><source src="${url}"></video>`)
								}
								if (tsvgShortcodeTheme == 'Parallax Engine') {
									$(`main.tsvg-main-content-${tsvgShortcodeId}  li[data-tsvg-id='${tsvgEditId}' ]`).attr("data-href", url);
								}
								jQuery('input#tsvg_video_video_attachment_id').val(tsvg_selection_id);
								jQuery('.tsvg_vd_change').prepend(`<video controls="" name="media"><source src="${url}" ></video>`);
								jQuery('.tsvg_vd_change > img').attr("style", "display:none;");
								setTimeout(
									() => {
										$(".tsvg_vd_loading_div").attr("style", "display:none;");
									},
									200
								);
							}
						}
					);
					tsvg_wp_media_library.on(
						'open',
						function () {
							$("button#menu-item-video-playlist,button#menu-item-playlist,button#menu-item-gallery,button#menu-item-insert").remove();
							var tsvg_selected_attachment = jQuery('input#tsvg_video_video_attachment_id').val();
							if (Number.isInteger(+tsvg_selected_attachment)) {
								$("button#menu-item-library").trigger("click");
								$("input#embed-url-field").val("");
								var selection = tsvg_wp_media_library.state('library').get('selection');
								var attachment = wp.media.attachment(+tsvg_selected_attachment);
								attachment.fetch();
								selection.add(attachment ? [attachment] : []);
							} else {
								$("button#menu-item-embed").trigger("click");
								$("input#embed-url-field").val(tsvg_selected_attachment).trigger("input");
							}
						}
					);
					tsvg_wp_media_library.open();
				}
			);
		}
	});
})(jQuery);
