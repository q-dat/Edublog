<?php
	
	// Check if editing an existing widget
	$editing = isset( $_GET[ 'edit_widget_id' ] );
	
	// Conditionally load data based on whether we are editing or creating a new widget
	if ( $editing )
	{
		// Sanitize the widget ID from the URL for security
		$widget_id = sanitize_text_field( $_GET[ 'edit_widget_id' ] );
		
		// Load existing widget data
		$widget_data = get_option( 'weather_atlas_widget_' . $widget_id );
	}
	else
	{
		// Generate a new ID for a new widget
		$widget_id = explode( '-', wp_generate_uuid4() )[ 0 ];
	}
	
	// Handle form submission
	if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' )
	{
		// Verify nonce for security
		if ( ! isset( $_POST[ 'weather_atlas_nonce' ] ) || ! wp_verify_nonce( $_POST[ 'weather_atlas_nonce' ], 'weather_atlas_action' ) )
		{
			print __( 'Sorry, your nonce did not verify.', 'weather-atlas' );
			exit;
		}
		else
		{
			// Validate and sanitize input from the form submission
			$widget_name      = sanitize_text_field( $_POST[ 'widget_name' ] );
			$city_selector    = sanitize_text_field( $_POST[ 'city_selector' ] );
			$city_name        = sanitize_text_field( $_POST[ 'city_name' ] );
			$current          = isset( $_POST[ 'current' ] ) ? '1' : '0';
			$sunrise_sunset   = isset( $_POST[ 'sunrise_sunset' ] ) ? '1' : '0';
			$hourly           = sanitize_text_field( $_POST[ 'hourly' ] );
			$daily            = sanitize_text_field( $_POST[ 'daily' ] );
			$text_today       = isset( $_POST[ 'text_today' ] ) ? '1' : '0';
			$text_tomorrow    = isset( $_POST[ 'text_tomorrow' ] ) ? '1' : '0';
			$text_long_term   = isset( $_POST[ 'text_long_term' ] ) ? '1' : '0';
			$layout           = sanitize_text_field( $_POST[ 'layout' ] );
			$heading          = sanitize_text_field( $_POST[ 'heading' ] );
			$header           = sanitize_text_field( $_POST[ 'header' ] );
			$font_size        = sanitize_text_field( $_POST[ 'font_size' ] );
			$text_color       = sanitize_text_field( $_POST[ 'text_color' ] );
			$background_color = sanitize_text_field( $_POST[ 'background_color' ] );
			$unit_c_f         = sanitize_text_field( $_POST[ 'unit_c_f' ] );
			
			// Consolidate all sanitized data into an associative array
			$widget_data = array (
				'widget_name'      => $widget_name,
				'city_selector'    => $city_selector,
				'city_name'        => $city_name,
				'current'          => $current,
				'sunrise_sunset'   => $sunrise_sunset,
				'hourly'           => $hourly,
				'daily'            => $daily,
				'text_today'       => $text_today,
				'text_tomorrow'    => $text_tomorrow,
				'text_long_term'   => $text_long_term,
				'layout'           => $layout,
				'heading'          => $heading,
				'header'           => $header,
				'font_size'        => $font_size,
				'text_color'       => $text_color,
				'background_color' => $background_color,
				'unit_c_f'         => $unit_c_f
			);
			
			// Save the widget configuration to the WordPress database
			update_option( 'weather_atlas_widget_' . $widget_id, $widget_data );
			
			// Provide user feedback
			$feedback_message = $editing ? __( 'Widget updated successfully.', 'weather-atlas' ) : __( 'New widget created successfully.', 'weather-atlas' );
		}
	}

?>

<div class="wrap" style="max-width:1000px">
	
	<h1
		class="wp-heading-inline"><?php echo $editing ? __( 'Update Widget', 'weather-atlas' ) : __( 'Add New Widget', 'weather-atlas' ); ?></h1>
	
	
	<?php
		
		// Retrieve all weather atlas widget options from the database
		global $wpdb;
		$prefix  = 'weather_atlas_widget_';
		$query   = $wpdb->prepare( "SELECT * FROM {$wpdb->options} WHERE option_name LIKE %s", $prefix . '%' );
		$widgets = $wpdb->get_results( $query );
		
		// Check if the number of widgets exceeds the limit
		if ( count( $widgets ) >= 10 && ! $editing )
		{
			echo "<div class='notice notice-error' style='margin:20px 0 30px 0;'>";
			echo "<p>";
			echo __( 'Fair usage policy restricts widget instances to a maximum of 10. Please edit or delete existing widgets before adding new ones.', 'weather-atlas' );
			echo " <a href='" . esc_url( admin_url( 'admin.php?page=weather-atlas' ) ) . "' class='button'>" . __( 'Your Widgets', 'weather-atlas' ) . "</a>";
			echo "</p>";
			echo "</div>";
			
			// Exit the function or script to prevent the form from displaying
			return;
		}
	
	?>
	
	<?php if ( isset( $feedback_message ) ): ?>
		<div class="notice notice-success">
			<p><?php echo $feedback_message; ?></p>
		</div>
	<?php endif; ?>
	
	<div class="weather_demo_wrapper" style="text-align:center;">
		<?php
			
			echo do_shortcode( '[shortcode-weather-atlas selected_widget_id=' . $widget_id . ']' );
		?>
	</div>
	
	<!-- Form starts -->
	
	<div id="poststuff">
		<div id="post-body" class="metabox-holder">
			<div class="postbox-container">
				
				<div class="postbox">
					<h2 class="hndle"><?php _e( 'Setting Up and Using Widgets on Your Site', 'weather-atlas' ); ?></h2>
					<div class="inside" style="background-color: #f1f1f1;padding:12px;margin:0">
						<?php _e( '1. <strong>Save Widget Settings</strong><br/>Configure each widget\'s options and design to your preference.<br/>You can create multiple differently-styled widgets for the same location. Add more widgets if needed, but remember to delete unused widgets.', 'weather-atlas' ); ?>
						<br/>
						<br/>
						<?php _e( '2. <strong>Insert Widgets</strong><br/>Place the widgets in the desired location on your site. Instructions are below.<br/>The recommended placement for weather widgets is on pages, in the articles. Sidebars, footers, or headers are less advisable places for widgets.', 'weather-atlas' ); ?>
						<br/>
						<br/>
						<?php _e( '3. <strong>Update Settings Anytime</strong><br/>Any future changes, including location, to the individual widget settings, through this form, will be automatically updated across your entire site.', 'weather-atlas' ); ?>
						<br/>
						<br/>
						<?php _e( '<strong>Note for Imported Legacy Widgets</strong><br/>Legacy widgets will continue to work alongside new widgets.<br/>New widgets have been created based on your legacy widget settings, along with a few example widgets.<br/>Please replace the old widgets with these new ones to ensure compatibility with future updates.', 'weather-atlas' ); ?>
					</div>
				</div>
				
				<div class="postbox">
					<h2 class="hndle"><?php _e( 'How to Implement a Widget on a Page?', 'weather-atlas' ); ?></h2>
					<div class="inside" style="background-color: #f1f1f1;padding:12px;margin:0">
						<?php _e( '<strong>Using Gutenberg Blocks (Recommended method)</strong><br/>1. Open any post or page in Edit mode, click the block inserter icon [+], and locate the Weather Atlas Widget within the Widget section.<br/>2. Click on the Weather Atlas Widget. This will place the block into your article.<br/>3. Finally, simply choose the preferred widget/location from the dropdown menu to display the predefined weather forecast.', 'weather-atlas' ); ?>
						<br/>
						<br/>
						<?php _e( '<strong>Using a Shortcut</strong><br/>1. First, find the desired widget and copy its unique shortcode (below)<br/>2. Open the post or page where you want the widget to appear in Edit mode.<br/>3. Place the copied [shortcode-...] in the desired location within the post or page.', 'weather-atlas' ); ?>
						<br/>
						<button class="button" style="border:none;" id="copyButton"
						        onclick="copyShortcode()"><?php echo '[shortcode-weather-atlas selected_widget_id=' . $widget_id . ']'; ?></button>
						<script>
							function copyShortcode()
							{
								var copyText = document.getElementById( "copyButton" );
								var range    = document.createRange();
								range.selectNode( copyText );
								window.getSelection().addRange( range );
								document.execCommand( "copy" );
								window.getSelection().removeAllRanges();
								alert( "Shortcode copied:\n" + copyText.textContent );
							}
						</script>
					</div>
				</div>
				
				
				<div class="postbox">
					<div class="inside">
						<form method="post"
						      action="<?php echo esc_url( admin_url( 'admin.php?page=' . $this->plugin_name . '-widget&edit_widget_id=' . $widget_id ) ); ?>">
							<?php wp_nonce_field( 'weather_atlas_action', 'weather_atlas_nonce' ); ?>
							
							<table class="form-table">
								<tbody>
								
								<!-- row start -->
								<tr>
									<td colspan="2" style="padding-bottom: 0">
										<h3 style="margin-bottom: 0"><?php _e( 'Basic Details', 'weather-atlas' ); ?></h3>
									</td>
								</tr>
								<!-- row end -->
								
								
								<!-- row start -->
								
								<tr>
									<td>
										<label for="city_name"><strong><?php _e( 'City', 'weather-atlas' ); ?></strong></label><br/>
									</td>
									<td>
										<input name="city_selector" id="city_selector" type="hidden"
										       value="<?php echo isset( $widget_data[ 'city_selector' ] ) ? esc_attr( $widget_data[ 'city_selector' ] ) : '2372139'; ?>"
										       required/>
										<div class="autocomplete-container">
											<input name="city_name" id="city_name" type="text"
											       value="<?php echo isset( $widget_data[ 'city_name' ] ) ? esc_attr( $widget_data[ 'city_name' ] ) : 'New York, NY'; ?>"
											       class="regular-text" required/>
											<span id="clearInput" class="clear-input">&#x2715;</span>
											<div id="autocomplete-dropdown" class="autocomplete-dropdown"></div>
										</div>
										<p
											class="description"><?php _e( 'Choose the location', 'weather-atlas' ); ?></p>
									</td>
								</tr>
								
								<!-- row end -->
								
								
								<!-- row start -->
								<tr>
									<td>
										<label
											for="widget_name"><strong><?php _e( 'Name', 'weather-atlas' ); ?></strong></label><br/>
									</td>
									<td>
										<input name="widget_name" id="widget_name" type="text"
										       value="<?php echo isset( $widget_data[ 'widget_name' ] ) ? esc_attr( $widget_data[ 'widget_name' ] ) : 'Weather Atlas Widget ' . $widget_id; ?>"
										       class="regular-text" required/>
										<a href="javascript:void(0);" id="copyCityName"
										   style="margin-left: 5px;"><?php _e( 'set the same as City name', 'weather-atlas' ); ?></a>
										
										<p
											class="description">
											
											
											<?php _e( 'Only for internal tracking of multiple widgets,', 'weather-atlas' ); ?><br/>
											<?php _e( 'useful for identifying differently styled widgets for the same location', 'weather-atlas' ); ?>
											<br/>
											E.g.: Paris / NYC mini widget / Tokyo full size
										</p>
									</td>
								</tr>
								<!-- row end -->
								
								
								<!-- row start -->
								<tr>
									<td colspan="2" style="padding-bottom: 0">
										<h3 style="margin-bottom: 0"><?php _e( 'Weather parameters', 'weather-atlas' ); ?></h3>
									</td>
								</tr>
								<!-- row end -->
								
								
								<!-- row start -->
								<tr>
									<td>
										<label
											for="current"><strong><?php _e( 'Current conditions', 'weather-atlas' ); ?></strong></label><br/>
									</td>
									<td>
										<?php
											
											// Check if the current is set to '1' (show) or '0' (hide)
											$is_current_visible = ! isset( $widget_data[ 'current' ] ) || $widget_data[ 'current' ] == '1';
										?>
										<label for="current">
											<input name="current" type="checkbox" id="current"
											       value="1" <?php checked( $is_current_visible ); ?>>
											<?php _e( 'Display: feels like / wind / humidity / pressure / uv index', 'weather-atlas' ); ?>
										</label>
										<p class="description">
											<?php _e( '*on mobile devices, current condition details are hidden', 'weather-atlas' ); ?>
										</p>
									</td>
								</tr>
								<!-- row end -->
								
								
								<!-- row start -->
								<tr>
									<td>
										<label
											for="sunrise_sunset"><strong><?php _e( 'Sunrise and sunset', 'weather-atlas' ); ?></strong></label><br/>
									</td>
									<td>
										<?php
											
											// Check if the sunrise_sunset is set to '1' (show) or '0' (hide)
											$is_sunrise_sunset_visible = ! isset( $widget_data[ 'sunrise_sunset' ] ) || $widget_data[ 'sunrise_sunset' ] == '1';
										
										?>
										<label for="sunrise_sunset">
											<input name="sunrise_sunset" type="checkbox" id="sunrise_sunset"
											       value="1" <?php checked( $is_sunrise_sunset_visible ); ?>>
											<?php _e( 'Display sunrise and sunset times', 'weather-atlas' ); ?>
										</label>
									</td>
								</tr>
								<!-- row end -->
								
								
								<!-- row start -->
								<tr>
									<td>
										<label
											for="hourly"><strong><?php _e( 'Hourly forecast', 'weather-atlas' ); ?></strong></label><br/>
										<?php _e( 'Number of hours', 'weather-atlas' ); ?>
									</td>
									<td>
										<?php
											
											$selected_hours = isset( $widget_data[ 'hourly' ] ) ? $widget_data[ 'hourly' ] : '5';
										?>
										<select name="hourly" id="hourly" class="regular-text">
											<option
												value="0" <?php selected( $selected_hours, '0' ); ?>><?php _e( 'hide hourly forecast', 'weather-atlas' ); ?></option>
											<option
												value="1" <?php selected( $selected_hours, '1' ); ?>>
												1 <?php _e( 'hour', 'weather-atlas' ); ?></option>
											<option
												value="2" <?php selected( $selected_hours, '2' ); ?>>
												2 <?php _e( 'hours', 'weather-atlas' ); ?></option>
											<option
												value="3" <?php selected( $selected_hours, '3' ); ?>>
												3 <?php _e( 'hours', 'weather-atlas' ); ?></option>
											<option
												value="4" <?php selected( $selected_hours, '4' ); ?>>
												4 <?php _e( 'hours', 'weather-atlas' ); ?></option>
											<option
												value="5" <?php selected( $selected_hours, '5' ); ?>>
												5 <?php _e( 'hours', 'weather-atlas' ); ?></option>
										</select>
										<p class="description">
											5 - <?php _e( 'recommended for horizontal layout', 'weather-atlas' ); ?><br/>
											3 - <?php _e( 'recommended for vertical layout', 'weather-atlas' ); ?><br/>
											<?php _e( '*on mobile devices, more then 3 hours are hidden', 'weather-atlas' ); ?>
										</p>
									</td>
								</tr>
								<!-- row end -->
								
								
								<!-- row start -->
								<tr>
									<td>
										<label
											for="daily"><strong><?php _e( 'Daily forecast', 'weather-atlas' ); ?></strong></label><br/>
										<?php _e( 'Number of days', 'weather-atlas' ); ?>
									</td>
									<td>
										<?php
											
											$selected_days = isset( $widget_data[ 'daily' ] ) ? $widget_data[ 'daily' ] : '5';
										?>
										<select name="daily" id="daily" class="regular-text">
											<option
												value="0" <?php selected( $selected_days, '0' ); ?>><?php _e( 'hide daily forecast', 'weather-atlas' ); ?></option>
											<option
												value="1" <?php selected( $selected_days, '1' ); ?>>
												1 <?php _e( 'day', 'weather-atlas' ); ?></option>
											<option
												value="2" <?php selected( $selected_days, '2' ); ?>>
												2 <?php _e( 'days', 'weather-atlas' ); ?></option>
											<option
												value="3" <?php selected( $selected_days, '3' ); ?>>
												3 <?php _e( 'days', 'weather-atlas' ); ?></option>
											<option
												value="4" <?php selected( $selected_days, '4' ); ?>>
												4 <?php _e( 'days', 'weather-atlas' ); ?></option>
											<option
												value="5" <?php selected( $selected_days, '5' ); ?>>
												5 <?php _e( 'days', 'weather-atlas' ); ?></option>
										</select>
										<p class="description">
											5 - <?php _e( 'recommended for horizontal layout', 'weather-atlas' ); ?><br/>
											3 - <?php _e( 'recommended for vertical layout', 'weather-atlas' ); ?><br/>
											<?php _e( '*on mobile devices, more then 3 days are hidden', 'weather-atlas' ); ?>
										</p>
									</td>
								</tr>
								<!-- row end -->
								
								
								<!-- row start -->
								<tr>
									<td colspan="2" style="padding-bottom: 0">
										<h3 style="margin-bottom: 0"><?php _e( 'Weather forecast in textual format', 'weather-atlas' ); ?>
											<span
												style="color:red;font-size:0.8em;vertical-align:super;"><?php _e( 'New', 'weather-atlas' ); ?>!</span>
										</h3>
										<strong><?php _e( 'Enhance your website by dedicating an entire page to the weather.', 'weather-atlas' ); ?></strong><br/>
										<?php _e( 'Provide detailed weather information to users, by placing the widget that displays all weather data, including a textual weather forecast.', 'weather-atlas' ); ?>
									</td>
								</tr>
								<!-- row end -->
								
								
								<!-- row start -->
								<tr>
									<td>
										<label
											for="text_today"><strong><?php _e( 'Today', 'weather-atlas' ); ?></strong></label><br/>
									</td>
									<td>
										<?php
											
											// Check if the text_today is set to '1' (show) or '0' (hide)
											$is_text_today_visible = isset( $widget_data[ 'text_today' ] ) && $widget_data[ 'text_today' ] == '1';
										
										?>
										<label for="text_today">
											<input name="text_today" type="checkbox" id="text_today"
											       value="1" <?php checked( $is_text_today_visible ); ?>>
											<?php _e( 'Display textual weather forecast for today', 'weather-atlas' ); ?> <?php _e( '(English only)', 'weather-atlas' ); ?>
										</label>
									</td>
								</tr>
								<!-- row end -->
								
								
								<!-- row start -->
								<tr>
									<td>
										<label
											for="text_tomorrow"><strong><?php _e( 'Tomorrow', 'weather-atlas' ); ?></strong></label><br/>
									</td>
									<td>
										<?php
											
											// Check if the text_tomorrow is set to '1' (show) or '0' (hide)
											$is_text_tomorrow_visible = isset( $widget_data[ 'text_tomorrow' ] ) && $widget_data[ 'text_tomorrow' ] == '1';
										
										?>
										<label for="text_tomorrow">
											<input name="text_tomorrow" type="checkbox" id="text_tomorrow"
											       value="1" <?php checked( $is_text_tomorrow_visible ); ?>>
											<?php _e( 'Display textual weather forecast for tomorrow', 'weather-atlas' ); ?> <?php _e( '(English only)', 'weather-atlas' ); ?>
										</label>
									</td>
								</tr>
								<!-- row end -->
								
								
								<!-- row start -->
								<tr>
									<td>
										<label
											for="text_long_term"><strong><?php _e( 'Long term', 'weather-atlas' ); ?></strong></label><br/>
									</td>
									<td>
										<?php
											
											// Check if the text_long_term is set to '1' (show) or '0' (hide)
											$is_text_long_term_visible = isset( $widget_data[ 'text_long_term' ] ) && $widget_data[ 'text_long_term' ] == '1';
										
										?>
										<label for="text_long_term">
											<input name="text_long_term" type="checkbox" id="text_long_term"
											       value="1" <?php checked( $is_text_long_term_visible ); ?>>
											<?php _e( 'Display textual weather forecast for next 10 days', 'weather-atlas' ); ?> <?php _e( '(English only)', 'weather-atlas' ); ?>
										</label>
									</td>
								</tr>
								<!-- row end -->
								
								
								<!-- row start -->
								<tr>
									<td colspan="2" style="padding-bottom: 0">
										<h3 style="margin-bottom: 0"><?php _e( 'Appearance', 'weather-atlas' ); ?></h3>
									</td>
								</tr>
								<!-- row end -->
								
								
								<!-- row start -->
								<tr>
									<td>
										<label
											for="layout"><strong><?php _e( 'Layout', 'weather-atlas' ); ?></strong></label>
									</td>
									<td>
										<?php
											
											$selected_layout = isset( $widget_data[ 'layout' ] ) ? $widget_data[ 'layout' ] : 'horizontal';
										?>
										<select name="layout" id="layout" class="regular-text">
											<option
												value="horizontal" <?php selected( $selected_layout, 'horizontal' ); ?>><?php _e( 'horizontal layout', 'weather-atlas' ); ?></option>
											<option
												value="vertical" <?php selected( $selected_layout, 'vertical' ); ?>><?php _e( 'vertical layout', 'weather-atlas' ); ?></option>
										</select>
										<p class="description">
											<?php _e( 'horizontal - recommended for placement in articles', 'weather-atlas' ); ?><br/>
											<?php _e( 'vertical - recommended for placement in sidebar', 'weather-atlas' ); ?>
										</p>
									</td>
								</tr>
								<!-- row end -->
								
								
								<!-- row start -->
								<tr>
									<td>
										<label
											for="heading"><strong><?php _e( 'Heading', 'weather-atlas' ); ?></strong></label><br/>
										(<?php _e( 'optional', 'weather-atlas' ); ?>)
									</td>
									<td>
										<input name="heading" id="heading" type="text"
										       value="<?php echo isset( $widget_data[ 'heading' ] ) ? esc_attr( $widget_data[ 'heading' ] ) : '' ?>"
										       class="regular-text"/>
										<p
											class="description">
											<?php _e( 'Leave blank - no heading above the widget', 'weather-atlas' ); ?>
										</p>
									</td>
								</tr>
								<!-- row end -->
								
								
								<!-- row start -->
								<tr>
									<td>
										<label
											for="header"><strong><?php _e( 'Header', 'weather-atlas' ); ?></strong></label><br/>
										(<?php _e( 'optional', 'weather-atlas' ); ?>)
									</td>
									<td>
										<input name="header" id="header" type="text"
										       value="<?php echo isset( $widget_data[ 'header' ] ) ? esc_attr( $widget_data[ 'header' ] ) : '' ?>"
										       class="regular-text"/>
										<p
											class="description">
											<?php _e( 'Set header - for example, override with \'City, Country\' name in local language', 'weather-atlas' ); ?>
											<br/>
											<?php _e( 'Leave blank - \'City, Country\' is in the widget\'s header', 'weather-atlas' ); ?>
										</p>
									</td>
								</tr>
								<!-- row end -->
								
								
								<!-- row start -->
								<tr>
									<td>
										<label
											for="font_size"><strong><?php _e( 'Font size', 'weather-atlas' ); ?></strong></label><br/>
										(<?php _e( 'optional', 'weather-atlas' ); ?>)
									</td>
									<td>
										<input name="font_size" id="font_size" type="text"
										       value="<?php echo isset( $widget_data[ 'font_size' ] ) ? esc_attr( $widget_data[ 'font_size' ] ) : '' ?>"
										       class="regular-text"/>
										<p
											class="description">
											16px / 12pt / 1.2em / 1rem / 90% / etc. - <?php _e( 'font size is fixed', 'weather-atlas' ); ?>
											<br/>
											<?php _e( 'Leave blank - font size adapts to the web site\'s font size', 'weather-atlas' ); ?>
										</p>
									</td>
								</tr>
								<!-- row end -->
								
								
								<!-- row start -->
								<tr>
									<td>
										<label
											for="text_color"><strong><?php _e( 'Text Color', 'weather-atlas' ); ?></strong></label><br/>
										(<?php _e( 'optional', 'weather-atlas' ); ?>)
									</td>
									<td>
										<input name="text_color" id="text_color" type="text" class="color-picker"
										       data-alpha-enabled="true"
										       value="<?php echo isset( $widget_data[ 'text_color' ] ) ? esc_attr( $widget_data[ 'text_color' ] ) : ''; ?>"/>
										<p class="description">
											<?php _e( 'Set color - text color is fixed', 'weather-atlas' ); ?>
											<br/>
											<?php _e( 'Leave blank - text color continuously adapts to the current temperature', 'weather-atlas' ); ?>
										</p>
									</td>
								</tr>
								<!-- row end -->
								
								<!-- row start -->
								<tr>
									<td>
										<label
											for="background_color"><strong><?php _e( 'Background Color', 'weather-atlas' ); ?></strong></label><br/>
										(<?php _e( 'optional', 'weather-atlas' ); ?>)
									</td>
									<td>
										<input name="background_color" id="background_color" type="text" class="color-picker"
										       data-alpha-enabled="true"
										       value="<?php echo isset( $widget_data[ 'background_color' ] ) ? esc_attr( $widget_data[ 'background_color' ] ) : ''; ?>"/>
										<p class="description">
											<?php _e( 'Set color - background color is fixed', 'weather-atlas' ); ?>
											<br/>
											<?php _e( 'Leave blank - background color continuously adapts to the current temperature', 'weather-atlas' ); ?>
											
											<?php
												
												if ( ( ! isset( $widget_data[ 'background_color' ] ) || empty( $widget_data[ 'background_color' ] ) ) && ( $is_text_today_visible || $is_text_tomorrow_visible || $is_text_long_term_visible ) )
												{
													echo '<br/><strong>';
													_e( 'To enhance the readability of textual weather forecasts, setting a darker background color is recommended.', 'weather-atlas' );
													echo '</strong>';
												}
											?>
										</p>
									</td>
								</tr>
								<!-- row end -->
								
								
								<!-- row start -->
								<tr>
									<td colspan="2" style="padding-bottom: 0">
										<h3 style="margin-bottom: 0"><?php _e( 'Settings' ); ?></h3>
									</td>
								</tr>
								<!-- row end -->
								
								
								<!-- row start -->
								<tr>
									<td>
										<label
											for="unit_c_f"><strong><?php _e( 'Units', 'weather-atlas' ); ?></strong></label>
									</td>
									<td>
										<?php
											
											$selected_unit_c_f = isset( $widget_data[ 'unit_c_f' ] ) ? $widget_data[ 'unit_c_f' ] : 'f';
										?>
										<select name="unit_c_f" id="unit_c_f" class="regular-text">
											<option
												value="f" <?php selected( $selected_unit_c_f, 'f' ); ?>>°F - Fahrenheit
											</option>
											<option
												value="c" <?php selected( $selected_unit_c_f, 'c' ); ?>>°C - Celsius
											</option>
										</select>
									</td>
								</tr>
								<!-- row end -->
								
								
								<!-- row start -->
								<tr>
									<td>
										<strong><?php _e( 'Language', 'weather-atlas' ); ?></strong>
									</td>
									<td>
										<p class="description">
											<?php _e( 'The widget automatically adjusts to your WordPress site\'s language.', 'weather-atlas' ); ?>
											<br/>
											<?php _e( 'If a local translation is not available, it will default to English.', 'weather-atlas' ); ?>
											<br/>
											<a href='https://wordpress.org/plugins/weather-atlas/#languages' target='_blank'>
												<?php _e( 'How to translate the widget to my language?', 'weather-atlas' ); ?>
											</a>
										</p>
									</td>
								</tr>
								<!-- row end -->
								
								
								<!-- row start-->
								<tr>
									<td>
									</td>
									<td class="submit">
										<br/>
										<br/>
										<input type="submit" class="button button-primary button-hero"
										       value="<?php echo $editing ? __( 'Update Widget', 'weather-atlas' ) : __( 'Add New Widget', 'weather-atlas' ); ?>">
									</td>
								</tr>
								<!-- row end -->
								
								</tbody>
							</table>
						
						
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>