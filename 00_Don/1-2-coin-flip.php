<style>
  .coin {
    background: #999999;
    color: #333333;
    border-radius: 50%;
    padding: 50px;
    text-align: center;
    font-size: 2rem;
    font-weight: bold;
    width: 50px;
  }
</style>

<?php

function flip()
{
  // Challenge: define this function
  $side = rand(0, 1);
  if ($side < 1) {
    return "Heads";
  }
  return "Tails";
}

function count_flips($flips_count)
{
  $heads_count = 0;
  $tails_count = 0;
  for ($i = 0; $i < $flips_count; $i++) {
    $side = rand(0, 1);
    if ($side < 1) {
      $heads_count++;
    } else {
      $tails_count++;
    }
  }
  return "Out of $flips_count flips, there were $heads_count heads and $tails_count tails.";
}
?>

<div class="coin">
  <?php echo flip(); ?>
</div><br />
<div>
  <?php echo count_flips(1000); ?>
</div>