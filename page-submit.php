<?php
/**
 * The template for displaying search results pages.
 *
 * @package QOD_Starter_Theme
 */
get_header()?>

<!------------------------------------------------ SUBMISSION FORM ------------------------------------------------>

<?php if ( is_user_logged_in() ) ?>
<form  action="/action_page.php">
				author of the quote<br><br> 
				<input type="text" name="fname"><br><br>
				Quote<br><br>
  <textarea rows="4" cols="50" name="lname"></textarea><br><br>
				Where did you find this quote ?(e.g. book name) <br><br>
				<input type="text" name="lname"><br><br>
				Provide a URL of the source (if availabel)<br><br>
				<input type="text" name="fname"><br><br>
 				 <input type="button" onclick="myFunction()" value="Submit form">
                </form>

<?php else ?>
    