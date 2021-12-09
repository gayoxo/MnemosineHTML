<?php 


class FiltroArray
{
	public $FiltroA =array(); 
	
	
    public function __construct(array $filtroA ){
        $this->FiltroA = $filtroA;
    }
    
	
	public function findElem($valueID)
	{
	foreach ($this->FiltroA as $elem)
		{
			
			if (is_numeric($elem->Id)&& is_numeric($valueID))
				if ($elem->Id==$valueID)
					return $elem->Valor;
				else;
			else
				if (!is_numeric($elem->Id)&& !is_numeric($valueID))
				{
					
					if ($elem->Id==$valueID)
						return $elem->Valor;
				}
		}
		
	return "Unvalued"; 
	}
	
	public function isNumeric($valueID)
	{
	foreach ($this->FiltroA as $elem)
		if ($elem->Id==$valueID)
			return $elem->AsumeNum;
			
	return false; 
	}
	
}




?>