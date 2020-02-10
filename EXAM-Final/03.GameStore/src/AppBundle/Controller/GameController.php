<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Game;
use AppBundle\Form\GameType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GameController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/", name="index")
     */
    public function index()
    {
        $games=$this->getDoctrine()->getRepository(Game::class)->findAll();

        return $this->render("game/index.html.twig", ["games" => $games]);
    }

    /**
     * @param Request $request
     * @Route("/create", name="create")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(Request $request)
    {
        $game = new Game();
        $form = $this->createForm(GameType::class, $game);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($game);
            $em->flush();
            return $this->redirect("/");
        }
        return $this->render("game/create.html.twig", ["game" => $game,
            "form" => $form->createView()]);
    }

    /**
     * @Route("/edit/{id}", name="edit")
     *
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit($id, Request $request)

    {
        $em = $this->getDoctrine()->getManager();
        $game = $em->getRepository(Game::class)->find($id);

        if ($game == null) {
            return $this->redirect("/");
        }
        $form = $this->createForm(GameType::class, $game);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($game);
            $em->flush();
            return $this->redirect("/");
        }

        return $this->render("game/edit.html.twig",["game"=>$game ,"form" => $form->createView()]);
    }

    /**
     * @Route("/delete/{id}", name="delete")
     *
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function delete($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $game = $em->getRepository(Game::class)->find($id);

        if ($game == null) {
            return $this->redirect("/");
        }
        $form = $this->createForm(GameType::class, $game);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($game);
            $em->flush();
            return $this->redirect("/");
        }

        return $this->render("game/delete.html.twig", ["game" => $game, "form" => $form->createView()]);
    }
}
