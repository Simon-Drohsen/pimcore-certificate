<?php

namespace App\Document\Areabrick;

use Pimcore\Model\Document\Editable\Area\Info;

class Academy extends AbstractAreabrick
{
    public function getName(): string
    {
        return "Academy Areabrick";
    }

    public function getDescription(): string
    {
        return "Some Description";
    }

    public function action(Info $info): ?\Symfony\Component\HttpFoundation\Response
    {
        return parent::action($info); // TODO: Change the autogenerated stub
    }
}
