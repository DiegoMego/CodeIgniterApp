<form class="form-inline" method="get">
  <input id="Employee_ID" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
  <button id="SearchEmployee" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
<?php foreach ($employees as $employee) {?>
  <div class="row boxing align-middle">
  <?php foreach ($employee as $attribute) { ?>
    <div class="col">
      <h3><?php echo $attribute; ?></h3>
    </div>
  <?php } ?>
  </div>
<?php } ?>
