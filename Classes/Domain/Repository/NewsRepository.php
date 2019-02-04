<?php

namespace GeorgRinger\NewsFilter\Domain\Repository;

class NewsRepository extends \GeorgRinger\News\Domain\Repository\CategoryRepository {


    /**
     * Get the search constraints
     *
     * @param QueryInterface $query
     * @param DemandInterface $demand
     * @return array
     * @throws \UnexpectedValueException
     */
    protected function getSearchConstraints(QueryInterface $query, DemandInterface $demand)
    {
        $constraints = [];
        return $constraints;
    }

}