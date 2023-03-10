<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged();
    }

    public function index()
    {
        $email = $this->session->userdata('email');
        $data['user'] = $this->db->get_where('admin', ['email' => $email])->row_array();
        $data['admin'] = $this->db->get('admin')->result_array();
        $data['title'] = 'Export Laporan';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('export/index', $data);
        $this->load->view('templates/footer');
    }

    public function export()
    {
        $jurusan = $this->input->post('jurusan');
        $status = $this->input->post('status');
        if ($jurusan && $status) {
            $query = "SELECT * FROM `alumni` WHERE `jurusan` = '$jurusan' AND `keg_set_lulus` = '$status'";
        } else if ($jurusan) {
            $query = "SELECT * FROM `alumni` WHERE `jurusan` = '$jurusan'";
        } else if ($status) {
            $query = "SELECT * FROM `alumni` WHERE `keg_set_lulus` = '$status'";
        } else {
            $query = "SELECT * FROM `alumni`";
        }
        $data['admin'] = $this->db->query($query)->result_array();
        $data['jurusan'] = $jurusan;
        $data['status'] = $status;
        if ($this->input->post('excel')) {
            require(APPPATH . 'PHPExcel/Classes/PHPExcel.php');
            require(APPPATH . 'PHPExcel/Classes/PHPExcel/Writer/Excel2007.php');

            $excel = new PHPExcel();
            $excel->getProperties()->setCreator('Tamam Muhammad');
            $excel->getProperties()->setLastModifiedBy('Tamam Muhammad');

            $excel->setActiveSheetIndex(0);

            if ($jurusan) {
                $excel->getActiveSheet()->setCellValue('A1', 'Jurusan :');
            }
            if ($status) {
                $excel->getActiveSheet()->setCellValue('A2', 'Angkatan :');
            }
            $excel->getActiveSheet()->setCellValue('A4', 'No. ');
            $excel->getActiveSheet()->setCellValue('B4', 'Nama');
            $excel->getActiveSheet()->setCellValue('C4', 'Jenis Kelamin');
            $excel->getActiveSheet()->setCellValue('D4', 'Alamat');
            $excel->getActiveSheet()->setCellValue('E4', 'No. Telp');
            $excel->getActiveSheet()->setCellValue('F4', 'Tahun Angkatan');
            $excel->getActiveSheet()->setCellValue('G4', 'Nama Industri');
            $excel->getActiveSheet()->setCellValue('H4', 'Rating SMKSA');
            $excel->getActiveSheet()->setCellValue('I4', 'Saran SMKSA');
            $excel->getActiveSheet()->setCellValue('J4', 'Tanggal Daftar');
            $excel->getActiveSheet()->setCellValue('K4', 'Sosial Media');
            if (!$jurusan) {
                $excel->getActiveSheet()->setCellValue('L4', 'Jurusan');
            }
            if (!$status) {
                $excel->getActiveSheet()->setCellValue('M4', 'Kegiatan Setelah Lulus');
            }

            $baris = 5;
            $no = 1;

            foreach ($data['admin'] as $a) {
                if ($jurusan) {
                    $excel->getActiveSheet()->setCellValue('B1', $a['jurusan']);
                }
                if ($status) {
                    $excel->getActiveSheet()->setCellValue('B2', $a['keg_set_lulus']);
                }
                $excel->getActiveSheet()->setCellValue('A' . $baris, $no++);
                $excel->getActiveSheet()->setCellValue('B' . $baris, $a['nama_alumni']);
                $excel->getActiveSheet()->setCellValue('C' . $baris, $a['jenis_kelamin']);
                $excel->getActiveSheet()->setCellValue('D' . $baris, $a['alamat']);
                $excel->getActiveSheet()->setCellValue('E' . $baris, $a['no_telp']);
                $excel->getActiveSheet()->setCellValue('F' . $baris, $a['tahun_lulus']);
                $excel->getActiveSheet()->setCellValue('G' . $baris, $a['nama_industry']);
                $excel->getActiveSheet()->setCellValue('H' . $baris, $a['rating_smksa']);
                $excel->getActiveSheet()->setCellValue('I' . $baris, $a['saran_smksa']);
                $excel->getActiveSheet()->setCellValue('J' . $baris, $a['tanggal_daftar']);
                $excel->getActiveSheet()->setCellValue('K' . $baris, $a['sosmed']);
                if (!$jurusan) {
                    $excel->getActiveSheet()->setCellValue('L' . $baris, $a['jurusan']);
                }
                if (!$status) {
                    $excel->getActiveSheet()->setCellValue('M' . $baris, $a['keg_set_lulus']);
                }

                $baris++;
                if ($jurusan && $status) {
                    $filename = $a['jurusan'] . ' - ' . $a['keg_set_lulus'] . ' - SMKSA.xlsx';
                    $excel->getProperties()->setTitle($a['jurusan'] . ' - ' . $a['keg_set_lulus']);
                } else if ($jurusan) {
                    $filename = $a['jurusan'] . ' - SMKSA.xlsx';
                    $excel->getProperties()->setTitle($a['jurusan']);
                } else if ($status) {
                    $filename = $a['keg_set_lulus'] . ' - SMKSA.xlsx';
                    $excel->getProperties()->setTitle($a['keg_set_lulus']);
                } else {
                    $filename = 'Data Semua Alumni SMKSA.xlsx';
                    $excel->getProperties()->setTitle('SMK Syafii Akrom');
                }
            }

            ob_clean();
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment;filename="' . $filename . '"');
            header('Cache-Control: max-age=0');

            $writer = PHPExcel_IOFactory::createwriter($excel, 'Excel2007');
            $writer->save('php://output');
        } else if ($this->input->post('pdf')) {
            $this->load->view('pdf', $data);
            $papersize = 'Legal';
            $orientation = 'landscape';
            $html = $this->output->get_output();
            $this->dompdf->set_paper($papersize, $orientation);
            $this->dompdf->load_html($html);
            $this->dompdf->render();
            $this->dompdf->stream($jurusan . ' - ' . $tahun . ' - SMKSA.pdf', ['Attachment' => 0]);
        }
    }
}
