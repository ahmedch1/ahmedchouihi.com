<?php

/**
 * ACF Field Groups for Portfolio Blocks
 */

if( function_exists('acf_add_local_field_group') ):

// Skills Block Fields
acf_add_local_field_group(array(
    'key' => 'group_skills_block',
    'title' => 'Skills Block',
    'fields' => array(
        array(
            'key' => 'field_skills_title',
            'label' => 'Section Title',
            'name' => 'section_title',
            'type' => 'text',
            'default_value' => 'Skills & Technologies',
        ),
        array(
            'key' => 'field_skills_categories',
            'label' => 'Skill Categories',
            'name' => 'skills',
            'type' => 'repeater',
            'sub_fields' => array(
                array(
                    'key' => 'field_skill_icon',
                    'label' => 'Icon',
                    'name' => 'icon',
                    'type' => 'text',
                    'default_value' => '🐘',
                ),
                array(
                    'key' => 'field_skill_category_title',
                    'label' => 'Category Title',
                    'name' => 'title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_skill_items',
                    'label' => 'Skills',
                    'name' => 'skills',
                    'type' => 'repeater',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_skill_item',
                            'label' => 'Skill',
                            'name' => 'skill',
                            'type' => 'text',
                        ),
                    ),
                ),
            ),
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/skills',
            ),
        ),
    ),
));

// Projects Block Fields
acf_add_local_field_group(array(
    'key' => 'group_projects_block',
    'title' => 'Projects Block',
    'fields' => array(
        array(
            'key' => 'field_projects_title',
            'label' => 'Section Title',
            'name' => 'section_title',
            'type' => 'text',
            'default_value' => 'Featured Projects',
        ),
        array(
            'key' => 'field_projects_list',
            'label' => 'Projects',
            'name' => 'projects',
            'type' => 'repeater',
            'sub_fields' => array(
                array(
                    'key' => 'field_project_icon',
                    'label' => 'Icon',
                    'name' => 'icon',
                    'type' => 'text',
                    'default_value' => '🚀',
                ),
                array(
                    'key' => 'field_project_title',
                    'label' => 'Project Title',
                    'name' => 'title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_project_description',
                    'label' => 'Description',
                    'name' => 'description',
                    'type' => 'textarea',
                ),
                array(
                    'key' => 'field_project_technologies',
                    'label' => 'Technologies',
                    'name' => 'technologies',
                    'type' => 'repeater',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_project_tech',
                            'label' => 'Technology',
                            'name' => 'technology',
                            'type' => 'text',
                        ),
                    ),
                ),
                array(
                    'key' => 'field_project_link',
                    'label' => 'Project Link',
                    'name' => 'link',
                    'type' => 'url',
                ),
                array(
                    'key' => 'field_project_gradient',
                    'label' => 'Gradient Classes',
                    'name' => 'gradient',
                    'type' => 'text',
                    'default_value' => 'from-blue-400 to-purple-500',
                ),
            ),
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/projects',
            ),
        ),
    ),
));

// Contact Block Fields
acf_add_local_field_group(array(
    'key' => 'group_contact_block',
    'title' => 'Contact Block',
    'fields' => array(
        array(
            'key' => 'field_contact_title',
            'label' => 'Section Title',
            'name' => 'section_title',
            'type' => 'text',
            'default_value' => 'Let\'s Work Together',
        ),
        array(
            'key' => 'field_contact_description',
            'label' => 'Description',
            'name' => 'contact_description',
            'type' => 'textarea',
            'default_value' => 'I\'m always interested in new opportunities and exciting projects.',
        ),
        array(
            'key' => 'field_contact_email',
            'label' => 'Email Address',
            'name' => 'contact_email',
            'type' => 'email',
            'default_value' => 'ahmed@example.com',
        ),
        array(
            'key' => 'field_contact_phone',
            'label' => 'Phone Number',
            'name' => 'contact_phone',
            'type' => 'text',
        ),
        array(
            'key' => 'field_contact_show_form',
            'label' => 'Show Contact Form',
            'name' => 'show_contact_form',
            'type' => 'true_false',
            'default_value' => 0,
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/contact',
            ),
        ),
    ),
));

endif; 