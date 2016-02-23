<?php

namespace ImEx\Models\Entities\Process\Contracts;

interface ProcessContract
{
    public function import();
    public function export();
}