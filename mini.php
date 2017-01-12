<?

class mini {
	// template 的所在位置
	public $template_dir = "" ;
	// template 編譯後存放的位置
	public $compiled_dir = "" ;
	// 定義一個 array 存放 assign 進來的變數
	public $data_arr = array() ;

	// 編譯文件的 funtion
	public function compile( $file ) {
		// 取得要編譯的 template 文件
		$tpl = file_get_contents(__DIR__.$this->template_dir."\\".$file) ;
		
		// 將 template 內容中的 { } 替換成 <?php echo 與 ;? > ，
		$tpl = str_replace( "{", "<? echo ", $tpl ) ;
		$tpl = str_replace( "}", ";?>", $tpl ) ;
		// 目前 {$title} 會變成 <? echo $title; ? >，但是我們要將變數都修改為全域變數 <? echo $this->data_arr['title']; ? > 
		// 之所以要換成 $this 是因為這個編譯好的 template 會在 function display 做 include
		$tpl = str_replace( "\$","\$this->data_arr['", $tpl ) ;
		$tpl = str_replace( ";","'];", $tpl ) ;

		// 將替換成 php 語法的 template 輸出到 complied 目錄，並建立成一個 php
		// 將檔名替換 .html 為 .php
		$file = str_replace(".html", ".php", $file) ;
		// 將內容輸出到 compiled_dir 中的 $file 
		file_put_contents(__DIR__.$this->compiled_dir."\\".$file, $tpl) ;

	}

	// 定義顯示 compiled 的 .php 的方法
	public function display( $file ) {
		// 編譯引入的 template 
		$this->compile($file) ;
		// 將引入的 template 檔案名稱的副檔名改為 .php
		$file = str_replace(".html", ".php", $file) ;
		// 導入 compile 好的
		include(__DIR__."\\".$this->compiled_dir."\\".$file) ;
	}

	// 定義存放變數的方法
	public function assign( $var, $data ) {
		$this->data_arr[$var] = $data ;
	}
}

?>