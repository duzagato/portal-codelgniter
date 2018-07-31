<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo  form_open('news/create'); ?>
    Título: 
    <input type="text" name="title" /><br><br>

    Texto:
    <textarea name="text" cols="30" rows="10"></textarea><br><br>

    <input type="submit" value="salvar" />
</form>