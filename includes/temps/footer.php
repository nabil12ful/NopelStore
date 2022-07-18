        <footer>
			<div class="container">
				<div class="row">
					<div class="footer-col">
						<h4>Company</h4>
						<ul>
							<li><a href="#">about us</a></li>
							<li><a href="#">our services</a></li>
							<li><a href="#">privecy policy</a></li>
							<li><a href="#">contact us</a></li>
						</ul>
					</div>
					<div class="footer-col">
						<h4>get help</h4>
						<ul>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">shiping</a></li>
							<li><a href="#">returns</a></li>
							<li><a href="#">order status</a></li>
						</ul>
					</div>
					<div class="footer-col">
						<h4>online shop</h4>
						<ul>
							<?php
								foreach(getCats() as $cat){
									echo "<li><a href='#'>" . $cat['Name'] . "</a></li>";
								}
							?>
						</ul>
					</div>
					<div class="footer-col">
						<h4>follow us</h4>
						<div class="social">
							<a href="#"><i class="fa fa-facebook-f"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>						
			<div class="reseved">
				<p>All rights resaved to &copy;NopelStore</p>
			</div>
		</footer>

        <!-- JS files -->
		<script src="<?php echo $js ?>jquery.min.js"></script>
		<script src="<?php echo $js ?>bootstrap.min.js"></script>
		<script src="<?php echo $js ?>bootstrap.bundle.min.js"></script>
        <script src="<?php echo $js ?>main.js?v=<?php echo time() ?>"></script>
    </body>
</html>