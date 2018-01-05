<?php
	require_once("functions/function.php");
	//include("remember.php");
	get_header();
	get_sidebar();
	get_bread();
?>
	<div class="row-fluid home_text">	
	<!--<div><input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?> />
    <label for="remember-me">Remember me</label>
  </div>-->
	</div>
<?php
	get_footer();
?>		

	
 	<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<ul class="list-inline item-details">
				<li><a href="http://themifycloud.com">Admin templates</a></li>
				<li><a href="http://themescloud.org">Bootstrap themes</a></li>
			</ul>
		</div>
	</div>