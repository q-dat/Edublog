<section class="tsvg-admin-section">
	<header class="tsvg-admin-header">
		<div>
			<span>
				TS Video Gallery
			</span>
		</div>
		<div>
			<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'img/ts-video-gallery-logo.png' ); ?>"  alt="TS Video Gallery">
		</div>
		<div>
			<a href="<?php echo esc_url( 'https://total-soft.com/wp-video-gallery/' ); ?>" target="_blank">Upgrade to pro</a>
		</div>
	</header>
	<div class="tsvg-manager-field">
		<div id="tsvg-manager-field-inner">
			<div id="post-body" class="metabox-holder">
				<div id="post-body-content">
					<div class="meta-box-sortables ui-sortable">
						<form method="post" id="tsvg-manager-form">
							<?php
								$this->tsvg_admin_manager->tsvg_nonce_field();
								$this->tsvg_admin_manager->prepare_items();
							?>
							<div class="tsvg-manager-admin-bar">
								<div class="tsvg-manager-admin-nav">
									<div class="tsvg-manager-admin-nav-link">
										<a>Dashboard</a>
									</div>
									<div class="tsvg-manager-admin-nav-link">
										<a href="<?php echo esc_url( admin_url( 'admin.php?page=tsvg-builder' ) ); ?>" >Create Gallery</a>
									</div>
									<div class="tsvg-manager-admin-nav-link">
										<a href="<?php echo esc_url( 'https://wordpress.org/support/plugin/gallery-videos/' ); ?>" target="_blank">Support</a>
									</div>
									<div class="tsvg-manager-admin-nav-link">
										<a href="<?php echo esc_url( 'https://total-soft.com/wp-video-gallery/' ); ?>" target="_blank">Go Pro</a>
									</div>
								</div>
								<div class="tsvg_searchbar">
									<?php $this->tsvg_admin_manager->search_box( 'Search', 'search_id' ); ?>
								</div>
							</div>
							<?php
								$this->tsvg_admin_manager->display();
							?>
						</form>
					</div>
				</div>
			</div>
			<br class="clear">
		</div>
	</div>
</section>
<?php
$this->tsvg_admin_manager->tsvg_confirm_modal();
