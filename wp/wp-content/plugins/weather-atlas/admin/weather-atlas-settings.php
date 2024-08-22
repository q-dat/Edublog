<?php
	
	// Load existing global setting data
	$weather_atlas_settings = get_option( 'weather_atlas_settings', [] );
	
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
			// Validate and sanitize input
			$key_owm = sanitize_text_field( $_POST[ 'key_owm' ] );
			
			if ( strlen( $key_owm ) === 32 )
			{
				// Correct length, save the key
				$weather_atlas_settings[ 'key_owm' ] = $key_owm;
				update_option( 'weather_atlas_settings', $weather_atlas_settings );
				$feedback_message = __( 'Settings updated successfully.', 'weather-atlas' );
			}
			elseif ( strlen( $key_owm ) === 0 )
			{
				// Key is empty, delete or clear the existing key
				unset( $weather_atlas_settings[ 'key_owm' ] );
				update_option( 'weather_atlas_settings', $weather_atlas_settings );
				$feedback_message = __( 'Key removed successfully.', 'weather-atlas' );
			}
			else
			{
				// Incorrect key length, display error message
				echo "<div class='notice notice-error'>";
				echo '<p>' . __( 'The provided key is not valid.', 'weather-atlas' ) . '</p>';
				echo "</div>";
			}
		}
	}
	
	// Retrieve existing value for key_owm for form population
	$key_owm_value = isset( $weather_atlas_settings[ 'key_owm' ] ) ? $weather_atlas_settings[ 'key_owm' ] : '';

?>

<div class="wrap" style="max-width:1000px">
	
	<h1 class="wp-heading-inline"><?php echo __( 'Settings', 'weather-atlas' ); ?></h1>
	
	<!-- Display feedback message after form submission -->
	<?php if ( isset( $feedback_message ) ): ?>
		<div class="notice notice-success">
			<p><?php echo $feedback_message; ?></p>
		</div>
	<?php endif; ?>
	
	<!-- Form starts -->
	<div id="poststuff">
		<div id="post-body" class="metabox-holder">
			<div class="postbox-container">
				
				<!-- Settings Form Box -->
				<div class="postbox">
					<div class="inside">
						<form method="post" action="">
							<?php wp_nonce_field( 'weather_atlas_action', 'weather_atlas_nonce' ); ?>
							
							<table class="form-table">
								<tbody>
								
								<!-- Settings Header -->
								<tr>
									<td colspan="2" style="padding-bottom: 0">
										<h3 style="margin-bottom: 0"><?php _e( 'Settings' ); ?></h3>
									</td>
								</tr>
								
								<!-- Open Weather Map Key Input -->
								<tr>
									<td>
										<label
											for="key_owm"><strong><?php _e( 'Open Weather Map Key', 'weather-atlas' ); ?></strong></label><br/>
										(<?php _e( 'recommended', 'weather-atlas' ); ?>)
									</td>
									<td>
										<input name="key_owm" id="key_owm" type="text" value="<?php echo esc_attr( $key_owm_value ); ?>"
										       class="regular-text"/>
										<a href='https://home.openweathermap.org/api_keys' class='button'
										   target='_blank'><?php _e( 'Get your free API key here', 'weather-atlas' ); ?></a>
										
										<p class="description">
											<?php _e( 'Our weather service is very reliable. Nevertheless, implementing a fallback system is a smart strategy.<br/>The Open Weather Map key provides you access to a <strong>backup service</strong>,<br/>ensuring an uninterrupted stream of weather data,<br/>even during rare slowdowns caused by high demand on our system.', 'weather-atlas' ); ?>
										</p>
										
										<p class="description">
										
										</p>
									
									
									</td>
								</tr>
								
								<!-- Save Settings Button -->
								<tr>
									<td></td>
									<td class="submit">
										<input type="submit" class="button button-primary button-large"
										       value="<?php _e( 'Save settings' ); ?>">
									</td>
								</tr>
								
								</tbody>
							</table>
						
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>