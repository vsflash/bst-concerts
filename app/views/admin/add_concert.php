<div class="container-fluid">
    <h2 class="text-center">Add new concert info</h2>
    <div class="row justify-content-center">
	<form action="/admin/concerts/insert" method="post" enctype="multipart/form-data">
	    <div class="form-group">
		<label class="w-100">
		    <span>Date</span>
		    <input type="datetime-local" name="date" required class="form-control">
		</label>
	    </div>
	    <div class="form-group">
		<label class="w-100">
		    <span>Price</span>
		    <input type="text" name="price" required class="form-control">
		</label>
	    </div>
	    <div class="form-group">
		<label class="w-100">
		    <span>Image</span>
		    <input type="file" name="image" class="form-control">
		</label>  
	    </div>
	    <div class="form-group">
		<label class="w-100">
		    <span>Description</span>
		    <textarea name="description" class="form-control"></textarea>
		</label> 
	    </div>
	    <div class="form-group">
		<input type="submit" name="send" value="Add" class="btn btn-success">
	    </div>
	</form>
    </div>
</div>