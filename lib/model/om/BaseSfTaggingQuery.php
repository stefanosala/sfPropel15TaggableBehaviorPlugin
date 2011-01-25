<?php


/**
 * Base class that represents a query for the 'sf_tagging' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.3 on:
 *
 * Tue Jan 25 18:31:06 2011
 *
 * @method     SfTaggingQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     SfTaggingQuery orderByTagId($order = Criteria::ASC) Order by the tag_id column
 * @method     SfTaggingQuery orderByTaggableModel($order = Criteria::ASC) Order by the taggable_model column
 * @method     SfTaggingQuery orderByTaggableId($order = Criteria::ASC) Order by the taggable_id column
 * @method     SfTaggingQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     SfTaggingQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     SfTaggingQuery groupById() Group by the id column
 * @method     SfTaggingQuery groupByTagId() Group by the tag_id column
 * @method     SfTaggingQuery groupByTaggableModel() Group by the taggable_model column
 * @method     SfTaggingQuery groupByTaggableId() Group by the taggable_id column
 * @method     SfTaggingQuery groupByCreatedAt() Group by the created_at column
 * @method     SfTaggingQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     SfTaggingQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SfTaggingQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SfTaggingQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     SfTaggingQuery leftJoinSfTag($relationAlias = null) Adds a LEFT JOIN clause to the query using the SfTag relation
 * @method     SfTaggingQuery rightJoinSfTag($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SfTag relation
 * @method     SfTaggingQuery innerJoinSfTag($relationAlias = null) Adds a INNER JOIN clause to the query using the SfTag relation
 *
 * @method     SfTagging findOne(PropelPDO $con = null) Return the first SfTagging matching the query
 * @method     SfTagging findOneOrCreate(PropelPDO $con = null) Return the first SfTagging matching the query, or a new SfTagging object populated from the query conditions when no match is found
 *
 * @method     SfTagging findOneById(int $id) Return the first SfTagging filtered by the id column
 * @method     SfTagging findOneByTagId(int $tag_id) Return the first SfTagging filtered by the tag_id column
 * @method     SfTagging findOneByTaggableModel(string $taggable_model) Return the first SfTagging filtered by the taggable_model column
 * @method     SfTagging findOneByTaggableId(int $taggable_id) Return the first SfTagging filtered by the taggable_id column
 * @method     SfTagging findOneByCreatedAt(string $created_at) Return the first SfTagging filtered by the created_at column
 * @method     SfTagging findOneByUpdatedAt(string $updated_at) Return the first SfTagging filtered by the updated_at column
 *
 * @method     array findById(int $id) Return SfTagging objects filtered by the id column
 * @method     array findByTagId(int $tag_id) Return SfTagging objects filtered by the tag_id column
 * @method     array findByTaggableModel(string $taggable_model) Return SfTagging objects filtered by the taggable_model column
 * @method     array findByTaggableId(int $taggable_id) Return SfTagging objects filtered by the taggable_id column
 * @method     array findByCreatedAt(string $created_at) Return SfTagging objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return SfTagging objects filtered by the updated_at column
 *
 * @package    propel.generator.plugins.sfPropel15TaggableBehaviorPlugin.lib.model.om
 */
abstract class BaseSfTaggingQuery extends ModelCriteria
{

  /**
   * Initializes internal state of BaseSfTaggingQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'propel', $modelName = 'SfTagging', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new SfTaggingQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    SfTaggingQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof SfTaggingQuery)
    {
      return $criteria;
    }
    $query = new SfTaggingQuery();
    if (null !== $modelAlias)
    {
      $query->setModelAlias($modelAlias);
    }
    if ($criteria instanceof Criteria)
    {
      $query->mergeWith($criteria);
    }
    return $query;
  }

  /**
   * Find object by primary key
   * Use instance pooling to avoid a database query if the object exists
   * <code>
   * $obj  = $c->findPk(12, $con);
   * </code>
   * @param     mixed $key Primary key to use for the query
   * @param     PropelPDO $con an optional connection object
   *
   * @return    SfTagging|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ((null !== ($obj = SfTaggingPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter())
    {
      // the object is alredy in the instance pool
      return $obj;
    }
    else
    {
      // the object has not been requested yet, or the formatter is not an object formatter
      $criteria = $this->isKeepQuery() ? clone $this : $this;
      $stmt = $criteria
        ->filterByPrimaryKey($key)
        ->getSelectStatement($con);
      return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }
  }

  /**
   * Find objects by primary key
   * <code>
   * $objs = $c->findPks(array(12, 56, 832), $con);
   * </code>
   * @param     array $keys Primary keys to use for the query
   * @param     PropelPDO $con an optional connection object
   *
   * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
   */
  public function findPks($keys, $con = null)
  {  
    $criteria = $this->isKeepQuery() ? clone $this : $this;
    return $this
      ->filterByPrimaryKeys($keys)
      ->find($con);
  }

  /**
   * Filter the query by primary key
   *
   * @param     mixed $key Primary key to use for the query
   *
   * @return    SfTaggingQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(SfTaggingPeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    SfTaggingQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(SfTaggingPeer::ID, $keys, Criteria::IN);
  }

  /**
   * Filter the query on the id column
   * 
   * @param     int|array $id The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    SfTaggingQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(SfTaggingPeer::ID, $id, $comparison);
  }

  /**
   * Filter the query on the tag_id column
   * 
   * @param     int|array $tagId The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    SfTaggingQuery The current query, for fluid interface
   */
  public function filterByTagId($tagId = null, $comparison = null)
  {
    if (is_array($tagId))
    {
      $useMinMax = false;
      if (isset($tagId['min']))
      {
        $this->addUsingAlias(SfTaggingPeer::TAG_ID, $tagId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($tagId['max']))
      {
        $this->addUsingAlias(SfTaggingPeer::TAG_ID, $tagId['max'], Criteria::LESS_EQUAL);
        $useMinMax = true;
      }
      if ($useMinMax)
      {
        return $this;
      }
      if (null === $comparison)
      {
        $comparison = Criteria::IN;
      }
    }
    return $this->addUsingAlias(SfTaggingPeer::TAG_ID, $tagId, $comparison);
  }

  /**
   * Filter the query on the taggable_model column
   * 
   * @param     string $taggableModel The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    SfTaggingQuery The current query, for fluid interface
   */
  public function filterByTaggableModel($taggableModel = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($taggableModel))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $taggableModel))
      {
        $taggableModel = str_replace('*', '%', $taggableModel);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(SfTaggingPeer::TAGGABLE_MODEL, $taggableModel, $comparison);
  }

  /**
   * Filter the query on the taggable_id column
   * 
   * @param     int|array $taggableId The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    SfTaggingQuery The current query, for fluid interface
   */
  public function filterByTaggableId($taggableId = null, $comparison = null)
  {
    if (is_array($taggableId))
    {
      $useMinMax = false;
      if (isset($taggableId['min']))
      {
        $this->addUsingAlias(SfTaggingPeer::TAGGABLE_ID, $taggableId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($taggableId['max']))
      {
        $this->addUsingAlias(SfTaggingPeer::TAGGABLE_ID, $taggableId['max'], Criteria::LESS_EQUAL);
        $useMinMax = true;
      }
      if ($useMinMax)
      {
        return $this;
      }
      if (null === $comparison)
      {
        $comparison = Criteria::IN;
      }
    }
    return $this->addUsingAlias(SfTaggingPeer::TAGGABLE_ID, $taggableId, $comparison);
  }

  /**
   * Filter the query on the created_at column
   * 
   * @param     string|array $createdAt The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    SfTaggingQuery The current query, for fluid interface
   */
  public function filterByCreatedAt($createdAt = null, $comparison = null)
  {
    if (is_array($createdAt))
    {
      $useMinMax = false;
      if (isset($createdAt['min']))
      {
        $this->addUsingAlias(SfTaggingPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($createdAt['max']))
      {
        $this->addUsingAlias(SfTaggingPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
        $useMinMax = true;
      }
      if ($useMinMax)
      {
        return $this;
      }
      if (null === $comparison)
      {
        $comparison = Criteria::IN;
      }
    }
    return $this->addUsingAlias(SfTaggingPeer::CREATED_AT, $createdAt, $comparison);
  }

  /**
   * Filter the query on the updated_at column
   * 
   * @param     string|array $updatedAt The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    SfTaggingQuery The current query, for fluid interface
   */
  public function filterByUpdatedAt($updatedAt = null, $comparison = null)
  {
    if (is_array($updatedAt))
    {
      $useMinMax = false;
      if (isset($updatedAt['min']))
      {
        $this->addUsingAlias(SfTaggingPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($updatedAt['max']))
      {
        $this->addUsingAlias(SfTaggingPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
        $useMinMax = true;
      }
      if ($useMinMax)
      {
        return $this;
      }
      if (null === $comparison)
      {
        $comparison = Criteria::IN;
      }
    }
    return $this->addUsingAlias(SfTaggingPeer::UPDATED_AT, $updatedAt, $comparison);
  }

  /**
   * Filter the query by a related SfTag object
   *
   * @param     SfTag $sfTag  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    SfTaggingQuery The current query, for fluid interface
   */
  public function filterBySfTag($sfTag, $comparison = null)
  {
    return $this
      ->addUsingAlias(SfTaggingPeer::TAG_ID, $sfTag->getId(), $comparison);
  }

  /**
   * Adds a JOIN clause to the query using the SfTag relation
   * 
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    SfTaggingQuery The current query, for fluid interface
   */
  public function joinSfTag($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('SfTag');
    
    // create a ModelJoin object for this join
    $join = new ModelJoin();
    $join->setJoinType($joinType);
    $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
    if ($previousJoin = $this->getPreviousJoin())
    {
      $join->setPreviousJoin($previousJoin);
    }
    
    // add the ModelJoin to the current object
    if($relationAlias)
    {
      $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
      $this->addJoinObject($join, $relationAlias);
    }
    else
    {
      $this->addJoinObject($join, 'SfTag');
    }
    
    return $this;
  }

  /**
   * Use the SfTag relation SfTag object
   *
   * @see       useQuery()
   * 
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    SfTagQuery A secondary query class using the current class as primary query
   */
  public function useSfTagQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    return $this
      ->joinSfTag($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'SfTag', 'SfTagQuery');
  }

  /**
   * Exclude object from result
   *
   * @param     SfTagging $sfTagging Object to remove from the list of results
   *
   * @return    SfTaggingQuery The current query, for fluid interface
   */
  public function prune($sfTagging = null)
  {
    if ($sfTagging)
    {
      $this->addUsingAlias(SfTaggingPeer::ID, $sfTagging->getId(), Criteria::NOT_EQUAL);
    }
    
    return $this;
  }

  // timestampable behavior
  
  /**
   * Filter by the latest updated
   *
   * @param      int $nbDays Maximum age of the latest update in days
   *
   * @return     SfTaggingQuery The current query, for fuid interface
   */
  public function recentlyUpdated($nbDays = 7)
  {
    return $this->addUsingAlias(SfTaggingPeer::UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
  }
  
  /**
   * Filter by the latest created
   *
   * @param      int $nbDays Maximum age of in days
   *
   * @return     SfTaggingQuery The current query, for fuid interface
   */
  public function recentlyCreated($nbDays = 7)
  {
    return $this->addUsingAlias(SfTaggingPeer::CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
  }
  
  /**
   * Order by update date desc
   *
   * @return     SfTaggingQuery The current query, for fuid interface
   */
  public function lastUpdatedFirst()
  {
    return $this->addDescendingOrderByColumn(SfTaggingPeer::UPDATED_AT);
  }
  
  /**
   * Order by update date asc
   *
   * @return     SfTaggingQuery The current query, for fuid interface
   */
  public function firstUpdatedFirst()
  {
    return $this->addAscendingOrderByColumn(SfTaggingPeer::UPDATED_AT);
  }
  
  /**
   * Order by create date desc
   *
   * @return     SfTaggingQuery The current query, for fuid interface
   */
  public function lastCreatedFirst()
  {
    return $this->addDescendingOrderByColumn(SfTaggingPeer::CREATED_AT);
  }
  
  /**
   * Order by create date asc
   *
   * @return     SfTaggingQuery The current query, for fuid interface
   */
  public function firstCreatedFirst()
  {
    return $this->addAscendingOrderByColumn(SfTaggingPeer::CREATED_AT);
  }

}