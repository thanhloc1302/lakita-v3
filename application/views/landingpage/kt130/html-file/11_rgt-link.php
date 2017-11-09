<div style="position: fixed; bottom: 0; width: 100%; z-index: 100000;">
<!--	<a href="#register_area" title="Đăng ký ngay!">
		<img src="https://lakita.vn/styles/images/email/rgt-now.png" alt="Đăng ký ngay!" id="img-rgt" style="float: right;">
	</a>-->
	<a href="tel:1900636195" title="Đăng ký ngay!">
		<img src="https://lakita.vn/styles/images/email/contact.png" alt="Đăng ký ngay!" id="img-contact" 
                     style="float: left; transition: all 0.3s ease-in-out;">
	</a>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		var left = $('#img-contact').css('margin-left');

		$('#img-contact').hover(function() {
			$(this).css('margin-left', '0');
		}, function() {
			$(this).css('margin-left', left);
		});
	});
</script>