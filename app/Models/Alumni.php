<?php

namespace App\Models;
// namespace App;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{

    protected $table = 'alumnis';
    protected $fillable = [
        'id_user',
        'nama',
        'nik',
        'tempat_lahir',
        'tgl_lahir',
        'nomor_wa',
        'agama',
        'jenis_kelamin',
        'alamat',
        'kota', '
        provinsi',
        'kode_pos',
        'rt',
        'rw',
        'kelurahan',
        'kecamatan',
        'kode_prodi'
    ];

    public static function getAllAlumni()
    {
        return self::all();
    }

    public static function tambahDataAlumni($data)
    {
        return self::create($data);
    }

    public function deleteDataAlumni($id)
    {
        $alumni = Alumni::find($id);

        if (!$alumni) {
            return response()->json(['message' => 'Alumni not found'], 404);
        }

        $alumni->delete();

        return response()->json(['message' => 'Alumni deleted successfully'], 200);
    }

    // public function __construct()
    // {
    //     $this->token = config('values.accessToken');
    // }
    // public function tambahDataMenu()
    // {
    //     $data = [
    //         "menu" => $this->input->post('menu', true)
    //     ];
    //     $this->db->insert('user_menu', $data);
    // }

    // public function hapusDataMenu($id)
    // {
    //     //  $this->db->where('nim', $nim);
    //     $this->db->delete('user_menu', ['id' => $id]);
    // }

    // public function getMenuById($id)
    // {
    //     return $this->db->get_where('user_menu', ['id' => $id])->row_array();
    // }

    // public function editDataMenu($id)
    // {
    //     $data = [
    //         "menu" => $this->input->post('menu', true)
    //     ];
    //     $this->db->where('id', $id);
    //     $this->db->update('user_menu', $data);
    // }

    // public function editDataSubMenu($id)
    // {
    //     $data = [
    //         "title" => $this->input->post('title', true),
    //         "url" => $this->input->post('url', true),
    //         "icon" => $this->input->post('icon', true)
    //     ];
    //     $this->db->where('id', $id);
    //     $this->db->update('user_sub_menu', $data);
    // }

    // public function getSubMenu()
    // {
    //     $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
    //                 FROM `user_sub_menu` JOIN `user_menu`
    //                   ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
    //     ";
    //     return $this->db->query($query)->result_array();
    // }

    // public function tambahDataSubMenu()
    // {
    //     $data = [
    //         "title" => $this->input->post('title', true),
    //         "menu_id" => $this->input->post('menu_id', true),
    //         "url" => $this->input->post('url', true),
    //         "icon" => $this->input->post('icon', true),
    //         "is_active" => $this->input->post('is_active', true)
    //     ];
    //     $this->db->insert('user_sub_menu', $data);
    // }

    // public function hapusDataSubMenu($id)
    // {
    //     //  $this->db->where('nim', $nim);
    //     $this->db->delete('user_sub_menu', ['id' => $id]);
    // }
    use HasFactory;
}