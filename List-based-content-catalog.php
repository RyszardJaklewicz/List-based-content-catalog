<section  class="background-bright">
	<span>
		<div class="text-description">
			<?php
				$array_all_images = array_diff(scandir("used_components"), array('.', '..'));
				foreach ($array_all_images as $key => $value) {
					if($array_all_images[$key]!="Article"){
						print ("<h3>".$array_all_images[$key]."</h3>");
						$sciezka = "used_components/".$array_all_images[$key];
						$array_components_group = array_diff(scandir($sciezka), array('.', '..'));
						foreach ($array_components_group as $key => $value) {
							print ("&nbsp&nbsp&nbsp".$value."<br>");
						}
					}
				}
			?>
		</div>
		<br><br>
	</span>
</section>