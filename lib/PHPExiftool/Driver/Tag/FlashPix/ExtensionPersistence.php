<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\FlashPix;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class ExtensionPersistence extends AbstractTag
{

    protected $Id = 3;

    protected $Name = 'ExtensionPersistence';

    protected $FullName = 'FlashPix::Extensions';

    protected $GroupName = 'FlashPix';

    protected $g0 = 'FlashPix';

    protected $g1 = 'FlashPix';

    protected $g2 = 'Other';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Extension Persistence';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Always Valid',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Invalidated By Modification',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Potentially Invalidated By Modification',
        ),
    );

}
