<h1>Voeg een user toe</h1>

<form name="create" method="post" action="<?=URL?>users/store">
    <!-- bouw hier je formulier -->
    <label class="col-4" for='full_name'>Uw naam : </label>
    <input class="col-4" type='text' id='full_name' name='full_name' placeholder='Voer hier uw naam in'>

    <label class="col-4" for='email'>Uw email : </label>
    <input class="col-4" type='email' id='email' name='email' placeholder='Voer hier uw email in'>

    <label class="col-4" for='phone'>Uw telefoon nummer : </label>
    <input class="col-4" type='text' id='phone' name='phone' placeholder='Voer hier uw nummer in'>

    <label class="col-4" for='age'>Uw leeftijd : </label>
    <input class="col-4" type='number' id='age' name='age' placeholder='Voer hier uw leeftijd in'>

    <input class="col-4 my-2 btn btn-custom-blue rounded-0" type='submit' value='Create'>
</form>

