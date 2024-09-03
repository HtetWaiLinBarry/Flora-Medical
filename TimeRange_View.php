<?php 

include('connect.php');
include('sheader.php');
 ?>
 <form>
 	<table border="1" width=100% align="center">
 		<tr>
 			<th>Time Range ID</th>
 			<th>Start Time</th>
 			<th>End Time</th>
 			<th>Duration</th>
 			<th>Functions</th>
 		</tr>
 		<?php 
 		$select=mysqli_query($connection,"SELECT * FROM TimeRange");
 		$count=mysqli_num_rows($select);
 		for($i=0; $i < $count; $i++) {
 			$data=mysqli_fetch_array($select);
 			$tid=$data['TimeRangeID'];
 			$tstart=$data['StartTime'];
 			$tend=$data['EndTime'];
 			$duration=$data['Duration'];
 			echo "<tr>";
 			echo "<td>$tid</td>";
 			echo "<td>$tstart</td>";
 			echo "<td>$tend</td>";
 			echo "<td>$duration</td>";
 			echo "<td>
 			<a href='TimeRange_Update.php?tid=$tid'>Update</a> /
 			<a href='TimeRange_Delete.php?tid=$tid'>Delete</a>
 			</td>";
 			echo "</tr>";
 		}


 		 ?>
 	</table>
 </form>
