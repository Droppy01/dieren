<?php

namespace models;

class vos  implements Dier
{

    public function maakGeluid(): string
    {
        return "<iframe src=\"https://open.spotify.com/embed/track/5HOpkTTVcmZHnthgyxrIL8\" width=\"300\" height=\"80\" frameborder=\"0\" allowtransparency=\"true\" allow=\"encrypted-media\"></iframe>";
    }
}