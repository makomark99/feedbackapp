<?php
require_once 'databasehandler.inc.php';
  $sql="SELECT SATISFACTION, COUNT(ID) as rating_count FROM answers WHERE SATISFACTION != 0 AND SATISFACTION >= 1 AND SATISFACTION <= 4 GROUP BY SATISFACTION UNION ALL SELECT SATISFACTION, 0 as rating_count FROM (SELECT 1 as SATISFACTION UNION ALL SELECT 2 as SATISFACTION UNION ALL SELECT 3 as SATISFACTION UNION ALL SELECT 4 as SATISFACTION) t WHERE NOT EXISTS (SELECT 1 FROM answers r WHERE SATISFACTION = t.SATISFACTION) ORDER BY SATISFACTION DESC;";
  $result = mysqli_query($conn, $sql);
  $array_with_ratings=array();
  while ($row=mysqli_fetch_assoc($result)) {
      $array_with_ratings[] = $row['rating_count'];
  }
    ?>

<script>
  const data_array = <?php echo json_encode($array_with_ratings);?>
</script>