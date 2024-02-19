<?php

/**
 * Plex Resource Pack
 * ------------------
 *
 * @noinspection PhpClassNamingConventionInspection    - Long class names are ok.
 * @noinspection PhpPropertyNamingConventionInspection - Property names with underscores are ok.
 */


declare(strict_types=1);

namespace PithFront\PithPackPlex;

use Pith\Workflow\PithPack;

/**
 * Class PlexResourcePack
 */
class PlexResourcePack extends PithPack
{
    public string $access_level = 'world';
    public string $pack_type    = 'resource-pack';
}