<div class="container">
  <div class="row">
    <?php foreach ($news as $news_item): ?>
    <div class="col-sm-6 mt-5">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><?php echo $news_item['title']; ?></h5>
          <p class="card-text"> <?php echo $news_item['text']; ?></p>
          <a href="<?php echo site_url('news/'.$news_item['slug']); ?>" class="btn btn-primary">View article</a>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>
