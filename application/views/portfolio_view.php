<p>
	<table class="bg-success">
		<tr class="bg-primary">
			<td>Год</td><td>Проект</td><td>Описание</td>
		</tr>
		<?php
			foreach($data as $row)
			{
				echo '<tr><td>'.$row['year'].'</td><td><a target="_blank" href="'.$row['url'].'">'.$row['url'].'</a></td><td>'.$row['description'].'</td></tr>';
			}
		?>
	</table>
</p>