<!-- notes -->
<?php
session_start();

$hostname="db694050534.db.1and1.com";
$database="db694050534";
$username="dbo694050534";
$password="scqwaszx1!";

try {
	$objDb = new PDO('mysql:host=localhost;dbname=books', 'root', '');
	$objDb->exec('SET CHARACTER SET utf8');

	if (!isset($_SESSION['sort'])) {
		$_SESSION['sort']['by'] = 'dates';
		$_SESSION['sort']['ad'] = 'ASC';
	}

	$by = $_SESSION['sort']['by'];
	$ad = $_SESSION['sort']['ad'];

	$sql = "SELECT *
	FROM `events`
	ORDER BY `{$by}` {$ad}"; /*event ascending*/


	$statement = $objDb->query($sql);
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {

	echo 'There was a problem with the database';

}
?>


<div style="margin-top:100px"; class="row container-fluid">
  <div class="col-x-sm-12">

    <table class="table table-responsive" cellpadding="0" cellspacing="0" border="0" margin="0">
      <thead>
        <tr style="text-align: center;">
          <th><span class="sort<?php echo $by == 'image' ? ' '.strtolower($ad) : null; ?>" id="image">Image</span></th>
          <th><span class="sort<?php echo $by == 'event' ? ' '.strtolower($ad) : null; ?>" id="event">Event</span></th>
          <th><span class="sort<?php echo $by == 'category' ? ' '.strtolower($ad) : null; ?>" id="category">Genre</span></th>
          <th><span class="sort<?php echo $by == 'dates' ? ' '.strtolower($ad) : null; ?>" id="dates">Date</span></th>

        </tr>
      </thead>
      <?php if (!empty($result)) { ?>
        <tbody>
          <?php foreach($result as $row) { ?>
            <tr class= "blackbox">
              <td class= "blackbox"><?php echo $row['image']; ?></td>
              <td class= "blackbox"><?php echo $row['event']; ?></td>
              <td class= "blackbox"><?php echo $row['category']; ?></td>
              <td class= "blackbox"><?php echo $row['dates']; ?></td>

            </tr>
          <?php } ?>
        </tbody>
      <?php } ?>
    </table>

  </div>
</div>

<script src="js/core.js" type="text/javascript"></script>
