<h1>Voeg een user toe</h1>

<form name="create" method="post" action="<?=URL?>users/store">
	<!-- bouw hier je formulier -->
    <label for='full_name'>Uw naam : </label><input type='text' id='full_name' name='full_name' placeholder='Voer hier uw naam in'>
    <label for='email'>Uw email : </label><input type='email' id='email' name='email' placeholder='Voer hier uw email in'>
    <label for='phone'>Uw telefoon nummer : </label><input type='text' id='phone' name='phone' placeholder='Voer hier uw telefoon nummer in'>
    <label for='age'>Uw leeftijd : </label><input type='number' id='age' name='age' placeholder='Voer hier uw leeftijd in'>
	<input type='submit' value='Create'>
</form>