<?php
class Pager
	{
		var $tmp;
		
		function setTMP($t){
			$this->tmp = $t;
		}
		
		function findStart($limit)
		{
			if(!isset($_GET['page']) || $_GET['page']=="1")
			{
				$start = 0;
				$_GET['page']=1;
			}
			else
			{
				$start = ($_GET['page']-1)*$limit;
			}
			return $start;
		}
		
		function sumPages($sum,$limit)
		{
			$pages = (($sum%$limit)==0)?$sum/$limit:floor($sum/$limit)+1;
			return $pages;
		}
		
		function listPages($curpage, $pages)
		{
			$list = "";
			
			if(($curpage!=1)&&($curpage))
			{
				$list .= "<a href=\"".$_SERVER['PHP_SELF']."?act=".$this->tmp."&page=1\" title=\"Trang đầu\"><< </a>";
			}
			
			if(($curpage-1)>0)
			{
				$list .= "<a href=\"".$_SERVER['PHP_SELF']."?act=".$this->tmp."&page=".($curpage-1)."\" title=\"Trang trước\">< </a>";
			}
			
			for($i=1;$i<=$pages;$i++)
			{
				if($i==$curpage)
				{
					$list .= "<b>".$i."</b>";
				}
				else
				{
					$list .= "<a href=\"".$_SERVER['PHP_SELF']."?act=".$this->tmp."&page=".$i."\" title=\"Trang ".$i."\"> ".$i." </a>";
				}
				$list .= " ";
			}
			
			if(($curpage+1)<=$pages)
			{
				$list .= "<a href=\"".$_SERVER['PHP_SELF']."?act=".$this->tmp."&page=".($curpage+1)."\" title=\"Trang sau\">> </a>";
			}
			
			if(($curpage!=$pages)&&($pages!=0))
			{
				$list .= "<a href=\"".$_SERVER['PHP_SELF']."?act=".$this->tmp."&page=".$pages."\" title=\"Trang cuối\">>></a>";
			}
			
			$list .= "</td>\n"; 
			
			return $list;
		}
		
		function nextpre($curpage,$pages)
		{
			$nextpre = "";
			if(($curpage-1)<=0)
			{
				$nextpre .= "Trang trước";
			}
			else
			{
				$nextpre .= "<a href=\"".$_SERVER['PHP_SELF']."?act=".$this->tmp."&page=".($curpage-1)."\">Trang trước</a>";
			}
			$nextpre .= " | ";
			
			if(($curpage+1)>$pages)
			{
				$nextpre .= "Trang sau";
			}
			else
			{
				$nextpre .= "<a href=\"".$_SERVER['PHP_SELF']."?act=".$this->tmp."&page=".($curpage+1)."\">Trang sau</a>";
			}
			return $nextpre;
		}
	}