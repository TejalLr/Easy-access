<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Login</title>
  <link rel="stylesheet" href="style.css">
  </head>
  <body style="background-color: #E6E6FA">
    <header id="masthead" class="site-header col-sm-12" role="banner" style="background-color:		#9370DB;>

        <div class="site-branding col-md-6">
          <h2 class="alignleft" style="color:white">EASSY ACCESS</h2>
          <h2 class="alignright" style="color:white">Proud to be a Horizonite.</h2>

                  </div>

      <div class="social-header col-md-6">
              </div>

    </header><!-- #masthead -->

      </div>

<table>
<thead>
    <th>ID</th>
    <th>Filename</th>
    <th>size (in mb)</th>
    <th>Downloads</th>
    <th>Action</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['name']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['download']; ?></td>
      <td><a href="downloads.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>

</body>
</html>
