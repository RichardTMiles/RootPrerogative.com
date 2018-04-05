<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: test.proto

namespace Tests;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * An option to the DocumentRef.Set call.
 * </pre>
 *
 * Protobuf type <code>tests.SetOption</code>
 */
class SetOption extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * if true, merge all fields ("fields" is ignored).
     * </pre>
     *
     * <code>bool all = 1;</code>
     */
    private $all = false;
    /**
     * <pre>
     * field paths for a Merge option
     * </pre>
     *
     * <code>repeated .tests.FieldPath fields = 2;</code>
     */
    private $fields;

    public function __construct() {
        \GPBMetadata\Test::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * if true, merge all fields ("fields" is ignored).
     * </pre>
     *
     * <code>bool all = 1;</code>
     */
    public function getAll()
    {
        return $this->all;
    }

    /**
     * <pre>
     * if true, merge all fields ("fields" is ignored).
     * </pre>
     *
     * <code>bool all = 1;</code>
     */
    public function setAll($var)
    {
        GPBUtil::checkBool($var);
        $this->all = $var;
    }

    /**
     * <pre>
     * field paths for a Merge option
     * </pre>
     *
     * <code>repeated .tests.FieldPath fields = 2;</code>
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * <pre>
     * field paths for a Merge option
     * </pre>
     *
     * <code>repeated .tests.FieldPath fields = 2;</code>
     */
    public function setFields(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tests\FieldPath::class);
        $this->fields = $arr;
    }

}

