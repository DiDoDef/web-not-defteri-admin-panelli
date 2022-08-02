
<?php include "ust.php"; ?>
  <body>
    
<?php include "sidebar.php"; ?>

<div class="container py-3">
<?php 
$sonuc=mysqli_query($baglan,"SELECT * FROM note WHERE uye_id=".$_SESSION['uye_id']);
$sonuc1=mysqli_fetch_assoc($sonuc);
while($sonuc1) {
 ?>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">

            <div class="card-body">
              <p class="card-text"><?php echo $sonuc1["not_bilgi"] ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
               
              </div>
            </div>
          </div>
        </div>
	  </div>
<?php } ?>
    </div>
</main>

<?php include "alt.php"; ?>