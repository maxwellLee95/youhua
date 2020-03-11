List View Sortable Behavior
===========================

Add up and down button on list view for sortable entities.

## Setup Sortable Entity

Read [Sortable behavior](http://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/sortable.md) to see how to setup a sortable entity.

## Setup Sortable Repository

You need to register SortableRepository as the entity repository.

#### Using Entity Annotation

``` php
<?php

namespace Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="items")
 * @ORM\Entity(repositoryClass="Picoss\SonataExtraAdminBundle\Entity\Repository\SortableRepository")
 */
class MyEntity
{
    ...
}
```

#### Using A Custom Repository

``` php
<?php

namespace Repository;

use Picoss\SonataExtraAdminBundle\Entity\Repository\SortableRepository;

/**
 * EntityRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MyEntityRepository extends SortableRepository
{
}

```

## Admin Class

Update your entity admin class

```php
<?php

namespace Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class MyEntityAdmin extends AbstractAdmin
{

    protected $datagridValues = array(
        '_page' => 1,
        '_sort_order' => 'ASC',
        '_sort_by' => 'position',
    );

    /**
     * Add sortable route
     * @param RouteCollection $collection
     */
    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->add('move', $this->getRouterIdParameter().'/move/{position}');
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ...
            ->add('_action', 'actions', [
                'actions' => [
                    'show' => [],
                    'edit' => [],
                    'delete' => [],
                    'move' => [
                        'template' => '@PicossSonataExtraAdmin/CRUD/list__action_sort.html.twig',
                        'hide_label' => false, // Hide button text, default to true
                    ],
                ],
            ])
        ;
    }
}

```

## Admin Controller

Your entity admin controller need to extends `Picoss\SonataExtraAdminBundle\Controller\ExtraAdminController`.

``` php
<?php

namespace Controller;

use Picoss\SonataExtraAdminBundle\Controller\ExtraAdminController;

class MyEntityAdminController extends ExtraAdminController
{
}

```

Then update your admin service.

**XML**
``` xml
<?xml version="1.0" ?>
<!-- Picoss/DemoBundle/Resources/config/admin.xml -->
<container xmlns="http://symfony.com/schema/dic/services"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd">
    <services>
        <service id="picoss.demo.admin.my_entity" class="Picoss\DemoBundle\Admin\MyEntityAdmin">
            <tag name="sonata.admin" manager_type="orm" group="Demo" label="Entity" />
            <argument/>
            <argument>Picoss\DemoBundle\Entity\MyEntity</argument>
            <argument>PicossDemoBundle:MyEntityAdmin</argument>
        </service>
    </services>
</container>
```

**YAML**
``` yaml
# config/services.yaml
services:
    Picoss\DemoBundle\Admin\MyEntityAdmin
        tags:
            - { name: sonata.admin, manager_type: orm, group: "Demo", label: "Entity" }
        arguments:
            - ~
            - Picoss\DemoBundle\Entity\MyEntity
            - PicossDemoBundle:MyEntityAdmin
```

### TODO

Disable up and top buttons on the first item: check if position is equal to 0.
Disable down and bottom buttons on the last item: check if item position is equal to last position (grouped position issue)