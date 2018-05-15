<div class="container-fluid">
    <div class="row justify-content-end">
	<div class="col-2">
	    <a class="btn btn-success m-2" href="/admin/concerts/add">Add new concert</a>
	</div>  
    </div>
    <?php if ($this->all_concerts): ?>
        <table class="table">
    	<thead class="thead-dark">
                <tr>
    		<th>ID</th>
    		<th>Description</th>
    		<th>Date</th>
    		<th>Image</th>
    		<th>Price</th>
    		<th>Actions</th>
                </tr> 
    	</thead>
	    <?php foreach ($this->all_concerts as $concert): ?>
		<tr>
		    <td><?= $concert['id'] ?></td>
		    <td><?= $concert['description'] ?></td>
		    <td><?= $concert['date'] ?></td>
		    <td><img src="/public/images/concerts/<?= $concert['image'] ?>"></td>
		    <td><?= $concert['price'] ?></td>
		    <td><a href="/admin/concerts/edit/<?= $concert['id'] ?>">Edit</a>
			<a href="/admin/concerts/delete/<?= $concert['id'] ?>">Delete</a>
		    </td>
		</tr>
	    <?php endforeach; ?>
        </table>
    <?php endif; ?>
</div>