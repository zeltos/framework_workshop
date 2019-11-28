<div class="container">
  <br>
  <h2><?php echo $title; ?></h2>

  <?php echo validation_errors(); ?>

  <?php echo form_open('news/create'); ?>

      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" required>
      </div>

      <div class="form-group">
        <label for="text">Text</label>
       <textarea class="form-control" id="text" rows="3" name="text" required></textarea>
      </div>

    <button type="submit" class="btn btn-success">Create a News</button>

  </form>
</div>
