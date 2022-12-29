<?php
require_once 'databasehandler.inc.php';
$sql="SELECT SATISFACTION, COUNT(ID) as rating_count FROM answers WHERE SATISFACTION != 0 AND SATISFACTION >= 1 AND SATISFACTION <= 4 GROUP BY SATISFACTION UNION ALL SELECT SATISFACTION, 0 as rating_count FROM (SELECT 1 as SATISFACTION UNION ALL SELECT 2 as SATISFACTION UNION ALL SELECT 3 as SATISFACTION UNION ALL SELECT 4 as SATISFACTION) t WHERE NOT EXISTS (SELECT 1 FROM answers r WHERE SATISFACTION = t.SATISFACTION) ORDER BY SATISFACTION DESC;";
 $result = mysqli_query($conn, $sql);
 $array_with_ratings=array();
 while ($row=mysqli_fetch_assoc($result)) {
     $array_with_ratings[] = $row['rating_count'];
 }
 $sql2="SELECT FROM_WHERE, COUNT(ID) as heared FROM answers WHERE FROM_WHERE != 0 AND FROM_WHERE >= 1 AND FROM_WHERE <= 3 GROUP BY FROM_WHERE UNION ALL SELECT FROM_WHERE, 0 as heared FROM (SELECT 1 as FROM_WHERE UNION ALL SELECT 2 as FROM_WHERE UNION ALL SELECT 3 as FROM_WHERE) t WHERE NOT EXISTS (SELECT 1 FROM answers r WHERE FROM_WHERE = t.FROM_WHERE) ORDER BY FROM_WHERE DESC;";
 $result2=mysqli_query($conn, $sql2);
 $array_from_where=array();
 $i=0;
 while ($row2=mysqli_fetch_assoc($result2)) {
     $array_from_where[] = $row2['heared'];
     echo $array_from_where[$i]."; ";
     $i++;
 } ?>
<script>
	let data_array = <?php echo json_encode($array_with_ratings);?>
</script>
<script>
	let data_array2 = <?php echo json_encode($array_from_where);?>
</script>