<?php

class Validate extends ValidateCore
{
	/*returns if the tag weight field is valid. i.e 100,200,100,200,100,100,100,100,100,100,100,100. Number followed by comma*/
	public static function isTagWeight($tagWeights)
	{
		return empty($tagWeights)||preg_match("/(\s*\d+\s*,)*\s*\d+\s*/", $tagWeights);
	}
}

