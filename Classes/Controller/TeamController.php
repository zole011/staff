<?php
namespace Gmbit\Staff\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Gmbit\Staff\Domain\Repository\MemberRepository;

class TeamController extends ActionController
{
    protected MemberRepository $memberRepository;

    public function __construct(MemberRepository $memberRepository)
    {
        $this->memberRepository = $memberRepository;
    }

    public function listAction(): void
    {
        $this->view->assign('members', $this->memberRepository->findAllSorted());
    }

    public function showAction(\Gmbit\Staff\Domain\Model\Member $member): void
    {
        $this->view->assign('member', $member);
    }
}