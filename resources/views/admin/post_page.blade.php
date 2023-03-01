<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Post Page</title>
</head>
<body style="margin: 0; font-family: Arial, sans-serif; background: #121212; color: #fff; text-align: center;">
    <div style="background: #1e1e1e; padding: 20px; text-align: left; display: flex; justify-content: space-between; align-items: center;">
        <h2 style="margin: 0; color: #0d6efd;">Admin Panel</h2>
        <button style="background: #d9534f; color: #fff; border: none; padding: 10px 15px; cursor: pointer; border-radius: 5px;">Logout</button>
    </div>
    
    <div style="max-width: 600px; margin: 20px auto; background: #1e1e1e; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">
        <h3 style="color: #0d6efd;">Create a New Post</h3>



        <form action="{{url('add_post')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="title" style="display: block; text-align: left; margin-bottom: 5px;">Title:</label>
            <input type="text" id="title" name="title" style="width: 100%; padding: 10px; margin-bottom: 10px; border: none; border-radius: 5px;">
            
            <label for="description" style="display: block; text-align: left; margin-bottom: 5px;">description:</label>
            
            <textarea id="description" name="description" rows="5" style="width: 100%; padding: 10px; border: none; border-radius: 5px;"></textarea>


            <label for="image" style="display: block; text-align: left; margin-bottom: 5px;">image:</label>
            <input type="file" id="image" name="image" style="width: 100%; padding: 10px; margin-bottom: 10px; border: none; border-radius: 5px;">
            
            <button type="submit" style="background: #0d6efd; color: #fff; border: none; padding: 10px 15px; cursor: pointer; width: 100%; border-radius: 5px; margin-top: 10px;">Post</button>
        </form>
    </div>
</body>
</html>
