<?php

if ( ! function_exists('array_add'))
{

    /**
     * Add an element to an array using 'dot' notation if it doesn't exist
     *
     * @param array $array
     * @param string $key
     * @param mixed $value
     * @return array
     */
	function array_add(array $array, string $key, $value):array
	{
		if (is_null(get($array, $key)))
		{
			set($array, $key, $value);
		}

		return $array;
	}
}