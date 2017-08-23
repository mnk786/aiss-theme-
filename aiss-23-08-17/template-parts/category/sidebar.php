<?php $getSub = array();
$idObj = get_category_by_slug('about');
$id = $idObj->term_id;
$getSub = subcat($id);
?>
<div class="left-menus" id=""><!-- left menus start here -->
	<div class="">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<div class="left-menus-back">
				<ul class="main-list">
					<li>
						<a href="">
							<?php echo esc_html( ucfirst('about') ); ?>
						</a>
						<?php if( !empty($getSub)){?>
						<ul class="child-list">
							<?php foreach ($getSub as $get)
							{ ?>
							<li>
								<a href="<?php echo $get->slug; ?>">
									<?php echo $get->name; ?>
								</a>
							</li>
							<?php } ?>
						</ul>
						<?php } ?>
					</li>
				</ul>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</div><!-- left menus end here -->