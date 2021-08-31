<?php
/**
 * @link https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license https://craftcms.github.io/license/
 */

namespace craft\conditions\elements;

use craft\base\Element;
use craft\conditions\ConditionInterface;
use craft\conditions\QueryConditionInterface;
use craft\elements\db\ElementQuery;

/**
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since 4.0
 */
interface ElementQueryConditionInterface extends QueryConditionInterface
{

    /**
     * @return ElementQuery
     */
    public function getElementQuery(): ElementQuery;
}