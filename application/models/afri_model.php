<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class afri_model extends CI_Model{
public function validate(){
	 $this->db->where('name',$this->input->post('name'));
	 $this->db->where('lastname',$this->input->post('last'));
	 $this->db->where('email',$this->input->post('email'));
	 $query = $this->db->get('projectNew');
	  if($query->num_rows()==1){ 
		  return true;
	  }	
 }
public function get_records($name,$lastname,$email){
		$query = $this->db->get_where('projectnew', array('name' => $name, 'lastName' =>$lastname, 'email'=> $email        ) );
		if($query->num_rows() > 0){
			foreach($query->result() as $row){
	            $data[] = $row;
				return $data;
			}
		}
 }
 public function show_records(){
	   $id = array(
	  	    'id'=>$this->db->insert_id());
		$query = $this->db->get_where('recordinfo',$id);
		if($query->num_rows() > 0){
			foreach($query->result() as $row){
	            $data[] = $row;
				return $data;
			}
		}
 }
 
 function getLast(){

     $query ="select * from recordinfo order by id DESC limit 1";

     $res = $this->db->query($query);

     if($res->num_rows() > 0) {
            foreach($res->result() as $last){
				$data[]= $last;
				return $data; 
			}
    }
  }
public function add_record($data){
		$this->db->insert('recordinfo',$data);
		return;
 }
public function update_selected(){
		$this->db->where('id',$this->uri->segment(3));
		$query =$this->db->get('recordinfo');
		return $query->result();
 }
public function update_record($data){
		$this->db->where('id',$this->uri->segment(3));
		$this->db->update('recordinfo',$data);
 }
public function delete_row(){
	$this->db->where('id',$this->uri->segment(3));
	$this->db->delete('recordinfo');

	}
	public function allRecord(){
		
		$query =$this->db->get('recordinfo');
		return $query->result();
	}
	
	public function find_selected($name,$ref){
		
		$find =array(
		'sendername'=>$name,
		'reference'=>$ref
		
		);
		$this->db->where($find);
		$query =$this->db->get('recordinfo');
		return $query->result();
	}
	
		public function search_selected($rname,$sname,$ref){
		
		/*$find =array(
		'sendername'=>$sname,
		'recievername'=>$rname,
		'reference'=>$ref
		
		);*/
		$this->db->where('sendername',$sname);
		$this->db->where('recievername',$rname);
		$this->db->where('reference',$ref);
		$query =$this->db->get('recordinfo');
		return $query->result();
	}
}


?>