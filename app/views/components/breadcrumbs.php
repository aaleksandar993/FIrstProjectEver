<?php if (isset($_SESSION['uid'])): ?>


<ol class="breadcrumb mb-3 mt-1 shadow-sm bg-white">
  <li class="breadcrumb-item">Dashboard</li>
  <li class="breadcrumb-item active">
  	<?=ucwords($page);?>
  </li>
</ol>
<?php else: ?>

<?php endif?>