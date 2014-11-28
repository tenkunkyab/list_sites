<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
	class small_qry extends CI_Model{

		public function authenticate(user, pw){
			// run a query to check if the user exists
			echo 'inside authenticate';
			$this->query = $this->db->query("SELECT * FROM USERACCOUNT WHERE username = '$user' and pwd = md5('$pass');");
			if ($this->query->num_rows == 1){
				// user exists
				foreach($this->query->result() as $r){
					$data[] = $r;
				}
				print_r($data);
				//return $data;
			}else{

				return 0;

			}
		}


	}
?>