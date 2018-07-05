<div class="container-fluid">
    <div class="row justify-content-end">
	<div class="col-3">
	    Filters:
	    <?php if ($this->orders_filters): ?>
		<?php foreach ($this->orders_filters as $filter): ?>
		    <a class="btn btn-primary <?= $filter === $_SESSION['filter'] ? 'active' : '' ?>" href="/admin/orders/filter/<?= $filter ?>"><?= ucfirst($filter) ?></a>
		<?php endforeach; ?>
	    <?php endif; ?>
	</div>
    </div>
    <?php if ($this->all_orders): ?>
        <table class="table mt-3">
	    <thead class="thead-dark">
            <tr>
    	    <th>ID</th>
    	    <th>Name</th>
    	    <th>Phone</th>
    	    <th>Count of tickets</th>
    	    <th>Description of concert</th>
    	    <th>Status</th>
    	    <th>Actions</th>
            </tr>
	    </thead>
	    <?php foreach ($this->all_orders as $order): ?>
		<tr>
		    <td><?= $order['id'] ?></td>
		    <td><?= $order['name'] ?></td>
		    <td><?= $order['phone'] ?></td>
		    <td><?= $order['count_of_tickets'] ?></td>
		    <td><?= $order['description'] ?></td>
		    <td><?= $order['status'] ?></td>
		    <td>
			<a href="/admin/orders/proceed/<?= $order['id'] ?>">Close order</a>
		    </td>
		</tr>
	    <?php endforeach; ?>
        </table>
	<?php endif;
    ?>
</div>