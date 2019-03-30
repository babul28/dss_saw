<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('dataInput');
    }

    public function index()
    {
        $data = [
            'data' => getDataInput($this->db->order_by('total', 'DESC')
                ->get('data_v')
                ->result())
        ];

        $this->load->view('Admin/header', [
            'header' => 'Admin | Dashboard'
        ]);
        $this->load->view('Admin/dashboard', $data);
        $this->load->view('Admin/footer');
    }

    public function data()
    {
        $data = [
            'surveys' => getDataInput($this->db->get('data_survey')
                ->result()),
            'fuzzys' => $this->db->get('data_fuzzy')
                ->result()
        ];

        $this->load->view('Admin/header', [
            'header' => 'Admin | Data'
        ]);
        $this->load->view('Admin/data', $data);
        $this->load->view('Admin/footer');
    }

    public function analisis()
    {
        $data = [
            'data_rs' => $this->db->get('data_r')
                ->result(),
            'data_vs' => $this->db->order_by('total', 'DESC')->get('data_v')
                ->result()
        ];

        $this->load->view('Admin/header', [
            'header' => 'Admin | Analisis Data'
        ]);
        $this->load->view('Admin/analisis', $data);
        $this->load->view('Admin/footer');
    }

    public function create()
    {
        $config = [
            [
                'field' => 'lokasi',
                'label' => 'Lokasi',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'Htanah',
                'label' => 'Harga Tanah',
                'rules' => 'trim|required|numeric'
            ],
            [
                'field' => 'Jgudang',
                'label' => 'Jarak Gudang',
                'rules' => 'trim|required|numeric'
            ],
            [
                'field' => 'Tpersaingan',
                'label' => 'Tingkat Persaingan',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'investasi',
                'label' => 'Investasi',
                'rules' => 'trim|required|numeric|greater_than_equal_to[0]|less_than_equal_to[100]'
            ],
            [
                'field' => 'Jpeternak',
                'label' => 'Jumlah Peternak',
                'rules' => 'trim|required|greater_than_equal_to[0]|numeric'
            ]
        ];

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == false) {
            $this->form_validation->set_error_delimiters('<span class="text-danger text-xs">', '</span>');

            $this->load->view('Admin/header', [
                'header' => 'Admin | Tambah Data'
            ]);
            $this->load->view('Admin/create');
            $this->load->view('Admin/footer');
        } else {
            $this->db->insert('data_fuzzy', dataToFuzzy($this->input->post()));
            $this->db->insert('data_survey', dataInput($this->input->post()));

            if ($this->db->affected_rows()) {
                $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Input data sukses!</div>');
                redirect('admin/data');
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Input data gagal!</div>');
                redirect('admin/data');
            }
        }
    }
}
