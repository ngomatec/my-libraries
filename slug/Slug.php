<?php

namespace slug;

/**
 * <b>Slug:</b>
 * This class convert any phrase slug format
 *
 * @copyright (c) 2013, Ngoma Tec, Mostarda Tec
 */

class Slug
{

	public function __construct(private string $phrase) {
	}

	public function exec() {

 		$phrase = strtolower( preg_replace("/[^a-zA-Z0-9-]/", "-", strtr(utf8_decode(trim($this->phrase)), utf8_decode("áàãâéêíóôõúüñçÁÀÃÂÉÊÍÓÔÕÚÜÑÇ"),"aaaaeeiooouuncAAAAEEIOOOUUNC-")) );
        	$phrase = implode("-",explode("---",trim($phrase,"-")));
        	$phrase = implode("-",explode("--",trim($phrase,"-")));

        	return $phrase;

	}

}

