<?php
class get {
	public $url;
	public function __construct(){
		$this->url = $_GET['url'];
	}
	public function getit()
	{
		$content = file_get_contents($this->url); //Lấy nội dung của Website
		$a = explode( '<div class="post">' , $content ); //
		$b = explode("</div>" , $a[1] ); // 
		$data = $b[0]; // Lấy nội dung chứa trong 2 div

		if(preg_match_all('/<a\s+href=["\']([^"\']+)["\']/i', $data, $links, PREG_PATTERN_ORDER))
			$all_hrefs = array_unique($links[1]);
		foreach($all_hrefs as $href)
		{
			echo $href."\n";
		}
	}
}
