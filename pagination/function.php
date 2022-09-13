<?php
 
   function pagination($con, $query, $per_page = 10,$page = 1, $url = '?'){       
    	$query = "SELECT COUNT(*) as `num` FROM {$query}";
    	$row = mysqli_fetch_array(mysqli_query($con, $query));
    	$total = $row['num'];
        $adjacents = "2"; 

    	$page = ($page == 0 ? 1 : $page);  
    	$start = ($page - 1) * $per_page;								
		
    	$prev = $page - 1;							
    	$next = $page + 1;
        $lastpage = ceil($total/$per_page);
    	$lpm1 = $lastpage - 1;
    	
    	$pagination = " ";
    	if($lastpage > 1)
    	{	
			$pagination .= "<div class='pagination-layout1'>";
            $pagination .= "<div class='btn-prev pl-2'> <button class='border-0 bg-white d-flex' disabled='disabled'>Page $page of $lastpage</button></div>";
			$pagination .= "<div class='page-number'>";
    		if ($lastpage < 7 + ($adjacents * 2))
    		{	
    			for ($counter = 1; $counter <= $lastpage; $counter++)
    			{
    				if ($counter == $page)
    					$pagination.= "<a href='#' class='active' aria-current='page'>$counter</a><span style='padding-right: 5px;'></span>";
    				else
    					$pagination.= "<a href='{$url}page=$counter'>$counter</a><span style='padding-right: 5px;'></span>";					
    			}
    		}
    		elseif($lastpage > 5 + ($adjacents * 2))
    		{
    			if($page < 1 + ($adjacents * 2))		
    			{
    				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<a href='#' class='active' aria-current='page'>$counter</a><span style='padding-right: 5px;'></span>";
    					else
    						$pagination.= "<a href='{$url}page=$counter'>$counter</a><span style='padding-right: 5px;'></span>";					
    				}
    				$pagination.= "<span class='disabled' aria-disabled='true'><span class=''>...</span></span>";
    				$pagination.= "<a href='{$url}page=$lpm1'>$lpm1</a></div>";
    				$pagination.= "<li><a href='{$url}page=$lastpage'>$lastpage</a></li>";		
    			}
    			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
    			{
    				$pagination.= "<li><a href='{$url}page=1'>1</a></li>";
    				$pagination.= "<li><a href='{$url}page=2'>2</a></li>";
    				$pagination.= "<li class='dot'>...</li>";
    				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<a href='#' class='active' aria-current='page'>$counter</a>";
    					else
    						$pagination.= "<a href='{$url}page=$counter'>$counter</a>";					
    				}
    				$pagination.= "<li class='dot'>..</li>";
    				$pagination.= "<li><a href='{$url}page=$lpm1'>$lpm1</a></li>";
    				$pagination.= "<li><a href='{$url}page=$lastpage'>$lastpage</a></li>";		
    			}
    			else
    			{
    				$pagination.= "<li><a href='{$url}page=1'>1</a></li>";
    				$pagination.= "<li><a href='{$url}page=2'>2</a></li>";
    				$pagination.= "<li class='dot'>..</li>";
    				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<a href='#' class='active' aria-current='page'>$counter</a>";
    					else
    						$pagination.= "<a href='{$url}page=$counter'>$counter</a>";					
    				}
    			}
    		}
			$pagination.= "</div> <div class='btn-next'> ";
    		
    		if ($page < $counter - 1){ 
    			$pagination.= "<a class='d-flex' href='{$url}page=$next' rel='next' >Next<i class='fas fa-angle-double-right'></i></a>";
    		}else{
    			$pagination.= "<a style='pointer-events: none; cursor: default; opacity: 0.6;'>Next<i class='fas fa-angle-double-right'></i></a>";
            }
    		$pagination.= "</div>\n";		
    	}
    
    
        return $pagination;
    } 
?>