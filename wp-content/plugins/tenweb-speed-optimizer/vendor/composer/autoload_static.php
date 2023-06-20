<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf557ea551e7fb921f12d957379ea8e94
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        'a35f8ffd39a08e1034cb8d27a4443d4d' => __DIR__ . '/..' . '/10web/authorization/src/config/constants.php',
        'f52d27968847fafb9c59e1506ee1e3e1' => __DIR__ . '/..' . '/monperrus/crawler-user-agents/main.php',
        '2d84aa96d0d2c8b6ab545097c73db188' => __DIR__ . '/../..' . '/OptimizerAdmin.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tenweb_Authorization\\' => 21,
            'TenWebWpTransients\\' => 19,
            'TenWebWpBenchmark\\' => 18,
            'TenWebSC\\' => 9,
            'TenWebQueue\\' => 12,
            'TenWebOptimizer\\' => 16,
            'TenWebIO\\' => 9,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\Filesystem\\' => 29,
        ),
        'M' => 
        array (
            'Minifier\\' => 9,
            'MatthiasMullie\\PathConverter\\' => 29,
            'MatthiasMullie\\Minify\\' => 22,
        ),
        'I' => 
        array (
            'Interop\\Queue\\' => 14,
        ),
        'E' => 
        array (
            'Enqueue\\Fs\\' => 11,
            'Enqueue\\Dsn\\' => 12,
        ),
        'D' => 
        array (
            'DiDom\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tenweb_Authorization\\' => 
        array (
            0 => __DIR__ . '/..' . '/10web/authorization/src',
        ),
        'TenWebWpTransients\\' => 
        array (
            0 => __DIR__ . '/..' . '/10web-utils/10web-wp-transients/src/TenWebWpTransients',
        ),
        'TenWebWpBenchmark\\' => 
        array (
            0 => __DIR__ . '/..' . '/10web-utils/10web-wordpress-benchmark/src/TenWebWpBenchmark',
        ),
        'TenWebSC\\' => 
        array (
            0 => __DIR__ . '/..' . '/10web-utils/wordpress-score-checker/src/TenWebSC',
        ),
        'TenWebQueue\\' => 
        array (
            0 => __DIR__ . '/..' . '/10web-utils/10web-queue/src/TenWebQueue',
        ),
        'TenWebOptimizer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'TenWebIO\\' => 
        array (
            0 => __DIR__ . '/..' . '/10web-utils/tenweb-image-optimizer/src/TenWebIO',
        ),
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/filesystem',
        ),
        'Minifier\\' => 
        array (
            0 => __DIR__ . '/..' . '/pfaciana/tiny-html-minifier/src',
        ),
        'MatthiasMullie\\PathConverter\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/path-converter/src',
        ),
        'MatthiasMullie\\Minify\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/minify/src',
        ),
        'Interop\\Queue\\' => 
        array (
            0 => __DIR__ . '/..' . '/queue-interop/queue-interop/src',
        ),
        'Enqueue\\Fs\\' => 
        array (
            0 => __DIR__ . '/..' . '/enqueue/fs',
        ),
        'Enqueue\\Dsn\\' => 
        array (
            0 => __DIR__ . '/..' . '/enqueue/dsn',
        ),
        'DiDom\\' => 
        array (
            0 => __DIR__ . '/..' . '/imangazaliev/didom/src/DiDom',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Makasim' => 
            array (
                0 => __DIR__ . '/..' . '/makasim/temp-file/src',
            ),
        ),
        'J' => 
        array (
            'JSMin\\' => 
            array (
                0 => __DIR__ . '/..' . '/mrclay/jsmin-php/src',
            ),
        ),
    );

    public static $classMap = array (
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'DiDom\\ClassAttribute' => __DIR__ . '/..' . '/imangazaliev/didom/src/DiDom/ClassAttribute.php',
        'DiDom\\Document' => __DIR__ . '/..' . '/imangazaliev/didom/src/DiDom/Document.php',
        'DiDom\\DocumentFragment' => __DIR__ . '/..' . '/imangazaliev/didom/src/DiDom/DocumentFragment.php',
        'DiDom\\Element' => __DIR__ . '/..' . '/imangazaliev/didom/src/DiDom/Element.php',
        'DiDom\\Encoder' => __DIR__ . '/..' . '/imangazaliev/didom/src/DiDom/Encoder.php',
        'DiDom\\Errors' => __DIR__ . '/..' . '/imangazaliev/didom/src/DiDom/Errors.php',
        'DiDom\\Exceptions\\InvalidSelectorException' => __DIR__ . '/..' . '/imangazaliev/didom/src/DiDom/Exceptions/InvalidSelectorException.php',
        'DiDom\\Node' => __DIR__ . '/..' . '/imangazaliev/didom/src/DiDom/Node.php',
        'DiDom\\Query' => __DIR__ . '/..' . '/imangazaliev/didom/src/DiDom/Query.php',
        'DiDom\\StyleAttribute' => __DIR__ . '/..' . '/imangazaliev/didom/src/DiDom/StyleAttribute.php',
        'Enqueue\\Dsn\\Dsn' => __DIR__ . '/..' . '/enqueue/dsn/Dsn.php',
        'Enqueue\\Dsn\\InvalidQueryParameterTypeException' => __DIR__ . '/..' . '/enqueue/dsn/InvalidQueryParameterTypeException.php',
        'Enqueue\\Dsn\\QueryBag' => __DIR__ . '/..' . '/enqueue/dsn/QueryBag.php',
        'Enqueue\\Fs\\CannotObtainLockException' => __DIR__ . '/..' . '/enqueue/fs/CannotObtainLockException.php',
        'Enqueue\\Fs\\FsConnectionFactory' => __DIR__ . '/..' . '/enqueue/fs/FsConnectionFactory.php',
        'Enqueue\\Fs\\FsConsumer' => __DIR__ . '/..' . '/enqueue/fs/FsConsumer.php',
        'Enqueue\\Fs\\FsContext' => __DIR__ . '/..' . '/enqueue/fs/FsContext.php',
        'Enqueue\\Fs\\FsDestination' => __DIR__ . '/..' . '/enqueue/fs/FsDestination.php',
        'Enqueue\\Fs\\FsMessage' => __DIR__ . '/..' . '/enqueue/fs/FsMessage.php',
        'Enqueue\\Fs\\FsProducer' => __DIR__ . '/..' . '/enqueue/fs/FsProducer.php',
        'Enqueue\\Fs\\LegacyFilesystemLock' => __DIR__ . '/..' . '/enqueue/fs/LegacyFilesystemLock.php',
        'Enqueue\\Fs\\Lock' => __DIR__ . '/..' . '/enqueue/fs/Lock.php',
        'Interop\\Queue\\ConnectionFactory' => __DIR__ . '/..' . '/queue-interop/queue-interop/src/ConnectionFactory.php',
        'Interop\\Queue\\Consumer' => __DIR__ . '/..' . '/queue-interop/queue-interop/src/Consumer.php',
        'Interop\\Queue\\Context' => __DIR__ . '/..' . '/queue-interop/queue-interop/src/Context.php',
        'Interop\\Queue\\Destination' => __DIR__ . '/..' . '/queue-interop/queue-interop/src/Destination.php',
        'Interop\\Queue\\Exception' => __DIR__ . '/..' . '/queue-interop/queue-interop/src/Exception.php',
        'Interop\\Queue\\Exception\\DeliveryDelayNotSupportedException' => __DIR__ . '/..' . '/queue-interop/queue-interop/src/Exception/DeliveryDelayNotSupportedException.php',
        'Interop\\Queue\\Exception\\Exception' => __DIR__ . '/..' . '/queue-interop/queue-interop/src/Exception/Exception.php',
        'Interop\\Queue\\Exception\\InvalidDestinationException' => __DIR__ . '/..' . '/queue-interop/queue-interop/src/Exception/InvalidDestinationException.php',
        'Interop\\Queue\\Exception\\InvalidMessageException' => __DIR__ . '/..' . '/queue-interop/queue-interop/src/Exception/InvalidMessageException.php',
        'Interop\\Queue\\Exception\\PriorityNotSupportedException' => __DIR__ . '/..' . '/queue-interop/queue-interop/src/Exception/PriorityNotSupportedException.php',
        'Interop\\Queue\\Exception\\PurgeQueueNotSupportedException' => __DIR__ . '/..' . '/queue-interop/queue-interop/src/Exception/PurgeQueueNotSupportedException.php',
        'Interop\\Queue\\Exception\\SubscriptionConsumerNotSupportedException' => __DIR__ . '/..' . '/queue-interop/queue-interop/src/Exception/SubscriptionConsumerNotSupportedException.php',
        'Interop\\Queue\\Exception\\TemporaryQueueNotSupportedException' => __DIR__ . '/..' . '/queue-interop/queue-interop/src/Exception/TemporaryQueueNotSupportedException.php',
        'Interop\\Queue\\Exception\\TimeToLiveNotSupportedException' => __DIR__ . '/..' . '/queue-interop/queue-interop/src/Exception/TimeToLiveNotSupportedException.php',
        'Interop\\Queue\\Impl\\ConsumerPollingTrait' => __DIR__ . '/..' . '/queue-interop/queue-interop/src/Impl/ConsumerPollingTrait.php',
        'Interop\\Queue\\Impl\\ConsumerVisibilityTimeoutTrait' => __DIR__ . '/..' . '/queue-interop/queue-interop/src/Impl/ConsumerVisibilityTimeoutTrait.php',
        'Interop\\Queue\\Impl\\MessageTrait' => __DIR__ . '/..' . '/queue-interop/queue-interop/src/Impl/MessageTrait.php',
        'Interop\\Queue\\Message' => __DIR__ . '/..' . '/queue-interop/queue-interop/src/Message.php',
        'Interop\\Queue\\Processor' => __DIR__ . '/..' . '/queue-interop/queue-interop/src/Processor.php',
        'Interop\\Queue\\Producer' => __DIR__ . '/..' . '/queue-interop/queue-interop/src/Producer.php',
        'Interop\\Queue\\Queue' => __DIR__ . '/..' . '/queue-interop/queue-interop/src/Queue.php',
        'Interop\\Queue\\SubscriptionConsumer' => __DIR__ . '/..' . '/queue-interop/queue-interop/src/SubscriptionConsumer.php',
        'Interop\\Queue\\Topic' => __DIR__ . '/..' . '/queue-interop/queue-interop/src/Topic.php',
        'JSMin\\JSMin' => __DIR__ . '/..' . '/mrclay/jsmin-php/src/JSMin/JSMin.php',
        'JSMin\\UnterminatedCommentException' => __DIR__ . '/..' . '/mrclay/jsmin-php/src/JSMin/UnterminatedCommentException.php',
        'JSMin\\UnterminatedRegExpException' => __DIR__ . '/..' . '/mrclay/jsmin-php/src/JSMin/UnterminatedRegExpException.php',
        'JSMin\\UnterminatedStringException' => __DIR__ . '/..' . '/mrclay/jsmin-php/src/JSMin/UnterminatedStringException.php',
        'Makasim\\File\\TempFile' => __DIR__ . '/..' . '/makasim/temp-file/src/Makasim/File/TempFile.php',
        'MatthiasMullie\\Minify\\CSS' => __DIR__ . '/..' . '/matthiasmullie/minify/src/CSS.php',
        'MatthiasMullie\\Minify\\Exception' => __DIR__ . '/..' . '/matthiasmullie/minify/src/Exception.php',
        'MatthiasMullie\\Minify\\Exceptions\\BasicException' => __DIR__ . '/..' . '/matthiasmullie/minify/src/Exceptions/BasicException.php',
        'MatthiasMullie\\Minify\\Exceptions\\FileImportException' => __DIR__ . '/..' . '/matthiasmullie/minify/src/Exceptions/FileImportException.php',
        'MatthiasMullie\\Minify\\Exceptions\\IOException' => __DIR__ . '/..' . '/matthiasmullie/minify/src/Exceptions/IOException.php',
        'MatthiasMullie\\Minify\\JS' => __DIR__ . '/..' . '/matthiasmullie/minify/src/JS.php',
        'MatthiasMullie\\Minify\\Minify' => __DIR__ . '/..' . '/matthiasmullie/minify/src/Minify.php',
        'MatthiasMullie\\PathConverter\\Converter' => __DIR__ . '/..' . '/matthiasmullie/path-converter/src/Converter.php',
        'MatthiasMullie\\PathConverter\\ConverterInterface' => __DIR__ . '/..' . '/matthiasmullie/path-converter/src/ConverterInterface.php',
        'MatthiasMullie\\PathConverter\\NoConverter' => __DIR__ . '/..' . '/matthiasmullie/path-converter/src/NoConverter.php',
        'Minifier\\TinyHtmlMinifier' => __DIR__ . '/..' . '/pfaciana/tiny-html-minifier/src/TinyHtmlMinifier.php',
        'Minifier\\TinyMinify' => __DIR__ . '/..' . '/pfaciana/tiny-html-minifier/src/TinyMinify.php',
        'PhpToken' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/PhpToken.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'Symfony\\Component\\Filesystem\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/filesystem/Exception/ExceptionInterface.php',
        'Symfony\\Component\\Filesystem\\Exception\\FileNotFoundException' => __DIR__ . '/..' . '/symfony/filesystem/Exception/FileNotFoundException.php',
        'Symfony\\Component\\Filesystem\\Exception\\IOException' => __DIR__ . '/..' . '/symfony/filesystem/Exception/IOException.php',
        'Symfony\\Component\\Filesystem\\Exception\\IOExceptionInterface' => __DIR__ . '/..' . '/symfony/filesystem/Exception/IOExceptionInterface.php',
        'Symfony\\Component\\Filesystem\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/symfony/filesystem/Exception/InvalidArgumentException.php',
        'Symfony\\Component\\Filesystem\\Filesystem' => __DIR__ . '/..' . '/symfony/filesystem/Filesystem.php',
        'Symfony\\Polyfill\\Ctype\\Ctype' => __DIR__ . '/..' . '/symfony/polyfill-ctype/Ctype.php',
        'Symfony\\Polyfill\\Php80\\Php80' => __DIR__ . '/..' . '/symfony/polyfill-php80/Php80.php',
        'Symfony\\Polyfill\\Php80\\PhpToken' => __DIR__ . '/..' . '/symfony/polyfill-php80/PhpToken.php',
        'TenWebIO\\Api' => __DIR__ . '/..' . '/10web-utils/tenweb-image-optimizer/src/TenWebIO/Api.php',
        'TenWebIO\\Attachments' => __DIR__ . '/..' . '/10web-utils/tenweb-image-optimizer/src/TenWebIO/Attachments.php',
        'TenWebIO\\Backup' => __DIR__ . '/..' . '/10web-utils/tenweb-image-optimizer/src/TenWebIO/Backup.php',
        'TenWebIO\\CLI' => __DIR__ . '/..' . '/10web-utils/tenweb-image-optimizer/src/TenWebIO/CLI.php',
        'TenWebIO\\Compress' => __DIR__ . '/..' . '/10web-utils/tenweb-image-optimizer/src/TenWebIO/Compress.php',
        'TenWebIO\\CompressDataService' => __DIR__ . '/..' . '/10web-utils/tenweb-image-optimizer/src/TenWebIO/CompressDataService.php',
        'TenWebIO\\CompressService' => __DIR__ . '/..' . '/10web-utils/tenweb-image-optimizer/src/TenWebIO/CompressService.php',
        'TenWebIO\\Config' => __DIR__ . '/..' . '/10web-utils/tenweb-image-optimizer/src/TenWebIO/Config.php',
        'TenWebIO\\Exceptions\\IOException' => __DIR__ . '/..' . '/10web-utils/tenweb-image-optimizer/src/TenWebIO/Exceptions/IOException.php',
        'TenWebIO\\Init' => __DIR__ . '/..' . '/10web-utils/tenweb-image-optimizer/src/TenWebIO/Init.php',
        'TenWebIO\\LastCompress' => __DIR__ . '/..' . '/10web-utils/tenweb-image-optimizer/src/TenWebIO/LastCompress.php',
        'TenWebIO\\Logs' => __DIR__ . '/..' . '/10web-utils/tenweb-image-optimizer/src/TenWebIO/Logs.php',
        'TenWebIO\\PreInit' => __DIR__ . '/..' . '/10web-utils/tenweb-image-optimizer/src/TenWebIO/PreInit.php',
        'TenWebIO\\Queue\\QueueConsumer' => __DIR__ . '/..' . '/10web-utils/tenweb-image-optimizer/src/TenWebIO/Queue/QueueConsumer.php',
        'TenWebIO\\Queue\\QueueProducer' => __DIR__ . '/..' . '/10web-utils/tenweb-image-optimizer/src/TenWebIO/Queue/QueueProducer.php',
        'TenWebIO\\Rest' => __DIR__ . '/..' . '/10web-utils/tenweb-image-optimizer/src/TenWebIO/Rest.php',
        'TenWebIO\\Settings' => __DIR__ . '/..' . '/10web-utils/tenweb-image-optimizer/src/TenWebIO/Settings.php',
        'TenWebIO\\Utils' => __DIR__ . '/..' . '/10web-utils/tenweb-image-optimizer/src/TenWebIO/Utils.php',
        'TenWebIO\\Views\\LogsView' => __DIR__ . '/..' . '/10web-utils/tenweb-image-optimizer/src/TenWebIO/Views/LogsView.php',
        'TenWebOptimizer\\ExcludeJsFromDelay' => __DIR__ . '/../..' . '/includes/ExcludeJsFromDelay.php',
        'TenWebOptimizer\\OptimizerBanner' => __DIR__ . '/../..' . '/includes/OptimizerBanner.php',
        'TenWebOptimizer\\OptimizerBase' => __DIR__ . '/../..' . '/includes/OptimizerBase.php',
        'TenWebOptimizer\\OptimizerCSSMin' => __DIR__ . '/../..' . '/includes/OptimizerCSSMin.php',
        'TenWebOptimizer\\OptimizerCache' => __DIR__ . '/../..' . '/includes/OptimizerCache.php',
        'TenWebOptimizer\\OptimizerCacheStructure' => __DIR__ . '/../..' . '/includes/OptimizerCacheStructure.php',
        'TenWebOptimizer\\OptimizerCriticalCss' => __DIR__ . '/../..' . '/includes/OptimizerCriticalCss.php',
        'TenWebOptimizer\\OptimizerElementor' => __DIR__ . '/../..' . '/includes/OptimizerElementor.php',
        'TenWebOptimizer\\OptimizerFonts' => __DIR__ . '/../..' . '/includes/OptimizerFonts.php',
        'TenWebOptimizer\\OptimizerImages' => __DIR__ . '/../..' . '/includes/OptimizerImages.php',
        'TenWebOptimizer\\OptimizerLogger' => __DIR__ . '/../..' . '/includes/OptimizerLogger.php',
        'TenWebOptimizer\\OptimizerMain' => __DIR__ . '/../..' . '/includes/OptimizerMain.php',
        'TenWebOptimizer\\OptimizerNPS' => __DIR__ . '/../..' . '/includes/OptimizerNPS.php',
        'TenWebOptimizer\\OptimizerOnInit' => __DIR__ . '/../..' . '/includes/OptimizerOnInit.php',
        'TenWebOptimizer\\OptimizerScripts' => __DIR__ . '/../..' . '/includes/OptimizerScripts.php',
        'TenWebOptimizer\\OptimizerSettings' => __DIR__ . '/../..' . '/includes/OptimizerSettings.php',
        'TenWebOptimizer\\OptimizerStyles' => __DIR__ . '/../..' . '/includes/OptimizerStyles.php',
        'TenWebOptimizer\\OptimizerUrl' => __DIR__ . '/../..' . '/includes/OptimizerUrl.php',
        'TenWebOptimizer\\OptimizerUtils' => __DIR__ . '/../..' . '/includes/OptimizerUtils.php',
        'TenWebOptimizer\\OptimizerWhiteLabel' => __DIR__ . '/../..' . '/includes/OptimizerWhiteLabel.php',
        'TenWebOptimizer\\WebPageCache\\OptimizerWebPageCache' => __DIR__ . '/../..' . '/includes/WebPageCache/OptimizerWebPageCache.php',
        'TenWebOptimizer\\WebPageCache\\OptimizerWebPageCacheWP' => __DIR__ . '/../..' . '/includes/WebPageCache/OptimizerWebPageCacheWP.php',
        'TenWebOptimizer\\WebPageCache\\OptimizerWebPageValidations' => __DIR__ . '/../..' . '/includes/WebPageCache/OptimizerWebPageValidations.php',
        'TenWebQueue\\Abstracts\\QueueConsumerAbstract' => __DIR__ . '/..' . '/10web-utils/10web-queue/src/TenWebQueue/Abstracts/QueueConsumerAbstract.php',
        'TenWebQueue\\Abstracts\\QueueProducerAbstract' => __DIR__ . '/..' . '/10web-utils/10web-queue/src/TenWebQueue/Abstracts/QueueProducerAbstract.php',
        'TenWebQueue\\DTO\\QueueConfigDTO' => __DIR__ . '/..' . '/10web-utils/10web-queue/src/TenWebQueue/DTO/QueueConfigDTO.php',
        'TenWebQueue\\DTO\\QueueDataDTO' => __DIR__ . '/..' . '/10web-utils/10web-queue/src/TenWebQueue/DTO/QueueDataDTO.php',
        'TenWebQueue\\Examples\\QueueConsumer' => __DIR__ . '/..' . '/10web-utils/10web-queue/src/TenWebQueue/Examples/QueueConsumer.php',
        'TenWebQueue\\Examples\\QueueProducer' => __DIR__ . '/..' . '/10web-utils/10web-queue/src/TenWebQueue/Examples/QueueProducer.php',
        'TenWebQueue\\Exceptions\\QueueException' => __DIR__ . '/..' . '/10web-utils/10web-queue/src/TenWebQueue/Exceptions/QueueException.php',
        'TenWebQueue\\Interfaces\\QueueConsumerInterface' => __DIR__ . '/..' . '/10web-utils/10web-queue/src/TenWebQueue/Interfaces/QueueConsumerInterface.php',
        'TenWebQueue\\Interfaces\\QueueProducerInterface' => __DIR__ . '/..' . '/10web-utils/10web-queue/src/TenWebQueue/Interfaces/QueueProducerInterface.php',
        'TenWebQueue\\QueueContext' => __DIR__ . '/..' . '/10web-utils/10web-queue/src/TenWebQueue/QueueContext.php',
        'TenWebQueue\\QueueOrchestrator' => __DIR__ . '/..' . '/10web-utils/10web-queue/src/TenWebQueue/QueueOrchestrator.php',
        'TenWebQueue\\Traits\\QueueRestart' => __DIR__ . '/..' . '/10web-utils/10web-queue/src/TenWebQueue/Traits/QueueRestart.php',
        'TenWebSC\\TWScoreChecker' => __DIR__ . '/..' . '/10web-utils/wordpress-score-checker/src/TenWebSC/TWScoreChecker.php',
        'TenWebWpBenchmark\\Init' => __DIR__ . '/..' . '/10web-utils/10web-wordpress-benchmark/src/TenWebWpBenchmark/Init.php',
        'TenWebWpBenchmark\\OptimizerBenchmark' => __DIR__ . '/..' . '/10web-utils/10web-wordpress-benchmark/src/TenWebWpBenchmark/OptimizerBenchmark.php',
        'TenWebWpBenchmark\\Rest' => __DIR__ . '/..' . '/10web-utils/10web-wordpress-benchmark/src/TenWebWpBenchmark/Rest.php',
        'TenWebWpTransients\\OptimizerTransients' => __DIR__ . '/..' . '/10web-utils/10web-wp-transients/src/TenWebWpTransients/OptimizerTransients.php',
        'Tenweb_Authorization\\Amazon' => __DIR__ . '/..' . '/10web/authorization/src/Amazon.php',
        'Tenweb_Authorization\\Helper' => __DIR__ . '/..' . '/10web/authorization/src/Helper.php',
        'Tenweb_Authorization\\InstalledPlugin' => __DIR__ . '/..' . '/10web/authorization/src/InstalledPlugin.php',
        'Tenweb_Authorization\\InstalledTheme' => __DIR__ . '/..' . '/10web/authorization/src/InstalledTheme.php',
        'Tenweb_Authorization\\Login' => __DIR__ . '/..' . '/10web/authorization/src/Login.php',
        'Tenweb_Authorization\\Product' => __DIR__ . '/..' . '/10web/authorization/src/Product.php',
        'Tenweb_Authorization\\ProductActions' => __DIR__ . '/..' . '/10web/authorization/src/ProductActions.php',
        'Tenweb_Authorization\\ProductState' => __DIR__ . '/..' . '/10web/authorization/src/ProductState.php',
        'Tenweb_Authorization\\WpAjaxUpgraderSkin' => __DIR__ . '/..' . '/10web/authorization/src/WpAjaxUpgraderSkin.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf557ea551e7fb921f12d957379ea8e94::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf557ea551e7fb921f12d957379ea8e94::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitf557ea551e7fb921f12d957379ea8e94::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitf557ea551e7fb921f12d957379ea8e94::$classMap;

        }, null, ClassLoader::class);
    }
}
