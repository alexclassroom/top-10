<?php
/**
 * Sidebar
 *
 * @link  https://webberzone.com
 * @since 3.3.0
 *
 * @package WebberZone\Top_Ten
 */

?>
<div class="postbox-container">
	<div id="pro-upgrade-banner">
		<div class="inside" style="text-align: center">
			<p><a href="https://webberzone.com/plugins/top-10/pro/" target="_blank"><img src="<?php echo esc_url( TOP_TEN_PLUGIN_URL . 'includes/admin/images/top-ten-pro-banner.png' ); ?>" alt="<?php esc_html_e( 'Top 10 Pro - Coming soon!', 'top-10' ); ?>" width="300" height="300" style="max-width: 100%;" /></a></p>
		</div>
	</div>

	<div id="donatediv" class="postbox meta-box-sortables">
		<h2 class='hndle'><span><?php esc_attr_e( 'Support the development', 'top-10' ); ?></span></h2>

		<div class="inside" style="text-align: center">
			<div id="donate-form">
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_xclick">
						<input type="hidden" name="business" value="donate@ajaydsouza.com">
						<input type="hidden" name="lc" value="IN">
						<input type="hidden" name="item_name" value="<?php esc_html_e( 'Donation for Top 10', 'top-10' ); ?>">
						<input type="hidden" name="item_number" value="tptn_plugin_settings">
						<strong><?php esc_html_e( 'Enter amount in USD', 'top-10' ); ?></strong>: <input name="amount" value="15.00" size="6" type="text"><br />
						<input type="hidden" name="currency_code" value="USD">
						<input type="hidden" name="button_subtype" value="services">
						<input type="hidden" name="bn" value="PP-BuyNowBF:btn_donate_LG.gif:NonHosted">
						<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="<?php esc_html_e( 'Send your donation to the author of', 'top-10' ); ?> Top 10">
				</form>
			</div><!-- /#donate-form -->
		</div><!-- /.inside -->
	</div><!-- /.postbox -->

	<div id="qlinksdiv" class="postbox meta-box-sortables">
		<h2 class='hndle metabox-holder'><span><?php esc_html_e( 'Quick links', 'top-10' ); ?></span></h2>

		<div class="inside">
			<div id="quick-links">
				<ul class="subsub">
					<li>
						<a href="https://webberzone.com/plugins/top-10/" target="_blank"><?php esc_html_e( 'Top 10 plugin homepage', 'top-10' ); ?></a>
					</li>
					<li>
						<a href="https://webberzone.com/support/product/top-10/" target="_blank"><?php esc_html_e( 'Knowledge Base', 'top-10' ); ?></a>
					</li>
					<li>
						<a href="https://wordpress.org/plugins/top-10/faq/" target="_blank"><?php esc_html_e( 'FAQ', 'top-10' ); ?></a>
					</li>
					<li>
						<a href="https://wordpress.org/support/plugin/top-10/" target="_blank"><?php esc_html_e( 'Support', 'top-10' ); ?></a>
					</li>
					<li>
						<a href="https://wordpress.org/support/plugin/top-10/reviews/" target="_blank"><?php esc_html_e( 'Reviews', 'top-10' ); ?></a>
					</li>
					<li>
						<a href="https://github.com/webberzone/top-10" target="_blank"><?php esc_html_e( 'Github repository', 'top-10' ); ?></a>
					</li>
					<li>
						<a href="https://webberzone.com/" target="_blank"><?php esc_html_e( "Ajay's blog", 'top-10' ); ?></a>
					</li>
				</ul>
			</div>
		</div><!-- /.inside -->
	</div><!-- /.postbox -->
	<div id="pluginsdiv" class="postbox meta-box-sortables">
		<h2 class='hndle metabox-holder'><span><?php esc_html_e( 'WebberZone plugins', 'top-10' ); ?></span></h2>

		<div class="inside">
			<div id="quick-links">
				<ul class="subsub">
					<li><a href="https://webberzone.com/plugins/contextual-related-posts/" target="_blank"><?php esc_html_e( 'Contextual Related Posts', 'top-10' ); ?></a></li>
					<li><a href="https://webberzone.com/plugins/better-search/" target="_blank"><?php esc_html_e( 'Better Search', 'top-10' ); ?></a></li>
					<li><a href="https://webberzone.com/plugins/knowledgebase/" target="_blank"><?php esc_html_e( 'Knowledge Base', 'top-10' ); ?></a></li>
					<li><a href="https://webberzone.com/plugins/add-to-all/" target="_blank"><?php esc_html_e( 'Snippetz', 'top-10' ); ?></a></li>
					<li><a href="https://webberzone.com/webberzone-followed-posts/" target="_blank"><?php esc_html_e( 'Followed Posts', 'top-10' ); ?></a></li>
					<li><a href="https://webberzone.com/plugins/popular-authors/" target="_blank"><?php esc_html_e( 'Popular Authors', 'top-10' ); ?></a></li>
					<li><a href="https://webberzone.com/plugins/autoclose/" target="_blank"><?php esc_html_e( 'Auto Close', 'top-10' ); ?></a></li>
				</ul>
			</div>
		</div><!-- /.inside -->
	</div><!-- /.postbox -->	


</div>

<div class="postbox-container">
	<div id="followdiv" class="postbox meta-box-sortables">
		<h2 class='hndle'><span><?php esc_html_e( 'Follow me', 'top-10' ); ?></span></h2>

		<div class="inside" style="text-align: center">
			<a href="https://x.com/webberzone/" target="_blank"><img src="<?php echo esc_url( TOP_TEN_PLUGIN_URL . 'includes/admin/images/x.png' ); ?>" width="100" height="100"></a>	
			<a href="https://facebook.com/webberzone/" target="_blank"><img src="<?php echo esc_url( TOP_TEN_PLUGIN_URL . 'includes/admin/images/fb.png' ); ?>" width="100" height="100"></a>
		</div><!-- /.inside -->
	</div><!-- /.postbox -->
</div>
