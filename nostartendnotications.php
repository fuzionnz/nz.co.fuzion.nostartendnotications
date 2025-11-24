<?php

require_once 'nostartendnotications.civix.php';

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function nostartendnotications_civicrm_config(&$config) {
  _nostartendnotications_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function nostartendnotications_civicrm_install() {
  _nostartendnotications_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function nostartendnotications_civicrm_enable() {
  _nostartendnotications_civix_civicrm_enable();
}

/**
 * Prevent recurring start stop notifications from going out.
 *
 * @param array $params
 * @param string $context
 *
 * @return bool
 */
function nostartendnotications_civicrm_alterMailParams(&$params, $context) {
  if (!empty($params['valueName']) && $params['valueName'] == 'contribution_recurring_notify') {
    $params['abortMailSend'] = TRUE;
  }

}

/**
 * Functions below this ship commented out. Uncomment as required.
 *

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_preProcess
 *

*/

// /**
//  * Implements hook_civicrm_postInstall().
//  *
//  * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
//  */
// function nostartendnotications_civicrm_postInstall() {
//   _nostartendnotications_civix_civicrm_postInstall();
// }
