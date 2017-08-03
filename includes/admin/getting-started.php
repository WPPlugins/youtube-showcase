<?php
/**
 * Getting Started
 *
 * @package YOUTUBE_SHOWCASE
 * @since WPAS 5.3
 */
if (!defined('ABSPATH')) exit;
add_action('youtube_showcase_getting_started', 'youtube_showcase_getting_started');
/**
 * Display getting started information
 * @since WPAS 5.3
 *
 * @return html
 */
function youtube_showcase_getting_started() {
	global $title;
	list($display_version) = explode('-', YOUTUBE_SHOWCASE_VERSION);
?>
<style>
div.comp-feature {
    font-weight: 400;
    font-size:20px;
}
.edition-com {
    display: none;
}
.green{
color: #008000;
font-size: 30px;
}
#nav-compare:before{
    content: "\f179";
}
#emd-about .nav-tab-wrapper a:before{
    position: relative;
    box-sizing: content-box;
padding: 0px 3px;
color: #4682b4;
    width: 20px;
    height: 20px;
    overflow: hidden;
    white-space: nowrap;
    font-size: 20px;
    line-height: 1;
    cursor: pointer;
font-family: dashicons;
}
#nav-getting-started:before{
content: "\f102";
}
#nav-whats-new:before{
content: "\f348";
}
#nav-resources:before{
content: "\f118";
}
#emd-about .embed-container { 
	position: relative; 
	padding-bottom: 56.25%;
	height: 0;
	overflow: hidden;
	max-width: 100%;
	height: auto;
	} 

#emd-about .embed-container iframe,
#emd-about .embed-container object,
#emd-about .embed-container embed { 
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	}
#emd-about ul li:before{
    content: "\f522";
    font-family: dashicons;
    font-size:25px;
 }
#gallery {
	margin: auto;
}
#gallery .gallery-item {
	float: left;
	margin-top: 10px;
	margin-right: 10px;
	text-align: center;
	width: 48%;
        cursor:pointer;
}
#gallery img {
	border: 2px solid #cfcfcf; 
height: 405px;  
}
#gallery .gallery-caption {
	margin-left: 0;
}
#emd-about .top{
text-decoration:none;
}
#emd-about .toc{
    background-color: #fff;
    padding: 25px;
    border: 1px solid #add8e6;
    border-radius: 8px;
}
#emd-about h3,
#emd-about h2{
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0.6em;
    margin-left: 0px;
}
#emd-about p,
#emd-about .emd-section li{
font-size:18px
}
#emd-about a.top:after{
content: "\f342";
    font-family: dashicons;
    font-size:25px;
text-decoration:none;
}
#emd-about .toc a,
#emd-about a.top{
vertical-align: top;
}
#emd-about li{
list-style-type: none;
line-height: normal;
}
#emd-about ol li {
    list-style-type: decimal;
}
#emd-about .quote{
    background: #fff;
    border-left: 4px solid #088cf9;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    margin-top: 25px;
    padding: 1px 12px;
}
#emd-about .tooltip{
    display: inline;
    position: relative;
}
#emd-about .tooltip:hover:after{
    background: #333;
    background: rgba(0,0,0,.8);
    border-radius: 5px;
    bottom: 26px;
    color: #fff;
    content: 'Click to enlarge';
    left: 20%;
    padding: 5px 15px;
    position: absolute;
    z-index: 98;
    width: 220px;
}
</style>

<?php add_thickbox(); ?>
<div id="emd-about" class="wrap about-wrap">
<div id="emd-header" style="padding:10px 0" class="wp-clearfix">
<div style="float:right"><img src="https://emd-plugins.s3.amazonaws.com/youtubesc-icon-128x128.png"></div>
<div style="margin: .2em 200px 0 0;padding: 0;color: #32373c;line-height: 1.2em;font-size: 2.8em;font-weight: 400;">
<?php printf(__('Welcome to YouTube Showcase Community %s', 'youtube-showcase') , $display_version); ?>
</div>

<p class="about-text">
<?php printf(__("YouTube Showcase is a powerful but simple-to-use YouTube video gallery plugin with responsive frontend.", 'youtube-showcase') , $display_version); ?>
</p>

<?php
	$tabs['getting-started'] = __('Getting Started', 'youtube-showcase');
	$tabs['whats-new'] = __('What\'s New', 'youtube-showcase');
	$tabs['resources'] = __('Resources', 'youtube-showcase');
	$active_tab = isset($_GET['tab']) ? $_GET['tab'] : 'getting-started';
	echo '<h2 class="nav-tab-wrapper wp-clearfix">';
	foreach ($tabs as $ktab => $mytab) {
		$tab_url[$ktab] = esc_url(add_query_arg(array(
			'tab' => $ktab
		)));
		$active = "";
		if ($active_tab == $ktab) {
			$active = "nav-tab-active";
		}
		echo '<a href="' . esc_url($tab_url[$ktab]) . '" class="nav-tab ' . $active . '" id="nav-' . $ktab . '">' . $mytab . '</a>';
	}
	echo '</h2>';
	echo '<div class="tab-content" id="tab-getting-started"';
	if ("getting-started" != $active_tab) {
		echo 'style="display:none;"';
	}
	echo '>';
?>
<div style="height:25px" id="rtop"></div><div class="toc"><h3 style="color:#0073AA;text-align:left;">Quickstart</h3><ul><li><a href="#gs-sec-6">Using Setup assistant</a></li>
<li><a href="#gs-sec-5">How to find your YouTube Video ID</a></li>
<li><a href="#gs-sec-3">How to create your first video</a></li>
<li><a href="#gs-sec-7">YouTube Showcase Pro WordPress plugin helps you keep more visitors on your site longer
-</a></li>
<li><a href="#gs-sec-8">EMD CSV Import Export Extension allows getting your videos in and out of WordPress quickly</a></li>
<li><a href="#gs-sec-142">EMD Advanced Filters and Columns Extension for finding what's important faster</a></li>
</ul></div><div class="quote">
<p class="about-description">The secret of getting ahead is getting started - Mark Twain</p>
</div>
<div class="getting-started emd-section changelog getting-started getting-started-6" style="margin:0;background-color:white;padding:10px"><div style="height:40px" id="gs-sec-6"></div><h2>Using Setup assistant</h2><div id="gallery" class="wp-clearfix"><div class="sec-img gallery-item"><a class="thickbox tooltip" rel="gallery-6" href="https://emdsnapshots.s3.amazonaws.com/video_gallery_large.png"><img src="https://emdsnapshots.s3.amazonaws.com/video_gallery_540.png"></a></div></div><div class="sec-desc"><p>Setup assistant creates the gallery pages automatically.</p></div></div><div style="margin-top:15px"><a href="#rtop" class="top">Go to top</a></div><hr style="margin-top:40px"><div class="getting-started emd-section changelog getting-started getting-started-5" style="margin:0;background-color:white;padding:10px"><div style="height:40px" id="gs-sec-5"></div><h2>How to find your YouTube Video ID</h2><div id="gallery" class="wp-clearfix"><div class="sec-img gallery-item"><a class="thickbox tooltip" rel="gallery-5" href="https://emdsnapshots.s3.amazonaws.com/video_id_large.png"><img src="https://emdsnapshots.s3.amazonaws.com/video_id_540.png"></a></div></div><div class="sec-desc"><p>It is very simple to find your YouTube video ID. First, go to the YouTube webpage. Look at the URL of that page, and at the end of it, you should see a combination of numbers and letters after an equal sign (=). This is the code you need to enter into the video key field.</p></div></div><div style="margin-top:15px"><a href="#rtop" class="top">Go to top</a></div><hr style="margin-top:40px"><div class="getting-started emd-section changelog getting-started getting-started-3" style="margin:0;background-color:white;padding:10px"><div style="height:40px" id="gs-sec-3"></div><h2>How to create your first video</h2><div id="gallery" class="wp-clearfix"><div class="sec-img gallery-item"><a class="thickbox tooltip" rel="gallery-3" href="https://emdsnapshots.s3.amazonaws.com/video_edit_large.png"><img src="https://emdsnapshots.s3.amazonaws.com/video_edit_540.png"></a></div></div><div class="sec-desc"><ol>
  <li>Log in to your Administration Panel.</li>
  <li>Click the 'Videos' tab.</li>
  <li>Click the 'Add New' sub-tab or the “Add New” button in the video list page.</li>
  <li>Start filling in your video fields. You must fill all required fields. All required fields have red star after their labels.</li>
  <li>As needed, set video taxonomies and relationships. All required relationships or taxonomies must be set.</li>
  <li>When you are ready, click Publish. If you do not have publish privileges, the "Submit for Review" button is displayed.</li>
  <li>After the submission is completed, the video status changes to "Published"</li>
<li>Click on the permalink to see the video page</li>
</ol></div></div><div style="margin-top:15px"><a href="#rtop" class="top">Go to top</a></div><hr style="margin-top:40px"><div class="getting-started emd-section changelog getting-started getting-started-7" style="margin:0;background-color:white;padding:10px"><div style="height:40px" id="gs-sec-7"></div><h2>YouTube Showcase Pro WordPress plugin helps you keep more visitors on your site longer
-</h2><div id="gallery" class="wp-clearfix"><div class="sec-img gallery-item"><a class="thickbox tooltip" rel="gallery-7" href="https://emdsnapshots.s3.amazonaws.com/video_pro.png"><img src="https://emdsnapshots.s3.amazonaws.com/video_pro.png"></a></div></div><div class="sec-desc"><p>- EMD CSV Import Export Extension is included</p>
<p>- Visual Shortcode Builder is included </p>
<div style="margin:25px"><a href="https://emdplugins.com/plugins/youtube-showcase-professional/?pk_campaign=ytscpro-buybtn&pk_kwd=ytsc-resources"><img src="https://emd-plugins.s3.amazonaws.com/button_buy-now.png"></a>
</div></div></div><div style="margin-top:15px"><a href="#rtop" class="top">Go to top</a></div><hr style="margin-top:40px"><div class="getting-started emd-section changelog getting-started getting-started-8" style="margin:0;background-color:white;padding:10px"><div style="height:40px" id="gs-sec-8"></div><h2>EMD CSV Import Export Extension allows getting your videos in and out of WordPress quickly</h2><div id="gallery" class="wp-clearfix"><div class="sec-img gallery-item"><a class="thickbox tooltip" rel="gallery-8" href="https://emdsnapshots.s3.amazonaws.com/video_impexp.png"><img src="https://emdsnapshots.s3.amazonaws.com/video_impexp.png"></a></div></div><div class="sec-desc"><p>EMD CSV Import Export Extension helps bulk import, export, update video information from CSV files. You can also reset(delete) all data and start over again without modifying database.</p>
<p><a href="https://emdplugins.com/plugins/emd-csv-import-export-extension/?pk_campaign=emdimpexp-buybtn&pk_kwd=ytsc-resources"><img src="https://emd-plugins.s3.amazonaws.com/button_buy-now.png"></a></p></div></div><div style="margin-top:15px"><a href="#rtop" class="top">Go to top</a></div><hr style="margin-top:40px"><div class="getting-started emd-section changelog getting-started getting-started-142" style="margin:0;background-color:white;padding:10px"><div style="height:40px" id="gs-sec-142"></div><h2>EMD Advanced Filters and Columns Extension for finding what's important faster</h2><div class="emd-yt" data-youtube-id="GXcKKRzzsdw" data-ratio="16:9">loading...</div><div class="sec-desc"><p>This extension is included in the pro edition.</p>
<p>EMD Advanced Filters and Columns Extension for YouTube Showcase Community edition helps you:</p>
<ul><li>Filter entries quickly to find what you're looking for</li>
<li>Save your frequently used filters so you do not need to create them again</li>
<li>Sort quote request columns to see what's important faster</li>
<li>Change the display order of columns </li>
<li>Enable or disable columns for better and cleaner look </li>
<li>Export search results to PDF or CSV for custom reporting</li></ul><div style="margin:25px"><a href="https://emdplugins.com/plugins/emd-advanced-filters-and-columns-extension/?pk_campaign=emd-afc-buybtn&pk_kwd=youtube-showcase-resources"><img src="https://emd-plugins.s3.amazonaws.com/button_buy-now.png"></a></div></div></div><div style="margin-top:15px"><a href="#rtop" class="top">Go to top</a></div><hr style="margin-top:40px">

<?php echo '</div>';
	echo '<div class="tab-content" id="tab-whats-new"';
	if ("whats-new" != $active_tab) {
		echo 'style="display:none;"';
	}
	echo '>';
?>
<p class="about-description">YouTube Showcase Community V2.6.0 offers many new features, bug fixes and improvements.</p>


<h3 style="font-size: 18px;font-weight:700;color: white;background: #708090;padding:5px 10px;width:155px;border: 2px solid #fff;border-radius:4px;text-align:center">2.6.0 changes</h3>
<div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-233" style="margin:0">
<h3 style="font-size:18px;" class="tweak"><div  style="font-size:110%;color:#33b5e5"><span class="dashicons dashicons-admin-settings"></span> TWEAK</div>
Minor shortcode page navigation fixes and improvements</h3>
<div ></a></div></div></div><hr style="margin:30px 0"><div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-232" style="margin:0">
<h3 style="font-size:18px;" class="fix"><div  style="font-size:110%;color:#c71585"><span class="dashicons dashicons-admin-tools"></span> FIX</div>
PHP 7 compatability</h3>
<div ></a></div></div></div><hr style="margin:30px 0"><div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-231" style="margin:0">
<h3 style="font-size:18px;" class="new"><div style="font-size:110%;color:#00C851"><span class="dashicons dashicons-megaphone"></span> NEW</div>
Added ability to disable EMD Templating system and switch back to theme based system from plugin settings</h3>
<div ></a></div></div></div><hr style="margin:30px 0">
<h3 style="font-size: 18px;font-weight:700;color: white;background: #708090;padding:5px 10px;width:155px;border: 2px solid #fff;border-radius:4px;text-align:center">2.5.1 changes</h3>
<div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-15" style="margin:0">
<h3 style="font-size:18px;" class="fix"><div  style="font-size:110%;color:#c71585"><span class="dashicons dashicons-admin-tools"></span> FIX</div>
Plugin deactivation issue when “Remove All Data” checked in plugin settings</h3>
<div ></a><p>When the plugin was deleted from WordPress Plugin page, the plugin deactivation process was deleting WordPress category and tags if “Remove All Data” checked under Video Settings > Tools.</p></div></div></div><hr style="margin:30px 0">
<h3 style="font-size: 18px;font-weight:700;color: white;background: #708090;padding:5px 10px;width:155px;border: 2px solid #fff;border-radius:4px;text-align:center">2.5.0 changes</h3>
<div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-4" style="margin:0">
<h3 style="font-size:18px;" class="tweak"><div  style="font-size:110%;color:#33b5e5"><span class="dashicons dashicons-admin-settings"></span> TWEAK</div>
New Text domain for WordPress.org translation support</h3>
<div ></a><p>We've changed the text domain of the plugin to make it compatible with WordPress translation system so your previous settings <strong>will not</strong> work. Click on on the settings page and <strong>save your settings</strong> again.</p></div></div></div><hr style="margin:30px 0"><div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-3" style="margin:0">
<h3 style="font-size:18px;" class="new"><div style="font-size:110%;color:#00C851"><span class="dashicons dashicons-megaphone"></span> NEW</div>
New Custom CSS area</h3>
<div ></a><p>Added Custom CSS area where you can put in plugin related CSS code specific. The code saved in this area does not get deleted during and after plugin updates.</p></div></div></div><hr style="margin:30px 0"><div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-2" style="margin:0">
<h3 style="font-size:18px;" class="new"><div style="font-size:110%;color:#00C851"><span class="dashicons dashicons-megaphone"></span> NEW</div>
New templating sytem</h3>
<div ></a><p>We have a new templating system which allows:</p>
<ul style="list-style:disc">
<li>Changing page templates for video, video archive and taxonomy pages</li>
<li>Hiding page navigation links</li>
</ul>
<p>and more from plugin settings. There is also a new EMD Widget area where you can put all your sidebar widgets that you need to be displayed in plugin pages.</p></div></div></div><hr style="margin:30px 0">
<?php echo '</div>';
	echo '<div class="tab-content" id="tab-resources"';
	if ("resources" != $active_tab) {
		echo 'style="display:none;"';
	}
	echo '>';
?>
<div style="height:25px" id="ptop"></div><div class="toc"><h3 style="color:#0073AA;text-align:left;">Upgrade your game for better results</h3><ul><li><a href="#gs-sec-4">Extensive documentation is available</a></li>
<li><a href="#gs-sec-141">How to resolve theme related issues</a></li>
</ul></div><div class="emd-section changelog resources resources-4" style="margin:0"><div style="height:40px" id="gs-sec-4"></div><h2>Extensive documentation is available</h2><div id="gallery" class="wp-clearfix"></div><div class="sec-desc"><a href="https://docs.emdplugins.com/docs/youtube-showcase-community-documentation">YouTube Showcase Community Edition Documentation</a></div></div><div style="margin-top:15px"><a href="#ptop" class="top">Go to top</a></div><hr style="margin-top:40px"><div class="emd-section changelog resources resources-141" style="margin:0"><div style="height:40px" id="gs-sec-141"></div><h2>How to resolve theme related issues</h2><div id="gallery" class="wp-clearfix"><div class="sec-img gallery-item"><a class="thickbox tooltip" rel="gallery-141" href="https://emdsnapshots.s3.amazonaws.com/emd_templating_system.png"><img src="https://emdsnapshots.s3.amazonaws.com/emd_templating_system.png"></a></div></div><div class="sec-desc"><p>If your theme is not coded based on WordPress theme coding standards, does have an unorthodox markup or its style.css is messing up how YouTube Showcase Community pages look and feel, you will see some unusual changes on your site such as sidebars not getting displayed where they are supposed to or random text getting displayed on headers etc. after plugin activation.</p>
<p>The good news is YouTube Showcase Community plugin is designed to minimize theme related issues by providing two distinct templating systems:</p>
<ul>
<li>The EMD templating system is the default templating system where the plugin uses its own templates for plugin pages.</li>
<li>The theme templating system where YouTube Showcase Community uses theme templates for plugin pages.</li>
</ul>
<p>The EMD templating system is the recommended option. If the EMD templating system does not work for you, you need to check "Disable EMD Templating System" option at Settings > Tools tab and switch to theme based templating system.</p>
<p>Please keep in mind that when you disable EMD templating system, you loose the flexibility of modifying plugin pages without changing theme template files.</p>
<p>If none of the provided options works for you, you may still fix theme related conflicts following the steps in <a href="https://docs.emdplugins.com/docs/youtube-showcase-community">YouTube Showcase Community Documentation - Resolving theme related conflicts section.</a></p>

<div class="quote">
<p>If you’re unfamiliar with code/templates and resolving potential conflicts, <a href="https://emdplugins.com/open-a-support-ticket/?pk_campaign=raq-hireme&ticket_topic=pre-sales-questions"> do yourself a favor and hire us</a>. Sometimes the cost of hiring someone else to fix things is far less than doing it yourself. We will get your site up and running in no time.</p>
</div></div></div><div style="margin-top:15px"><a href="#ptop" class="top">Go to top</a></div><hr style="margin-top:40px">
<?php echo '</div>'; ?>

<?php echo '</div>';
}
