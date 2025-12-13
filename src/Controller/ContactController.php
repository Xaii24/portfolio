<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Mailer\Mailer;

/**
 * Contact Controller
 *
 */
class ContactController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */

    public $modelClass = false; // Disable model binding

    public function index()
    {
    }

    public function send()
    {
        if ($this->request->is('post')) {
            // Get the submitted form data
            $data = $this->request->getData();

            // Basic validation: Check if fields are filled
            if (
                empty($data['name']) ||
                empty($data['email']) ||
                empty($data['message'])
            ) {
                $this->Flash->error(__('Please fill out all fields.'));
                return $this->redirect(['action' => 'index']);
            }

            // Send email
            try {
                $mailer = new Mailer('default');
                $mailer
                    ->setTo('xaiveryr@outlook.com') // The recipient email
                    ->setSubject('New Contact Message')
                    ->setFrom($data['email']) // Use the sender's email as the "from" address
                    ->deliver(
                        "Name: {$data['name']}\nEmail: {$data['email']}\nMessage: {$data['message']}"
                    );

                // Success message
                $this->Flash->success(
                    __('Your message has been sent successfully!')
                );
            } catch (\Exception $e) {
                // Error handling: Show error message if email fails
                $this->Flash->error(
                    __(
                        'There was an error sending your message. Please try again.'
                    )
                );
                // Optionally log the error
                $this->log($e->getMessage(), 'error');
            }

            // Redirect back to the contact page
            return $this->redirect(['action' => 'index']);
        }
    }

    /**
     * View method
     *
     * @param string|null $id Contact id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contact = $this->Contact->get($id, contain: []);
        $this->set(compact('contact'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contact = $this->Contact->newEmptyEntity();
        if ($this->request->is('post')) {
            $contact = $this->Contact->patchEntity(
                $contact,
                $this->request->getData()
            );
            if ($this->Contact->save($contact)) {
                $this->Flash->success(__('The contact has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(
                __('The contact could not be saved. Please, try again.')
            );
        }
        $this->set(compact('contact'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contact id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contact = $this->Contact->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contact = $this->Contact->patchEntity(
                $contact,
                $this->request->getData()
            );
            if ($this->Contact->save($contact)) {
                $this->Flash->success(__('The contact has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(
                __('The contact could not be saved. Please, try again.')
            );
        }
        $this->set(compact('contact'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contact id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contact = $this->Contact->get($id);
        if ($this->Contact->delete($contact)) {
            $this->Flash->success(__('The contact has been deleted.'));
        } else {
            $this->Flash->error(
                __('The contact could not be deleted. Please, try again.')
            );
        }

        return $this->redirect(['action' => 'index']);
    }
}
