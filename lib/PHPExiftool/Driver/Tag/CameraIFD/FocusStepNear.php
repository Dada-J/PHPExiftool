<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\CameraIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class FocusStepNear extends AbstractTag
{

    protected $Id = 4352;

    protected $Name = 'FocusStepNear';

    protected $FullName = 'PanasonicRaw::CameraIFD';

    protected $GroupName = 'CameraIFD';

    protected $g0 = 'PanasonicRaw';

    protected $g1 = 'CameraIFD';

    protected $g2 = 'Camera';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Focus Step Near';

}
