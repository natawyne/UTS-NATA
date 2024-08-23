<?php

class About extends controller{
    public function index($nama = 'nata', $pekerjaan = 'mahasiswa', $umur = 20)
    {
     $this->view ('about/index');
    }

        public function page()
        {
        $this->view ('about/page');
    }
}