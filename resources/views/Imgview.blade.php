<Doctype html>
    <html>
        <body>
            <h3>Image Size</h3>
            <form action ="/image-resize" method="POST" enctype ="multipart/form-data">@csrf
            <div class="form-group">
                <input type="file" name="file" class="file" required>
            </div><br>
            <div class="form-group">
            Height<input type="number" name="height" placeholder="Height in Pixels" required>
            Width:<input type="number" name="width" placeholder="Width in Pixels" required>
            </div><br>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
        </body>
    </html>

