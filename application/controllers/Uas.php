<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uas extends CI_Controller {

	public function index()
	{

		function get_CURL($url){

			$curl = curl_init();
			curl_setopt($curl, CURLOPT_URL, $url);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			$result = curl_exec($curl);
			curl_close($curl);
	
			return json_decode($result, true);
		}


		$result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UClvc6c04-xEYKFFyeP3yjKA&key=AIzaSyChxrVcbXO-NQT5230WMu2VWHSRBeSTfwQ');
		
		$data['youtubeProfilePic'] = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
		$data['channelName'] = $result['items'][0]['snippet']['title'];
		$data['description'] = $result['items'][0]['snippet']['description'];
		$data['subcribers'] = $result['items'][0]['statistics']['subscriberCount'];
		$data['publishedAt'] = $result['items'][0]['snippet']['publishedAt'];
		


		// video
		$result = get_CURL('https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=UClvc6c04-xEYKFFyeP3yjKA&maxResults=50&type=video&key=AIzaSyChxrVcbXO-NQT5230WMu2VWHSRBeSTfwQ&videoDuration=any');

		$data['video'] = $result['items'];

		$data['title'] = "Cinta Ulama";
		$this->load->view('templates/header', $data);
		$this->load->view('uas/index', $data);
		$this->load->view('templates/footer');
	}

	

}
