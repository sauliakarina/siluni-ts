 public function exeAddPekerjaan() {

  		//pekerjaan pertama
  		//instansi ID pertama
  		if ($this->input->post('instansiID_1') == "") {
			$newInstansi = array(
				'nama_instansi' => $this->input->post('instansiBaru_1'),
				'jenis_instansi' => $this->input->post('skalaInstansi_1'),
				'prodiID' => $this->session->userdata('prodiID'),
			);
			$this->m_master->inputData($newInstansi,'instansi');
			$instansiID = $this->m_master->getInstansiByName($this->input->post('instansiBaru_1'))->id;
		} else {
			$instansiID = $this->input->post('instansiID_1');
			$data = array(
				"jenis_instansi" => $this->input->post('skalaInstansi_1')
			);
			$where = array('id' => $this->input->post('instansiID_1'));
			$this->m_master->updateData($where, $data, 'instansi');
		}
  		//pengguna pekerjaan pertama
		if ($this->input->post('pengguna_nama_1') != "") {
			//generate customID kuesioner
			$id_length = 8;
			$id_found = false;
			$possible_chars = "23456789BCDFGHJKMNPQRSTVWXYZ"; 
			while (!$id_found) {  
			    $customID = "";  
			    $i = 0;  
			    while ($i < $id_length) {  
			        $char = substr($possible_chars, mt_rand(0, strlen($possible_chars)-1), 1);  
			        $customID .= $char;   
			        $i++;   
			    }  
			    $where = array( 'customID' => $customID);
			    $cek = $this->m_master->cekData("kuesioner",$where)->num_rows();
			    if ($cek == 0) {
			    	$id_found = true;
			    }
			}  //tutup while
			$data = array(
				'pengguna_nama' => $this->input->post('pengguna_nama_1'),
				'divisi' => $this->input->post('divisi_1'),
				'pengguna_email' => $this->input->post('pengguna_email_1'),
				'pengguna_telepon' => $this->input->post('pengguna_telepon_1'),
				'prodiID' => $this->session->userdata('prodiID'),
				'id_instansi' => $instansiID,
				'penggunaID' => $customID
			);
			$this->m_master->inputData($data,'pengguna');
			$penggunaID = $this->m_pengguna->getPenggunaByCustomID($customID)->id;
		} elseif ($this->input->post('penggunaID_1') != "") {
			$penggunaID = $this->input->post('penggunaID_1');
		}
		//data pekerjaan pertama
		$data = array(
			'id_instansi' => $instansiID,
			'posisi' => $this->input->post('posisi_1'),
			'profil' => $this->input->post('profil_1'),
			'gaji' => $this->input->post('gaji_1'),
			'firstPekerjaan' => 'yes',
			'id_pengguna' => $penggunaID,
			'id_alumni' => $this->m_alumni->getAlumniByUserID($this->session->userdata('userID'))->id,
			'isiPekerjaan' => 'sudah_1'
		);
		//pekerjaan belum ada di db update or add
		if ($this->input->post('cekDB') == 'ada') {
			$where = array('id' => $this->input->post('id_1'));
			$this->m_master->updateData($where, $data, 'pekerjaan');
		} else {
			$this->m_master->inputData($data,'pekerjaan');
		}

		//pekerjaan 2 dst 
		/*if ($this->input->post('cek_2') == 'ada') {
			$instansiID_2 = $this->input->post('instansiID_2');
			$instansiBaru_2 = $this->input->post('instansiBaru_2');
			$skalaInstansi_2 = $this->input->post('skalaInstansi_2');
			$posisi_2 = $this->input->post('posisi_2');
			$profil_2 = $this->input->post('profil_2');
			$gaji_2 = $this->input->post('gaji_2');
			$penggunaID_2 = $this->input->post('penggunaID_2');
			$pengguna_nama_2 = $this->input->post('pengguna_nama_2');
			$pengguna_email_2 = $this->input->post('pengguna_email_2');
			$pengguna_telepon_2 = $this->input->post('pengguna_telepon_2');
			$divisi_2 = $this->input->post('divisi_2');
			$id_2 = $this->input->post('id_2');

			for ($i=0; $i < count($skalaInstansi_2); $i++) { 
				if ($instansiID_2[$i] != "") {
					$instansiID = $instansiID_2[$i];
					$data = array(
						"jenis_instansi" => $skalaInstansi_2[$i]
					);
					$where = array('id' => $instansiID_2[$i]);
					$this->m_master->updateData($where, $data, 'instansi');
				} elseif ($instansiBaru_2[$i] != "") {
					$newInstansi = array(
						'nama_instansi' => $instansiBaru_2[$i],
						'jenis_instansi' => $skalaInstansi_2[$i],
						'prodiID' => $this->session->userdata('prodiID'),
					);
					$this->m_master->inputData($newInstansi,'instansi');
					$instansiID = $this->m_master->getInstansiByName($instansiBaru_2)->id;
				}
				//pengguna pekerjaan kedua
				if ($pengguna_nama_2[$i] != "") {
					//generate customID kuesioner
					$id_length = 8;
					$id_found = false;
					$possible_chars = "23456789BCDFGHJKMNPQRSTVWXYZ"; 
					while (!$id_found) {  
					    $customID = "";  
					    $i = 0;  
					    while ($i < $id_length) {  
					        $char = substr($possible_chars, mt_rand(0, strlen($possible_chars)-1), 1);  
					        $customID .= $char;   
					        $i++;   
					    }  
					    $where = array( 'customID' => $customID);
					    $cek = $this->m_master->cekData("kuesioner",$where)->num_rows();
					    if ($cek == 0) {
					    	$id_found = true;
					    }
					}  //tutup while
					$data = array(
						'pengguna_nama' => $pengguna_nama_2[$i],
						'divisi' => $divisi_2[$i],
						'pengguna_email' => $pengguna_email_2[$i],
						'pengguna_telepon' => $pengguna_telepon_2[$i],,
						'prodiID' => $this->session->userdata('prodiID'),
						'id_instansi' => $instansiID,
						'penggunaID' => $customID
					);
					$this->m_master->inputData($data,'pengguna');
					$penggunaID = $this->m_pengguna->getPenggunaByCustomID($customID)->id;
				} elseif ($penggunaID_2[$i] != "") {
					$penggunaID = $penggunaID_2[$i];
				}

				//data pekerjaan kedua dst
				$data = array(
					'id_instansi' => $instansiID,
					'posisi' => $posisi_2[$i],
					'profil' => $profil_2[$i],
					'gaji' => $gaji_2[$i],
					'id_pengguna' => $penggunaID,
					'id_alumni' => $this->m_alumni->getAlumniByUserID($this->session->userdata('userID'))->id,
					'isiPekerjaan' => 'sudah_2'
				);
				$where = array('id' => $id_2[$i]);
				$this->m_master->updateData($where, $data, 'pekerjaan');

			} //for
		} //if pekerjaan 2 dst*/

		redirect('alumni/Beranda');
	}