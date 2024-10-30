<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <?= form_open('tasks/store')?>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" value="<?= $task['title'] ?? ''?>" name="title" id="title" class="form-control mb-2" placeholder="Write your title...">
                
                <label for="description">Description</label>
                <input type="text" value="<?= $task['description'] ?? ''?>" name="description" id="description" class="form-control" placeholder="Write your description...">
                
                <input type="hidden" value="<?= $task['id'] ?? ''?>" name="id" id="id" class="form-control" placeholder="Write your description...">
                
                <input type="submit" value="Save" class="btn btn-primary mt-2">
            </div>
        <?= form_close()?>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>