<?php 
class Home extends Controller{
    function SayHi(){
        $teo = $this->model("SinhVienModel");

        echo $teo->GetSV();
    }

    function Show($a, $b){

        // model
        $teo = $this->model("SinhVienModel");
        $tong = $teo->Tong($a, $b);

        // view
        $this->view("aodep", [
            "Page" => "news",
            "Number" => $tong,
            "Mau"   => "red",
            "SV" => $teo->SinhVien(),
        ]);
    }
}
?>