<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CakePHP Controller
 *
 */
class CakePHPController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index($id = null)
    {
        //
        // Simple text to pass to the view
        $text1 = 'This is text to be displayed on the CakePHP index page.';

        // Pass the text to the view
        $this->set(compact('text1'));
        // Pass data to the view
    }

    /**
     * View method
     *
     * @param string|null $id Cake P H P id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cakePHP = $this->CakePHP->get($id, contain: []);
        $this->set(compact('cakePHP'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cakePHP = $this->CakePHP->newEmptyEntity();
        if ($this->request->is('post')) {
            $cakePHP = $this->CakePHP->patchEntity(
                $cakePHP,
                $this->request->getData()
            );
            if ($this->CakePHP->save($cakePHP)) {
                $this->Flash->success(__('The cake p h p has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(
                __('The cake p h p could not be saved. Please, try again.')
            );
        }
        $this->set(compact('cakePHP'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cake P H P id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cakePHP = $this->CakePHP->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cakePHP = $this->CakePHP->patchEntity(
                $cakePHP,
                $this->request->getData()
            );
            if ($this->CakePHP->save($cakePHP)) {
                $this->Flash->success(__('The cake p h p has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(
                __('The cake p h p could not be saved. Please, try again.')
            );
        }
        $this->set(compact('cakePHP'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cake P H P id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cakePHP = $this->CakePHP->get($id);
        if ($this->CakePHP->delete($cakePHP)) {
            $this->Flash->success(__('The cake p h p has been deleted.'));
        } else {
            $this->Flash->error(
                __('The cake p h p could not be deleted. Please, try again.')
            );
        }

        return $this->redirect(['action' => 'index']);
    }
}
