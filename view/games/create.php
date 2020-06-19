<h1>voeg een game toe</h1>
<form name="create" method="post" action="store">
	<!-- bouw hier je formulier -->
	




<div class="form-group">
<label for="">game</label>
<input type="text" name="game_name" class="form-control"value="<?=$result["game_name"]?>" required>
</div>

<div class="form-group">
<label for="">img</label>
<input type="text" name="img" class="form-control"value="<?=$result["img"]?>" required>
</div>
   
<div class="form-group">
<label for="">developer</label>
<input type="text" name="developer" class="form-control"value="<?=$result["developer"]?>" required>
</div>

<div class="form-group">
<label for="">publisher</label>
<input type="text" name="publisher" class="form-control"value="<?=$result["publisher"]?>" required>
</div>

<div class="form-group">
<label for="">genre</label>
<input type="text" name="genre" class="form-control"value="<?=$result["genre"]?>" required>
</div>

<div class="form-group">
<label for="">aantal plekken</label>
<input type="text" name="total_spots" class="form-control"value="<?=$result["total_spots"]?>" required>
</div>






<input type="submit" name="create">
  


   
     

</form>

