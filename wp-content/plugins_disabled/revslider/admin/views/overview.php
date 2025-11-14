<?php
/**
 * @author    ThemePunch <info@themepunch.com>
 * @link      https://www.themepunch.com/
 * @copyright 2022 ThemePunch
 */

if(!defined('ABSPATH')) exit();


$system_config	= $rsaf->get_system_requirements();
$current_user	= wp_get_current_user();
$revslider_valid = get_option('revslider-valid', 'false');
$show_trustpilot = $rsaf->_truefalse(get_option('revslider-trustpilot', 'true'));
$latest_version	= get_option('revslider-latest-version', RS_REVISION);
$stable_version	= get_option('revslider-stable-version', '4.2');
$latest_version	= ($revslider_valid !== 'true' && version_compare($latest_version, $stable_version, '<')) ? $stable_version : $latest_version;
$code			= get_option('revslider-code', '');
$time			= date('H');
$timezone		= date('e');/* Set the $timezone variable to become the current timezone */
$hi				= __('Good Evening ', 'revslider');
$selling 		= $rsaf->get_addition('selling');
if($time < '12'){
	$hi = __('Good Morning ', 'revslider');
}elseif($time >= '12' && $time < '17'){
	$hi = __('Good Afternoon ', 'revslider');
}
$rs_languages	= $rsaf->get_available_languages();
?>
<div id="rb_tlw">
	<?php
	// INCLUDE NEEDED CONTAINERS
	require_once(RS_PLUGIN_PATH . 'admin/views/modals-general.php');
	require_once(RS_PLUGIN_PATH . 'admin/views/modals-overview.php');
	require_once(RS_PLUGIN_PATH . 'admin/views/modals-copyright.php');
	?>
</div>



<div id="rs_overview_menu" class="_TPRB_">
	<div class="rso_scrollmenuitem" data-ref="#rs_overview" ><i class="material-icons">view_module</i><?php _e('Modules', 'revslider');?></div>
	<div class="rso_scrollmenuitem" data-ref="#plugin_news_row"><i class="material-icons">library_books</i><?php _e('News', 'revslider');?></div>
	<div class="rso_scrollmenuitem" id="globalsettings" ><i class="material-icons">settings</i><?php _e('Globals', 'revslider');?></div>
	<div class="rso_scrollmenuitem" id="linktodocumentation" ><i class="material-icons">chrome_reader_mode</i><?php _e('FAQ\'s', 'revslider');?></div>
	<div class="rso_scrollmenuitem" id="contactsupport" ><i class="material-icons">contact_support</i><?php _e('Support', 'revslider');?></div>
	<!--<div class="rso_scrollmenuitem lilabuybutton" id="buynow_notregistered"><?php _e('Buy Now', 'revslider');?></div>-->
	<div style="display:none; cursor: default;" class="rso_scrollmenuitem" id="rso_menu_notices"><div style="display:none;" id="rs_notice_bell" class="notice_level_2"><i id="rs_notice_the_bell" class="material-icons">notifications_active</i></div><div style="display:none;" class="notice_level_2" id="rs_notice_counter">0</div><ul style="display:none;" id="rs_notices_wrapper"></ul></div>
</div>
<div id="rs_overview" class="rs_overview _TPRB_">
	<div id="rsalienfakeplaceholder"></div>
	<!-- WELCOME TO SLIDER REVOLUTION -->
	<div id="rs_welcome_header_area">
		<h2 id="rs_welcome_h2" class="title"><?php echo $hi; echo $current_user->display_name; echo '!'; ?></h2>
		<h3 id="rs_welcome_h3" class="subtitle"><?php _e('You are running Slider Revolution ', 'revslider'); echo RS_REVISION; ?></h3>	
	</div>

	<!-- CREATE YOUR SLIDERS -->
	<div id="add_new_slider_wrap">
		<div id="new_blank_slider" class="new_slider_block"><i class="material-icons">movie_filter</i><span class="nsb_title"><?php _e('New Blank Module', 'revslider');?></span></div><!--
		--><div id="new_slider_from_template" class="new_slider_block" style="display:none;"><i class="material-icons">style</i><span class="nsb_title"><?php _e('New Module from Template', 'revslider');?></span><div id="new_templates_counter" class="new_elements_available">+ 13</div></div><!--
		--><div id="new_slider_import" class="new_slider_block"><i class="material-icons">file_upload</i><span class="nsb_title"><?php _e('Manual Import', 'revslider');?></span></div><!--
		--><div id="add_on_management" class="new_slider_block" style="display:none;"><i class="material-icons">extension</i><span class="nsb_title"><?php _e('AddOns', 'revslider');?></span><div id="new_addons_counter" class="new_elements_available">2</div></div>
	</div>

	<!--LIST AND FILTER OF EXISTIN SLIDERS-->
	<div id="existing_sliders" class="overview_wrap">
		<div id="modulesoverviewheader" class="overview_header">
			<div class="rs_fh_left"><input class="flat_input" id="searchmodules" type="text" placeholder="<?php _e('Search Modules...', 'revslider');?>"/></div>
			<div class="rs_fh_right" style="margin-right:-5px">
				<i class="material-icons reset_select" id="reset_sorting">replay</i><select id="sel_overview_sorting" data-evt="updateSlidersOverview" data-evtparam="#reset_sorting" class="overview_sortby tos2 nosearchbox callEvent" data-theme="autowidth"><option value="datedesc"><?php _e('Sort by Creation', 'revslider');?></option><option value="date"><?php _e('Creation Ascending', 'revslider');?></option><option value="title"><?php _e('Sort by Title', 'revslider');?></option><option value="titledesc"><?php _e('Title Descending', 'revslider');?></option></select>
				<i class="material-icons reset_select" id="reset_filtering">replay</i><select id="sel_overview_filtering" data-evt="updateSlidersOverview" data-evtparam="#reset_filtering" class="overview_filterby tos2 nosearchbox callEvent" data-theme="autowidth"><option value="all"><?php _e('Show all Modules', 'revslider');?></option></select>
				<div data-evt="updateSlidersOverview" id="add_folder" class="action_button"><?php _e('Add Folder', 'revslider');?><i class="material-icons">add</i></div>
			</div>
			<div class="tp-clearfix"></div>
		</div>
		<div class="div15"></div>
		<div class="overview_elements" style="z-index:2"><div class="overview_elements_overlay"></div></div>
		<div class="overview_slide_elements" style="z-index:1"><div class="overview_slide_elements_overlay"></div>
		<div id="modulesoverviewfooter" class="overview_header_footer">
			<div class="rs_fh_right" style="margin-right:23px">
				<div class="ov-pagination"></div>			
				<select id="pagination_select_2" data-evt="updateSlidersOverview" class="overview_pagination tos2 nosearchbox callEvent" data-theme="nomargin"><option id="page_per_page_0" value="4"></option><option id="page_per_page_1" selected="selected" value="8"></option><option id="page_per_page_2" value="16"></option><option id="page_per_page_3" value="32"></option><option id="page_per_page_4" value="64"></option><option value="all"><?php _e('Show All', 'revslider');?></option></select>				
			</div>
			<div class="tp-clearfix"></div>
		</div>
		<!-- FOLDER LIST -->
		<div id="slider_folders_wrap"></div>
		<div id="slider_folders_wrap_underlay"></div>
	</div>


	<div class="div150"></div>
	<div id="plugin_news_row" class="plugin_inforow">
		<!-- PLUGIN UPDATE -->
		<div id="cwt_socials" class="pli_left">
			<h3 class="pli_title"><?php _e('Connect with Slider Revolution', 'revslider');?></h3>
			<a class="cwt_link" target="_blank" rel="noopener" href="https://youtube.com/c/sliderrevolution"><grayiconbox class="cwt_youtube"></grayiconbox><div class="pli_twoline"><div class="pli_subtitle"><?php _e('YouTube', 'revslider');?></div><div class="dynamicval pli_subtitle">youtube.com/c/sliderrevolution</div></div></a>
			<div class="div10"></div>
			<a class="cwt_link" target="_blank" rel="noopener" href="https://twitter.com/revslider"><grayiconbox class="cwt_twitter"></grayiconbox><div class="pli_twoline"><div class="pli_subtitle"><?php _e('Twitter', 'revslider');?></div><div class="dynamicval pli_subtitle">twitter.com/revslider</div></div></a>
			<div class="div10"></div>
			<a class="cwt_link" target="_blank" rel="noopener" href="https://www.facebook.com/wordpress.slider.revolution"><grayiconbox class="cwt_facebook"></grayiconbox><div class="pli_twoline"><div class="pli_subtitle"><?php _e('Facebook', 'revslider');?></div><div class="dynamicval pli_subtitle">facebook.com/wordpress.slider.revolution</div></div></a>
			<div class="div10"></div>
			<a class="cwt_link" target="_blank" rel="noopener" href="https://instagram.com/sliderrevolution"><grayiconbox class="cwt_instagram"></grayiconbox><div class="pli_twoline"><div class="pli_subtitle"><?php _e('Instagram', 'revslider');?></div><div class="dynamicval pli_subtitle">instagram.com/sliderrevolution</div></div></a>
			<div class="div10"></div>			
			<a class="cwt_link" target="_blank" rel="noopener" href="https://dribbble.com/sliderrevolution"><grayiconbox class="cwt_dribbble"></grayiconbox><div class="pli_twoline"><div class="pli_subtitle"><?php _e('Dribbble', 'revslider');?></div><div class="dynamicval pli_subtitle">dribbble.com/sliderrevolution</div></div></a>
			<div class="div100"></div>
			<h3 class="pli_title"><?php _e('Sign up to our Newsletter', 'revslider');?></h3>									
			<!--<input class="codeinput" id="newsletter_mail" placeholder="<?php _e('Enter your Email', 'revslider');?>"/> id="signuptonewsletter" -->
			<a href="https://www.themepunch.com/links/newsletter" target="_blank" rel="noopener"><bluebutton ><?php _e('Sign Up', 'revslider');?></bluebutton></a>
			<div class="div25"></div>
			<div class="infobox">
				<div class="bluetitle"><?php _e('Updates, New Products, Spotlights', 'revslider');?></div>
				<div class="simpletext"><?php _e('Get access to the latest News from Slider Revolution. We promise to never send you Spam!', 'revslider');?></div>
			</div>
		</div>

		<!-- PLUGIN HISTORY -->
		<div id="twitter_wrapper" class="pli_right" style="width:100%">
			<h3 class="pli_title"><?php _e('Whats New?', 'revslider');?></h3>
			<a id="twitter_timeline" class="twitter-timeline" data-height="750" data-theme="dark" href="https://twitter.com/revslider?include_rtf=false">Tweets Liked by @ThemePunch</a> 

		</div>
	</div>
</div>

<script>
	window.sliderLibrary = JSON.parse(<?php echo $rsaf->json_encode_client_side(array('sliders' => $rs_od)); ?>);
	window.rs_system = JSON.parse(<?php echo $rsaf->json_encode_client_side($system_config); ?>);
	var rvs_f_initOverView_Once = false;
	if (document.readyState === "loading") 
		document.addEventListener('readystatechange',function(){
			if ((document.readyState === "interactive" || document.readyState === "complete") && !rvs_f_initOverView_Once) {
				rvs_f_initOverView_Once = true;
				RVS.ENV.code = "<?php echo $code; ?>";
				RVS.F.initOverView();
			}
		});
	else {
		rvs_f_initOverView_Once = true;
		RVS.F.initOverView();
	}			
</script>