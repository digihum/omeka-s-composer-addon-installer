<?php
namespace Omeka\DataType\Resource;

use Omeka\DataType\ValueAnnotatableInterface;
use Omeka\Entity;
use Laminas\View\Renderer\PhpRenderer;

class Item extends AbstractResource implements ValueAnnotatableInterface
{
    public function getName()
    {
        return 'resource:item';
    }

    public function getLabel()
    {
        return 'Item'; // @translate
    }

    public function valueAnnotationPrepareForm(PhpRenderer $view)
    {
    }

    public function valueAnnotationForm(PhpRenderer $view)
    {
        return $view->partial('common/data-type/value-annotation-resource', ['dataTypeName' => 'resource:items']);
    }

    public function getValidValueResources()
    {
        return [Entity\Item::class];
    }
}
