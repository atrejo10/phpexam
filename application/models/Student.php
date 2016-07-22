<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Model
{

	public function add_student($data)
	{
		$query="INSERT INTO students
						(first_name,
						alias,
						email,
						password,
						created_at,
						updated_at,
						date
							)
						VALUES (?,?,?,?,NOW(),NOW(),?)";

		$values=array(
			$data['first_name'],
			$data['alias'],
			$data['email'],
			$data['password'],
			$data['date_picker']
			);

		$this->db->query($query,$values);
	}


public function log_in($data)
	{
		$query="SELECT * FROM students WHERE students.password=? AND students.email=?";

		$values=array(
			$data['password'],
			$data['email']
			);

		return $this->db->query($query,$values)->row_array();

	}
	public function get_all(){
		$query="SELECT * FROM students.students";
	return $this->db->query($query)->result_array();
	}
	public function poke_student($id){
		$query="UPDATE students SET students.poke = students.poke + 1 WHERE students.id = $id";
	 	$this->db->query($query,$id);
	}
	public function display_poke(){
		$query="select students.poke FROM students";
		return $this->db->query($query)->row_array();
	}
	public function who_poked_you(){
		$query="SELECT students.id, students.student2_id, students.first_name, students.poke FROM students.students";
		return $this->db->query($query)->result_array();

	}



}
