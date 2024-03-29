<?php 

class Pengguna_m extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->data['table_name']	= 'user';
		$this->data['primary_key']	= 'id_user';
	}

	public function login($data)
	{
		$pengguna = $this->get_row(['username' => $data['username'], 'password' => $data['password']]);
		if (isset($pengguna))
		{
			$this->session->set_userdata([
				'id_pengguna' 	=> $pengguna->id_user,
				'username'		=> $pengguna->username,
				'id_role'		=> $pengguna->role,
				'bagian'		=> $pengguna->bagian
			]);
			return $pengguna;
		}

		return null;
	}
}