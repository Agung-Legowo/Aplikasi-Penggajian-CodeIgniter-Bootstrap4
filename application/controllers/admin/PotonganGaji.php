<?php 

class PotonganGaji extends CI_Controller{


	public function index()
	{
		$data['title'] = "Setting Potongan Gaji";
		$data['Pot_gaji'] = $this->PenggajianModel->get_data('Potongan_gaji')->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/PotonganGaji',$data);
		$this->load->view('templates_admin/footer');
	}

	public function tambahData()
	{
		$data['title'] = "Tambah Potongan Gaji";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/formPotonganGaji',$data);
		$this->load->view('templates_admin/footer');
	}

	public function tambahDataAksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE) {
			$this->tambahData();
		}else{
			$Potongan 		=$this->input->post('Potongan');
			$jml_Potongan 		=$this->input->post('jml_Potongan');

			$data=array(
				'Potongan' 		=>$Potongan,
				'jml_Potongan'  =>$jml_Potongan
			);

			$this->PenggajianModel->insert_data($data, 'Potongan_gaji');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
					  <strong>Data berhasil ditambahkan!</strong> 
					  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>');
					redirect('admin/PotonganGaji');

		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('Potongan', 'jenis potongan', 'required');
		$this->form_validation->set_rules('jml_Potongan', 'jumlah potongan', 'required');
	}
}


 ?>