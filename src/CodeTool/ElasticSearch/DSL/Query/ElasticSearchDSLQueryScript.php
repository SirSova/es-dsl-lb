<?php

declare(strict_types=1);

namespace CodeTool\ElasticSearch\DSL\Query;

use CodeTool\ElasticSearch\DSL\ElasticSearchDSLQueryInterface;
use CodeTool\ElasticSearch\ElasticSearchScript;

/**
 * A query allowing to define scripts as queries. They are typically used in a filter context.
 *
 * For more details, @see https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-script-query.html
 */
class ElasticSearchDSLQueryScript implements ElasticSearchDSLQueryInterface
{
    /**
     * @var ElasticSearchScript
     */
    private $script;

    public function __construct(ElasticSearchScript $script)
    {
        $this->script = $script;
    }

    public function jsonSerialize()
    {
        return [
            'script' => [
                'script' => $this->script->jsonSerialize()
            ]
        ];
    }
}
