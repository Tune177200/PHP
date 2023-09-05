<?php 
class API_SinhVien extends Controller{
    public function DanhSach(){

        // Model 

        $sinhvien = $this->model("SinhVienModel");
        $sv = $sinhvien->Sinhvien();

        $mang = [];

        while($s = mysqli_fetch_array($sv)){
            array_push($mang, "1");
        }
        echo json_encode($mang);

    }
}

?>