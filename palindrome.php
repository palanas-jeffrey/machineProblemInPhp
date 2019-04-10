<?php $page ="palindrome"; ?>

<?php require_once './app/partials/template.php' ;?>

<?php function get_page_content(){ ?>

	<h2>Palindrome</h2>

<form action="/machineProblemsInPhp/app/controllers/palindromeChecker.php" method="POST">
<input type="text" name="name">
<button id="submit" type="submit">Lets check</button>
</form>


<?php }; ?>







