<?php

namespace App\Enums;

enum CheckStatus: string
{
    case Inprogress = 'in_progress';
    case Compelete = 'complete';
    case Failed = 'failed';
}
