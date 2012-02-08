<?php

namespace GHOME\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ActionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ActionRepository extends EntityRepository
{
	public function findByMetricAndRoom($metric, $room)
	{
	    return $this->getEntityManager()
	        ->createQuery(
				'SELECT a FROM GHOMECoreBundle:Action a '.
				'WHERE a.metric = :metric AND a.room = :room '.
				'ORDER BY a.time DESC')
			->setParameter('metric', $metric)
			->setParameter('room', $room)
	        ->getResult();
	}
}