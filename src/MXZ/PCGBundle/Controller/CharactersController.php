<?php

namespace MXZ\PCGBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MXZ\PCGBundle\Entity\Characters;
use MXZ\PCGBundle\Form\CharactersType;
use MXZ\PCGBundle\Form\addXPType;

/**
 * Characters controller.
 *
 */
class CharactersController extends Controller
{

    /**
     * Lists all Characters entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MXZPCGBundle:Characters')->findAll();

        return $this->render('MXZPCGBundle:Characters:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Characters entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Characters();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('characters_show', array('id' => $entity->getId())));
        }

        return $this->render('MXZPCGBundle:Characters:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Characters entity.
     *
     * @param Characters $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Characters $entity)
    {
        $form = $this->createForm(new CharactersType(), $entity, array(
            'action' => $this->generateUrl('characters_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Characters entity.
     *
     */
    public function newAction()
    {
        $entity = new Characters();
        $form   = $this->createCreateForm($entity);

        return $this->render('MXZPCGBundle:Characters:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Characters entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MXZPCGBundle:Characters')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Character entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MXZPCGBundle:Characters:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Characters entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MXZPCGBundle:Characters')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Characters entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MXZPCGBundle:Characters:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Characters entity.
    *
    * @param Characters $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Characters $entity)
    {
        $form = $this->createForm(new CharactersType(), $entity, array(
            'action' => $this->generateUrl('characters_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Characters entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MXZPCGBundle:Characters')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Characters entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('characters_edit', array('id' => $id)));
        }

        return $this->render('MXZPCGBundle:Characters:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Characters entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MXZPCGBundle:Characters')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Characters entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('characters'));
    }

    /**
     * Creates a form to delete a Characters entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('characters_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }

    public function addxpAction($id){

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MXZPCGBundle:Characters')->find($id);

        $addXPForm = $this->createAddXPForm($entity);

        return $this->render('MXZPCGBundle:Characters:addxp.html.twig', array(
            'entity'      => $entity,
            'addxp_form'   => $addXPForm->createView(),
        ));
    }

    /**
     * Character is granted xp after session.
     *
     * @param Characters $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */

    private function createaddXPForm(Characters $entity)
    {
        $form = $this->createForm(new addXPType(), $entity, array(
            'action' => $this->generateUrl('characters_addxp', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'addXP'));

        return $form;
    }

}
