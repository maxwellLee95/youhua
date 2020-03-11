<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'jms_serializer' shared service.

include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/SerializerInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/ArrayTransformerInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/Serializer.php';
include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/MetadataFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/AdvancedMetadataFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/MetadataFactory.php';
include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/Driver/DriverInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/Driver/LazyLoadingDriver.php';
include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/Cache/CacheInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/Cache/FileCache.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/Handler/HandlerRegistryInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/Handler/HandlerRegistry.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/Handler/LazyHandlerRegistry.php';
include_once $this->targetDirs[3].'/vendor/phpcollection/phpcollection/src/PhpCollection/AbstractCollection.php';
include_once $this->targetDirs[3].'/vendor/phpcollection/phpcollection/src/PhpCollection/CollectionInterface.php';
include_once $this->targetDirs[3].'/vendor/phpcollection/phpcollection/src/PhpCollection/MapInterface.php';
include_once $this->targetDirs[3].'/vendor/phpcollection/phpcollection/src/PhpCollection/AbstractMap.php';
include_once $this->targetDirs[3].'/vendor/phpcollection/phpcollection/src/PhpCollection/SortableInterface.php';
include_once $this->targetDirs[3].'/vendor/phpcollection/phpcollection/src/PhpCollection/Map.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/EventDispatcher/EventDispatcherInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/EventDispatcher/EventDispatcher.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/EventDispatcher/LazyEventDispatcher.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/Construction/ObjectConstructorInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/Construction/UnserializeObjectConstructor.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/ContextFactory/SerializationContextFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/ContextFactory/DeserializationContextFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer-bundle/ContextFactory/ConfiguredContextFactory.php';

$a = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver($this, 'jms_serializer.metadata_driver'), 'Metadata\\ClassHierarchyMetadata', true);
$a->setCache(new \Metadata\Cache\FileCache(($this->targetDirs[0].'/jms_serializer')));

$b = new \JMS\Serializer\EventDispatcher\LazyEventDispatcher(new \Symfony\Component\DependencyInjection\ServiceLocator(array('jms_serializer.doctrine_proxy_subscriber' => function () {
    return ($this->services['jms_serializer.doctrine_proxy_subscriber'] ?? $this->services['jms_serializer.doctrine_proxy_subscriber'] = new \JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber(true, false));
}, 'jms_serializer.stopwatch_subscriber' => function () {
    return ($this->services['jms_serializer.stopwatch_subscriber'] ?? $this->load('getJmsSerializer_StopwatchSubscriberService.php'));
})));
$b->setListeners(array('serializer.pre_serialize' => array(0 => array(0 => array(0 => 'jms_serializer.stopwatch_subscriber', 1 => 'onPreSerialize'), 1 => NULL, 2 => NULL), 1 => array(0 => array(0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerializeTypedProxy'), 1 => NULL, 2 => NULL), 2 => array(0 => array(0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'), 1 => NULL, 2 => NULL)), 'serializer.post_serialize' => array(0 => array(0 => array(0 => 'jms_serializer.stopwatch_subscriber', 1 => 'onPostSerialize'), 1 => NULL, 2 => NULL))));

$this->services['jms_serializer'] = $instance = new \JMS\Serializer\Serializer($a, new \JMS\Serializer\Handler\LazyHandlerRegistry(new \Symfony\Component\DependencyInjection\ServiceLocator(array('jms_serializer.array_collection_handler' => function () {
    return ($this->services['jms_serializer.array_collection_handler'] ?? $this->services['jms_serializer.array_collection_handler'] = new \JMS\Serializer\Handler\ArrayCollectionHandler(false));
}, 'jms_serializer.constraint_violation_handler' => function () {
    return ($this->services['jms_serializer.constraint_violation_handler'] ?? $this->services['jms_serializer.constraint_violation_handler'] = new \JMS\Serializer\Handler\ConstraintViolationHandler());
}, 'jms_serializer.datetime_handler' => function () {
    return ($this->services['jms_serializer.datetime_handler'] ?? $this->services['jms_serializer.datetime_handler'] = new \JMS\Serializer\Handler\DateHandler('Y-m-d\\TH:i:sP', 'Asia/Shanghai', true));
}, 'jms_serializer.form_error_handler' => function () {
    return ($this->services['jms_serializer.form_error_handler'] ?? $this->load('getJmsSerializer_FormErrorHandlerService.php'));
}, 'jms_serializer.php_collection_handler' => function () {
    return ($this->services['jms_serializer.php_collection_handler'] ?? $this->services['jms_serializer.php_collection_handler'] = new \JMS\Serializer\Handler\PhpCollectionHandler());
}, 'sonata.media.serializer.handler.gallery' => function () {
    return ($this->privates['sonata.media.serializer.handler.gallery'] ?? $this->load('getSonata_Media_Serializer_Handler_GalleryService.php'));
}, 'sonata.media.serializer.handler.media' => function () {
    return ($this->privates['sonata.media.serializer.handler.media'] ?? $this->load('getSonata_Media_Serializer_Handler_MediaService.php'));
})), array(2 => array('DateTime' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromjson'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromxml'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromyml')), 'DateTimeImmutable' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromjson'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromxml'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromyml')), 'DateInterval' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromjson'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromxml'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromyml')), 'ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\Common\\Collections\\ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ORM\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'PhpCollection\\Sequence' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence')), 'PhpCollection\\Map' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap')), 'sonata_media_media_id' => array('json' => array(0 => 'sonata.media.serializer.handler.media', 1 => 'deserializeObjectFromId'), 'xml' => array(0 => 'sonata.media.serializer.handler.media', 1 => 'deserializeObjectFromId'), 'yml' => array(0 => 'sonata.media.serializer.handler.media', 1 => 'deserializeObjectFromId')), 'sonata_media_gallery_id' => array('json' => array(0 => 'sonata.media.serializer.handler.gallery', 1 => 'deserializeObjectFromId'), 'xml' => array(0 => 'sonata.media.serializer.handler.gallery', 1 => 'deserializeObjectFromId'), 'yml' => array(0 => 'sonata.media.serializer.handler.gallery', 1 => 'deserializeObjectFromId'))), 1 => array('DateTime' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime')), 'DateTimeImmutable' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable')), 'DateInterval' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval')), 'ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\Common\\Collections\\ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ORM\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'PhpCollection\\Sequence' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence')), 'PhpCollection\\Map' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap')), 'Symfony\\Component\\Form\\Form' => array('xml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToxml'), 'json' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormTojson'), 'yml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToyml')), 'Symfony\\Component\\Form\\FormError' => array('xml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToxml'), 'json' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorTojson'), 'yml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToyml')), 'Symfony\\Component\\Validator\\ConstraintViolationList' => array('xml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToxml'), 'json' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListTojson'), 'yml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToyml')), 'Symfony\\Component\\Validator\\ConstraintViolation' => array('xml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToxml'), 'json' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationTojson'), 'yml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToyml')), 'sonata_media_media_id' => array('json' => array(0 => 'sonata.media.serializer.handler.media', 1 => 'serializeObjectToId'), 'xml' => array(0 => 'sonata.media.serializer.handler.media', 1 => 'serializeObjectToId'), 'yml' => array(0 => 'sonata.media.serializer.handler.media', 1 => 'serializeObjectToId')), 'sonata_media_gallery_id' => array('json' => array(0 => 'sonata.media.serializer.handler.gallery', 1 => 'serializeObjectToId'), 'xml' => array(0 => 'sonata.media.serializer.handler.gallery', 1 => 'serializeObjectToId'), 'yml' => array(0 => 'sonata.media.serializer.handler.gallery', 1 => 'serializeObjectToId'))))), ($this->privates['jms_serializer.unserialize_object_constructor'] ?? $this->privates['jms_serializer.unserialize_object_constructor'] = new \JMS\Serializer\Construction\UnserializeObjectConstructor()), new \PhpCollection\Map(array('json' => ($this->services['jms_serializer.json_serialization_visitor'] ?? $this->load('getJmsSerializer_JsonSerializationVisitorService.php')), 'xml' => ($this->services['jms_serializer.xml_serialization_visitor'] ?? $this->load('getJmsSerializer_XmlSerializationVisitorService.php')), 'yml' => ($this->services['jms_serializer.yaml_serialization_visitor'] ?? $this->load('getJmsSerializer_YamlSerializationVisitorService.php')))), new \PhpCollection\Map(array('json' => ($this->services['jms_serializer.json_deserialization_visitor'] ?? $this->load('getJmsSerializer_JsonDeserializationVisitorService.php')), 'xml' => ($this->services['jms_serializer.xml_deserialization_visitor'] ?? $this->load('getJmsSerializer_XmlDeserializationVisitorService.php')))), $b, NULL, ($this->privates['jms_serializer.expression_evaluator'] ?? $this->load('getJmsSerializer_ExpressionEvaluatorService.php')));

$instance->setSerializationContextFactory(($this->services['jms_serializer.serialization_context_factory'] ?? $this->services['jms_serializer.serialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory()));
$instance->setDeserializationContextFactory(($this->services['jms_serializer.deserialization_context_factory'] ?? $this->services['jms_serializer.deserialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory()));

return $instance;
