<?php
?>
<div class="gallery">
    <div>
        <h1>Добавленные изображения по убыванию количества просмотров:</h1>

        <?php foreach ($images as $imageId): ?>
            <div>
                <a href = "/?controller=image&action=showImage&id=<?= $imageId['id'] ?>">
                    <img class="galleryImage" width="50" src = "i/min/<?= $imageId['name']; ?>">
                </a>
            </div>
        <?php endforeach; ?>
    </div>

    <div>
        <form action="/?controller=gallery&action=gallery" method="POST" enctype="multipart/form-data">
            <label for="loadImage">Загрузить новую картинку:</label>
            <input id="loadImage" type="file" name="image" />
            <input type="submit" value = 'Загрузить изображение'>
        </form>
    </div>
</div>