<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * warehouse model
 */
class Model extends CI_Model
{
  public function get_all_users()
  {
    return $this->db->get_where('perang_coding_user')->result_array();
  }
  public function get_user($email)
  {
    return $this->db->get_where('perang_coding_user', ['email' => $email], 1)->row();
  }
  public function add_user($username, $email)
  {
    $this->db->insert('perang_coding_user', [
      'username' => $username,
      'email' => $email,
    ]);

    if ( $this->db->affected_rows() ) {
      return $this->db->insert_id();
    }
  }
  public function get_jawaban($user_id, $nomor_soal)
  {
    return $this->db->get_where('perang_coding_jawaban', [
      'user_id' => $user_id,
      'nomor_soal' => $nomor_soal,
    ], 1)->row();
  }
  public function add_jawaban($user_id, $nomor_soal, $jawaban)
  {
    $this->db->insert('perang_coding_jawaban', [
      'user_id' => $user_id,
      'nomor_soal' => $nomor_soal,
      'jawaban' => $jawaban,
      'timestamp' => date('Y-m-d H:i:s'),
    ]);
  }
  public function update_jawaban($user_id, $nomor_soal, $jawaban)
  {
    $this->db->where('user_id', $user_id);
    $this->db->where('nomor_soal', $nomor_soal);
    $this->db->update('perang_coding_jawaban', [
      'user_id' => $user_id,
      'nomor_soal' => $nomor_soal,
      'jawaban' => $jawaban,
      'timestamp' => date('Y-m-d H:i:s'),
    ]);
  }
  public function apa_jawaban_benar($nomor_soal)
  {
    $CI = &get_instance();
    $data = $CI->db->get_where('perang_coding_jawaban', [
      'user_id' => $CI->session->userdata('user_id'),
      'nomor_soal' => $nomor_soal,
    ], 1)->row_array();

    if (!empty($data)) {
      if ( $data['salah_benar'] == 'benar' ) return true;
    }
    return false;
  }

  public function apa_sudah_dijawab($nomor_soal)
  {
    $CI = &get_instance();
    $data = $CI->db->get_where('perang_coding_jawaban', [
      'user_id' => $CI->session->userdata('user_id'),
      'nomor_soal' => $nomor_soal,
    ], 1)->num_rows();

    if (!empty($data)) {
      return true;
    }
  }




  
  public function get_all_jawaban_benar($user_id = null, $limit)
  {
    if ( $user_id != null ) {
      $this->db->where('user_id', $user_id);
    }
    if ( isset($limit) ) {
      $this->db->limit($limit);
    }
    $this->db->select('user_id, username, timestamp, nomor_soal');
    $this->db->from('perang_coding_jawaban');
    $this->db->join('perang_coding_user', 'perang_coding_user.id=perang_coding_jawaban.user_id', 'left');
    $this->db->where('salah_benar', 'benar');
    $this->db->order_by('timestamp', 'DESC');
    return $this->db->get()->result_array();
  }

}