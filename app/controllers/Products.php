<?php
    class Products extends Controller
    {
        public function __construct()
        {
            $this->ProductModel = $this->model('Product');
        }

        public function index()
        {
            $data = [
                'title' => 'products'
            ];
            $this->view('index', $data);
        }
    }
?>