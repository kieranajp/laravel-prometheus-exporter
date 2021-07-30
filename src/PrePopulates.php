<?php

declare(strict_types = 1);

namespace Arquivei\LaravelPrometheusExporter;

interface PrePopulates
{
    /**
     * Collect metrics data, if need be, before exporting.
     *
     * As an example, this may be used to perform time consuming database queries and set the value of a counter
     * or gauge.
     */
    public function collect() : void;
}
