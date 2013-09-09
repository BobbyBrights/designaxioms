		<div id="content" class="sixteen columns authorSingle axiomContent">
			<ul id="slider">
		<?php
			
			foreach ($allCards as $card) {
				$cardType = $card->getAttribute('type');
				
				if($cardType == 'author'){
					$imageUrl=$card->getElementsByTagName('thumb')->item(0)->getAttribute('url');
					$title=$card->getElementsByTagName('title')->item(0)->nodeValue;
					$imageId=$card->getElementsByTagName('title')->item(0)->getAttribute('id');
					$subtitle=$card->getElementsByTagName('subtitle')->item(0)->nodeValue;
					$description=$card->getElementsByTagName('description')->item(0)->nodeValue;
					
			echo"		<li class=\"panel\"> 
					<div class=\"authorItem slide\" id=\"" . $imageId . "\"> 
						<div class=\"textInfo\"> 
							<h1><a href=\"" . $imageUrl . "\">" . $title . "</a></h1> 
							<h5>" . $subtitle . "</h5>
							<hr>
																" . $description . " 
						</div>
					</div>
				</li> \n		";
				}
			}		
		?>
			</ul><!--end #slider1-->
		</div><!--end #content-->