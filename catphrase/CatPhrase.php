<?php

namespace catphrase;

/**
 * <b>CatPhrase:</b>
 * This class clean html tag and cat string using one limit
 * 
 * @copyright (c) 2013, Ngoma Tec, Mostarda Tec
 */

class CatPhrase
{
	public function __construct(private string $text, private int $limit = 100, private bool $clear = true) {

		// $this->exec();
	}

	public function exec(): string 
	{
		
		if($this->clear == true) {
			$this->text = strip_tags($this->text);
		}
		
		if(strlen($this->text) <= $this->limit) {
			return $this->text;
		}
		
		$limit_text = substr($this->text, 0, $this->limit);
		
		// reetornar a palavras de $text que vao desde 0 ate $ultimo
		return substr($this->text, 0, strrpos($limit_text, ' ')) . ' ...';
	}
	
}