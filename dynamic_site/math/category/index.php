<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include '../../include/math.php'; ?>
		<?php include '../../include/head.php'; ?>
		<link rel="canonical" href="https://cleap.github.io/math/complex">
	</head>
	<body>
		<header class="header">
			<?php include '../../include/nav.php'; ?>
		</header>
		<article>
			<h1>Category Theory</h1>
			<p>Don't touch my functor</p>
			<h2>Definitions and Axioms</h2>
			<p>A <i>category</i> consists of the following data:</p>
			<ol>
				<li>A collection of <i>objects</i>, which we shall designate by \(A, A', ...\).</li>
				<li>A function assigning to each pair \((A, A')\) of object in the category, a set denoted by \(H(A, A')\), the elements of which are called <i>mappings</i> or <i>transformations</i>. This set may be empty for some pairs \((A, A')\).</li>
				<li>There exists a function (called <i>composition</i> which assigns to pairs $(f,g)$ of mappings such that $f\in H(A,A')$, $g\in H(A',A'')$, a mapping (denoted by $gf$) in the set $H(A,A'')$.</li>
			</ol>
		</article>
		<footer>
			<?php include '../../include/footer.php'; ?>
		</footer>
	</body>
</html>
