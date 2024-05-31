<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="<?php echo THEMEURL;?>/assets/css/main.css">
	<?php wp_head(); ?>

	<script>
		var siteUrl="<?php echo site_url();?>";
		var adminUrl=siteUrl+"/wp-admin/admin-ajax.php";
		var themeUrl="<?php echo THEMEURL; ?>";
	</script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
		<div class="container pos-rel">
			<div class="row">
				<div id="comp-logo">
					<div class="pull-left col-2 col-xs-9 brand-logo">
						<a href="<?php echo is_front_page() ? 'javascript:;' : site_url(); ?>" class="goto-home"><img src="<?php echo THEMEURL;?>/assets/images/logo.svg" class="img-responsive" data-event-category="Header" data-event-action="Click" data-event-name="Logo"></a>
					</div>
					<div class="col-10 col-xs-3 pull-right">
						<div class="pull-right menu-icon-mobile">
							<span class="bar1"></span>
							<span class="bar2"></span>
							<span class="bar3"></span>
						</div>
						<div class="col-12 lower">
							<div class="nav-links">
								<a href="javascript:;" rel="overview" data-event-category="Header" data-event-action="Click" data-event-name="Overview">Overview</a>
								<!-- <a href="javascript:;" rel="lifestyle" data-event-category="Header" data-event-action="Click" data-event-name="Lifestyle">Lifestyle</a> -->
								<!-- <a href="javascript:;" rel="amenities" data-event-category="Header" data-event-action="Click" data-event-name="Amenities">Amenities</a>
								<a href="javascript:;" rel="gallery" data-event-category="Header" data-event-action="Click" data-event-name="Gallery">Gallery</a>
								<a href="javascript:;" rel="location" data-event-category="Header" data-event-action="Click" data-event-name="Location">Location</a>
								<a href="javascript:;" rel="about" data-event-category="Header" data-event-action="Click" data-event-name="about">About</a>
								<a href="tel:+910123456789" id="hid-on-mob" class="call-icon"><span><svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z"/></svg></span>+910123456789</a>
								<a href="javascript:;" class="enquire-btn enq_click" id="hid-on-mob" data-event-category="Header" data-event-action="Click" data-event-name="Enquire Now">Enquire Now</a> -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-container">
				<a href="javascript:;" class="frmclose" data-event-category="Section" data-event-action="Click" data-event-name="Form Close">X</a>
			</div>
		</div>
</header>
