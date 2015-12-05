<?php

return [
    'plugin' => [
        'name' => 'Genius Contacts',
        'description' => 'Cadastro, configuração e Formulário para Contatos',
    ],
    'contact' => [
        'new' => 'Novo Contato',
        'label' => 'Contato',
        'create_title' => 'Criar Contato',
        'update_title' => 'Editar Contato',
        'preview_title' => 'Visualizar Contato',
        'list_title' => 'Gerenciar Contatos',
    ],
    'setting' => [
        'new' => 'New Setting',
        'label' => 'Setting',
        'create_title' => 'Create Setting',
        'update_title' => 'Sessão Contatos',
        'preview_title' => 'Preview Setting',
        'list_title' => 'Manage Settings',
    ],
    'settings' => [
        'delete_selected_confirm' => 'genius.contacts::lang.settings.delete_selected_confirm',
        'menu_label' => 'Contatos',
        'return_to_list' => 'genius.contacts::lang.settings.return_to_list',
        'delete_confirm' => 'genius.contacts::lang.settings.delete_confirm',
        'delete_selected_success' => 'genius.contacts::lang.settings.delete_selected_success',
        'delete_selected_empty' => 'genius.contacts::lang.settings.delete_selected_empty',
    ],
    'contacts' => [
        'delete_selected_confirm' => 'Delete the selected Contatos?',
        'menu_label' => 'Contatos Recebidos',
        'return_to_list' => 'Voltar para Contatos Recebidos',
        'delete_confirm' => 'Do you really want to delete this Contato?',
        'delete_selected_success' => 'Successfully deleted the selected Contatos.',
        'delete_selected_empty' => 'There are no selected Contatos to delete.',
    ],
    'components' => [
        'form' => [
            'name' => 'Form Component para Contato',
            'description' => 'Formulário básico de contato direto via site.',
        ],
    ],
];