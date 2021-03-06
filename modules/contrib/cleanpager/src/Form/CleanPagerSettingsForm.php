<?php

/**
 * Created by PhpStorm.
 * User: cimpleo
 * Date: 22.06.16
 * Time: 12:48
 */

namespace Drupal\cleanpager\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Defines a form to configure module settings.
 */
class CleanPagerSettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getEditableConfigNames() {
    //empty
  }

  /**
   * {@inheritdoc}
   */
  public function getFormID() {
    return 'cleanpager_settings';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->configFactory->get('cleanpager.settings');
    $settings = $config->get();
    $form['settings'] = array(
      '#tree' => TRUE,
    );
    $form['settings']['cleanpager_pages'] = array(
      '#type' => 'textarea',
      '#title' => t('Pages'),
      '#description' => t('Please set your pages where clean pagination should work. One path - one line.'),
      '#default_value' => isset($settings['cleanpager_pages']) ? $settings['cleanpager_pages'] : '',
    );
    $form['settings']['cleanpager_add_trailing'] = array(
      '#title' => t('Add trailing slash'),
      '#description' => t('Add a trailing slash (/) to all urls generated by Clean Pagination. I.E. "pager_url/page/1/"'),
      '#type' => 'checkbox',
      '#default_value' => isset($settings['cleanpager_add_trailing']) ? $settings['cleanpager_add_trailing'] : FALSE,
    );
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $config = $this->configFactory()->getEditable('cleanpager.settings');
    $form_values = $form_state->getValues();
    $config
      ->set('cleanpager_pages', $form_values['settings']['cleanpager_pages'])
      ->set('cleanpager_add_trailing', $form_values['settings']['cleanpager_add_trailing'])
      ->save();
    parent::submitForm($form, $form_state);
  }

}