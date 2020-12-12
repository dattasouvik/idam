<?php
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Theme\ThemeSettings;
use Drupal\system\Form\ThemeSettingsForm;
use Drupal\Core\Form;

function porto_subtheme_form_system_theme_settings_alter(&$form, Drupal\Core\Form\FormStateInterface $form_state) {

    // ----------- DESIGN -----------
    $form['options']['design'] = array(
        '#type' => 'fieldset',
        '#title' => 'Design',
    );
    // Skins
/*    $form['options']['design']['skin'] = array(
        '#type' => 'fieldset',
        '#title' => '<div class="plus"></div><h3 class="options_heading">Skins</h3>',
    );

    $form['options']['design']['skin']['skin_option'] = array(
        '#type' => 'select',
        '#title' => 'Select a Skin Style:',
        '#default_value' => theme_get_setting('skin_option'),
        '#options' => array(
            'none' => 'None',
            'custom' => 'Custom color',
        ),
    );
    $form['options']['design']['skin']['custom_color'] = array(
        '#type' => 'textfield',
        '#title' => 'Enter code color',
        '#description' => 'Example : #ccc . Get code color at link : https://www.w3schools.com/colors/colors_hex.asp',
        '#default_value' => theme_get_setting('custom_color'),
        '#states' => array (
            'visible' => array(
                'select[name = skin_option]' => array('value' => 'custom')
            )
        )
    );*/
    $form['options']['design']['your_css'] = array(
        '#type' => 'textarea',
        '#title' => 'Add Your Css',
        '#default_value' => theme_get_setting('your_css'),
    );

}