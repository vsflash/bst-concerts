<div class="container-fluid">
    <h2 class="text-center">Edit concert info</h2>
    <div class="row justify-content-center">
	<form action="/admin/concerts/update" method="post">
	    <div class="form-group">
		<label class="w-100">
		    <span>Date</span>
		    <input type="datetime-local" name="date" value="<?= date_format(date_create($this->concert['date']), 'Y-m-d\TH:m') ?>" required class="form-control">
		</label>
	    </div>
	    <div class="form-group">
		<label class="w-100">
		    <span>Price</span>
		    <input type="text" name="price" value="<?= $this->concert['price'] ?>" required class="form-control">
		</label>
	    </div>
	    <div class="form-group">
		<label class="w-100">
		    <span>Description</span>
		    <textarea name="description" class="form-control"><?= $this->concert['description'] ?></textarea>
		</label>
	    </div>
	    <div class="form-group">
		<input type="hidden" name="id" value="<?= $this->concert['id'] ?>">
		<input type="submit" name="send" value="Save" class="btn btn-success">
	    </div>
	</form>
    </div>
</div>