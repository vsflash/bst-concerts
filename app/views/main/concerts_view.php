<?php if($this->all_concerts):?>
    <table>
        <tr>
            <th>Description</th>
            <th>Date</th>
            <th>Image</th>
            <th>Price</th>
            <th>Actions</th>
        </tr> 
    <?php foreach($this->all_concerts as $concert):?>
        <tr>
            <td><?= $concert['description'] ?></td>
            <td><?= $concert['date'] ?></td>
            <td><img src="../public/images/concerts/<?= $concert['image'] ?>"></td>
            <td><?= $concert['price'] ?></td>
            <td>
                <form method="post" action="/concerts/order">
                    <input type="hidden" value='<?= $concert['id'] ?>' name='id'>
                    <button type="submit">Order</button>
                </form>
            </td>
        </tr>
   <?php endforeach;?>
    </table>
<?php endif; 