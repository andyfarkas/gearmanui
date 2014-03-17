<?php

namespace GearmanUI\Gearman\Task;

interface IRemover
{

    /**
     * @param $function
     * @return int
     */
    public function removeByFunctionName($function);

}