<?php
class Htmltopdf_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
        $this->load->database(); // Memuat database di dalam model
    }

	function fetch()
	{
		$this->db->order_by('id', 'ASC');
        return $this->db->get('users');
	}

function fetch_single_details($user_id)
{
    $this->db->where('id', $user_id);
    $data = $this->db->get('users');
	$output = '<div width="100%" style="margin-top:90px">';
    foreach ($data->result() as $row) {
		$address = $row->address;
		$addressParts = explode(',', $address);
		if (count($addressParts) == 3) {
			$street = $addressParts[0];
			$city = $addressParts[1];
			$province = $addressParts[2];
		} else {
			$street = $addressParts[0];
			$city = $addressParts[0];
			$province = $addressParts[0];
		}

		// Mengubah format date_birth
		$dateOfBirth = date("d F Y", strtotime($row->date_birth));

        $output .= '
		<div style="text-align: center; position: relative;">
			<h1 style="position: absolute; top: -90; left: 50%; transform: translateX(-50%);">Provinsi ' . $province . '</h1>
			<h1 style="position: absolute; top: -60; left: 50%; transform: translateX(-50%);">Kota ' . $city . '</h1>
		</div>

		<p><span class="attribute">Nama</span> <span class="value">: </span>' . strtoupper($row->name) . '</p>
		<p><span class="attribute">Tempat/Tgl Lahir</span><span class="value">: </span>' . strtoupper($row->place_of_birth) . ', ' . strtoupper($dateOfBirth) . '</p>
		<p><span class="attribute">Alamat</span><span class="value">: </span>' . strtoupper($street) . '</p>
        ';
    }
    $output .= '</div>';
    return $output;
}

}

?>