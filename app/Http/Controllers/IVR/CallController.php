<?php namespace App\Http\Controllers\IVR;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Call;

class CallController extends Controller {

	private $baseURL = 'http://homestead.app:8000/';
	private $ivrFolder = 'ivr/call/';
	private $appId = 'FJr2BHFFwVmWqQth';
	private $accessToken = 'SsEprKnpTu0mdh34';
	private $fields;

	// create a new call
	public function create($destination)
	{
		// input the call in the database
		$call = new Call;
		$call->destination = $destination;
		$call->save();

		// make the call
		$this->fields = [
			'app_id' => urlencode($this->appId),
			'access_token' => urlencode($this->accessToken),
			//'notify_url' => urlencode($this->baseURL.$this->ivrFolder.'intro/'.$destination),
			'dest' => urlencode($destination),
			// 'tag' => urlencode("randomtag"),
			// 'caller_id' => urlencode($callerId),
			'ringtime' => urlencode("10")
		];

		$this->execute ($this->fields, 'https://secure.hoiio.com/open/ivr/start/dial');
	}

	public function intro($destination)
	{
		// fetch data from cloud provider
		$status = \Input::get('status');
		$session = \Input::get('session');
		$txn_ref = \Input::get('txn_ref');

		// update the call data in the database
		$call = Call::where('destination', $destination)->orderBy('created_at', 'desc')->first();
		if ($status == 'success_ok') {
			$call->active = true;
			$call->txn_ref = $txn_ref;
			$call->session = $session;
			$call->save();

			// play something
			$this->fields = [
				'app_id' => urlencode($this->appId),
				'access_token' => urlencode($this->accessToken),
				'session' => urlencode($session),
				'msg' => urlencode('<speech language="zh-HK" gender="female">請稍等，我們正在處理您的訂單。</speech>'),
			];

			$this->execute ($this->fields, 'https://secure.hoiio.com/open/ivr/middle/play');
		}
	}






	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($destination)
	{
		// get active calls from that destination
		$session = Call::where('destination', $destination)->get();

		$fields = [
			'app_id' => urlencode($this->appId),
			'access_token' => urlencode($this->accessToken),
			'session' => urlencode($session),
			'force' => 'enabled'
			// 'notify_url' => urlencode("http://gotarot.com.hk/IVR/retention.php"),
			// 'tag' => urlencode("randomtag"),
		];

		$this->execute ($this->fields, 'https://secure.hoiio.com/open/ivr/start/dial');
	}

	public function execute ($fields, $url) {
		$fields_string = "";
		foreach($fields as $key => $value)
		$fields_string .= $key . '=' . $value . '&';
		$fields_string = rtrim($fields_string,'&');

		$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
			curl_exec($ch);
		curl_close($ch);
	}

}
