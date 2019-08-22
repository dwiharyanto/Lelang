<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Market extends CI_Controller {

	public function index()
	{
		$this->load->view('Market/index_market');
	}

	public function indexall()
	{
		$this->load->view('Market/index_all');
	}

	public function about()
	{
		$this->load->view('Market/index_about');
	}

	public function faq()
	{
		$this->load->view('Market/index_faq');
	}

	public function detailproduk()
	{
		$this->load->view('Market/detail_produk');
	}

	public function kategorilukisan()
	{
		$this->load->view('Market/index_lukisan');
	}

	public function kategorikriya()
	{
		$this->load->view('Market/index_kriya');
	}

	public function kategorigrafis()
	{
		$this->load->view('Market/index_grafis');
	}


	public function kategoriukiran()
	{
		$this->load->view('Market/index_ukiran');
	}

}