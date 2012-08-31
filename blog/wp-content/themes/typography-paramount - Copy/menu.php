<?php
if(isset($_GET["view"]) && ($_GET["view"]) == "text") {
		echo"<ul class=\"nav\">
				<li><a href=\"axioms.php?view=" . urlencode("text") . "\">AXIOMS</a></li>
				<li><a href=\"quotes.php?view=" . urlencode("text") . "\">QUOTES</a></li>
				<li><a href=\"authors.php?view=" . urlencode("text") . "\">AUTHORS</a></li>
				<li><a href=\"about.php\">ABOUT</a></li>
				<li><a href=\"http://www.mit.edu/~juhan/design_axioms.html\">JOURNAL</a></li>
				<li><a href=\"feedback.php\">FEEDBACK</a></li>
		</ul><!--#nav-->";
	} else if(isset($_GET["view"]) && ($_GET["view"]) == "grid") {
		echo"<ul class=\"nav\">
				<li><a href=\"axioms.php?view=" . urlencode("grid") . "\">AXIOMS</a></li>
				<li><a href=\"quotes.php?view=" . urlencode("grid") . "\">QUOTES</a></li>
				<li><a href=\"authors.php?view=" . urlencode("grid") . "\">AUTHORS</a></li>
				<li><a href=\"about.php\">ABOUT</a></li>
				<li><a href=\"http://www.mit.edu/~juhan/design_axioms.html\">JOURNAL</a></li>
				<li><a href=\"feedback.php\">FEEDBACK</a></li>
			</ul><!--#nav-->";
	} else if(isset($_GET["view"]) && ($_GET["view"]) == "multi") {
		echo"<ul class=\"nav\">
				<li><a href=\"axioms.php?view=" . urlencode("multi") . "\">AXIOMS</a></li>
				<li><a href=\"quotes.php?view=" . urlencode("multi") . "\">QUOTES</a></li>
				<li><a href=\"authors.php?view=" . urlencode("multi") . "\">AUTHORS</a></li>
				<li><a href=\"about.php\">ABOUT</a></li>
				<li><a href=\"http://www.mit.edu/~juhan/design_axioms.html\" target=\"blank\">JOURNAL</a></li>
				<li><a href=\"feedback.php\">FEEDBACK</a></li>
			</ul><!--#nav-->";
	} else if(isset($_GET["view"]) && ($_GET["view"]) == "single"){
		echo"<ul class=\"nav\">
				<li><a href=\"axioms.php?view=" . urlencode("single") . "\">AXIOMS</a></li>
				<li><a href=\"quotes.php?view=" . urlencode("single") . "\">QUOTES</a></li>
				<li><a href=\"authors.php?view=" . urlencode("single") . "\">AUTHORS</a></li>
				<li><a href=\"about.php\">ABOUT</a></li>
				<li><a href=\"http://www.mit.edu/~juhan/design_axioms.html\" target=\"blank\">JOURNAL</a></li>
				<li><a href=\"feedback.php\">FEEDBACK</a></li>
			</ul><!--#nav-->";
	} else if(isset($_GET["view"]) && ($_GET["view"]) == "minim") {
		echo"<ul class=\"nav\">
				<li><a href=\"axioms.php?view=" . urlencode("minim") . "\">AXIOMS</a></li>
				<li><a href=\"quotes.php?view=" . urlencode("minim") . "\">QUOTES</a></li>
				<li><a href=\"authors.php?view=" . urlencode("minim") . "\">AUTHORS</a></li>
				<li><a href=\"about.php\">ABOUT</a></li>
				<li><a href=\"http://www.mit.edu/~juhan/design_axioms.html\" target=\"blank\">JOURNAL</a></li>
				<li><a href=\"feedback.php\">FEEDBACK</a></li>
			</ul><!--#nav-->";
	} else{
		echo"<ul class=\"nav\">
				<li><a href=\"axioms.php\">AXIOMS</a></li>
				<li><a href=\"quotes.php\">QUOTES</a></li>
				<li><a href=\"authors.php\">AUTHORS</a></li>
				<li><a href=\"about.php\">ABOUT</a></li>
				<li><a href=\"http://www.mit.edu/~juhan/design_axioms.html\" target=\"blank\">JOURNAL</a></li>
				<li><a href=\"feedback.php\">FEEDBACK</a></li>
			</ul><!--#nav-->";
	}
	?>

