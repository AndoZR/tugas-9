<html>
<head>
    <title>Tugas ke-9 Mentoring</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container box">
		<br />
		<h3 align="center">Tugas Mentoring ke-9, DOMPDF</h3>
		<h4>Dibuat Oleh, <br> Nama : Ando Zamhariro Royan <br> Divisi : FSWD <br> ID : 6711301</h4>
		<br />
		<?php
		if(isset($users_data))
		{
		?>
		<div class="table-responsive">
			<table class="table table-striped table-bordered">
				<tr>
					<th>Users ID</th>
					<th>Nama</th>
					<th>Tanggal Lahir</th>
					<th>Tempat Lahir</th>
					<th>Alamat</th>
					<th>Detail</th>
					<th>PDF</th>
				</tr>
			<?php
			foreach($users_data->result() as $row)
			{
				echo '
				<tr>
					<td>'.$row->id.'</td>
					<td>'.$row->name.'</td>
					<td>'.$row->date_birth.'</td>
					<td>'.$row->place_of_birth.'</td>
					<td>'.$row->address.'</td>
					<td><a href="'.base_url().'index.php/htmltopdf/details/'.$row->id.'">View</a></td>
					<td><a href="'.base_url().'index.php/htmltopdf/pdfdetails/'.$row->id.'">View in PDF</a></td>
				</tr>
				';
			}
			?>
			</table>
		</div>
		<?php
		}
		if(isset($users_details))
		{
			echo $users_details;
		}
		?>
	</div>
</body>
</html>
