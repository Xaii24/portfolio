<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Portfolio Controller
 *
 */
class PortfolioController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */

    public function index()
    {
        $this->set('message', 'Welcome to my portfolio!');
    }

    /**
     * View method
     *
     * @param string|null $id Portfolio id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view()
    {
        $projects = [
            [
                'title' => 'GameZone',
                'description' =>
                    'A video game review web app where users can post, explore, and discuss articles with an interactive comment system. Built with CakePHP, MySQL, HTML, and CSS.',
                'images' => [
                    '/img/gamezone1.png',
                    '/img/gamezone2.png',
                    '/img/gamezone3.png',
                    '/img/gamezone4.png',
                ],
                'link' => 'https://gamezone123-a74f79042538.herokuapp.com/',
            ],
            [
                'title' => 'Encrypta Chat',
                'description' =>
                    'A fully operational encrypted chat app with anonymous and regular sign-in, user blocking, group chats, password reset, push notifications, badge count, a custom lock screen, live chat indicators, asynchronous message deletion across devices, custom usernames, and more. Built with Swift, SwiftUI, and Firebase. Available on the Apple Store.',
                'videos' => [
                    // Using 'videos' for an array of video paths
                    '/videos/encrypta1.mp4',
                    '/videos/encrypta2.mp4', // Add second video here
                    '/videos/encrypta3.mp4',
                ],
                'link' =>
                    'https://apps.apple.com/us/app/encrypta-chat/id6480382145?uo=2',
            ],
        ];

        $this->set(compact('projects'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $portfolio = $this->Portfolio->newEmptyEntity();
        if ($this->request->is('post')) {
            $portfolio = $this->Portfolio->patchEntity(
                $portfolio,
                $this->request->getData()
            );
            if ($this->Portfolio->save($portfolio)) {
                $this->Flash->success(__('The portfolio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(
                __('The portfolio could not be saved. Please, try again.')
            );
        }
        $this->set(compact('portfolio'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Portfolio id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $portfolio = $this->Portfolio->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $portfolio = $this->Portfolio->patchEntity(
                $portfolio,
                $this->request->getData()
            );
            if ($this->Portfolio->save($portfolio)) {
                $this->Flash->success(__('The portfolio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(
                __('The portfolio could not be saved. Please, try again.')
            );
        }
        $this->set(compact('portfolio'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Portfolio id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $portfolio = $this->Portfolio->get($id);
        if ($this->Portfolio->delete($portfolio)) {
            $this->Flash->success(__('The portfolio has been deleted.'));
        } else {
            $this->Flash->error(
                __('The portfolio could not be deleted. Please, try again.')
            );
        }

        return $this->redirect(['action' => 'index']);
    }
}
