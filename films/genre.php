<?php
	
	$q2 = $connection->query("SELECT * FROM films WHERE genre=\"$genre\" ORDER BY year");

	while($row = $q2->fetch_object()){
		$title = $row->title;
		$country = $row->country;
		$genre = $row->genre;
		$year = $row->year;
		$url = $row->url;
?>
	<div class = "out">
		<img src=<?php echo "$url"; ?> alt="">
		<div class = "in">
			<?php echo "<span>Title: $title</span>"; ?>
			<?php echo "<span>Country: $country</span>"; ?>
			<?php echo "<span>Genre: $genre</span>"; ?>
			<?php echo "<span>Year: $year</span>"; ?>
		</div>
		<button class="cart" id ="cart">
			SHOW
		</button>
	</div>
<?php 
}
?>