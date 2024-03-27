<?php

class About {
    public function index() {
        echo "Anda Masuk Class About dan Method Index";
    }

    public function page($name = 'Andre', $pekerjaan = 'programmer'){
        echo "Halo, nama saya $name, saya adalah seoramg $pekerjaan";
    }
}