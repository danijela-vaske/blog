<h2><?= $title ?></h2>
<br>
<?php foreach ($posts as $post): ?>
	<h3><?php echo $post['title']; ?></h3>
	<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small>
	<hr>
	<?php echo $post['body']; ?>
	<br>
	<br>
	<p><a class="btn btn-info" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read more...</a></p>
	<hr>
	<br>

<?php endforeach; ?>