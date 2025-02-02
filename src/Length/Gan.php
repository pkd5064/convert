<?php
// 길이변환

namespace Jiny\Convert\Length;

use Jiny\Convert\Unit;

class Gan extends Unit
{
    /**
     * 객체 타입 상수지정
     */
    const TYPE="Gan";
    
    /**
     * 초기화
     */
    public function __construct($value=null)
    {
        if ($value) {
            $this->value = $value;
        }
    }

    public function __invoke()
    {
        return $this->value;
    }

    public function centi($value=null)
    {
        return $this->conv($value, 181.818182);
    }
    
    public function meter($value=null)
    {
        return $this->conv($value, 1.818182);
    }

    public function feet($value=null)
    {
        return $this->conv($value, 5.965163);
    }

    public function foot($value=null)
    {
        return $this->conv($value, 5.965163);
    }

    public function inch($value=null)
    {
        return $this->conv($value, 71.581961);
    }

    public function jung($value=null)
    {
        return $this->conv($value, 0.016667);
    }
}