<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cookie;
use Carbon\Carbon;
use App\Printingsalesheader;
use DB;
use Datetime;
use App\Http\Requests\ValidasiOrderPlacement;

class OrderController extends Controller
{
    public function index(Request $request){
    	$cart = $request->cookie('cartdata');
    	return view('pages.orders.order-index', compact('cart'));
    }

    public function setCart(Request $request){
    	$all = $request->all();
		foreach ($all as $i => $item) {
			unset($item['deadline']);	
		}
    	$cart = json_encode($all);
      	return response('Cart Data Update!')->cookie('cartdata', $cart, 300);
    }

    public function addNewOrder(ValidasiOrderPlacement $request){
    	$cart = $request->all();
    	DB::table('printingsalesheader')->insert(
    		[
    			'customerID'=>38,
    			'salesTime'=>Carbon::now(),
    			'purchaseOrderID'=>'',
    			'deliveryNote'=>'; U/p. ',
    			'tempo'=>'1900-01-01',
    			'status'=>'SALE'
			]
		);
		$last = Printingsalesheader::orderBy('printingSalesID', 'DESC')
				->limit(1)
				->first();
		$lastID = $last['printingSalesID'];
		$details = [];
		$finishings = [];
		$files = [];
		foreach ($cart as $i => $data) {
			if(isset($data['deadline']))
			{
				$time_raw=strtotime($data['deadline']);
				$data['deadline']=date('Y-m-d H:i:s',$time_raw);
			}
			else
			{
				$data['deadline'] = '1900-01-01 00:00:00';
			}
			$data['description'] = $data['description']==null?'':$data['description'];
			$data['note'] = $data['note']==null?'':$data['note'];
			array_push($details,
				[
					'printingSalesID'=>$lastID,
					'printingType'=>$data['printtype'],
					'printingTitle'=>$data['printtitle'],
					'jobType'=>$data['jobtype'],
					'previewFile'=>'',
					'quantity'=>$data['quantity'],
					'quantityType'=>$data['quantitytype'],
					'inschiet'=>$data['inschiet'],
					'inschietType'=>$data['inschiettype'],
					'material'=>$data['bahan'],
					'paperSize'=>$data['paperwidth']."x".$data['paperlength'].' cm',
					'imageSize'=>$data['imagewidth']."x".$data['imagelength'].' cm',
					'sidePrint'=>$data['sideprint'],
					'totalPlat'=>$data['totalplat'],
					'description'=>$data['description'],
					'note'=>$data['note'],
					'hargaAsli'=>$data['material']+$data['ongkoscetak'],
					'hargaMaterial'=>$data['material'],
					'hargaOngkosCetak'=>$data['ongkoscetak'],
					'deadline'=>$data['deadline'],
					'printApproval'=>0,
					'printApprovalImage'=>'',
					'printApprovalSigner'=>'',
					'status'=>'none',
					'digitalCounter'=>0,
					'offsetCounter'=>0,
				]
			);
			foreach ($data['finishings'] as $j => $finishing) {
				array_push($finishings, 
					[
						'printingSalesID'=>$lastID,
						'printingType'=>$data['printtype'],
						'printingTitle'=>$data['printtitle'],
						'finishingType'=>$finishing['type'],
						'detail'=>isset($finishing['detail'])?$finishing['detail']:"",
						'note'=>'',
						'process'=>0,
					]
				);
			}
			foreach ($data['files'] as $j => $file) {
				$file['link'] = trim($file['link']);
				if ($file['link']!='')
				{
					array_push($files, 
						[
							'printingSalesID'=>$lastID,
							'printingType'=>$data['printtype'],
							'printingTitle'=>$data['printtitle'],
							'fileID'=>$j,
							'timeUpload'=>Carbon::now(),
							'fileName'=>$file['link'],
							'fileSize'=>0,
							'description'=>'',
							'deleted'=>0,
						]
					);
				}
			}
		}
		DB::table('printingsalesdetail')->insert($details);
		DB::table('printingsalesdetailfile')->insert($files);
		DB::table('printingsalesdetailfinishing')->insert($finishings);

		return response($lastID)->cookie('cartdata', $cart, 0.01);
    }
}
