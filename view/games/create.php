<h1>voeg een game toe</h1>
<form name="create" method="post" action="store">
	<!-- bouw hier je formulier -->
	




<div class="form-group">
<label for="">game</label>
<input type="text" name="game_name" class="form-control" required>
</div>

<div class="form-group">
<label for="">img</label>
<input type="text" name="img" class="form-control" required>
</div>
   
<div class="form-group">
<label for="">developer</label>
<input type="text" name="developer" class="form-control" required>
</div>

<div class="form-group">
<label for="">publisher</label>
<input type="text" name="publisher" class="form-control" required>
</div>

<div class="form-group">
<label for="">genre</label>
<select name="genre" id="genre">
<?php foreach ($genres as $genre) { ?>
  <option value="<?php echo $genre["genre_id"] ?>"><?php echo $genre["genre"] ?></option>
<?php } ?>
</select>
</div>

<div class="form-group">
<label for="">aantal plekken</label>
<input type="text" name="total_spots" class="form-control" required>
</div>


<div class="form-group">
<label for="">platform</label>
<input type="text" name="platform" class="form-control" required>
</div>

<div class="form-group">
<label for="">description</label>
<textarea type="text" name="description" class="form-control" required></textarea>
</div>







<input type="submit" name="create">
  


   
     

</form>

