<?php
	require_once("presets.php");	
	error_reporting(0);
    $string = $_POST['text'];

	function ex_1($string)
	{
		$previousLevel = 0;

        echo '<ol>';
        $doc = new DomDocument(); 
        $doc->loadHTML("\xEF\xBB\xBF" . $string, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $xpath = new DOMXPath($doc);
        foreach ($xpath->query('//*[self::h1 or self::h2]') as $headerElement) 
        {
        	// Получение уровня (1, 2)
        	$level = $headerElement->nodeName[1];

        	// Добавление <ol> когда уровень возрастает
        	if ($level > $previousLevel && $previousLevel > -1) 
        	{
            	echo '<ol>';
          	}
        	// Закрытие стольких уровней, сколько необходимо, когда уровень снижается
        	elseif ($level < $previousLevel) 
        	{
            	echo str_repeat('</ol>', $previousLevel - $level);
          	}
          	// Вывод текста
          	$new_str = strip_tags($headerElement->nodeValue, '<p>');  
          	// echo $headerElement;
          	// echo '<li>', $headerElement->textContent, '</li>';
          	echo '<li>', $new_str, '</li>';   
          	// Сохранить текущий уровень для следующей итерации
          	$previousLevel = $level;
        }
        // Закрыть оставшиеся уровни
        echo str_repeat('</ol>', $level+1 ?? 0);      
	}

	function ex_7($string)
	{
		$patterns = array();
		$patterns[0] = '/\.{3,}/';
		$patterns[1] = '/\!{3,}/';
		$patterns[2] = '/\?{1,}/';
		$patterns[3] = '/\,{1,}/';
		$replacements = array();
		$replacements[3] = '...';
		$replacements[2] = '!!!';
		$replacements[1] = '?';
		$replacements[0] = ',';
		echo $string;
		echo "<br>";
		echo preg_replace($patterns, $replacements, $string);
	}

	/*
		isU это так называемые модификаторы в регулярных выражениях. Каждая буква меняет поведение регулярного выражения.

		i Включает нечувствительность выражения к регистру символов
		s Включает режим соответствия точки символам переноса строки и возврата каретки
		U Делает все количественные метасимволы "не жадными" по умолчанию.
	*/

	function ex_11($string)
	{
        $doc = new DomDocument(); 
        $doc->loadHTML("\xEF\xBB\xBF" . $string, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $xpath = new DOMXPath($doc);

        // замена id тегов у тегов h1-h3
        if (preg_match_all('|<h1(.+)<\/h1>|isU', $string, $head1)) 
        {
        	$i = 0;
        	foreach ($head1[1] as $h1)
            {
                $doc->getElementsByTagName('h1')->item($i)->setAttribute('id', 'h1_' . $i);
                $i = $i + 1;
            }
        }

        if (preg_match_all('|<h2(.+)<\/h2>|isU', $string, $head2)) 
		{
			$i = 0;
			foreach ($head2[1] as $h2) 
			{
				$doc->getElementsByTagName('h2')->item($i)->setAttribute('id', 'h2_' . $i);
				$i = $i + 1;
			}
		}

		if (preg_match_all('|<h3(.+)<\/h3>|isU', $string, $head3)) 
		{
			$i = 0;
			foreach ($head3[1] as $h3) 
			{
				$doc->getElementsByTagName('h3')->item($i)->setAttribute('id', 'h3_' . $i);
				$i = $i + 1;
			}
		}
		// счетчики
		$h1_id = 0;
        $h2_id = 0;
        $h3_id = 0;

        echo '<ol>';
		$previousLevel = 0;

		// перебор тегов h1-h3
       	foreach ($xpath->query('//*[self::h1 or self::h2 or self::h3]') as $headerElement) 
       	{
        	// получение номера уровня (1-3)
        	$level = $headerElement->nodeName[1];
          
        	// Добавление <ol> когда уровень возрастает
        	if ($level > $previousLevel && $previousLevel > -1) 
        	{
            	echo '<ol>';
        	}
        	// Закрытие стольких уровней, сколько необходимо, когда уровень снижается
        	elseif ($level < $previousLevel) 
        	{
            	echo str_repeat('</ol>', $previousLevel - $level);
          	}
	        // Вывод ссылки с якорем и текстом заголовка
          	if ($level == 1) 
          	{
				$new_string =  mb_strimwidth($headerElement->textContent, 0, 53, "...");
	          	echo '<li><a href="#h', $level, '_', $h1_id, '">', $new_string, '</a></li>';
	          	$h1_id = $h1_id + 1;
          	}
          	else if ($level == 2) 
          	{
				$new_string =  mb_strimwidth($headerElement->textContent, 0, 53, "...");
	          	echo '<li><a href="#h', $level, '_', $h2_id, '">', $new_string, '</a></li>';
	          	$h2_id = $h2_id + 1;
          	}
          	else if ($level == 3) 
	        {
				$new_string =  mb_strimwidth($headerElement->textContent, 0, 53, "...");
	          	echo '<li><a href="#h', $level, '_', $h3_id, '">', $new_string, '</a></li>';
	          	$h3_id = $h3_id + 1;
	        }
          	// Сохранить текущий уровень для следующей итерации
	        $previousLevel = $level;
        }
        	// Закрытие уровней
            echo str_repeat('</ol>', $level+1 ?? 0);  

        $html = $doc->saveHTML();
        echo $html;	
	}

    $ban_word = array('пух', 'рот', 'делать', 'ехать', 'около', 'для');


	function ex_16($string, $array) 
	{
	    $newContent = '';

	    $newString = mb_strtolower($string); // Перевод строки в нижний регистр, чтобы учитывать и маленькие и большие буквы

	    $newString = explode(' ', $newString); // Разбиение строки на массив, состоящий из слов
	    $newStringForRegister = explode(' ', $string); // Для учета регистра

	    $c1 = 0;

	    foreach($newString as $key => $nS)
	    {
	        $count = 0;
	        foreach($array as $banWord)
	        {
	            if (strpos($nS, $banWord) !== false) // Если совпадает с плохим словом
	            { 
	                $c1 += 1;
	                $count += 1;
	                $k = mb_strlen($banWord,'UTF-8');
	                $str = '';
	    
	                for ($i = 0; $i < $k; $i++) 
	                {
	                    $str .= '#';
	                }
	                $newContent .= preg_replace("/^$banWord/", $str, $nS);
	                $newContent .= ' ';
	            }  
	        }

	        if ($count == 0) 
	        {
	            $newContent .= $newStringForRegister[$key];
	            $newContent .= ' ';
	        }
	    }

	    if ($c1 == 0) return $string;
	    if ($c1 !== 0) return $newContent;
	}	
?>