<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class SituacionFiscal extends Enum
{
    const RESPONSABLE_INSC = 0;
    const RESPONSABLE_NO_INSC = 1;
    const EXENTO = 2;
    const MONOTRIBUTISTA = 3;
    const CONSUMIDOR_FINAL = 4;
}
