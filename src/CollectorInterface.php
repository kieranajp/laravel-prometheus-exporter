<?php

declare(strict_types = 1);

namespace Arquivei\LaravelPrometheusExporter;

interface CollectorInterface
{
    /**
     * Return the name of the collector.
     *
     * @return string
     */
    public static function getName() : string;

    /**
     * Register all metrics associated with the collector.
     *
     * The metrics needs to be registered on the exporter object.
     * eg:
     * ```php
     * $exporter->registerCounter('search_requests_total', 'The total number of search requests.');
     * ```
     *
     * @param PrometheusExporter $exporter
     */
    public function registerMetrics(PrometheusExporter $exporter) : void;
}
