<?php
namespace Gmbit\Staff\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;

class MemberRepository extends Repository
{
    public function findAllSorted()
    {
        return $this->createQuery()
            ->setOrderings(['position' => QueryInterface::ORDER_ASCENDING])
            ->execute();
    }
}