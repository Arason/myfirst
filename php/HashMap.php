<?php
/*
simulate linkedhashmap
*/
Class LinkedHashMap{
	var $Hash_table;

	public function __construct() {
		$this->Hash_table = [];
	}

	public function put($key, $value)
	{
		if (!array_key_exists($key, $this->Hash_table)) {
		   $this->Hash_table[$key] = $value;
		   return null;
		} else {
		   $tempValue = $this->Hash_table[$key];
		   $this->Hash_table[$key] = $value;
		   return $tempValue;
		}
	 }
	 
	public function get($key) 
	{
		 if (array_key_exists($key, $this->Hash_table)) {
			 return $this->Hash_table[$key];
		 } else{
			 return null;
		 }
	 }

	public function remove($key) 
	{
		$temp_table = [];
		if (array_key_exists($key, $this->Hash_table)) {
			$tempValue = $this->Hash_table[$key];
			while ($curValue == current($this->Hash_table)) {
				if (!(key($this->Hash_table) == $key)){
					$temp_table[key($this->Hash_table)] = $curValue;
				}
				next($this->Hash_table);
			}
			$this->Hash_table = null;
			$this->Hash_table = $temp_table;
			return $tempValue;
		} else{
			return null;
		}
	}

	public function keys()
	{
	 	return array_keys($this->Hash_table);
	}

	public function values()
	{
	 	return array_values($this->Hash_table);
	}
	 
	public function putAll($map)
	{
	 	if(!$map->isEmpty()&& $map->size()>0){
	 		$keys = $map->keys();
	 		foreach($keys as $key){
	 			$this->put($key,$map->get($key));
	 		}
	 	}
	}

	public function removeAll()
	{
	  $this->Hash_table = null;
	  $this->Hash_table = [];
	}

	public function containsValue($value) 
	{
		while ($curValue = current($this->Hash_table)) {
			if ($curValue == $value) {
				reset($this->Hash_table);
				return true;
			}
			next($this->Hash_table);
		}
		reset($this->Hash_table);
		return false;
	}

	public function containsKey($key) 
	{
		if (array_key_exists($key, $this->Hash_table)) {
			return true;
		} else {
			return false;
		}
	}

	public function size() 
	{
		return count($this->Hash_table);
	}
	
	public function isEmpty() 
	{
		return (count($this->Hash_table) === 0);
	}
}
?>
