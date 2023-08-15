<?php

echo '<pre>';
var_dump($_POST);
echo '</pre>';

$connection = require_once './connection.php';

$notes = $connection->getNotes();

$currentNote = [
    'id' => '',
    'title' => '',
    'description' => ''
];

if(isset($_GET['id'])){
    $currentNote = $connection->getNotesById($_GET['id']);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="app.css">
</head>

<body>
    <div>
        <form action="create.php" class="new-note" method="post">
            <input type="hidden" name="id" value="<?php echo $currentNote['id'] ?>">
            <input type="text" name="title" placeholder="Note title" autocomplete="off"
            value="<?php echo $currentNote['title'] ?>">
            <textarea name="description" cols="30" rows="4" placeholder="Note description">
                <?php echo $currentNote['description']?>
            </textarea>
            <button>
                <?php if(isset($currentNote['id'])): ?>
                Update Note
                <?php else: ?>
                New note
                <?php endif; ?>
            </button>
        </form>
        <div class="notes">
            <?php foreach ($notes as $note): ?>
                <div class="note">
                    <div class="title">
                        <a href="?id=<?php echo $note['id'] ?>">
                        <?php echo $note['title'] ?> </a>
                </div>
                <div class="description">
                    <?php echo $note['description'] ?>
                </div>
                <small><?php echo $note['create_date'] ?></small>
                <button class="close">X</button>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>