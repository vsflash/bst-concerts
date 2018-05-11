<form action="/admin/concerts/update" method="post">
    <label>
        <span>Date</span>
        <input type="datetime-local" name="date" value="<?= date_format(date_create($this->concert['date']), 'Y-m-d\TH:m') ?>" required>
    </label>
    <label>
        <span>Price</span>
        <input type="text" name="price" value="<?= $this->concert['price'] ?>" required>
    </label>
    <label>
        <span>Description</span>
        <textarea name="description"><?= $this->concert['description'] ?></textarea>
    </label>
    <input type="hidden" name="id" value="<?= $this->concert['id'] ?>">
    <input type="submit" name="send" value="Save">
</form>