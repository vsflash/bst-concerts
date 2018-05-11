<form action="/admin/concerts/insert" method="post" enctype="multipart/form-data">
    <label>
        <span>Date</span>
        <input type="datetime-local" name="date" required>
    </label>
    <label>
        <span>Price</span>
        <input type="text" name="price" required>
    </label>
    <label>
        <span>Image</span>
        <input type="file" name="image">
    </label>
    <label>
        <span>Description</span>
        <textarea name="description"></textarea>
    </label>
    <input type="submit" name="send" value="Add">
</form>