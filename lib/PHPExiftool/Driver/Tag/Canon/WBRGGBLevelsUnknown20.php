<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Canon;

use PHPExiftool\Driver\AbstractTag;

class WBRGGBLevelsUnknown20 extends AbstractTag
{

    protected $Id = 208;

    protected $Name = 'WB_RGGBLevelsUnknown20';

    protected $FullName = 'Canon::ColorData7';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'WB RGGB Levels Unknown 20';

    protected $flag_Permanent = true;

    protected $MaxLength = 4;

}